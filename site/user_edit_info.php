<?php
/**
 * Created by PhpStorm.
 * User: andre
 */
//require_once "php_control/UserControl.class.php";
if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['login']) && isset($_GET['pswd'])){

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Alterar Meus Dados</title>
</head>
<body>

<div>
    <h1>Alterar usuário</h1>

    <form action="" method="get" name="form_add_user">
        
        <h2>Dados de identificação</h2>
        
        <label for="completeName">Nome completo</label>
        <input type="text" name="completeName" id="completeName" placeholder="Antônio Esteves da Silva" required>

        <label for="userName">Nome de usuário</label>
        <input type="text" name="userName" id="userName" placeholder="anton" required>

        <label for="userEmail">E-mail</label>
        <input type="email" name="userEmail" id="userEmail" placeholder="antonio@example.com" required>

        <label for="password">Senha</label>
        <input type="password" name="password" id="password" placeholder="******" required>

        <label for="birthDate">Data de nascimento</label>
        <input type="date" name="birthDate" id="" placeholder="05/09/1990" required>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="687.542.675-79" required pattern="/^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}|[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/">

        
        <h2>Dados de contato</h2>
        
        
        <label for="tel">Número de Telefone</label>
        <input type="tel" name="tel" id="tel" placeholder="" required>

        <h2>Endereço</h2>

        <label for="strt">Rua</label>
        <input type="text" name="strt" id="strt" placeholder="Rua das Paineiras" required>

        <label for="num">Número</label>
        <input type="text" name="num" id="num" placeholder="256-A" required>

        <label for="distr">Bairo</label>
        <input type="text" name="distr" id="distr" placeholder="Nova Europa" required>

        <label for="">Complemento</label>
        <input type="text" name="compl" id="compl" placeholder="BLOCO X - Apto. 20" required>


        <label for="cep">CEP</label>
        <input type="text" name="cep" id="cep" placeholder="13560-000" required pattern="^\\d{5}[-]\\d{3}$">

        <label for="city">Cidade</label>
        <input type="text" name="city" id="city" placeholder="Novo Algo" required>

        <label for="count">País</label>
        <input type="text" name="count" id="count" placeholder="Brasil" required>


    </form>


</div>


</body>
</html>
