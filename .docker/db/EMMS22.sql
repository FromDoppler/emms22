-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jul 01, 2022 at 05:03 PM
-- Server version: 8.0.25
-- PHP Version: 7.4.20

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
CREATE DATABASE IF NOT EXISTS `EMMS22` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `EMMS22`;

-- --------------------------------------------------------

--
-- Table structure for table `google_oauth`
--

DROP TABLE IF EXISTS `google_oauth`;
CREATE TABLE `google_oauth` (
  `id` int NOT NULL,
  `provider` varchar(255) NOT NULL,
  `provider_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `google_oauth`
--

INSERT INTO `google_oauth` (`id`, `provider`, `provider_value`) VALUES
(1, 'google', '{\"access_token\":\"ya29.A0ARrdaM9HtKFoP6Bj_U_ep1D9GQcokAz5scTic3VMtJKeY0HOBOrSTPWFCi-PNei_JLFItRWJrGt2aDg2spol9k9Imb-YMc3vBszzx1TqZXpcYjEgjaStFqzHpd6IGfBiShXoHnxDVCRlPmlDyI35vTOop7mUH8kYUNnWUtBVEFTQVRBU0ZRRl91NjFWNVBueXpkb2ZyUmpKYmhZUTFjTU9jZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions_doppler`
--

DROP TABLE IF EXISTS `subscriptions_doppler`;
CREATE TABLE `subscriptions_doppler` (
  `id` int NOT NULL,
  `email` varchar(250) NOT NULL,
  `list` varchar(50) NOT NULL,
  `register` varchar(50) NOT NULL,
  `form_id` varchar(50) NOT NULL,
  `firstname` varchar(150) DEFAULT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `phone` varchar(300) NOT NULL,
  `country` varchar(150) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `country_ip` varchar(150) NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `promotions` tinyint(1) DEFAULT NULL,
  `source_utm` varchar(150) DEFAULT NULL,
  `medium_utm` varchar(150) DEFAULT NULL,
  `campaign_utm` varchar(150) DEFAULT NULL,
  `content_utm` varchar(150) DEFAULT NULL,
  `term_utm` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `google_oauth`
--
ALTER TABLE `google_oauth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions_doppler`
--
ALTER TABLE `subscriptions_doppler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `google_oauth`
--
ALTER TABLE `google_oauth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions_doppler`
--
ALTER TABLE `subscriptions_doppler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
