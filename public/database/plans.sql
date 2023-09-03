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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_plan` date NOT NULL,
  `end_plan` date DEFAULT NULL,
  `type_of_plan` enum('التزام','مخطط مرور القائد','مرور','تعليمات','تحركات') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'التزام',
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `start_plan`, `end_plan`, `type_of_plan`, `subject`, `desction`, `notes`, `created_at`, `updated_at`) VALUES
(3, '2023-08-14', NULL, 'التزام', NULL, NULL, '', '2023-08-12 06:59:47', NULL),
(6, '2023-08-15', NULL, 'التزام', NULL, NULL, '', '2023-08-12 07:00:20', NULL),
(7, '2023-08-18', NULL, 'التزام', NULL, NULL, '', '0000-00-00 00:00:00', NULL),
(9, '2023-08-20', NULL, 'التزام', 'دفع ضباط الصف المذكورين الي قيادة الفرقة العاشرة دجو', NULL, '', '0000-00-00 00:00:00', NULL),
(16, '2023-09-04', '2023-09-10', 'مخطط مرور القائد', '<p>هههههههههههام</p>', '', '', '2023-08-13 09:32:12', '2023-08-26 12:13:56'),
(19, '2023-08-30', '2023-09-08', 'التزام', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>دفع </strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الضباط المذكورين لإختبار التناسق في شعبة التنظيم ةالإدارة سعت 730 يوم الأحد الموافق 30/8/2023&nbsp;<br></strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>&nbsp;رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">قيال 21</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">احمد محمد اسلااام</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">نقيب</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">ك 41</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">سيد مصطفي علي</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">ملازم أ</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">ك44</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">ابراهيم خالد احمد</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">ملازم</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-16 06:08:24', '2023-08-26 12:11:31'),
(22, '2023-08-28', NULL, 'التزام', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>العنوان</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الإلتزام@</strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-16 09:32:58', '2023-08-16 09:32:58'),
(29, '2023-08-28', NULL, 'التزام', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>العنوان</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الإلتزام@</strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-16 09:36:14', '2023-08-16 09:36:14'),
(30, '2023-08-28', NULL, 'التزام', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>العنوان</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الإلتزام@</strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-16 09:36:30', '2023-08-16 09:36:30'),
(32, '2023-08-21', NULL, 'التزام', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>العنوان</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الإلتزام@</strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-16 09:42:13', '2023-08-16 09:42:13'),
(33, '2023-08-21', NULL, 'التزام', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>العنوان</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الإلتزام@</strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-16 09:42:19', '2023-08-16 09:42:19'),
(34, '2023-08-21', NULL, 'التزام', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>العنوان</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الإلتزام@</strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-16 09:44:55', '2023-08-16 09:44:55'),
(36, '2023-08-28', '2023-08-30', 'تحركات', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>العنوان</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الإلتزام@</strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">z</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">zz</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">zz</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">z</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">zz</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">zz</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">z</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">zz</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">zz</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-16 09:46:47', '2023-08-26 12:29:28'),
(38, '2023-08-30', '2023-08-31', 'تحركات', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>مساعد</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">\r\n<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>تيست</strong></span></h2>\r\n</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', '', '', '2023-08-26 10:20:27', '2023-08-26 12:13:08'),
(39, '2023-12-20', '2023-08-30', 'تعليمات', '<h2 style=\"text-align: center;\"><span style=\"font-family: impact, sans-serif; font-size: 18pt;\"><strong>العنوان</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>الإلتزام@</strong></p>\r\n<table style=\"border-collapse: collapse; width: 47.8628%; height: 108px; background-color: rgb(236, 240, 241); border: 1px ridge rgb(0, 0, 0); margin-left: auto; margin-right: auto;\" border=\"1\"><colgroup><col style=\"width: 18.2344%;\"><col style=\"width: 14.3571%;\"><col style=\"width: 47.2212%;\"><col style=\"width: 16.7397%;\"><col style=\"width: 3.43762%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: rgb(126, 140, 141);\">\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الملاحظات</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الوحدة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>الإسم</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>درجة / رتبة</strong></td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\"><strong>م</strong></td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">1</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">2</td>\r\n</tr>\r\n<tr>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">&nbsp;</td>\r\n<td style=\"border-color: rgb(0, 0, 0); text-align: center;\">3</td>\r\n</tr>\r\n</tbody>\r\n</table>', '', '', '2023-08-26 10:29:07', '2023-08-26 10:29:07'),
(40, '2023-09-02', '2023-09-09', 'مخطط مرور القائد', '', '', 'ملاحظات', '2023-08-27 08:59:38', '2023-08-27 08:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
