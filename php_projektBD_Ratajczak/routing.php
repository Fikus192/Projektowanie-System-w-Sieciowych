<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('register'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('loginShow'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('canoeList',    'CanoeListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl',       ['user','admin']); 
Utils::addRoute('register',      'RegisterCtrl');
Utils::addRoute('canoeNew',     'CanoeEditCtrl',	['user','admin']);
Utils::addRoute('canoeEdit',    'CanoeEditCtrl',	['user','admin']);
Utils::addRoute('canoeSave',    'CanoeEditCtrl',	['user','admin']);
Utils::addRoute('canoeDelete',  'CanoeEditCtrl',	['admin']);