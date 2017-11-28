<?php
include_once "User.class.php";
require_once "DbConnection.class.php";
require_once "Util.php";
/**
 * Created by PhpStorm.
 * User: andre
 */



class UserControl{

    function addUpdateUser(User $usr){
        $user = $this -> retrieveUserById($usr -> getId());
        if ($user == null){
            return $this -> addUser($usr);
        }
        else{
            return $this -> updateUser($usr);
        }
    }

    function addUser(User $usr){
        $dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{

                $isAdm = $usr->isAdmin() == true ? "true" : "false";

                $query = "
                INSERT INTO tbl_users (
                    PK_cpf,         
                    nome_completo,  
                    UN_nome_usuario,
                    senha,          
                    UN_email,       
                    data_nasc,     
                    tel,            
                    rua,            
                    numero,         
                    bairro,         
                    complemento,    
                    cidade,         
                    cep,            
                    pais,           
                    is_adm        
                )
                VALUES
                (
                 '".$usr->getCpf() ."',
                 '".$usr->getCompleteName() ."',
                 '".$usr->getUserName() ."',
                 '".$usr->getPassword() ."',
                 '".$usr->getEmail() ."',
                 '".$usr->getBirthDate() ."',
                 '".$usr->getTel() ."',
                 '".$usr->getStreet() ."',
                 '".$usr->getNumber() ."',
                 '".$usr->getDistrict() ."',
                 '".$usr->getComplement() ."',
                 '".$usr->getCity() ."',
                 '".$usr->getCep() ."',
                 '".$usr->getCounty() ."',
                  ".$isAdm ."
                )
                ";
               $conn->exec($query);
                return true;
            }catch (Exception $e){
                echo "Erro ao Adicionar usuário: $e";
                return null;
            }
        }
        return null;
    }

    function updateUser(User $usr){
        $dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{
                $isAdm = $usr->isAdmin() == true ? "true" : "false";
                $query =
                    "UPDATE  tbl_users SET "
                    ." nome_completo = '".$usr->getCompleteName()
                    ."',UN_nome_usuario = '".$usr-> getUserName()
                    ."', senha = '".$usr->getPassword()
                    ."', UN_email = '".$usr->getEmail()
                    ."', data_nasc = '".$usr->getBirthDate()
                    ."', tel = '".$usr->getTel()
                    ."', rua= '".$usr->getStreet()
                    ."', numero= '".$usr->getNumber()
                    ."', bairro= '".$usr->getDistrict()
                    ."', complemento='".$usr->getComplement()
                    ."', cidade= '".$usr->getCity()
                    ."', cep= '".$usr->getCep()
                    ."', pais= '".$usr->getCounty()
                    ."', is_adm=".$isAdm
                    ." WHERE(PK_cpf = '".$usr->getCpf()."')";

                //var_dump_pre($query);


                $conn->exec($query);
                return true;
            }catch (Exception $e){
                echo "Erro ao Atualizar usuário: $e";
                return null;
            }
        }
        return null;
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

    function retrieveUser($id){
        return $this->retrieveUserById($id);
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
                echo "Erro ao recuperar usuário: ".$e->getMessage();
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

