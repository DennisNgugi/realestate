-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 02:35 PM
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
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `category_id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 'Application to Let', 'Application to Let Net.pdf', '2018-10-30 03:13:13', '2018-10-30 03:13:13'),
(2, 1, 'Commercial Lease', 'Commercial Lease Net.pdf', '2018-10-30 03:13:47', '2018-10-30 03:13:47'),
(3, 3, 'Housing Act', 'HousingAct17of1953.pdf', '2018-10-30 03:14:22', '2018-10-30 03:14:22'),
(4, 3, 'Nema Act', 'NEMA act.pdf', '2018-10-30 03:14:49', '2018-10-30 03:14:49');

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
(1, 'Realmast documents', '2018-10-22 09:56:06', '2018-10-22 09:56:06'),
(2, 'Sample bronchures', '2018-10-22 09:57:04', '2018-10-22 09:57:04'),
(3, 'Relevant Acts', '2018-10-22 09:57:16', '2018-10-30 03:12:29');

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
(1, 1, '1540822364.jpg', '2018-10-29 11:12:45', '2018-10-29 11:12:45'),
(2, 1, '1540822365.jpg', '2018-10-29 11:12:45', '2018-10-29 11:12:45'),
(3, 1, '1540822365.jpg', '2018-10-29 11:12:46', '2018-10-29 11:12:46'),
(4, 1, '1540822366.jpg', '2018-10-29 11:12:46', '2018-10-29 11:12:46'),
(5, 1, '1540822444.jpg', '2018-10-29 11:14:05', '2018-10-29 11:14:05'),
(6, 1, '1540822445.jpg', '2018-10-29 11:14:05', '2018-10-29 11:14:05'),
(7, 1, '1540822445.jpg', '2018-10-29 11:14:06', '2018-10-29 11:14:06'),
(8, 1, '1540822446.jpg', '2018-10-29 11:14:06', '2018-10-29 11:14:06'),
(9, 4, '91430385.jpg', '2018-10-30 04:17:35', '2018-10-30 04:17:35'),
(10, 4, '91477440.jpg', '2018-10-30 04:17:35', '2018-10-30 04:17:35'),
(11, 4, '91481398.jpg', '2018-10-30 04:17:36', '2018-10-30 04:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `property_id`, `firstname`, `lastname`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(5, 4, 'Bruce', 'William', 'bruce@gmail.com', '78998629', 'Requested', '2018-10-30 05:49:59', '2018-10-30 05:49:59');

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
(15, '2018_10_15_085647_create_download_categories_table', 1),
(16, '2018_10_19_041324_create_logos_table', 2),
(17, '2018_10_27_114938_create_inquiries_table', 3),
(18, '2018_10_27_120214_create_inquiries_table', 4),
(19, '2018_10_28_112630_create_inquiries_table', 5),
(20, '2018_10_29_140831_create_images_table', 6),
(21, '2018_10_30_060633_create_downloads_table', 7),
(22, '2018_10_30_095517_add_square_foot_to_properties', 8);

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
  `square_foot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `properties` (`id`, `property_name`, `property_purpose_id`, `property_type_id`, `location_id`, `price`, `bedrooms`, `bathrooms`, `garage`, `square_foot`, `description`, `featured_image`, `best_photo_1`, `best_photo_2`, `status`, `available`, `created_at`, `updated_at`) VALUES
(1, 'Kalamu Apartments', 2, 3, 3, 200000, 1, 1, NULL, NULL, 'Furnished apartment', '91430385.jpg', '1539723510.jpg', '1539723510.jpg', 0, '2018-10-18', '2018-10-16 17:58:31', '2018-10-29 10:23:58'),
(2, 'Mast', 2, 3, 2, 15000000, NULL, NULL, NULL, NULL, '5 acres', '1539723595.jpg', '1539723600.jpg', '1539723600.jpg', 0, NULL, '2018-10-16 18:00:00', '2018-10-16 18:00:00'),
(4, 'Fort', 2, 3, 2, 200000, NULL, NULL, NULL, NULL, '20 acres', '1540224485.jpg', '1540224487.jpg', '1540224487.jpg', 0, '2018-10-11', '2018-10-22 13:08:07', '2018-10-30 08:37:07'),
(5, 'Mukuru', 2, 3, 3, 1000000, NULL, NULL, NULL, '5000', 'Land', '91430357.jpg', '91481398.jpg', '91430385.jpg', 0, NULL, '2018-10-30 07:07:52', '2018-10-30 07:07:52');

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
(1, 'Property Valuation', 'Realmast inspects and values real estate for the various purposes such as open market value for\r\nmortgage, insurance, rental assessments, sale, auction and forced sale. We have adequate\r\nindemnity cover and we abide by the laid down code of conduct and professional ethics. Our\r\nvaluations have clear illustrations and reports depict a visual image of the property.', '2018-10-10 05:56:17', '2018-10-30 09:03:49'),
(2, 'Property Management', 'Realmast handles residential, commercial and industrial property management issues offering\r\nproperty management services to our clients at the recommended rates. Our strengths in\r\nmanagement are efficiency, effectiveness, periodic appraisals and personal touch. The vast\r\nexperience and continuous exposure over time enables us to advise our clients on the best solutions \r\nto the problems encountered in the management of property and our management department\r\nensures that all clients are served appropriately.', '2018-10-10 08:20:19', '2018-10-30 09:05:26'),
(3, 'Property Development', 'Property Development', '2018-10-10 08:21:10', '2018-10-10 08:21:10'),
(4, 'Property Consultancy Agency', 'We at Realmast have in depth knowledge and competent understanding of the real estate sector.\r\nWe offer consultancy in the following among others:\r\ni) Investment appraisal and preparation of feasibility studies\r\nii) Project management\r\niii) Advice to building design team on matters related to marketing of premises and expected\r\nreturns.\r\niv) Resolution of real estate disputes\r\nv) Negotiation of mortgage finance on behalf of clients\r\nvi) Negotiation of business ventures on behalf of clients\r\nOur consultants enable you to save on costs and have a broader view of your investment decisions\r\nand their implications hence advising you accordingly.', '2018-10-16 18:02:45', '2018-10-30 09:06:05');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Z0rIRKTvKGOUVnW5G3j4.OlKVVQ8YZqx2RGONSzltYA6wyqRk2aLe', 'jzMORCDs9Whd8g5ES1ztsO73uudOYPq0L5rpkirHibQydDBrYb9Fdtuh9HrW', '2018-10-22 15:15:46', '2018-10-22 15:15:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `downloads_category_id_foreign` (`category_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `inquiries_property_id_foreign` (`property_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `download_categories`
--
ALTER TABLE `download_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `download_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD CONSTRAINT `inquiries_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
