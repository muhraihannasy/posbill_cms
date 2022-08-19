-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 10:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_posbill`
--

-- --------------------------------------------------------

--
-- Table structure for table `shohabbos_customfields_groups`
--

CREATE TABLE `shohabbos_customfields_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_repeater` tinyint(1) NOT NULL DEFAULT 0,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shohabbos_customfields_groups`
--

INSERT INTO `shohabbos_customfields_groups` (`id`, `name`, `code`, `page`, `created_at`, `updated_at`, `is_repeater`, `position`) VALUES
(1, 'Section1Home', 'section1home', 'beranda', '2022-08-13 20:55:58', '2022-08-13 20:55:58', 0, 'primary'),
(2, 'Section2Home', 'section2home', 'beranda', '2022-08-13 20:57:02', '2022-08-13 20:57:02', 0, 'primary'),
(3, 'Section2Home', 'section2home_2', 'beranda', '2022-08-13 20:57:38', '2022-08-13 20:57:38', 1, 'primary'),
(4, 'Section3Home', 'section3home', 'beranda', '2022-08-13 21:01:20', '2022-08-13 21:01:20', 0, 'primary'),
(5, 'Section4Home', 'section4home', 'beranda', '2022-08-13 21:02:21', '2022-08-13 21:02:21', 0, 'primary'),
(6, 'Section4Home', 'section4home_2', 'beranda', '2022-08-13 21:02:50', '2022-08-13 21:02:50', 1, 'primary'),
(7, 'Section5Home', 'section5home', 'beranda', '2022-08-13 21:04:15', '2022-08-13 21:04:15', 0, 'primary'),
(8, 'Section5Home', 'section5home_2', 'beranda', '2022-08-13 21:04:54', '2022-08-13 21:04:54', 1, 'primary'),
(9, 'Section6Home', 'section6home', 'beranda', '2022-08-13 21:06:00', '2022-08-13 21:06:00', 0, 'primary'),
(10, 'Section6Home', 'section6home_2', 'beranda', '2022-08-13 21:07:21', '2022-08-13 21:33:07', 0, 'primary'),
(11, 'Section7Home', 'section7home', 'beranda', '2022-08-13 21:35:44', '2022-08-13 21:35:44', 0, 'primary'),
(12, 'Section1Fitur', 'section1fitur', 'fitur', '2022-08-13 21:39:04', '2022-08-13 21:39:04', 0, 'primary'),
(13, 'Section2Fitur', 'section2fitur', 'fitur', '2022-08-13 21:43:15', '2022-08-13 21:44:39', 1, 'primary'),
(14, 'Section3Fitur', 'section3fitur', 'fitur', '2022-08-13 21:51:57', '2022-08-13 21:51:57', 0, 'primary'),
(15, 'Section1Harga', 'section1harga', 'harga', '2022-08-13 21:54:34', '2022-08-13 21:54:34', 0, 'primary'),
(16, 'Section2Harga', 'section2harga', 'harga', '2022-08-13 21:55:03', '2022-08-13 21:55:03', 0, 'primary'),
(17, 'Section2Harga', 'section2harga_2', 'harga', '2022-08-13 21:57:09', '2022-08-13 21:57:09', 1, 'primary'),
(18, 'Section1Jasa', 'section1jasa', 'jasa', '2022-08-14 06:14:14', '2022-08-14 06:14:14', 0, 'primary'),
(19, 'Section2Jasa', 'section2jasa', 'jasa', '2022-08-14 06:19:41', '2022-08-14 06:19:41', 0, 'primary'),
(20, 'Section3Jasa', 'section3jasa', 'jasa', '2022-08-14 06:20:26', '2022-08-14 06:20:26', 0, 'primary'),
(21, 'Section3Jasa', 'section3jasa_2', 'jasa', '2022-08-14 06:21:21', '2022-08-14 06:21:21', 1, 'primary'),
(22, 'Section1Retail', 'section1retail', 'retail', '2022-08-14 06:52:05', '2022-08-14 06:52:05', 0, 'primary'),
(23, 'Section2Retail', 'section2retail', 'retail', '2022-08-14 06:53:06', '2022-08-14 06:53:06', 0, 'primary'),
(24, 'Section3Retail', 'section3retail', 'retail', '2022-08-14 06:53:37', '2022-08-14 06:53:37', 0, 'primary'),
(25, 'Section3Retail', 'section3retail_2', 'retail', '2022-08-14 06:54:35', '2022-08-14 06:54:35', 1, 'primary'),
(26, 'Section1Food', 'section1food', 'food', '2022-08-14 07:00:45', '2022-08-14 07:00:58', 0, 'primary'),
(27, 'Section2Food', 'section2food', 'food', '2022-08-14 07:01:52', '2022-08-14 07:01:52', 0, 'primary'),
(28, 'Section3Food', 'section3food', 'food', '2022-08-14 07:02:21', '2022-08-14 07:02:21', 0, 'primary'),
(29, 'Section3Food', 'section3food_2', 'food', '2022-08-14 07:03:19', '2022-08-14 07:03:19', 1, 'primary'),
(30, 'Section1Contact', 'section1contact', 'kontak-kami', '2022-08-14 07:12:04', '2022-08-14 07:12:04', 0, 'primary'),
(31, 'Section2Contact', 'section2contact', 'kontak-kami', '2022-08-14 07:13:59', '2022-08-14 07:13:59', 0, 'primary'),
(32, 'Section1Toko', 'section1toko', 'toko', '2022-08-14 07:20:48', '2022-08-14 07:20:48', 0, 'primary'),
(33, 'Section2Toko', 'section2toko', 'toko', '2022-08-14 07:22:35', '2022-08-14 07:22:42', 1, 'primary'),
(34, 'Section1Kasir', 'section1kasir', 'kasir', '2022-08-15 07:09:34', '2022-08-15 07:09:34', 0, 'primary'),
(35, 'Section2Kasir', 'section2kasir', 'kasir', '2022-08-15 07:11:09', '2022-08-15 07:11:09', 1, 'primary'),
(36, 'Section1Manage', 'section1manage', 'managemen', '2022-08-15 07:16:42', '2022-08-15 07:16:42', 0, 'primary'),
(37, 'Section2Manage', 'section2manage', 'managemen', '2022-08-15 07:26:05', '2022-08-15 07:26:27', 1, 'primary'),
(38, 'Section1Dana', 'section1dana', 'dana', '2022-08-15 07:29:32', '2022-08-15 07:29:32', 0, 'primary'),
(39, 'Section2Dana', 'section2dana', 'dana', '2022-08-15 07:30:29', '2022-08-15 07:30:29', 1, 'primary'),
(40, 'Section2Contact', 'section2contact_2', 'kontak-kami', '2022-08-17 22:04:55', '2022-08-17 22:04:55', 1, 'primary'),
(41, 'Section1Contact', 'section1contact_2', 'kontak-kami', '2022-08-18 00:17:33', '2022-08-18 00:17:33', 0, 'primary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shohabbos_customfields_groups`
--
ALTER TABLE `shohabbos_customfields_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shohabbos_customfields_groups`
--
ALTER TABLE `shohabbos_customfields_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
