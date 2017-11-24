<?php
/**
 * Created by PhpStorm.
 * User: andre
 */


require_once "php_control/UserControl.class.php";
require_once "util/Util.php";
$statusMsg = "Nenhum formulário submetido";

$formInputName = 
    [
        "completeName",
        "userName",
        "userEmail",
        "password",
        "birthDate",
        "cpf",
        "tel",
        "strt",
        "num",
        "distr",
        "compl",
        "cep",
        "city",
        "count",
        "isadm"
    ];

$frmv = [];


function getIfSubmitedToHtml($field){
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
    else if($field == "count"){
        return "Brasil";
    }
    else if($field == "isadm"){
        return "no";
    }
    return "";
}

function valueToVar($stack, $field){
    if($field == "isadm"){
        if($stack[$field] == "yes"){
            return true;
        }else{
            return false;
        }
    }
    return $stack[$field];
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    foreach ($formInputName as $field){
        if(isset($_POST[$field])){
            $frmv[$field] = $_POST[$field];
        }else{
            $statusMsg = "campo $field não foi encontrado, impossível cadastrar o usuário.";
            return;
        }
    }
    $usr = new User(
        valueToVar($frmv, "completeName"),
        valueToVar($frmv, "userName"),
        valueToVar($frmv, "userEmail"),
        valueToVar($frmv, "password"),
        valueToVar($frmv, "birthDate"),
        valueToVar($frmv, "cpf"),
        valueToVar($frmv, "tel"),
        valueToVar($frmv, "strt"),
        valueToVar($frmv, "num"),
        valueToVar($frmv, "distr"),
        valueToVar($frmv, "compl"),
        valueToVar($frmv, "cep"),
        valueToVar($frmv, "city"),
        valueToVar($frmv, "count"),
        valueToVar($frmv, "isadm")
    );
    $uc = new UserControl();
    $res = $uc->addUpdateUser($usr);

    if($res){
        $statusMsg = "Operação realizada com sucesso.";

        $_POST = null;
        $frmv = null;

    }else{
        $statusMsg = "Erro ao realizar a operação.";
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
<?php
require_once "menu.php";
?>
<h1>Adicionar ou atualizar um usuário</h1>
<div id="newUserDiv" class="hCentered shadowed">
    <form action="" method="post" name="form_add_user" class="flexrow">
        <div>
            <h2>Dados de identificação</h2>

            <label for="completeName">Nome completo</label>
            <input type="text" name="completeName" id="completeName" placeholder="Antônio Esteves da Silva" required class="sticky" value="<?php echo getIfSubmitedToHtml('completeName') ?>">

            <label for="userName">Nome de usuário</label>
            <input type="text" name="userName" id="userName" placeholder="anton" required class="sticky" value="<?php echo getIfSubmitedToHtml('userName') ?>">

            <label for="userEmail">E-mail</label>
            <input type="email" name="userEmail" id="userEmail" placeholder="antonio@example.com" required class="sticky" value="<?php echo getIfSubmitedToHtml('userEmail') ?>">

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="******" required class="sticky" value="<?php echo getIfSubmitedToHtml('password') ?>">

            <label for="birthDate">Data de nascimento</label>
            <input type="date" name="birthDate" id="" placeholder="05/09/1990" required class="sticky" value="<?php echo getIfSubmitedToHtml('birthDate') ?>">

            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="687.542.675-79" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" class="sticky" value="<?php echo getIfSubmitedToHtml('cpf') ?>">
        </div>

        
        <div>
            <h2>Dados de contato</h2>
            <label for="tel">Número de Telefone</label>
            <input type="tel" name="tel" id="tel" placeholder="" required class="sticky" value="<?php echo getIfSubmitedToHtml('tel') ?>">
        </div>

        <div>
            <h2>Endereço</h2>

            <label for="strt">Rua</label>
            <input type="text" name="strt" id="strt" placeholder="Rua das Paineiras" required class="sticky" value="<?php echo getIfSubmitedToHtml('strt') ?>">

            <label for="num">Número</label>
            <input type="text" name="num" id="num" placeholder="256-A" required class="sticky" value="<?php echo getIfSubmitedToHtml('num') ?>">

            <label for="distr">Bairo</label>
            <input type="text" name="distr" id="distr" placeholder="Nova Europa" required class="sticky" value="<?php echo getIfSubmitedToHtml('distr') ?>">

            <label for="">Complemento</label>
            <input type="text" name="compl" id="compl" placeholder="BLOCO X - Apto. 20" required class="sticky" value="<?php echo getIfSubmitedToHtml('compl') ?>">


            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" placeholder="13560-000" required pattern="\d{5}-?\d{3}" class="sticky" value="<?php echo getIfSubmitedToHtml('cep') ?>">

            <label for="city">Cidade</label>
            <input type="text" name="city" id="city" placeholder="Novo Algo" required class="sticky" value="<?php echo getIfSubmitedToHtml('city') ?>">

            <?php  echo getIfSubmitedToHtml('count') == '' ? 'selected' : ''?>

            <label for="count">País</label>
            <select name="count" id="count" class="sticky" required>
                <?php 
                $countries = getCountryNamesArray();
                foreach ($countries as $country) {
                    $selected = getIfSubmitedToHtml('count') == "$country" ? 'selected' : '';
                    echo "<option value='$country' $selected>$country</option>\n";
                }
                ?>
            </select>
        </div>

        <div>
            <h2>Dados adicionais</h2>
            <label>É um administrador</label>
            <br>

            <label for="isadmYes">Sim</label>
            <input type="radio" name="isadm" id="isadmYes" class="" value="yes" <?php  echo getIfSubmitedToHtml('isadm') == 'yes' ? 'checked' : ''  ?> >

            <label for="isadmNo">Não</label>
            <input type="radio" name="isadm" id="isadmNo" class="" value="no" <?php  echo getIfSubmitedToHtml('isadm') == 'no' ? 'checked' : ''  ?>>

            <br><br>



            <button class="button green sticky" type="submit">Cadastrar</button>
            <button class="button red sticky" type="reset">Limpar</button>
        </div>


    </form>
    <span><strong>Status:</strong> <?php echo"$statusMsg" ?> </span>
</div>


</body>
</html>
