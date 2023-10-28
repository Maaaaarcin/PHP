<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('rola'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('index',         'IndexCtrl');
Utils::addRoute('buy',           'IndexCtrl', ['User', 'Admin']);
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl', ['User', 'Admin']);
Utils::addRoute('rola',          'LoginCtrl');
Utils::addRoute('admin',         'AdminCtrl', ['Admin']);
Utils::addRoute('gameAdd',       'AdminCtrl', ['Admin']);
Utils::addRoute('register',      'RegisterCtrl');