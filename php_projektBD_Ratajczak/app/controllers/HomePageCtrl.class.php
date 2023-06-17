<?php

namespace app\controllers;

use app\forms\SearchForm;
use app\transfer\Pagination;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

class HomePageCtrl {
    private $canoesData;
    private $searchForm;
    private $pagination;

    public function __construct() 
    {
        $this->searchForm = new SearchForm();
        $this->pagination = new Pagination();
    }

    public function action_homePage() 
    {
        $this->pagination->updateSelection(0, sizeof(Utils::getWholeCanoesData()));
        $this->canoesData = Utils::getCanoesData($this->pagination->dbFrom, $this->pagination->dbTo);
        $this->generateView();
    }

    public function action_selectPage()
    {
        $selected = ParamUtils::getFromRequest('selected');
        $this->pagination->updateSelection($selected, sizeof(Utils::getWholeCanoesData()));
        $this->canoesData = Utils::getCanoesData($this->pagination->dbFrom, $this->pagination->dbTo);
        $this->generateTableView();
    }

    public function generateView() 
    {
        Utils::getDataForSearchBar($this->searchForm);
        App::getSmarty()->assign('page_title','Lista Kajaków');
        App::getSmarty()->assign('page_description','Strona Główna');
        App::getSmarty()->assign('typesData',$this->searchForm->typesData);
        App::getSmarty()->assign('modelsData',$this->searchForm->modelsData);
        App::getSmarty()->assign('productionDatesData',$this->searchForm->productionDatesData);
        App::getSmarty()->assign('pricesData',$this->searchForm->pricesData);
        App::getSmarty()->assign('data', $this->canoesData);
        App::getSmarty()->assign('pagination',$this->pagination);
        
        App::getSmarty()->display('HomePage.tpl');
    }

    public function generateTableView() 
    {
        Utils::getDataForSearchBar($this->searchForm);
        App::getSmarty()->assign('page_title','Lista Kajaków');
        App::getSmarty()->assign('page_description','Strona Główna');
        App::getSmarty()->assign('typesData',$this->searchForm->typesData);
        App::getSmarty()->assign('modelsData',$this->searchForm->modelsData);
        App::getSmarty()->assign('productionDatesData',$this->searchForm->productionDatesData);
        App::getSmarty()->assign('pricesData',$this->searchForm->pricesData);
        App::getSmarty()->assign('data', $this->canoesData);
        App::getSmarty()->assign('pagination',$this->pagination);
        
        App::getSmarty()->display('Table.tpl');
    }
}
