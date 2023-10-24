<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\Form;

class AdminCtrl {

    private $user;
    private $title;
    private $price;
    private $picture;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        // $this->form = new LoginForm();
    }

    public function validate() {
        $this->user = SessionUtils::loadObject("user", true);
        $this->title = ParamUtils::getFromRequest("title", true);
        $this->price = ParamUtils::getFromRequest("price", true);
        $this->picture = ParamUtils::getFromRequest("picture", true);

        if (!isset($this->title))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->title)) {
            Utils::addErrorMessage('What is game title');
        }
        if (empty($this->price)) {
            Utils::addErrorMessage('What is game price');
        }
        if (empty($this->picture)) {
            Utils::addErrorMessage('What is game picture');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_gameAdd() {
        if($this->validate()) {
        App::getDB()->insert("games", [
            "title" => $this->title,
            "price" => $this->price,
            "picture" => $this->picture
        ]);
        }
        App::getRouter()->redirectTo("index");
    }

    public function action_admin() {
        App::getSmarty()->assign("points", SessionUtils::load("points", true));
        App::getSmarty()->assign("user", SessionUtils::loadObject("user", true));
        App::getSmarty()->display('admin.tpl');
    }
}
