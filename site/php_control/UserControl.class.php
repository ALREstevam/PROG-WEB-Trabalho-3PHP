<?php
include_once "User.class.php";
require_once "DbConnection.class.php";
/**
 * Created by PhpStorm.
 * User: andre
 *
 * TODO: Add a user
 * TODO: Update a user
 *
 */



class UserControl{

    /**
     * Adicionar um usuário se o CPF não existir, atualizar se já exisitr (testar se é novo ou não e chamar
     * addUser OU updateUser)
     * @param User $usr
     */
    function addUpdateUser(User $usr){
	   $BD = new DbConnection();
	   $conn = $BD -> connectWithConsts();
	   $CPF 

		
		
        
    }

    function addUser(User $usr){


    }

    function updateUser(User $usr){

    }

    function retrieveAllUsers(){   //KAREN
        $BD = new DbConnection();
		$conection = $BD->connectWithConsts();
<<<<<<< HEAD
		$conection->exec( SELECT * FROM tbl_users );
    }

    function retrieveUser($id){
        return new User();
=======
		$result = $conection->query("SELECT * FROM tbl_users");
        $rsp = [];
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $rsp[] = $this->toUserObject2($row);
        }
        return $rsp;
    }

    function retrieveUserById($id){
        $dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{
                $stmt = $conn->query("SELECT * FROM tbl_users WHERE PK_cpf = '$id'");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    return $this->toUserObject2($row);
                }
            }catch (Exception $e){
                echo "Erro ao recuperar usuário: $e";
                return null;
            }
        }
        return null;
    }

    function retrieveLoggedUser(){
       if($id = $this->isUserLogged()){
           return $this->retrieveUserById($id);
       }
        return null;
>>>>>>> 56bbfc98a484a4dc6b7da42073dcc4fde0f3d6ae
    }

    function toUserObject($OriginalData){    //KAREN
         
    }

    function toUserObject2($originalData){
        $usr = new User();
        foreach ($originalData as $column => $value){
            $usr->__set($column, $value);
        }
        return $usr;
    }

    function authUser($login, $password){
<<<<<<< HEAD
        return -1;
=======
        $dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{
                $queryStr = "SELECT * FROM tbl_users WHERE UN_nome_usuario = '$login' AND senha = '$password'";
                $stmt = $conn->query($queryStr);
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    return $this->toUserObject2($row);
                }
            }catch (Exception $e){
                echo "Erro ao recuperar usuário: $e";
                return false;
            }
        }
        return false;
>>>>>>> 56bbfc98a484a4dc6b7da42073dcc4fde0f3d6ae
    }


    function loginUser($uid){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
		$_SESSION ['user'] = $uid;

    }

    function logoutUser(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_unset();
		session_destroy();
    }

    function isUserLogged(){
<<<<<<< HEAD

    }
=======
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        else
            return false; // Não logado
        }

>>>>>>> 56bbfc98a484a4dc6b7da42073dcc4fde0f3d6ae
}