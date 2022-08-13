-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2022 at 02:56 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `cities_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `states_id` int NOT NULL,
  `cities_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cities_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cities_id`, `states_id`, `cities_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mirpur', NULL, NULL),
(2, 1, 'Dhanmondi', NULL, NULL),
(3, 2, 'Khulna city', NULL, NULL),
(4, 2, 'Rupsha city', NULL, NULL),
(5, 3, 'New kkr city', NULL, NULL),
(6, 3, 'old kkr city', NULL, NULL),
(7, 4, 'mumbai city', NULL, NULL),
(8, 4, 'old mumbai', NULL, NULL),
(9, 5, 'Manhaton', NULL, NULL),
(10, 5, 'Broklin city', NULL, NULL),
(11, 6, 'Mayami', NULL, NULL),
(12, 6, 'Florida city', NULL, NULL),
(13, 7, 'New Lo city', NULL, NULL),
(14, 7, 'Old Lo city', NULL, NULL),
(15, 8, 'New sc city', NULL, NULL),
(16, 8, 'Old sc city', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
