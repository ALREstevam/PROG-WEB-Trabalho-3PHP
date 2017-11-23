
# Trabalho de Programação para web
## Tela x Operação no banco:

* T1 - Tela de login
	* No banco:  SELECT

* T2 - Formulário de cadastro de cliente
	* No banco: INSERT

* T3 - Formulário de listagem de dados de clientes
	* No banco: SELECT

* T4 - Tela de consulta de dados de um cliente
	* No banco: SELECT

* T5 - Tela de atualização de dados de um ciente
	* No banco: UPDATE

* T6 - Tela de menu

## Permissões

* T1: Aparece para qualquer um que acessar o site

* T2 T3: Aparece apenas para administradores

* T4 T5: Aparece para qualquer usuário comum logado

* T6: Aparece nas páginas 
	* T2 T3: \[Cadastrar cliente\]\[Listar dados de clientes\]
	* T4 T5: \[Consultar dados\]\[Atualizar dados\]

## Adicionais

* Script Create do banco em um .PHP 
	(adm: login: 'admin', senha: 'admin'): Deve ser cadastrado junto com a criação do banco

--------------------------------------

# A fazer

|Número|Responsável|Estado|Grupo|Tarefa|
|-|-|-|-|-|
|1. | **André** | Feito |A| Script `SQL` de criação do banco |
|2. |**Huanna**|Não feito|A|`DbSetup.class.php` execução do script de criação do banco
|3. |**André**|Copiado|B|`DbConnection.class.php` script de conexão com o banco
|4. |**André**|Não feito|C|`User.class.php > __toString()` impressão de um objeto que representa um usuário usando HTML e classes CSS
|5. |**?**|Não feito|D|`UserControl.class.php > addUpdateUser` testar se o usuário já foi cadastrado ou não e chamar o método correspondente
|6. |**?**|Não feito|D|`UserControl.class.php  > addUser` comunicação com o banco para inserir um novo usuário
|7. |**?**|Não feito|D|`UserControl.class.php  > updateUser` comunicação com o banco para atualizar um us
|8. |**?**|Não feito|E|`UserControl.class.php  > retrieveAllUsers` comunicação com o banco para obter uma lista de objetos `User`
|9. |**?**|Não feito|E|`UserControl.class.php  > toUserObject` utilizado pelos métodos `retrieve...`, converter os dados recebidos de uma consulta para um objeto do tipo `User`
|10. |**?**|Não feito|F|`UserControl.class.php  > authUser` retornar um objeto do tipo `User` se existir no banco uma combinação de login e senha ou algum outro valor caso contrário
|11. |**?**|Não feito|F|`UserControl.class.php  > loginUser` marca um usuário como logado na máquina e guarda seu ID numa `SESSION`
|12. |**?**|Não feito|F|`UserControl.class.php  > logoutUser` deixa de marcar o usuário como logado
|13. |Pedro|Não feito|F|`UserControl.class.php  > isUserLogged` retorna o id do usuário se ele estiver logado ou algum outro valor caso contrário
|14. |**?**|Não feito|G|`menu.php` menu que deve ser inserido via SSI nas outras páginas (muda dependendo de qual tipo de usuário está logado)
|15. |**André**|Não feito|H, D|`admin_add_user.php`tela que aparecerá para o administrador adicionar um usuário novo (incluir um checkbox para definir se o novo usuário é um administrador ou não)
|16. |**?**|Não feito|I, E|`admin_list_all_users.php`tela que aparecerá para o administrador ver os dados de todos os usuários cadastrados
|17. |**?**|Não feito|H, D|`user_edit_info.php`tela que aparecerá para o usuário comum alterar seus dados
|18. |**?**|Não feito|I, E|`user_see_info.php` tela que aparecerá para o usuário comum ver seus dados
|19. |**André**|Não feito|F|`login.php`tela de login (login e senha) obs: login é um campo a parte, não e-mail ou nome completo

### OBS.:

1. Verificar se o usuário está logado: alguém que tentar acessar diretamente a página `user_edit_info.php` sem estar logado deve ser redirecionado para a página principal

2. O tópico 1 deve ser válido se o usuário nunca viu a página ou se clicou no botão de logout (botão de logout quando clicado deve redirecionar o usuário para a página de login e ele não deve conseguir acessar a página que estava antes sem fazer o login outra vez)

----------------------------

**TAREFAS:** 19

**INTEGRANTES:** 5

**TAREFA POR INTEGRANTE:** 3,8 = 4


----------------------
