-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 02:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawa21`
--

-- --------------------------------------------------------

--
-- Table structure for table `kataebs`
--

CREATE TABLE `kataebs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `katepa_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kataebs`
--

INSERT INTO `kataebs` (`id`, `katepa_name`, `created_at`, `updated_at`) VALUES
(1, '٢١', NULL, NULL),
(2, '٤١', NULL, NULL),
(3, '٤٣', NULL, NULL),
(4, '٤٤', NULL, NULL),
(5, '٦٨', NULL, NULL),
(6, '٦٩', NULL, NULL),
(7, '٧٤', NULL, NULL),
(8, '٧٩', NULL, NULL),
(9, '1 أحمد', NULL, NULL),
(10, '1 هشام', NULL, NULL),
(11, '9 أحمد', NULL, NULL),
(12, '9 هشام', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kataebs`
--
ALTER TABLE `kataebs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kataebs`
--
ALTER TABLE `kataebs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
