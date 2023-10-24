<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('rola'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('index',         'IndexCtrl');
Utils::addRoute('buy',           'IndexCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('rola',          'LoginCtrl');
Utils::addRoute('admin',         'AdminCtrl');
Utils::addRoute('gameAdd',       'AdminCtrl');
Utils::addRoute('register',      'RegisterCtrl');