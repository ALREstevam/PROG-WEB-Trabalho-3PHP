<?php
/**
 * Created by PhpStorm.
 * User: andre
 */
include "__config.php";

define("NULL",null);
define("TRUE", true);
define("FALSE", false);
define("True", true);
define("False", false);


/**
 * Executa um var_dump() com formatação
 * @param $var variable to dump
 * @param null $title title for the dump
 */
function var_dump_pre ($var, $title = null){
    echo "<pre style=\"font-family: 'Courier New', 'serif'; font-size: 12pt; color: #0a0a0a; background-color: whitesmoke; border: solid red 3px; padding: 10px; \" >";
    echo "<b style='font-size: 14pt; font-weight: bold;'>$title</b><br>";
    var_dump($var);
    echo "</pre>";
}
