<?php
/**
 * Created by PhpStorm.
 * User: andre
 */
require_once "php_control/UserControl.class.php";
require_once "php_control/User.class.php";
require_once "util/Util.php";


/*APENAS PARA TESTAR!*/
$usrLst = getUserListExample(20);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Login</title>
</head>
<body>
<?php
require_once "menu.php";
?>
<div>
    <h1>Usuários cadastrados</h1>

    <div class="flexrow">
    <?php
    foreach ($usrLst as $user){
        echo $user;
    }
    ?>
    </div>
</div>
</body>
</html>

