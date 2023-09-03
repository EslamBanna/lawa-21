-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 02:24 PM
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
-- Table structure for table `plan_attachments`
--

CREATE TABLE `plan_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` int(11) NOT NULL,
  `attach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_attachments`
--

INSERT INTO `plan_attachments` (`id`, `plan_id`, `attach`, `created_at`, `updated_at`) VALUES
(1, 29, 'rQTDDMSY0yzpNcXwXZCxFeIeZs2XCKG9f795w8Iw.jpg', '2023-08-16 09:36:14', '2023-08-16 09:36:14'),
(2, 30, 'bySjkLMr0MOlxCu2RiTJtjBV2OPoy6ja4RrcIAz7.jpg', '2023-08-16 09:36:30', '2023-08-16 09:36:30'),
(3, 36, 'U8b5k855R2PlwpHAABAQJkljgZDkpkzXbPKr2uub.jpg', '2023-08-16 09:46:47', '2023-08-16 09:46:47'),
(4, 36, 'fbL6JTtiEfabEMtEvrjfSCv03Su5sf5EmLpNbWmp.jpg', '2023-08-16 09:46:47', '2023-08-16 09:46:47'),
(5, 36, 'aiNaQ4m9iQKMaMBUIYMYnOiUSueXwlXPBHCHOGAn.jpg', '2023-08-16 09:46:47', '2023-08-16 09:46:47'),
(10, 38, '8pqLIzeqeSqmLc0SGQRPImbeDzjIoZe3nNJV7bpr.jpg', '2023-08-26 10:20:27', '2023-08-26 10:20:27'),
(11, 38, 'h0HNNDTYHW6LoEWEokRzAc23oerSGXpE11NenE5r.jpg', '2023-08-26 12:13:08', '2023-08-26 12:13:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plan_attachments`
--
ALTER TABLE `plan_attachments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan_attachments`
--
ALTER TABLE `plan_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
