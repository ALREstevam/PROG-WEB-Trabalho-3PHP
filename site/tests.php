<?php


require_once 'php_control/__constants.php';
require_once 'php_control/UserControl.class.php';
require_once 'php_control/User.class.php';

$uc = new UserControl();
$user = $uc->retrieveUserById('000.000.000-00');

var_dump_pre($user);

echo $user;
 


?>