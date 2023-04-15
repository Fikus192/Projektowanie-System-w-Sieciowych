<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\SearchForm;

class HomePageCtrl {

    private $table;
    private $form;
    private $searchForm;

    public function __construct() {

        $this->searchForm = new SearchForm();
    }

    public function action_homePage() {

        $this->generateView();
    }

    

    public function generateView() {
        App::getSmarty()->assign('page_title','Wypożyczalnia kajaków');
        App::getSmarty()->assign('page_description','Strona Główna');	
        App::getSmarty()->display('HomePage.tpl');
    }
}
