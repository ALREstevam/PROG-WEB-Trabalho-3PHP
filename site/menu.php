<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

require_once "php_control/UserControl.class.php";
require_once "menu_gerente.php";
require_once "menu_user.php";
$uc = new UserControl();
$usr = $uc->retrieveLoggedUser();

if($usr){
    if($usr->isAdmin()){
        echo getMenuGerente($usr->getUserName());
    }else{
        echo getMenuUser($usr->getUserName());
    }
}
?>