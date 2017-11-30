# Programação Web - Trabalho III
## Criação do banco de dados

### 1. Dados do projeto

**Banco de dados utilizado:** MySql;
**Servidor utilizado:** Apache;
(Ambos através do XAMPP com as configurações *default*)
**PHP:** na versão 7.0


### 2. Arquivo de configuração
É necessário adaptar os valores das seguintes variáveis para que fiquem de acordo com a máquina em que o site será executado:

No arquivo: `site/php_control/__config.php`:

1. `$db_host = "localhost";` endereço de hospedagem do banco de dados;
2.  `$db_name = "db_pw3";` nome do banco de dados;
3. `$db_password = "";` senha para a conexão com o banco;
4. `$db_username = "root"` usuário a conectar com o banco de dados;

### 3. Criação do banco
    
Com o arquivo `__configs.php` corretamente configurado, através do navegador acesse o arquivo `php_control/DbSetup.class.php`.

Exemplo: `http://localhost/PROG-WEB-Trabalho-3PHP/site/php_control/DbSetup.class.php`.

![https://image.ibb.co/e1ZVaG/image.png](https://image.ibb.co/e1ZVaG/image.png)
Ou acessando o diretório `http://localhost/PROG-WEB-Trabalho-3PHP/site/php_control/` pelo navegador e escolhendo o arquivo `DbSetup.php` no navegador de diretórios gerado pelo Apache.


O banco de dados deverá ser criado exibindo o script executado e a mensagem de sucesso (ou de erro caso ocorra).

![https://image.ibb.co/bRnGFG/Opera_Instant_neo_2017_11_29_091033_localhost.png](https://image.ibb.co/bRnGFG/Opera_Instant_neo_2017_11_29_091033_localhost.png)
![https://image.ibb.co/mHzVaG/Opera_Instant_neo_2017_11_29_091140_localhost.png](https://image.ibb.co/mHzVaG/Opera_Instant_neo_2017_11_29_091140_localhost.png)

###  4. Script do banco
Caso seja necessário a execução manual do script do banco, a versão com os valores padrão estará no diretório: `...\htdocs\PROG-WEB-Trabalho-3PHP\site\sql\db_pw3.sql` (caso não seja necessário atualizar o arquivo `__config.php`) e o arquivo gerado pelo script em `DbSetup.php` usando os valores definidos em `__config.php` estará em: `...\htdocs\PROG-WEB-Trabalho-3PHP\site\php_control\db_pw3_generated.sql` (após a execução do item anterior).










	
	
	
	
	


