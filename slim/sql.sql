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

-- Dumping structure for table wad.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table wad.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(0, 'admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table wad.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person` char(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table wad.orders: ~3 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `person`, `price`, `status`) VALUES
	(1, 'user', 1111, 'incomplete'),
	(2, 'user', 8888, 'terminated'),
	(3, 'gigi', 5322, 'paid'),
	(4, 'gigi', 1234, 'incomplete');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table wad.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `descr` varchar(500) DEFAULT NULL,
  `quant` int(11) DEFAULT NULL,
  `img` char(200) DEFAULT NULL,
  `category` char(100) DEFAULT NULL,
  `price` int(15) DEFAULT NULL,
  `person` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table wad.products: ~16 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `product_name`, `descr`, `quant`, `img`, `category`, `price`, `person`) VALUES
	(0, 'house 1', 'description 1', 1, 'Blue-Lakehouse.jpg', 'bighouses', 1500, 'user'),
	(1, 'house 2', 'description 2', 2, '3c8537f864c0233d876e99f2e56f7954.jpg', 'bighouses', 2000, 'user'),
	(2, 'house 3', 'description 3', 1, 'Greystone-Country-House.jpg', 'bighouses', 1758, 'gigi'),
	(3, 'house 4', 'description 4', 4, 'kilgore-tx.jpg', 'bighouses', 3999, 'user'),
	(4, 'house 5', 'description 5', 0, '2a890df371425fde3d551aea6caeccc3.jpg', 'bighouses', 2500, 'gigi'),
	(5, 'house 1', 'description 1', 3, '54eb988c272f0.jpg', 'smallhouses', 300, 'user'),
	(6, 'house 2', 'description 2', 2, '1432311062-54eb987e86698.jpg', 'smallhouses', 350, 'user'),
	(7, 'house 3', 'description 3', 7, '1432311156-54eb988e878f8.jpg', 'smallhouses', 499, 'user'),
	(8, 'house 4', 'description 4', 1, '1432311158-54eb988eefedc.jpg', 'smallhouses', 399, 'gigi'),
	(9, 'house 1', 'description 1', 12, '4c805e7a-5f30-4ded-8b7d-2166d29fbcd2.1.10.jpg', 'tworooms', 450, 'gigi'),
	(10, 'house 2', 'description 2', 8, '8_703_corridor.jpg', 'tworooms', 450, 'user'),
	(11, 'house 1', 'description 1', 5, 'Ansamblu-Pipera-44.jpg', 'threerooms', 700, 'user'),
	(12, 'house 2', 'description 2', 1, 'sell-apartment-3-rooms-cluj-napoca-floresti-1.jpg', 'threerooms', 799, 'gigi'),
	(13, 'house 1', 'description 1', 5, '969096cfc8d4e5e1fe1a6aabdf40ed49.jpg', 'studios', 200, 'user'),
	(14, 'house 2', 'description 2', 7, 'Florence-studio-apartment-for-rent.jpg', 'studios', 250, 'gigi'),
	(15, 'house 3', 'description 3', 1, 'studio-apartment-in-the-manor-2.jpg', 'studios', 300, 'user');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table wad.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `surname`, `adress`, `account_type`) VALUES
	(2, 'user', 'user', 'email@cba.com', 'Alex', 'Andi', 'Str. George Enescu nr 52', '1'),
	(3, 'gigi', 'pass', 'abc1234@yahoo.com', 'Mihai', 'Ion', 'Str. Foametei nr 10', '3');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
