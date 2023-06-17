<?php

namespace core;

/**
 * Wrapper class for basic utility functions
 *
 * @author Przemysław Kudłacik
 */
class Utils {

    public static function addRoute($action, $controller, $roles = null) {
        App::getRouter()->addRoute($action, $controller, $roles);
    }

    public static function addRouteEx($action, $path, $controller, $method, $roles = null) {
        App::getRouter()->addRouteEx($action, $path, $controller, $method, $roles);
    }

    public static function addErrorMessage($text, $index = null) {
        App::getMessages()->addMessage(new Message($text, Message::ERROR), $index);
    }

    public static function addInfoMessage($text, $index = null) {
        App::getMessages()->addMessage(new Message($text, Message::INFO), $index);
    }

    public static function addWarningMessage($text, $index = null) {
        App::getMessages()->addMessage(new Message($text, Message::WARNING), $index);
    }

    private static function _url_maker($action, $params = null) {
        $url = $action;
        if ($params != null && is_array($params)) {
            foreach ($params as $key => $value) {
                if (App::getConf()->clean_urls) {
                    $url .= '/';
                } else {
                    $url .= '&' . $key . '=';
                }
                $url .= $value;
            }
        }
        return $url;
    }

    private static function _url_maker_noclean($action, $params = null) {
        $url = $action;
        if (App::getConf()->clean_urls) {
            $url .= '?';
        }
        if ($params != null && is_array($params)) {
            $first = true;
            foreach ($params as $key => $value) {
                if ($first && App::getConf()->clean_urls){
                    $url .= $key . '=' . $value;
                    $first = false;
                } else {
                    $url .= '&' . $key . '=' . $value;
                }
            }
        }
        return $url;
    }
    public static function URL($action, $params = null) {       
        return App::getConf()->action_url . self::_url_maker($action, $params);
    }

    public static function relURL($action, $params = null) {       
        return App::getConf()->action_root . self::_url_maker($action, $params);
    }

    public static function URL_noclean($action, $params = null) {       
        return App::getConf()->action_url . self::_url_maker_noclean($action, $params);
    }

    public static function relURL_noclean($action, $params = null) {       
        return App::getConf()->action_root . self::_url_maker_noclean($action, $params);
    }

    public static function isLoginValid($login)
    {
        $loginValidator = new Validator();
	    $login = $loginValidator->validate($login, [
  	    	'trim' => true,
  	    	'required' => true,
  	    	'required_message' => 'Login jest wymagany.',
  	    	'min_length' => 3,
  	    	'validator_message' => 'Login powinien zawierać conajmniej 3 znaki.'
	    ]);

        return $loginValidator->isLastOK();
    }

    public static function isPasswordValid($password)
    {
        $passValidator = new Validator();
        $pass = $passValidator->validate($password, [
            'required' => true,
            'required_message' => 'Hasło jest wymagane.',
            'min_length' => 5,
            'validator_message' => 'Hasło powinno zawierać conajmniej 5 znaków.'
        ]);

        return $passValidator->isLastOK();
    }

    public static function isEmailValid($email)
    {
        $emailValidator = new Validator();
        $email = $emailValidator->validate($email, [
            'required' => true,
            'email' => true,
            'required_message' => 'Email jest wymagany.',
            'validator_message' => 'Email nie wygląda na prawdziwy.'
        ]);

        return $emailValidator->isLastOK();
    }

    public static function isPhoneNumberValid($PhoneNumber)
    {
        $PhoneNumberValidator = new Validator();
        $PhoneNumber = $PhoneNumberValidator->validate($PhoneNumber, [
            'max_length' => 12,
            'validator_message' => 'Numer telefonu jest za długi.'
        ]);

        return $PhoneNumberValidator->isLastOK();
    }

    public static function isPhraseValid($phrase, $type, $maxLength)
    {
        $phraseValidator = new Validator();
        $p = $phraseValidator->validate($phrase, [
            'required' => true,
            'required_message' => "$type jest wymagany.",
            'max_length' => $maxLength,
            'validator_message' => "$type powinien posiadać $maxLength znaków."
        ]);

        return $phraseValidator->isLastOK();
    }    

    public static function getIdRole($name) {
	    $id_role = App::getDB()->select("role", "id_role", [
	    	"name" => $name
	    ]);

	    return "$id_role[0]";
    }

    public static function getWholeCanoesData(){
        return App::getDB()->select("canoe", "*");
	}

    public static function getCanoesData($from, $to) {
        return App::getDB()->select("canoe", "*", ['LIMIT' => [$from, $to]]);
    }

    public static function getCanoesDataForUserId($id_user)
    {
        $canoesIds = App::getDB()->select("rent", "rent_id_canoe", [
            "rent_id_user" => $id_user]);
        
        if(!empty($canoesIds))
        {
            $canoesData = App::getDB()->select("canoe", "*", ["id_canoe" => $canoesIds]);
            return $canoesData;
        }
        else
        {
            return array();
        }
    }

    public static function getTypeList()
    {
        $types = App::getDB()->select("canoe", "type");
        $uniqueTypes = array_unique($types);
        sort($uniqueTypes);
        return $uniqueTypes;
    }

    public static function getModelList()
    {
        $models = App::getDB()->select("canoe", "model");
        $uniqueModels = array_unique($models);
        sort($uniqueModels);
        return $uniqueModels;
    }

    public static function getProductionDateList()
    {
        $productionDates = App::getDB()->select("canoe", "production_date");
        $uniqueProductionDates = array_unique($productionDates);
        sort($uniqueProductionDates);
        return $uniqueProductionDates;
    }

    public static function getPriceList()
    {
        $prices = App::getDB()->select("canoe", "price");
        $uniquePrices = array_unique($prices);
        sort($uniquePrices);
        return $uniquePrices;
    }

    public static function getDataForSearchBar($searchForm)
    {
        $searchForm->typesData = Utils::getTypeList();
        $searchForm->modelsData = Utils::getModelList();
        $searchForm->productionDatesData = Utils::getProductionDateList();
        $searchForm->pricesData = Utils::getPriceList();
    }

    public static function getTypeListForIds($idCanoes)
    {
        $types = App::getDB()->select("canoe", "type", ["id_canoe" => $idCanoes]);
        $uniqueTypes = array_unique($types);
        sort($uniqueTypes);
        return $uniqueTypes;
    }

    public static function getModelListForIds($idCanoes)
    {
        $models = App::getDB()->select("canoe", "model", ["id_canoe" => $idCanoes]);
        $uniqueModels = array_unique($models);
        sort($uniqueModels);
        return $uniqueModels;
    }

    public static function getProductionDateListForIds($idCanoes)
    {
        $productionDates = App::getDB()->select("canoe", "production_date", ["id_canoe" => $idCanoes]);
        $uniqueProductionDates = array_unique($productionDates);
        sort($uniqueProductionDates);
        return $uniqueProductionDates;
    }

    public static function getPriceListForIds($idCanoes)
    {
        $prices = App::getDB()->select("canoe", "price", ["id_canoe" => $idCanoes]);
        $uniquePrices = array_unique($prices);
        sort($uniquePrices);
        return $uniquePrices;
    }

    public static function getDataForSearchBarReservations($searchForm)
    {
        $user = unserialize($_SESSION['user']);
        $idCanoes = App::getDB()->select("rent", "rent_id_canoe", [
            "rent_id_user" => $user->id_user]);

        if(!empty($idCanoes))
        {
            $searchForm->typesData = Utils::getTypeListForIds($idCanoes);
            $searchForm->modelsData = Utils::getModelListForIds($idCanoes);
            $searchForm->productionDatesData = Utils::getProductionDateListForIds($idCanoes);
            $searchForm->pricesData = Utils::getPriceListForIds($idCanoes);
        }
    }

    public static function getCanoesDataFromQuery($searchForm)
    {
        $typeSelected = (strcmp($searchForm->selectedType, "0") !== 0);
        $modelSelected = (strcmp($searchForm->selectedModel, "0") !== 0);
        $productionDateSelected = (strcmp($searchForm->selectedProductionDate, "0") !== 0);
        $priceSelected = (strcmp($searchForm->selectedPrice, "0") !== 0);

        if($typeSelected or $modelSelected or $productionDateSelected or $priceSelected)
        {
            $where = ' WHERE';
            $and = '';

            if($typeSelected){
                $and .= " `type` = '$searchForm->selectedType'";
            }
            if($modelSelected)
            {
                if(!empty($and)){
                    $and .= " AND";
                }
                $and .= " `model` = '$searchForm->selectedModel'";
            }
            if($productionDateSelected)
            {
                if(!empty($and)){
                    $and .= " AND";
                }
                $and .= " `production_date` = '$searchForm->selectedProductionDate'";
            }
            if($priceSelected)
            {
                if(!empty($and)){
                    $and .= " AND";
                }
                $and .= " `price` = '$searchForm->selectedPrice'";
            }

            $query = 'SELECT * FROM `canoe`'.$where.$and;
            return App::getDB()->query($query)->fetchAll();
        }
        else
        {
            return Utils::getCanoesData();
        }
    }

    public static function getCanoesDataFromQueryForTable($table, $phrase)
    {
        $query = "SELECT * FROM `canoe` WHERE `$table` = '$phrase'";
        return App::getDB()->query($query)->fetchAll();
    }

}
