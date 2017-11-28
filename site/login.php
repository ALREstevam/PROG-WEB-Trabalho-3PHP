<?php
/**
 * Created by PhpStorm.
 * User: andre
 */
require_once "php_control/FormHandler.class.php";
require_once "util/Util.php";
$formHandler = new FormHandler();
$formHandler->handle();


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="images/fav.png" sizes="32x32" type="image/png">
    <title>Login</title>
</head>
<body class="login">


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
    <br>
    <br>
    <?php  echo getAlertBox("Status", $formHandler->getStatus()[1], $formHandler->getStatus()[0], $formHandler->getStatus()[1] == "" ? false : true) ?>
</div>



</body>
</html>
