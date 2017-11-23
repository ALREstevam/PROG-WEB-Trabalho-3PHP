<?php
/**
 * Created by PhpStorm.
 * User: andre
 */


require_once "php_control/UserControl.class.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['login']) && isset($_POST['pswd'])){

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Administrador - Novo Usuário</title>
</head>
<body>

<div>
    <h1>Adicionar um usuário</h1>

    <form action="" method="post" name="form_add_user">
        
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
        <input type="text" name="cpf" id="cpf" placeholder="687.542.675-79" required>

        
        <h2>Dados de contato</h2>
        $this->complement = $complement;
        $this->cep = $cep;
        $this->city = $city;
        $this->county = $county;
        $this->isAdmin = $isAdmin;
        
        
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


        <label for=""></label>
        <input type="text" name="" id="" placeholder="" required>

        <label for=""></label>
        <input type="text" name="" id="" placeholder="" required>





    </form>


</div>


</body>
</html>
