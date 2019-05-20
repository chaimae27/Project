-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2019 at 01:24 PM
-- Server version: 8.0.15
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id_items` int(11) NOT NULL AUTO_INCREMENT,
  `name_item` text NOT NULL,
  `image_item` varchar(200) NOT NULL,
  `prix` int(14) NOT NULL,
  `categ` text NOT NULL,
  PRIMARY KEY (`id_items`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_items`, `name_item`, `image_item`, `prix`, `categ`) VALUES
(5, 'White Top', 'c8c1.jpg', 50, 'White Top'),
(6, 'White Top', 'db3d37a.jpg', 48, 'White Top'),
(7, 'White Top', '8e9f.jpg', 47, 'White Top'),
(8, 'Black Shoes', 'c.jpg', 45, 'Black Shoes'),
(9, 'Black Shoes', 'd5471.jpg', 44, 'Black Shoes'),
(10, 'Black Shoes', '0078.jpg', 48, 'Black Shoes'),
(11, 'Black Shoes', '56.jpg', 45, 'Black Shoes'),
(12, 'FITT Belts', 'belts-823257_1920-540x500.jpg', 3, 'Wanted'),
(13, 'magnolia dress', '11.jpg', 34, 'Wanted'),
(14, 'Rocadi Jeans', 'jeans-428614_1920-540x500.jpg', 3, 'Wanted'),
(15, 'Istwic Scarf', 'a-neckerchief-1317830_1920-540x500.jpg', 3, 'Scarfs'),
(16, 'Jennifer Scarf', 'a-neckerchief-1315912_1920-540x500.jpg', 34, 'Scarfs'),
(17, 'Andora Scarf', 'a-neckerchief-1315916_1920-540x500.jpg', 3, 'Scarfs'),
(18, 'Casoual Style', '2090.jpg', 40, 'On Sale'),
(19, 'Casoual Style', '2cx.jpg', 34, 'On Sale'),
(20, 'Manago Shirt', 'cute-955782_1920-540x500.jpg', 30, 'On Sale'),
(47, 'White Top', 'images (5).jpg', 45, 'White Top');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
