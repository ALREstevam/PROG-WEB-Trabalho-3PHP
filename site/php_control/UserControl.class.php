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
    function addUpdateUser(User $usr){
	   $user = $this -> retrieveUserById($usr -> getId())
	   if ($user == null){
		   $this -> addUser($usr);
       }
	   else{
		   $this -> updateUser($usr);
	   }
	}
		   

    function addUser(User $usr){
		$dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{
                $conn->exec("INSERT INTO tbl_users VALUES( $usr->getCpf(), $usr->getCompleteName(), $usr-> getUserName(), $usr->getPassword(), $usr->getEmail(), $usr->getBirthDate(), $usr->getTel(), $usr->getStreet(), $usr->getNumber(), $usr->getDistrict(), $usr->getComplement(), $usr->getCity(), $usr->getCep(), $usr->getCounty(), $usr->isAdmin(), $usr->null ");
                
            }catch (Exception $e){
                echo "Erro ao recuperar usuário: $e";
                return null;
            }
        }
        return null;
    }
        return true;
    }

    function updateUser(User $usr){
		$dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{
                $conn->exec("UPDATE  tbl_users SET ( $usr->getCpf(), $usr->getCompleteName(), $usr-> getUserName(), $usr->getPassword(), $usr->getEmail(), $usr->getBirthDate(), $usr->getTel(), $usr->getStreet(), $usr->getNumber(), $usr->getDistrict(), $usr->getComplement(), $usr->getCity(), $usr->getCep(), $usr->getCounty(), $usr->isAdmin(), $usr->null ");
                
            }catch (Exception $e){
                echo "Erro ao recuperar usuário: $e";
                return null;
            }
        }
        return null;
    }
        return true;
    }

    }

    function retrieveAllUsers(){   //KAREN
        $BD = new DbConnection();
		$conection = $BD->connectWithConsts();
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
    }

    function toUserObject($OriginalData){    //KAREN
         return null;
    }

    function toUserObject2($originalData){
        $usr = new User();
        foreach ($originalData as $column => $value){
            $usr->__set($column, $value);
        }
        return $usr;
    }

    function authUser($login, $password){
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
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        else
            return false; // Não logado
        }

}