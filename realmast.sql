-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 09:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
(11, 2, 'Sale Contract Net', 'sale contract Net.doc.pdf', '2018-10-16 03:15:29', '2018-10-16 03:15:29'),
(12, 1, 'Estate Agent Act', 'EstateAgentsAct17of1984_subsidiary.pdf', '2018-10-16 16:51:49', '2018-10-16 16:51:49'),
(13, 1, 'Housing Act', 'HousingAct17of1953.pdf', '2018-10-16 16:52:17', '2018-10-16 16:52:17'),
(15, 1, 'Landlord and tenant act', 'LandlordandtenantShopsHotelsandCateringEstablishmentsAct13of1965.pdf', '2018-10-16 16:53:31', '2018-10-16 16:53:31'),
(16, 1, 'National Construction Authority', 'NationalConstructionAuthorityAct_No41of2011.pdf', '2018-10-16 16:54:24', '2018-10-16 16:54:24'),
(17, 1, 'Nema act', 'NEMA act.pdf', '2018-10-16 16:55:10', '2018-10-16 16:55:10'),
(18, 1, 'Sectional Properties Act', 'SectionalPropertiesAct21of1987_2.pdf', '2018-10-16 16:55:45', '2018-10-16 16:55:45'),
(19, 1, 'Survey Act', 'SurveyAct25of1961.pdf', '2018-10-16 16:56:21', '2018-10-16 16:56:21'),
(20, 1, 'Valuers act', 'ValuersAct16of1984.pdf', '2018-10-16 16:56:42', '2018-10-16 16:56:42');

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

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Westlands', NULL, '2018-10-16 17:55:49', '2018-10-16 17:55:49'),
(2, 'Nairobi', NULL, '2018-10-16 17:56:00', '2018-10-16 17:56:00'),
(3, 'Kikuyu', NULL, '2018-10-16 17:56:10', '2018-10-16 17:56:10');

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
(7, '2018_10_07_085001_create_guests_table', 1),
(8, '2018_10_09_180548_create_images_table', 1),
(9, '2018_10_10_065718_create_services_table', 1),
(10, '2018_10_10_133334_create_inquiries_table', 1),
(11, '2018_10_11_172416_create_downloads_table', 1),
(12, '2018_10_12_185401_add_available_to_properties_table', 1),
(13, '2018_10_15_041804_add_best_photo_1_to_properties', 1),
(14, '2018_10_15_042053_add_best_photo_2_to_properties', 1),
(15, '2018_10_15_085647_create_download_categories_table', 1);

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
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Kalamu Apartments', 1, 2, 1, 200000, 1, 1, NULL, 'Furnished apartment', '1539723509.jpg', '1539723510.jpg', '1539723510.jpg', 0, NULL, '2018-10-16 17:58:31', '2018-10-16 17:58:31'),
(2, 'Mast', 2, 3, 2, 15000000, NULL, NULL, NULL, '5 acres', '1539723595.jpg', '1539723600.jpg', '1539723600.jpg', 0, NULL, '2018-10-16 18:00:00', '2018-10-16 18:00:00'),
(3, 'Adona', 3, 2, 3, 12000, 1, 1, NULL, 'Lodging', '1539723708.jpg', '1539723708.jpg', '1539723709.jpg', 0, NULL, '2018-10-16 18:01:49', '2018-10-16 18:01:49');

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
(1, 'Rent', '2018-10-16 17:55:22', '2018-10-16 17:55:22'),
(2, 'Sale', '2018-10-16 17:55:29', '2018-10-16 17:55:29'),
(3, 'Short stay', '2018-10-16 17:55:36', '2018-10-16 17:55:36');

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
(1, 'Commercial', '2018-10-16 17:56:50', '2018-10-16 17:56:50'),
(2, 'Apartment', '2018-10-16 17:56:57', '2018-10-16 17:56:57'),
(3, 'Land', '2018-10-16 17:57:04', '2018-10-16 17:57:04');

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
(3, 'Property Development', 'Property Development', '2018-10-10 08:21:10', '2018-10-10 08:21:10'),
(4, 'Property Consultancy', 'Property Consultancy', '2018-10-16 18:02:45', '2018-10-16 18:02:45'),
(5, 'Property Agency', 'Property Agency', '2018-10-16 18:05:22', '2018-10-16 18:05:22');

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
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `download_categories`
--
ALTER TABLE `download_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_purposes`
--
ALTER TABLE `property_purposes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
