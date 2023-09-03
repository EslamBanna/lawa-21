-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 02:25 PM
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
-- Table structure for table `soliders`
--

CREATE TABLE `soliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `militray_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'جندي',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kateba_id` int(11) NOT NULL,
  `years_of_services` enum('1','1.5','2','2.5','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `join_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gun_id` int(11) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goverment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `militray_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soliders`
--

INSERT INTO `soliders` (`id`, `militray_id`, `degree`, `name`, `kateba_id`, `years_of_services`, `join_at`, `left_in`, `specialist`, `certification`, `gun_id`, `birthdate`, `street`, `village`, `country`, `goverment`, `hight`, `weight`, `phone1`, `phone2`, `notes`, `image`, `id_image`, `militray_image`, `created_at`, `updated_at`) VALUES
(1, '20222222631563', 'رقيب', 'اسلام احمد احمد اسماعيل البنا', 1, '1', '2023-08-01', NULL, 'متابعة', 'بكالريوس حاسبات ومعلومات', 2, '2023-08-01', 'طنطا', 'طنطا', 'طنطا', 'الغربية', '170', '75', '01234567891', '01234567891', NULL, NULL, NULL, NULL, NULL, '2023-08-14 02:54:32'),
(2, '55564868468484', 'عريف مجند', 'احمد صبري', 2, '1', '2023-08-08', NULL, 'بلايصة', NULL, 1, '2023-08-24', 'ببب', 'بب', 'بب', 'بب', '120', '52', '0122222', '01222222', NULL, 'ImHqzIncl5OFqvJIXhRi9lptJSorPbFTGEfR3A4v.jpg', 'HAhIXMSQnFjLVYF361Pp23mS7XphFf4LfDs2RlIH.jpg', 'VflziGRjv3t3IlDvna1ZzFohKa4CROizpfCrONM3.jpg', '2023-08-11 23:11:24', '2023-08-11 23:36:12'),
(3, '1111111111', 'جندي', '11111111111', 3, '1', '2000-11-11', NULL, '11111111', NULL, 1, '1999-11-11', '111111', '1111111111', '111111111111', '11111111111111', '111111111', '111111111111', '1111111111', '11111111', '1111111111111', 'p1KTwm9OB1SgtsECnnvyFv8oSLDq1Vvx8lRS73eT.jpg', 'IpPgp8AczRcG7XuHD2Nk4WZ0erHjo4U5dd1Pf0wj.jpg', 'lzlBSol9l8qtJaw16O5f6OCQMXvWO5wR8OfeI91L.jpg', '2023-08-11 23:38:16', '2023-08-11 23:38:16'),
(4, '88888888', 'جندي', '88888888', 1, '1', '1999-05-22', NULL, '777777777', '777777', 1, '1999-10-17', '666666666', '66666666666', '6666666666', '6666666666', '666666666', '6666666666', '6666666', '6666666666', '66666666666', '', '', '', '2023-08-11 23:40:00', '2023-08-11 23:40:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soliders`
--
ALTER TABLE `soliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soliders`
--
ALTER TABLE `soliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
