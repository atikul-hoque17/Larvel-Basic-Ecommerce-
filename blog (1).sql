-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 10:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Y7VJOtB4cloBpLQcfpFDMOjZQq/ileNe17LED5fEIwFRh7aA.RzH.', NULL, '2020-03-01 10:59:02', '2020-03-02 06:08:14'),
(2, 'Atikul Hoque', 'atikulhoque17@gmail.com', '$2y$10$07h3oxg/i6wjPuOjQQpcAe4zbJID8LOUf5eVS4XeF9ErLnGjJNLyC', NULL, '2020-03-01 12:11:58', '2020-03-01 12:11:58'),
(3, 'Emon', 'atikulhoque1717@gmail.com', '$2y$10$JJPTfOKCwUbMNzBlHy3qhuC8zKLdahH4mE6dPEBkx1Yis2hdgIT1O', NULL, '2020-03-09 07:38:19', '2020-03-09 07:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `shortDescription` varchar(200) NOT NULL,
  `publicationStatus` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `shortDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 'This is for Panjabai', 1, '2020-04-07 17:37:09', '2020-03-04'),
(2, 'Three Pice', 'This is for three pice', 1, '2020-05-16 19:31:18', '2020-05-16'),
(3, 'Sharee', 'This is for woman', 1, '2020-03-03 12:26:13', '2020-03-03'),
(6, 'Mens Wallet', 'This is for wallet', 1, '2020-04-07 13:55:21', '2020-04-07'),
(7, 'Footware', 'This is for footware', 1, '2020-03-09 08:37:31', '2020-03-09'),
(8, 'Watch', 'this is for watch', 1, '2020-03-09 08:42:59', '2020-03-09'),
(9, 'Jewellery', 'This is for jewellery', 1, '2020-03-10 05:34:23', '2020-03-10'),
(10, 'Ladies Bag', 'This is for ladies bag', 1, '2020-04-21 18:09:01', '2020-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfos`
--

CREATE TABLE `customerinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transactionno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customerinfos`
--

INSERT INTO `customerinfos` (`id`, `user_id`, `order_number`, `subtotal`, `firstname`, `email`, `contactno`, `address`, `city`, `zip`, `orderdate`, `transactionno`, `status`, `created_at`, `updated_at`) VALUES
(36, '1', '26997', '33,160.00', 'Atikul Hoque', 'atikulhoque17@gmail.com', 1913229782, 'Dhanmondi Dhaka', 'Dhaka', '1209', '2020-04-07', 'efsgfdhgjhjk', 4, '2020-04-07 12:03:13', '2020-05-16 14:02:17');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2018_07_28_133433_create_admins_table', 2),
(5, '2014_10_12_000000_create_categories_table', 3),
(6, '2014_10_12_000000_create_categoriess_table', 4),
(7, '2014_10_12_000000_create_products_table', 5),
(8, '2014_10_12_000000_create_orders_table', 6),
(9, '2020_03_31_183831_create_customerinfos_table', 7),
(10, '2020_03_31_184045_create_orders_table', 8),
(11, '2020_03_31_185647_create_orders_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `pro_id`, `pro_name`, `pro_qty`, `pro_price`, `created_at`, `updated_at`) VALUES
(47, '26997', '72', 'Casual Shirt', '5', '232', '2020-04-07 12:03:13', '2020-04-07 12:03:13'),
(48, '26997', '58', 'sharee', '5', '2000', '2020-04-07 12:03:13', '2020-04-07 12:03:13'),
(49, '26997', '57', 'Sahree Katan', '4', '1300', '2020-04-07 12:03:13', '2020-04-07 12:03:13'),
(50, '26997', '51', 'Menz Shoes', '3', '5600', '2020-04-07 12:03:13', '2020-04-07 12:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('a@gmail.com', '$2y$10$bD7Uel4Hj7UscM1/75.h.umdvqYozBgB59T6IP3GDj6yjo.b3T51a', '2020-03-01 10:28:02'),
('atikulhoque17@gmail.com', '$2y$10$dEp4IyeWfpSOrddlr9s3POyKLbfJREF9LDQQWps42rvxEKhPomiYO', '2020-03-01 12:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caregoryId` tinyint(4) NOT NULL,
  `price` double(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `prostatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `caregoryId`, `price`, `qty`, `Description`, `pic`, `publicationStatus`, `prostatus`, `created_at`, `updated_at`) VALUES
(44, 'Wallet', 6, 320.00, 300, 'This is very good leather wallet', 'productImage/44ssb_sb-w19_100_genuine_short_leather_wallet_agun_11.jpg', 1, '3', '2020-03-29 09:33:49', '2020-04-04 03:04:19'),
(51, 'Menz Shoes', 7, 5600.00, 60, 'This is very good leather shoe', 'productImage/5130688_shoe-png.png', 1, '2', '2020-03-29 11:31:25', '2020-04-04 03:05:19'),
(54, 'Ladies Border Saree', 3, 2600.00, 40, 'Buy Border Saree at best price of Rs 1800 /piece from Expo International. Also find here related product comparison.', 'productImage/54914PDvcwDML._UX569_.jpg', 1, '1', '2020-04-07 08:02:30', '2020-04-07 08:02:30'),
(55, 'Sharda Sarees Blue', 3, 2300.00, 20, 'Pattern\r\n\r\nTraditional Tangail katan share by handloom\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nBeautiful colors, which looks very Gorgeous.  Color may vary of different monitor screen or due to flash light used in photography\r\n\r\nCare instruction\r\n\r\nDry wash\r\n\r\n \r\n\r\nSharee Details:\r\n\r\nRegion\r\n\r\nTangail, Bangladesh\r\n\r\nMain Fabric\r\n\r\nPoly mixed silk\r\n\r\nMaking process\r\n\r\nHandloom\r\n\r\nBlouse Piece\r\n\r\nYes', 'productImage/55designer-saree-500x500.png', 1, '1', '2020-04-07 08:05:33', '2020-04-07 08:05:33'),
(56, 'Sahree Katan', 3, 1200.00, 20, 'Pattern\r\n\r\nTraditional Tangail katan share by handloom\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nBeautiful colors, which looks very Gorgeous.  Color may vary of different monitor screen or due to flash light used in photography\r\n\r\nCare instruction\r\n\r\nDry wash\r\n\r\n \r\n\r\nSharee Details:\r\n\r\nRegion\r\n\r\nTangail, Bangladesh\r\n\r\nMain Fabric\r\n\r\nPoly mixed silk\r\n\r\nMaking process\r\n\r\nHandloom\r\n\r\nBlouse Piece\r\n\r\nYes', 'productImage/56printed-saree-500x500.jpg', 1, '2', '2020-04-07 08:06:39', '2020-04-07 08:06:39'),
(57, 'Sahree Katan', 3, 1300.00, 10, 'Pattern\r\n\r\nTraditional Tangail katan share by handloom\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nBeautiful colors, which looks very Gorgeous.  Color may vary of different monitor screen or due to flash light used in photography\r\n\r\nCare instruction\r\n\r\nDry wash\r\n\r\n \r\n\r\nSharee Details:\r\n\r\nRegion\r\n\r\nTangail, Bangladesh\r\n\r\nMain Fabric\r\n\r\nPoly mixed silk\r\n\r\nMaking process\r\n\r\nHandloom\r\n\r\nBlouse Piece\r\n\r\nYes', 'productImage/57unnamed.jpg', 1, '3', '2020-04-07 08:07:49', '2020-04-07 08:07:49'),
(58, 'sharee', 3, 2000.00, 10, 'Pattern\r\n\r\nTraditional Tangail katan share by handloom\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nBeautiful colors, which looks very Gorgeous.  Color may vary of different monitor screen or due to flash light used in photography\r\n\r\nCare instruction\r\n\r\nDry wash\r\n\r\n \r\n\r\nSharee Details:\r\n\r\nRegion\r\n\r\nTangail, Bangladesh\r\n\r\nMain Fabric\r\n\r\nPoly mixed silk\r\n\r\nMaking process\r\n\r\nHandloom\r\n\r\nBlouse Piece\r\n\r\nYes', 'productImage/58trendy-bhagalpuri-silk-saree-500x500.jpg', 1, '2', '2020-04-07 08:08:37', '2020-04-07 08:08:37'),
(59, 'Sahree Katan', 3, 1500.00, 12, 'Pattern\r\n\r\nTraditional Tangail katan share by handloom\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nBeautiful colors, which looks very Gorgeous.  Color may vary of different monitor screen or due to flash light used in photography\r\n\r\nCare instruction\r\n\r\nDry wash\r\n\r\n \r\n\r\nSharee Details:\r\n\r\nRegion\r\n\r\nTangail, Bangladesh\r\n\r\nMain Fabric\r\n\r\nPoly mixed silk\r\n\r\nMaking process\r\n\r\nHandloom\r\n\r\nBlouse Piece\r\n\r\nYes', 'productImage/59ladies-saree-500x500 (1).jpg', 1, '3', '2020-04-07 08:10:10', '2020-04-07 08:10:10'),
(60, 'Sharda Sarees Blue', 3, 1400.00, 13, 'Pattern\r\n\r\nTraditional Tangail katan share by handloom\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nBeautiful colors, which looks very Gorgeous.  Color may vary of different monitor screen or due to flash light used in photography\r\n\r\nCare instruction\r\n\r\nDry wash\r\n\r\n \r\n\r\nSharee Details:\r\n\r\nRegion\r\n\r\nTangail, Bangladesh\r\n\r\nMain Fabric\r\n\r\nPoly mixed silk\r\n\r\nMaking process\r\n\r\nHandloom\r\n\r\nBlouse Piece\r\n\r\nYes', 'productImage/60ladies-saree-500x500.jpg', 1, '1', '2020-04-07 08:10:49', '2020-04-07 08:10:49'),
(61, 'Sahree Katan', 3, 3000.00, 12, 'Pattern\r\n\r\nTraditional Tangail katan share by handloom\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nBeautiful colors, which looks very Gorgeous.  Color may vary of different monitor screen or due to flash light used in photography\r\n\r\nCare instruction\r\n\r\nDry wash\r\n\r\n \r\n\r\nSharee Details:\r\n\r\nRegion\r\n\r\nTangail, Bangladesh\r\n\r\nMain Fabric\r\n\r\nPoly mixed silk\r\n\r\nMaking process\r\n\r\nHandloom\r\n\r\nBlouse Piece\r\n\r\nYes', 'productImage/61ladies-border-saree-500x500.jpg', 1, '2', '2020-04-07 08:13:30', '2020-04-07 08:13:30'),
(62, 'Necklace set', 9, 1400.00, 12, 'Type\r\n\r\nNecklace set with pair of earring\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For \r\n\r\nWomen\r\n\r\nCare instruction\r\n\r\nAvoid of contact with water and organic chemicals i.e. perfume sprays. After use, wipe the jewellery with soft cotton cloth\r\n\r\nFinishing\r\n\r\nGlossy  \r\n\r\nBase Material\r\n\r\nAlloy\r\n\r\nPlating\r\n\r\nGold\r\n\r\nPiercing\r\n\r\nYes\r\n\r\nPacking Details\r\n\r\n1 necklace and 1 pair of earring\r\n\r\nGuarantee\r\n\r\nColor guarantee 3/4 years, if you follow our caring instruction', 'productImage/6271At5PP81cL._UL1001_.jpg', 1, '1', '2020-04-07 08:22:32', '2020-04-07 11:19:31'),
(63, 'Necklace set', 9, 230.00, 12, 'Type\r\n\r\nNecklace set with pair of earring\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For \r\n\r\nWomen\r\n\r\nCare instruction\r\n\r\nAvoid of contact with water and organic chemicals i.e. perfume sprays. After use, wipe the jewellery with soft cotton cloth\r\n\r\nFinishing\r\n\r\nGlossy  \r\n\r\nBase Material\r\n\r\nAlloy\r\n\r\nPlating\r\n\r\nGold\r\n\r\nPiercing\r\n\r\nYes\r\n\r\nPacking Details\r\n\r\n1 necklace and 1 pair of earring\r\n\r\nGuarantee\r\n\r\nColor guarantee 3/4 years, if you follow our caring instruction', 'productImage/6371U0OKbYmHL._UY662___01651.1511162070.jpg', 1, '2', '2020-04-07 11:20:17', '2020-04-07 11:20:17'),
(64, 'Necklace set', 9, 340.00, 24, 'Type\r\n\r\nNecklace set with pair of earring\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For \r\n\r\nWomen\r\n\r\nCare instruction\r\n\r\nAvoid of contact with water and organic chemicals i.e. perfume sprays. After use, wipe the jewellery with soft cotton cloth\r\n\r\nFinishing\r\n\r\nGlossy  \r\n\r\nBase Material\r\n\r\nAlloy\r\n\r\nPlating\r\n\r\nGold\r\n\r\nPiercing\r\n\r\nYes\r\n\r\nPacking Details\r\n\r\n1 necklace and 1 pair of earring\r\n\r\nGuarantee\r\n\r\nColor guarantee 3/4 years, if you follow our caring instruction', 'productImage/6481gWL4KCQdL._UX662___80356.1511162058.jpg', 1, '3', '2020-04-07 11:20:44', '2020-04-07 11:20:44'),
(65, 'Necklace set', 9, 346.00, 23, 'Type\r\n\r\nNecklace set with pair of earring\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For \r\n\r\nWomen\r\n\r\nCare instruction\r\n\r\nAvoid of contact with water and organic chemicals i.e. perfume sprays. After use, wipe the jewellery with soft cotton cloth\r\n\r\nFinishing\r\n\r\nGlossy  \r\n\r\nBase Material\r\n\r\nAlloy\r\n\r\nPlating\r\n\r\nGold\r\n\r\nPiercing\r\n\r\nYes\r\n\r\nPacking Details\r\n\r\n1 necklace and 1 pair of earring\r\n\r\nGuarantee\r\n\r\nColor guarantee 3/4 years, if you follow our caring instruction', 'productImage/6581m4oVSlJcL._UY395_.jpg', 1, '2', '2020-04-07 11:21:01', '2020-04-07 11:21:14'),
(66, 'Asbah’s Shalwar Kamiz', 2, 2134.00, 23, 'Type\r\n\r\nUnstitched Suit, Salwar and Dupatta with lining , 4 pices.\r\n\r\nMain Fabric\r\n\r\nGeorgette\r\n\r\nSalwar Fabric\r\n\r\nSantoon, Poly mixed\r\n\r\nInner Fabric\r\n\r\nSantoon, Poly mixed\r\n\r\nDupatta Fabric\r\n\r\nCrape Georgette.\r\n\r\n \r\n\r\nDimension\r\n\r\nTop Length\r\n\r\n47”\r\n\r\nTop width\r\n\r\n66”\r\n\r\n \r\n\r\nGeneral Details\r\n\r\nPattern\r\n\r\nAll over embroidery, neck- yolk and long sleeve with embroidery in sleeve end.\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nOlive, Color may vary of different monitor screen.\r\n\r\nCare instruction\r\n\r\nDry wash.\r\n\r\nPattern\r\n\r\nAll over embroidery, neck- yolk and long sleeve with embroidery in sleeve end.', 'productImage/6651Kxo+VJARL._AC_UX679_.jpg', 1, '1', '2020-04-07 11:27:27', '2020-04-07 11:27:27'),
(67, 'Asbah’s Shalwar Kamiz', 2, 4245.00, 32, 'Type\r\n\r\nUnstitched Suit, Salwar and Dupatta with lining , 4 pices.\r\n\r\nMain Fabric\r\n\r\nGeorgette\r\n\r\nSalwar Fabric\r\n\r\nSantoon, Poly mixed\r\n\r\nInner Fabric\r\n\r\nSantoon, Poly mixed\r\n\r\nDupatta Fabric\r\n\r\nCrape Georgette.\r\n\r\n \r\n\r\nDimension\r\n\r\nTop Length\r\n\r\n47”\r\n\r\nTop width\r\n\r\n66”\r\n\r\n \r\n\r\nGeneral Details\r\n\r\nPattern\r\n\r\nAll over embroidery, neck- yolk and long sleeve with embroidery in sleeve end.\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nOlive, Color may vary of different monitor screen.\r\n\r\nCare instruction\r\n\r\nDry wash.\r\n\r\nPattern\r\n\r\nAll over embroidery, neck- yolk and long sleeve with embroidery in sleeve end.', 'productImage/671354617032020-Yellow-Cotton-Dhoti-Salwar-Suit.jpg', 1, '2', '2020-04-07 11:28:02', '2020-04-07 11:28:02'),
(68, 'Asbah’s Shalwar Kamiz', 2, 2344.00, 23, 'Type\r\n\r\nUnstitched Suit, Salwar and Dupatta with lining , 4 pices.\r\n\r\nMain Fabric\r\n\r\nGeorgette\r\n\r\nSalwar Fabric\r\n\r\nSantoon, Poly mixed\r\n\r\nInner Fabric\r\n\r\nSantoon, Poly mixed\r\n\r\nDupatta Fabric\r\n\r\nCrape Georgette.\r\n\r\n \r\n\r\nDimension\r\n\r\nTop Length\r\n\r\n47”\r\n\r\nTop width\r\n\r\n66”\r\n\r\n \r\n\r\nGeneral Details\r\n\r\nPattern\r\n\r\nAll over embroidery, neck- yolk and long sleeve with embroidery in sleeve end.\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nOlive, Color may vary of different monitor screen.\r\n\r\nCare instruction\r\n\r\nDry wash.\r\n\r\nPattern\r\n\r\nAll over embroidery, neck- yolk and long sleeve with embroidery in sleeve end.', 'productImage/68707D1002-Beige-Navy-Blue-color-Rayon-Salwar-Kameez_SK2112.jpg', 1, '3', '2020-04-07 11:28:36', '2020-04-07 11:28:36'),
(69, 'Asbah’s Shalwar Kamiz', 2, 2133.00, 23, 'Type\r\n\r\nUnstitched Suit, Salwar and Dupatta with lining , 4 pices.\r\n\r\nMain Fabric\r\n\r\nGeorgette\r\n\r\nSalwar Fabric\r\n\r\nSantoon, Poly mixed\r\n\r\nInner Fabric\r\n\r\nSantoon, Poly mixed\r\n\r\nDupatta Fabric\r\n\r\nCrape Georgette.\r\n\r\n \r\n\r\nDimension\r\n\r\nTop Length\r\n\r\n47”\r\n\r\nTop width\r\n\r\n66”\r\n\r\n \r\n\r\nGeneral Details\r\n\r\nPattern\r\n\r\nAll over embroidery, neck- yolk and long sleeve with embroidery in sleeve end.\r\n\r\nOccasion\r\n\r\nParty\r\n\r\nIdeal For\r\n\r\nWomen\r\n\r\nColor\r\n\r\nOlive, Color may vary of different monitor screen.\r\n\r\nCare instruction\r\n\r\nDry wash.\r\n\r\nPattern\r\n\r\nAll over embroidery, neck- yolk and long sleeve with embroidery in sleeve end.', 'productImage/692818sl01-92001.jpg', 1, '1', '2020-04-07 11:29:01', '2020-04-07 11:29:01'),
(70, 'Ladies Handbag', 10, 3244.00, 23, 'Product Type: Shoulder Bag.\r\nModel No: MYSL1550B.\r\nStyle: Elegant.\r\nInner contains a main pocket.\r\nA cell phone pocket.\r\nA document bag.\r\nA small patch pouch, and a zipper pocket.\r\nLarge capacity.\r\nSuitable for holding your cell phone, wallet, papers and so on.\r\nMaterial: PU leather.\r\nSize: 31 x 21 x 16cm (L x H x T).\r\nPortable height: 8cm.\r\nShoulder strap length: 120cm (adjustable).\r\nFashionable to use.\r\nComfortable to use.\r\nExpress your unique sense of style.\r\nEasy to carry.\r\nLatest design, outstanding quality and value.\r\nGender: Women.', 'productImage/70designer-ladies-bag-500x500.jpg', 1, '1', '2020-04-07 11:33:25', '2020-04-07 11:33:25'),
(71, 'Ladies Handbag', 10, 3444.00, 34, 'Product Type: Shoulder Bag.\r\nModel No: MYSL1550B.\r\nStyle: Elegant.\r\nInner contains a main pocket.\r\nA cell phone pocket.\r\nA document bag.\r\nA small patch pouch, and a zipper pocket.\r\nLarge capacity.\r\nSuitable for holding your cell phone, wallet, papers and so on.\r\nMaterial: PU leather.\r\nSize: 31 x 21 x 16cm (L x H x T).\r\nPortable height: 8cm.\r\nShoulder strap length: 120cm (adjustable).\r\nFashionable to use.\r\nComfortable to use.\r\nExpress your unique sense of style.\r\nEasy to carry.\r\nLatest design, outstanding quality and value.\r\nGender: Women.', 'productImage/71469ba43cc6e41cdb1ed3f4b8101f6e65.jpg', 1, '2', '2020-04-07 11:34:02', '2020-04-07 11:34:02'),
(72, 'Casual Shirt', 1, 232.00, 23, 'Full Sleeve Casual Shirt for Men TF-050.\r\nProduct Type: Casual Shirt.\r\nFabric: Cotton 98%, Mixed 2%.\r\nGarments Fabrics.\r\nExport Quality.\r\nSlim Fit.\r\nSize: M, L, XL.\r\nMeasurement (In Inch): M (Chest 39\", Length 28.5\"), L (Chest 41\", Length 29.5\"), XL (Chest 43\", Length 30.5\").\r\nColor: As same as picture.\r\nDisclaimer: Product color may slightly vary due to photography, lighting sources or your monitor settings.', 'productImage/7291OjM6rZWJL._UY550_.jpg', 1, '1', '2020-04-07 11:37:35', '2020-04-07 11:37:35'),
(73, 'Casual Shirt', 1, 234.00, 23, 'Full Sleeve Casual Shirt for Men TF-050.\r\nProduct Type: Casual Shirt.\r\nFabric: Cotton 98%, Mixed 2%.\r\nGarments Fabrics.\r\nExport Quality.\r\nSlim Fit.\r\nSize: M, L, XL.\r\nMeasurement (In Inch): M (Chest 39\", Length 28.5\"), L (Chest 41\", Length 29.5\"), XL (Chest 43\", Length 30.5\").\r\nColor: As same as picture.\r\nDisclaimer: Product color may slightly vary due to photography, lighting sources or your monitor settings.', 'productImage/73formal-shirts-for-men-dark-green-shirt-mens-supplier-500x500.jpg', 1, '1', '2020-04-07 11:38:51', '2020-04-07 11:38:51'),
(74, 'Casual Shirt', 1, 255.00, 23, 'Full Sleeve Casual Shirt for Men TF-050.\r\nProduct Type: Casual Shirt.\r\nFabric: Cotton 98%, Mixed 2%.\r\nGarments Fabrics.\r\nExport Quality.\r\nSlim Fit.\r\nSize: M, L, XL.\r\nMeasurement (In Inch): M (Chest 39\", Length 28.5\"), L (Chest 41\", Length 29.5\"), XL (Chest 43\", Length 30.5\").\r\nColor: As same as picture.\r\nDisclaimer: Product color may slightly vary due to photography, lighting sources or your monitor settings.', 'productImage/7467c920fd72f9e026096873975754d6a3.jpg', 1, '2', '2020-04-07 11:39:14', '2020-04-07 11:39:14'),
(75, 'Casual Shirt', 1, 566.00, 23, 'Full Sleeve Casual Shirt for Men TF-050.\r\nProduct Type: Casual Shirt.\r\nFabric: Cotton 98%, Mixed 2%.\r\nGarments Fabrics.\r\nExport Quality.\r\nSlim Fit.\r\nSize: M, L, XL.\r\nMeasurement (In Inch): M (Chest 39\", Length 28.5\"), L (Chest 41\", Length 29.5\"), XL (Chest 43\", Length 30.5\").\r\nColor: As same as picture.\r\nDisclaimer: Product color may slightly vary due to photography, lighting sources or your monitor settings.', 'productImage/753xl-twtblshirtful-sh4-tripr-original-imaffycxgppmkknv.jpeg', 1, '3', '2020-04-07 11:40:04', '2020-04-07 11:40:04'),
(76, 'Luxary Watch', 8, 4555.00, 33, 'Brand: Diesel.\r\nGender: Men.\r\nModel: DZ4474.\r\nModel Year: 2018.\r\nItem Shape: Round.\r\nDial window material type: Mineral.\r\nDisplay Type: Analog.\r\nClasp: Fold-over-clasp-with-double-push-button-safety.\r\nCase material: Stainless steel.\r\nCase diameter: 47 millimeters.\r\nCase Thickness: 13 millimeters.\r\nBand Material: Stainless Steel.\r\nBand length: 9.5 inches.\r\nBand width: 10 millimeters.\r\nBand Color: Black.\r\nDial color: Grey.\r\nBezel material: Stainless steel.\r\nBezel function: Stationary.\r\nCalendar: Date.\r\nItem weight: 5.4 Ounces.\r\nMovement: Japanese Quartz.\r\nWater-resistant depth: 165 Feet.\r\nWarranty: 2 Years of service warranty. The warranty card will be attached to the watch box.', 'productImage/76WPD-Article-Images-21.png', 1, '1', '2020-04-07 11:42:59', '2020-04-07 11:42:59'),
(77, 'Luxary Watch', 8, 3444.00, 34, 'Brand: Diesel.\r\nGender: Men.\r\nModel: DZ4474.\r\nModel Year: 2018.\r\nItem Shape: Round.\r\nDial window material type: Mineral.\r\nDisplay Type: Analog.\r\nClasp: Fold-over-clasp-with-double-push-button-safety.\r\nCase material: Stainless steel.\r\nCase diameter: 47 millimeters.\r\nCase Thickness: 13 millimeters.\r\nBand Material: Stainless Steel.\r\nBand length: 9.5 inches.\r\nBand width: 10 millimeters.\r\nBand Color: Black.\r\nDial color: Grey.\r\nBezel material: Stainless steel.\r\nBezel function: Stationary.\r\nCalendar: Date.\r\nItem weight: 5.4 Ounces.\r\nMovement: Japanese Quartz.\r\nWater-resistant depth: 165 Feet.\r\nWarranty: 2 Years of service warranty. The warranty card will be attached to the watch box.', 'productImage/77images.jpg', 1, '2', '2020-04-07 11:44:08', '2020-04-07 11:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Atikul Hoque', 'a@gmail.com', NULL, '$2y$10$1baknzxbmW1N7SnbmqTeju/SlWWnt/io4r9HKck6xjbHh9q6F4ouW', NULL, '2020-03-01 10:27:50', '2020-03-01 10:27:50'),
(3, 'Emon', 'atikulhoque17@gmail.com', NULL, '$2y$10$d7duj/jlUuDmgJ340ldnWeaAeM31wVoduEB35bmDZAU7V/mdJieke', NULL, '2020-03-31 04:04:21', '2020-03-31 04:04:21'),
(4, 'Ahmed Reza', 'reza@gmail.com', NULL, '$2y$10$GH8kh0JVHGbuUr.GLyxxu.2z375zI/P28BezM4rGiy/ZkhURgq8TC', NULL, '2020-05-07 12:30:11', '2020-05-07 12:30:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerinfos`
--
ALTER TABLE `customerinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customerinfos_order_number_unique` (`order_number`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customerinfos`
--
ALTER TABLE `customerinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
