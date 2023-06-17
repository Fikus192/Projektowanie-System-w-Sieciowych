<?php

namespace app\controllers;

use app\forms\CanoeForm;
use app\forms\SearchForm;

use core\App;
use core\ParamUtils;
use core\Utils;
use core\Validator;

class ProductManagmentCtrl 
{
    private $canoeForm;
    private $searchForm;
    private $id_canoe;

	public function __construct()
    {
        $this->canoeForm = new CanoeForm();
        $this->searchForm = new SearchForm();
	}
	
	public function action_manageProductsShow()
    {
        App::getRouter()->forwardTo("homePage");
	}

    public function action_addCanoeShow()
    {
		$this->generateAddCanoeView();
	}

    public function action_addCanoe()
    {
        $this->getParamsForNewCanoe();

        if($this->validate())
        {
            $this->insertToDB();
			Utils::addInfoMessage('Pomyślnie dodano kajak :).');
		    $this->action_manageProductsShow();
        }
        else
        {
            $this->generateAddCanoeView();
        }
	}

    public function action_deleteCanoe()
    {
        $this->getParamsForDelete();

        App::getDB()->delete("canoe", ["id_canoe" => $this->id_canoe]);
		Utils::addInfoMessage("Usunięto kajak o numerze ID: $this->id_canoe");

		$this->action_manageProductsShow();
	}

    private function getParamsForNewCanoe()
    {
        $this->canoeForm->type = ParamUtils::getFromRequest('type');
        $this->canoeForm->model = ParamUtils::getFromRequest('model');
        $this->canoeForm->production_date = ParamUtils::getFromRequest('production_date');
        $this->canoeForm->price = ParamUtils::getFromRequest('price');
    }

    private function getParamsForDelete()
    {
        $this->id_canoe = ParamUtils::getFromRequest('buttonValue');
    }

    private function validate() 
    {
        $typeValid = Utils::isPhraseValid($this->canoeForm->type, 'type', 20);
        $modelValid = Utils::isPhraseValid($this->canoeForm->model, 'model', 40);
        $productionDateValid = Utils::isPhraseValid($this->canoeForm->production_date, 'production_date', 40);
        $priceValid = Utils::isPhraseValid($this->canoeForm->price, 'price', 15);

        $priceValidator = new Validator();
        $p = $priceValidator->validate($this->canoeForm->price, [
            'required' => true,
            'required_message' => "Cena jest wymagana.",
            'validator_message' => "Podaj cenę w liczbie."
        ]);

        $isUnique = $this->isUniqueInDB();
        if(!$isUnique)
        {
			Utils::addErrorMessage('Istnieje już taki kajak w bazie danych.');
        }
		
		return ($typeValid && $modelValid && $priceValid && $productionDateValid && $priceValidator->isLastOK() && $isUnique);
	}

    private function isUniqueInDB()
    {
        $data = App::getDB()->select("canoe", ["id_canoe"], [
            "type" => $this->canoeForm->type,
            "model" => $this->canoeForm->model,
            "production_date" => $this->canoeForm->production_date,
            "price" => $this->canoeForm->price
        ]);

        return empty($data);
    }

    private function insertToDB()
    {
        App::getDB()->insert("canoe", [
            "type" => $this->canoeForm->type,
            "model" => $this->canoeForm->model,
            "production_date" => $this->canoeForm->production_date,
            "price" => $this->canoeForm->price
        ]);
	}

    private function generateAddCanoeView(){
		App::getSmarty()->assign('page_title','Wprowadzenie nowego kajaka.');
		App::getSmarty()->display('NewCanoeView.tpl');
	}
}
