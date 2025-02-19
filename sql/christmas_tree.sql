-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2025 at 04:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `christmas_tree`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('superadmin','admin') NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', '$2y$12$TfGH3ANqKEOmbtiDjZk6duTDP0RewCRyI2GsB0QoD0MAu4hmgI84u', 'superadmin', NULL, '2024-12-13 06:11:58', '2024-12-13 06:11:58'),
(2, 'Jacynthe Ward', 'aufderhar.buster@example.com', '$2y$12$Q2KZa33RPs2wXGSIluzFYuK2rqpgQV3.sb9loKeRIA3tHXvIyY5Wa', 'admin', NULL, '2024-12-13 06:11:58', '2024-12-13 06:11:58'),
(3, 'Abdul Kling', 'king.felicity@example.org', '$2y$12$lAmBNArJ7mPBa94TLtKZXOWDeYTGxyItYHvuQTHLYZS8aWpSLZkQW', 'superadmin', NULL, '2024-12-13 06:11:59', '2024-12-13 06:11:59'),
(4, 'Dora Wuckert', 'julia79@example.org', '$2y$12$PFFSAU7TT34OgVmqDJuVduThPo7MmrkzS1NC5PluTcNZL.NE91Zam', 'admin', NULL, '2024-12-13 06:11:59', '2024-12-13 06:11:59'),
(5, 'Dr. Cheyenne Larkin MD', 'predovic.vicenta@example.org', '$2y$12$Al.gF13GPvuf.dg2akZ7kuA6gNKOdSgcyQIRiMY2noqWhzDo9xraS', 'superadmin', NULL, '2024-12-13 06:12:00', '2024-12-13 06:12:00'),
(6, 'Aubrey Oberbrunner', 'dberge@example.com', '$2y$12$nR7.WhmK4IhcTeAH6jfOH.6cUC5l5pN9uKenNVrps.xkq.2a1jOsm', 'superadmin', NULL, '2024-12-13 06:12:00', '2024-12-13 06:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `ammenities`
--

CREATE TABLE `ammenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ammenities`
--

INSERT INTO `ammenities` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Test', 0, '2024-11-18 04:05:56', '2024-11-18 04:12:32', '2024-11-18 04:12:32'),
(2, 'Coffee', 1, '2024-11-18 08:58:54', '2024-11-26 01:34:31', NULL),
(3, 'Tea Maker', 1, '2024-11-20 05:48:05', '2024-11-26 01:34:46', NULL),
(4, 'Gyser', 1, '2024-11-26 01:35:01', '2024-11-26 01:35:01', NULL),
(5, 'Wi-Fi', 1, '2024-11-26 01:35:15', '2025-02-18 02:24:54', '2025-02-18 02:24:54'),
(6, 'Television', 1, '2024-11-26 01:35:27', '2024-11-26 01:35:27', NULL),
(7, 'Others', 1, '2024-11-26 01:35:41', '2024-11-26 01:35:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cabs`
--

CREATE TABLE `cabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Inactive, 1:Active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabs`
--

INSERT INTO `cabs` (`id`, `title`, `capacity`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SUV', 4, 1, NULL, '2025-02-10 01:59:26', '2025-02-10 01:59:26'),
(2, 'Tata Safari', 6, 1, NULL, '2025-02-10 02:00:26', '2025-02-10 02:00:26'),
(3, 'Kia Carens', 4, 1, NULL, '2025-02-10 02:00:38', '2025-02-18 02:14:56'),
(4, 'Maruti Suzuki', 4, 1, NULL, '2025-02-10 02:00:48', '2025-02-10 02:00:48'),
(5, 'Mahindra Scorpio', 8, 1, NULL, '2025-02-10 02:00:57', '2025-02-10 02:00:57'),
(6, 'Toyota', 6, 1, NULL, '2025-02-10 02:01:14', '2025-02-10 02:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('5c785c036466adea360111aa28563bfd556b5fba', 'i:1;', 1739975979),
('5c785c036466adea360111aa28563bfd556b5fba:timer', 'i:1739975979;', 1739975979);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Deluxe', 1, '2024-11-18 01:30:21', '2024-11-25 20:06:49', NULL),
(2, 'Semi-Delux', 1, '2024-11-18 02:10:31', '2024-11-25 20:06:39', NULL),
(3, 'Utu', 1, '2024-11-18 02:13:52', '2024-11-18 02:45:24', '2024-11-18 02:45:24'),
(4, 'Standard', 1, '2024-11-19 02:07:58', '2024-11-25 20:06:29', NULL),
(5, 'Super-Deluxe', 1, '2024-11-25 20:07:01', '2025-02-18 02:25:22', '2025-02-18 02:25:22'),
(6, 'Premium', 1, '2024-11-25 20:07:06', '2024-11-25 20:07:06', NULL),
(7, 'Premium Plus', 1, '2024-11-25 20:07:15', '2024-11-25 20:07:15', NULL),
(8, 'Luxury', 1, '2024-11-25 20:07:22', '2024-11-25 20:07:22', NULL),
(9, 'Others', 1, '2024-11-25 20:07:31', '2024-11-25 20:07:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1: Active, 0: Inactive	',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tirumala Temple', 1, '2025-02-18 07:55:33', '2024-11-18 05:18:24', '2025-02-18 02:25:33'),
(2, 1, 'Srivari Mettu', 1, NULL, '2024-11-19 07:29:11', '2024-12-11 01:43:37'),
(3, 1, 'Test3', 1, '2024-11-20 12:19:25', '2024-11-19 07:30:22', '2024-11-20 06:49:25'),
(4, 2, 'Digha', 1, NULL, '2024-11-20 06:01:41', '2024-12-11 01:42:50'),
(5, 5, 'Panjim', 1, NULL, '2024-12-11 01:44:20', '2024-12-11 01:44:20'),
(6, 5, 'Canacona', 1, NULL, '2024-12-11 01:44:37', '2024-12-11 01:44:37'),
(7, 3, 'Shimla', 1, NULL, '2024-12-11 01:45:54', '2024-12-11 01:45:54'),
(8, 3, 'Manali', 1, NULL, '2024-12-11 01:46:09', '2024-12-11 01:46:09'),
(9, 2, 'Mandarmani', 1, NULL, '2025-01-06 05:52:08', '2025-02-10 01:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `country_codes`
--

CREATE TABLE `country_codes` (
  `id` int(11) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `phone_code` varchar(5) NOT NULL,
  `phone_length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country_codes`
--

INSERT INTO `country_codes` (`id`, `country_code`, `country_name`, `phone_code`, `phone_length`) VALUES
(1, 'US', 'United States', '+1', 10),
(2, 'IN', 'India', '+91', 10),
(3, 'GB', 'United Kingdom', '+44', 10),
(4, 'AU', 'Australia', '+61', 9),
(5, 'CA', 'Canada', '+1', 10),
(6, 'DE', 'Germany', '+49', 11),
(7, 'FR', 'France', '+33', 9),
(8, 'IT', 'Italy', '+39', 9),
(9, 'JP', 'Japan', '+81', 10),
(10, 'CN', 'China', '+86', 11),
(11, 'BR', 'Brazil', '+55', 11),
(12, 'ZA', 'South Africa', '+27', 9),
(13, 'RU', 'Russia', '+7', 10),
(14, 'MX', 'Mexico', '+52', 10),
(15, 'ES', 'Spain', '+34', 9),
(16, 'NG', 'Nigeria', '+234', 10),
(17, 'PK', 'Pakistan', '+92', 10),
(18, 'ID', 'Indonesia', '+62', 10),
(19, 'AR', 'Argentina', '+54', 10),
(20, 'KR', 'South Korea', '+82', 10);

-- --------------------------------------------------------

--
-- Table structure for table `date_wise_hotel_prices`
--

CREATE TABLE `date_wise_hotel_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `item_title` varchar(255) NOT NULL,
  `item_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `date_wise_hotel_prices`
--

INSERT INTO `date_wise_hotel_prices` (`id`, `hotel_id`, `room_id`, `date`, `item_title`, `item_price`, `created_at`, `updated_at`) VALUES
(1, 35, 14, '2025-01-06', '2 Person', 5500.00, '2025-01-06 06:17:23', '2025-01-06 06:18:09'),
(2, 35, 14, '2025-01-08', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(3, 35, 14, '2025-01-09', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(4, 35, 14, '2025-01-11', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(5, 35, 14, '2025-01-13', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(6, 35, 14, '2025-01-15', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(7, 35, 14, '2025-01-16', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(8, 35, 14, '2025-01-18', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(9, 35, 14, '2025-01-20', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(10, 35, 14, '2025-01-22', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(11, 35, 14, '2025-01-23', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(12, 35, 14, '2025-01-25', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(13, 35, 14, '2025-01-27', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(14, 35, 14, '2025-01-29', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(15, 35, 14, '2025-01-30', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(16, 35, 14, '2025-02-01', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(17, 35, 14, '2025-02-03', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(18, 35, 14, '2025-02-04', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(19, 35, 14, '2025-02-05', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(20, 35, 14, '2025-02-06', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(21, 35, 14, '2025-02-08', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(22, 35, 14, '2025-02-10', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(23, 35, 14, '2025-02-11', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(24, 35, 14, '2025-02-12', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(25, 35, 14, '2025-02-13', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(26, 35, 14, '2025-02-15', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(27, 35, 14, '2025-02-17', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(28, 35, 14, '2025-02-18', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(29, 35, 14, '2025-02-19', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(30, 35, 14, '2025-02-20', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(31, 35, 14, '2025-02-22', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(32, 35, 14, '2025-02-24', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(33, 35, 14, '2025-02-25', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(34, 35, 14, '2025-02-26', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(35, 35, 14, '2025-02-27', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(36, 35, 14, '2025-03-01', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(37, 35, 14, '2025-03-03', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(38, 35, 14, '2025-03-04', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(39, 35, 14, '2025-03-05', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(40, 35, 14, '2025-03-06', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(41, 35, 14, '2025-03-08', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(42, 35, 14, '2025-03-10', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(43, 35, 14, '2025-03-11', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(44, 35, 14, '2025-03-12', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(45, 35, 14, '2025-03-13', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(46, 35, 14, '2025-03-15', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(47, 35, 14, '2025-03-18', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(48, 35, 14, '2025-03-19', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(49, 35, 14, '2025-03-20', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(50, 35, 14, '2025-03-22', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(51, 35, 14, '2025-03-24', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(52, 35, 14, '2025-03-25', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(53, 35, 14, '2025-03-26', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(54, 35, 14, '2025-03-27', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(55, 35, 14, '2025-03-29', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(56, 35, 14, '2025-03-31', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(57, 35, 14, '2025-04-01', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(58, 35, 14, '2025-04-02', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(59, 35, 14, '2025-04-03', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(60, 35, 14, '2025-04-05', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(61, 35, 14, '2025-04-07', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(62, 35, 14, '2025-04-08', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(63, 35, 14, '2025-04-09', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(64, 35, 14, '2025-04-10', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(65, 35, 14, '2025-04-12', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(66, 35, 14, '2025-04-14', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(67, 35, 14, '2025-04-15', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(68, 35, 14, '2025-04-16', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(69, 35, 14, '2025-04-17', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(70, 35, 14, '2025-04-19', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(71, 35, 14, '2025-04-21', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(72, 35, 14, '2025-04-22', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(73, 35, 14, '2025-04-23', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(74, 35, 14, '2025-04-24', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(75, 35, 14, '2025-04-26', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(76, 35, 14, '2025-04-28', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(77, 35, 14, '2025-04-29', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(78, 35, 14, '2025-04-30', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(79, 35, 14, '2025-05-01', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(80, 35, 14, '2025-05-03', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(81, 35, 14, '2025-05-05', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(82, 35, 14, '2025-05-06', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(83, 35, 14, '2025-05-07', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(84, 35, 14, '2025-05-08', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(85, 35, 14, '2025-05-10', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(86, 35, 14, '2025-05-12', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(87, 35, 14, '2025-05-13', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(88, 35, 14, '2025-05-14', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(89, 35, 14, '2025-05-15', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(90, 35, 14, '2025-05-17', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(91, 35, 14, '2025-05-19', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(92, 35, 14, '2025-05-20', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(93, 35, 14, '2025-05-21', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(94, 35, 14, '2025-05-22', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(95, 35, 14, '2025-05-24', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(96, 35, 14, '2025-05-26', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(97, 35, 14, '2025-05-27', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(98, 35, 14, '2025-05-28', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(99, 35, 14, '2025-05-29', '2 Person', 1500.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(100, 35, 14, '2025-01-06', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(101, 35, 14, '2025-01-08', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(102, 35, 14, '2025-01-09', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(103, 35, 14, '2025-01-11', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(104, 35, 14, '2025-01-13', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(105, 35, 14, '2025-01-15', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(106, 35, 14, '2025-01-16', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(107, 35, 14, '2025-01-18', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(108, 35, 14, '2025-01-20', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(109, 35, 14, '2025-01-22', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(110, 35, 14, '2025-01-23', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(111, 35, 14, '2025-01-25', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(112, 35, 14, '2025-01-27', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(113, 35, 14, '2025-01-29', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(114, 35, 14, '2025-01-30', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(115, 35, 14, '2025-02-01', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(116, 35, 14, '2025-02-03', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(117, 35, 14, '2025-02-04', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(118, 35, 14, '2025-02-05', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(119, 35, 14, '2025-02-06', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(120, 35, 14, '2025-02-08', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(121, 35, 14, '2025-02-10', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(122, 35, 14, '2025-02-11', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(123, 35, 14, '2025-02-12', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(124, 35, 14, '2025-02-13', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(125, 35, 14, '2025-02-15', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(126, 35, 14, '2025-02-17', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(127, 35, 14, '2025-02-18', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(128, 35, 14, '2025-02-19', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(129, 35, 14, '2025-02-20', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(130, 35, 14, '2025-02-22', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(131, 35, 14, '2025-02-24', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(132, 35, 14, '2025-02-25', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(133, 35, 14, '2025-02-26', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(134, 35, 14, '2025-02-27', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(135, 35, 14, '2025-03-01', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(136, 35, 14, '2025-03-03', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(137, 35, 14, '2025-03-04', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(138, 35, 14, '2025-03-05', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(139, 35, 14, '2025-03-06', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(140, 35, 14, '2025-03-08', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(141, 35, 14, '2025-03-10', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(142, 35, 14, '2025-03-11', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(143, 35, 14, '2025-03-12', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(144, 35, 14, '2025-03-13', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(145, 35, 14, '2025-03-15', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(146, 35, 14, '2025-03-18', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(147, 35, 14, '2025-03-19', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(148, 35, 14, '2025-03-20', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(149, 35, 14, '2025-03-22', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(150, 35, 14, '2025-03-24', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(151, 35, 14, '2025-03-25', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(152, 35, 14, '2025-03-26', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(153, 35, 14, '2025-03-27', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(154, 35, 14, '2025-03-29', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(155, 35, 14, '2025-03-31', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(156, 35, 14, '2025-04-01', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(157, 35, 14, '2025-04-02', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(158, 35, 14, '2025-04-03', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(159, 35, 14, '2025-04-05', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(160, 35, 14, '2025-04-07', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(161, 35, 14, '2025-04-08', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(162, 35, 14, '2025-04-09', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(163, 35, 14, '2025-04-10', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(164, 35, 14, '2025-04-12', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(165, 35, 14, '2025-04-14', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(166, 35, 14, '2025-04-15', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(167, 35, 14, '2025-04-16', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(168, 35, 14, '2025-04-17', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(169, 35, 14, '2025-04-19', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(170, 35, 14, '2025-04-21', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(171, 35, 14, '2025-04-22', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(172, 35, 14, '2025-04-23', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(173, 35, 14, '2025-04-24', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(174, 35, 14, '2025-04-26', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(175, 35, 14, '2025-04-28', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(176, 35, 14, '2025-04-29', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(177, 35, 14, '2025-04-30', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(178, 35, 14, '2025-05-01', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(179, 35, 14, '2025-05-03', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(180, 35, 14, '2025-05-05', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(181, 35, 14, '2025-05-06', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(182, 35, 14, '2025-05-07', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(183, 35, 14, '2025-05-08', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(184, 35, 14, '2025-05-10', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(185, 35, 14, '2025-05-12', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(186, 35, 14, '2025-05-13', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(187, 35, 14, '2025-05-14', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(188, 35, 14, '2025-05-15', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(189, 35, 14, '2025-05-17', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(190, 35, 14, '2025-05-19', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(191, 35, 14, '2025-05-20', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(192, 35, 14, '2025-05-21', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(193, 35, 14, '2025-05-22', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(194, 35, 14, '2025-05-24', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(195, 35, 14, '2025-05-26', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(196, 35, 14, '2025-05-27', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(197, 35, 14, '2025-05-28', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(198, 35, 14, '2025-05-29', 'CWB (Addon)', 200.00, '2025-01-06 06:17:23', '2025-01-06 06:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `destination_wise_routes`
--

CREATE TABLE `destination_wise_routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_name` varchar(255) NOT NULL COMMENT 'e.g., Guwahati to Shillong to Cherrapunjee',
  `destination_id` bigint(20) UNSIGNED NOT NULL COMMENT 'e.g., Meghalaya',
  `seasion_type_id` bigint(20) UNSIGNED NOT NULL,
  `total_distance_km` varchar(250) DEFAULT NULL COMMENT 'Total route distance in kilometers',
  `total_travel_time` varchar(50) DEFAULT NULL COMMENT 'Total estimated travel time',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination_wise_routes`
--

INSERT INTO `destination_wise_routes` (`id`, `route_name`, `destination_id`, `seasion_type_id`, `total_distance_km`, `total_travel_time`, `created_at`, `updated_at`) VALUES
(3, 'kolkata to digha via contai', 2, 3, '250', '5', '2025-02-10 02:12:28', '2025-02-10 02:12:28'),
(4, 'new route for normal season', 2, 1, '150', '4', '2025-02-10 03:47:59', '2025-02-10 03:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `destination_wise_route_waypoints`
--

CREATE TABLE `destination_wise_route_waypoints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing destination_wise_routes',
  `point_name` varchar(255) DEFAULT NULL COMMENT 'Name of the waypoint',
  `division_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing cities',
  `sequence` int(11) NOT NULL COMMENT 'Order of the waypoint, e.g., 1 for first, 2 for second, etc.',
  `distance_from_previous_km` varchar(250) DEFAULT NULL COMMENT 'Distance from the previous waypoint',
  `travel_time_from_previous` varchar(50) DEFAULT NULL COMMENT 'Travel time from the previous waypoint',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination_wise_route_waypoints`
--

INSERT INTO `destination_wise_route_waypoints` (`id`, `route_id`, `point_name`, `division_id`, `sequence`, `distance_from_previous_km`, `travel_time_from_previous`, `created_at`, `updated_at`) VALUES
(1, 3, 'kolkata esplanade bus stand ', 4, 1, '', '', '2025-02-10 02:12:28', '2025-02-10 02:12:28'),
(2, 3, 'contai stand', 4, 2, '', '', '2025-02-10 02:12:28', '2025-02-10 02:12:28'),
(3, 3, 'new Digha', 4, 3, '', '', '2025-02-10 02:12:28', '2025-02-10 02:12:28'),
(4, 4, 'Haldia', 4, 1, '', '', '2025-02-10 03:47:59', '2025-02-10 03:47:59'),
(5, 4, 'Mandarmani', 9, 2, '150', '4', '2025-02-10 03:47:59', '2025-02-10 03:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `division_wise_activities`
--

CREATE TABLE `division_wise_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `seasion_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `type` enum('PAID','UNPAID') NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `ticket_price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `division_wise_activities`
--

INSERT INTO `division_wise_activities` (`id`, `division_id`, `seasion_type_id`, `name`, `description`, `type`, `price`, `ticket_price`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'digha activity for paid', '<h4>SMS Template</h4>\r\n\r\n<p>Dear new user {#var#}, You have been chosen by {#var#} to register and join an auction. Details: {#var#} (owned by SMTPL) - Sarv Megh Technology OPC Private Limited</p>\r\n\r\n<p>&nbsp;</p>', 'PAID', 1500.00, 50.00, '2025-02-10 02:05:30', '2025-02-19 06:14:05'),
(2, 4, 3, 'digha off-season activity for unpaid ', '<p>fdfdfd</p>', 'UNPAID', 0.00, 0.00, '2025-02-10 02:07:42', '2025-02-19 06:13:23'),
(3, 2, 3, 'Jungle safary', '<h3><span style=\"font-size:22px\"><span style=\"color:#2ecc71\"><strong>HI this is Rajib</strong></span></span></h3>', 'UNPAID', 0.00, 0.00, '2025-02-17 05:39:59', '2025-02-19 06:08:32'),
(4, 4, 1, 'cssdsdsds', '<p>hi</p>', 'UNPAID', 0.00, 0.00, '2025-02-19 03:03:05', '2025-02-19 06:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `division_wise_activity_images`
--

CREATE TABLE `division_wise_activity_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_wise_activity_id` bigint(20) UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `division_wise_cabs`
--

CREATE TABLE `division_wise_cabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `seasion_type_id` bigint(20) UNSIGNED NOT NULL,
  `cab_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1:Active, 0:Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `division_wise_cabs`
--

INSERT INTO `division_wise_cabs` (`id`, `division_id`, `seasion_type_id`, `cab_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 3, 1, '2025-02-10 02:01:34', '2025-02-10 02:01:34'),
(2, 4, 1, 1, 1, '2025-02-10 02:01:34', '2025-02-10 02:01:34'),
(3, 4, 1, 2, 1, '2025-02-10 02:01:34', '2025-02-10 02:01:34'),
(4, 4, 3, 3, 1, '2025-02-10 02:01:39', '2025-02-10 02:03:43'),
(5, 4, 3, 1, 1, '2025-02-10 02:01:39', '2025-02-10 02:03:41'),
(8, 4, 2, 3, 1, '2025-02-10 02:04:00', '2025-02-10 02:04:00'),
(9, 4, 2, 1, 1, '2025-02-10 02:04:00', '2025-02-10 02:04:00'),
(10, 4, 2, 2, 1, '2025-02-10 02:04:00', '2025-02-10 02:04:00'),
(11, 4, 2, 6, 1, '2025-02-10 02:04:00', '2025-02-10 02:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `division_wise_sightseeings`
--

CREATE TABLE `division_wise_sightseeings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `seasion_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('PAID','UNPAID') NOT NULL,
  `ticket_price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `division_wise_sightseeings`
--

INSERT INTO `division_wise_sightseeings` (`id`, `division_id`, `seasion_type_id`, `name`, `type`, `ticket_price`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'Digha sightseeing 1', 'PAID', 500.00, '2025-02-10 02:08:48', '2025-02-10 02:08:48'),
(2, 4, 3, 'Digha sightseeing 2', 'PAID', 400.00, '2025-02-10 02:08:48', '2025-02-10 02:08:48'),
(3, 4, 1, 'sightseeing 1', 'PAID', 2000.00, '2025-02-10 04:49:54', '2025-02-10 04:49:54'),
(4, 4, 1, 'sightseeing 2 for dight', 'PAID', 1400.00, '2025-02-10 04:50:30', '2025-02-10 04:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `division_wise_sightseeing_images`
--

CREATE TABLE `division_wise_sightseeing_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sightseeing_id` bigint(20) UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `hotel_category` varchar(255) NOT NULL,
  `number_of_rooms` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_code` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `whatsapp_number` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Inactive, 1:Active',
  `address` text DEFAULT NULL,
  `release_trigger` int(11) DEFAULT 0,
  `policy` varchar(250) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `destination`, `division`, `hotel_category`, `number_of_rooms`, `phone_code`, `mobile_number`, `whatsapp_number`, `email1`, `email2`, `status`, `address`, `release_trigger`, `policy`, `deleted_at`, `created_by`, `created_at`, `updated_at`) VALUES
(27, 'Test133', '2', '1', '2', 58, '+91', '8798798111', '8798798222', 'dsdsdd11@gmail.com', 'sdsds22@gmail.com', 1, 'New Adarshapally,Kolkata', 0, NULL, NULL, NULL, '2024-11-22 07:16:25', '2024-12-13 07:59:27'),
(29, 'Hotel Tower View', '1', '2', '1', 2, '+91', '9876541235', '9876541235', 'amit.s@techmantra.co', 'amit.s@techmantra.co', 1, 'ghatal', 25, NULL, '2025-02-18 02:26:33', NULL, '2024-11-26 02:27:33', '2025-02-18 02:26:33'),
(33, 'Mountain Top Hotel In Manali', '3', '8', '1', 8, '+91', '9876541235', '9876542587', 'amit.s@techmantra.co', 'amit.s@techmantra.co', 1, 'Near, Hadimba Temple Rd, Dhungri Village, Manali, Himachal Pradesh', 32, NULL, NULL, NULL, '2024-12-09 01:48:43', '2025-01-06 01:56:15'),
(34, 'Sea Breeze Village', '5', '6', '1', 8, '+91', '9876542589', '9876542589', 'seabreezegoa@gmail.com', NULL, 1, 'H.No.5/188 C, Near Infantaria, Behind Park Avenue, Calangute - Baga Rd, Umtavaddo, Calangute, 403516, India', 69, NULL, NULL, NULL, '2025-01-06 02:51:23', '2025-01-06 03:31:20'),
(35, 'Abcd', '2', '9', '2', 7, '+91', '9876541235', '9876541235', 'amit.s@techmantra.co', 'amit.s@techmantra.co', 1, 'ghatal', 8, NULL, NULL, NULL, '2025-01-06 06:06:20', '2025-01-06 06:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE `hotel_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_policies`
--

CREATE TABLE `hotel_policies` (
  `id` int(11) NOT NULL,
  `hotel_id` bigint(20) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_price_charts`
--

CREATE TABLE `hotel_price_charts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price_chart_type_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `plan_title` varchar(255) NOT NULL,
  `plan_item` varchar(255) NOT NULL,
  `item_price` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_price_charts`
--

INSERT INTO `hotel_price_charts` (`id`, `price_chart_type_id`, `hotel_id`, `room_id`, `plan_title`, `plan_item`, `item_price`, `created_at`, `updated_at`) VALUES
(1, 1, 33, 11, 'Normal Season', 'ACCOMODATION', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(2, 1, 33, 11, 'Normal Season', 'CP', 0.00, '2024-12-12 06:34:08', '2024-12-12 06:37:40'),
(3, 1, 33, 11, 'Normal Season', 'MAP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(4, 1, 33, 11, 'Normal Season', 'APAI', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(5, 1, 33, 11, 'Peak Season', 'ACCOMODATION', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(6, 1, 33, 11, 'Peak Season', 'CP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(7, 1, 33, 11, 'Peak Season', 'MAP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(8, 1, 33, 11, 'Peak Season', 'APAI', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(9, 1, 33, 11, 'Off-Season', 'ACCOMODATION', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(10, 1, 33, 11, 'Off-Season', 'CP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(11, 1, 33, 11, 'Off-Season', 'MAP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(12, 1, 33, 11, 'Off-Season', 'APAI', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(13, 1, 33, 11, 'CWB (Addon)', 'ACCOMODATION', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(14, 1, 33, 11, 'CWB (Addon)', 'CP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(15, 1, 33, 11, 'CWB (Addon)', 'MAP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(16, 1, 33, 11, 'CWB (Addon)', 'APAI', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(17, 1, 33, 11, 'CWNB (Addon)', 'ACCOMODATION', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(18, 1, 33, 11, 'CWNB (Addon)', 'CP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(19, 1, 33, 11, 'CWNB (Addon)', 'MAP', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(20, 1, 33, 11, 'CWNB (Addon)', 'APAI', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(21, 1, 33, 11, 'Meal Plan', 'BREAKFAST', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(22, 1, 33, 11, 'Meal Plan', 'LUNCH', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(23, 1, 33, 11, 'Meal Plan', 'DINNER', 0.00, '2024-12-12 06:34:08', '2024-12-13 03:54:47'),
(24, 2, 33, 11, 'Normal Season', 'ACCOMODATION', 11.00, '2024-12-12 06:34:09', '2024-12-13 03:54:48'),
(25, 2, 33, 11, 'Normal Season', 'CP', 12.00, '2024-12-12 06:34:09', '2024-12-12 06:37:42'),
(26, 2, 33, 11, 'Normal Season', 'MAP', 13.00, '2024-12-12 06:34:09', '2024-12-13 03:54:48'),
(27, 2, 33, 11, 'Normal Season', 'APAI', 14.00, '2024-12-12 06:34:09', '2024-12-13 03:54:48'),
(28, 2, 33, 11, 'Peak Season', 'ACCOMODATION', 21.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(29, 2, 33, 11, 'Peak Season', 'CP', 22.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(30, 2, 33, 11, 'Peak Season', 'MAP', 23.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(31, 2, 33, 11, 'Peak Season', 'APAI', 24.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(32, 2, 33, 11, 'Off-Season', 'ACCOMODATION', 0.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(33, 2, 33, 11, 'Off-Season', 'CP', 28.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(34, 2, 33, 11, 'Off-Season', 'MAP', 54.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(35, 2, 33, 11, 'Off-Season', 'APAI', 78.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(36, 2, 33, 11, 'CWB (Addon)', 'ACCOMODATION', 44.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(37, 2, 33, 11, 'CWB (Addon)', 'CP', 45.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(38, 2, 33, 11, 'CWB (Addon)', 'MAP', 46.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(39, 2, 33, 11, 'CWB (Addon)', 'APAI', 47.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(40, 2, 33, 11, 'CWNB (Addon)', 'ACCOMODATION', 50.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(41, 2, 33, 11, 'CWNB (Addon)', 'CP', 51.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(42, 2, 33, 11, 'CWNB (Addon)', 'MAP', 52.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(43, 2, 33, 11, 'CWNB (Addon)', 'APAI', 53.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(44, 2, 33, 11, 'Meal Plan', 'BREAKFAST', 61.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(45, 2, 33, 11, 'Meal Plan', 'LUNCH', 62.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(46, 2, 33, 11, 'Meal Plan', 'DINNER', 63.00, '2024-12-12 06:34:09', '2024-12-13 03:54:49'),
(47, 3, 33, 8, 'Normal Season', 'ACCOMODATION', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(48, 3, 33, 8, 'Normal Season', 'MAP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(49, 3, 33, 8, 'Normal Season', 'APAI', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(50, 3, 33, 8, 'Peak Season', 'ACCOMODATION', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(51, 3, 33, 8, 'Peak Season', 'CP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(52, 3, 33, 8, 'Peak Season', 'MAP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(53, 3, 33, 8, 'Peak Season', 'APAI', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(54, 3, 33, 8, 'Off-Season', 'ACCOMODATION', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(55, 3, 33, 8, 'Off-Season', 'CP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(56, 3, 33, 8, 'Off-Season', 'MAP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(57, 3, 33, 8, 'Off-Season', 'APAI', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(58, 3, 33, 8, 'CWB (Addon)', 'ACCOMODATION', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(59, 3, 33, 8, 'CWB (Addon)', 'CP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(60, 3, 33, 8, 'CWB (Addon)', 'MAP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(61, 3, 33, 8, 'CWB (Addon)', 'APAI', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(62, 3, 33, 8, 'CWNB (Addon)', 'ACCOMODATION', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(63, 3, 33, 8, 'CWNB (Addon)', 'CP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(64, 3, 33, 8, 'CWNB (Addon)', 'MAP', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(65, 3, 33, 8, 'CWNB (Addon)', 'APAI', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(66, 3, 33, 8, 'Meal Plan', 'BREAKFAST', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(67, 3, 33, 8, 'Meal Plan', 'LUNCH', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(68, 3, 33, 8, 'Meal Plan', 'DINNER', 0.00, '2024-12-24 08:03:33', '2024-12-24 08:07:14'),
(69, 4, 33, 8, 'Normal Season', 'ACCOMODATION', 25.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(70, 4, 33, 8, 'Normal Season', 'MAP', 55.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(71, 4, 33, 8, 'Normal Season', 'APAI', 55.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(72, 4, 33, 8, 'Peak Season', 'ACCOMODATION', 66.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(73, 4, 33, 8, 'Peak Season', 'CP', 66.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(74, 4, 33, 8, 'Peak Season', 'MAP', 66.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(75, 4, 33, 8, 'Peak Season', 'APAI', 33.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(76, 4, 33, 8, 'Off-Season', 'ACCOMODATION', 120.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(77, 4, 33, 8, 'Off-Season', 'CP', 125.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(78, 4, 33, 8, 'Off-Season', 'MAP', 245.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(79, 4, 33, 8, 'Off-Season', 'APAI', 256.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(80, 4, 33, 8, 'CWB (Addon)', 'ACCOMODATION', 120.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(81, 4, 33, 8, 'CWB (Addon)', 'CP', 145.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(82, 4, 33, 8, 'CWB (Addon)', 'MAP', 126.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(83, 4, 33, 8, 'CWB (Addon)', 'APAI', 26.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(84, 4, 33, 8, 'CWNB (Addon)', 'ACCOMODATION', 0.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(85, 4, 33, 8, 'CWNB (Addon)', 'CP', 0.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(86, 4, 33, 8, 'CWNB (Addon)', 'MAP', 0.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(87, 4, 33, 8, 'CWNB (Addon)', 'APAI', 0.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(88, 4, 33, 8, 'Meal Plan', 'BREAKFAST', 0.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(89, 4, 33, 8, 'Meal Plan', 'LUNCH', 0.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(90, 4, 33, 8, 'Meal Plan', 'DINNER', 0.00, '2024-12-24 08:03:34', '2024-12-24 08:07:16'),
(91, 3, 33, 8, 'Normal Season', 'CP', NULL, '2024-12-24 08:07:12', '2024-12-24 08:07:12'),
(92, 4, 33, 8, 'Normal Season', 'CP', 88.00, '2024-12-24 08:07:14', '2024-12-24 08:07:16'),
(93, 5, 29, 9, 'Normal Season', 'ACCOMODATION', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(94, 5, 29, 9, 'Normal Season', 'MAP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(95, 5, 29, 9, 'Normal Season', 'APAI', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(96, 5, 29, 9, 'Normal Season', 'CP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(97, 5, 29, 9, 'Peak Season', 'ACCOMODATION', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(98, 5, 29, 9, 'Peak Season', 'CP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(99, 5, 29, 9, 'Peak Season', 'MAP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(100, 5, 29, 9, 'Peak Season', 'APAI', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(101, 5, 29, 9, 'Off-Season', 'ACCOMODATION', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(102, 5, 29, 9, 'Off-Season', 'CP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(103, 5, 29, 9, 'Off-Season', 'MAP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(104, 5, 29, 9, 'Off-Season', 'APAI', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(105, 5, 29, 9, 'CWB (Addon)', 'ACCOMODATION', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(106, 5, 29, 9, 'CWB (Addon)', 'CP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(107, 5, 29, 9, 'CWB (Addon)', 'MAP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(108, 5, 29, 9, 'CWB (Addon)', 'APAI', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(109, 5, 29, 9, 'CWNB (Addon)', 'ACCOMODATION', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(110, 5, 29, 9, 'CWNB (Addon)', 'CP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(111, 5, 29, 9, 'CWNB (Addon)', 'MAP', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(112, 5, 29, 9, 'CWNB (Addon)', 'APAI', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(113, 5, 29, 9, 'Meal Plan', 'BREAKFAST', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(114, 5, 29, 9, 'Meal Plan', 'LUNCH', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(115, 5, 29, 9, 'Meal Plan', 'DINNER', 0.00, '2025-01-02 02:11:52', '2025-01-02 02:13:21'),
(116, 6, 29, 9, 'Normal Season', 'ACCOMODATION', 250.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(117, 6, 29, 9, 'Normal Season', 'MAP', 12.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(118, 6, 29, 9, 'Normal Season', 'APAI', 20.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(119, 6, 29, 9, 'Normal Season', 'CP', 25.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(120, 6, 29, 9, 'Peak Season', 'ACCOMODATION', 12.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(121, 6, 29, 9, 'Peak Season', 'CP', 82.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(122, 6, 29, 9, 'Peak Season', 'MAP', 52.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(123, 6, 29, 9, 'Peak Season', 'APAI', 22.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(124, 6, 29, 9, 'Off-Season', 'ACCOMODATION', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(125, 6, 29, 9, 'Off-Season', 'CP', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(126, 6, 29, 9, 'Off-Season', 'MAP', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(127, 6, 29, 9, 'Off-Season', 'APAI', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(128, 6, 29, 9, 'CWB (Addon)', 'ACCOMODATION', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(129, 6, 29, 9, 'CWB (Addon)', 'CP', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(130, 6, 29, 9, 'CWB (Addon)', 'MAP', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(131, 6, 29, 9, 'CWB (Addon)', 'APAI', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(132, 6, 29, 9, 'CWNB (Addon)', 'ACCOMODATION', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(133, 6, 29, 9, 'CWNB (Addon)', 'CP', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(134, 6, 29, 9, 'CWNB (Addon)', 'MAP', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(135, 6, 29, 9, 'CWNB (Addon)', 'APAI', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(136, 6, 29, 9, 'Meal Plan', 'BREAKFAST', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(137, 6, 29, 9, 'Meal Plan', 'LUNCH', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(138, 6, 29, 9, 'Meal Plan', 'DINNER', 0.00, '2025-01-02 02:11:53', '2025-01-02 02:13:23'),
(139, 7, 34, 13, 'Normal Season', 'ACCOMODATION', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(140, 7, 34, 13, 'Normal Season', 'MAP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(141, 7, 34, 13, 'Normal Season', 'APAI', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(142, 7, 34, 13, 'Normal Season', 'CP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(143, 7, 34, 13, 'Peak Season', 'ACCOMODATION', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(144, 7, 34, 13, 'Peak Season', 'CP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(145, 7, 34, 13, 'Peak Season', 'MAP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(146, 7, 34, 13, 'Peak Season', 'APAI', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(147, 7, 34, 13, 'Off-Season', 'ACCOMODATION', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(148, 7, 34, 13, 'Off-Season', 'CP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(149, 7, 34, 13, 'Off-Season', 'MAP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(150, 7, 34, 13, 'Off-Season', 'APAI', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(151, 7, 34, 13, 'CWB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(152, 7, 34, 13, 'CWB (Addon)', 'CP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(153, 7, 34, 13, 'CWB (Addon)', 'MAP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(154, 7, 34, 13, 'CWB (Addon)', 'APAI', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(155, 7, 34, 13, 'CWNB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(156, 7, 34, 13, 'CWNB (Addon)', 'CP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(157, 7, 34, 13, 'CWNB (Addon)', 'MAP', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(158, 7, 34, 13, 'CWNB (Addon)', 'APAI', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(159, 7, 34, 13, 'Meal Plan', 'BREAKFAST', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(160, 7, 34, 13, 'Meal Plan', 'LUNCH', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(161, 7, 34, 13, 'Meal Plan', 'DINNER', NULL, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(162, 8, 34, 13, 'Normal Season', 'ACCOMODATION', 552.00, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(163, 8, 34, 13, 'Normal Season', 'MAP', 25.00, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(164, 8, 34, 13, 'Normal Season', 'APAI', 25.00, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(165, 8, 34, 13, 'Normal Season', 'CP', 1000.00, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(166, 8, 34, 13, 'Peak Season', 'ACCOMODATION', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(167, 8, 34, 13, 'Peak Season', 'CP', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(168, 8, 34, 13, 'Peak Season', 'MAP', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(169, 8, 34, 13, 'Peak Season', 'APAI', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(170, 8, 34, 13, 'Off-Season', 'ACCOMODATION', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(171, 8, 34, 13, 'Off-Season', 'CP', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(172, 8, 34, 13, 'Off-Season', 'MAP', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(173, 8, 34, 13, 'Off-Season', 'APAI', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(174, 8, 34, 13, 'CWB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(175, 8, 34, 13, 'CWB (Addon)', 'CP', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(176, 8, 34, 13, 'CWB (Addon)', 'MAP', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(177, 8, 34, 13, 'CWB (Addon)', 'APAI', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(178, 8, 34, 13, 'CWNB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(179, 8, 34, 13, 'CWNB (Addon)', 'CP', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(180, 8, 34, 13, 'CWNB (Addon)', 'MAP', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(181, 8, 34, 13, 'CWNB (Addon)', 'APAI', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(182, 8, 34, 13, 'Meal Plan', 'BREAKFAST', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(183, 8, 34, 13, 'Meal Plan', 'LUNCH', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(184, 8, 34, 13, 'Meal Plan', 'DINNER', NULL, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(185, 9, 35, 14, 'Normal Season', 'ACCOMODATION', 10.00, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(186, 9, 35, 14, 'Normal Season', 'MAP', 10.00, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(187, 9, 35, 14, 'Normal Season', 'APAI', 10.00, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(188, 9, 35, 14, 'Normal Season', 'CP', 10.00, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(189, 9, 35, 14, 'Peak Season', 'ACCOMODATION', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(190, 9, 35, 14, 'Peak Season', 'CP', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(191, 9, 35, 14, 'Peak Season', 'MAP', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(192, 9, 35, 14, 'Peak Season', 'APAI', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(193, 9, 35, 14, 'Off-Season', 'ACCOMODATION', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(194, 9, 35, 14, 'Off-Season', 'CP', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(195, 9, 35, 14, 'Off-Season', 'MAP', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(196, 9, 35, 14, 'Off-Season', 'APAI', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(197, 9, 35, 14, 'CWB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(198, 9, 35, 14, 'CWB (Addon)', 'CP', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(199, 9, 35, 14, 'CWB (Addon)', 'MAP', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(200, 9, 35, 14, 'CWB (Addon)', 'APAI', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(201, 9, 35, 14, 'CWNB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(202, 9, 35, 14, 'CWNB (Addon)', 'CP', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(203, 9, 35, 14, 'CWNB (Addon)', 'MAP', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(204, 9, 35, 14, 'CWNB (Addon)', 'APAI', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(205, 9, 35, 14, 'Meal Plan', 'BREAKFAST', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(206, 9, 35, 14, 'Meal Plan', 'LUNCH', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(207, 9, 35, 14, 'Meal Plan', 'DINNER', NULL, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(208, 10, 35, 14, 'Normal Season', 'ACCOMODATION', 15.00, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(209, 10, 35, 14, 'Normal Season', 'MAP', 15.00, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(210, 10, 35, 14, 'Normal Season', 'APAI', 25.00, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(211, 10, 35, 14, 'Normal Season', 'CP', 30.00, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(212, 10, 35, 14, 'Peak Season', 'ACCOMODATION', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(213, 10, 35, 14, 'Peak Season', 'CP', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(214, 10, 35, 14, 'Peak Season', 'MAP', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(215, 10, 35, 14, 'Peak Season', 'APAI', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(216, 10, 35, 14, 'Off-Season', 'ACCOMODATION', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(217, 10, 35, 14, 'Off-Season', 'CP', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(218, 10, 35, 14, 'Off-Season', 'MAP', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(219, 10, 35, 14, 'Off-Season', 'APAI', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(220, 10, 35, 14, 'CWB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(221, 10, 35, 14, 'CWB (Addon)', 'CP', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(222, 10, 35, 14, 'CWB (Addon)', 'MAP', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(223, 10, 35, 14, 'CWB (Addon)', 'APAI', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(224, 10, 35, 14, 'CWNB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(225, 10, 35, 14, 'CWNB (Addon)', 'CP', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(226, 10, 35, 14, 'CWNB (Addon)', 'MAP', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(227, 10, 35, 14, 'CWNB (Addon)', 'APAI', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(228, 10, 35, 14, 'Meal Plan', 'BREAKFAST', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(229, 10, 35, 14, 'Meal Plan', 'LUNCH', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(230, 10, 35, 14, 'Meal Plan', 'DINNER', NULL, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(231, 11, 35, 15, 'Normal Season', 'ACCOMODATION', 25.00, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(232, 11, 35, 15, 'Normal Season', 'MAP', 25.00, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(233, 11, 35, 15, 'Normal Season', 'APAI', 25.00, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(234, 11, 35, 15, 'Normal Season', 'CP', 25.00, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(235, 11, 35, 15, 'Peak Season', 'ACCOMODATION', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(236, 11, 35, 15, 'Peak Season', 'CP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(237, 11, 35, 15, 'Peak Season', 'MAP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(238, 11, 35, 15, 'Peak Season', 'APAI', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(239, 11, 35, 15, 'Off-Season', 'ACCOMODATION', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(240, 11, 35, 15, 'Off-Season', 'CP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(241, 11, 35, 15, 'Off-Season', 'MAP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(242, 11, 35, 15, 'Off-Season', 'APAI', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(243, 11, 35, 15, 'CWB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(244, 11, 35, 15, 'CWB (Addon)', 'CP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(245, 11, 35, 15, 'CWB (Addon)', 'MAP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(246, 11, 35, 15, 'CWB (Addon)', 'APAI', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(247, 11, 35, 15, 'CWNB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(248, 11, 35, 15, 'CWNB (Addon)', 'CP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(249, 11, 35, 15, 'CWNB (Addon)', 'MAP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(250, 11, 35, 15, 'CWNB (Addon)', 'APAI', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(251, 11, 35, 15, 'Meal Plan', 'BREAKFAST', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(252, 11, 35, 15, 'Meal Plan', 'LUNCH', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(253, 11, 35, 15, 'Meal Plan', 'DINNER', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(254, 12, 35, 15, 'Normal Season', 'ACCOMODATION', 20.00, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(255, 12, 35, 15, 'Normal Season', 'MAP', 20.00, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(256, 12, 35, 15, 'Normal Season', 'APAI', 50.00, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(257, 12, 35, 15, 'Normal Season', 'CP', 100.00, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(258, 12, 35, 15, 'Peak Season', 'ACCOMODATION', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(259, 12, 35, 15, 'Peak Season', 'CP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(260, 12, 35, 15, 'Peak Season', 'MAP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(261, 12, 35, 15, 'Peak Season', 'APAI', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(262, 12, 35, 15, 'Off-Season', 'ACCOMODATION', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(263, 12, 35, 15, 'Off-Season', 'CP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(264, 12, 35, 15, 'Off-Season', 'MAP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(265, 12, 35, 15, 'Off-Season', 'APAI', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(266, 12, 35, 15, 'CWB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(267, 12, 35, 15, 'CWB (Addon)', 'CP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(268, 12, 35, 15, 'CWB (Addon)', 'MAP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(269, 12, 35, 15, 'CWB (Addon)', 'APAI', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(270, 12, 35, 15, 'CWNB (Addon)', 'ACCOMODATION', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(271, 12, 35, 15, 'CWNB (Addon)', 'CP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(272, 12, 35, 15, 'CWNB (Addon)', 'MAP', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(273, 12, 35, 15, 'CWNB (Addon)', 'APAI', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(274, 12, 35, 15, 'Meal Plan', 'BREAKFAST', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(275, 12, 35, 15, 'Meal Plan', 'LUNCH', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(276, 12, 35, 15, 'Meal Plan', 'DINNER', NULL, '2025-01-06 06:08:33', '2025-01-06 06:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_price_chart_types`
--

CREATE TABLE `hotel_price_chart_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `rack_rate` decimal(10,2) DEFAULT 0.00,
  `gst` decimal(10,2) DEFAULT 0.00,
  `type` int(11) DEFAULT 2 COMMENT '1:Actual Price, 2:Selling Price',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_price_chart_types`
--

INSERT INTO `hotel_price_chart_types` (`id`, `hotel_id`, `room_id`, `title`, `rack_rate`, `gst`, `type`, `created_at`, `updated_at`) VALUES
(1, 33, 11, 'Actual Price Chart', 0.00, 0.00, 1, '2024-12-12 06:34:08', '2024-12-13 03:54:46'),
(2, 33, 11, 'Selling Price Chart', 0.00, 0.00, 2, '2024-12-12 06:34:09', '2024-12-13 03:54:47'),
(3, 33, 8, 'Actual Price Chart', 0.00, 0.00, 1, '2024-12-24 08:03:33', '2024-12-24 08:07:12'),
(4, 33, 8, 'Selling Price Chart', 0.00, 0.00, 2, '2024-12-24 08:03:34', '2024-12-24 08:07:14'),
(5, 29, 9, 'Actual Price Chart', 0.00, 0.00, 1, '2025-01-02 02:11:52', '2025-01-02 02:13:19'),
(6, 29, 9, 'Selling Price Chart', 0.00, 0.00, 2, '2025-01-02 02:11:53', '2025-01-02 02:13:21'),
(7, 34, 13, 'Actual Price Chart', 0.00, 0.00, 1, '2025-01-06 03:15:02', '2025-01-06 03:15:02'),
(8, 34, 13, 'Selling Price Chart', 0.00, 0.00, 2, '2025-01-06 03:15:03', '2025-01-06 03:15:03'),
(9, 35, 14, 'Actual Price Chart', 0.00, 0.00, 1, '2025-01-06 06:08:02', '2025-01-06 06:08:02'),
(10, 35, 14, 'Selling Price Chart', 0.00, 0.00, 2, '2025-01-06 06:08:03', '2025-01-06 06:08:03'),
(11, 35, 15, 'Actual Price Chart', 0.00, 0.00, 1, '2025-01-06 06:08:33', '2025-01-06 06:08:33'),
(12, 35, 15, 'Selling Price Chart', 0.00, 0.00, 2, '2025-01-06 06:08:33', '2025-01-06 06:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_seasion_times`
--

CREATE TABLE `hotel_seasion_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seasion_type` varchar(255) DEFAULT NULL,
  `seasion_type_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_seasion_times`
--

INSERT INTO `hotel_seasion_times` (`id`, `seasion_type`, `seasion_type_id`, `hotel_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Normal Season', 1, 33, '2025-01-01', '2025-04-30', '2024-12-09 01:48:43', '2024-12-09 04:27:56'),
(2, 'Peak Season', 2, 33, '2025-05-01', '2025-08-31', '2024-12-09 01:48:43', '2024-12-09 04:27:56'),
(3, 'Off-Season', 3, 33, '2025-09-01', '2025-12-31', '2024-12-09 01:48:43', '2024-12-09 04:27:56'),
(4, 'Normal Season', 1, 27, '2024-12-10', '2024-12-31', '2024-12-10 04:16:27', '2024-12-10 04:16:27'),
(5, 'Normal Season', 1, 29, '2024-12-31', '2025-03-14', '2024-12-13 01:15:01', '2024-12-13 01:15:01'),
(6, 'Peak Season', 2, 29, '2025-03-15', '2025-09-18', '2024-12-13 01:15:01', '2024-12-13 01:15:01'),
(7, 'Off-Season', 3, 29, '2025-09-19', '2025-11-14', '2024-12-13 01:15:01', '2024-12-13 01:15:01'),
(8, 'Normal Season', 1, 34, '2025-01-06', '2025-05-15', '2025-01-06 02:51:23', '2025-01-06 02:51:23'),
(9, 'Normal Season', 1, 35, '2025-01-06', '2025-03-31', '2025-01-06 06:06:20', '2025-01-06 06:06:20'),
(10, 'Peak Season', 2, 35, '2025-04-01', '2025-05-15', '2025-01-06 06:06:20', '2025-01-06 06:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) DEFAULT NULL,
  `date` date NOT NULL,
  `total_sold` int(11) NOT NULL DEFAULT 0,
  `total_unsold` int(11) NOT NULL DEFAULT 0,
  `block_request_type` int(11) NOT NULL DEFAULT 1 COMMENT '1:Hard Block, 2: Soft Block',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `hotel_id`, `room_id`, `date`, `total_sold`, `total_unsold`, `block_request_type`, `created_at`, `updated_at`) VALUES
(1, 35, 14, '2025-01-06', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(2, 35, 14, '2025-01-08', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(3, 35, 14, '2025-01-09', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(4, 35, 14, '2025-01-11', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(5, 35, 14, '2025-01-13', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(6, 35, 14, '2025-01-15', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(7, 35, 14, '2025-01-16', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(8, 35, 14, '2025-01-18', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(9, 35, 14, '2025-01-20', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(10, 35, 14, '2025-01-22', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(11, 35, 14, '2025-01-23', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(12, 35, 14, '2025-01-25', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(13, 35, 14, '2025-01-27', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(14, 35, 14, '2025-01-29', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(15, 35, 14, '2025-01-30', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(16, 35, 14, '2025-02-01', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(17, 35, 14, '2025-02-03', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(18, 35, 14, '2025-02-04', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(19, 35, 14, '2025-02-05', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(20, 35, 14, '2025-02-06', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(21, 35, 14, '2025-02-08', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(22, 35, 14, '2025-02-10', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(23, 35, 14, '2025-02-11', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(24, 35, 14, '2025-02-12', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(25, 35, 14, '2025-02-13', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(26, 35, 14, '2025-02-15', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(27, 35, 14, '2025-02-17', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(28, 35, 14, '2025-02-18', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(29, 35, 14, '2025-02-19', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(30, 35, 14, '2025-02-20', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(31, 35, 14, '2025-02-22', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(32, 35, 14, '2025-02-24', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(33, 35, 14, '2025-02-25', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(34, 35, 14, '2025-02-26', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(35, 35, 14, '2025-02-27', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(36, 35, 14, '2025-03-01', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(37, 35, 14, '2025-03-03', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(38, 35, 14, '2025-03-04', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(39, 35, 14, '2025-03-05', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(40, 35, 14, '2025-03-06', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(41, 35, 14, '2025-03-08', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(42, 35, 14, '2025-03-10', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(43, 35, 14, '2025-03-11', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(44, 35, 14, '2025-03-12', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(45, 35, 14, '2025-03-13', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(46, 35, 14, '2025-03-15', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(47, 35, 14, '2025-03-18', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(48, 35, 14, '2025-03-19', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(49, 35, 14, '2025-03-20', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(50, 35, 14, '2025-03-22', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(51, 35, 14, '2025-03-24', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(52, 35, 14, '2025-03-25', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(53, 35, 14, '2025-03-26', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(54, 35, 14, '2025-03-27', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(55, 35, 14, '2025-03-29', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(56, 35, 14, '2025-03-31', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(57, 35, 14, '2025-04-01', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(58, 35, 14, '2025-04-02', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(59, 35, 14, '2025-04-03', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(60, 35, 14, '2025-04-05', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(61, 35, 14, '2025-04-07', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(62, 35, 14, '2025-04-08', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(63, 35, 14, '2025-04-09', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(64, 35, 14, '2025-04-10', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(65, 35, 14, '2025-04-12', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(66, 35, 14, '2025-04-14', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(67, 35, 14, '2025-04-15', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(68, 35, 14, '2025-04-16', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(69, 35, 14, '2025-04-17', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(70, 35, 14, '2025-04-19', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(71, 35, 14, '2025-04-21', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(72, 35, 14, '2025-04-22', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(73, 35, 14, '2025-04-23', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(74, 35, 14, '2025-04-24', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(75, 35, 14, '2025-04-26', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(76, 35, 14, '2025-04-28', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(77, 35, 14, '2025-04-29', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(78, 35, 14, '2025-04-30', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(79, 35, 14, '2025-05-01', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(80, 35, 14, '2025-05-03', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(81, 35, 14, '2025-05-05', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(82, 35, 14, '2025-05-06', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(83, 35, 14, '2025-05-07', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(84, 35, 14, '2025-05-08', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(85, 35, 14, '2025-05-10', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(86, 35, 14, '2025-05-12', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(87, 35, 14, '2025-05-13', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(88, 35, 14, '2025-05-14', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(89, 35, 14, '2025-05-15', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(90, 35, 14, '2025-05-17', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(91, 35, 14, '2025-05-19', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(92, 35, 14, '2025-05-20', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(93, 35, 14, '2025-05-21', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(94, 35, 14, '2025-05-22', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(95, 35, 14, '2025-05-24', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(96, 35, 14, '2025-05-26', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(97, 35, 14, '2025-05-27', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(98, 35, 14, '2025-05-28', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(99, 35, 14, '2025-05-29', 0, 5, 1, '2025-01-06 06:17:23', '2025-01-06 06:17:23'),
(100, 35, 14, '2025-01-12', 0, 7, 2, '2025-01-06 06:18:43', '2025-01-06 06:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary_banners`
--

CREATE TABLE `itinerary_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `division_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1:Active, 0:Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itinerary_banners`
--

INSERT INTO `itinerary_banners` (`id`, `title`, `division_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'csdsds', 2, 'storage/itinerary_banners/srivari-mettu-9774-20250219143628.jpg', 1, '2025-02-19 09:06:28', '2025-02-19 09:06:28'),
(7, 'dadsds', 2, 'storage/itinerary_banners/srivari-mettu-4038-20250219143845.jpg', 1, '2025-02-19 09:08:45', '2025-02-19 09:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_mobile` varchar(255) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `customer_whatsapp` varchar(255) DEFAULT NULL,
  `travel_location` varchar(255) NOT NULL,
  `travel_duration` varchar(255) NOT NULL,
  `travel_date` date NOT NULL,
  `number_of_adults` int(11) NOT NULL,
  `number_of_children` int(11) NOT NULL DEFAULT 0,
  `number_of_travellor` int(11) NOT NULL,
  `lead_type` varchar(255) NOT NULL,
  `lead_source` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `unique_id`, `customer_name`, `customer_email`, `customer_mobile`, `country_code`, `customer_whatsapp`, `travel_location`, `travel_duration`, `travel_date`, `number_of_adults`, `number_of_children`, `number_of_travellor`, `lead_type`, `lead_source`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LTD20240000000001', 'Amit Saha', 'amit.s@techmantra.co', '9876541235', '91', '8617207525', '2', '2', '2024-12-12', 5, 5, 10, 'B2B', 'Agent', 1, '1', '2024-12-10 01:25:34', '2024-12-10 01:25:34'),
(2, 'LTD20250000000001', 'Rajib Ali Khan', 'rajibalikhan299@gmail.com', '9876541235', '91', '8617207525', '5', '3', '2025-01-09', 1, 1, 2, 'B2B', 'Agent', 1, '1', '2025-01-06 02:45:00', '2025-01-06 02:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `leads_status`
--

CREATE TABLE `leads_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads_status`
--

INSERT INTO `leads_status` (`id`, `status`, `position`, `name`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 'Unattended', '2024-12-10 07:07:06', '2024-12-10 07:07:06'),
(2, '1', 2, 'Follow-up', '2024-12-10 07:07:06', '2024-12-10 07:07:06'),
(3, '1', 3, 'Potential Lead', '2024-12-10 07:07:06', '2024-12-10 07:07:06'),
(4, '1', 4, 'Confirmed Lead', '2024-12-10 07:07:06', '2024-12-10 07:07:06'),
(5, '1', 5, 'Package Executed', '2024-12-10 07:07:06', '2024-12-10 07:07:06'),
(6, '1', 6, 'Package Confirmed', '2024-12-10 07:07:06', '2024-12-10 07:07:06'),
(7, '1', 7, 'Cancelled', '2024-12-10 07:07:06', '2024-12-10 07:07:06'),
(8, '1', 8, 'Hold', '2024-12-10 07:07:06', '2024-12-10 07:07:06'),
(9, '1', 9, 'Close', '2024-12-10 07:07:06', '2024-12-10 07:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_29_133157_create_cities_table', 1),
(5, '2024_10_29_133740_create_states_table', 1),
(6, '2024_11_13_084603_create_seasion_plans_table', 1),
(7, '2024_11_13_111100_create_categories_table', 1),
(8, '2024_11_13_144221_create_amenities_table', 1),
(9, '2024_11_15_082900_add_positions_to_seasion_plans_table', 2),
(10, '2024_11_15_083301_add_positions_to_seasion_plans_table', 2),
(11, '2024_11_15_134927_create_hotels_table', 2),
(12, '2024_11_18_065544_add_created_by_to_hotels_table', 2),
(13, '2024_11_18_081619_add_number_of_rooms_to_hotels_table', 2),
(14, '2024_11_18_135954_add_address_to_hotels_table', 2),
(15, '2024_11_19_074633_create_room_categories_table', 2),
(17, '2024_11_21_072605_create_rooms_table', 3),
(18, '2024_11_22_122450_create_hotel_price_chart_types_table', 4),
(19, '2024_11_22_123831_create_hotel_price_charts_table', 4),
(20, '2024_11_25_115008_create_test_table', 4),
(21, '2024_11_26_095425_create_hotel_images_table', 5),
(23, '2024_11_29_121805_add_order_to_seasion_plans_table', 6),
(24, '2024_12_06_101509_create_seasion_types_table', 7),
(25, '2024_12_06_101902_create_hotel_seasion_times_table', 8),
(26, '2024_12_09_095243_add_seasion_type_to_hotel_seasion_times_table', 9),
(27, '2024_12_12_122157_create_date_wise_hotel_prices_table', 10),
(28, '2024_12_13_105521_create_leads_status_table', 11),
(29, '2024_12_13_105619_create_leads_table', 11),
(30, '2024_12_13_112145_create_admins_table', 12),
(31, '2025_01_15_063204_create_cabs_table', 13),
(32, '2025_01_15_140657_create_division_wise_cabs_table', 13),
(33, '2025_01_17_125228_create_division_wise_activities_table', 13),
(34, '2025_01_17_130502_create_division_wise_activity_images_table', 13),
(35, '2025_01_24_101502_create_division_wise_sightseeings_table', 13),
(36, '2025_01_24_102505_create_division_wise_sightseeing_images_table', 13),
(37, '2025_01_28_141703_create_destination_wise_routes_table', 13),
(38, '2025_01_28_142244_create_destination_wise_route_waypoints_table', 13),
(39, '2025_01_29_122028_add_point_name_to_destination_wise_route_waypoints_table', 13),
(40, '2025_01_29_140716_add_seasion_type_id_to_destination_wise_routes_table', 13),
(41, '2025_02_05_070322_add_capacity_to_cabs_table', 13),
(42, '2025_02_05_094508_create_route_service_summaries_table', 13),
(43, '2025_02_05_100854_create_service_wise_activities_table', 13),
(44, '2025_02_05_101330_create_service_wise_sightseeings_table', 13),
(45, '2025_02_05_101657_create_service_wise_cabs_table', 13),
(47, '2025_02_18_123130_add_column_to_division_wise_activities', 14),
(49, '2025_02_19_120158_create_itinerary_banners_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_category` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `no_of_rooms` int(10) UNSIGNED NOT NULL,
  `capacity` int(10) UNSIGNED NOT NULL,
  `no_of_beds` int(10) UNSIGNED NOT NULL,
  `mattress` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ammenities` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `room_type`, `room_category`, `room_name`, `no_of_rooms`, `capacity`, `no_of_beds`, `mattress`, `ammenities`, `created_at`, `updated_at`) VALUES
(4, 27, 'AC', 'Premium Plus', 'Premium Plus - AC', 20, 20, 20, 20, 'Wi-Fi,Television,Others', '2024-11-22 07:16:25', '2024-11-26 02:23:44'),
(5, 27, 'Non-AC', 'Super-Deluxe', 'Super-Deluxe - Non-AC', 30, 30, 30, 30, 'Coffee,Tea Maker', '2024-11-22 07:16:25', '2024-11-26 02:23:44'),
(6, 27, 'AC', 'Standard', 'Standard - AC', 8, 8, 8, 8, 'Coffee,Tea Maker,Gyser', '2024-11-22 07:21:26', '2024-11-26 02:23:44'),
(8, 33, 'AC', 'Deluxe', 'Deluxe - AC', 2, 2, 2, 2, 'Coffee,Tea Maker,Television', '2024-12-09 01:48:43', '2024-12-09 04:00:35'),
(9, 29, 'AC', 'Deluxe', 'Deluxe - AC', 2, 2, 4, 4, '', '2024-12-09 04:07:42', '2024-12-13 01:15:01'),
(10, 33, 'Non-AC', 'Premium', 'Premium - Non-AC', 3, 33, 3, 3, 'Tea Maker,Gyser,Wi-Fi,Television', '2024-12-09 05:31:33', '2024-12-11 01:48:10'),
(11, 33, 'AC', 'Standard', 'Standard - AC', 3, 3, 3, 3, '', '2024-12-09 07:46:14', '2024-12-09 07:46:14'),
(12, 34, 'AC', 'Luxury', 'Luxury - AC', 5, 5, 5, 2, 'Coffee,Tea Maker,Wi-Fi', '2025-01-06 02:51:23', '2025-01-06 02:51:23'),
(13, 34, 'AC', 'Semi-Delux', 'Semi-Delux - AC', 3, 3, 3, 2, 'Wi-Fi,Television', '2025-01-06 02:51:23', '2025-01-06 03:14:38'),
(14, 35, 'AC', 'Deluxe', 'Deluxe - AC', 2, 2, 2, 2, NULL, '2025-01-06 06:06:20', '2025-01-06 06:06:20'),
(15, 35, 'Non-AC', 'Luxury', 'Luxury - Non-AC', 5, 5, 5, 5, 'Coffee,Tea Maker', '2025-01-06 06:06:20', '2025-01-06 06:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Deluxe', 1, '2024-11-19 04:42:35', '2024-11-26 01:38:09', NULL),
(2, 'Standard', 1, '2024-11-19 04:49:35', '2024-11-26 01:37:45', NULL),
(3, 'Njnddddd', 1, '2024-11-19 04:57:04', '2024-11-19 05:34:02', '2024-11-19 05:34:02'),
(4, 'Utu', 1, '2024-11-19 04:57:24', '2024-11-19 05:33:51', '2024-11-19 05:33:51'),
(5, 'Semi-Delux', 1, '2024-11-19 07:37:47', '2024-11-26 01:38:00', NULL),
(6, 'Super-Deluxe', 1, '2024-11-26 01:38:19', '2025-02-18 02:25:09', '2025-02-18 02:25:09'),
(7, 'Premium', 1, '2024-11-26 01:38:24', '2024-11-26 01:38:24', NULL),
(8, 'Premium Plus', 1, '2024-11-26 01:38:31', '2024-11-26 01:38:31', NULL),
(9, 'Luxury', 1, '2024-11-26 01:38:44', '2024-11-26 01:38:44', NULL),
(10, 'Others', 1, '2024-11-26 01:39:03', '2024-11-26 01:39:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `route_service_summaries`
--

CREATE TABLE `route_service_summaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type` enum('Route Wise','Per Day') NOT NULL,
  `route_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Foreign key referencing destination_wise_routes',
  `destination_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing states',
  `division_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Foreign key referencing cities',
  `seasion_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `route_service_summaries`
--

INSERT INTO `route_service_summaries` (`id`, `service_type`, `route_id`, `destination_id`, `division_id`, `seasion_type_id`, `created_at`, `updated_at`) VALUES
(3, 'Route Wise', 4, 2, NULL, 1, '2025-02-10 03:55:03', '2025-02-10 03:55:03'),
(7, 'Per Day', NULL, 2, NULL, 1, '2025-02-10 05:25:53', '2025-02-10 05:25:53'),
(9, 'Per Day', NULL, 2, NULL, 2, '2025-02-10 05:29:53', '2025-02-10 05:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `seasion_plans`
--

CREATE TABLE `seasion_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `plan_item` text NOT NULL,
  `position` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1: Active, 0: Inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `positions` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasion_plans`
--

INSERT INTO `seasion_plans` (`id`, `title`, `plan_item`, `position`, `status`, `deleted_at`, `created_at`, `updated_at`, `positions`, `order`) VALUES
(1, 'Normal Season', 'ACCOMODATION, MAP, APAI, CP', 1, 1, NULL, '2024-11-18 04:12:04', '2025-01-06 06:28:43', NULL, NULL),
(2, 'Peak Season', 'ACCOMODATION, CP, MAP, APAI', 2, 1, NULL, '2024-11-18 06:03:31', '2025-01-06 06:28:43', NULL, NULL),
(3, 'Off-Season', 'ACCOMODATION, CP, MAP, APAI', 3, 1, NULL, '2024-11-22 05:09:53', '2024-12-05 08:37:45', NULL, NULL),
(4, 'CWB (Addon)', 'ACCOMODATION, CP, MAP, APAI', 5, 1, NULL, '2024-11-26 01:44:15', '2025-01-06 06:28:47', NULL, NULL),
(5, 'CWNB (Addon)', 'ACCOMODATION, CP, MAP, APAI', 6, 1, '2025-02-18 02:20:11', '2024-11-26 01:44:45', '2025-02-18 02:20:11', NULL, NULL),
(6, 'Meal Plan', 'BREAKFAST, LUNCH, DINNER', 4, 1, NULL, '2024-11-26 01:45:04', '2025-01-06 06:28:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seasion_types`
--

CREATE TABLE `seasion_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasion_types`
--

INSERT INTO `seasion_types` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Normal Season', 1, NULL, NULL),
(2, 'Peak Season', 1, NULL, NULL),
(3, 'Off-Season', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_wise_activities`
--

CREATE TABLE `service_wise_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_summary_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing route_service_summaries',
  `activity_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing division_wise_activities',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_wise_activities`
--

INSERT INTO `service_wise_activities` (`id`, `service_summary_id`, `activity_id`, `created_at`, `updated_at`) VALUES
(2, 3, 1, '2025-02-10 03:55:03', '2025-02-10 03:55:03'),
(5, 7, 1, '2025-02-10 05:25:53', '2025-02-10 05:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `service_wise_cabs`
--

CREATE TABLE `service_wise_cabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_summary_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing route_service_summaries',
  `division_wise_cab_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing division_wise_cabs',
  `cab_price` decimal(8,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_wise_cabs`
--

INSERT INTO `service_wise_cabs` (`id`, `service_summary_id`, `division_wise_cab_id`, `cab_price`, `created_at`, `updated_at`) VALUES
(8, 3, 1, 5, '2025-02-10 03:55:03', '2025-02-10 04:44:35'),
(10, 3, 3, 2000, '2025-02-10 04:50:48', '2025-02-10 04:50:59'),
(18, 7, 3, NULL, '2025-02-10 05:25:53', '2025-02-10 05:25:53'),
(19, 7, 2, NULL, '2025-02-10 05:25:53', '2025-02-10 05:25:53'),
(20, 7, 1, NULL, '2025-02-10 05:25:53', '2025-02-10 05:25:53'),
(25, 9, 11, NULL, '2025-02-10 05:29:53', '2025-02-10 05:29:53'),
(26, 9, 10, NULL, '2025-02-10 05:29:53', '2025-02-10 05:29:53'),
(27, 9, 9, NULL, '2025-02-10 05:29:53', '2025-02-10 05:29:53'),
(29, 3, 2, 256, '2025-02-10 08:43:40', '2025-02-10 08:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `service_wise_sightseeings`
--

CREATE TABLE `service_wise_sightseeings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_summary_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing route_service_summaries',
  `sightseeing_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Foreign key referencing division_wise_sightseeings',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_wise_sightseeings`
--

INSERT INTO `service_wise_sightseeings` (`id`, `service_summary_id`, `sightseeing_id`, `created_at`, `updated_at`) VALUES
(6, 3, 3, '2025-02-10 08:23:43', '2025-02-10 08:23:43'),
(7, 3, 4, '2025-02-10 08:23:43', '2025-02-10 08:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Vp9ruQ13IAVP7Me5NLg4scIB4zUgctnZOaPx0kcm', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiemwwazVVY1NVYmZMMDdxeXZlRm1NbnNtenNVZ0Z1RTJhQlBWWW1lMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjAyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbGl2ZXdpcmUvcHJldmlldy1maWxlL2lFcVp6SlZFVnp0WVdGcGpjWEw5QWY4ZUFhSEFDdC1tZXRhWkc5M2JteHZZV1FnS0RFcExtcHdadz09LS5qcGc/ZXhwaXJlcz0xNzM5OTgwNzk5JnNpZ25hdHVyZT1jNDNhMWY1ZDUwZjRmMGRiZGRkMTY5MzdkMThjZDkyODdiNDk0YTFiNTQ2MzdlN2RlZDNhMzUyNTNmMjMxYjk5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1739975954);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1: Active, 0: Inactive	',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_code_id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Andhra Pradesh', 1, NULL, '2024-11-18 05:17:08', '2025-01-06 03:20:20'),
(2, NULL, 'West Bangal', 1, NULL, '2024-11-20 02:00:43', '2024-11-20 02:00:43'),
(3, NULL, 'Himachal pradesh', 1, NULL, '2024-12-11 01:40:32', '2024-12-11 01:40:47'),
(4, NULL, 'Sikkim', 1, '2025-02-18 07:55:50', '2024-12-11 01:41:05', '2025-02-18 02:25:50'),
(5, NULL, 'Goa', 1, NULL, '2024-12-11 01:41:14', '2024-12-11 01:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `ammenities`
--
ALTER TABLE `ammenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabs`
--
ALTER TABLE `cabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_name_unique` (`name`);

--
-- Indexes for table `country_codes`
--
ALTER TABLE `country_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_wise_hotel_prices`
--
ALTER TABLE `date_wise_hotel_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date_wise_hotel_prices_hotel_id_foreign` (`hotel_id`),
  ADD KEY `date_wise_hotel_prices_room_id_foreign` (`room_id`);

--
-- Indexes for table `destination_wise_routes`
--
ALTER TABLE `destination_wise_routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_wise_routes_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `destination_wise_route_waypoints`
--
ALTER TABLE `destination_wise_route_waypoints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_wise_route_waypoints_route_id_foreign` (`route_id`),
  ADD KEY `destination_wise_route_waypoints_division_id_foreign` (`division_id`);

--
-- Indexes for table `division_wise_activities`
--
ALTER TABLE `division_wise_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division_wise_activity_images`
--
ALTER TABLE `division_wise_activity_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_wise_activity_images_division_wise_activity_id_foreign` (`division_wise_activity_id`);

--
-- Indexes for table `division_wise_cabs`
--
ALTER TABLE `division_wise_cabs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_wise_cabs_division_id_foreign` (`division_id`),
  ADD KEY `division_wise_cabs_seasion_type_id_foreign` (`seasion_type_id`),
  ADD KEY `division_wise_cabs_cab_id_foreign` (`cab_id`);

--
-- Indexes for table `division_wise_sightseeings`
--
ALTER TABLE `division_wise_sightseeings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division_wise_sightseeing_images`
--
ALTER TABLE `division_wise_sightseeing_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_wise_sightseeing_images_sightseeing_id_foreign` (`sightseeing_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotels_created_by_foreign` (`created_by`) USING BTREE;

--
-- Indexes for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_images_hotel_id_foreign` (`hotel_id`);

--
-- Indexes for table `hotel_price_charts`
--
ALTER TABLE `hotel_price_charts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_price_charts_price_chart_type_id_foreign` (`price_chart_type_id`),
  ADD KEY `hotel_price_charts_hotel_id_foreign` (`hotel_id`),
  ADD KEY `hotel_price_charts_room_id_foreign` (`room_id`);

--
-- Indexes for table `hotel_price_chart_types`
--
ALTER TABLE `hotel_price_chart_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_price_chart_types_hotel_id_foreign` (`hotel_id`),
  ADD KEY `hotel_price_chart_types_room_id_foreign` (`room_id`);

--
-- Indexes for table `hotel_seasion_times`
--
ALTER TABLE `hotel_seasion_times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_seasion_times_seasion_type_id_foreign` (`seasion_type_id`),
  ADD KEY `hotel_seasion_times_hotel_id_foreign` (`hotel_id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itinerary_banners`
--
ALTER TABLE `itinerary_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itinerary_banners_division_id_foreign` (`division_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leads_unique_id_unique` (`unique_id`),
  ADD KEY `leads_user_id_foreign` (`user_id`);

--
-- Indexes for table `leads_status`
--
ALTER TABLE `leads_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_hotel_id_foreign` (`hotel_id`);

--
-- Indexes for table `room_categories`
--
ALTER TABLE `room_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_service_summaries`
--
ALTER TABLE `route_service_summaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route_service_summaries_route_id_foreign` (`route_id`),
  ADD KEY `route_service_summaries_destination_id_foreign` (`destination_id`),
  ADD KEY `route_service_summaries_division_id_foreign` (`division_id`),
  ADD KEY `route_service_summaries_seasion_type_id_foreign` (`seasion_type_id`);

--
-- Indexes for table `seasion_plans`
--
ALTER TABLE `seasion_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seasion_types`
--
ALTER TABLE `seasion_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_wise_activities`
--
ALTER TABLE `service_wise_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_wise_activities_service_summary_id_foreign` (`service_summary_id`),
  ADD KEY `service_wise_activities_activity_id_foreign` (`activity_id`);

--
-- Indexes for table `service_wise_cabs`
--
ALTER TABLE `service_wise_cabs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_wise_cabs_service_summary_id_foreign` (`service_summary_id`),
  ADD KEY `service_wise_cabs_division_wise_cab_id_foreign` (`division_wise_cab_id`);

--
-- Indexes for table `service_wise_sightseeings`
--
ALTER TABLE `service_wise_sightseeings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_wise_sightseeings_service_summary_id_foreign` (`service_summary_id`),
  ADD KEY `service_wise_sightseeings_sightseeing_id_foreign` (`sightseeing_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ammenities`
--
ALTER TABLE `ammenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cabs`
--
ALTER TABLE `cabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `country_codes`
--
ALTER TABLE `country_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `date_wise_hotel_prices`
--
ALTER TABLE `date_wise_hotel_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `destination_wise_routes`
--
ALTER TABLE `destination_wise_routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination_wise_route_waypoints`
--
ALTER TABLE `destination_wise_route_waypoints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `division_wise_activities`
--
ALTER TABLE `division_wise_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `division_wise_activity_images`
--
ALTER TABLE `division_wise_activity_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `division_wise_cabs`
--
ALTER TABLE `division_wise_cabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `division_wise_sightseeings`
--
ALTER TABLE `division_wise_sightseeings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `division_wise_sightseeing_images`
--
ALTER TABLE `division_wise_sightseeing_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hotel_images`
--
ALTER TABLE `hotel_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `hotel_price_charts`
--
ALTER TABLE `hotel_price_charts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `hotel_price_chart_types`
--
ALTER TABLE `hotel_price_chart_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel_seasion_times`
--
ALTER TABLE `hotel_seasion_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `itinerary_banners`
--
ALTER TABLE `itinerary_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leads_status`
--
ALTER TABLE `leads_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `room_categories`
--
ALTER TABLE `room_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `route_service_summaries`
--
ALTER TABLE `route_service_summaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seasion_plans`
--
ALTER TABLE `seasion_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seasion_types`
--
ALTER TABLE `seasion_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_wise_activities`
--
ALTER TABLE `service_wise_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_wise_cabs`
--
ALTER TABLE `service_wise_cabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `service_wise_sightseeings`
--
ALTER TABLE `service_wise_sightseeings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `date_wise_hotel_prices`
--
ALTER TABLE `date_wise_hotel_prices`
  ADD CONSTRAINT `date_wise_hotel_prices_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `date_wise_hotel_prices_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destination_wise_routes`
--
ALTER TABLE `destination_wise_routes`
  ADD CONSTRAINT `destination_wise_routes_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destination_wise_route_waypoints`
--
ALTER TABLE `destination_wise_route_waypoints`
  ADD CONSTRAINT `destination_wise_route_waypoints_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `destination_wise_route_waypoints_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `destination_wise_routes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `division_wise_activity_images`
--
ALTER TABLE `division_wise_activity_images`
  ADD CONSTRAINT `division_wise_activity_images_division_wise_activity_id_foreign` FOREIGN KEY (`division_wise_activity_id`) REFERENCES `division_wise_activities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `division_wise_cabs`
--
ALTER TABLE `division_wise_cabs`
  ADD CONSTRAINT `division_wise_cabs_cab_id_foreign` FOREIGN KEY (`cab_id`) REFERENCES `cabs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `division_wise_cabs_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `division_wise_cabs_seasion_type_id_foreign` FOREIGN KEY (`seasion_type_id`) REFERENCES `seasion_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `division_wise_sightseeing_images`
--
ALTER TABLE `division_wise_sightseeing_images`
  ADD CONSTRAINT `division_wise_sightseeing_images_sightseeing_id_foreign` FOREIGN KEY (`sightseeing_id`) REFERENCES `division_wise_sightseeings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `admins` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD CONSTRAINT `hotel_images_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hotel_price_charts`
--
ALTER TABLE `hotel_price_charts`
  ADD CONSTRAINT `hotel_price_charts_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hotel_price_charts_price_chart_type_id_foreign` FOREIGN KEY (`price_chart_type_id`) REFERENCES `hotel_price_chart_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hotel_price_charts_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hotel_price_chart_types`
--
ALTER TABLE `hotel_price_chart_types`
  ADD CONSTRAINT `hotel_price_chart_types_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hotel_price_chart_types_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hotel_seasion_times`
--
ALTER TABLE `hotel_seasion_times`
  ADD CONSTRAINT `hotel_seasion_times_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hotel_seasion_times_seasion_type_id_foreign` FOREIGN KEY (`seasion_type_id`) REFERENCES `seasion_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `itinerary_banners`
--
ALTER TABLE `itinerary_banners`
  ADD CONSTRAINT `itinerary_banners_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `route_service_summaries`
--
ALTER TABLE `route_service_summaries`
  ADD CONSTRAINT `route_service_summaries_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `route_service_summaries_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `route_service_summaries_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `destination_wise_routes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `route_service_summaries_seasion_type_id_foreign` FOREIGN KEY (`seasion_type_id`) REFERENCES `seasion_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_wise_activities`
--
ALTER TABLE `service_wise_activities`
  ADD CONSTRAINT `service_wise_activities_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `division_wise_activities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_wise_activities_service_summary_id_foreign` FOREIGN KEY (`service_summary_id`) REFERENCES `route_service_summaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_wise_cabs`
--
ALTER TABLE `service_wise_cabs`
  ADD CONSTRAINT `service_wise_cabs_division_wise_cab_id_foreign` FOREIGN KEY (`division_wise_cab_id`) REFERENCES `division_wise_cabs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_wise_cabs_service_summary_id_foreign` FOREIGN KEY (`service_summary_id`) REFERENCES `route_service_summaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_wise_sightseeings`
--
ALTER TABLE `service_wise_sightseeings`
  ADD CONSTRAINT `service_wise_sightseeings_service_summary_id_foreign` FOREIGN KEY (`service_summary_id`) REFERENCES `route_service_summaries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_wise_sightseeings_sightseeing_id_foreign` FOREIGN KEY (`sightseeing_id`) REFERENCES `division_wise_sightseeings` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
