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

    /**
     * Adicionar um usuário se o CPF não existir, atualizar se já exisitr (testar se é novo ou não e chamar
     * addUser OU updateUser)
     * @param User $usr
     */
    function addUpdateUser(User $usr){
        
    }

    function addUser(User $usr){


    }

    function updateUser(User $usr){

    }

    function retrieveAllUsers(){   //KAREN
        $BD = new DbConnection();
		$conection = $BD->connectWithConsts();
    }

    function retrieveUser($id){
        return new User();
    }

    function toUserObject($OriginalData){    //KAREN
         
    }

    function authUser($login, $password){
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


    function loginUser($uid){
		session_start();
		$_SESSION ['user']=$uid;	

    }

    function logoutUser(){
		session_destroy();
    }

    function isUserLogged(){
			$logged = $_SESSION['user'];
			if(isset($logged)){
				return $logged;  
			}
			else
			return -1; // Não logado
			}
}