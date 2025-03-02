-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2025 at 07:47 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(10000) COLLATE utf8mb3_persian_ci NOT NULL,
  `text` varchar(10000) COLLATE utf8mb3_persian_ci NOT NULL,
  `imageurl` char(100) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `ram` int NOT NULL,
  `storage` int NOT NULL,
  `dual_sim` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `ram`, `storage`, `dual_sim`, `image_url`) VALUES
(18, 'iPhone 13', 4, 128, 'دو سیم کارت', '6.jpg'),
(17, 'x9b', 12, 256, 'دو سیم کارت', '7.jpg'),
(14, 'Poco x7 pro', 12, 512, 'دو سیم کارت', '8.jpg'),
(15, 'Poco x6 pro', 12, 512, 'دو سیم کارت', '3.jpg'),
(16, 'Redmi turbo 4', 16, 1000, 'دو سیم کارت', '9.jpg'),
(19, 'A55', 8, 256, 'دو سیم کارت', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `passwords` int NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `passwords`, `is_admin`) VALUES
('hh', 'hh', 0, 0),
('cc', 'cc', 0, 0),
('cc', 'cc', 0, 0),
('bb', 'bb', 0, 0),
('ll', 'll', 0, 0),
('mmd', 'eb86', 1234, 1),
('kk', 'kk', 0, 0),
('admin', 'admin', 1234, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
