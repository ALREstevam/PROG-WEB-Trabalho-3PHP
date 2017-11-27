<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 27/11/2017
 * Time: 16:38
 */

class SqlGenerator{
    static function generateDbFile($dbName){

        $data = "
/*
Language: MySql
[ LAST UPDATE: 24/11/2017 14:05 ]
*/

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para db_pw3
CREATE DATABASE IF NOT EXISTS `".$dbName."` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `".$dbName."`;


-- Copiando estrutura para tabela db_pw3.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `PK_cpf`                 char(14)        NOT NULL,
  `nome_completo`          char(50)        NOT NULL,
  `UN_nome_usuario`        char(50)        NOT NULL,
  `senha`                  char(50)        NOT NULL,
  `UN_email`               char(50)        NOT NULL,
  `data_nasc`              date            DEFAULT NULL,
  `tel`                    char(20)        DEFAULT NULL,
  `rua`                    char(50)        DEFAULT NULL,
  `numero`                 char(50)        DEFAULT NULL,
  `bairro`                 char(50)        DEFAULT NULL,
  `complemento`            char(20)        DEFAULT NULL,
  `cidade`                 char(20)        DEFAULT NULL,
  `cep`                    char(11)        DEFAULT NULL,
  `pais`                   char(50)        DEFAULT \"Brasil\",
  `is_adm`                 bool            DEFAULT FALSE,
  `data_cadastro`          TIMESTAMP       DEFAULT current_timestamp(),
  PRIMARY KEY (`PK_cpf`),
  UNIQUE (`UN_nome_usuario`),
  UNIQUE (`UN_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tbl_users` (`PK_cpf`, `nome_completo`, `UN_nome_usuario`, `senha`, `UN_email`, `data_nasc`, `tel`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `cep`, `is_adm`) VALUES
  ('000.000.000-00', 'admin', 'admin', 'admin', 'ad@min.min', '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, TRUE);
";
        echo "<p>Abring arquivo 'db_pw3.sql'</p>";
        $sqlFile = fopen("db_pw3.sql", "w") or die("Unable to open file!");
        echo "<p>Escrevendo...</p>";
        fwrite($sqlFile, $data);
        echo "<p>Fechando</p>";
        fclose($sqlFile);
        echo "<p>Arquivo 'db_pw3.sql' foi gerado.</p>";
    }
}

?>

