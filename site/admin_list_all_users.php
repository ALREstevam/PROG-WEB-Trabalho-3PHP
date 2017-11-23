<?php
/**
 * Created by PhpStorm.
 * User: andre
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: andre
 */
require_once "php_control/UserControl.class.php";
require_once "php_control/User.class.php";


/*APENAS PARA TESTAR!*/
$usrLst[] = new User("Aluhua eloa", 'aaaloa', 'ma@il', '123', '2013-01-08', '123', '3568-989', 'Rua das Paineirais', '566', 'Nova Europa', 'BLOCO X', '1256-000', 'Nova Rússiia', 'Antártica', true);

for($i = 0; $i < 10; $i++){
    $usrLst[] = new User("Aluhua eloa", 'aaaloa', 'ma@il', '123', '2013-01-08', '123', '3568-989', 'Rua das Paineirais', '566', 'Nova Europa', 'BLOCO X', '1256-000', 'Nova Rússiia', 'Antártica', true);
    $usrLst[] = new User("Aleiolococa Aleisato eloa", 'aaaloa', 'maisid@il', '123', '2013-01-08', '123', '3568-989', 'Rua das Paineirais Paneirosas Paneirantes', '566', 'Nova Europa Japonesa', 'Bloco 9 apto 999', '1256-000', 'Nova Rússia Americana', 'Antártica Equatorial', true);
    $usrLst[] = new User("Ana", 'abc', 'maisid@il66', '1', '2013-01-08', '123', '3568-989', 'Rua 2', '566', 'Europa', '', '1256-000', 'Bairro a', 'Portugal', true);

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

<div>
    <h1>Listar usuários cadastados</h1>

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

