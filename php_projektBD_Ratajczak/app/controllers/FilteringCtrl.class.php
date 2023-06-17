<?php

namespace app\controllers;

use app\forms\SearchForm;

use core\App;
use core\ParamUtils;
use core\Utils;

class FilteringCtrl 
{
    private $canoesData;
    private $searchForm;


	public function __construct()
    {
        $this->searchForm = new SearchForm();
	}
	
    public function action_processFiltering()
    {
        $action = ParamUtils::getFromRequest('buttonValue');

        if(strcmp($action, "reset") == 0)
        {
		    App::getRouter()->forwardTo("homePage");
        }
        else
        {
            $this->filterCanoeView();
        }
    }

    public function filterCanoeView()
    {
        ParamUtils::getParamsForFiltering($this->searchForm);
        $this->canoesData = Utils::getCanoesDataFromQuery($this->searchForm);
		$this->generateView();
	}

    private function generateView(){
        Utils::getDataForSearchBar($this->searchForm);

		App::getSmarty()->assign('page_title','Filtrowanie');
        App::getSmarty()->assign('typesData',$this->searchForm->typesData);
        App::getSmarty()->assign('modelsData',$this->searchForm->modelsData);
        App::getSmarty()->assign('productionDatesData',$this->searchForm->productionDatesData);
        App::getSmarty()->assign('pricesData',$this->searchForm->pricesData);
        App::getSmarty()->assign('data',$this->canoesData);

		App::getSmarty()->display('HomePage.tpl');
	}
}
