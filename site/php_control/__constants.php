<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

//DATABASE
define("DB_NAME","");
define("DB_HOST", "");
define("DB_PASSWORD","");
define("DB_USERNAME","");

define("PATH_SSI_MENU",__DIR__.'/ssi/menu.php');
define("PATH_USER_CONTROL",__DIR__.'/UserControl.class.php');
define("PATH_DB_CONNECTION",__DIR__.'/DbConnection.class.php');


function var_dump_pre ($var, $title = null){
    echo "<pre style=\"font-family: 'Courier New', 'serif'; font-size: 12pt; color: #0a0a0a; background-color: whitesmoke; border: solid red 3px; padding: 10px; \" >";
    echo "<b style='font-size: 14pt; font-weight: bold;'>$title</b><br>";
    var_dump($var);
    echo "</pre>";
}
