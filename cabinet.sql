-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2025 at 05:19 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabinet`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imageurl` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `ghymat` int NOT NULL,
  `explane` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=910 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `imageurl`, `id`, `ghymat`, `explane`) VALUES
('ام دی اف با روکش ملامینه', 'assets/mdf4.webp', 1, 1000000, 'متداول ترین و پرکاربردترین روکشی که بر روی ام دی اف خام کشیده میشود ملامینه است. با توجه به این که ملامینه بسیار پر طرفدار است، این متریال در رنگ ها و طرحهای متفاوتی به بازار عرضه شده است و از نظر تنوع بالاترین میزان تنوع را دارد'),
('ام دی اف با روکش کاغذی', 'assets/mdf5.webp', 2, 1200000, 'روکش کاغذی یکی دیگر از روکشهایی است که بر روی ام دی اف خام کشیده میشود و در اصطلاحتجاری به آن لترون گفته میشود. این روکش از نظر تنوع، طرحها و رنگهای زیادی دارد و روکشی زیبا است؛ اما از نظر مقاومت با توجه به این که نوعی کاغذ است نمیتوان از آن دوام ');

-- --------------------------------------------------------

--
-- Table structure for table `sellform`
--

DROP TABLE IF EXISTS `sellform`;
CREATE TABLE IF NOT EXISTS `sellform` (
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `ghymat` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `meter` int NOT NULL,
  `totalprice` int NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` int NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `idk` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `password` int NOT NULL,
  `admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `email`, `password`, `admin`) VALUES
('amirmohamad', 'amir', 'amiam5311@gmail.com', 1234, 0),
('admin', 'admin', ' afdsf@gmail.com', 1234, 1),
('ttttttt', 'ffffff', 'fovala5319@orsbap.com', 1111, 0),
('rrrrrr', 'Hesam', 'mijisoj420@sigmazon.com', 2222, 0),
('rrrrrr', 'Hesam', 'mijisoj420@sigmazon.com', 2222, 0),
('rrrrrr', 'Hesam', 'mijisoj420@sigmazon.com', 2222, 0),
('rrrrrr', 'Hesam', 'mijisoj420@sigmazon.com', 2222, 0),
('rrrrrr', 'Hesam', 'mijisoj420@sigmazon.com', 2222, 0),
('rrrrrr', 'Hesam', 'mijisoj420@sigmazon.com', 2222, 0),
('rrrrrr', 'Hesam', 'mijisoj420@sigmazon.com', 2222, 0),
('rrrrrr', 'Hesam', 'mijisoj420@sigmazon.com', 2222, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
