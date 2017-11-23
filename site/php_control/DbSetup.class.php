<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

require_once '__constants.php';

class DbSetup{
     <?php


$DB = new DbConnection();
$conn = $DB -> connect($DB_NAME, $DB_HOST, $DB_PASSWORD, $DB_USERNAME);

?>



}