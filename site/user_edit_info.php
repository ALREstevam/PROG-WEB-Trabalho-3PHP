<?php
/**
 * Created by PhpStorm.
 * User: andre
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" href="images/fav.png" sizes="32x32" type="image/png">
    <title>Novo Usuário</title>
</head>
<body>
<?php

require_once "php_control/UserControl.class.php";
require_once "php_control/Util.php";
require_once "php_control/UserAuth.class.php";

$ua = new UserAuth(AccessType::COMMON);
$uc = new UserControl();
$user = $uc->retrieveLoggedUser();

$statusMsg = "nenhuma atualização enviada.";
$statusType = "info";




function getValue($field){
    global $user;
    if($user->__get($field) != null && $field != "password"){
        return $user->__get($field);
    }
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
    else if($field == "count"){
        return "Brasil";
    }
    return "";
}

function valueToVar($stack, $field){
    return $stack[$field];
}

function readInput(){
    global $statusMsg;
    global $statusType;
    global $user;

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $formInputName =
            [
                "completeName","userName","userEmail","password","birthDate","tel","strt","num","distr","compl","cep","city","count"
            ];

        $frmv = [];

        foreach ($formInputName as $field){
            if(isset($_POST[$field])){
                if($_POST[$field] == "" or $_POST[$field] == null){
                    $statusType = "alert";
                    $statusMsg = "campo $field está incorreto, impossível cadastrar o usuário.";
                    return;
                }
                if($field == "cpf"){
                    if(!FieldValidation::validateCpf($_POST[$field])){
                        $statusType = "alert";
                        $statusMsg = "o CPF digitado é inválido.";
                        return;
                    }
                }

                if($field == "password"){
                    if(!FieldValidation::validatePassword($_POST[$field], 7)){
                        $statusType = "alert";
                        $statusMsg = "a senha digitada não foi validada, use ao menos 8 caracteres.";
                        return;
                    }
                }
                if($field == "birthDate"){
                    if(!FieldValidation::validateDate($_POST[$field])){
                        $statusType = "alert";
                        $statusMsg = "a dada de nascimento digitada está incorreta.";
                        return;
                    }
                }

                $frmv[$field] = $_POST[$field];
            }else{
                $statusMsg = "campo $field não foi encontrado, impossível cadastrar o usuário.";
                $statusType = "error";
                return;
            }
        }
        $usr = new User(
            valueToVar($frmv, "completeName"),
            valueToVar($frmv, "userName"),
            valueToVar($frmv, "userEmail"),
            valueToVar($frmv, "password"),
            valueToVar($frmv, "birthDate"),
            $user->getCpf(),
            valueToVar($frmv, "tel"),
            valueToVar($frmv, "strt"),
            valueToVar($frmv, "num"),
            valueToVar($frmv, "distr"),
            valueToVar($frmv, "compl"),
            valueToVar($frmv, "cep"),
            valueToVar($frmv, "city"),
            valueToVar($frmv, "count"),
            false
        );
        $uc = new UserControl();
        $res = $uc->updateUser($usr);

        if($res){
            $statusMsg = "Operação realizada com sucesso.";
            $statusType = "success";
            $_POST = null;
            $frmv = null;

        }else{
            $statusMsg = "Erro ao realizar a operação.";
            $statusType = "error";
        }
    }
}
readInput();



require_once "menu.php";
?>
<h1>Adicionar ou atualizar um usuário</h1>
<div id="newUserDiv" class="hCentered shadowed">
    <form method="post" name="form_add_user" class="flexrow">
        <div>
            <h2>Dados de identificação</h2>

            <label for="completeName">Nome completo</label>
            <input type="text" name="completeName" id="completeName" placeholder="Antônio Esteves da Silva" required class="sticky" value="<?php echo getValue('completeName') ?>">

            <label for="userName">Nome de usuário</label>
            <input type="text" name="userName" id="userName" placeholder="anton" required class="sticky" value="<?php echo getValue('userName') ?>">

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="******" required class="sticky" value="<?php echo getValue('password') ?>">

            <label for="birthDate">Data de nascimento</label>
            <input type="date" name="birthDate" id="birthDate" required class="sticky" value="<?php echo getValue('birthDate') ?>">

            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="687.542.675-79" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" class="sticky" disabled value="<?php echo getValue('cpf') ?>">
        </div>

        <div>
            <h2>Endereço</h2>

            <label for="strt">Rua</label>
            <input type="text" name="strt" id="strt" placeholder="Rua das Paineiras" required class="sticky" value="<?php echo getValue('strt') ?>">

            <label for="num">Número</label>
            <input type="text" name="num" id="num" placeholder="256-A" required class="sticky" value="<?php echo getValue('num') ?>">

            <label for="distr">Bairo</label>
            <input type="text" name="distr" id="distr" placeholder="Nova Europa" required class="sticky" value="<?php echo getValue('distr') ?>">

            <label for="compl">Complemento</label>
            <input type="text" name="compl" id="compl" placeholder="BLOCO X - Apto. 20" required class="sticky" value="<?php echo getValue('compl') ?>">


            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" placeholder="13560-000" required pattern="\d{5}-?\d{3}" class="sticky" value="<?php echo getValue('cep') ?>">

            <label for="city">Cidade</label>
            <input type="text" name="city" id="city" placeholder="Novo Algo" required class="sticky" value="<?php echo getValue('city') ?>">

            <?php  echo getValue('count') == '' ? 'selected' : ''?>

            <label for="count">País</label>
            <select name="count" id="count" class="sticky" required size="1">
                <option value="">Escolha</option>
                <?php
                $countries = getCountryNamesArray();
                foreach ($countries as $country) {
                    $selected = getValue('count') == "$country" ? 'selected' : '';
                    echo "<option value='$country' $selected>$country</option>\n";
                }
                ?>
            </select>
        </div>

        <div>
            <h2>Dados de contato</h2>
            <label for="tel">Número de Telefone</label>
            <input type="tel" name="tel" id="tel" placeholder="" required class="sticky" value="<?php echo getValue('tel') ?>">

            <label for="userEmail">E-mail</label>
            <input type="email" name="userEmail" id="userEmail" placeholder="antonio@example.com" required class="sticky" value="<?php echo getValue('userEmail') ?>">
        </div>

        <div>
            <h2>Confirmar ou cancelar operação</h2>
            <button class="button green sticky" type="submit">Atualizar meus dados</button>
        </div>


    </form>
    <?php
    echo Util::getAlertBox("Status", $statusMsg, $statusType, true);
    ?>
</div>


</body>
</html>
