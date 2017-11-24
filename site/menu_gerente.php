<?php
function getMenuGerente($usrname){
    return "
    <nav class=\"menu\">
	    <span>Logado como: $usrname</span>
        <a href=\"admin_add_user.php\" class=\"blue\">Cadastrar/atualizar um cliente</a>
        <a href=\"admin_list_all_users.php\" class=\"blue\">Visualizar todos os clientes</a>
        <a href=\"logoutUser.php\" class=\"red\">Sair</a>
	</nav>
    ";
}

?>