-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2023 at 01:19 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do_an_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'NWHR', '2023-02-09 12:00:56', '2023-02-09 12:00:56'),
(2, 'Brava Fabrics', '2023-02-09 12:01:42', '2023-02-09 12:01:42'),
(3, 'Idioma', '2023-02-09 12:02:03', '2023-02-09 12:02:03'),
(4, 'Level Collective', '2023-02-09 12:03:10', '2023-02-09 12:03:10'),
(5, 'Mud Jeans', '2023-02-09 12:04:05', '2023-02-09 12:04:05'),
(6, 'Riz', '2023-02-09 12:48:50', '2023-02-09 12:48:50'),
(7, 'Project Pico', '2023-02-09 12:49:19', '2023-02-09 12:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_18_081301_create_orders_table', 1),
(6, '2022_11_18_081854_create_order_details_table', 1),
(7, '2022_11_18_082527_create_products_table', 1),
(8, '2022_11_18_084311_create_brands_table', 1),
(9, '2022_11_18_084502_create_product_categories_table', 1),
(10, '2022_11_18_084624_create_product_images_table', 1),
(11, '2022_11_18_084901_create_product_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `country`, `street_address`, `postcode_zip`, `town_city`, `email`, `phone`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 2, 'Tuấn Anh', 'Nguyễn', 'ĐH Mỏ-Địa Chất', 'Việt Nam', 'Văn tố, Tứ Kỳ', '176500', 'Hải Dương', 'tuananh@gmail.com', '0963773905', 'pay_later', '2023-02-09 14:55:12', '2023-02-09 14:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 1, 186000, 186000, '2023-02-09 14:55:12', '2023-02-09 14:55:12'),
(2, 1, 5, 2, 250000, 500000, '2023-02-09 14:55:12', '2023-02-09 14:55:12');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `material` text COLLATE utf8mb4_unicode_ci,
  `specification` text COLLATE utf8mb4_unicode_ci,
  `clothing_care` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `name`, `description`, `material`, `specification`, `clothing_care`, `price`, `qty`, `discount`, `weight`, `sku`, `featured`, `tag`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Running burgundy T-shirt', 'Keep going, fight for what you want. We know you\'re tired but it\'s time to make a difference.  Spanish brand NWHR brings us streetwear done sustainably. Oversized silhouettes cut from durable, organic cotton fabric feature punchy artwork. All made in Northern Portugal, less than 200km from NWHR’s offices.', '100% Organic Cotton', '220 gsm heavyweight cotton  Oversized fit. NWHR\'s tees run slightly large, so your size depends on whether you want a tighter or looser fit. Model is 6\" and wears a L  Running back print', 'Wash at 30º. Preferably do not use bleach and dry it in the air. Do not iron on print. Wash similar colors together. Wash and iron inside out.', 285000, 70, 250000, 0.3, '111111', 1, 'T-shirt', '2023-02-09 12:08:42', '2023-02-09 12:10:36'),
(2, 4, 2, 'forager T-shirt', 'Celebrate the simple pleasure of gathering wild treasures with this fresh print. Cornwall based brand The Level Collective celebrate balanced living with nature inspired prints and sustainable production.', '100% Organic Cotton', 'Regular fit   Durable mid-weight jersey   Vintage white t-shirt with chestnut coloured ink   Made in small batches only', 'Cool wash at 30 degrees, and only use the lowest setting on your iron, to look after the organic cotton and screen print.', 270000, 70, 270000, 0.3, '111112', 1, 'T-shirt', '2023-02-09 12:12:42', '2023-02-09 12:13:52'),
(3, 4, 2, 'Fin T-Shirt', 'Swim through summer with the Fin t-shirt, featuring topography from Godrevy on the north coast of Cornwall, UK. Detailed in style and graphic, the Fin t-shirt is an ethical essential for your long-lasting wardrobe.', '100% Organic Cotton', '180 gsm Heavyweight Cotton  Water-based inks', 'We recommend that to save water, reduce detergent usage, reduce energy consumption and to extend the life of this garment that you wash it as infrequently as is practical.', 275000, 60, 250000, 0.3, '111113', 0, 'T-shirt', '2023-02-09 12:15:33', '2023-02-09 12:16:45'),
(4, 5, 1, 'Regular Dunn Tapered Jeans', 'The classic pair of jeans; the Regular Dunn is a tapered regular fit. Constructed from recycled cotton and organic cotton, featuring the Mud Jeans signature painted logo patch allowing for a 100% vegan jean.', '40% post-consumer recycled cotton, 60 % organic cotton', 'Regular fit   Tapered leg, mid-rise style  Mid-weight, non-stretchy fabric  Model wears W32 L32  Model height 6\'1\"/ 185cm', 'We recommend that to save water, reduce detergent usage, reduce energy consumption and to extend the life of this garment that you wash it as infrequently as is practical.', 200000, 30, 190000, 0.3, '111114', 1, 'Jeans', '2023-02-09 12:19:39', '2023-02-09 12:20:45'),
(5, 5, 1, 'Regular Dunn Tapered Stretch Jeans', 'The Regular Dunn Stretch is a tapered regular fit made with stretch denim for extra comfort. Constructed from recycled cotton and organic cotton, featuring the Mud Jeans signature painted logo patch allowing for a 100% vegan jean.', '23% recycled cotton, 75% organic cotton, 2% elastane', 'Regular fit  Designer recommends sizing down a size on this style.   Tapered leg, mid-rise style  Mid-weight, slightly stretchy fabric  Model wears W32 L32  Model height 6\'1\"/ 185cm  Button Fly  Signature painted logo patch', 'We recommend that to save water, reduce detergent usage, reduce energy consumption and to extend the life of this garment that you wash it as infrequently as is practical.', 250000, 0, 200000, 0.5, '111115', 1, 'Jeans', '2023-02-09 12:25:38', '2023-02-09 12:25:38'),
(6, 3, 2, 'Yugen T-Shirt', 'In a mysterious shade of green, the Yugen shirt draws from the Japanese word for the beauty of the universe. Made from organic cotton, every Yugen tee carries a unique finish due to the stone washing process.', '100% Organic Cotton', '190 gsm heavyweight cotton', 'We recommend that to save water, reduce detergent usage, reduce energy consumption and to extend the life of this garment that you wash it as infrequently as is practical.', 186000, 0, 90000, 0.3, '111115', 0, 'T-shirt', '2023-02-09 12:28:45', '2023-02-09 12:28:45'),
(7, 3, 2, 'Solivagant T-Shirt - UV Rouge', 'Solivagant, the Latin for \"Wander Alone\", inspired this ethical tee from Idioma. The rayon embroidery looks like the spark of an idea that can only come from deep, wandering thought. The oversized silhouette provides inspiration for your sustainable summer style!', '100% Organic Cotton', '190 gsm premium heavyweight cotton  Rayon embroidery', 'We recommend that to save water, reduce detergent usage, reduce energy consumption and to extend the life of this garment that you wash it as infrequently as is practical.', 200000, 0, 190000, 0.3, '111116', 1, 'T-shirt', '2023-02-09 12:33:47', '2023-02-09 12:33:47'),
(8, 1, 2, 'Mask Body T-Shirt', 'Behind the Mask Face design lies “O Entroido”, one of the most famous Galician festivals. NWHR’s collaboration with Marco Oggian celebrates their hometown’s festival in classic streetwear style. Oversized silhouettes cut from durable, organic cotton fabric with bold illustrations by Marco to finish', '100% Organic Cotton', '210 gsm heavyweight cotton  Oversized fit. NWHR\'s tees run slightly large, so your size depends on whether you want a tighter or looser fit. Model is 6\" and wears a L', 'Wash at 30º. Preferably do not use bleach and dry it in the air. Do not iron on print. Wash similar colors together. Wash and iron inside out.', 200000, 0, 190000, 0.3, '111117', 1, 'T-shirt', '2023-02-09 12:40:16', '2023-02-09 12:40:16'),
(9, 3, 2, 'Cipressi T-Shirt', 'Sit amongst the Cypress trees as Idioma paints you into a beautiful evergreen scene in Tuscany. This serene graphic tee is made of organic cotton and is made to last.', '100% Organic Cotton', '180 gsm heavyweight cotton', 'We recommend that to save water, reduce detergent usage, reduce energy consumption and to extend the life of this garment that you wash it as infrequently as is practical.', 200000, 0, 190000, 0.3, '111118', 1, 'T-shirt', '2023-02-09 12:43:44', '2023-02-09 12:43:44'),
(10, 5, 1, 'Slim Lassen Skinny-Fit Jeans', 'The Slim Lassen is skinny fit, constructed from recycled cotton and organic cotton with 2% elastane for extra comfort. These jeans feature the Mud Jeans signature painted logo patch allowing for a 100% vegan jean.', '23% recycled cotton, 75% organic cotton, 2% elastane', 'Skinny leg, mid-rise waist  Mid-weight, slightly stretchy fabric  Zip Fly  Signature painted logo patch', 'We recommend that to save water, reduce detergent usage, reduce energy consumption and to extend the life of this garment that you wash it as infrequently as is practical.', 278000, 0, 270000, 0.5, '111119', 1, 'Jeans', '2023-02-09 12:47:57', '2023-02-16 21:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `avatar`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'SUSTAINABLE JEANS', 'jeans-smaller_23209_065830.png', 'A style for every brother.', 'Denim doesn’t have to be deadly. Our collection of ethical jeans takes care of the planet, and the people who make them, without compromising on style. MUD sets the standard with their circular designs made from a blend of recycled and organic cotton. Knowledge Cotton Apparel adds the classic styles made from a sturdy, organic selvedge denim. With everything from skinny to a relaxed wide fit, there’s a pair for every brother’s preference.  At the bottom of each product you’ll find a footprint, detailing the jeans’ ethical and sustainable credentials.', '2023-02-09 11:58:30', '2023-02-09 11:58:30'),
(2, 'ETHICAL T-SHIRTS', 'harry-tee_23217_050318.png', 'Organic like your favourite veg.', 'Our selection of ethical and sustainable t-shirts are organic like your favourite veg. But that\'s not all. You’ll find renewably powered tees from World Supporting Goods, playful designs from Brava Fabrics and water-based prints from Idioma and Level Collective.  At the bottom of each product you’ll find a footprint, detailing the tee’s ethical and sustainable credentials.', '2023-02-09 12:00:05', '2023-02-16 22:03:31'),
(3, 'ETHICAL SWEATSHIRTS', 'harry-sweatshirts_23209_075054.png', 'Darn comfortable.', 'Every sustainable sweatshirt you’ll find is made from soft, organic cotton. Silverstick’s are suited to the active type, whilst Brava and Idioma bring a touch of culture and creativity with each of their printed and embroidered sweats.', '2023-02-09 12:50:54', '2023-02-09 12:50:54'),
(4, 'SUSTAINABLE SHORTS', 'bucklershortcollection_23209_075229.png', 'W.F.H. summer uniform.', 'Our collection of shorts takes care of your summer outfit, as well as the people and planet that produced them. Organic, high quality chino shorts. Oversized, chemical-free colour block shorts. Recycled denim and recycled plastic beachwear. There’s a premium pair for every Brother in our selection of sustainable shorts.', '2023-02-09 12:52:29', '2023-02-09 12:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `color`, `size`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 'red', 's', '30', '2023-02-09 12:10:03', '2023-02-09 12:10:03'),
(2, 1, 'blue', 'l', '20', '2023-02-09 12:10:19', '2023-02-09 12:10:19'),
(3, 1, 'green', 'm', '20', '2023-02-09 12:10:36', '2023-02-09 12:10:36'),
(4, 2, 'white', 's', '40', '2023-02-09 12:13:39', '2023-02-09 12:13:39'),
(5, 2, 'red', 'm', '30', '2023-02-09 12:13:52', '2023-02-09 12:13:52'),
(6, 3, 'white', 'l', '30', '2023-02-09 12:16:21', '2023-02-09 12:16:21'),
(7, 3, 'green', 's', '10', '2023-02-09 12:16:33', '2023-02-09 12:16:33'),
(8, 3, 'red', 'm', '20', '2023-02-09 12:16:45', '2023-02-09 12:16:51'),
(9, 4, 'blue', 'l', '30', '2023-02-09 12:20:45', '2023-02-09 12:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'runningburgundyt-shirtsq5_23209_070906.png', '2023-02-09 12:09:06', '2023-02-09 12:09:06'),
(2, 1, 'runningburgundyt-shirtsq3_23209_070917.png', '2023-02-09 12:09:17', '2023-02-09 12:09:17'),
(3, 1, 'runningburgundyt-shirtsq1_23209_070923.png', '2023-02-09 12:09:23', '2023-02-09 12:09:23'),
(4, 2, 'foragert-shirt2sq_23209_071304.png', '2023-02-09 12:13:04', '2023-02-09 12:13:04'),
(5, 2, 'foragert-shirt1sq_23209_071309.png', '2023-02-09 12:13:09', '2023-02-09 12:13:09'),
(6, 3, 'fin-organic2_23209_071550.png', '2023-02-09 12:15:50', '2023-02-09 12:15:50'),
(7, 3, 'fin-organic_23209_071556.png', '2023-02-09 12:15:56', '2023-02-09 12:15:56'),
(8, 3, 'fin-t-shirt-flat-lay_23209_071601.png', '2023-02-09 12:16:01', '2023-02-09 12:16:01'),
(9, 4, 'regulardunn-trueindigo6sq_23209_072001.png', '2023-02-09 12:20:01', '2023-02-09 12:20:01'),
(10, 4, 'regulardunnnaturalindigo1sqv3_23209_072009.png', '2023-02-09 12:20:09', '2023-02-09 12:20:09'),
(11, 4, 'regulardunnnaturalindigosq3_23209_072016.png', '2023-02-09 12:20:16', '2023-02-09 12:20:16'),
(12, 5, 'dip-1_23209_072607.png', '2023-02-09 12:26:07', '2023-02-09 12:26:07'),
(13, 5, 'dip-2_23209_072612.png', '2023-02-09 12:26:12', '2023-02-09 12:26:12'),
(14, 5, 'dip-3_23209_072618.png', '2023-02-09 12:26:18', '2023-02-09 12:26:18'),
(16, 6, 'yugen-tee-green1_23209_072910.png', '2023-02-09 12:29:10', '2023-02-09 12:29:10'),
(17, 6, 'yugen-tee-green-folded-2_23209_072920.png', '2023-02-09 12:29:20', '2023-02-09 12:29:20'),
(18, 6, 'yugen-daniel-3_23209_072927.png', '2023-02-09 12:29:27', '2023-02-09 12:29:27'),
(19, 7, 'solivagant-tee-bord1_23209_073658.png', '2023-02-09 12:36:58', '2023-02-09 12:36:58'),
(20, 7, 'solivagant-tee-bord2_23209_073705.png', '2023-02-09 12:37:05', '2023-02-09 12:37:05'),
(21, 7, 'solivagant_23209_073710.png', '2023-02-09 12:37:10', '2023-02-09 12:37:10'),
(22, 8, 'maskbodyt-shirtsq1_23209_074030.png', '2023-02-09 12:40:30', '2023-02-09 12:40:30'),
(23, 8, 'maskbodyt-shirtsq2_23209_074036.png', '2023-02-09 12:40:36', '2023-02-09 12:40:36'),
(24, 8, 'maskbodysq3_23209_074041.png', '2023-02-09 12:40:41', '2023-02-09 12:40:41'),
(25, 9, 'cipressi-tee-1_23209_074402.png', '2023-02-09 12:44:02', '2023-02-09 12:44:02'),
(26, 9, 'cipressi-tee-2_23209_074409.png', '2023-02-09 12:44:09', '2023-02-09 12:44:09'),
(27, 9, 'norpell-cipress_23209_074413.png', '2023-02-09 12:44:13', '2023-02-09 12:44:13'),
(28, 10, 'skinnymuddipdyeblacksq_23209_074811.png', '2023-02-09 12:48:11', '2023-02-09 12:48:11'),
(29, 10, 'sldd2-df3ddc68_23209_074816.png', '2023-02-09 12:48:16', '2023-02-09 12:48:16'),
(30, 10, 'sldd3_23209_074821.png', '2023-02-09 12:48:21', '2023-02-09 12:48:21');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `company_name`, `country`, `street_address`, `postcode_zip`, `town_city`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'tuananh20417@gmail.com', NULL, '$2y$10$YbdTAfFL.fQ4WGRn6GvqMO74s7PPRWSQxLdvXNP1n.4SjSBTOxgQ6', 'BCwVHCh9udX4wJEsPeUYPrkw9cuJMni93y6NighW3nuj2OwyBIlTCYngNh0I', 0, 'TuanAnh', 'Hai Duong', 'Van To, Tu Ky', '10000', 'Hai Duong', '0963773905', NULL, '2023-02-15 00:48:38'),
(2, 'Nguyễn Tuấn Anh', 'tuananh@gmail.com', NULL, '$2y$10$N/xvHoLOybtm0GCUfwVqu./9.UFQMDZZggZnF3kAPocwX6aVa2iUq', NULL, 2, 'ĐH Mỏ-Địa Chất', 'Việt Nam', 'Văn tố, Tứ Kỳ', '176500', 'Hải Dương', '0963773905', '2023-02-09 12:54:49', '2023-02-09 12:54:49'),
(3, 'Vũ Thị Loan', 'vuloan@gmail.com', NULL, '$2y$10$duL5GWGVQsbSBX9LYIjlcOgA0yI1TCOuwa1s8n9xXglP3.mY3sRqa', NULL, 2, NULL, 'Việt Nam', '52 Cầu Diễn, Phúc Diễn', NULL, 'Hà Nội', '0359851410', '2023-02-09 12:56:52', '2023-02-09 12:56:52'),
(4, 'Admin 1', 'admin1@gmail.com', NULL, '$2y$10$Qr2v.St83vJizvR2QDmiV..992slZUtsa0Y1z0.3UZSzLjvLHR722', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 15:20:24', '2023-02-09 15:20:24'),
(5, 'Admin 2', 'admin2@gmail.com', NULL, '$2y$10$rEBDFmL5qAfDWGHMIy7u1.nPrcxlulXRXTHyaHw6LmyXluanzqmW2', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-09 15:21:09', '2023-02-09 15:21:09'),
(7, 'Admin 3', 'admin3@gmail.com', NULL, '$2y$10$kVnJRd2Z8rcR0HJygfyb8upoORHedGR40rKXTZ6MP65/WPy0hJnq.', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 01:29:44', '2023-02-17 01:37:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
