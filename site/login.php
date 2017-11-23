<?php
/**
 * Created by PhpStorm.
 * User: andre
 */
require_once "php_control/UserControl.class.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['login']) && isset($_POST['pswd'])){
        $uc = new UserControl();    
        $id = $uc->authUser($_POST['login'], $_POST['pswd']);
        if($id != -1){
            $uc->loginUser($id);
            $user = $uc->retrieveUser($id);
            if($user -> isIsAdmin()){
                header('Location: '.'admin_add_user.php');
            }else{
                header('Location: '.'user_edit_info.php');
            }
        }
    }
}



?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Login</title>
</head>
<body>


<div class="hCentered vCentered shadowed" id="loginDiv">
    <h1>Login</h1>
    <form name="form_login" action="" method="POST">
        <label for="login" class="large">Login</label>
        <input type="text" name="login" id="login" required placeholder="Login" class="hCentered sticky large">

        <label for="pswd" class="large">Senha</label>
        <input type="password" name="pswd" id="pswd" required placeholder="Senha" class="hCentered sticky large">
        <br>
        <button type="submit" class="button black hCentered sticky large">Logar</button>
    </form>
</div>



</body>
</html>
