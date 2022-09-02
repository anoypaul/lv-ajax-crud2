-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2022 at 04:23 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `countries_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `countries_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`countries_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `countries_name`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', NULL, NULL),
(2, 'India', NULL, NULL),
(3, 'Usa', NULL, NULL),
(4, 'Uk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customers_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_details_id` int NOT NULL,
  `customers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `customer_details_id`, `customers_name`, `customers_email`, `customers_phone`, `created_at`, `updated_at`) VALUES
(1, 0, 'robi', 'robi@gmail.com', '0178787878', '2022-08-13 03:10:12', '2022-08-13 05:07:09'),
(2, 0, 'kobi', 'kobi@gmail.com', '0167676767', '2022-08-13 03:32:30', '2022-08-13 09:56:51'),
(4, 4, 'chobi', 'chobi@gmail.com', '0178785050', '2022-08-13 10:10:58', '2022-08-13 10:10:58'),
(3, 3, 'chobi', 'chobi@gmail.com', '0178675067', '2022-08-13 05:01:58', '2022-08-13 05:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE IF NOT EXISTS `customer_details` (
  `customer_details_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_details_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_details_state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_details_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_details_id`, `customer_details_country`, `customer_details_state`, `customer_details_city`, `created_at`, `updated_at`) VALUES
(1, '2', '4', '8', '2022-08-13 03:10:12', '2022-08-13 09:56:24'),
(2, '1', '2', '3', '2022-08-13 03:32:30', '2022-08-13 09:56:51'),
(4, '4', '7', '13', '2022-08-13 10:10:58', '2022-08-13 10:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_08_10_105138_create_students_table', 1),
(5, '2022_08_11_075403_create_customers_table', 1),
(6, '2022_08_11_075627_create_customer_details_table', 1),
(7, '2022_08_11_075949_create_countries_table', 1),
(8, '2022_08_11_080130_create_states_table', 1),
(9, '2022_08_11_080148_create_cities_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `states_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `countries_id` int NOT NULL,
  `states_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`states_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`states_id`, `countries_id`, `states_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhaka', NULL, NULL),
(2, 1, 'Khulna', NULL, NULL),
(3, 2, 'Kalkata', NULL, NULL),
(4, 2, 'Mumbai', NULL, NULL),
(5, 3, 'NewYork', NULL, NULL),
(6, 3, 'Florida', NULL, NULL),
(7, 4, 'London', NULL, NULL),
(8, 4, 'Scotland', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `students_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `students_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`students_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
