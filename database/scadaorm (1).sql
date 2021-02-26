-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 11:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scadaorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `asset`, `created_at`, `updated_at`) VALUES
(1, 'Agartala', NULL, NULL),
(2, 'Ahmedabad', NULL, NULL),
(3, 'Ankleshwar', NULL, NULL),
(4, 'Assam', NULL, NULL),
(5, 'B&S', NULL, NULL),
(6, 'Cambay', NULL, NULL),
(7, 'Dehradun', NULL, NULL),
(8, 'Delhi', NULL, NULL),
(9, 'Frontier basin', NULL, NULL),
(10, 'Hazira', NULL, NULL),
(11, 'Jodhpur', NULL, NULL),
(12, 'Jorhat', NULL, NULL),
(13, 'Kakinada', NULL, NULL),
(14, 'Karaikal', NULL, NULL),
(15, 'MBA basin', NULL, NULL),
(16, 'MH', NULL, NULL),
(17, 'Mehsana', NULL, NULL),
(18, 'N&H', NULL, NULL),
(19, 'Rajahmundry', NULL, NULL),
(20, 'Silchar', NULL, NULL),
(21, 'Uran & Trombay', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_25_063310_create_assets_table', 1),
(5, '2021_01_25_063512_create_sub_assets_table', 1),
(6, '2021_01_25_073501_create_scada_productions_table', 1),
(7, '2021_01_27_054244_create_scada_drillings_table', 1),
(8, '2021_02_05_051823_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-02-12 04:15:57', '2021-02-12 04:15:57'),
(2, 'role-create', 'web', '2021-02-12 04:15:57', '2021-02-12 04:15:57'),
(3, 'role-edit', 'web', '2021-02-12 04:15:57', '2021-02-12 04:15:57'),
(4, 'role-delete', 'web', '2021-02-12 04:15:57', '2021-02-12 04:15:57'),
(5, 'production-list', 'web', '2021-02-12 04:15:57', '2021-02-15 00:03:20'),
(6, 'production-create', 'web', '2021-02-12 04:15:58', '2021-02-15 00:03:33'),
(7, 'production-edit', 'web', '2021-02-12 04:15:58', '2021-02-15 00:03:46'),
(8, 'production-delete', 'web', '2021-02-12 04:15:58', '2021-02-15 00:04:00'),
(12, 'drilling-list', 'web', '2021-02-15 00:04:27', '2021-02-15 00:05:04'),
(13, 'drilling-create', 'web', '2021-02-15 00:05:13', '2021-02-15 00:05:13'),
(14, 'drilling-edit', 'web', '2021-02-15 00:05:35', '2021-02-15 00:05:35'),
(15, 'drilling-delete', 'web', '2021-02-19 06:24:41', '2021-02-19 06:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-02-12 04:15:58', '2021-02-12 04:15:58'),
(2, 'SCADA', 'web', '2021-02-15 00:22:01', '2021-02-15 00:22:01'),
(3, 'Instrumentation', 'web', '2021-02-19 06:25:59', '2021-02-19 06:25:59'),
(4, 'Communication', 'web', '2021-02-19 06:27:53', '2021-02-19 06:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 3),
(5, 4),
(6, 1),
(6, 3),
(6, 4),
(7, 1),
(7, 3),
(7, 4),
(8, 1),
(8, 3),
(8, 4),
(12, 3),
(12, 4),
(13, 3),
(13, 4),
(14, 3),
(14, 4),
(15, 3),
(15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `scada_drillings`
--

CREATE TABLE `scada_drillings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asset` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subAsset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DSA_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DSA_STATUS` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `DSB_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DSB_STATUS` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `WITSML_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WITSML_STATUS` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `MDTOTCO_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MDTOTCO_STATUS` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `REMARKS3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `REPLICATION_STATUS` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `REMARKS1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BWA_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BWA_STATUS` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `VSAT_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VSAT_STATUS` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `GATEWAY_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GATEWAY_STATUS` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `REMARKS2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scada_drillings`
--

INSERT INTO `scada_drillings` (`id`, `asset`, `subAsset`, `DSA_IP`, `DSA_STATUS`, `DSB_IP`, `DSB_STATUS`, `WITSML_IP`, `WITSML_STATUS`, `MDTOTCO_IP`, `MDTOTCO_STATUS`, `REMARKS3`, `REPLICATION_STATUS`, `REMARKS1`, `BWA_IP`, `BWA_STATUS`, `VSAT_IP`, `VSAT_STATUS`, `GATEWAY_IP`, `GATEWAY_STATUS`, `REMARKS2`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Asset', 'IPS-700-M4', '10.207.79.14', 'OK', '10.207.79.15', 'OK', '10.207.79.17', 'OK', '10.207.79.16', 'OK', '[null]', 'OK', '[null]', '10.207.79.16', 'OK', '10.207.95.1', 'NOK', '10.207.79.16', 'OK', '[\"Raw Power Failure\"]', 95743, '2021-02-17 18:30:00', '2021-02-19 02:10:27'),
(3, 'Asset', 'IPS-700-M8', '10.207.79.14', 'NA', '10.207.79.15', 'NA', '10.207.79.17', 'OK', '10.207.79.16', 'OK', 'AIS system Installed & functional from 1130 HRS.', 'NA', '', '10.207.79.16', 'OK', '10.207.95.1', 'NA', '10.207.79.16', 'NA', '', 95743, '2021-02-17 18:30:00', '2019-06-23 18:30:00'),
(4, 'Ankleshwar', 'ANK GGS 01', '10.207.79.15', 'OK', '10.207.79.15', 'OK', '10.207.79.15', 'OK', '10.207.79.15', 'OK', NULL, 'OK', NULL, '10.207.79.15', 'OK', '10.207.79.15', 'OK', '10.207.79.15', 'OK', NULL, 0, '2021-02-19 01:20:42', '2021-02-19 01:20:42'),
(5, 'Asset', 'IPS-700-M1', '10.207.79.14', 'OK', '10.207.79.15', 'OK', '10.207.79.17', 'OK', '10.207.79.16', 'OK', '[null]', 'OK', '[null]', '10.207.79.16', 'OK', '10.207.95.1', 'NOK', '10.207.79.16', 'OK', '[\"Raw Power Failure\"]', 95743, '2021-02-17 18:30:00', '2021-02-19 02:10:27'),
(6, 'Asset', 'IPS-700-M2', '10.207.79.14', 'NA', '10.207.79.15', 'NA', '10.207.79.17', 'OK', '10.207.79.16', 'OK', 'AIS system Installed & functional from 1130 HRS.', 'NA', '', '10.207.79.16', 'OK', '10.207.95.1', 'NA', '10.207.79.16', 'NA', '', 95743, '2021-02-17 18:30:00', '2019-06-23 18:30:00'),
(7, 'Asset', 'IPS-700-M4', '10.207.79.14', 'OK', '10.207.79.15', 'OK', '10.207.79.17', 'OK', '10.207.79.16', 'OK', NULL, 'OK', NULL, '10.207.79.16', 'OK', '10.207.95.1', 'NOK', '10.207.79.16', 'OK', NULL, 131995, '2021-02-22 01:57:05', '2021-02-22 01:57:05'),
(8, 'Asset', 'IPS-700-M8', '10.207.79.14', 'NA', '10.207.79.15', 'NA', '10.207.79.17', 'OK', '10.207.79.16', 'OK', NULL, 'NA', NULL, '10.207.79.16', 'OK', '10.207.95.1', 'NA', '10.207.79.16', 'NA', NULL, 131995, '2021-02-22 01:57:06', '2021-02-22 01:57:06'),
(9, 'Asset', 'IPS-700-M1', '10.207.79.14', 'OK', '10.207.79.15', 'OK', '10.207.79.17', 'OK', '10.207.79.16', 'OK', NULL, 'OK', NULL, '10.207.79.16', 'OK', '10.207.95.1', 'NOK', '10.207.79.16', 'OK', NULL, 131995, '2021-02-22 01:57:06', '2021-02-22 01:57:06'),
(10, 'Asset', 'IPS-700-M2', '10.207.79.14', 'NA', '10.207.79.15', 'NA', '10.207.79.17', 'OK', '10.207.79.16', 'OK', NULL, 'NA', NULL, '10.207.79.16', 'OK', '10.207.95.1', 'NA', '10.207.79.16', 'NA', NULL, 131995, '2021-02-22 01:57:06', '2021-02-22 01:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `scada_productions`
--

CREATE TABLE `scada_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subAsset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_status` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_status` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `replication_status` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BWA_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BWA_status` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `VAST_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VAST_status` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `LL_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LL_status` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `switch_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `switch_status` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `others_IP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `others_status` enum('OK','NOK','NW','OFF','NA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scada_productions`
--

INSERT INTO `scada_productions` (`id`, `asset`, `subAsset`, `primary_ip`, `primary_status`, `secondary_ip`, `secondary_status`, `replication_status`, `remarks1`, `BWA_IP`, `BWA_status`, `VAST_IP`, `VAST_status`, `LL_IP`, `LL_status`, `switch_IP`, `switch_status`, `others_IP`, `others_status`, `remarks2`, `updated_by`, `created_at`, `updated_at`) VALUES
(151, 'Asset', 'ANK GGS 01', '10.207.111.143', 'OK', '10.207.111.143', 'OK', 'OK', '[null]', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '[null]', 12345, '2021-02-16 07:30:00', '2021-02-03 17:36:50'),
(152, 'Asset', 'AMD Kalol GGS 01', '10.207.112.14', 'OK', '10.207.112.14', 'OK', 'OK', '[\"Raw Power Failure\"]', '10.207.112.14', 'OK', '10.207.112.14', 'OK', '10.207.112.14', 'OK', '10.207.112.14', 'NW', '10.207.112.14', 'NOK', '[\"BWA Issue\"]', 131995, '2021-02-17 07:30:00', '2021-02-22 00:33:34'),
(153, 'Dehradun', 'E-2000-8', '10.207.91.14', 'OK', '10.207.91.14', 'OK', 'OK', '', '10.207.91.14', 'OK', '10.207.91.14', 'OK', '10.207.91.14', 'OK', '10.207.91.14', 'OK', '10.207.91.14', 'OK', '', 12345, '2021-02-17 07:30:00', '2021-02-03 17:56:51'),
(155, 'Asset1', 'CBYKTNGGS01', '10.207.111.14', 'NOK', '10.207.111.15', 'NOK', 'OK', 'OK', '10.207.111.5', 'OK', '', 'NA', '10.205.249.158', 'OK', '', 'NA', '', 'NA', '', 77705, '2021-02-17 07:30:00', NULL),
(156, 'Asset2', 'CBYPDRGGS01', '10.207.112.14', 'OK', '10.207.112.15', 'OK', 'OK', '', '10.207.112.5', 'OK', '', 'NA', '10.205.249.154', 'OK', '', 'NA', '', 'NA', '', 77705, '2021-02-17 07:30:00', NULL),
(157, 'Asset3', 'ANKGGS01', '10.207.90.14', 'OK', '10.207.90.15', 'OK', 'OK', '', '10.207.90.1', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(162, 'test', 'CBYAKJGGS01', '10.207.111.142', 'OK', '10.207.111.143', 'OK', 'OK', 'test', '10.207.111.133', 'NOK', '10.207.111.143', 'OK', '10.205.249.6', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '', 12345, '2021-02-17 07:30:00', '2021-02-03 17:29:00'),
(212, 'Asset', 'ANKGGS06', '10.207.91.78', 'OK', '10.207.91.79', 'OK', 'OK', '', '10.207.91.65', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(213, 'Asset', 'ANKMOTGGS01', '10.207.93.14', 'OK', '10.207.93.15', 'OK', 'OK', '', '10.207.93.1', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(214, 'Asset', 'ANKCTF01', '10.207.92.14', 'OK', '10.207.92.15', 'OK', 'OK', '', '10.207.92.5', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(215, 'Asset', 'ANKKIMEPS01', '10.207.93.142', 'OK', '10.207.93.143', 'OK', 'OK', '', '10.207.93.133', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(216, 'Asset', 'ANKKSMGGS01', '10.207.93.206', 'OK', '10.207.93.207', 'OK', 'OK', '', '10.207.93.193', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(217, 'Asset', 'ANKOLPGGS01', '10.207.91.142', 'OK', '10.207.91.143', 'OK', 'OK', '', '10.207.91.129', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(218, 'Asset', 'ANKGDRGGS01', '10.207.104.14', 'OK', '10.207.104.15', 'OK', 'OK', '', '10.207.104.5', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(219, 'Asset', 'ANKGDRGGS02', '10.207.105.14', 'OFF', '10.207.105.15', 'OFF', 'OFF', 'SYSTEM SHUTDOWN', '10.207.105.5', 'OFF', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(220, 'Asset', 'ANKGDRGGS03', '10.207.105.78', 'OK', '10.207.105.79', 'OK', 'OK', '', '10.207.105.69', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(221, 'Asset', 'ANKGDRGGS04', '10.207.106.14', 'OK', '10.207.106.15', 'OK', 'OK', '', '10.207.106.5', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(222, 'Asset', 'ANKGDRGGS05', '10.207.107.14', 'OK', '10.207.107.15', 'OK', 'OK', '', '10.207.107.5', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(223, 'Asset', 'ANKGDRGGS06', '10.207.107.78', 'OK', '10.207.107.79', 'OK', 'OK', '', '10.207.107.69', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(224, 'Asset', 'ANKGDRGGS07', '10.207.107.142', 'OK', '10.207.107.143', 'OK', 'OK', '', '10.207.107.133', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(225, 'Asset', 'ANKGDRGGS08', '10.207.102.206', 'OK', '10.207.102.207', 'OK', 'OK', '', '10.207.102.197', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(226, 'Asset', 'ANKGGS05', '10.207.91.14', 'OK', '10.207.91.15', 'OK', 'OK', '', '10.207.91.5', 'OK', '', '', '', '', '', '', '', '', '', 125783, '2021-02-17 07:30:00', NULL),
(263, 'Asset', 'ANK GGS 01', '10.207.111.143', 'OK', '10.207.111.143', 'OK', 'OK', '[null]', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '[null]', 12345, '2021-02-22 01:35:17', '2021-02-03 17:36:50'),
(264, 'Asset', 'ANK GGS 01', '10.207.111.143', 'OK', '10.207.111.143', 'OK', 'OK', '[null]', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '[null]', 131995, '2021-02-22 01:36:53', '2021-02-22 01:36:53'),
(265, 'Asset', 'ANK GGS 01', '10.207.111.143', 'OK', '10.207.111.143', 'OK', 'OK', NULL, '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', NULL, 131995, '2021-02-22 01:43:04', '2021-02-22 01:43:04'),
(266, 'Asset', 'ANK GGS 01', '10.207.111.143', 'OK', '10.207.111.143', 'OK', 'OK', NULL, '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', '10.207.111.143', 'OK', NULL, 131995, '2021-02-22 02:00:18', '2021-02-22 02:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_assets`
--

CREATE TABLE `sub_assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asset_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_assets`
--

INSERT INTO `sub_assets` (`id`, `asset_id`, `services_id`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'TPRADBGCS01', NULL, NULL),
(2, 1, 1, 'TPRBRMGGS01', NULL, NULL),
(3, 1, 1, 'TPRROKGCS01', NULL, NULL),
(4, 1, 1, 'TPRKONGCS01', NULL, NULL),
(5, 1, 1, 'T#1 New', NULL, NULL),
(6, 2, 1, 'AMD Kalol GGS 01', NULL, NULL),
(7, 2, 1, 'AMD Kalol GGS 02', NULL, NULL),
(8, 2, 1, 'AMD Kalol GGS 03', NULL, NULL),
(9, 2, 1, 'AMD Kalol GGS 04', NULL, NULL),
(10, 2, 1, 'AMD Kalol GGS 05', NULL, NULL),
(11, 2, 1, 'AMD Kalol GGS 06', NULL, NULL),
(12, 2, 1, 'AMD Kalol GGS 07', NULL, NULL),
(13, 2, 1, 'AMD Kalol GGS 08', NULL, NULL),
(14, 2, 1, 'AMD Kalol GGS 09', NULL, NULL),
(15, 2, 1, 'AMD Kalol GGS 11', NULL, NULL),
(16, 2, 1, 'AMD Motera GGS 01', NULL, NULL),
(17, 2, 1, 'AMD WDU GGS 01', NULL, NULL),
(18, 2, 1, 'AMD Kalol CTF 01', NULL, NULL),
(19, 2, 1, 'AMD Kalol GCS 01', NULL, NULL),
(20, 2, 1, 'AMD Nawagam GGS 01', NULL, NULL),
(21, 2, 1, 'AMD Nawagam GGS 02', NULL, NULL),
(22, 2, 1, 'AMD Nawagam GGS 03', NULL, NULL),
(23, 2, 1, 'AMD NawagamDES 01', NULL, NULL),
(24, 2, 1, 'AMD RML GGS 01', NULL, NULL),
(25, 2, 1, 'AMD NDJ GGS 01', NULL, NULL),
(26, 2, 1, 'AMD WSN GGS 01', NULL, NULL),
(27, 2, 1, 'AMD NGM CTF 01', NULL, NULL),
(28, 2, 1, 'AMD SKD GGS 01', NULL, NULL),
(29, 2, 1, 'AMD VRJ GGS 01', NULL, NULL),
(30, 2, 1, 'AMD JHR GGS 01', NULL, NULL),
(31, 2, 1, 'AMD JHR GGS 02', NULL, NULL),
(32, 2, 1, 'AMD SND GGS 01', NULL, NULL),
(33, 2, 1, 'AMD SND GGS 02', NULL, NULL),
(34, 2, 1, 'AMD LIM GGS 01', NULL, NULL),
(35, 2, 1, 'AMD LIM GGS 02', NULL, NULL),
(36, 2, 1, 'AMD GMJ GGS 01', NULL, NULL),
(37, 2, 1, 'AMD PLD GGS 01', NULL, NULL),
(38, 3, 1, 'ANK GGS 01', NULL, NULL),
(39, 3, 1, 'ANK GGS 02', NULL, NULL),
(40, 3, 1, 'ANK GGS 03', NULL, NULL),
(41, 3, 1, 'ANK GGS 04', NULL, NULL),
(42, 3, 1, 'ANK GGS 05', NULL, NULL),
(43, 3, 1, 'ANK GGS 06', NULL, NULL),
(44, 3, 1, 'MOTWAN GGS 01', NULL, NULL),
(45, 3, 1, 'ANK CTF 01', NULL, NULL),
(46, 3, 1, 'KOSAMBA GGS01', NULL, NULL),
(47, 3, 1, 'OLPAD GCS01', NULL, NULL),
(48, 3, 1, 'KIM EPS01', NULL, NULL),
(49, 3, 1, 'GDR GGS01', NULL, NULL),
(50, 3, 1, 'GDR GGS02', NULL, NULL),
(51, 3, 1, 'GDR GGS03', NULL, NULL),
(52, 3, 1, 'GDR GGS04', NULL, NULL),
(53, 3, 1, 'GDR GGS05', NULL, NULL),
(54, 3, 1, 'GDR GGS06', NULL, NULL),
(55, 3, 1, 'GDR GGS07', NULL, NULL),
(56, 3, 1, 'GDR GGS08', NULL, NULL),
(57, 3, 1, 'EPS - 253', NULL, NULL),
(58, 3, 1, 'GDR CPF01', NULL, NULL),
(59, 3, 1, 'GDR DAHEJ01', NULL, NULL),
(60, 3, 1, 'GDR JOLWA01', NULL, NULL),
(61, 3, 1, 'GNAQ GGS', NULL, NULL),
(62, 3, 1, 'NADA GGS', NULL, NULL),
(63, 3, 1, 'JAMBUSAR GGS', NULL, NULL),
(64, 3, 1, 'DABKA GGS', NULL, NULL),
(65, 3, 1, 'ANK KT', NULL, NULL),
(66, 4, 1, 'RDS GGS01', NULL, NULL),
(67, 4, 1, 'RDS GGS02', NULL, NULL),
(68, 4, 1, 'RDS GGS03', NULL, NULL),
(69, 4, 1, 'RDS GGS04', NULL, NULL),
(70, 4, 1, 'DHL GGS 01', NULL, NULL),
(71, 4, 1, 'SAFRAI EPS', NULL, NULL),
(72, 4, 1, 'T# 1 Nazira for ARP - New', NULL, NULL),
(73, 4, 1, 't# 1 for Geleky - New', NULL, NULL),
(74, 5, 1, 'BPA', NULL, NULL),
(75, 5, 1, 'B193', NULL, NULL),
(76, 5, 1, 'DDP', NULL, NULL),
(77, 6, 1, 'CBY PDR GGS-01', NULL, NULL),
(78, 6, 1, 'CBY KTN GGS-01', NULL, NULL),
(79, 6, 1, 'CBY AKJ GGS-01', NULL, NULL),
(80, 8, 1, 'Hazira', NULL, NULL),
(81, 9, 1, 'JPRGMWGCS01', NULL, NULL),
(82, 10, 1, 'Koraghat GGS-2', NULL, NULL),
(83, 10, 1, 'Nambar GGS-1', NULL, NULL),
(84, 10, 1, 'Tier -1 (New)', NULL, NULL),
(85, 11, 1, 'Kakinada', NULL, NULL),
(86, 12, 1, 'NARIMANAM GGS 01', NULL, NULL),
(87, 12, 1, 'TIRUVARUR EPSO1', NULL, NULL),
(88, 12, 1, 'KAMALAPURAM EPSO1', NULL, NULL),
(89, 12, 1, 'NANILAM EPSO1', NULL, NULL),
(90, 12, 1, 'ADIYAKKAMANGALAM GGSO1', NULL, NULL),
(91, 12, 1, 'KOVILKALAPAL GCSO1', NULL, NULL),
(92, 12, 1, 'KUTHALAM GCSO1', NULL, NULL),
(93, 12, 1, 'BHUVANAGIRI EPSO1', NULL, NULL),
(94, 12, 1, 'RAMNAD GCSO1', NULL, NULL),
(95, 14, 1, 'MHN', NULL, NULL),
(96, 14, 1, 'ICP', NULL, NULL),
(97, 14, 1, 'NQO', NULL, NULL),
(98, 14, 1, 'BHS', NULL, NULL),
(99, 14, 1, 'SHP', NULL, NULL),
(100, 14, 1, 'FPSO', NULL, NULL),
(101, 15, 1, 'BALOL GGS-I', NULL, NULL),
(102, 15, 1, 'BALOL GGS-II', NULL, NULL),
(103, 15, 1, 'BALOL GGS-III', NULL, NULL),
(104, 15, 1, 'BALOL GGS-IV', NULL, NULL),
(105, 15, 1, 'BALOL AIP01', NULL, NULL),
(106, 15, 1, 'Bechara GGS-I', NULL, NULL),
(107, 15, 1, 'Bechara GGS-II', NULL, NULL),
(108, 15, 1, 'JOTANA GGS', NULL, NULL),
(109, 15, 1, 'LANGNEJ MTS', NULL, NULL),
(110, 15, 1, 'LANWA GGS-I', NULL, NULL),
(111, 15, 1, 'LANWA GGS-II', NULL, NULL),
(112, 15, 1, 'LANWA GGS-III', NULL, NULL),
(113, 15, 1, 'LINCH GGS', NULL, NULL),
(114, 15, 1, 'MEHSANA CTF', NULL, NULL),
(115, 15, 1, 'North SANTHAL CTF', NULL, NULL),
(116, 15, 1, 'NANDASAN GGS', NULL, NULL),
(117, 15, 1, 'North kadi CTF', NULL, NULL),
(118, 15, 1, 'North kadi GGS-I', NULL, NULL),
(119, 15, 1, 'North kadi GGS-II', NULL, NULL),
(120, 15, 1, 'North kadi GGS-III', NULL, NULL),
(121, 15, 1, 'North kadi GGS-IV', NULL, NULL),
(122, 15, 1, 'South SANTHAL CTF', NULL, NULL),
(123, 15, 1, 'SANTHAL PNL01', NULL, NULL),
(124, 15, 1, 'Sobhasan CTF', NULL, NULL),
(125, 15, 1, 'Sobhasan GGS-I', NULL, NULL),
(126, 15, 1, 'Sobhasan GGS-II', NULL, NULL),
(127, 16, 1, 'Neelam', NULL, NULL),
(128, 16, 1, 'Heera', NULL, NULL),
(129, 17, 1, 'PASARALAPUDI GGS 01', NULL, NULL),
(130, 17, 1, 'ODALAREVU GCS 01', NULL, NULL),
(131, 17, 1, 'KESANAPALLI-W-GGS 01', NULL, NULL),
(132, 17, 1, 'TATIPAKA GCS 01', NULL, NULL),
(133, 17, 1, 'PONAMANDA GCS 01', NULL, NULL),
(134, 17, 1, 'ADAVIPALEM GCS08', NULL, NULL),
(135, 17, 1, 'MORI GCS 01', NULL, NULL),
(136, 17, 1, 'KAIKALARU EPS 01', NULL, NULL),
(137, 17, 1, 'LINGALA GGS 02', NULL, NULL),
(138, 17, 1, 'NANDIGAMA EPS 01', NULL, NULL),
(139, 17, 1, 'NARSAPUR GCS 01', NULL, NULL),
(140, 17, 1, 'MANDAPETA GCS 01', NULL, NULL),
(141, 17, 1, 'ENDAMARU GCS 01', NULL, NULL),
(142, 17, 1, 'GMAA GGS 01', NULL, NULL),
(143, 17, 1, 'MANDAPETA EPS 01', NULL, NULL),
(144, 17, 1, 'S YANAM OUT 01', NULL, NULL),
(145, 18, 1, 'Silchar', NULL, NULL),
(146, 19, 1, 'U&T', NULL, NULL),
(147, 20, 1, 'Delhi-01', NULL, NULL),
(148, 21, 1, 'Dehradun-01', NULL, NULL),
(149, 1, 2, 'E-1400-10', NULL, NULL),
(150, 1, 2, 'ARM-U-UE', NULL, NULL),
(151, 1, 2, 'E-1400-14', NULL, NULL),
(152, 2, 2, 'IPS-700-M1', NULL, NULL),
(153, 2, 2, 'IPS-700-M2', NULL, NULL),
(154, 2, 2, 'IPS-700-M3', NULL, NULL),
(155, 2, 2, 'IPS-700-M8# IPS700M4', NULL, NULL),
(156, 2, 2, 'E-1400-M1# F3050-2', NULL, NULL),
(157, 3, 2, 'EV-2000-2# F6100-2', NULL, NULL),
(158, 3, 2, 'E-1400-3', NULL, NULL),
(159, 3, 2, 'E-1400-5', NULL, NULL),
(160, 3, 2, 'E-1400-7', NULL, NULL),
(161, 3, 2, 'E-760-5', NULL, NULL),
(162, 3, 2, 'IPS-700-M10', NULL, NULL),
(163, 4, 2, 'E-1400-6 # E2000-4', NULL, NULL),
(164, 4, 2, 'E-1400-21', NULL, NULL),
(165, 4, 2, 'E-2000-6', NULL, NULL),
(166, 4, 2, 'E-2000-9', NULL, NULL),
(167, 4, 2, 'E-1400-4#E2000-7', NULL, NULL),
(168, 4, 2, 'E-1400-1', NULL, NULL),
(169, 4, 2, 'E-3000-1', NULL, NULL),
(170, 4, 2, 'E-1400-13#E2000-5', NULL, NULL),
(171, 4, 2, 'EV-2000-3# F4900-1', NULL, NULL),
(172, 4, 2, 'EV-2000-4# E1400-4', NULL, NULL),
(173, 4, 2, 'EV-2000-5 # E1400-6', NULL, NULL),
(174, 4, 2, 'F-6100-1', NULL, NULL),
(175, 4, 2, 'E1400-13', NULL, NULL),
(176, 4, 2, 'ARMCUE-1# E-1400-2', NULL, NULL),
(177, 6, 2, 'IPS-700-M9', NULL, NULL),
(178, 7, 2, 'E-2000-8', NULL, NULL),
(179, 9, 2, 'E-760-13', NULL, NULL),
(180, 10, 2, 'E-760-9 ', NULL, NULL),
(181, 10, 2, 'E-760-10', NULL, NULL),
(182, 10, 2, 'E-1400-24', NULL, NULL),
(183, 12, 2, 'E-1400-9', NULL, NULL),
(184, 12, 2, 'E-1400-19', NULL, NULL),
(185, 12, 2, 'E-760-3', NULL, NULL),
(186, 12, 2, 'E-760-14', NULL, NULL),
(187, 12, 2, 'E-760-15', NULL, NULL),
(188, 12, 2, 'E-760-16', NULL, NULL),
(189, 12, 2, 'EV-2000-6', NULL, NULL),
(190, 13, 2, 'BI-2000-1', NULL, NULL),
(191, 15, 2, 'E-760-18', NULL, NULL),
(192, 15, 2, 'E-760-11', NULL, NULL),
(193, 15, 2, 'IPS-700-M5', NULL, NULL),
(194, 15, 2, 'IPS-700-M6', NULL, NULL),
(195, 15, 2, 'IPS-700-M7', NULL, NULL),
(196, 15, 2, 'BHEL-750-M2', NULL, NULL),
(197, 17, 2, 'E-1400-16', NULL, NULL),
(198, 17, 2, 'E-1400-17', NULL, NULL),
(199, 17, 2, 'E-2000-3', NULL, NULL),
(200, 17, 2, 'E-760-M', NULL, NULL),
(201, 17, 2, 'E-2000-1', NULL, NULL),
(202, 17, 2, 'EV-2000-1# E1400-20', NULL, NULL),
(203, 17, 2, 'BI-2000-2', NULL, NULL),
(204, 18, 2, 'E-1400-12', NULL, NULL),
(205, 18, 2, 'E-1400-11', NULL, NULL),
(206, 20, 2, 'Delhi-01', NULL, NULL),
(207, 21, 2, 'Dehradun-01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CPF_NO` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DESIGNATION` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SECTION` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ASSET` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROLE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTHORISED` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `WEF_DATE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTHORISED_BY` int(11) NOT NULL,
  `DELETED_BY` int(11) NOT NULL,
  `DELETE_STATUS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `CPF_NO`, `name`, `DESIGNATION`, `SECTION`, `ASSET`, `ROLE`, `AUTHORISED`, `email`, `email_verified_at`, `password`, `WEF_DATE`, `AUTHORISED_BY`, `DELETED_BY`, `DELETE_STATUS`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 11111, 'Arun kumar saw', 'tech', 'EE', 'Assam', '[\"Admin\"]', 'Y', 'arunsaw9@gmail.com', NULL, '$2y$10$4XmMEpWVnbxcUsMhknWxgOBlvqoj.58N5RX7EYfmhBl0dbaM12qhq', 'test', 0, 0, '', NULL, '2021-02-12 04:15:58', '2021-02-12 04:55:38'),
(2, 45678, 'arun kumar saw', 'Developer', 'IT', 'Cambay', '[\"SCADA\"]', 'Y', 'arn@gmail.com', NULL, '$2y$10$nNEAUSIcodGRXUKeLjgBNuNh324pyjvwVi2rlBVKB0A8TecTJjmS2', 'test', 0, 0, '', NULL, '2021-02-15 00:23:12', '2021-02-15 00:23:12'),
(3, 22222, 'Ramesh', 'tech', 'dsad', 'Agartala', '[\"SCADA\"]', 'Y', 'ramesh@gmail.com', NULL, '$2y$10$A6tNSGJmdJzeuWF.DWwtn.MmwyDP54RddOALsfZK1i9sAIKXD8ZtS', 'test', 0, 0, '', NULL, '2021-02-15 00:50:34', '2021-02-15 00:50:34'),
(4, 123456, 'Tarun', 'fdsf', 'fdsfds', 'Agartala', '[\"SCADA\"]', 'Y', 'tarun@gmail.com', NULL, '$2y$10$4XmMEpWVnbxcUsMhknWxgOBlvqoj.58N5RX7EYfmhBl0dbaM12qhq', 'test', 0, 0, '', NULL, '2021-02-15 00:54:06', '2021-02-15 00:54:06'),
(5, 56789, 'Rahul', 'dev', 'test', 'Agartala', '[\"Admin\"]', 'Y', 'rahul@gmail.com', NULL, '$2y$10$XiL8DGpOLm4.3wBmVoIMfuRBjzC3UBw3CqVp9t1b8zHLpPI99zvEm', 'test', 0, 0, '', NULL, '2021-02-15 01:19:20', '2021-02-15 01:19:20'),
(6, 131995, 'Welcome', 'developer', 'Tech', 'Asset', '[\"Admin\"]', 'Y', 'arun_arun@ongc.co.in', NULL, '$2y$10$MStpixbOVXPyatao5B6xte0tzQ3WbxQJiJoYl5DoRJFU5gNR0FTnG', 'test', 0, 0, '', NULL, '2021-02-15 04:21:39', '2021-02-15 04:21:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `scada_drillings`
--
ALTER TABLE `scada_drillings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scada_productions`
--
ALTER TABLE `scada_productions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_assets`
--
ALTER TABLE `sub_assets`
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
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scada_drillings`
--
ALTER TABLE `scada_drillings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scada_productions`
--
ALTER TABLE `scada_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `sub_assets`
--
ALTER TABLE `sub_assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
