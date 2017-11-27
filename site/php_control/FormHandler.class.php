<?php

require_once "UserControl.class.php";
require_once "User.class.php";
require_once "__constants.php";
require_once "Util.php";

if($_SERVER['REQUEST_METHOD'] == "POST" OR $_SERVER['REQUEST_METHOD'] == "GET"){
    $formHandler = new FormHandler();
    $formHandler->handle();
}

class FormHandler{
    private $status = ["", ""];
    function getStatus(){
        return $this->status;
    }

    function handleGet(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            /**
             * Case: LOGIN
             */
            if(isset($_POST['login']) && isset($_POST['pswd'])){
                $uc = new UserControl();
                $usr = $uc->authUser($_POST['login'], $_POST['pswd']);
                if($usr){
                    $uc->loginUser($usr->getId());
                    if($usr -> isAdmin()){
                        $this->status = ["success", "redirecionando."];
                        Util::redirectTo('admin_add_user.php');
                        return;
                    }else{
                        $this->status = ["success", "redirecionando."];
                        Util::redirectTo('user_edit_info.php');
                        return;
                    }
                }
                $this->status = ["error", "Login e/ou senha incorretos."];
                return;
            }
            $this->status = ["alert", "Campos incompletos."];
            return;
        }
    }

    function handlePost(){
        if($_SERVER['REQUEST_METHOD'] == "GET"){

            /**
             * CASE: logout
             */
            if(isset($_GET['do_logout'])){
                $uc = new UserControl();
                $uc->logoutUser();
                header('Location: '.'../login.php');
            }
        }
    }

    function handle(){
        $this->handlePost();
        $this->handleGet();
    }


}









