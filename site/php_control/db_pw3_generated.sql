
/*
Language: MySql
[ LAST UPDATE: 24/11/2017 14:05 ]
*/

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para db_pw3
DROP DATABASE IF EXISTS `db_pw3`;
CREATE DATABASE IF NOT EXISTS `db_pw3` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_pw3`;


-- Copiando estrutura para tabela db_pw3.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `PK_cpf`                 char(14)        NOT NULL,
  `nome_completo`          char(50)        NOT NULL,
  `UN_nome_usuario`        char(50)        NOT NULL,
  `senha`                  char(128)        NOT NULL,
  `email`                  char(50)        NOT NULL,
  `data_nasc`              date            DEFAULT NULL,
  `tel`                    char(20)        DEFAULT NULL,
  `rua`                    char(50)        DEFAULT NULL,
  `numero`                 char(50)        DEFAULT NULL,
  `bairro`                 char(50)        DEFAULT NULL,
  `complemento`            char(20)        DEFAULT NULL,
  `cidade`                 char(20)        DEFAULT NULL,
  `cep`                    char(11)        DEFAULT NULL,
  `pais`                   char(50)        DEFAULT 'Brasil',
  `is_adm`                 bool            DEFAULT FALSE,
  `data_cadastro`          TIMESTAMP       DEFAULT current_timestamp(),
  PRIMARY KEY (`PK_cpf`),
  UNIQUE (`UN_nome_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tbl_users`
(
  `PK_cpf`,
 `nome_completo`,
  `UN_nome_usuario`,
  `senha`,
  `email`,
  `data_nasc`,
  `tel`,
  `rua`,
  `numero`,
  `bairro`,
  `complemento`,
  `cidade`,
  `cep`,
  `is_adm`
)
VALUES
  (
  '000.000.000-00',
  'admin',
  'admin',
  'df31b502df94b33d0ae7c2daf27f0fe9348c29ee9b44055053d4325bea90b483ba169728a0cb9c339440a87703d094073b113bd37591f6bf1ad1e735bf69e56a',
  'ad@min.min',
  '1970-01-01',
  '-',
  '-',
  '-',
  '-',
  '-',
  '-',
  '-',
  TRUE);