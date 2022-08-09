-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 09, 2022 at 04:47 PM
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
CREATE DATABASE IF NOT EXISTS `EMMS22` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
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
(5, 'Reverse Flash', 'download.jfif', 'Eobard Thawne', '9', NULL),
(13, 'Federico', 'superman.jpg', 'superman classic', '2', NULL);

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
-- Dumping data for table `aliados_pro`
--

INSERT INTO `aliados_pro` (`id`, `name`, `image_home`, `alt_image_home`, `link_site`, `orden_home`, `title`, `description_card`, `slug`, `orden_card`, `description`, `image_landing`, `alt_image_landing`, `youtube`, `image_youtube`, `alt_image_youtube`, `title_magnet`, `description_magnet`, `link_magnet`, `title_learnmore`, `description_learnmore`, `link_learnmore`, `status`) VALUES
(1, 'Batman', 'batman-logo.png', 'batman-logo-amarillo', 'https://www.dc.com/characters/batman', '4', 'The Batman', 'Batman (conocido inicialmente como Bat-Man', 'batman', '1', '     Batman (conocido inicialmente como Bat-Man y en español como el Hombre Murciélago) es un personaje de cómic creado por los estadounidenses Bob Kane y Bill Finger,​ y propiedad de DC Comics.                                   ', 'batman-logo-2.png', 'batman white', '-FZ-pPFAjYY', 'batman-logo.png', '', 'a', '     descrip                ', 'a', 'a', 'a', 'a', NULL);

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
  `description_magnet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_magnet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_learnmore` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description_learnmore` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_learnmore` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aliados_starter`
--

INSERT INTO `aliados_starter` (`id`, `name`, `image_home`, `alt_image_home`, `orden_home`, `title`, `description_card`, `slug`, `orden_card`, `description`, `image_landing`, `alt_image_landing`, `youtube`, `image_youtube`, `alt_image_youtube`, `title_magnet`, `description_magnet`, `link_magnet`, `title_learnmore`, `description_learnmore`, `link_learnmore`, `status`) VALUES
(1, 'Superman', 'superman.jpg', 'superman classic', '1', 'Man of Steel', 'From Warner Bros. and Legendary Pictures comes ', 'superman', '2', '          From Warner Bros. and Legendary Pictures comes \"Man of Steel\", starring Henry Cavill, directed by Zach Snyder. The film also stars Amy Adams, Diane Lane, Kevin Costner, Michael Shannon, Russell Crowe, Antje Traue, Ayelet Zurer, Henry Lennix, Christopher Meloni and Laurence Fishburne.                                                 ', 'superman-white.png', 'superman white', 'T6DJcgm3wNY', '', '', 'title', 'descrip             2                      ', 'http://manofsteel.com', 'titulo', 'desc                                   ', 'http://manofsteel.com/index.php', NULL);

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
(1, 'google', '{\"access_token\":\"ya29.a0ARrdaM9AC4n4pInjdavF0d7NU1ECN5wydyvFhZCCnQhteMz4QtaXw50e-Ov59P-ZG7N5yLTN5wtDqL4dR9mml0Ys7id2KCqXRtdGeFO9dkQoexqdBXAfAJDTYM-tSz5txThYIwsQHtRDgls4XQl-z_4s_UWWHuo\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(2, 'google', '{\"access_token\":\"ya29.a0ARrdaM-1ARzDnJJRW2lj8Zyt9zx2p-LZASkTxeU2dN0dkilAUS5YUDYS7A4aoD44cZIUvD-3CDOFnK_GJT2s_vQi7ihU2kv4b3ghBbMQnVrnQJ8xTp4zMpu6hPrm1oZc86ON3snpcXPly-i_OZQizYSNsbVQRBo\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(3, 'google', '{\"access_token\":\"ya29.A0ARrdaM_s5Ev99a9g6A6nizjISUW2MLxTPJ6irjPLMnJd99-dYs5kqvw5mGVZxrP4YGbreu5yxUcYyZOXWshs0zTBLMboNM6cnlyuC39NzobSrX8FoGRv90HzbSpjktWzN4jmFa9LBPkL_RG8sIhlGqg-lZnREVwYUNnWUtBVEFTQVRBU0ZRRl91NjFWZVZmTGF3ck1MWkhmdHY3WWJ0UVgwUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(4, 'google', '{\"access_token\":\"ya29.A0AVA9y1sUyD8Pk-ueuSBS00IFJBQ_B4qtrakqATwf_QGFbH_wJbEAC3t-8M_FbjzUdlxtlGybGCvJ7lcGah02NcCIo5c0STWnPX8yo0zlUAfXNbHD-fpyYBiX29HEtgetTAeqbk90ubzNeejvxl8y1ZuBAhoe2YAYUNnWUtBVEFTQVRBU0ZRRl91NjFWSDBMRUQ0djZQMXNiRFZOaWpKZEROUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(5, 'google', '{\"access_token\":\"ya29.A0AVA9y1s-ZQr1wkPG3pfQF0MSRk3A4k1gtd_TUijnz-bpvPcvDIa6O2hROhpOYCqvwP584ZvH5Dqttn-hIKZ2BMwHddWnySXYsvlTIKuuLcDgdemB1k57efUN5yrVE3lv-MlEr_lWfMNXTBuHLQBUrHcOHNrqMz4YUNnWUtBVEFTQVRBU0ZRRl91NjFWV2YxV0tacVhRUXVpWHBLdUI5cXhOdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(6, 'google', '{\"access_token\":\"ya29.A0AVA9y1tytOgbvs0sEn5KISVxQd5uFSJg45TuLk_rceHERwg4GKTqLwnh51aD-1HbibHZO-cnPgK91DpF1NLX0ayPvcY-wkFe5iRUh_QRf7ByhmsE1GEymriGx9dAK53-49BaGmWERSMI8uuOpft5I3WLw8SUxyAYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MEt4a2hWbFhrTUVlZnkzbnM3eXRDUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(7, 'google', '{\"access_token\":\"ya29.A0AVA9y1tVTvS8_xTsYJrwA4MQpEB_Kwnt0-hb5wlnz_a9wWc05kBiI_QHqg1vC1tu4h9EcFtCF44ugaYv_Vz83oSQau8N4kLmCAC6ncKHpixQyBe7zpCdVFxMQoHXpvmoAkUa2ZJgfifRolYcSCpisH8Yp67ruOQYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4V1o1S3dUV1FfWDBwUmNNRFFPUEVsUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(8, 'google', '{\"access_token\":\"ya29.A0AVA9y1vG2A_7Ouu9W-ICu4yZQMGVyuAZV1mVoDa49YbK22Kx_A_qqi6zDE0_tnzWzzyBvKx0u1DXpILBE6wF4lu1R6V2sDjMt_azGYAYe0Z44CQGBa-jDj-IXzTxgH8U88zCaN1YL75tPzSwClqfpkC86nALF0gYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4R0pKLVRqRVRQV0ZyVFJfZHZzWmxqZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(9, 'google', '{\"access_token\":\"ya29.A0AVA9y1uQL5ZQyFiQKmLErxd_HuWq7RfkIN2obiTx0qsnm8Zt4UoIVpa762gusHO1VQgy7GeytIK-HZwgKcfxMFTIvQCHqOjZdQOTXkgtX_qLG-7rL7jGjsyzj3UhZ3NNrzNo0hxKG-FE8hafldtdyuWqwcs7xocYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4dzdsNGpCQld6NjJrb1VlazVqTVgtQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(10, 'google', '{\"access_token\":\"ya29.A0AVA9y1taWlwIVh417F27Q7Zk6-6Sbcc7oU-cXIwamIG7o5-ZU-uwoUpX4HHDIwZiYFpY-zWS8PpvIdAEqT-Hdsv4ya0DgEiFse32hJ-Ow4Z-rVspUrDj1Iz0tcp3OoUipprngDxxEoKKHYI4dQfw0FRK8tmiT6MYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4RUpjck5FSmFKTUlGdDFLSXBhV3M4QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(11, 'google', '{\"access_token\":\"ya29.A0AVA9y1uDwMBsZ7TvBllrX20tXwjgGzz_gRbqRBzuAfHBcq_AElXahAEM-6eo6Mn04on8YR3KXBoE3PtD6fZsEHY9xf2edQAIMc8wAqlG6P6hHbP0t9csvCa7BFMUIYqFDc1Jh1uxz2VDzSav8vBOWV5ZWTCTorYYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4THMwQWtTem5fV2IxWERXQnFLeThsUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(12, 'google', '{\"access_token\":\"ya29.A0AVA9y1tW2WfY7K_Xkz4VLbeSuuKlvFjIsnmDHi3h--UN8TLfQj2IQ3UnfEIG6ScG6BEm4jifeW0jDeVg7LVwP-rOaIQyfwP5xJmc4gcPvxVZ08ozIKcbXCVLCy8c3xJcb3zV85M8TCFAlIcf20ZSL-sVwfpUB6sYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MEVic0RpMUNlellyUHRNdlBRNGphUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(13, 'google', '{\"access_token\":\"ya29.A0AVA9y1vwzaiehdf-ZBG4KNAje0gcpiPdeYMer6j8PWi_9oVCBowhsUByCH9aAr472wXyPwB81QfzVuT2vQvYuofXOYpJdJuiy5p1v5FOZLYZJO19JH9ExBDvVOjmeheVz1M4gSAeZjkzCJAbKcRXrkAK7aNRceAYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4OTAxNTV3aDlhY3RTQTk1X2RCdjRCUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(14, 'google', '{\"access_token\":\"ya29.A0AVA9y1uYZUh6_dvDV5zGP2dfqWwuh7rH4eK6j_fnlkzA5ITgh3Z8R5Bp9qWk6_v4_eBXNlgOobWx79BlypLPjtKjCSgmT6c9IobAcinavSJckO2_fu9fZx8P0cSKcj7zQAeNfSaD8jmqmcx-CO8nYG2Ormov-a8YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4a25Nenc2cDBRdVlXNHYwX1hyU1hvQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(15, 'google', '{\"access_token\":\"ya29.A0AVA9y1sHPoKuBu2LM7mLLcnof3o0kMbbJFgQVHCO_l7ush4GR5BoLX5lTzfUqmrqGY6dep-hSwcaxsEW-EbkLf9tNRkGCYcQAs2JIkbUEpf0hMnlyCleQkcDea_oe7ElRyW-_FSeuXKfw0lGggT43BhJnruCrV0YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4NERFbnN0WnZlM3hXdDhFS2ZKb1NoZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(16, 'google', '{\"access_token\":\"ya29.A0AVA9y1uKt4C3YOB2FzT4i0XGPLqG5BgvFmO4hibyvypsWaqeykb9MeGHEclECzaKp4qK72_KwLo8C-WA0f3TkSWYIS3Fz3rOIjweBUo2F3QhfHwFBbCYzJmvhcMJ7r5LtWgM6peSqVUjq00-ZMs4wh-Hlmm-39kYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4XzdWbUlQdTJDRGt5TnlnNHZuZ1JtUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(17, 'google', '{\"access_token\":\"ya29.A0AVA9y1t2oGNt_rpEGO7RQNeiy_ue2Hjqb0U0WxvkTkDhDd-Tb9YWxw9GIMDcUIrB_S5Ud2TWGrITAzNQdaU9qS_UdeSp07YAI1zVyEg5hcH_9fyoDlaccNIT7UZ0LardDSZPSrrYs5m2g6EWODtyn0L7zTkIXT8YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4YWdybHZjbkIxeGlvcS1zZTVzVFIzUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(18, 'google', '{\"access_token\":\"ya29.A0AVA9y1vjq3_b2JuQu--ps2TLLIJoyKYgP6RdD7kU12HjCFYM6GlLiIGO16VVdjg3krDrieqFTe8HPX7TxSTlhVh-sKvumcIZtg5a4JKNHfOg2u-gdQKATnr_kINrwHeQEZg459f0evnpPYapI0x2_TOK5d3iwwYYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4cXAxVjRuanc0TVI0MENvbWIybGwzZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(19, 'google', '{\"access_token\":\"ya29.A0AVA9y1sDvtFumn1YrDVucqe0CGkpFgsfHmRp95727gu_Uar5Rgza_aUNrnBt-RbmWtO4eRJjdceUaKr_cphQ0Ij5EgGaMV3KkesPjCaBBhUr0GEgAvbOG4tDX55pWbnDinSApkEkLJ4QcZcIBo8EVjgRzZEvkeQYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4STBWOGhDaVl6cm5JSTVyYVlYX04yZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(20, 'google', '{\"access_token\":\"ya29.A0AVA9y1sbMX36sA5k4OIgjx_oiA0sAqaXH_8Ayjgf5xrAc89X8doNJPfQ5YIStWS9LlqFqgxNLMp0_Tb9L3VJqAXXNtakHw8vSZSLwG9w8IQVLtm-D_P2I_4mHyNqZnPbKiHkVI1eEEN6ZiNDOcPIFVB3vERD6yMYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4Q1pjZGc2Z2ZZNU1pNlhQREpZUGVIUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(21, 'google', '{\"access_token\":\"ya29.A0AVA9y1vLq8IGJ6lqSb05TP_Mz8qgn7SZsvlXqWbEgZb9-Xfuc99ZvQuJaoaTw6rpzvCtubwCSFBozSR2EJKOU-ArYYbmfQ_pGaMmKQe4kZRMfLKJjUry0MVDqYpMokcKw2NWmi8NQ7gE5zBt_hpIW0B4w9WupYcYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4NlJoY2Rab0lLdTFET0ZfaGRMYjJqdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(22, 'google', '{\"access_token\":\"ya29.A0AVA9y1urDr_YKiMexIX-6YlPiKWejmmF21RwM3SpIU-jgAZuuv8qFj9xCiiCAZ-RpYaGA5i6QDPouCJ-HuYndrJabYc1Uu0oxwfaSV2YWvhqNYv_Rvaszjqpng01C6UFnHziq3L8vbCbxZ6gPjE-77UzapHizJYYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4bjFVZ3VlUW9VakU4Qkp6WTR6Yzhxdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(23, 'google', '{\"access_token\":\"ya29.A0AVA9y1tstw8m2g9bzcEztqnGPbPoUxju3deRP12FQxuQ6R0wD9CU_DwBf5t2_WQfXaAMW8qb1cxJqkTzzxL6e_pPA8RLrYZx75viX6CCZ34R6Y-x543gD5eY9_5iaHJ0853m8LCRA8Zc2hFr9j_Zli9dYQdEB9cYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4SXBhZ2xYTmZwS0ZXOVpqUTZucHJfUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(24, 'google', '{\"access_token\":\"ya29.A0AVA9y1uiiUoEI9_7KleesaNqFuskqhExnETK1Nur3GBcdWX6yqR5WzbWKeOacDsLtOSBr0hfKSgJ3JHMMQSSKilYfbyO9-GI3sa0abxsJVHzxWEIBnSt9UeB_pC4IDNEAyn33k8VBf1GBNaS1-b7cW3VOzhMDogYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4UkpJbkhfamhtTnRvNXJ2UEVPdjJZQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(25, 'google', '{\"access_token\":\"ya29.A0AVA9y1ummZ33sIiDHlUBh-yOwSaW--E7fINpXLGV6LChvNmQAwOICT8CGmBrtaIiw9x-Aynt2R6LItmzN_iIvNswrNg1t738YvesmUEby85IAb2kV9rUWnFIG60uci-8X1SjlMGF1rxMrNO-swy2f0nokre1L6YYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4azhxNVdYQkllMW4tdnFxbFd4d2MzUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(26, 'google', '{\"access_token\":\"ya29.A0AVA9y1vWvci9RIlBMXl-VoCFHOas2JNUQDavbebvQBrPTWRx9DDG0kWXiuH2kCJ-xSbpWOp7bkCmd7A5aK8Hh5T7Qdig_IdqbadIeUyOxhxkpsMPPnMFV19aJ3ryW5857_-McN6Dj-dYbZQhF4ghv0e_QiNzNmUYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4QXQ2X2pKU3RBQzhhUVNBTGhuY2tyUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(27, 'google', '{\"access_token\":\"ya29.A0AVA9y1t9DiKtbTziMGL5abP_7M69oHVqics6cdk9vcYQ9gF06ClOdDNxHvXAuLfa4rX2lMBgvPBtKAvD6rxVxAaFAxDUAAFlla3AKGgcUKZ6NNj6yQTd3vPbZQ5XCVHzy5mu_X4u2TCIFgnMU1aieWnBky--rxwYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4cEVCMDJ4U0xOTWlZd01QNy1pUHQ2UQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(28, 'google', '{\"access_token\":\"ya29.A0AVA9y1thUzPiEWNoK7UAkzUvcFjT9NDbprhLDGL89T3pfhYoJ1xi5oFxt0AMR8iYI-K3IpG9Vfl0O-DjWq9ISdLP6YNJZoa9mKtSR8ffTwm-gVS6beYK0u6Tnm3f4RgSTjPgci2N0Nhvkpn33eccarlUSMfHbh4YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4SFFjR2JPMUxvMG5Gd0N5Sl9YYWVBUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(29, 'google', '{\"access_token\":\"ya29.A0AVA9y1vOygtiKDbIRnxPcAut2aRV54Xl-tK1dtoFFKwdYiYOoks-o6M2w1yc2ksldnUkyUAFmX0gkDDvI2KLMT7DzITJ609N481Na2nf2mPlud4iIdeu9p7-_e-kR0XDuRDVNUqcjhB5U25RnuZ4MtH8VDIPX4kYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4ZFZIaXFtWjdIa2Nrclp6YjVLSUdQdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(30, 'google', '{\"access_token\":\"ya29.A0AVA9y1tZVgpuLmFwzb_yz45Q09qL1bqLqlCrzvFeAFtA8RxVrP8zoOpSgB7QnUl-FUIyl2eZv4AdMyw3b6QxNfR9vP7ViV7u8z1ddOHImkhcKKKWoGAymdfMZZun7O18LCUWMO84X2V8p53-JHexxYoidMDSir0YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4dDM3UmxTVVphS1NMb3FZd0JtUmQ5QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(31, 'google', '{\"access_token\":\"ya29.A0AVA9y1trGr12AONqFkIjrvvawd1AV5btnqjLKWG3o29co9ZROhGBSY55HIRnu0Sb1mpjMZX3DZrK1pg3j9Ngz3UtR1tnE1BDik_zKGU8oAwmlsxnZfco0AnZlba3UlX0JzkwPpSmKoOGmtRlCC8V5J_YKuBY7UAYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4eFFiWmNIRlZNTG5iUTBmanIwSk5Hdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(32, 'google', '{\"access_token\":\"ya29.A0AVA9y1sbIeRN-QZrGPNvDP1FmKxsNpJBawNJA_qe_80sxOM9Psr1w1-B0L9x3SufjfK_ubjxNJt-aQ0ksLSH0TiCiizblmx0Kv0F1_GSJ0DPYM26KHUTfckOus1cFEYQ52GI3vIt_J19XGu0_8CC6MTTjvogCbUYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4dEtfWmVMdlBoN2R6eWJmSEFsZGUyZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(33, 'google', '{\"access_token\":\"ya29.A0AVA9y1ssVv3NC9fmrx9jdxq79CruXZyNpUDNbdydHhevnllksuaQ9hIjwuOg0I25OLYe3pRL-9WGhdmXTks1-osXJgGZ08n3M6goz7WIfXxaqjnv7P8fOUGVY8X-655Pau2HfV2ZhRKFiAk3nLz38efz6ccCt08YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4V1JkaTZBeHVydGhlaDV0dG5LNS1Edw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(34, 'google', '{\"access_token\":\"ya29.A0AVA9y1vgocsI4jFwWyOKZEKit1W2KkaCVqREShHfp1zxtvudKq-FQzOVu9q_QfKUR7CppLR91NgNFPmXYr3rN2dUFekRwyvbC12oe-k7skACv-CsfnwEyBom3hhbFK7MsfZBEcRsYBjUO07CXWnY4XF9HCyvQ1kYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4cWFkd0RrbGVPdHM4NWVUXzc3LWI0QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(35, 'google', '{\"access_token\":\"ya29.A0AVA9y1s374uUtzlAxb2jb445jSZS2NdEwap2-RRZ-iOkWICnX-ZqYymUCCmxw1xpxyvqC3xSWHJHBx-1AbpG7DYaWET2HclyeeG7yFrPLew791xYvoRBIPadbjzfBuh_n413IVZkssEtQrJvxmN5Y3nC6t_cw-sYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4UVRuRFplN1l2QzdyNXZHS2p5VWl0QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(36, 'google', '{\"access_token\":\"ya29.A0AVA9y1s-03mjlsu-COoVA3ckGwVmAKKFTHFtTWTwIMJp-5LdIADvMRrNORURP_QGmYmhh5DVyMAKZw9WVcF0ZDQl3fjOvm7TN_R_8kX0S8qTtOZ8sxnhSwO_ilDxolQ0OUfNbXBCyzJD2zcbcaOzUUWlJTdTXvEYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4TjlpaU93UTZyOVVKTzZWa1RCS1dxQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(37, 'google', '{\"access_token\":\"ya29.A0AVA9y1vnlLfeNuo2utBhSaLqiAM-nxwsQINxVbhgn-5nhh706m-ViknPWuP2A-7aoyacGdrXbibvcfFRtBVGV8H0-HzLDMbzgIW1SwAOFuoHLzUB9G7MN05WHESRxrqokKGJbH-bMbu93n3W7K5qy-eeqeNUrXoYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4bUlaV2JGcldSUjZseFNYX2JvWWhFUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(38, 'google', '{\"access_token\":\"ya29.A0AVA9y1tA-nCk0VtbDKtQN6HFokYDPAQ1Usfn3ePz6Vyr0_4J65dHsfzWuSPNIe3eWxgklBq2csLbQdE4N9nrU7wm6SIqVZBWegs4NpRz_yRkEKfCJ26LYWB7fC59ikD6leDIAmOpP5P4otJijIExx6E83F-CaPwYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4QVBZb3VfMXg4c2FWVFE3ZTNFempBUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(39, 'google', '{\"access_token\":\"ya29.A0AVA9y1sXi4nirWufQgta2dN5TsX5xZfy7_Ia77iAAlqwvU4_1PGaZ_Y34IQ-ekMqdZ5dgTeG_AIl8-RyWCiahbP4zrNpg-7RF6BM01KdMO7FBMGM6nsj_EmXfEp7MCiAN-3Hb5Weum230MTtasFUWUVqXcC1ScsYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4LUpPX09HQjhlbUd0a0tWOXZLNUduQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(40, 'google', '{\"access_token\":\"ya29.A0AVA9y1tq0qN_8H9BA73T_Wy2Nuxd8HCQyf6b_LPrL4JSGNUZikaBM52kOe0IX42BrU0PUdovweXYJsDfkWTNv827z2ELs-0nh7ucRa2ks5JFk7veBuXludMrM9gXmFjE4zuMnyJIdDOAX4G2C60fimZlPtHfPZoYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4ZXRuQ0U2bkF5UEhNejJTekNIb3ZwZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(41, 'google', '{\"access_token\":\"ya29.A0AVA9y1sA0eUFLbCSB8dRO9oeGE8vzwOtoOAzu-NyIqQRGAssw-lkkQvcEODaznm3F9NBpg34zICJB3InQmpqF3E5LxIY1sXbyM1aAxxC9fRzlXxiqV9wqQE88Ky_n7mGHAXkbO0_KEF8nddEFluuRTmiy6Ue6PQYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MVFFemwtSzUzWTYzYlZXODNTdUpNQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(42, 'google', '{\"access_token\":\"ya29.A0AVA9y1sejZTWl6kXti4BzrXLlRJEfIcLVUBT3p1zG38qsej2lIs_AGuRxOMsy1z2mTtu7fAUZgEccU5Xr48ZTe20z9TVrooH9MZrGvqc1HDhU6m8me0tqVFDMh4C83wKUDZ4zE54-VfP8j-Hh2sRp2PEtEfYhioYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4aE54NU43UkpNLWJ4MlVMS1M3bVIwUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(43, 'google', '{\"access_token\":\"ya29.A0AVA9y1u1mqSb1PFSyMxf10QgTxc0P_yXgZiebipJBActpFciCZ0iH0eu7D47UKeF4J9doC8Kmv0kAZwUXwqDMYM2dOBsm7K53EPwOkJeAeTmP9IkALsSj_zkLT_yfU_SNBnMaf8ESnekY7Kkbd_EqP8PUSEil7EYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4aUhNZmt6TnQxdEI2a2c3bElXaFdydw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(44, 'google', '{\"access_token\":\"ya29.A0AVA9y1sKwAvkXlRcp9nVvtQnELp-fzDof0TpKQ0ZNZ6yGvWHD_5FkmQ8fQupLrS92IoVkLAb_9oPf4Iv_r658HbtF8awTah6w4dGB0jChyetZMMmelKjmpdq2o80T9uusIHN71tFJKLVOMv2WDosO-AnRfLKhw8YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4WHJSQkZJSWRWOWRCWnRWUFdSaXpuQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(45, 'google', '{\"access_token\":\"ya29.A0AVA9y1uAviNIiVgL5WBVIywzzJPl3ATBnJDeq_pN9YAKCuugGGt-Up-Fg2MCPdyCaYF6U2P1Rh4p1NuwhBGzZsVa3m1nUV34Sz6EoHyWMjcOLnAQjH8qQnxxz0vd-CxZfb4F2-h8VlBIBFf8yJ-4NVGFvzc-s3AYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4VUl2YU9uM2M2ZS01ZlFGd0c2OURSdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(46, 'google', '{\"access_token\":\"ya29.A0AVA9y1tSFXk7gkPxuocI-L6B0w1b-9qRiPm9mFrRhh41PheBoDeAnrePau0yqL7T0Sx2foiKMuhf9kYtmGcTC4mmShPXQWlb_9fmkXxghR9mNqUkueNcjspengu4IVPrxL5eaW2paI7gHniuRjhCv_-s5eWJoCUYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4Wi1SMWhkdkluNDJrRlJ0NzYyRkdrZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(47, 'google', '{\"access_token\":\"ya29.A0AVA9y1tIRtbPBVscxt8dkRkYju1tLfDQhToC_iiDGoPW-FHQVmuAeh6Hyt8QRxD58B_md5ElYVllVeFfylIOQUvzklMuL3QB-ESVyf7S7LE-2ZnfV1cEuCJ6UBcDCE8M4WIcbM5F_hzwVoMuxn1SjdXnRul2HBUYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4U3BKQl92X0lsaGdQRzNFVUV2U3Awdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(48, 'google', '{\"access_token\":\"ya29.A0AVA9y1v2vVp7ebV0uQiR3_JJi69A1eALmslaVDTk-DrreU760B3CV_Kr3UA4DMGfZO538TxYQHdFqEHCnggsh3zY-vkYgr8tD6E4chcQk6beXxxiZ2y2kuNG6cZ6_uCTpeKmMmpuh4iRAdjaSjkBSE0Z7YCg6sYYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4TmxVeGFNUTFYZzB4MnRmWVJkTEt2dw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(49, 'google', '{\"access_token\":\"ya29.A0AVA9y1sRMLJKtQU9M2Y9VkKaVorkYhEXay60D81uMB_JSmwf9Ud4Dcb7LfHDl38t0UMyJmSM63vSVKgI1LEZQAtERQrMzhZ7T_m8C4JMDx5VkTV4rMnn8RvXn4Mt3EG4HEC_Kw90ypYT07RgvnXbfCNtmcFWN4UYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4LTZ3SjI2Q1lfR2M5S0VMOGJfMmgzdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(50, 'google', '{\"access_token\":\"ya29.A0AVA9y1vM2uD3B47NWxRTGBXGfvjgyO5u6j1pafywegnEZAh-ax6pt_YhO90R-OWFSXxVafMct7u1ThNTm87NDUXmvFgW0w6eRX63qMqq9igRLSYd5aJYuaLl-e8nDzQ3moA_Rssb3lMyaU4B3H3Gq5gi_Gs_zicYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4Yk1OaFlWdWFjSDJaTC1vTUE0VVkxZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(51, 'google', '{\"access_token\":\"ya29.A0AVA9y1uhX7Rf5WmXanIYJ9JZ4t0vuI-bvnv5bfs1Gxk6YNQUWyOt5-ZZu0VB8Jx2HGkSRrCWHTDiOm7-rdqaqlIoi6Z_Biz-LRDjvja9cYaSEs_B-WGcJD2Lp8eeYUZxiqeAjTs3n34FJsweCUcS1wZacC2jwtoYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4QWROeGI3S1hZODlSY2JrdjM2ZDA5UQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(52, 'google', '{\"access_token\":\"ya29.A0AVA9y1v-ZHf-8CDO6wGAI2YT8XUZ2jVysz_yHbVPZCxDSot7AAIpgFzEg0qN2Os8Hp3Mv04MBFIfElb-p3p2g-miX-ap4nG0GCtooRhEmi6XY0DnZMtwGuTmCZpCKtN2YOBcvJ64A6WwmFftFr8m7WWNGbkFGhIYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4WjUwaUpyck5iTVEyUHBidzRNT2wzZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(53, 'google', '{\"access_token\":\"ya29.A0AVA9y1uXL4TLkLniy1NtM9sTCIkhSQ4pDCi4SlwM4jOJBaUsQ-oQAijkZs1ajHdKt4vTTGUT760K99xDEUP3o7rzONTM5J_eS1nJIqSptVhrN2UdZ7WISOUf-aW8mrhuGUDYf3X1sKY6B03CrIjzqg3TRO2UExgYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4blFyOUo0Z1RoSndoTVB1LW5mUjI0UQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(54, 'google', '{\"access_token\":\"ya29.A0AVA9y1tKMYA4qjHxGSVzrkzOPIesDFjKT-dZx2d16Reg0k11BegpnlQDcY0qJJBblDeu7golvNyqtls7ROw76hXbs7OR9eq-XiJTJ1ER09xjHdOxn64cW16GGtNDiOGEnho1YV-kIu73f2GTacWAGUAI-6FgYesYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4ZE1WV1haTWp5QTBFWlJxdGxqY3E0dw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(55, 'google', '{\"access_token\":\"ya29.A0AVA9y1u8277dZbEIPuViyHXdN6b3GO0cD_Q7LSs0paj1v1CYnsW5UPH2F2HNYnKzxKzAi8Oyy-ArUZBMLqUY3ag7NTqpOiPvT2ibLP7_bBpygaCVS4jy-fR2TpVwekOoxPveIFJV6tcttJ4VWjmsUr4HbZqebOkYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4RjdJTlJkT0hiUE5xT0RiRjhlWEVEZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(56, 'google', '{\"access_token\":\"ya29.A0AVA9y1uK_wEFH4LQKcQ9WCJ8fCfngSzkuCdIdonzcLxQ9nfG1TtHWjCpSJmB4wHk3wwOc8LmemMc-RHk30Cz9i_3SyI4R-16mpRz2cWKqTLXxHcsE9GaNL7fPdc00XTuv2Rtwv1rXZY7fWphltxknraPZ1qlrbAYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MVpTRGxaZ3VnaTdWUGJXZF9jdDRTdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(57, 'google', '{\"access_token\":\"ya29.A0AVA9y1uS8giNFlc19US4MZ-LpT6OlbBeu6j4hIgwd6pSExiusloWYXDKNp58F37BDxYCZ3wSG8ppUzAMxJP_bynQHVWw1-Rtc_Nv1TqHkfE8baAT8CV2vzPBkaxkKYEBQsgooNW40sTG3YFwoCt9WGDOUZcJELwYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4a1dSRjBHbmV1VFN1ZVJrWk1xcjduQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(58, 'google', '{\"access_token\":\"ya29.A0AVA9y1sw8fIrTR5JTOfb2j8duz7k6umZocHOibbe52lRVogbq7iJbYW8f6secJnrJ1FnaAhGFC-CujnU0OhpbAwiKH7FEt_4kgYI38Pk5tp3p-fme6TeK8iX2HO-Bfv7N2cWhDb-ggESUA9eit0OkKDYNOctXg8YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4S1ZOamR0MzM5VWNTdm14c2tDQU8ydw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(59, 'google', '{\"access_token\":\"ya29.A0AVA9y1u098X1LY60FQ2iwnhucPBdpj0mIxjCjiFFkTB4jAQ8IqpqcYI4sKZSkVSIqBdn3GHTY2UIPcS5N185dZYM-YlSSJqIizOCaItXnMm7vGu7TCQ3qdveXmsSWwoZl8qX0hrVoSAdt9PGMpkhuGr4YaqNQiUYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4cnF5N2l5bjlZVnhtTFoxYVFqRjBYZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(60, 'google', '{\"access_token\":\"ya29.A0AVA9y1vjql3avzU2pvsj23YskRgpFfY_LundplSOJRa-JtQbVCq-PWoEd-WsqOMU1UtAg2iLnEnPvOv-MEP_yevkDh3_YIxZxayfGABMp7NqFB84ev3x2n48V5nnDmUA_XJ-gBN4_7fPHKbn2g73wVh5gv3goMQYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4NGVnT3NIRmpIR2VDZVk1bHR4SG00dw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(61, 'google', '{\"access_token\":\"ya29.A0AVA9y1sJVJEEqvpsji5coMns86KixEmPatg-2m9JIGyqmrKyp3w5z90_0uSxuKAhHD45oZ-ZdqhDkBir-IU5Bx9qP0El7nmPYWCkdp7PsMZAGGKcGc-q992B68LBaIFfInVBN7k11vqtP4oJVM5bEMsj1lGZY_sYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4d2tFQWRtbHpzYTR1WTMtS2IyT0I4QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(62, 'google', '{\"access_token\":\"ya29.A0AVA9y1si4b_haK7910yEGPEO4SPfBDJpvnTDC29FUT9_KpP_IS-en214jO_1b9rKQDo8Tu3kEKdqeTbY978RRUGT8gfuEVoJT6fLUuy-ZAWmRqZUeii9C80Qe0cILhVeV8nS-SeMx9eeKIVVk4WDapuECs-H5XMYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4WmRtaUVxd3JRMWF1b0xfcTRzVzFBQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(63, 'google', '{\"access_token\":\"ya29.A0AVA9y1tqxuJEmGYXKN8t3T9nM1y2hAiR-jlsFoe874S5ToU9EGPP8icrB84GhNjD5QFtC2DU-Hj0RUO4c_4NQ_TshOxWmxyi02GJGIEaJIAnhlMrWU7DRBuIJAn03AAZckR1eAycCsbWgMpTnVWt5KQScX-y5yAYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4VlJBdFBHZ3d4M1M1ZElOcHlHcjBSZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(64, 'google', '{\"access_token\":\"ya29.A0AVA9y1vBDXJ4c_Pav6ARbEIbVHD04PeVuXgC3itgGDuDwraxbqHM9d1PpKZD6suU69Zozn9IYS3ma8zGgN-m5QIv617BzmZn8PK6RvXvFKKZ5o6iNoLcHylvPxY-H_S5TxPt2inNMzpIEbq-pP_cy8qSk53HPScYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4RlhGbTRVVGhVM0tyR2pNdGRScllxQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(65, 'google', '{\"access_token\":\"ya29.A0AVA9y1vasvBOFiRtUUHxm1t9Kip1PRRK3AuWLTZmWxbATCio3AKzRQsjcfj2amdw0cgoPwIxo9N5ov7nqsBuSxJVdaO7-IaUvZt2rVl1zmgUxaJoNBn2a7B5_KiPOSxSmo-t5ldrJuYRdKIMW21mBOZZxhftPY0YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4N0NKcFBRTzJfczVmM3BiUnJHanBQQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(66, 'google', '{\"access_token\":\"ya29.A0AVA9y1shmkmnXE0e0bFg26g6QPfT9J4PXPdJUGLDwjW0rhShdgB6b4AkNuqtIY2SJAXklz__QhMqbCoNZRJxVh1B_oINucyxYlanCdUtVGuIAy6_znfsD7zxqWHZ5zn11vjP9uZHBaTzYsS6VB80ndzaqOPpvvkYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4bml2WmZ5YzE1Q3JmekR1cENUTkM4QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(67, 'google', '{\"access_token\":\"ya29.A0AVA9y1sddZ7yZLziwOdFE-WSY5Ox_8rppdLyvbSVqlXWCIt4RJ5I9HDSTM6WyrzCE7PauLMSKlUumKbO31h0rsEfMbrED49wG4_uzEc6CwtTMMjlFxbATufMejAw0IFo146PG5UbjBEDfbGwwqdGlN2pxjHYBUIYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4TDNhZFN0VWxlVjRGQkZ4Zl9ZQndXdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(68, 'google', '{\"access_token\":\"ya29.A0AVA9y1ubioDspdH29E7jB7ERvdH5mlkEOvPZYEEpwnARE7HZ-HAkPkrouWX5n1u_80Fxs6eEB_AaixNhl3iZD0KNF_1fSRdJaJrnqp-GP0PVQ55XRuICrypVuyVw2ILR64aK6hBEN2ZY92EkIQJweabL0WyQOu0YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4X1NqS2JQN3BVaUVZdlB0UkZHZ2Nhdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(69, 'google', '{\"access_token\":\"ya29.A0AVA9y1vCXIoGZaXIy1is5Y1oQVNhJiF3Af1u29gINzwM9eZEPsC5lsoc-9vL2K59svhgibFtkl_pPgxUJ7HRaONyD5J__0hzyeX46C7BeU1VNgjh7b4bFgobshZkfAG1eoedVUJHwCuE4wLvisYXmEttd8QFy5UYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4dmNldFVseWdFTnQ1eGJZRldHYUZKUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(70, 'google', '{\"access_token\":\"ya29.A0AVA9y1t-4yg4rQ6d8YxDMDm7bvARw5CxUI33Dqy5BiBfwuVcnDWtVojnS_3bD1dBul4tNk3L_Bkjdv2EZvaD5tmzc8oR0FKj-aS5bhvjZi4SBT_ngwN0qAnx8QWHpznT2KvrBEoTUzsuBUEwKKbuUsL5y8P4AQwYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4VUJabGdkdjlfQlp5ZHUwOEt2RnFDUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(71, 'google', '{\"access_token\":\"ya29.A0AVA9y1vkZuJID1tXOijyV0cKnx0QZJJ4EMFOT5aXytEQjAI1df42-3YRRj0GopcKHJf8XlxMIbZxbC3wxS0Hy0UUA3G0mFYkTjd3CvVfYX8o7h_4Ge-n_XVmBKitVPLjLpHZ7XWdcBAZcSDtWrY1R8WzbBnA2aAYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4UTA3T1lyazJZWUFuaW11dkgxMlBKQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(72, 'google', '{\"access_token\":\"ya29.A0AVA9y1uzzxPMsQDrLGps92TNIPNjPQyhF2GjOz8lg4Md5euPIAYmslqjOjW_CUL-XFaRADwmPWXnx4eW0yH9w9jO0XlgtZkdkaDqSjfp9c9WC_wEmneliKoM_1O8aKxCov6chEQepxZbOIeEVm1PcZY63G70i1AYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4TV9lWkxmUWlLNnVHWHo3VUU3TjhBdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(73, 'google', '{\"access_token\":\"ya29.A0AVA9y1t4fmkDxJf1zvJSt1Ofdbo_6mnPueHq9UPGmCi0flu8IWIAYNsGKhwNjP-UD5e2kps6Q6uVY06ISasFTS2EtAvDbxj3TwM7bSFSEVKkA09LI2YM9mfcytb86ll6HeVzmEa1rEV9nouPL_tgvCAAUZuop60YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4YWFHb3Vod3JDc1I3NE04NnQ3QmJaUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(74, 'google', '{\"access_token\":\"ya29.A0AVA9y1tE8xlxWDUyogjqpm-uSMXmRtqDe5hK_fSmsH5NF1bGikM24abfb9vRenZ-KSV-G-jA7aO8ak4dkrcrVE8pz2NIfjRmdCTHKAb-3O5v9AoBJtvYTk8ER4dINivXRbEEtSiBfoKSCQWEl03QmeFdz9cd1a0YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4UTkzQUo1bTVXTW50WGFyNERBYzFEQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(75, 'google', '{\"access_token\":\"ya29.A0AVA9y1tjAu_wbAXm7J_KXh4KTq5yn-vqWUXgZZL4jpExDX3oC5TKW1A-jX_7m47HOFWPTZEwZKvCYgStwkisdXuo8aBdFXLbo-n3NA2tCEA6CO5KsApT0mwj4Jk_3MVKf-W3YZuN5mhHgBOvCi5IQWio4KLJ5voYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4eV9SdzJyN3JaSTFua0VkcUgtcEFDZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(76, 'google', '{\"access_token\":\"ya29.A0AVA9y1vqtYEimaR5-iP932cCzxzA5MLtIi5aenJzcgVezJLQoYXjPcBhecMBMVHMG9C8rT8b4qtyTKoC4bduIQ0b0jdoSM3v6xbwescJJ3mrtQw8bL6lYjDeLgZzOgzy68zto2j5T0weVNxY5XHOBlrUzWlmxVMYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4M1NwZklkaDlEZ3JDdnBITS1NVkQ1UQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(77, 'google', '{\"access_token\":\"ya29.A0AVA9y1ud_Axkm_XVDGoDr91e1MUEwp6JWaBBtlSYxUTlukSIR5oN6VjEyOCE1AmqvigGcUQGfAaBQ5qBg9O0tkr3DhbrTq0BVsfFD7EkKekyfSUsk-H-Nltdfq2KpANkRVZaF3cY8jy5nCpMt4x7OtfQbzIxw6IYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4TUx6MVpKMGtZRmVGRDVEdWRsWHhBQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(78, 'google', '{\"access_token\":\"ya29.A0AVA9y1vy3G_SCXb1TE_M6j55ZSo94ZCx3PbDz91cWMqJBl4CRwg4p7LLi_HOFXjDUyKX2qaUGKAfaKDZoDbZP4BqQy-4dmdkVHwm3nmP93i4jczhCL5rH3pZrNGtMurY2gYWM32n6hXSauMKrcU_H36iH-UaaA4YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4ZDRwNnZ5SmFfWXBvc1FvUUdBeVcyUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(79, 'google', '{\"access_token\":\"ya29.A0AVA9y1vkk4LnD1b7nG92bRwXHaDLpHV6SAkw_MMLwqvZMELYQyaEqGy4wlyyg7Y83OyK2uf8Y8aNbwGcJBsXCUhx33OoV9c2zdl5tXzi1mI2DYaaL4t0jqItIWQEf6xHFc0UHA3VxL-r01gVn8zmBprss5V-OBkYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4S1VoS0YxdnprVTJYVHpsZTJwN0E2UQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(80, 'google', '{\"access_token\":\"ya29.A0AVA9y1tKwVJ6Yq7aPPyB7UMcyiR3CergMBIl2b_oaM_oh8XhMxVTPpR3FNG8LqBGz8Ny8jUEqQws08JPx7IWsrV4JH5SrxkpqQf7NQutCQdnSkq6ZZ3ihqZPDcRlSli9xmOcHDU_N6xbFoH6aVANf4W3dEfL3BMYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MDVXc1VlSjdNQmdGZUFKU1ozM1JFZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(81, 'google', '{\"access_token\":\"ya29.A0AVA9y1s2_PiAKe4NCVnqHuk2yVKZkSW3SjL7FGaiDqTirWm5PJVUnT70Am3UE6z8sx_cGiWPLZob3rsN0UcRZ5HPnYNrh1Aqk3sSUwHd3-vSf-KM3-FKtSw8fK8kLpPIUpSoFKgtTdMoJceijeJqV2c_WrjzE58YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4QktwR2c2ZHNLTW9vY3MtQTRuNzJxZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(82, 'google', '{\"access_token\":\"ya29.A0AVA9y1ufF8UaTvu_Yw1v7TV_R8v_i7CzwQ08raGpUI1w4VeKvipQjKkxBE3jlKaiszvBG6ew_J4TLEnq0UB8BWImNxlPpA4dGQ25KTEu-JrMhl-oKuG2bgRrN-ufth0kd8Vtlt3pQoMi6eQ_AE2psYFtyPOPloQYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4czhyOVJENE1xVDFza3JyYURLRDBjUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(83, 'google', '{\"access_token\":\"ya29.A0AVA9y1sME1XT9rQA6FEo1PCVbBQRk9sjxb7JD4dY3syk8boy3INLgo_fOpbtK240_WuaU5cN3gamtjyB-HyWlF35XVRJ6XkaGEPpeW0H8kSjGNGs2siT-enyY5mNyXZjYjFh13Y9Dw8kpSbHoI9sO3p_4aDeICEYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4ZjlObTFZdVMtVERuRWg2U3lnbm05UQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(84, 'google', '{\"access_token\":\"ya29.A0AVA9y1vbn--W-r6WQj08VusrG0RJljandXnDiFb53j8kBlLeTS3pJoi6F9v7CimSqvlGYuXJQFaMY7FDo3n9bRgsThtTEHnA8jAcRnPCkGVneIF3jo0xkkx7obOdCgZVJ1ExOS_xvEtQThTLN-6_hzJwh-ALoakYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4WUxYUmNmM2J4ZzhVYmlOX3lxWnd5dw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(85, 'google', '{\"access_token\":\"ya29.A0AVA9y1uUaJr-7rXl02yUkYkKL32b757S51vYxXm9CqQr3hZUVxdG7iijY4MIVk-0nVBqej9g-9qHZ8B32X4-XrwoWsB4puZfA2uHfZ2Iq7SyCo8A4_v6kS2BnxQTwx1_Eui4589qE61cQv7GA5wuYiVQQ-oUByAYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4V2RqZUx3bGVEWGNzVzJrSWpfTDZhdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(86, 'google', '{\"access_token\":\"ya29.A0AVA9y1sPY_qf-KOVbMzIfHzox_looOpuxbcunzApUVbNWwjXfSRBNhb5RJM8KqXEOh48snbdGB6qtndcDR_4eFJpl77gVAvnunclsLAjRSID4cFA-wS9iu08yt6Hp6FkAhNw94DznuNvTOKzAbABl5Ntel0Fo-cYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4TGQwWFdQZXdYLWs5SEtJWkkyQUh5UQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(87, 'google', '{\"access_token\":\"ya29.A0AVA9y1t4DiRDtiU05g1gHq2m_O48hW0CWVrhUmunY-wbeSE-bEZHOPXmvtUY45KABcU52vBFHUsfsW5ntjGhuBjtnurbqXyjQ1SR8NFpfIJCRM3gqIGUwIi6qbtT-eJ8OdzlaDh5UZ8iF3_7thTL1R8xVuS_gz8YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4a1BQZUgzeHU5eDBYNjB3MTg1V3BIdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(88, 'google', '{\"access_token\":\"ya29.A0AVA9y1uScu53TRVHhGB8d51yopR9t6pvtJWZ-TqDwKY6EL-4SbYwIsGYlKPlmvLNczjkEZM1OQwHiEbtJ8MvjVQ_UhBffUmlV4iRPdML5mh5se13AyluPyXFIb4KmfJPePBT8sgYiMJsWyqn6kZKjRcGqUiTNPkYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MlVnX05Sd2VvY2lIWHJ3T1pLaEIxUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(89, 'google', '{\"access_token\":\"ya29.A0AVA9y1uRr75Eiv2ydMcYE7ybAO5yRpnwWx9S8eOrgc05-m39HG0gXmzlTigaCuglfXi-rgp8ik5ykD57yqdf4numugRoEJFTetRefIjfrDZnLxjiH0gwsGvg3wgRrfc5iURbaWJzZ-vRVNVxwNzkuq9NUmwJLmEYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4aTBKd1hPbEhtRV92NjllM2FxOGpYdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(90, 'google', '{\"access_token\":\"ya29.A0AVA9y1v6SQY5LVwTmAsYnZWxkTJWMKFnrRu2u94hYfqXlXzTDrH5SBDCckXR4UrXfVL5MGI_sxNFipLjf0R9NBIVmJrlWaetT-MhpRUXe6UAGEByzHTlEjNf3SL3HjcyzMMLYZTKof6-E1JTmWUfsQpSB-F0OZ0YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4QndqcGtYeXV6YlU4MEQ3QnlEZFRjZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(91, 'google', '{\"access_token\":\"ya29.A0AVA9y1swC7nB96gJ5JkHzJ7WU-j9vocP3x2lBnnjJBe8_wjtbfG9bO71fx_Hw-w-r_XU7kXUR0-WDx9wnjsNUXL60TKnjXvOEqjzakX8UcKZdtU9USynYsMaUCdAD7OV3gZf0M0n5rai2al7sC65m86007bI2ekYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4NnE5UG1fMWVKaUdKb1ZTVkdYVzJKUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(92, 'google', '{\"access_token\":\"ya29.A0AVA9y1t431XA-kk4iCWZb-MsjKlloFC1w5e7ZlRXzjJ2dDm8gySjkX63paF7ci1Rc7hHGXxn1tdwsbO7MJ4vp2pnTh0hv3j_2utV4045CXv75cUlUA3kgHReS1_GVhqOw2vkAOQLyM3zjjlppj9ZdMF-NSUVfD8YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MzVCVFpiS0hnNWFBck5xOUZSd0p6UQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(93, 'google', '{\"access_token\":\"ya29.A0AVA9y1vrS1ehj4GB7zJJCTpEvQvNcuzfoACqICyNiFPcE5DXEKT2MQt7XJOmA4HLmEdMSANbwTwAq_DgJHf0GuYXPltSOqUzDKLx2dEVeciC5dGpU3ZnzqJ_hJwoB7bs2ClfCUe5hbQ2-7S8BoT6Wc1n06RzLmcYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MU05c3YwT0RINkhTVHpCcVB1aTktQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(94, 'google', '{\"access_token\":\"ya29.A0AVA9y1uJgZ_HpA3_8AaCeqp1vt8wXUn9CLLJ-EQQYQfJCoZwy__SGH7pf5ZmPaMCOFWBU94SNZ_UvqktZTgEoylE_pF0ukkODcqi7CN_BEtx-lPPuuX6fM6jNvZUkPCVC5ykss2ZKcGZn33YCbXsswoI5bIjGQ0YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4bUh1MTdGb1JlTmlsN3p6b0twdkdSdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(95, 'google', '{\"access_token\":\"ya29.A0AVA9y1sLM7DU4_yOw5yY2KlWGXWr_xlXUohirgg3XGJsj1_yc2F0iTWdVsN-GnkrI0yvkv0mYrRtPK30xnTnD5TCfYWdDLcJAo0CWD-xXwQhswytq4FlYzqMuGjnsxWJbVeSJqVxLFGoMAPm5ifI-zzl1VF7yC0YUNnWUtBVEFTQVRBU0ZRRTY1ZHI4Z3E4a2tnajFVS0twaV9IbGdxbTZlZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(96, 'google', '{\"access_token\":\"ya29.A0AVA9y1tS2DqqfOjsSA9jh4wVCYqXzdxw4xHPIDyMMKPkUf046vzc6iEGghUCDioEf7iH_hkFaCkSVdB476EJ1DY5ICoERN7N_-GsXhHEl-3uFk4O3jCTWR14TCzik1oSA1HJsB6AtHx9G3b1F3zOhI2PopMx49IYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4Y1F2NGRqemxOYUp2VkRVU2toWWg0QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(97, 'google', '{\"access_token\":\"ya29.A0AVA9y1tJYEiDmFurTmOdonr5OxdTt1a-rfto_tYy_4MRcz1pTuhXGkok7SmJWbF6q3YDvUBju70phrC_T4MLSvBeMeoQ03C2cFgU2VJXSmvGEedKBnsindWgH5g-XH10JQbuGHkgCzeiXyR0WBUDb1aLTUuWcxYYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4RlRfc1NucWMwWXRFNEJVbGZqU0haZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(98, 'google', '{\"access_token\":\"ya29.A0AVA9y1vQDU-tcTZ4UD6IgTnWp3YypDlXMnf_ED89khbU0EDTWm2P111ayknuW2LaZdEeoSRpjYNh2X9YL4lLVY8-XKkkFKzKE4rYMQtt74cXh5IS3RFzrKeXMXpo2vwq8TnFLG7f8-e7KcgB9RzPas39-UT9gGAYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4WjhhSDlWS0Rsck43UEo4TnljcXFLUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(99, 'google', '{\"access_token\":\"ya29.A0AVA9y1sMldrH_E8SYebuL5znaESN1v82aAKAKDkNaSEgbkmnj0-drsFOnMx65I8WYP8Jzk1K-A4_ojyRbuHjmzZ_HXSmWvzLVIHhxUPixSvxOd9fvmIw9ISkcMPT98FE80r38h7kHfBOpMReYWF5yANI9M9ZDxgYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4UkFSN3FlN2pBN1FlSUstVEkwUUZWdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(100, 'google', '{\"access_token\":\"ya29.A0AVA9y1vOi1Ab0e7HNYKXMRhLZ5J8njOpKhM4kWMAmhjm56RBeBdDWGv2N7TPC30r7SMV9oLMrKg3tDDAyiQMupmLfBbKFuH5XELJ-lBn5L0i9ya-h72Pz7aTjK4djjJaO6ld2_wp7X1YDaku0W8l01gDHCfnMLQYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4SUcyRnNDTmZpbEN2VUpqMEwtTmhHQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}');
INSERT INTO `google_oauth` (`id`, `provider`, `provider_value`) VALUES
(101, 'google', '{\"access_token\":\"ya29.A0AVA9y1tAvwhg8IUOYXOA8OTeZwq3TnD9BBJ0QqLwhiRYwjAvZI8Urq3c_ZZybBl6fl7eBpwLT06sHlRZZ1VJO3lcpMM55Q56pUCcaGjaSesgGNdNP74OTbSYKgjMs-u1J6g5kq9Xcp6SpPip_RAd8NftkEpzWtYYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4UFZHMkQxdThiX3VXaFQ0WmhIMmFUQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(102, 'google', '{\"access_token\":\"ya29.A0AVA9y1uumiEW3U0epVJy5xgK_JT4yj3TOXkYCfcN0WkQEcOURMPVGsI4ksD5rMM_eGbVChm22tICPdrKp40gHw5KBSjktSDl-H3mRu9tu_TOylKGRPFPARc-MxAWclriJWVcT5_SVr67I04EPU6gcbYh6V5OCrgYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4VkFiVU51QTBCQzRQYXNJakJLQXQzdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(103, 'google', '{\"access_token\":\"ya29.A0AVA9y1tR0PZZwnd-RT0zB1As5VKs00rp6htqDTIWaM4W-_Smx0oG8qINDuYQlc18aQnyRe2FS948uQ9b8pFV32bwmYHg-6pcjtlBN3ACMPSQqz__2ayi1IkIoNxG-GKdlGHV2HiGpS-_WUtXTKDU_d_NMU2sWoMYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4TlpOVTB3N2NLalp3LUFrUVg4LU12QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(104, 'google', '{\"access_token\":\"ya29.A0AVA9y1vDHRLAe-OE6YmX6XExqy-V-1IqitBm-ZlFUkaxnSSL1zwa7Deb5OBYUO0KIsyP5v_Hp6V4GEUVwLJGJXIYbllQV9V_UctB1K5tKDq9JoJROYxuPS0pDVroYz2KP8hWP_otNTQCEC3Na42Grf5qXEW3naoYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4YndCWWxWUWdDQ2FraE04bUJrQ0hpUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(105, 'google', '{\"access_token\":\"ya29.A0AVA9y1vfTTZqDYixIhq_hLbHmFZHRXpSZPzefPs3rTjB55_IDpRLi2coh9SBSBq-jqOkPrPbbfx4Ct-eT65YmLNsf498pJBTt5knbTuwYPItYamonam5aEeUjxosHNfaz5-IqVCE08aXDYyvoZimcDdscuY_05oYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4OVd2YVJ0RUhnX1pxWWlqVXk5bHVSZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(106, 'google', '{\"access_token\":\"ya29.A0AVA9y1uyv3vy-300r3QQ7w7k95flOqY0Y_Fn0l1XFq689DBdAKr3fXYBdQ125_eYWq5OdpIQRqQzkqGFHDXd-O1qweYuXW1h94sM7XEzM9ix01XjLH8rvqjEXtPJXI3XABTvZKphWmALl7qgDUpY3VvvAsrPtVEYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4azZCWGY0dlZQV0hjalNhdHlVR3l2Zw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(107, 'google', '{\"access_token\":\"ya29.A0AVA9y1s4zkK5uERwIoGSIh01Uo7p9WIsFxf7Odhg83oHqjtdWhmPi0_8cAdU1LEo8OyjmlUk-r8s0dGqG0dkyJnQZmlBXvTh7Q88JmBFj7rKi9v_oCE2q4CLYm1zgRmrDwrz4hrap1sJeikwnsmXOs8-GcKHFiMYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4WFRLWHllQ3FDZy1OMTJDV3ZTZ0YxUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(108, 'google', '{\"access_token\":\"ya29.A0AVA9y1uhCMkE9kzV2aLfjcuoWNIjGig6y7hf_6d1G_NNyjE2Gxv3kAwMFKGjN9NO5VZhq5l-NP7IyxY6DJZJ0EBgphh6RHErbyBJrRNcFwmDf6pUGCs9rAbRsdHI6skj84wdf72LNd0cBif8W9VGkRTXNPg_ELwYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4dFhyVVZGNllZalFlbGV4aHVmTTdmUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(109, 'google', '{\"access_token\":\"ya29.A0AVA9y1sjVPwr1oyrDRAluRcsYs-qAqrrYh5dxm39nf4xry1m6aJpN23ELo4hu_hiQcnVE2qqf6mv71IgYORUI15p7IuiiCN4RueZuk7E2SO4mJfA11vpyl9ERfya7FMh2OpWZppwcMwrorXm9pr2AQPLorfJ0vQYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4bTBHeDZJTy0tcTBTZHlDVl9YSFVSQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(110, 'google', '{\"access_token\":\"ya29.A0AVA9y1t5a9Vuj-AI0SyUaq4p5BqMCVZzwJW2ytQu-8ZPfDayWgDCihyb3_mK82MnZmCPmzHVeurp0YV3U1886p-AQr4SYCHCRasz5_mHLt4JAB561RPqDkXYvgtR05X2H_9QXjcY8D3-o2jkvD3orW9t9yozY5kYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4MmE5d3NRNG1PZlM5Rmh0TUI3ZHVIZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(111, 'google', '{\"access_token\":\"ya29.A0AVA9y1vqqtmv-lmAblk66WWtuaIyBlROJDnBshOktco8KC1aNeoaIYS77HNXdhvM348A0CNOA4GEpAFdjzMthAuqYJ4PozivvLn85PSPlOPDQpEi951X8HE_6q-vVA3vNAKHI7-j6XAstlBzwrlz4T_b5oaPQ4YYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4S095OXh1Ul9UQk1LeGphWXFWRURCQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(112, 'google', '{\"access_token\":\"ya29.A0AVA9y1sOGqteGmW8cmVAdK5gg4sS6TWX1j5SnY9P-5QWKCN0D03GPG3Tio6c28rkS5uZ8NNi6UGKla69a932jLv5h7ccfQem-CWYAqiAvuO4pZxyAGxxmq8Ib53nkghApIptT5vkOe3p0LQOaog4A4kuewS6tnoYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4dHdZMUYyTXJmanRUZUdFLVBVMzNMdw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(113, 'google', '{\"access_token\":\"ya29.A0AVA9y1unWxcSRmdMKt1Ykz3iJecKFJQpAfla9gWkDKBAQRDYXooB7ALCczXT_CY_lRlNbh2M6Ee8B6mGThMesGsOyk3fG4gIFxrhx_gdsRH_INEiclnGu-_Y5yNw1wzQQlBqM3YMVS11r5RSusc1i2E5hqwHXhkYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4SEpDSXU2WTFjbmxFSzBzNENiclU0QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(114, 'google', '{\"access_token\":\"ya29.A0AVA9y1ul86WIEeLJ457shIR1MSCKBmNoqWhl86vRUp_lxsOVkVj8TB_Mp4NjyGfMbgPuTcNxnI9VSwuWEdtE5ahvBTCA4tywIt61bytC7uSzSKv_vWKAhlUbnZG3PUiuWSDUgo6zDKl_De-3ED7kXkt0YAmYSOwYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4VnFrNUd4Y181SUh2aS1nU2FLTmhNZw0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(115, 'google', '{\"access_token\":\"ya29.A0AVA9y1vZlKBcF76_CLwvwHptAWAWQccSS0Olss5DTgar6Nqt9QQ3Z6J6nOK2A-n_1C0ZgWnDbD0rCaBRR8Um4iFiRfT8bLV2ZiqlGhMXDM34FQmDixKsDhhAI26Qwredb0lEZVxx2Cv00VWMEsyw2_mLxJz9IpkYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4ZUxKNDBNbG5DZWlKTzFrRW1YYjY0QQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(116, 'google', '{\"access_token\":\"ya29.A0AVA9y1t9JZbT0HcbByB9_CYreo8VB8neUYlWiyus8wJgQhsWhCezbP7-ezrb62GHxj6TruYh4sK-V1TJZ9XzbP71IKwQbIuC5FrdjOFqwbKeD1s0VVe5kDTVo9vnNQXYmzAgXRZFzl9SxkBK8vM1WCZJyDs31JkYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4M3hkRU1ZUGJEcWpMX3JZcVFud3JWQQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}'),
(117, 'google', '{\"access_token\":\"ya29.A0AVA9y1vosUmkvPdhHs5U78ClvLffzCWqF5tqJEjcQwZokPSuvFS8PMJO0UgE0-2CCG7ffzQGlQk72WWYvGfBBjMJavdDpckCkWMxuxGJl7xN8IycLH9XW-GPRfxYNq05-E6iOQ1pvV_RlzO3KMRn4jrgzNhXOMoYUNnWUtBVEFTQVRBU0ZRRTY1ZHI4bHZMei1Qd3VUUFZiODZLRWdmSTFzUQ0166\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//0hxOIS9W4oqXZCgYIARAAGBESNwF-L9Irgwst8lyC5Bae8RyYuX6y3U-m1_wZdZYDIPoZSIJKyl1xdEcXlke10sDSBblQAPcWMfs\"}');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

DROP TABLE IF EXISTS `registered`;
CREATE TABLE `registered` (
  `id` bigint NOT NULL,
  `register` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phase` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `industry` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `company` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `source_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `medium_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `term_utm` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `register`, `phase`, `email`, `firstname`, `lastname`, `country`, `phone`, `industry`, `company`, `source_utm`, `medium_utm`, `campaign_utm`, `content_utm`, `term_utm`) VALUES
(1, '2022-07-25 07:43:09 PM', 'landing', 'hcardoso+local+00@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(2, '2022-07-25 07:47:26 PM', 'landing', 'hcardoso+local+01@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(3, '2022-07-25 07:53:34 PM', 'landing', 'hcardoso+local+04@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(4, '2022-07-25 07:56:40 PM', 'landing', 'hcardoso+local+05@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(5, '2022-07-25 07:59:32 PM', 'landing', 'hcardoso+local+06@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(6, '2022-07-25 08:00:39 PM', 'landing', 'hcardoso+local+07@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(7, '2022-07-26 10:50:13 AM', 'landing', 'hcardoso+local+orogin@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(8, '2022-07-26 10:58:33 AM', 'landing', 'hcardoso+origin+02@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(9, '2022-07-26 11:00:22 AM', 'landing', 'hcardoso+origin+03@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(10, '2022-07-26 11:07:50 AM', 'landing', 'hcardoso+origin+04@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(11, '2022-07-26 11:24:53 AM', 'landing', 'hcardoso+origin+06@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'hernan', '', '', '', ''),
(12, '2022-07-26 11:38:14 AM', 'landing', 'hcardoso+origin+07@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(13, '2022-07-26 11:44:43 AM', 'landing', 'hcardoso+origin+08@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(14, '2022-07-26 11:50:21 AM', 'landing', 'hcardoso+@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', ''),
(15, '2022-07-26 11:53:00 AM', 'landing', 'hcardoso+origin+10@makingsense.com', 'loremtext', 'loremtext', 'Argentina', '+542983417387', 'Otros', 'loremtext', 'direct', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

DROP TABLE IF EXISTS `speakers`;
CREATE TABLE `speakers` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sm_twitter` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sm_linkedin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sm_instagram` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sm_facebook` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `image_company` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alt_image_company` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `orden` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `image`, `alt_image`, `job`, `sm_twitter`, `sm_linkedin`, `sm_instagram`, `sm_facebook`, `description`, `image_company`, `alt_image_company`, `time`, `orden`, `status`) VALUES
(1, 'Ben Afleck', 'bafleck.jfif', 'ben-afleck', 'Actor & Productor in Warner Media Bross,', 'benaffleck', 'linkdin', 'instagram', 'facebook', 'Entiendo que estos son los más bajo y no deberían llevar link a su sitio', 'batman-logo.png', 'batman company', '13', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions_doppler`
--

DROP TABLE IF EXISTS `subscriptions_doppler`;
CREATE TABLE `subscriptions_doppler` (
  `id` int NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `list` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `register` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `form_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `industry` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `company` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `ip` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `country_ip` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `promotions` tinyint(1) DEFAULT NULL,
  `source_utm` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `medium_utm` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `campaign_utm` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content_utm` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `term_utm` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriptions_doppler`
--

INSERT INTO `subscriptions_doppler` (`id`, `email`, `list`, `register`, `form_id`, `firstname`, `lastname`, `phone`, `country`, `industry`, `company`, `ip`, `country_ip`, `privacy`, `promotions`, `source_utm`, `medium_utm`, `campaign_utm`, `content_utm`, `term_utm`) VALUES
(1, 'hcardoso+local+00@makingsense.com', '28547158', '2022-07-25 07:43:13 PM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(2, 'hcardoso+local+01@makingsense.com', '28547158', '2022-07-25 07:47:28 PM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(3, 'hcardoso+local+04@makingsense.com', '28547158', '2022-07-25 07:53:36 PM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(4, 'hcardoso+local+05@makingsense.com', '28547158', '2022-07-25 07:56:43 PM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(5, 'hcardoso+local+06@makingsense.com', '28547158', '2022-07-25 07:59:39 PM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(6, 'hcardoso+local+07@makingsense.com', '28547158', '2022-07-25 08:00:46 PM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(7, 'hcardoso+local+orogin@makingsense.com', '28547158', '2022-07-26 10:50:15 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(8, 'hcardoso+origin+02@makingsense.com', '28547158', '2022-07-26 10:58:41 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(9, 'hcardoso+origin+03@makingsense.com', '28547158', '2022-07-26 11:00:26 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(10, 'hcardoso+origin+04@makingsense.com', '28547158', '2022-07-26 11:07:53 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(11, 'hcardoso+origin+06@makingsense.com', '28547158', '2022-07-26 11:24:56 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'hernan', '', '', '', ''),
(12, 'hcardoso+origin+07@makingsense.com', '28547158', '2022-07-26 11:38:17 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(13, 'hcardoso+origin+08@makingsense.com', '28547158', '2022-07-26 11:44:46 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(14, 'hcardoso+@makingsense.com', '28547158', '2022-07-26 11:50:23 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', ''),
(15, 'hcardoso+origin+10@makingsense.com', '28547158', '2022-07-26 11:53:03 AM', 'landing', 'loremtext', 'loremtext', '+542983417387', 'Argentina', 'Otros', 'loremtext', '172.30.0.1', 'Not Recognized', 1, 0, 'direct', '', '', '', '');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `google_oauth`
--
ALTER TABLE `google_oauth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions_doppler`
--
ALTER TABLE `subscriptions_doppler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
