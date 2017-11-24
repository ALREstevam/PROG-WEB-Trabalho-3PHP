<?php
include_once "User.class.php";
require_once "DbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: andre
 *
 * TODO: Add a user
 * TODO: Update a user
 * TODO: List the data of all users
 * TODO: List the data of one user
 *
 */



class UserControl{
    function addUpdateUser(User $usr){

        return true;
    }

    function addUser(User $usr){

        return true;
    }

    function updateUser(User $usr){

    }

    function retrieveAllUsers(){   //KAREN
        $BD = new DbConnection();
		$conection = $BD->connectWithConsts();
		$result = $conection->query("SELECT * FROM tbl_users");
		$result->fetchAll();
    }

    function retrieveUserById($id){
        $dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{
                $stmt = $conn->query("SELECT * FROM tbl_users WHERE PK_cpf = '$id'");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    return $this->toUserObject($row);
                }
            }catch (Exception $e){
                echo "Erro ao recuperar usuário: $e";
                return null;
            }
        }
        return null;
    }

    function retrieveLoggedUser(){
        /*
         * Retornar um objeto User se houver algum logado ou false caso contrário
         * */

        return new User("Ana", 'abc', 'maisid@il66', '1', '2013-01-08', '123', '3568-989', 'Rua 2', '566', 'Europa', '', '1256-000', 'Bairro a', 'Portugal', true);
    }

    function toUserObject($OriginalData){    //KAREN
         return null;
    }

    function authUser($login, $password){
        return false;
    }

    function loginUser($uid){

    }

    function logoutUser(){

    }

    function isUserLogged(){
        return true;
    }
}