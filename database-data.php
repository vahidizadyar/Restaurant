-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2019 at 09:25 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
`id` bigint(20) UNSIGNED NOT NULL,
`title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
`content` text COLLATE utf8mb4_unicode_ci,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'This is DARBAR RESTAURANT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.', '2019-10-18 20:30:00', '2019-10-18 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
`id` bigint(20) UNSIGNED NOT NULL,
`user_id` bigint(20) UNSIGNED NOT NULL,
`food_id` bigint(20) UNSIGNED NOT NULL,
`type` smallint(6) NOT NULL DEFAULT '0',
`content` text COLLATE utf8mb4_unicode_ci,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
`id` bigint(20) UNSIGNED NOT NULL,
`title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
`photo` text COLLATE utf8mb4_unicode_ci,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Main', NULL, '2019-10-15 20:30:00', '2019-10-26 12:43:44', NULL),
(2, 'Desert', NULL, '2019-10-15 20:30:00', '2019-10-24 13:36:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories_foods`
--

CREATE TABLE `categories_foods` (
`food_id` int(11) NOT NULL,
`category_id` int(11) NOT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_foods`
--

INSERT INTO `categories_foods` (`food_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2019-10-15 20:30:00', '2019-10-15 20:30:00', NULL),
(2, 2, '2019-10-15 20:30:00', '2019-10-15 20:30:00', NULL),
(3, 1, NULL, NULL, NULL),
(18, 1, NULL, NULL, NULL),
(19, 1, NULL, NULL, NULL),
(19, 2, NULL, NULL, NULL),
(20, 1, NULL, NULL, NULL),
(21, 1, NULL, NULL, NULL),
(22, 1, NULL, NULL, NULL),
(23, 1, NULL, NULL, NULL),
(24, 1, NULL, NULL, NULL),
(25, 1, NULL, NULL, NULL),
(26, 1, NULL, NULL, NULL),
(27, 2, NULL, NULL, NULL),
(28, 2, NULL, NULL, NULL),
(29, 2, NULL, NULL, NULL),
(30, 1, NULL, NULL, NULL),
(31, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
`id` bigint(20) UNSIGNED NOT NULL,
`title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
`slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`content` text COLLATE utf8mb4_unicode_ci,
`price` double NOT NULL DEFAULT '0',
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `title`, `slug`, `content`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pasta', 'first-food', 'This is a iranian food that iranian people love that, they coock and serve togheater  in party and enjoy from that\r\nhope you have enjoy with This Food in our Restuarent!', 15, '2019-10-15 20:30:00', '2019-10-15 20:30:00', NULL),
(2, 'Ghormeh', 'second-food', 'This is a iranian food that iranian people love that, they coock and serve togheater  in party and enjoy from that\r\nhope you have enjoy with This Food in our Restuarent!', 20, '2019-10-15 20:30:00', '2019-10-15 20:30:00', NULL),
(3, 'Gheimeh', 'third-food', 'This is a iranian food that iranian people love that, they coock and serve togheater  in party and enjoy from that\r\nhope you have enjoy with This Food in our Restuarent!', 25, '2019-10-15 20:30:00', '2019-10-24 07:13:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
`id` bigint(20) UNSIGNED NOT NULL,
`url` text COLLATE utf8mb4_unicode_ci,
`photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
`content` text COLLATE utf8mb4_unicode_ci,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `url`, `photo`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'https://www.google.com', '1572342448.png', 'This is a Test', '2019-10-29 09:47:28', '2019-10-29 09:48:29', NULL),
(2, 'http://127.0.0.1:8000', '1572363893.png', 'Test', '2019-10-29 15:44:53', '2019-10-29 15:46:52', '2019-10-29 15:46:52'),
(3, 'http://127.0.0.1:8000', '1572364032.png', 'asdasd', '2019-10-29 15:47:12', '2019-10-29 15:47:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
`id` bigint(20) UNSIGNED NOT NULL,
`title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
`slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', 'test-url', '2019-10-15 20:30:00', '2019-10-15 20:30:00', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_10_212427_create_foods_table', 1),
(4, '2019_10_10_212503_create_types_table', 1),
(5, '2019_10_10_212517_create_photos_table', 1),
(6, '2019_10_10_213412_create_menus_table', 1),
(7, '2019_10_10_221016_create_activities_table', 1),
(8, '2019_10_10_221534_create_ratings_table', 1),
(9, '2019_10_14_173813_create_categories_table', 1),
(10, '2019_10_15_214645_create_categories_foods_table', 1),
(11, '2019_10_19_143729_create_abouts_table', 2),
(12, '2019_10_29_122545_create_galleries_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
`email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
`id` bigint(20) UNSIGNED NOT NULL,
`food_id` bigint(20) UNSIGNED NOT NULL,
`url` text COLLATE utf8mb4_unicode_ci,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `food_id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 3, 'product-img1.jpg', '2019-10-18 20:30:00', '2019-10-18 20:30:00', NULL),
(11, 2, 'product-img2.jpg', '2019-10-18 20:30:00', '2019-10-18 20:30:00', NULL),
(12, 1, 'product-img3.jpg', '2019-10-18 20:30:00', '2019-10-18 20:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
`id` bigint(20) UNSIGNED NOT NULL,
`user_id` bigint(20) UNSIGNED NOT NULL,
`food_id` bigint(20) UNSIGNED NOT NULL,
`rate` double NOT NULL DEFAULT '0',
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `food_id`, `rate`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 4.5, '2019-10-15 20:30:00', '2019-10-29 20:47:27', '2019-10-29 20:47:27'),
(2, 2, 2, 4.5, '2019-10-15 20:30:00', '2019-10-15 20:30:00', NULL),
(3, 1, 3, 3.5, '2019-10-29 20:24:38', '2019-10-29 20:47:27', '2019-10-29 20:47:27'),
(4, 2, 3, 1, '2019-10-29 20:24:38', '2019-10-29 20:28:15', NULL),
(5, 10, 3, 5, '2019-10-29 20:24:38', '2019-10-29 20:28:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
`id` bigint(20) UNSIGNED NOT NULL,
`title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` bigint(20) UNSIGNED NOT NULL,
`name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`email_verified_at` timestamp NULL DEFAULT NULL,
`password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`role` tinyint(4) NOT NULL DEFAULT '1',
`ban` tinyint(1) NOT NULL DEFAULT '0',
`remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `ban`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$naHku02kGDE5xV.Q2BdpZuLkF2VVYwBeWoF/vTiKZYSqm5QH8uod2', 2, 0, NULL, '2019-10-23 18:22:21', '2019-10-29 20:47:30', NULL),
(2, 'test', 'test@gmail.com', NULL, '$2y$10$xCn4JCh3oJpT/p5V187q9egwC2KOvDsydGNWI95Pfh7ycrvJ2pJ5.', 1, 0, NULL, '2019-10-29 19:59:39', '2019-10-29 19:59:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
ADD PRIMARY KEY (`id`),
ADD KEY `activities_user_id_index` (`user_id`),
ADD KEY `activities_food_id_index` (`food_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `foods_slug_unique` (`slug`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `menus_slug_unique` (`slug`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
ADD PRIMARY KEY (`id`),
ADD KEY `photos_food_id_index` (`food_id`) USING BTREE;

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
ADD PRIMARY KEY (`id`),
ADD KEY `ratings_user_id_index` (`user_id`),
ADD KEY `ratings_food_id_index` (`food_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
