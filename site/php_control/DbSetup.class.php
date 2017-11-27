
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Criar banco de dados</title>
    <style>

        body{
            color: whitesmoke;
            background-color: #2d312f;
            font-family: "Consolas", "Courier New", monospace;
        }

        pre{
            font-family: "Courier New", monospace;
            padding: 10px;
            margin 10px;
            border: solid 1px whitesmoke;
        }

    </style>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: andre
 */

require_once '__constants.php';
require_once 'DbConnection.class.php';
require_once '../sql/SqlGenerator.class.php';


class DbSetup{
    function __construct()
    {
        $this->setupDatabase();
    }

    function setupDatabase()
    {
        try{
            echo "<p><strong>Gerando .sql do banco de dados</p></strong>";
            SqlGenerator::generateDbFile(DB_NAME);
            $dbFilePath = "../sql/db_pw3.sql";
            echo "<p><strong>Conectando ao banco de dados</p></strong>";
            $db = new DbConnection();


            $conn = $db -> connect("information_schema", DB_HOST, DB_PASSWORD, DB_USERNAME);

            if($conn == null){
                throw new Exception("Não foi possível conectar ao banco. Execução cancelada.");
            }

            echo "<p><strong>Abrindo .sql do banco de dados</p></strong>";
            $sql = file_get_contents ($dbFilePath);
            echo "<p><strong>Script a ser executado:</p></strong>";
            echo"<pre>$sql</pre>";
            $conn -> exec($sql);
            echo "<p><strong>Sucesso</p></strong>";
        }
        catch (Exception $e){
            echo "<br>Erro na criação do banco: ".$e->getMessage();
        }
    }
}


new DbSetup();


?>


</body>
</html>
