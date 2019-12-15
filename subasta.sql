-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.38-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para subasta
CREATE DATABASE IF NOT EXISTS `subasta` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `subasta`;

-- Volcando estructura para tabla subasta.especial
CREATE TABLE IF NOT EXISTS `especial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL DEFAULT '',
  `description` char(50) NOT NULL DEFAULT '',
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `price` int(20) NOT NULL DEFAULT '0',
  `deposit` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla subasta.especial: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `especial` DISABLE KEYS */;
INSERT INTO `especial` (`id`, `name`, `description`, `startDate`, `endDate`, `price`, `deposit`) VALUES
	(1, 'Coche', 'Subasta de coche porche', '2019-12-14 11:26:31', '2019-12-16 11:26:36', 5000, 1000),
	(2, 'Casa', 'Subasta de Casa en Alameda', '2019-12-14 11:27:40', '2019-12-16 11:27:41', 25000, 5000),
	(3, 'Joyas', 'Subasta de Joyas', '2019-12-14 11:32:39', '2019-12-16 11:32:41', 80000, 58000);
/*!40000 ALTER TABLE `especial` ENABLE KEYS */;

-- Volcando estructura para tabla subasta.puja
CREATE TABLE IF NOT EXISTS `puja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  `idSubasta` int(11) NOT NULL,
  `montoPuja` int(11) NOT NULL,
  `description` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla subasta.puja: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `puja` DISABLE KEYS */;
INSERT INTO `puja` (`id`, `tipo`, `idSubasta`, `montoPuja`, `description`) VALUES
	(1, 'Regular', 1, 80000, 'Subasta de tienda de zapatos'),
	(2, 'Regular', 1, 100000000, 'Subasta de tienda de zapatos'),
	(3, 'Regular', 2, 300, 'Subasta tienda de ropa'),
	(4, 'Regular', 3, 100, 'Subasta de laptos'),
	(5, 'Especial', 1, 100, 'Subasta de coche porche'),
	(6, 'Especial', 1, 100, 'Subasta de coche porche');
/*!40000 ALTER TABLE `puja` ENABLE KEYS */;

-- Volcando estructura para tabla subasta.regular
CREATE TABLE IF NOT EXISTS `regular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `description` char(50) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla subasta.regular: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `regular` DISABLE KEYS */;
INSERT INTO `regular` (`id`, `name`, `description`, `startDate`, `endDate`, `price`) VALUES
	(1, 'Zapatos', 'Subasta de tienda de zapatos', '2019-12-14 11:51:17', '2019-12-16 11:51:18', 50000),
	(2, 'Ropa', 'Subasta tienda de ropa', '2019-12-14 11:51:40', '2019-12-16 11:51:41', 80000),
	(3, 'Laptos', 'Subasta de laptos', '2019-12-14 11:51:57', '2019-12-17 11:51:58', 200000);
/*!40000 ALTER TABLE `regular` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
