<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homePage'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('loginShow'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

// Strona główna ze stronnicowaniem orazem filtrowaniem zapytań
Utils::addRoute('homePage', 'HomePageCtrl');
Utils::addRoute('selectPage', 'HomePageCtrl');
Utils::addRoute('processFiltering', 'FilteringCtrl');

// Panel logowania
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl', ['user', 'admin']);

// Panel rejestracji
Utils::addRoute('registerShow', 'RegisterCtrl');
Utils::addRoute('register', 'RegisterCtrl');

// Panel użytkownika
Utils::addRoute('accountShow', 'AccountCtrl', ['user']);
Utils::addRoute('accountUpdate', 'AccountCtrl', ['user']);

// Panel admina użytkowników
Utils::addRoute('manageAccountsShow', 'AccountManagmentCtrl', ['admin']);
Utils::addRoute('addUserShow', 'AccountManagmentCtrl', ['admin']);
Utils::addRoute('addUser', 'AccountManagmentCtrl', ['admin']);
Utils::addRoute('resetPassword', 'AccountManagmentCtrl', ['admin']);
Utils::addRoute('delete', 'AccountManagmentCtrl', ['admin']);

// Panel admina produktów
Utils::addRoute('manageProductsShow', 'ProductManagmentCtrl', ['admin']);
Utils::addRoute('addCanoeShow', 'ProductManagmentCtrl', ['admin']);
Utils::addRoute('addCanoe', 'ProductManagmentCtrl', ['admin']);
Utils::addRoute('deleteCanoe', 'ProductManagmentCtrl', ['admin']);

// Rezerwacje
Utils::addRoute('reservationsShow', 'ReservationsCtrl', ['user']);
Utils::addRoute('processBooking', 'ReservationsCtrl', ['user']);
Utils::addRoute('processReturned', 'ReservationsCtrl', ['user']);
Utils::addRoute('reservationsProcessFiltering', 'ReservationsCtrl', ['user']);
