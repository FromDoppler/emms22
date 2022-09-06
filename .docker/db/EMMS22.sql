-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Sep 06, 2022 at 04:36 PM
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
CREATE DATABASE IF NOT EXISTS `EMMS22` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `EMMS22`;

-- --------------------------------------------------------

--
-- Table structure for table `aliados_media_partner`
--

DROP TABLE IF EXISTS `aliados_media_partner`;
CREATE TABLE `aliados_media_partner` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aliados_media_partner`
--

INSERT INTO `aliados_media_partner` (`id`, `name`, `image_home`, `alt_image_home`, `orden_home`, `status`) VALUES
(4, 'Green Arrow', 'KLFJ5HOK4NH57HJNKQUMNVRIHA.jpg', 'oliver', '2', NULL),
(5, 'Reverse Flash', 'download.jfif', 'Eobard Thawne', '9', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aliados_pro`
--

DROP TABLE IF EXISTS `aliados_pro`;
CREATE TABLE `aliados_pro` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_site` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_landing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_landing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image_youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_magnet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description_magnet` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `link_magnet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_learnmore` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description_learnmore` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `link_learnmore` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aliados_pro`
--

INSERT INTO `aliados_pro` (`id`, `name`, `image_home`, `alt_image_home`, `link_site`, `orden_home`, `title`, `description_card`, `slug`, `orden_card`, `description`, `image_landing`, `alt_image_landing`, `youtube`, `image_youtube`, `alt_image_youtube`, `title_magnet`, `description_magnet`, `link_magnet`, `title_learnmore`, `description_learnmore`, `link_learnmore`, `status`) VALUES
(1, 'Batman', 'superman-white.png', 'batman-logo-amarillo', 'https://www.dc.com/characters/batman', '4', 'The Batman', 'Batman (conocido inicialmente como Bat-Man', 'batman', '1', '     Batman (conocido inicialmente como Bat-Man y en español como el Hombre Murciélago) es un personaje de cómic creado por los estadounidenses Bob Kane y Bill Finger,​ y propiedad de DC Comics.                                   ', 'batman-logo-2.png', 'batman white', '-FZ-pPFAjYY', 'batman-logo.png', '', 'a', '     descrip                ', 'a', 'a', 'a', 'a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aliados_starter`
--

DROP TABLE IF EXISTS `aliados_starter`;
CREATE TABLE `aliados_starter` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_site` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_landing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_landing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image_youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_magnet` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `description_magnet` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `link_magnet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_learnmore` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `description_learnmore` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `link_learnmore` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aliados_starter`
--

INSERT INTO `aliados_starter` (`id`, `name`, `image_home`, `alt_image_home`, `link_site`, `orden_home`, `title`, `description_card`, `slug`, `orden_card`, `description`, `image_landing`, `alt_image_landing`, `youtube`, `image_youtube`, `alt_image_youtube`, `title_magnet`, `description_magnet`, `link_magnet`, `title_learnmore`, `description_learnmore`, `link_learnmore`, `status`) VALUES
(1, 'Superman', 'superman.jpg', 'superman classic', '', '1', 'Man of Steel', 'From Warner Bros. and Legendary Pictures comes ', 'superman', '2', '               From Warner Bros. and Legendary Pictures comes \"Man of Steel\", starring Henry Cavill, directed by Zach Snyder. The film also stars Amy Adams, Diane Lane, Kevin Costner, Michael Shannon, Russell Crowe, Antje Traue, Ayelet Zurer, Henry Lennix, Christopher Meloni and Laurence Fishburne.                                                        ', 'superman-white.png', 'superman white', 'RWnXuePjXAU', 'Man_of_Steel.webp', 'sups', 'title', ' descrip             2                             ', 'http://manofsteel.com', 'titulo', 'desc                                          ', 'http://manofsteel.com/index.php', NULL),
(2, 'Federico', 'Henry_Cavill_by_Gage_Skidmore.jpg.webp', 'superman classic', 'https://www.dc.com/characters/batman', '1', 'titulo capsula', 'Batman (conocido inicialmente como Bat-Man', 'aaa', '2', 'descrpcion', 'download.jfif', 'batman white', '7EmboKQH8lM', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `google_oauth`
--

DROP TABLE IF EXISTS `google_oauth`;
CREATE TABLE `google_oauth` (
  `id` int NOT NULL,
  `provider` varchar(255) NOT NULL,
  `provider_value` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `google_oauth`
--

INSERT INTO `google_oauth` (`id`, `provider`, `provider_value`) VALUES
(1, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(2, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(3, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(4, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(5, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(6, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(7, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(8, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(9, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(10, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(11, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(12, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(13, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(14, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(15, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(16, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(17, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(18, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(19, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(20, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(21, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(22, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(23, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(24, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(25, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(26, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(27, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(28, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(29, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(30, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(31, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(32, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(33, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(34, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(35, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(36, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(37, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(38, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(39, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(40, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(41, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(42, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(43, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(44, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(45, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(46, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(47, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(48, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(49, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(50, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(51, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(52, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(53, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(54, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(55, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(56, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(57, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(58, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(59, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(60, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(61, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(62, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(63, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(64, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(65, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(66, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(67, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(68, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(69, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(70, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(71, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(72, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(73, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(74, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(75, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(76, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(77, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(78, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(79, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(80, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(81, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(82, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(83, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(84, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(85, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(86, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(87, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(88, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(89, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(90, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(91, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(92, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(93, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(94, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(95, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(96, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(97, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(98, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(99, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(100, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(101, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(102, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}');
INSERT INTO `google_oauth` (`id`, `provider`, `provider_value`) VALUES
(103, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(104, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(105, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(106, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(107, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(108, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(109, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(110, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(111, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(112, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(113, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(114, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(115, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(116, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(117, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(118, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(119, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(120, 'google', '{\"access_token\":\"ya29.a0AVA9y1vSr22MU6e-xme1HXp3avQXOSk9IWIs10FCvlZbnleN1oOHhciSlXdR5qlOB1YN_QikDnyiBTqNb2BFjUalXd0C_tmX0qiOJ9mdQZJ59drOAmGWm7YRFknDXUQ1kcytCozzN_DOWjMHTF0kvSSJ1qAoHWwaCgYKATASAQASFQE65dr8YFdP0hftJeRU7fUcMktyIA0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}');

-- --------------------------------------------------------

--
-- Table structure for table `log_errors`
--

DROP TABLE IF EXISTS `log_errors`;
CREATE TABLE `log_errors` (
  `id` int NOT NULL,
  `date` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `function_name` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `description` text NOT NULL,
  `data` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

DROP TABLE IF EXISTS `registered`;
CREATE TABLE `registered` (
  `id` bigint NOT NULL,
  `register` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phase` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `industry` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `source_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `medium_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `term_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

DROP TABLE IF EXISTS `speakers`;
CREATE TABLE `speakers` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sm_twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sm_linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sm_instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sm_facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image_company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `day` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `image`, `alt_image`, `job`, `sm_twitter`, `sm_linkedin`, `sm_instagram`, `sm_facebook`, `description`, `image_company`, `alt_image_company`, `day`, `time`, `orden`, `status`) VALUES
(1, 'Ben Afleck', 'bafleck.jfif', 'ben-afleck', 'Actor & Productor in Warner Media Bross,', 'benaffleck', 'linkdin', 'instagram', 'facebook', 'Entiendo que estos son los más bajo y no deberían llevar link a su sitio', 'batman-logo.png', 'batman company', '1', '13', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions_doppler`
--

DROP TABLE IF EXISTS `subscriptions_doppler`;
CREATE TABLE `subscriptions_doppler` (
  `id` int NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `list` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `register` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `form_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `industry` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ip` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `country_ip` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `promotions` tinyint(1) DEFAULT NULL,
  `source_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `medium_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `term_utm` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aliados_media_partner`
--
ALTER TABLE `aliados_media_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aliados_pro`
--
ALTER TABLE `aliados_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aliados_starter`
--
ALTER TABLE `aliados_starter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_oauth`
--
ALTER TABLE `google_oauth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_errors`
--
ALTER TABLE `log_errors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
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
-- AUTO_INCREMENT for table `aliados_media_partner`
--
ALTER TABLE `aliados_media_partner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `aliados_pro`
--
ALTER TABLE `aliados_pro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aliados_starter`
--
ALTER TABLE `aliados_starter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `google_oauth`
--
ALTER TABLE `google_oauth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `log_errors`
--
ALTER TABLE `log_errors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions_doppler`
--
ALTER TABLE `subscriptions_doppler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
