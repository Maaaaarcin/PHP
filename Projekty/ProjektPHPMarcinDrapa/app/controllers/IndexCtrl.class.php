<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\Form;

class IndexCtrl {

    private $games;
    private $limit;
    private $offset;
    private $numer;
    private $user;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        // $this->form = new LoginForm();
    }

    public function validate() {
        $this->user = SessionUtils::loadObject("user", true);
    }

    public function games() {
        $this->validate();
        $this->pagination();
        
        $this->games = App::getDB()->query("
            SELECT games.game_id, games.title, games.price, games.picture
            FROM games
            WHERE NOT EXISTS (
                SELECT 1
                FROM orders
                WHERE orders.game_id = games.game_id
                AND orders.user_id = ".$this->user->id."
            )
            LIMIT ". $this->limit ." OFFSET ".$this->offset ."
        ")->fetchAll();
    }

    public function action_buy() {
        $this->validate();
        $points = SessionUtils::load("points", true);
        $game_id = ParamUtils::getFromCleanURL(1, true);
        if(!is_null($this->user->id)) {
            $price = App::getDB()->sum("games", [
                "price"
            ], [
                "game_id" => $game_id
            ]);
            if(($points-$price)<0){
                Utils::addErrorMessage("Too low on points");
            } else{
                App::getDB()->insert("orders", [
                    "game_id" => $game_id,
                    "user_id" => $this->user->id,
                    "date" => date("Y/m/d"),
                ]);
                App::getDB()->update("users", [
                    "points[-]" => $price,
                ], [
                    "user_id" => $this->user->id
                ]);
                $points = App::getDB()->sum("users", [
                    "points"
                ], [
                    "user_id" => $this->user->id
                ]);
                SessionUtils::store("points", $points);
            }
            App::getRouter()->redirectTo("index");
        }
    }

    public function pagination() {
        $games = App::getDB()->query("
            SELECT games.game_id, games.title, games.price, games.picture
            FROM games
            WHERE NOT EXISTS (
                SELECT 1
                FROM orders
                WHERE orders.game_id = games.game_id
                AND orders.user_id = ".$this->user->id."
            )
        ")->fetchAll();

        $this->limit = 3;
        $modulo = count($games) % $this->limit;
        $Pages = (count($games) - $modulo) / $this->limit;
        if($modulo>0) {
            $Pages++;
        }
        $this->numer = array_fill(0, $Pages, 0);
        for($i=0; $i<count($this->numer); $i++) {
            $this->numer[$i] = $i+1;
        }
        $this->offset();
    }

    public function offset() {
        $page = ParamUtils::getFromCleanURL(1, true);
        if($page>1){
            $this->offset = $page * $this->limit - $this->limit;
        } else {
            $this->offset = 0;
        }
    }

    public function action_index() {
        $this->games();
        App::getSmarty()->assign("games", $this->games);
        App::getSmarty()->assign("numer", $this->numer);
        App::getSmarty()->assign("points", SessionUtils::load("points", true));
        App::getSmarty()->assign("user", SessionUtils::loadObject("user", true));
        App::getSmarty()->display('index.tpl');
    }
}
