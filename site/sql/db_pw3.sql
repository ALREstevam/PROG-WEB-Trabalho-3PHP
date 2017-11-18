-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.26-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para db_pw3
CREATE DATABASE IF NOT EXISTS `db_pw3` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_pw3`;


-- Copiando estrutura para tabela db_pw3.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `PK_cpf` char(11) NOT NULL,
  `nome_completo` char(50) NOT NULL,
  `UN_nome_usuario` char(50) NOT NULL,
  `senha` char(50) NOT NULL,
  `UN_email` char(50) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `tel` char(20) DEFAULT NULL,
  `rua` char(50) DEFAULT NULL,
  `numero` char(50) DEFAULT NULL,
  `bairro` char(50) DEFAULT NULL,
  `complemento` char(20) DEFAULT NULL,
  `cidade` char(20) DEFAULT NULL,
  `cep` char(11) DEFAULT NULL,
  PRIMARY KEY (`PK_cpf`),
  UNIQUE (`UN_nome_usuario`),
  UNIQUE (`UN_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela db_pw3.tbl_users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`PK_cpf`, `nome_completo`, `UN_nome_usuario`, `senha`, `UN_email`, `data_nasc`, `tel`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `cep`) VALUES
	('00000000000', 'admin', 'admin', 'admin', 'ad@min.min', '1970-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
