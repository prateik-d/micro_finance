-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2020 at 04:10 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `micro_finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_06_095409_add_otp_to_users_table', 2),
(4, '2020_05_07_115738_add_dob_to_users_table', 3),
(5, '2020_05_07_121654_add_dob_to_users_table', 4),
(6, '2020_05_07_122241_edit_doj_to_users_table', 5),
(7, '2020_05_07_122516_edit_nullable_value_to_users_table', 6),
(8, '2020_05_07_123712_add_otp_to_users_table', 7),
(9, '2020_05_08_051819_add_employement_info_to_users_table', 8),
(10, '2020_05_08_053927_add_reference_info_to_users_table', 9),
(11, '2020_05_08_060922_add_bank_info_to_users_table', 10),
(12, '2020_05_11_053559_add_status_to_users_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `aadhar_card` text COLLATE utf8mb4_unicode_ci,
  `pan_card` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `emp_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_income` double(8,2) DEFAULT NULL,
  `working_since` date DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref1_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref1_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref1_address` text COLLATE utf8mb4_unicode_ci,
  `ref2_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref2_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref2_address` text COLLATE utf8mb4_unicode_ci,
  `urgent_contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urgent_contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urgent_contact_address` text COLLATE utf8mb4_unicode_ci,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` text COLLATE utf8mb4_unicode_ci,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `selfie`, `address`, `aadhar_card`, `pan_card`, `email`, `email_verified_at`, `password`, `phone`, `education`, `marital_status`, `remember_token`, `created_at`, `updated_at`, `otp`, `dob`, `doj`, `emp_type`, `monthly_income`, `working_since`, `company_name`, `company_address`, `company_phone`, `ref1_name`, `ref1_phone`, `ref1_address`, `ref2_name`, `ref2_phone`, `ref2_address`, `urgent_contact_name`, `urgent_contact_phone`, `urgent_contact_address`, `bank_name`, `bank_branch`, `bank_address`, `account_number`, `bank_account_name`, `bank_account_type`, `ifsc`, `status`) VALUES
(1, 'test', 'esdv', 'kdjfn ejf nk', 'fjkn eknwefn', 'jnef kjwe newjn', 'test@test.com', '2020-05-06 18:30:00', '123456', '789456123', '12v', 'single', NULL, '2020-05-06 18:30:00', '2020-05-06 18:30:00', 456963, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Prateik Dhotmal', '1588919688524.png', 'pentagon 2 magarpatta city', '1588919688666.png', '1588919688743.png', 'pratik.dhotmal@gsmail.com', NULL, '$2y$10$OCge6gnjBmrM6FnX.I5mjO3A8NAU.JBizq1aoJcKd5Mpm8X/zQJLy', '07276716162', 'yd', 'single', NULL, '2020-05-08 01:04:48', '2020-05-08 01:04:48', NULL, '2020-05-07', NULL, 'test', 17777.00, '2019-08-31', 'sefkjb', 'd;kfn ljnn', '45213', 't1', '567890', NULL, 't2', 'dfu bhjfdbhj', NULL, 'ut1', '4567890', 'jdbkvmk.', NULL, 'bmn n', 'kdfjd fkvbn', 'hfbvd98562', 'prateik', 'saving', 'vhbj2jhb', NULL),
(6, 'Prateik1 Dhotmal', '1589186524233.png', 'pentagon 2 magarpatta city', '1589177842988.png', '1589177842427.png', 'pdhotmal@gmail.com', NULL, '$2y$10$3xTpcblZWAy0ZTwZDJDtEegwmO/H6W2BSQAiyhszQmOiaY6RQgaZy', '07276716162', 'yd', 'Unmarried', NULL, '2020-05-11 00:47:22', '2020-05-11 03:12:04', NULL, NULL, NULL, 'Permanent or fixed-term employees', 20000.00, '2019-08-30', 'sefkjb', 'd;klvm djlfnm.jln', '8465321', 'kjfdn', '8465321', 'jkdfn kjrgerjk jn', 'dkfjnvjn', '784512', 'jfknv jkrnjken', 'fjvm', '15487865', 'jkfn kjervjkdn', 'dkfjnvkjn', 'jenfdcjkn', 'kjfjvdfn lkn', 'kjdn5djkn', 'dvn kjnn', 'Recurring Deposit Account', 'vhbj2jhb', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
