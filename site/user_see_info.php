<?php
/**
 * Created by PhpStorm.
 * User: andre
*/

require_once "php_control/UserControl.class.php";
require_once "php_control/User.class.php";
require_once "php_control/Util.php";
require_once "php_control/UserAuth.class.php";
$ua = new UserAuth(AccessType::COMMON);


$uc = new UserControl();
$usr = $uc->retrieveLoggedUser();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="images/fav.png" sizes="32x32" type="image/png">
    <title>Meus dados</title>
</head>
<body>
<?php
require_once "menu.php";
?>
<div>
    <h1>Meus dados</h1>

    <div class="flexrow">
        <?php
        echo $usr;
        ?>
    </div>
</div>
</body>
</html>
