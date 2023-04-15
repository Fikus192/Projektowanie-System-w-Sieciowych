<?php

namespace app\controllers;

use app\transfer\Pagination;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\SearchForm;

class SearchCanoeCtrl {

    private $canoesData; // pobranie rekordów z bazy danych
    private $pagination;
    private $searchForm; //dane formularza wyszukiwania

    public function __construct() {

        $this->searchForm = new SearchForm();
        $this->pagination = new Pagination();
    }

    public function action_searchCanoe() {

        $this->searchForm->model = ParamUtils::getFromRequest('model');
        $this->searchForm->type = ParamUtils::getFromRequest('type');

        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->searchForm->model) && strlen($this->searchForm->model) > 0) {
            $search_params['model[~]'] = $this->searchForm->model . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
        if (isset($this->searchForm->type) && strlen($this->searchForm->type) > 0) {
            $search_params['type[~]'] = $this->searchForm->type . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po modelu i typie
        $where ["ORDER"] = "model";
        $where ["ORDER"] = "type";
        //wykonanie zapytania

            $this->canoesData = App::getDB()->select("canoe",
                ["id_canoe", "type", "model", "production_date", "price"], 
                $where);

        $this->generateView();
    }

    public function action_search() {
        $this->pagination->updateSelection(0, sizeof(Utils::getAllCanoes()));
        $this->canoesData = Utils::getCanoesData(
                            $this->pagination->dbFrom, 
                            $this->pagination->dbTo);
        $this->generateView();
    }

    public function action_select() {
        $selected = ParamUtils::getFromRequest('selected');
        $this->pagination->updateSelection($selected, sizeof(Utils::getAllCanoes()));
        $this->canoesData = Utils::getCanoesData(
                            $this->pagination->dbFrom,
                            $this->pagination->dbTo);
        $this->generateTableView();
    }

    public function generateTableView() {
        App::getSmarty()->assign('page_title','Wypożyczalnia kajaków');
        App::getSmarty()->assign('type', $this->searchForm->type);
        App::getSmarty()->assign('model'. $this->searchForm->model);
        App::getSmarty()->assign('data', $this->canoesData);
        App::getSmarty()->assign('pagination', $this->pagination);
        App::getSmarty()->display('Table.tpl');
    }

    public function generateView() {
        App::getSmarty()->assign('page_title','Wypożyczalnia kajaków');
        App::getSmarty()->assign('type', $this->searchForm->type);
        App::getSmarty()->assign('model'. $this->searchForm->model);
        App::getSmarty()->assign('data', $this->canoesData);
        App::getSmarty()->assign('pagination', $this->pagination);
        App::getSmarty()->display('SearchCanoe.tpl');
    }
    

}
