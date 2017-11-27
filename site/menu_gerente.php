<?php
function getMenuGerente($username){
    return "
    <nav class='menu'>
            <span>Logado como: $username</span>
            <a href='admin_add_user.php' class='blue'>Adicionar ou editar um usuário</a>
            <a href='admin_list_all_users.php' class='blue'>Listar usuários</a>
            <a href='php_control/FormHandler.class.php?do_logout=' class='red'>Sair</a>
        </nav>
    ";
}

?>