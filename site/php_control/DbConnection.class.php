<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

require_once '__constants.php';
require_once 'Util.php';

class DbConnection{
    function connectWithConsts()
    {
        return $this->connect(DB_NAME, DB_HOST, DB_PASSWORD, DB_USERNAME);
    }
    
    function connect($dbname, $dbhost, $dbpswd, $dbusrname){
        try
        {
            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusrname, $dbpswd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo Util::getFloatingAlertBox("Erro ao conectar no banco","Não foi possível conectar ao banco:" . $e->getMessage(), "error");
            return null;
        }
    }

}