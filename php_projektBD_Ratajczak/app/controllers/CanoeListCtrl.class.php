<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\CanoeSearchForm;
use app\forms\CanoeEditForm;

class CanoeListCtrl {

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new CanoeEditForm();
        $this->form = new CanoeSearchForm();
    }

    public function action_CanoeList() {

        $this->form->model = ParamUtils::getFromRequest('model');

        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->model) && strlen($this->form->model) > 0) {
            $search_params['model[~]'] = $this->form->model . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po modelu
        $where ["ORDER"] = "model";
        //wykonanie zapytania

            $this->records = App::getDB()->select("canoe",
                ["ID_Canoe", "type", "model", "productiondate", "price"], 
                $where);

        $this->generateView();
    }

        public function generateView() {
            App::getSmarty()->assign('page_title','Wypożyczalnia kajaków');
            App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
            App::getSmarty()->assign('Canoe', $this->records);  // lista rekordów z bazy danych
            App::getSmarty()->display('CanoeList.tpl');
        }
    

}
