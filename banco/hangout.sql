-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.5.16 - Source distribution
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela hangout.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela hangout.categorias: ~5 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nome`) VALUES
	(1, 'Brasil'),
	(2, 'Internacional'),
	(3, 'Política'),
	(4, 'Esportes'),
	(5, NULL);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;


-- Copiando estrutura para tabela hangout.noticias
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(10) NOT NULL DEFAULT '0',
  `titulo` varchar(100) DEFAULT NULL,
  `texto` longtext,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela hangout.noticias: ~2 rows (aproximadamente)
DELETE FROM `noticias`;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id`, `categoria_id`, `titulo`, `texto`, `data`) VALUES
	(6, 1, 'Última Aula', 'Texto aqui', NULL),
	(7, 5, 'Texto MySQL', 'Bancos de dados MySQL permitem armazenar inúmeras informações de um modo fácil de acessar. Os bancos de dados propriamente não são fáceis de ler por humanos. Bancos de dados MySQL são exigidos por muitos aplicativos da Internet, incluindo alguns boletins, sistemas de gerenciamento de conteúdo e outros mais. Para usar um banco de dados você precisará criá-lo. Somente usuários MySQL (diferente de correio e outros usuários) que tenham privilégio de acesso ao banco de dados podem ler ou gravar no banco de dados.\r\n', NULL);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;


-- Copiando estrutura para tabela hangout.paginas
DROP TABLE IF EXISTS `paginas`;
CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela hangout.paginas: ~1 rows (aproximadamente)
DELETE FROM `paginas`;
/*!40000 ALTER TABLE `paginas` DISABLE KEYS */;
INSERT INTO `paginas` (`id`, `titulo`, `texto`) VALUES
	(1, 'Quem Somos', 'texto');
/*!40000 ALTER TABLE `paginas` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
