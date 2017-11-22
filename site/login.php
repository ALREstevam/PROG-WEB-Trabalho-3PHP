<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Login</title>
</head>
<body>


<div class="hCentered" >
    <h1>Login</h1>

    <form name="form_login" action="" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" required placeholder="Login" class="hCentered sticky">
        <label for="pswd">Senha</label>
        <input type="password" name="pswd" id="pswd" required placeholder="Senha" class="hCentered sticky">
        <br>
        <button type="submit" class="button blueButton hCentered">Logar</button>
    </form>
</div>



</body>
</html>
