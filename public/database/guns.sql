-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 02:22 PM
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
-- Table structure for table `guns`
--

CREATE TABLE `guns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gun_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guns`
--

INSERT INTO `guns` (`id`, `gun_name`, `created_at`, `updated_at`) VALUES
(1, 'مدفعية', NULL, NULL),
(2, 'دجو', NULL, NULL),
(3, 'مركبات', NULL, NULL),
(4, 'خدمات طبية', NULL, NULL),
(5, 'جوية', NULL, NULL),
(6, 'بحرية', NULL, NULL),
(7, 'اشارة', NULL, NULL),
(8, 'مشاة', NULL, NULL),
(9, 'مشاة شروط خاصة', NULL, NULL),
(10, 'مدرعات', NULL, NULL),
(11, 'مدرعات شروط خاصة', NULL, NULL),
(12, 'شرطة عسكرية', NULL, NULL),
(13, 'حرس حدود', NULL, NULL),
(14, 'حرس جمهوري', NULL, NULL),
(15, 'سكرتارية عسكرية', NULL, NULL),
(16, 'صاعقة', NULL, NULL),
(17, 'مظلات', NULL, NULL),
(18, 'اجهزة قيادة', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guns`
--
ALTER TABLE `guns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guns`
--
ALTER TABLE `guns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
