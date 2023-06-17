<?php

namespace app\controllers;

use app\forms\SearchForm;

use core\App;
use core\ParamUtils;
use core\Utils;

class ReservationsCtrl 
{
    public $canoesData;
    public $searchForm;

    public function __construct()
    {
        $this->searchForm = new SearchForm();
	}
	
	public function action_processBooking()
    {
        $user = unserialize($_SESSION['user']);
        $id_canoe = ParamUtils::getFromRequest('buttonValue');

		$this->insertToDB($user, $id_canoe);
		Utils::addInfoMessage("Pomyślnie wypożyczono kajak o numerze ID: $id_canoe");
		App::getRouter()->forwardTo("homePage");
	}

    public function action_processReturned()
    {
        $id_canoe = ParamUtils::getFromRequest('buttonValue');

        $this->removeFromDB($id_canoe);
		Utils::addInfoMessage("ID Kajaka: $id_canoe pomyślnie zwrócono.");
        App::getRouter()->forwardTo("homePage");
    }

    public function action_reservationsShow()
    {
        $user = unserialize($_SESSION['user']);
        $this->canoesData = Utils::getCanoesDataForUserId($user->id_user);
        Utils::getDataForSearchBarReservations($this->searchForm);
        $this->generateSearchView();
    }

    public function action_reservationsProcessFiltering()
    {
        $action = ParamUtils::getFromRequest('buttonValue');

        if(strcmp($action, "reset") == 0)
        {
		    $this->action_reservationsShow();
        }
        else
        {
            $this->filterCanoeView();
        }
    }

    private function insertToDB($user, $id_canoe)
    {
        App::getDB()->insert("rent", [
            "start_rent" => date("Y-m-d"),
            "rent_id_canoe" => $id_canoe,
            "rent_id_user" => $user->id_user
        ]);

        App::getDB()->update("canoe", ['id_rent'=> App::getDB()->id()], [
            "id_canoe" => $id_canoe
        ]);
	}

    private function removeFromDB($id_canoe)
    {
        App::getDB()->update("canoe", ['id_rent'=> NULL], [
            "id_canoe" => $id_canoe
        ]);

        App::getDB()->delete("rent", [
            "rent_id_canoe" => $id_canoe, 
        ]);
    }

    public function filterCanoeView()
    {
        ParamUtils::getParamsForFiltering($this->searchForm);
        Utils::getDataForSearchBarReservations($this->searchForm);
        $this->canoesData = Utils::getCanoesDataFromQuery($this->searchForm);

        if(!empty($this->canoesData))
        {
            $user = unserialize($_SESSION['user']);
            $idsUser = App::getDB()->select("rent", ["id_rent"], [
                "rent_id_user" => $user->id_user]);
            $filteredArray = array();

            foreach($this->canoesData as $canoe)
            {
                if(in_array($canoe["id_rent"], $idsUser))
                {
                    array_push($filteredArray, $canoe);
                }
            }

            $this->canoesData = $filteredArray;
        }

		$this->generateSearchView();
	}

    private function generateSearchView(){

		App::getSmarty()->assign('page_title', "Rezerwacje");
        App::getSmarty()->assign('typesData',$this->searchForm->typesData);
        App::getSmarty()->assign('modelsData',$this->searchForm->modelsData);
        App::getSmarty()->assign('productionDatesData',$this->searchForm->productionDatesData);
        App::getSmarty()->assign('pricesData',$this->searchForm->pricesData);
        App::getSmarty()->assign('data', $this->canoesData);

		App::getSmarty()->display('ReservationsView.tpl');
	}
}
