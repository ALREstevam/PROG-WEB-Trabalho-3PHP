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
        /*
         * Retornar um objeto User se houver algum logado ou false caso contrário
         * */

        return new User("Ana", 'abc', 'maisid@il66', '1', '2013-01-08', '123', '3568-989', 'Rua 2', '566', 'Europa', '', '1256-000', 'Bairro a', 'Portugal', true);
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
<<<<<<< HEAD
        return "000.000.000-00";
    }
=======
        $var= new DbConnection();
		$con= $var->connectWithConsts();
		if($con!=null){
		try{
			$sb=$con->query("SELECT * FROM 'tbl_users' WHERE `UN_nome_usuario`='$login' AND `senha`='$password'")
			
		if(->rowCount(($result) > 0 ))
		{
			///retorno de objeto
		}
		else{
			return -1;
			}
		}

>>>>>>> origin/Pedro

    function loginUser($uid){
		session_start();
		$_SESSION ['user']=$uid;	

    }

    function logoutUser(){
		session_destroy();
    }

    function isUserLogged(){
<<<<<<< HEAD
        return true;
    }
=======
			$logged = $_SESSION['user'];
			if(isset($logged)){
				return $logged;  
			}
			else
			return -1; // Não logado
			}
>>>>>>> origin/Pedro
}