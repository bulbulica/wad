-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.35 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for wad
CREATE DATABASE IF NOT EXISTS `wad` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `wad`;

-- Dumping structure for table wad.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL DEFAULT '0',
  `password` char(50) NOT NULL DEFAULT '0',
  `email` char(100) NOT NULL DEFAULT '0',
  `name` char(100) NOT NULL DEFAULT '0',
  `surname` char(100) NOT NULL DEFAULT '0',
  `adress` char(150) NOT NULL DEFAULT '0',
  `account_type` char(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Dumping data for table wad.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `surname`, `adress`, `account_type`) VALUES
	(1, 'admin', 'pass', 'fsafsa@abc.com', 'Mihaescu', 'Andrei', 'Str. Caracal nr 10', '5'),
	(2, 'user', 'user', 'email@cba.com', 'Alex', 'Andi', 'Str. George Enescu nr 52', '1'),
	(3, 'gigi', 'parola', 'test@bitcomet.net', 'Gheorghe', 'Adrian', 'Bulevardul Decebal nr 80', '2');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
