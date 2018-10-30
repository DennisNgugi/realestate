-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 06:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realmast`
--

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `category_id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(6, 2, 'Application to Let Net', 'Application to Let Net.pdf', '2018-10-16 03:12:38', '2018-10-16 03:12:38'),
(7, 2, 'Application to Purchase Net', 'Application to Purchase Net.pdf', '2018-10-16 03:13:13', '2018-10-16 03:13:13'),
(8, 2, 'Commercial Lease Net', 'Commercial Lease Net.pdf', '2018-10-16 03:13:58', '2018-10-16 03:13:58'),
(9, 2, 'Consultancy Instructions Net', 'Consultancy Instructions Net.pdf', '2018-10-16 03:14:29', '2018-10-16 03:14:29'),
(10, 2, 'Rental Contract Net', 'Rental contract Net.pdf', '2018-10-16 03:14:59', '2018-10-16 03:14:59'),
(11, 2, 'Sale Contract Net', 'sale contract Net.doc.pdf', '2018-10-16 03:15:29', '2018-10-16 03:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `download_categories`
--

CREATE TABLE `download_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `download_categories`
--

INSERT INTO `download_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Act', '2018-10-15 06:26:07', '2018-10-15 06:28:07'),
(2, 'Net', '2018-10-16 03:11:52', '2018-10-16 03:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `property_id`, `images`, `created_at`, `updated_at`) VALUES
(1, 2, '1539702328.jpg', '2018-10-16 12:05:29', '2018-10-16 12:05:29'),
(2, 2, '1539702329.jpg', '2018-10-16 12:05:29', '2018-10-16 12:05:29'),
(3, 2, '1539702329.jpg', '2018-10-16 12:05:30', '2018-10-16 12:05:30'),
(4, 2, '1539702330.jpg', '2018-10-16 12:05:30', '2018-10-16 12:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locations` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `locations`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Nairobi', NULL, '2018-10-06 13:45:44', '2018-10-06 13:45:44'),
(2, 'Westlands', NULL, '2018-10-07 04:05:50', '2018-10-07 04:05:50'),
(3, 'Juja', NULL, '2018-10-07 04:06:02', '2018-10-07 04:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_06_080259_create_property_purposes_table', 1),
(4, '2018_10_06_080841_create_property_types_table', 1),
(5, '2018_10_06_105713_create_locations_table', 1),
(6, '2018_10_06_115412_create_properties_table', 1),
(7, '2018_10_07_085001_create_guests_table', 2),
(8, '2018_10_09_180548_create_images_table', 2),
(9, '2018_10_10_065718_create_services_table', 2),
(10, '2018_10_10_133334_create_inquiries_table', 3),
(11, '2018_10_11_172416_create_downloads_table', 4),
(12, '2018_10_12_185401_add_available_to_properties_table', 5),
(15, '2018_10_15_041804_add_best_photo_1_to_properties', 6),
(16, '2018_10_15_042053_add_best_photo_2_to_properties', 6),
(17, '2018_10_15_085647_create_download_categories_table', 7),
(18, '2018_10_15_161137_create_downloads_table', 8),
(19, '2018_10_16_145312_create_images_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_purpose_id` int(10) UNSIGNED NOT NULL,
  `property_type_id` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `bathrooms` int(11) DEFAULT NULL,
  `garage` int(11) DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `best_photo_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_photo_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `available` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_name`, `property_purpose_id`, `property_type_id`, `location_id`, `price`, `bedrooms`, `bathrooms`, `garage`, `description`, `featured_image`, `best_photo_1`, `best_photo_2`, `status`, `available`, `created_at`, `updated_at`) VALUES
(1, 'Karuaini', 1, 1, 1, 123467, 23, 2, 2, 'Lorem', '1538887886.jpg', NULL, NULL, 1, NULL, '2018-10-07 01:51:26', '2018-10-07 01:51:26'),
(2, 'Utawala Apartments', 2, 1, 1, 200000, 1, 1, NULL, 'Lorem ipsum sudo lamet', '1538893605.jpg', NULL, NULL, 0, NULL, '2018-10-07 03:26:45', '2018-10-07 03:26:45'),
(3, 'Kalamu Apartments', 2, 1, 1, 300000, 2, 3, 1, 'sgsdgse', '1538895871.jpg', NULL, NULL, 0, NULL, '2018-10-07 04:04:32', '2018-10-07 04:04:32'),
(4, 'Mukuru', 1, 1, 3, 50000, 1, 1, 1, 'difnrinfr rfirgr', '1539283265.jpg', NULL, NULL, 0, NULL, '2018-10-11 15:41:06', '2018-10-11 15:41:06'),
(5, 'Fort', 1, 1, 2, 20000, 2, 1, 1, 'Full furnished house', '1539371033.jpg', NULL, NULL, 0, '2018-10-19', '2018-10-12 16:03:53', '2018-10-12 16:03:53'),
(6, 'Mast', 1, 1, 2, 50000, 1, 1, 1, 'Unfurnished', '1539578126.jpg', '1539578126.jpg', '1539578127.jpg', 0, '2018-10-04', '2018-10-15 01:35:27', '2018-10-15 01:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `property_purposes`
--

CREATE TABLE `property_purposes` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_purpose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_purposes`
--

INSERT INTO `property_purposes` (`id`, `property_purpose`, `created_at`, `updated_at`) VALUES
(1, 'Rent', '2018-10-06 13:45:30', '2018-10-06 13:45:30'),
(2, 'Sale', '2018-10-07 01:58:58', '2018-10-07 01:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `property_type`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', '2018-10-06 13:45:19', '2018-10-06 13:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Property Valuation', 'Property Valuation', '2018-10-10 05:56:17', '2018-10-10 05:56:17'),
(2, 'Property Management', 'Property Management', '2018-10-10 08:20:19', '2018-10-10 08:20:19'),
(3, 'Property Development', 'Property Development', '2018-10-10 08:21:10', '2018-10-10 08:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_categories`
--
ALTER TABLE `download_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_property_id_foreign` (`property_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_property_purpose_id_foreign` (`property_purpose_id`),
  ADD KEY `properties_property_type_id_foreign` (`property_type_id`),
  ADD KEY `properties_location_id_foreign` (`location_id`);

--
-- Indexes for table `property_purposes`
--
ALTER TABLE `property_purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `download_categories`
--
ALTER TABLE `download_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property_purposes`
--
ALTER TABLE `property_purposes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `properties_property_purpose_id_foreign` FOREIGN KEY (`property_purpose_id`) REFERENCES `property_purposes` (`id`),
  ADD CONSTRAINT `properties_property_type_id_foreign` FOREIGN KEY (`property_type_id`) REFERENCES `property_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
