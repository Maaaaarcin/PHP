<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;
use app\transfer\User;

class LoginCtrl {

    private $form;
    private $ROLE = "Guest";
    private $account;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_login() {
        $this->validate();
        if(empty($this->account->login)){
            $this->account = App::getDB()->get("users", [
                "[><]roles" => ["role_id"=>"role_id"]
            ], [
                "users.user_id",
                "users.login",
                "roles.role",
                "users.points"
            ], [
                "login" => $this->form->login,
                "pass" => $this->form->pass
            ]);
            if(!empty($this->account)){
                $points = $this->account["points"];
                $this->account = new User($this->account["user_id"], $this->account["login"], $this->account["role"], $this->account["points"]);
                SessionUtils::storeObject("user", $this->account);
                SessionUtils::store("points", $points);
                App::getRouter()->forwardTo("index");
            }
            Utils::addErrorMessage("Takie konto nie istnieje");
            $this->generateView();
        }
        else{
            App::getRouter()->forwardTo("index");
        }
    }

    public function action_rola() {
        $user = SessionUtils::loadObject("user", true);
        if(empty($user->role)) {
            $user = new User(0, null, $this->ROLE, null);
            SessionUtils::storeObject("user", $user);
        }
        App::getRouter()->redirectTo("index");
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('rola');
    }

    public function generateView() {
        App::getSmarty()->assign("points", SessionUtils::load("points"));
        App::getSmarty()->assign("user", SessionUtils::loadObject("user", true));
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('login.tpl');
    }
}
