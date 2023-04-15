<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('searchCanoe'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('homePage',      'HomePageCtrl');

Utils::addRoute('login',         'LoginCtrl');       
Utils::addRoute('logout',        'LoginCtrl',       ['user','admin']); 
Utils::addRoute('register',      'RegisterCtrl');

Utils::addRoute('searchCanoe',   'SearchCanoeCtrl');
Utils::addRoute('search',        'SearchCanoeCtrl');
Utils::addRoute('select',        'SearchCanoeCtrl');

Utils::addRoute('canoeNew',      'CanoeEditCtrl',	['user','admin']);
Utils::addRoute('canoeEdit',     'CanoeEditCtrl');
Utils::addRoute('canoeSave',     'CanoeEditCtrl',	['user','admin']);
Utils::addRoute('canoeDelete',   'CanoeEditCtrl',	['admin']);
