<?php
function getMenuUser($username)
{
    return "
        <nav class='menu'>
            <span>Logado como: $username</span>
            <a href='user_see_info.php' class='blue'>Visualizar meus dados</a>
            <a href='user_edit_info.php' class='blue'>Alterar meus dados</a>
            <a href='php_control/FormHandler.class.php?do_logout=' class='red'>Sair</a>
        </nav>
    ";
}
?>