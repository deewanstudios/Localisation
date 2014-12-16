-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17-debug-log - Source distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for thesbdc
DROP DATABASE IF EXISTS `thesbdc`;
CREATE DATABASE IF NOT EXISTS `thesbdc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `thesbdc`;


-- Dumping structure for table thesbdc.lang
DROP TABLE IF EXISTS `lang`;
CREATE TABLE IF NOT EXISTS `lang` (
  `LangID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`LangID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table thesbdc.lang: ~0 rows (approximately)
DELETE FROM `lang`;
/*!40000 ALTER TABLE `lang` DISABLE KEYS */;
/*!40000 ALTER TABLE `lang` ENABLE KEYS */;


-- Dumping structure for table thesbdc.pages
DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_Title` varchar(100) DEFAULT NULL,
  `menu_Name` varchar(100) DEFAULT NULL,
  `content` text,
  `position` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table thesbdc.pages: ~5 rows (approximately)
DELETE FROM `pages`;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `page_Title`, `menu_Name`, `content`, `position`) VALUES
	(1, 'Home', 'Home', 'The Small Business Delivery Company have been helping small businesses, charities and individuals move their goods, homes and offices since 2009.', 1),
	(2, 'Services', 'Services', 'Core Business', 2),
	(3, 'Rates', 'Rates', 'Please note, these prices are just a', 3),
	(4, 'Testimonials', 'Testimonials', NULL, 4),
	(5, 'Contact', 'Contact', NULL, 5);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
