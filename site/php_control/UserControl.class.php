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
	   $BD = new DbConnection();
	   $conn = $BD -> connectWithConsts();
	   $CPF
    }

    function addUser(User $usr){
	   $user = $this ->retrieveUserById($usr ->getId());
	   if ($user == null){
		   $this ->addUser($usr);
       }
	   else{
		   $this ->updateUser($usr);
	   }
	}
		   

    function addUser(User $usr){
		$dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{
                $conn->exec("INSERT INTO tbl_users VALUES('$usr->getCpf()',' $usr->getCompleteName()',' $usr->getUserName()',' $usr->getPassword()',' $usr->getEmail()',' $usr->getBirthDate()',' $usr->getTel()',' $usr->getStreet()',' $usr->getNumber()',' $usr->getDistrict()',' $usr->getComplement()',' $usr->getCity()',' $usr->getCep()',' $usr->getCounty()','$usr->isAdmin()',' $usr->null ')");
                
            }catch (Exception $e){
                echo "Erro ao Adicionar usuário: $e";
                return null;
            }
        }
        return null;
>>>>>>> atzs-a
    }
       

    function updateUser(User $usr){
		$dbc = new DbConnection();
        $conn = $dbc->connectWithConsts();
        if($conn != null){
            try{
                $conn->exec("UPDATE  tbl_users SET ( PK_cpf = '$usr->getCpf()', nome_completo = '$usr->getCompleteName()',UN_nome_usuario = '$usr->getUserName()', senha = '$usr->getPassword()',UN_email = '$usr->getEmail()', data_nasc = '$usr->getBirthDate()',tel =  '$usr->getTel()', rua= '$usr->getStreet()',numero= '$usr->getNumber()',bairro= '$usr->getDistrict()', complemento='$usr->getComplement()', cidade= '$usr->getCity()',cep= '$usr->getCep()',pais= '$usr->getCounty()', is_adm= '$usr->isAdmin()) where PK_cpf = '$usr->getCpf()')");
                
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
		$conection->exec( SELECT * FROM tbl_users );
    }

    function retrieveUser($id){
        return new User();
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
<<<<<<< HEAD
       if($id = $this->isUserLogged()){
           return $this->retrieveUserById($id);
       }
        return null;
>>>>>>> 56bbfc98a484a4dc6b7da42073dcc4fde0f3d6ae
=======
        /*
         * Retornar um objeto User se houver algum logado ou false caso contrário
         * */

        return new User("Ana", 'abc', 'maisid@il66', '1', '2013-01-08', '123', '3568-989', 'Rua 2', '566', 'Europa', '', '1256-000', 'Bairro a', 'Portugal', true);
>>>>>>> atzs-a
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
=======
        return "000.000.000-00";
>>>>>>> atzs-a
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
=======
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
>>>>>>> atzs-a
}