<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;
use app\transfer\User;

class RegisterCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->email = ParamUtils::getFromRequest('email');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->name)) {
            Utils::addErrorMessage('Nie podano imienia');
        }
        if (empty($this->form->surname)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        }
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (empty($this->form->email)) {
            Utils::addErrorMessage('Nie podano maila');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_register() {
        if($this->validate()) {
            $account = App::getDB()->count("users", [
                "email" => $this->form->email
            ]);

            if($account<2){
                $account = App::getDB()->count("users", [
                    "login" => $this->form->login,
                ]);
                
                if($account==0){
                    App::getDB()->insert("users", [
                        "name" => $this->form->name,
                        "surname" => $this->form->surname,
                        "login" => $this->form->login,
                        "pass" => $this->form->pass,
                        "email" => $this->form->email,
                    ]);
                    Utils::addInfoMessage("Konto zostało założone, zaloguj się");
                    App::getRouter()->forwardTo("rola");
                }
                else{
                    Utils::addErrorMessage("Takie konto już istnieje");
                }
            }
            else{
                Utils::addErrorMessage("Osiągnieto maksimum kont na podanym adresie email");
            }
        }
        Utils::addErrorMessage("Niepoprawne dane");
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('register.tpl');
    }

}
