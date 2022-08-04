-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 04, 2022 at 07:40 PM
-- Server version: 8.0.29
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EMMS22`
--

-- --------------------------------------------------------

--
-- Table structure for table `aliados_pro`
--

DROP TABLE IF EXISTS `aliados_pro`;
CREATE TABLE `aliados_pro` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image_home` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_home` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_site` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden_home` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description_card` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden_card` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_landing` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_landing` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image_youtube` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_youtube` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_magnet` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description_magnet` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_magnet` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_learnmore` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description_learnmore` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_learnmore` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aliados_pro`
--
ALTER TABLE `aliados_pro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aliados_pro`
--
ALTER TABLE `aliados_pro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
