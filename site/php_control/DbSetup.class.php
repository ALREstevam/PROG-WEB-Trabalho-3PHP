<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

require_once '__constants.php';
require_once 'DbConnection.class.php';


class DbSetup{

function setup(){	

$db = new DbConnection();
$conn = $db -> connect("information_schema", DB_HOST, DB_PASSWORD, DB_USERNAME);
$sql = file_get_contents ('../sql/db_pw3.sql');
var_dump($sql);

$teste = $conn -> exec('$sql');
var_dump($teste);

}

}
 
$obj = new DbSetup();
$aux = $obj -> setup();
var_dump($aux); 


?>



