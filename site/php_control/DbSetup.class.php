<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

require_once '__constants.php';
require_once 'DbConnection.class.php';


class DbSetup{
	

$DB = new DbConnection();
$conn = $DB -> connect("information_schema", DB_HOST, DB_PASSWORD, DB_USERNAME);
}



?>



