-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 06:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `owner_id` int(20) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `request_date` varchar(200) NOT NULL,
  `time_slot` varchar(200) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0,
  `rate` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `station_id`, `owner_id`, `cat_id`, `vehicle_id`, `request_date`, `time_slot`, `status`, `rate`, `created_at`, `update_at`) VALUES
(1, 15, 1, 9, 5, '2022-11-23', '12:00', 1, 0, '2022-11-20 11:28:18', '2022-11-22 05:13:45'),
(2, 15, 1, 5, 5, '2022-11-26', '08:30', 3, 4, '2022-11-20 11:30:50', '2022-11-22 07:13:51'),
(3, 15, 1, 9, 5, '2022-11-22', '07:00', 0, 0, '2022-11-21 11:11:07', '2022-11-21 13:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time_slot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `station_id`, `day`, `time_slot`) VALUES
(53, 15, 'Monday', '07:00'),
(60, 15, 'Tuesday', '07:00'),
(61, 15, 'Tuesday', '07:30'),
(63, 15, 'Thursday', '08:00'),
(64, 15, 'Thursday', '09:00'),
(65, 15, 'Thursday', '11:00'),
(66, 15, 'Thursday', '12:00'),
(67, 15, 'Friday', '07:00'),
(68, 15, 'Friday', '08:00'),
(69, 15, 'Friday', '09:00'),
(70, 15, 'Friday', '09:30'),
(71, 15, 'Friday', '12:00'),
(72, 15, 'Saturday', '07:00'),
(73, 15, 'Saturday', '07:30'),
(74, 15, 'Saturday', '08:30'),
(75, 15, 'Saturday', '09:00'),
(76, 15, 'Saturday', '09:30'),
(77, 15, 'Saturday', '12:00'),
(78, 15, 'Sunday', '07:00'),
(79, 15, 'Sunday', '08:30'),
(80, 15, 'Sunday', '09:00'),
(81, 15, 'Sunday', '08:00'),
(82, 15, 'Sunday', '11:00'),
(83, 15, 'Sunday', '11:30'),
(84, 15, 'Sunday', '07:30'),
(85, 15, 'Monday', '07:30'),
(86, 15, 'Monday', '08:00'),
(87, 15, 'Monday', '08:30'),
(88, 15, 'Monday', '09:00'),
(89, 15, 'Monday', '09:30'),
(90, 15, 'Monday', '11:00'),
(91, 15, 'Monday', '11:30'),
(92, 15, 'Monday', '12:00'),
(93, 15, 'Monday', '12:30'),
(94, 15, 'Monday', '13:00'),
(95, 15, 'Monday', '13:30'),
(96, 15, 'Monday', '14:00'),
(97, 15, 'Monday', '14:30'),
(98, 15, 'Monday', '15:00'),
(99, 15, 'Monday', '15:30'),
(100, 15, 'Monday', '16:00'),
(101, 15, 'Monday', '16:30'),
(102, 15, 'Monday', '17:00');

-- --------------------------------------------------------

--
-- Table structure for table `complete_services`
--

CREATE TABLE `complete_services` (
  `id` int(11) NOT NULL,
  `appointment_id` int(11) DEFAULT NULL,
  `request_date` varchar(255) DEFAULT NULL,
  `time_slot` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `v_id` varchar(255) DEFAULT NULL,
  `vehicle_number` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `vehicle_model` varchar(255) DEFAULT NULL,
  `average_km` varchar(255) DEFAULT NULL,
  `vehicle_brand` varchar(255) DEFAULT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `price` varchar(20) NOT NULL,
  `ad_price` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complete_services`
--

INSERT INTO `complete_services` (`id`, `appointment_id`, `request_date`, `time_slot`, `status`, `owner_name`, `email`, `contact`, `address`, `profile_image`, `v_id`, `vehicle_number`, `vehicle_type`, `province`, `fuel_type`, `capacity`, `vehicle_model`, `average_km`, `vehicle_brand`, `cat_name`, `price`, `ad_price`, `total`, `created_at`, `updated_at`) VALUES
(12, 2, '2022-11-26', '08:30', '2', 'Amal Perera', 'amal@gmail.com', '716020556', 'No 45/A Doranagoda Udugampola', 'images/vehicle_owner_profile/1668324068.png', '5', 'bgx-8080', 'car', 'EP', 'Diesel', '1200CC', 'abc model', '1200', 'abc band', 'WHEEL ALIGNMENT', '1000', '1500', '2500', '2022-11-22 04:49:09', '2022-11-22 04:49:09'),
(13, 2, '2022-11-26', '08:30', '2', 'Amal Perera', 'amal@gmail.com', '716020556', 'No 45/A Doranagoda Udugampola', 'images/vehicle_owner_profile/1668324068.png', '5', 'bgx-8080', 'car', 'EP', 'Diesel', '1200CC', 'abc model', '1200', 'abc band', 'WHEEL ALIGNMENT', '1000', '1000', '2000', '2022-11-22 05:22:37', '2022-11-22 05:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reference` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `browser` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `date`, `time`, `reference`, `name`, `ip`, `location`, `browser`, `status`, `created_at`, `updated_at`) VALUES
(0, '2022-07-16', '03:33:39', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:33:39', '2022-07-16 03:33:39'),
(0, '2022-07-16', '03:34:23', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:34:23', '2022-07-16 03:34:23'),
(0, '2022-07-16', '03:34:40', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:34:40', '2022-07-16 03:34:40'),
(0, '2022-07-16', '03:36:20', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:36:20', '2022-07-16 03:36:20'),
(0, '2022-07-16', '03:42:48', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:42:48', '2022-07-16 03:42:48'),
(0, '2022-07-16', '03:43:46', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:43:46', '2022-07-16 03:43:46'),
(0, '2022-07-16', '03:44:57', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:44:57', '2022-07-16 03:44:57'),
(0, '2022-07-16', '03:46:57', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:46:57', '2022-07-16 03:46:57'),
(0, '2022-07-16', '03:48:36', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 03:48:36', '2022-07-16 03:48:36'),
(0, '2022-07-16', '04:01:06', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:01:06', '2022-07-16 04:01:06'),
(0, '2022-07-16', '04:05:23', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:05:23', '2022-07-16 04:05:23'),
(0, '2022-07-16', '04:05:27', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:05:27', '2022-07-16 04:05:27'),
(0, '2022-07-16', '04:06:07', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:06:07', '2022-07-16 04:06:07'),
(0, '2022-07-16', '04:08:25', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:08:25', '2022-07-16 04:08:25'),
(0, '2022-07-16', '04:11:08', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:11:08', '2022-07-16 04:11:08'),
(0, '2022-07-16', '04:12:35', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:12:35', '2022-07-16 04:12:35'),
(0, '2022-07-16', '04:15:54', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:15:54', '2022-07-16 04:15:54'),
(0, '2022-07-16', '04:16:28', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:16:28', '2022-07-16 04:16:28'),
(0, '2022-07-16', '04:16:49', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:16:49', '2022-07-16 04:16:49'),
(0, '2022-07-16', '04:47:00', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:47:00', '2022-07-16 04:47:00'),
(0, '2022-07-16', '04:53:25', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:53:25', '2022-07-16 04:53:25'),
(0, '2022-07-16', '04:53:29', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 04:53:29', '2022-07-16 04:53:29'),
(0, '2022-07-16', '06:14:03', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 06:14:03', '2022-07-16 06:14:03'),
(0, '2022-07-16', '06:41:55', 3, 'Amal Perera', '::1', NULL, 'Opera', 'Success', '2022-07-16 06:41:55', '2022-07-16 06:41:55'),
(0, '2022-07-16', '06:45:22', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 06:45:22', '2022-07-16 06:45:22'),
(0, '2022-07-16', '10:32:10', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 10:32:10', '2022-07-16 10:32:10'),
(0, '2022-07-16', '10:42:44', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 10:42:44', '2022-07-16 10:42:44'),
(0, '2022-07-16', '10:55:47', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 10:55:47', '2022-07-16 10:55:47'),
(0, '2022-07-16', '10:56:12', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-16 10:56:12', '2022-07-16 10:56:12'),
(0, '2022-07-17', '01:34:29', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 01:34:29', '2022-07-17 01:34:29'),
(0, '2022-07-17', '01:54:37', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 01:54:37', '2022-07-17 01:54:37'),
(0, '2022-07-17', '03:13:31', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 03:13:31', '2022-07-17 03:13:31'),
(0, '2022-07-17', '06:29:00', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 06:29:00', '2022-07-17 06:29:00'),
(0, '2022-07-17', '06:30:12', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 06:30:12', '2022-07-17 06:30:12'),
(0, '2022-07-17', '06:30:27', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 06:30:27', '2022-07-17 06:30:27'),
(0, '2022-07-17', '06:34:57', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 06:34:57', '2022-07-17 06:34:57'),
(0, '2022-07-17', '06:36:51', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 06:36:51', '2022-07-17 06:36:51'),
(0, '2022-07-17', '06:37:00', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 06:37:00', '2022-07-17 06:37:00'),
(0, '2022-07-17', '08:46:16', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 08:46:16', '2022-07-17 08:46:16'),
(0, '2022-07-17', '23:35:21', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 23:35:21', '2022-07-17 23:35:21'),
(0, '2022-07-17', '23:35:46', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-17 23:35:46', '2022-07-17 23:35:46'),
(0, '2022-07-18', '06:20:45', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-18 06:20:45', '2022-07-18 06:20:45'),
(0, '2022-07-18', '06:44:24', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-18 06:44:24', '2022-07-18 06:44:24'),
(0, '2022-07-18', '07:42:21', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-18 07:42:21', '2022-07-18 07:42:21'),
(0, '2022-07-21', '23:10:40', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-21 23:10:40', '2022-07-21 23:10:40'),
(0, '2022-07-22', '02:04:47', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-22 02:04:47', '2022-07-22 02:04:47'),
(0, '2022-07-22', '04:23:09', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-22 04:23:09', '2022-07-22 04:23:09'),
(0, '2022-07-22', '07:25:05', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-22 07:25:05', '2022-07-22 07:25:05'),
(0, '2022-07-22', '07:26:05', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-22 07:26:05', '2022-07-22 07:26:05'),
(0, '2022-07-22', '07:26:42', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-22 07:26:42', '2022-07-22 07:26:42'),
(0, '2022-07-22', '07:27:01', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-22 07:27:01', '2022-07-22 07:27:01'),
(0, '2022-07-22', '07:27:40', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-22 07:27:40', '2022-07-22 07:27:40'),
(0, '2022-07-22', '07:28:41', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-22 07:28:41', '2022-07-22 07:28:41'),
(0, '2022-07-23', '07:03:17', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-23 07:03:17', '2022-07-23 07:03:17'),
(0, '2022-07-24', '01:54:29', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-24 01:54:29', '2022-07-24 01:54:29'),
(0, '2022-07-26', '00:29:46', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 00:29:46', '2022-07-26 00:29:46'),
(0, '2022-07-26', '02:02:09', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 02:02:09', '2022-07-26 02:02:09'),
(0, '2022-07-26', '02:03:03', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 02:03:03', '2022-07-26 02:03:03'),
(0, '2022-07-26', '02:04:49', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 02:04:49', '2022-07-26 02:04:49'),
(0, '2022-07-26', '02:05:20', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 02:05:20', '2022-07-26 02:05:20'),
(0, '2022-07-26', '02:06:58', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 02:06:58', '2022-07-26 02:06:58'),
(0, '2022-07-26', '02:07:33', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 02:07:33', '2022-07-26 02:07:33'),
(0, '2022-07-26', '02:08:40', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 02:08:40', '2022-07-26 02:08:40'),
(0, '2022-07-26', '23:05:31', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 23:05:31', '2022-07-26 23:05:31'),
(0, '2022-07-26', '23:05:41', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 23:05:41', '2022-07-26 23:05:41'),
(0, '2022-07-26', '23:08:40', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-26 23:08:40', '2022-07-26 23:08:40'),
(0, '2022-07-27', '02:55:13', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-07-27 02:55:13', '2022-07-27 02:55:13'),
(0, '2022-08-26', '23:39:25', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-08-26 23:39:25', '2022-08-26 23:39:25'),
(0, '2022-08-27', '00:57:55', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-08-27 00:57:55', '2022-08-27 00:57:55'),
(0, '2022-11-04', '07:21:56', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-04 07:21:56', '2022-11-04 07:21:56'),
(0, '2022-11-09', '21:13:47', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-09 21:13:47', '2022-11-09 21:13:47'),
(0, '2022-11-12', '23:33:03', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-12 23:33:03', '2022-11-12 23:33:03'),
(0, '2022-11-16', '10:28:30', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-16 10:28:30', '2022-11-16 10:28:30'),
(0, '2022-11-17', '09:29:37', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-17 09:29:37', '2022-11-17 09:29:37'),
(0, '2022-11-18', '06:43:01', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-18 06:43:01', '2022-11-18 06:43:01'),
(0, '2022-11-20', '02:40:09', 2, 'Dilum Thilanka', '::1', NULL, 'Chrome', 'Success', '2022-11-20 02:40:09', '2022-11-20 02:40:09'),
(0, '2022-11-22', '03:00:11', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-22 03:00:11', '2022-11-22 03:00:11'),
(0, '2022-11-23', '00:44:31', 2, 'Dilum Thilanka', '::1', NULL, 'Chrome', 'Success', '2022-11-23 00:44:31', '2022-11-23 00:44:31'),
(0, '2022-11-23', '01:46:24', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-23 01:46:24', '2022-11-23 01:46:24'),
(0, '2022-11-23', '01:47:37', 3, 'Amal Perera', '::1', NULL, 'Chrome', 'Success', '2022-11-23 01:47:37', '2022-11-23 01:47:37'),
(0, '2022-11-23', '01:50:02', 2, 'Dilum Thilanka', '::1', NULL, 'Chrome', 'Success', '2022-11-23 01:50:02', '2022-11-23 01:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `station_id`, `user_id`, `rating_type`) VALUES
(1, 15, 1, 1),
(2, 15, 1, 4),
(3, 15, 1, 4),
(4, 15, 1, 2),
(5, 15, 1, 4),
(6, 15, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `cat_name`, `description`) VALUES
(5, 'WHEEL ALIGNMENT', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(9, 'AUTO TRANSMISSION FLUID (ATF)', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(10, 'BRAKE REPAIRS', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(11, 'SUSPENSION REPAIRS', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(12, 'ENGIN OVERHAULS AND RPAIRS', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(13, 'A/C REPAIRS', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(14, 'ELECTRCAL REPAIRS', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(15, 'FULL SERVICE', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(22, 'cat 2', 'des');

-- --------------------------------------------------------

--
-- Table structure for table `service_stations`
--

CREATE TABLE `service_stations` (
  `station_id` int(10) NOT NULL,
  `station_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_number` double NOT NULL,
  `email` varchar(200) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `active` int(10) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `subscription_id` int(11) NOT NULL DEFAULT 0,
  `bank_slip` varchar(100) NOT NULL DEFAULT '0',
  `activation` int(11) NOT NULL DEFAULT 0,
  `exp_date` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_stations`
--

INSERT INTO `service_stations` (`station_id`, `station_name`, `address`, `phone_number`, `email`, `password_hash`, `active`, `profile_image`, `subscription_id`, `bank_slip`, `activation`, `exp_date`, `created_at`, `updated_at`) VALUES
(15, 'Auto Service Center', 'No 145/C Doranagoda, Udugampola', 716626000, 'amal@gmail.com', '$2y$10$UztumgpZXrQQ.zbZkJIcpOhMGRVXxophB/YKHywSWKz/LPQe8djhy', 1, 'images/station_profile/1668174868.png', 1, '1668698409_51f0a849862202b85159.pdf', 2, '2022-12-23', '2022-07-23 22:15:31', '2022-11-19 21:15:41'),
(17, 'Agith Morters', 'No 145/C Doranagoda, Udugampola', 716020556, 'agith@gmail.com', '$2y$10$UztumgpZXrQQ.zbZkJIcpOhMGRVXxophB/YKHywSWKz/LPQe8djhy', 1, '', 0, '', 2, '2022-12-23', '2022-11-10 07:02:01', '2022-11-22 07:42:43'),
(18, 'Rano Mortars ', '124/A Doranagoda Udugampola', 716050556, 'rano@gmail.com', '$2y$10$QGDJK0jO0ECghWVv81uFeOxc.JPPrbIonpsa/64CbGn3mR95dsWNS', 1, 'images/station_profile/1668159476.png', 0, '', 0, '', '2022-11-09 19:34:49', '2022-11-19 21:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts`
--

CREATE TABLE `spare_parts` (
  `id` int(10) NOT NULL,
  `station_id` int(10) NOT NULL,
  `spare_id` varchar(255) NOT NULL,
  `spare_name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `capacity` double NOT NULL,
  `weight` double NOT NULL,
  `liters` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantityInStock` int(10) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spare_parts`
--

INSERT INTO `spare_parts` (`id`, `station_id`, `spare_id`, `spare_name`, `brand`, `capacity`, `weight`, `liters`, `description`, `quantityInStock`, `price`, `image`) VALUES
(1, 15, 'PT1022', 'Tire 12 12 95ss', 'DSI', 0, 100, 0, 'ss', 10, 9000, '1668777789_2cf74216fc550f39eda5.jpg'),
(2, 10, 'PT1023', 'sdd', 'sdsdsd', 0, 0, 5455, 'fggd', 4545, 45545, ''),
(3, 10, 'PT1044', 'ffgd', 'fdfdf', 0, 0, 212, '2121', 12121, 212, ''),
(4, 10, 'PT47788', 'fgg', 'gfg', 0, 25, 0, 'gdgdg', 45, 56, ''),
(5, 10, 'DF4545', '5455', 'dhdgh', 0, 0, 65, '5656', 5656, 5656, ''),
(6, 15, 'PT1022', 'Tire 12 12 954', 'DSI', 0, 100, 0, 'nof', 10, 9000, ''),
(7, 15, 'PT1022', 'Tire 12 12 95ss', 'DSI', 0, 100, 0, 'ss', 10, 9000, ''),
(8, 15, 'SD1455', 'assas', 'asas', 0, 0, 4545, 'dee', 12, 11450, '1668776283_da8d60c38dbf16df1974.png');

-- --------------------------------------------------------

--
-- Table structure for table `station_category`
--

CREATE TABLE `station_category` (
  `id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` varchar(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station_category`
--

INSERT INTO `station_category` (`id`, `station_id`, `cat_id`, `price`) VALUES
(12, 18, 5, '0'),
(13, 18, 9, '0'),
(14, 18, 10, '0'),
(21, 15, 9, '4000'),
(22, 15, 5, '500'),
(23, 15, 10, '1500');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_fee`
--

CREATE TABLE `subscription_fee` (
  `id` int(11) NOT NULL,
  `subscription_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fee` double(10,2) NOT NULL,
  `currency_code` char(5) NOT NULL,
  `duration` int(11) NOT NULL COMMENT 'Duration in months',
  `fee_description` tinytext NOT NULL,
  `status` int(11) NOT NULL COMMENT '0-inactive,1-active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription_fee`
--

INSERT INTO `subscription_fee` (`id`, `subscription_name`, `fee`, `currency_code`, `duration`, `fee_description`, `status`) VALUES
(1, 'Basic', 1000.00, 'USD', 1, 'One Month', 1),
(2, 'Standard', 4500.00, 'USD', 6, '6 Months', 1),
(3, 'Enterprice', 7500.00, 'USD', 12, 'One Year', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription_payments`
--

CREATE TABLE `subscription_payments` (
  `id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `bank_slip` varchar(200) NOT NULL,
  `payment_date` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription_payments`
--

INSERT INTO `subscription_payments` (`id`, `station_id`, `subscription_id`, `bank_slip`, `payment_date`, `status`, `created_at`) VALUES
(1, 1, 1, 'jkk', 'hkhk', 1, '2022-11-17 12:45:02'),
(2, 15, 1, 'ss', '2022-11-18', 0, '2022-11-17 12:51:26'),
(3, 15, 1, 'ss', '2022-11-16', 0, '2022-11-17 12:52:28'),
(4, 15, 1, 'paymentvoucher.pdf', '2022-11-18', 0, '2022-11-17 13:04:15'),
(5, 15, 1, 'paymentvoucher.pdf', '2022-11-18', 0, '2022-11-17 13:05:02'),
(6, 15, 1, 'l', '2022-11-25', 0, '2022-11-17 14:47:47'),
(7, 15, 1, 'l', '2022-11-25', 0, '2022-11-17 14:48:15'),
(8, 15, 1, '1668696635_b4bf0a637bbc1e7b6348.pdf', '2022-11-24', 0, '2022-11-17 14:50:35'),
(9, 15, 1, '1668698131_3007ee2d748b3bfb0b7a.pdf', '2022-11-18', 0, '2022-11-17 15:15:31'),
(10, 15, 1, '1668698245_e5bef2d7eb56804883da.pdf', '2022-11-25', 0, '2022-11-17 15:17:25'),
(11, 15, 1, '1668698303_7b70190e9107d3feabe7.pdf', '2022-11-17', 0, '2022-11-17 15:18:23'),
(12, 15, 1, '1668698409_51f0a849862202b85159.pdf', '2022-11-30', 0, '2022-11-17 15:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `id` int(11) NOT NULL,
  `time_slot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `time_slot`) VALUES
(1, '07:00'),
(2, '07:30'),
(3, '08:00'),
(4, '08:30'),
(5, '09:00'),
(6, '09:30'),
(7, '11:00'),
(8, '11:30'),
(9, '12:00'),
(10, '12:30'),
(11, '13:00'),
(12, '13:30'),
(13, '14:00'),
(14, '14:30'),
(15, '15:00'),
(16, '15:30'),
(17, '16:00'),
(18, '16:30'),
(19, '17:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `new_email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_hash` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `activate_hash` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_hash` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_expires` bigint(20) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `new_email`, `password_hash`, `name`, `firstname`, `lastname`, `user_role`, `activate_hash`, `reset_hash`, `reset_expires`, `active`, `created_at`, `updated_at`) VALUES
(2, 'dilum@gmail.com', NULL, '$2y$10$Ft7b2W49PZqxW4B8CxFlu.ecqONnJEdNtO4EQb3liTI35pX6Uhok.', 'Dilum Thilanka', 'dilum', 'Thilanka', '1', 'ITcmi72Rb5SzkWoUKLXA8xOYe4Z3thaM', NULL, NULL, 1, '2022-05-07 00:54:43', '2022-07-26 23:08:55'),
(3, 'amal@gmail.com', NULL, '$2y$10$S2GmjlBvyylmXusv3T/w1eSqkPszg0yZw0WHdIDrnbp5PLkEVpfFW', 'Amal Perera', 'Amal', 'Perera', '', 'eogmCnJq2bR4Ed9afkBOFu70v51wzZhN', NULL, NULL, 1, '2022-05-22 23:29:24', '2022-07-26 23:08:59'),
(4, 'namal@gmail.com', NULL, '$2y$10$NHwgrnrRUvmyQARZa9qSkevgHZo166KeMPKxngKpzaT1NEwGJdobi', 'Namal', 'Namal', 'Udugama', '', 'vjuSLOEdnK1NshG6fT2R3oWlJ54emI7i', NULL, NULL, 0, '2022-05-22 23:30:42', '2022-07-17 03:39:16'),
(7, 'dayan@gmail.com', NULL, '$2y$10$4BFy5BJBm2cEDBwbNgGSuuiSliuHa1cj9InJPPh5PcXKNO8ckyV2K', 'Dayan', 'Dayan', 'Perera', '0', 'PTDC5XMukip96Ea2Lmfwd4cgYvrFWVnj', NULL, NULL, 0, '2022-06-07 02:46:26', '2022-07-16 07:58:01'),
(9, 'nilu@gmail.com', NULL, '$2y$10$a1JOZZvs6ts93x3wbwcnE.8lYHL8VzY3NlHOIvbaDWjb1Y73vrSQy', 'Nilu', 'Niluka', 'Liyanage', '1', 'FOfKiX0baGt5Mdu6U9ejPnNsxSLJzoCh', NULL, NULL, 1, '2022-07-16 11:08:11', '2022-07-16 11:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(10) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `vehicle_model` varchar(200) NOT NULL,
  `average_km` int(11) NOT NULL,
  `vehicle_brand` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `owner_id`, `vehicle_number`, `vehicle_type`, `province`, `fuel_type`, `capacity`, `vehicle_model`, `average_km`, `vehicle_brand`, `created_at`, `updated_at`) VALUES
(1, 2, 'CAH455', '', 'WP', '', '', 'dsd', 5, 'sdsd', '2022-07-24 21:46:51', '2022-11-22 14:16:51'),
(2, 1, 'CAD-1235', 'car', 'WP', 'Petrol', '1300CC', 'Aqua ', 300, 'Toyota', '2022-07-24 23:54:37', '2022-11-22 15:08:47'),
(3, 2, 'BGS8092', 'car', 'WP', 'Diesel', '100', 'gfgfg', 145, 'fdf', '2022-07-25 02:58:24', '2022-07-26 04:02:06'),
(4, 2, 'YA5454', 'car', 'EP', 'Electric', '100WATTS', '1212', 100, '2122', '2022-07-25 03:00:08', '2022-07-26 04:02:03'),
(5, 1, 'bgx-8080', 'car', 'EP', 'Diesel', '1200CC', 'abc model', 1200, 'abc band', '2022-11-05 22:18:56', '2022-11-05 22:18:56'),
(6, 1, 'BGX-6025', 'Bick', 'EP', 'Petrol', '100CC', 'asa', 5000, 'abs', '2022-11-12 19:52:34', '2022-11-12 19:52:34'),
(7, 1, 'bgx-7845', 'car', 'NC', 'Petrol', '4545CC', 'sdsdsdsd', 25, 'dsdsd', '2022-11-16 04:38:19', '2022-11-16 04:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_owners`
--

CREATE TABLE `vehicle_owners` (
  `id` int(10) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` double NOT NULL,
  `email` varchar(200) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `status` int(5) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_owners`
--

INSERT INTO `vehicle_owners` (`id`, `owner_name`, `address`, `contact`, `email`, `password_hash`, `nic`, `status`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 'Amal Perera', 'No 45/A Doranagoda Udugampola', 716020556, 'amal2@gmail.com', '$2y$10$CxfLBfoy6cbLzGP6Jgt41eiSwPjMGG.HuMLtv0YhQUSWtuyiDSX4a', '950830425V', 1, 'images/vehicle_owner_profile/1668324068.png', '2022-07-24 20:15:42', '2022-11-22 19:58:21'),
(6, 'Rehan Perera', 'sdsdsdsdsd', 716020556, 'rehan@gmail.com', '$2y$10$tOXGj82e5ZG2/eMCZ4l69umLvAHFgbV.ZBw.hOtCCXnbz09Qy7Gyi', '950830425V', 0, '', '2022-11-22 20:19:42', '2022-11-22 20:19:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complete_services`
--
ALTER TABLE `complete_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_stations`
--
ALTER TABLE `service_stations`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `spare_parts`
--
ALTER TABLE `spare_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station_category`
--
ALTER TABLE `station_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_fee`
--
ALTER TABLE `subscription_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_payments`
--
ALTER TABLE `subscription_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_owners`
--
ALTER TABLE `vehicle_owners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `complete_services`
--
ALTER TABLE `complete_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `service_stations`
--
ALTER TABLE `service_stations`
  MODIFY `station_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `spare_parts`
--
ALTER TABLE `spare_parts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `station_category`
--
ALTER TABLE `station_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subscription_fee`
--
ALTER TABLE `subscription_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription_payments`
--
ALTER TABLE `subscription_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_owners`
--
ALTER TABLE `vehicle_owners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
