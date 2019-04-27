-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 07:58 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerse`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'BigBazar', 'BigBazar', 1, '2019-04-14 05:55:17', '2019-04-16 09:49:44'),
(5, 'MinaBazar', 'MinaBazar', 1, '2019-04-14 05:55:26', '2019-04-14 05:55:26'),
(7, 'Shopno', 'Shopno', 1, '2019-04-14 05:55:40', '2019-04-14 05:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Nuts', 'Different kind of Nuts', 0, '2019-04-14 05:54:05', '2019-04-16 09:49:52'),
(2, 'Oils', 'Oils', 0, '2019-04-14 05:54:18', '2019-04-15 11:53:53'),
(3, 'Pasta & Noodles', 'Pasta & Noodles', 1, '2019-04-14 05:54:38', '2019-04-14 22:44:08'),
(4, 'Sugar', 'Sugar', 1, '2019-04-14 06:08:28', '2019-04-14 06:08:28'),
(5, 'Chips', 'Chips', 1, '2019-04-14 06:10:59', '2019-04-14 06:10:59'),
(6, 'Meat', 'Meat', 1, '2019-04-14 06:13:23', '2019-04-14 06:13:23');

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
(3, '2019_04_06_055832_create_categories_table', 1),
(4, '2019_04_10_062000_create_brands_table', 1),
(5, '2019_04_13_041358_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 1, 5, 'Cashews', 100.00, 100, 'The cashew tree is a tropical evergreen tree that produces the cashew seed and the cashew apple. It can grow as high as 14 m, but the dwarf cashew, growing up to 6 m, has proved more profitable, with earlier maturity and higher yields.', 'The cashew tree is a tropical evergreen tree that produces the cashew seed and the cashew apple. It can grow as high as 14 m, but the dwarf cashew, growing up to 6 m, has proved more profitable, with earlier maturity and higher yields.', 'productimages/m2.jpg', 1, '2019-04-14 06:00:25', '2019-04-16 10:34:35'),
(3, 1, 4, 'Pistachios', 100.00, 100, 'The pistachio, a member of the cashew family, is a small tree originating from Central Asia and the Middle East. The tree produces seeds that are widely consumed as food. Pistacia vera often is confused with other species in the genus Pistacia that are also known as pistachio', 'The pistachio, a member of the cashew family, is a small tree originating from Central Asia and the Middle East. The tree produces seeds that are widely consumed as food. Pistacia vera often is confused with other species in the genus Pistacia that are also known as pistachio', 'productimages/m3.jpg', 1, '2019-04-14 06:01:15', '2019-04-14 23:39:46'),
(4, 2, 7, 'Freedom Oil', 50.00, 50, 'An oil is any nonpolar chemical substance that is a viscous liquid at ambient temperatures and is both hydrophobic and lipophilic. Oils have a high carbon and hydrogen content and are usually flammable and surface active', 'An oil is any nonpolar chemical substance that is a viscous liquid at ambient temperatures and is both hydrophobic and lipophilic. Oils have a high carbon and hydrogen content and are usually flammable and surface active', 'productimages/mk4.jpg', 1, '2019-04-14 06:03:14', '2019-04-16 10:34:40'),
(5, 2, 5, 'Saffola', 50.00, 50, 'An oil is any nonpolar chemical substance that is a viscous liquid at ambient temperatures and is both hydrophobic and lipophilic. Oils have a high carbon and hydrogen content and are usually flammable and surface active', 'An oil is any nonpolar chemical substance that is a viscous liquid at ambient temperatures and is both hydrophobic and lipophilic. Oils have a high carbon and hydrogen content and are usually flammable and surface active', 'productimages/mk5.jpg', 0, '2019-04-14 06:03:43', '2019-04-14 23:39:51'),
(7, 2, 4, 'Fortune Oil', 60.00, 60, 'An oil is any nonpolar chemical substance that is a viscous liquid at ambient temperatures and is both hydrophobic and lipophilic. Oils have a high carbon and hydrogen content and are usually flammable and surface active', 'An oil is any nonpolar chemical substance that is a viscous liquid at ambient temperatures and is both hydrophobic and lipophilic. Oils have a high carbon and hydrogen content and are usually flammable and surface active', 'productimages/mk6.jpg', 1, '2019-04-14 06:04:13', '2019-04-16 10:34:37'),
(8, 3, 4, 'Yippee Noodles', 20.00, 20, 'Noodles are unleavened dough which is stretched, extruded, or rolled flat and cut into one or a variety of shapes which usually include long, thin strips, or waves, helices, tubes, strings, or shells, or folded over, or cut into other shapes.', 'Noodles are unleavened dough which is stretched, extruded, or rolled flat and cut into one or a variety of shapes which usually include long, thin strips, or waves, helices, tubes, strings, or shells, or folded over, or cut into other shapes.', 'productimages/mk7.jpg', 1, '2019-04-14 06:05:14', '2019-04-14 06:05:14'),
(9, 3, 5, 'Wheat Pasta', 50.00, 50, 'Whole wheat pasta is healthier than white pasta, because it\'s packed with nutrients such as complex carbs, protein, fiber, iron, magnesium, and zinc. On the other hand, white pasta is made of refined carbs, meaning it has been stripped of many nutrients during its processing.O', 'Whole wheat pasta is healthier than white pasta, because it\'s packed with nutrients such as complex carbs, protein, fiber, iron, magnesium, and zinc. On the other hand, white pasta is made of refined carbs, meaning it has been stripped of many nutrients during its processing.O', 'productimages/mk8.jpg', 1, '2019-04-14 06:06:00', '2019-04-14 06:06:00'),
(11, 3, 7, 'Chinese Noodles', 25.00, 25, 'Whole wheat pasta is healthier than white pasta, because it\'s packed with nutrients such as complex carbs, protein, fiber, iron, magnesium, and zinc. On the other hand, white pasta is made of refined carbs, meaning it has been stripped of many nutrients during its processing.O', 'Whole wheat pasta is healthier than white pasta, because it\'s packed with nutrients such as complex carbs, protein, fiber, iron, magnesium, and zinc. On the other hand, white pasta is made of refined carbs, meaning it has been stripped of many nutrients during its processing.O', 'productimages/mk9.jpg', 1, '2019-04-14 06:06:40', '2019-04-14 06:06:40'),
(13, 4, 4, 'BigBazar sugar', 65.00, 65, 'Sugar is the generic name for sweet-tasting, soluble carbohydrates, many of which are used in food. The various types of sugar are derived from different sources. Simple sugars are called monosaccharides and include glucose, fructose, and galactose.', 'Sugar is the generic name for sweet-tasting, soluble carbohydrates, many of which are used in food. The various types of sugar are derived from different sources. Simple sugars are called monosaccharides and include glucose, fructose, and galactose.', 'productimages/s2.jpg', 1, '2019-04-14 06:09:39', '2019-04-14 06:09:39'),
(14, 4, 5, 'Mina Sugar', 60.00, 60, 'Sugar is the generic name for sweet-tasting, soluble carbohydrates, many of which are used in food. The various types of sugar are derived from different sources. Simple sugars are called monosaccharides and include glucose, fructose, and galactose.', 'Sugar is the generic name for sweet-tasting, soluble carbohydrates, many of which are used in food. The various types of sugar are derived from different sources. Simple sugars are called monosaccharides and include glucose, fructose, and galactose.', 'productimages/s2.jpg', 1, '2019-04-14 06:10:30', '2019-04-14 06:10:30'),
(15, 5, 4, 'Chips', 10.00, 10, 'Potato chips, or crisps, are thin slices of potato that have been deep fried or baked until crunchy. They are commonly served as a snack, side dish, or appetizer.', 'Potato chips, or crisps, are thin slices of potato that have been deep fried or baked until crunchy. They are commonly served as a snack, side dish, or appetizer.', 'productimages/d1.jpg', 1, '2019-04-14 06:12:01', '2019-04-14 06:12:01'),
(16, 6, 7, 'Beef', 480.00, 480, 'the culinary name for meat from cattle, particularly skeletal muscle. Humans have been eating beef since prehistoric times. Beef is a source of high-quality protein and nutrients.', 'the culinary name for meat from cattle, particularly skeletal muscle. Humans have been eating beef since prehistoric times. Beef is a source of high-quality protein and nutrients.', 'productimages/cow.jpg', 1, '2019-04-14 06:14:55', '2019-04-14 06:14:55'),
(17, 6, 5, 'Beef', 520.00, 520, 'Beef is the culinary name for meat from cattle, particularly skeletal muscle. Humans have been eating beef since prehistoric times. Beef is a source of high-quality protein and nutrients.', 'Beef is the culinary name for meat from cattle, particularly skeletal muscle. Humans have been eating beef since prehistoric times. Beef is a source of high-quality protein and nutrients.', 'productimages/cow2.jpg', 1, '2019-04-14 06:16:01', '2019-04-14 06:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Tarif', 'admin@admin.com', NULL, '$2y$10$zaRocEXOUpe1ZPGiXdvri.ojMr8YEQjZ.8zjchwsOHGIHRrSiOhYi', NULL, '2019-04-14 21:23:13', '2019-04-14 21:23:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
