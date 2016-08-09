-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.49-0ubuntu0.14.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table catalog.catalog: ~4 rows (approximately)
DELETE FROM `catalog`;
/*!40000 ALTER TABLE `catalog` DISABLE KEYS */;
INSERT INTO `catalog` (`bookid`, `bookisbn`, `booktitle`, `bookauthor`, `bookpublisher`, `bookyear`, `bookprice`) VALUES
	(1, 101010, 'javascript kungfu', 'abdul', 'kurama', '2015', 15000),
	(2, 202020, 'php master', 'boni', 'world compu', '2015', 20000),
	(3, 303030, 'nodejs vs php', 'surya', 'mvt', '2014', 25000),
	(4, 404040, 'super php', 'gedek', 'exo', '2016', 40000);
/*!40000 ALTER TABLE `catalog` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
