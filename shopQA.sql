-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shopqa
CREATE DATABASE IF NOT EXISTS `shop_qa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `shop_qa`;

-- Dumping structure for table shopqa.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.blogs: ~3 rows (approximately)
DELETE FROM `blogs`;
INSERT INTO `blogs` (`id`, `user_id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
	(4, 14, 'Khám Phá Phong Cách và Chất Lượng Tại Shop Quần Áo Đẳng Cấp', 'images/bWEYBgbt4mso1SVOxX2EjncDV4c1kYiQdKpzn1Ri.jpg', 'Trong thế giới thời trang ngày nay, sự lựa chọn đúng đắn về quần áo không chỉ là về việc mặc đẹp mà còn là về cảm giác thoải mái và phản ánh phong cách cá nhân. Nếu bạn đang tìm kiếm sự hoàn hảo trong mỗi chi tiết của trang phục và mong muốn sở hữu những sản phẩm đẳng cấp, thì Shop Quần Áo của chúng tôi là điểm đến lý tưởng.  Đa Dạng Phong Cách Shop Quần Áo của chúng tôi không chỉ là nơi để mua sắm, mà là một trải nghiệm thời trang đầy phong cách. Chúng tôi tự hào mang đến cho khách hàng sự đa dạng về phong cách, từ trang phục casual hàng ngày đến những bộ trang phục lịch lãm dành cho những dịp đặc biệt. Với sự kết hợp linh hoạt giữa xu hướng thời trang và tính ứng dụng, bạn sẽ luôn tìm thấy những lựa chọn phù hợp với cá tính của mình.  Chất Lượng Đặt Lên Hàng Đầu Chúng tôi cam kết đưa đến tay khách hàng những sản phẩm chất lượng nhất. Từ việc chọn lựa nguyên liệu đến quá trình sản xuất, chúng tôi không ngừng nỗ lực để đảm bảo rằng mỗi chiếc áo, mỗi chiếc quần trong cửa hàng của chúng tôi đều đạt được tiêu chuẩn cao nhất. Chất liệu thoáng khí, thoải mái và bền bỉ là những đặc điểm mà chúng tôi đặt lên hàng đầu để mang lại trải nghiệm mặc đẹp và lâu dài cho khách hàng.  Giá Trị Tốt Nhất Với mục tiêu làm hài lòng mọi đối tượng khách hàng, Shop Quần Áo của chúng tôi không chỉ mang đến chất lượng đẳng cấp mà còn kèm theo giá trị tốt nhất. Chúng tôi luôn nỗ lực để giữ cho mức giá hợp lý, đồng thời thường xuyên có các chương trình khuyến mãi và giảm giá để khách hàng có thể trải nghiệm thế giới thời trang đẳng cấp mà không làm rỗng túi.  Dịch Vụ Khách Hàng Tận Tâm Chúng tôi hiểu rằng sự hài lòng của khách hàng không chỉ đến từ sản phẩm mà còn từ trải nghiệm mua sắm. Đội ngũ nhân viên tận tâm và chuyên nghiệp của chúng tôi luôn sẵn sàng hỗ trợ và tư vấn, từ việc chọn lựa phong cách đến việc chăm sóc sau bán hàng. Chúng tôi tin rằng sự hài lòng của bạn là động lực lớn nhất cho sự phát triển của chúng tôi.  Kết Luận Shop Quần Áo của chúng tôi không chỉ là nơi để bạn mua sắm, mà là một không gian thời trang đẳng cấp đưa bạn đến gần với sự hoàn hảo. Hãy để chúng tôi là đối tác tin cậy của bạn trên hành trình chinh phục phong cách và tự tin. Chào mừng bạn đến với thế giới thời trang tinh tế và chất lượng của chúng tôi!', '2023-11-22 09:59:33', '2024-01-28 15:55:29'),
	(5, 14, 'Khám Phá Sự Hứng Khởi với Chương Trình Khuyến Mãi Đặc Biệt Tại Shop Quần Áo', 'images/YUpPe0gO7jY3BBW6DW0tG9802aCeqqGlGAhCB4ma.jpg', 'Nếu bạn đang tìm kiếm cơ hội để làm mới tủ đồ của mình và tận hưởng những trải nghiệm mua sắm thú vị, thì không gì có thể tốt hơn khi bạn tham gia vào chương trình khuyến mãi đặc biệt tại Shop Quần Áo của chúng tôi. Đây là một cơ hội lớn để bạn thỏa sức sáng tạo và làm mới phong cách của mình với giá trị không thể tin được.\r\n\r\nNhững Ưu Đãi Đặc Biệt\r\nChương trình khuyến mãi của chúng tôi mang đến những ưu đãi đặc biệt cho mỗi sản phẩm trong cửa hàng. Từ giảm giá đặc biệt, quà tặng kèm theo, đến chính sách giảm giá khi mua số lượng, bạn sẽ phải ngạc nhiên trước sự đa dạng và hấp dẫn của những ưu đãi này. Điều này không chỉ giúp bạn tiết kiệm một khoản đáng kể mà còn giúp tận hưởng trọn vẹn niềm vui mua sắm.\r\n\r\nMua Sắm Đón Đầu Xu Hướng\r\nChúng tôi luôn cập nhật và đón đầu xu hướng thời trang, và chương trình khuyến mãi không phải là ngoại lệ. Bạn sẽ có cơ hội đặt tay trước những mẫu mới nhất, những thiết kế độc quyền và những sản phẩm hot nhất trong mùa. Đừng bỏ lỡ cơ hội làm mới tủ đồ của bạn với những sản phẩm chất lượng và phong cách tinh tế.\r\n\r\nTăng Cường Phong Cách Mỗi Ngày\r\nChương trình khuyến mãi không chỉ là cơ hội để mua sắm với giá ưu đãi mà còn là lúc bạn có thể thay đổi, tăng cường và làm mới phong cách cá nhân của mình. Với sự hỗ trợ của đội ngũ nhân viên chuyên nghiệp, bạn có thể tìm ra những sản phẩm phù hợp với phong cách và sở thích của mình.\r\n\r\nChất Lượng và Dịch Vụ Tận Tâm\r\nDù là sản phẩm trong chương trình khuyến mãi hay không, Shop Quần Áo luôn cam kết mang đến chất lượng đẳng cấp và dịch vụ tận tâm. Bạn sẽ được trải nghiệm sự thoải mái khi mua sắm và tự tin khi mặc những sản phẩm từ chúng tôi.\r\n\r\nKết Luận\r\nChương trình khuyến mãi tại Shop Quần Áo không chỉ là cơ hội để tiết kiệm mà còn là hành trình khám phá và làm mới phong cách của bạn. Đừng bỏ lỡ những ưu đãi đặc biệt và trải nghiệm mua sắm độc đáo tại cửa hàng của chúng tôi. Hãy đến và khám phá ngay hôm nay để tận hưởng sự hứng khởi của thế giới thời trang đẳng cấp.', '2023-11-22 09:59:48', '2024-01-28 15:59:59'),
	(8, 14, 'Phát Sóng Phong Cách - Quảng Bá Shop Quần Áo Đẳng Cấp', 'images/O4hA912ESXDBZuKyT2MzONo9un5c2ZXAMGcyqZZs.jpg', 'Shop Quần Áo của chúng tôi không chỉ là nơi để mua sắm, mà còn là điểm đến để khám phá, trải nghiệm và chia sẻ niềm đam mê với cộng đồng yêu thời trang. Chúng tôi không ngừng nỗ lực quảng bá shop của mình, xây dựng một cộng đồng mua sắm trực tuyến sôi động và thú vị.\r\n\r\nMạng Lưới Xã Hội - Nơi Kết Nối Cộng Đồng\r\nChúng tôi đã tạo ra một mạng lưới xã hội mạnh mẽ, nơi khách hàng có thể chia sẻ phong cách cá nhân, nhận xét về sản phẩm và thậm chí là chia sẻ những bức ảnh thú vị với những bộ trang phục từ Shop Quần Áo. Mỗi ngày là cơ hội để chia sẻ, kết nối và tạo nên một cộng đồng yêu thời trang đồng lòng.\r\n\r\nBlog Thời Trang - Nguồn Cảm Hứng Cho Khách Hàng\r\nChúng tôi duy trì một blog thời trang chất lượng cao, nơi chia sẻ xu hướng mới, cách kết hợp trang phục, và những thông điệp thú vị về thế giới thời trang. Blog không chỉ là nguồn thông tin hữu ích mà còn là nguồn cảm hứng cho khách hàng, giúp họ tìm thấy phong cách riêng biệt và tự tin hơn trong việc chọn lựa trang phục.\r\n\r\nChương Trình Thưởng - Đặc Quyền Cho Thành Viên\r\nChúng tôi đã xây dựng một chương trình thưởng đặc biệt dành cho các thành viên trung thành. Với mỗi lần mua sắm, khách hàng có thể tích điểm và đổi chúng lấy những ưu đãi độc quyền, giảm giá và quà tặng hấp dẫn. Điều này không chỉ là cách để tri ân khách hàng mà còn là để tạo sự kết nối sâu sắc với cộng đồng yêu thời trang của chúng tôi.\r\n\r\nSự Kiện Thời Trang - Tạo Nên Trải Nghiệm\r\nChúng tôi tổ chức định kỳ các sự kiện thời trang trực tuyến, nơi khách hàng có thể tham gia, trò chuyện với những người yêu thời trang khác và đặc biệt là, có cơ hội nhìn nhận trực tiếp những xu hướng mới và các sản phẩm nổi bật từ Shop Quần Áo.\r\n\r\nKết Luận\r\nQuảng bá Shop Quần Áo không chỉ là việc giới thiệu sản phẩm mà còn là sự tạo nên một trải nghiệm mua sắm toàn diện cho khách hàng. Chúng tôi tự hào về cộng đồng mua sắm đa dạng và sôi động mà chúng tôi đã xây dựng, nơi mà sự đam mê và phong cách được đánh thức mỗi ngày. Hãy đồng hành cùng chúng tôi, nơi phát sóng phong cách và sáng tạo không ngừng!', '2024-01-25 14:33:04', '2024-01-28 16:01:03');

-- Dumping structure for table shopqa.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.brands: ~2 rows (approximately)
DELETE FROM `brands`;
INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(21, 'Polo', '2024-01-14 14:24:59', '2024-01-14 14:24:59'),
	(22, 'calvin', '2024-01-14 14:25:23', '2024-01-14 14:25:23'),
	(23, 'Nike', '2024-01-26 02:26:01', '2024-01-26 02:26:01');

-- Dumping structure for table shopqa.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.categories: ~3 rows (approximately)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(15, 'Nam', '2023-11-15 16:47:01', '2024-01-14 14:26:58'),
	(17, 'Nữ', '2023-11-15 16:54:01', '2024-01-14 14:27:05');

-- Dumping structure for table shopqa.colors
CREATE TABLE IF NOT EXISTS `colors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.colors: ~11 rows (approximately)
DELETE FROM `colors`;
INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
	(2, 'white', '#fff', '2023-11-08 20:00:05', '2023-11-08 20:00:05'),
	(3, 'black', '#000', '2023-11-08 23:58:46', '2023-11-08 23:58:46'),
	(4, 'Red', '#FF0000', '2023-11-09 00:00:04', '2023-11-09 00:00:04'),
	(5, 'Lime', '#00FF00', '2023-11-09 00:00:19', '2023-11-09 00:00:19'),
	(6, 'Blue', '#0000FF', '2023-11-09 00:00:31', '2023-11-09 00:00:31'),
	(7, 'Yellow', '#FFFF00', '2023-11-09 00:00:43', '2023-11-09 00:00:43'),
	(8, 'Gray', '#808080', '2023-11-09 00:00:58', '2023-11-09 00:00:58'),
	(9, 'Green', '#008000', '2023-11-09 00:01:10', '2023-11-09 00:01:10'),
	(10, 'Purple', '#800080', '2023-11-09 00:01:33', '2023-11-09 00:01:33'),
	(11, 'DarkGray', '#A9A9A9', '2023-11-09 00:03:08', '2023-11-09 00:03:08'),
	(12, 'GhostWhite', '#F8F8FF', '2023-11-09 00:03:23', '2023-11-09 00:03:23');

-- Dumping structure for table shopqa.color_size
CREATE TABLE IF NOT EXISTS `color_size` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `size_id` bigint unsigned NOT NULL,
  `color_id` bigint unsigned NOT NULL,
  `qty` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.color_size: ~43 rows (approximately)
DELETE FROM `color_size`;
INSERT INTO `color_size` (`id`, `size_id`, `color_id`, `qty`, `created_at`, `updated_at`) VALUES
	(54, 59, 2, 12, NULL, NULL),
	(56, 61, 3, 454, NULL, NULL),
	(57, 62, 3, 12, NULL, NULL),
	(58, 63, 4, 44, NULL, NULL),
	(59, 64, 2, 446, NULL, NULL),
	(60, 65, 8, 232, NULL, NULL),
	(61, 66, 4, 453, NULL, NULL),
	(62, 66, 5, 453, NULL, NULL),
	(63, 66, 6, 453, NULL, NULL),
	(64, 66, 7, 453, NULL, NULL),
	(65, 66, 9, 453, NULL, NULL),
	(66, 66, 10, 453, NULL, NULL),
	(67, 66, 11, 453, NULL, NULL),
	(68, 66, 12, 453, NULL, NULL),
	(69, 70, 2, 18, NULL, NULL),
	(72, 73, 2, 12, NULL, NULL),
	(73, 74, 7, 32, NULL, NULL),
	(74, 75, 2, 14, NULL, NULL),
	(75, 76, 3, 10, NULL, NULL),
	(77, 78, 11, 10, NULL, NULL),
	(79, 80, 2, 7, NULL, NULL),
	(81, 82, 3, 9, NULL, NULL),
	(82, 83, 9, 15, NULL, NULL),
	(83, 84, 6, 3, NULL, NULL),
	(84, 85, 3, 11, NULL, NULL),
	(85, 86, 2, 16, NULL, NULL),
	(86, 87, 8, 25, NULL, NULL),
	(88, 89, 2, 9, NULL, NULL),
	(89, 90, 6, 10, NULL, NULL),
	(92, 93, 3, 9, NULL, NULL),
	(93, 94, 12, 9, NULL, NULL),
	(94, 95, 11, 12, NULL, NULL),
	(95, 96, 2, 13, NULL, NULL),
	(96, 97, 5, 20, NULL, NULL),
	(100, 99, 12, 1, NULL, NULL),
	(101, 83, 2, 23, NULL, NULL),
	(107, 100, 2, 7, NULL, NULL),
	(108, 101, 4, 10, NULL, NULL),
	(111, 101, 2, 1, NULL, NULL),
	(112, 103, 12, 9, NULL, NULL),
	(113, 103, 9, 30, NULL, NULL),
	(114, 104, 2, 9, NULL, NULL),
	(115, 84, 3, 29, NULL, NULL),
	(116, 84, 11, 8, NULL, NULL),
	(117, 85, 9, 11, NULL, NULL);

-- Dumping structure for table shopqa.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table shopqa.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.migrations: ~30 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2020_12_09_085528_create_orders_table', 1),
	(6, '2020_12_09_085832_create_order_details_table', 1),
	(7, '2020_12_09_085936_create_products_table', 1),
	(8, '2020_12_09_090029_create_brands_table', 1),
	(9, '2020_12_09_090110_create_product_categories_table', 1),
	(10, '2020_12_09_090148_create_product_images_table', 1),
	(11, '2020_12_09_090228_create_product_details_table', 1),
	(12, '2020_12_09_090308_create_product_comments_table', 1),
	(13, '2020_12_09_090355_create_blogs_table', 1),
	(14, '2020_12_09_090437_create_blog_comments_table', 1),
	(15, '2023_09_04_100824_create_reviews_table', 1),
	(16, '2023_09_05_073925_create_sliders_table', 2),
	(17, '2023_09_05_081349_create_sales_table', 3),
	(18, '2015_04_12_000000_create_orchid_users_table', 4),
	(19, '2015_10_19_214424_create_orchid_roles_table', 4),
	(20, '2015_10_19_214425_create_orchid_role_users_table', 4),
	(21, '2016_08_07_125128_create_orchid_attachmentstable_table', 4),
	(22, '2017_09_17_125801_create_notifications_table', 4),
	(23, '2023_11_08_153708_create_colors_table', 5),
	(24, '2023_11_08_153729_create_sizes_table', 5),
	(25, '2023_11_08_154134_create_size_color_pivot_table', 6),
	(26, '2023_11_12_213101_create_color_size_pivot_table', 7),
	(27, '2024_01_17_230228_add_code_to_orders_table', 7),
	(28, '2024_01_21_175130_add_status_ship_to_orders', 8),
	(29, '2024_01_27_201900_create_trigger_insert_order_detail', 9),
	(30, '2024_01_27_201929_create_trigger_delete_order_detail', 9);

-- Dumping structure for table shopqa.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.orders: ~54 rows (approximately)
DELETE FROM `orders`;
INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `city`, `district`, `ward`, `note`, `created_at`, `updated_at`, `method`, `code`, `status`) VALUES
	(13, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-21 11:10:22', '2024-01-21 11:10:22', 'cod', '20240121181017', 'waiting'),
	(14, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-21 11:22:14', '2024-01-21 12:57:31', 'payment', '20240121182212', 'completed'),
	(15, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-26 11:07:15', '2024-01-26 11:08:34', 'cod', '20240126180712', 'completed'),
	(16, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-26 11:07:42', '2024-01-26 11:08:43', 'cod', '20240126180737', 'completed'),
	(17, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-26 11:08:00', '2024-01-26 11:08:50', 'cod', '20240126180759', 'completed'),
	(18, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-26 13:18:16', '2024-01-26 14:07:20', 'cod', '20240126201815', 'completed'),
	(19, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-26 15:24:06', '2024-01-26 15:25:01', 'cod', '20240126222402', 'completed'),
	(20, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:18:50', '2024-01-27 14:18:50', 'cod', '20240127211846', 'waiting'),
	(21, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:26:28', '2024-01-27 14:26:28', 'cod', '20240127212626', 'waiting'),
	(22, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:27:47', '2024-01-27 14:27:47', 'cod', '20240127212745', 'waiting'),
	(23, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:28:25', '2024-01-27 14:28:25', 'cod', '20240127212824', 'completed'),
	(24, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:31:52', '2024-01-27 14:31:52', 'cod', '20240127213150', 'waiting'),
	(25, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:32:27', '2024-01-27 14:32:27', 'cod', '20240127213150', 'waiting'),
	(26, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:32:30', '2024-01-27 14:32:30', 'cod', '20240127213150', 'waiting'),
	(27, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:39:07', '2024-01-27 14:39:07', 'cod', '20240127213150', 'waiting'),
	(28, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:43:23', '2024-01-27 14:43:23', 'cod', '20240127213150', 'waiting'),
	(29, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:44:02', '2024-01-27 14:44:02', 'cod', '20240127213150', 'waiting'),
	(30, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:45:04', '2024-01-27 14:45:04', 'cod', '20240127213150', 'waiting'),
	(31, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:45:14', '2024-01-27 14:45:14', 'cod', '20240127213150', 'waiting'),
	(32, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:45:34', '2024-01-27 14:45:34', 'cod', '20240127213150', 'waiting'),
	(33, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:45:43', '2024-01-27 14:45:43', 'cod', '20240127213150', 'waiting'),
	(34, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:47:02', '2024-01-27 14:47:02', 'cod', '20240127213150', 'waiting'),
	(35, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:49:20', '2024-01-27 14:49:20', 'cod', '20240127213150', 'waiting'),
	(37, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 14:52:32', '2024-01-27 14:52:32', 'cod', '20240127215140', 'waiting'),
	(41, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:01:39', '2024-01-27 15:01:39', 'cod', '20240127215822', 'waiting'),
	(46, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:07:52', '2024-01-27 15:07:52', 'cod', '20240127220749', 'waiting'),
	(47, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:08:36', '2024-01-27 15:08:36', 'cod', '20240127220749', 'waiting'),
	(48, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:13:52', '2024-01-27 15:13:52', 'cod', '20240127221349', 'waiting'),
	(49, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:14:44', '2024-01-27 15:14:44', 'cod', '20240127221349', 'waiting'),
	(50, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:15:36', '2024-01-27 15:15:36', 'cod', '20240127221531', 'waiting'),
	(51, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:15:54', '2024-01-27 15:15:54', 'cod', '20240127221531', 'waiting'),
	(52, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:16:23', '2024-01-27 15:16:23', 'cod', '20240127221531', 'waiting'),
	(53, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:17:35', '2024-01-27 15:17:35', 'cod', '20240127221531', 'waiting'),
	(54, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:18:01', '2024-01-27 15:18:01', 'cod', '20240127221759', 'waiting'),
	(55, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 15:25:10', '2024-01-27 15:25:10', 'cod', '20240127222509', 'waiting'),
	(56, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 16:51:04', '2024-01-27 17:31:04', 'cod', '20240127235100', 'cancel'),
	(57, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 16:57:00', '2024-01-27 16:57:00', 'cod', '20240127235658', 'waiting'),
	(58, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-27 17:33:56', '2024-01-27 17:34:29', 'cod', '20240128003354', 'cancel'),
	(59, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-28 08:19:26', '2024-01-31 14:26:38', 'payment', '20240128151920', 'completed'),
	(60, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-28 14:08:04', '2024-01-28 14:13:51', 'payment', '20240128210800', 'cancel'),
	(61, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-28 14:13:57', '2024-01-28 14:14:55', 'payment', '20240128211355', 'completed'),
	(62, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 37 Trần Cung', '', '', '', NULL, '2024-01-28 17:54:57', '2024-01-28 17:55:15', 'cod', '20240129005455', 'cancel'),
	(63, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '', '', '', NULL, '2024-01-30 16:41:29', '2024-01-30 16:41:29', 'cod', '20240130234126', 'waiting'),
	(64, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-30 16:48:29', '2024-01-30 16:48:29', 'cod', '20240130234827', 'waiting'),
	(65, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '36', '358', '13714', NULL, '2024-01-30 16:54:27', '2024-01-31 14:26:07', 'cod', '20240130235419', 'completed'),
	(66, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-31 15:04:44', '2024-01-31 15:04:44', 'cod', '20240131220441', 'waiting'),
	(67, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-31 15:04:54', '2024-01-31 15:06:08', 'cod', '20240131220453', 'processing'),
	(68, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2023-12-27 14:45:14', '2023-12-27 14:45:14', 'cod', '20240131220501', 'completed'),
	(69, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-31 15:05:13', '2024-01-31 15:05:55', 'cod', '20240131220511', 'completed'),
	(70, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-31 15:05:39', '2024-01-31 15:05:49', 'cod', '20240131220537', 'completed'),
	(71, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-31 15:06:44', '2024-01-31 15:06:44', 'cod', '20240131220642', 'completed'),
	(72, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-31 15:06:55', '2024-01-31 15:06:55', 'cod', '20240131220654', 'completed'),
	(73, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-31 15:07:12', '2024-01-31 15:07:12', 'cod', '20240131220710', 'completed'),
	(74, 14, 'Super Admin', '0868033462sdkvq@gmail.com', '0868033466', 'Số 2', '58', '586', '22846', NULL, '2024-01-31 15:08:05', '2024-01-31 15:08:05', 'cod', '20240131220803', 'completed');

-- Dumping structure for table shopqa.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `qty` int NOT NULL,
  `color_id` double NOT NULL,
  `size_id` double NOT NULL,
  `price` int DEFAULT NULL,
  `discount_price` int DEFAULT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.order_details: ~52 rows (approximately)
DELETE FROM `order_details`;
INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `color_id`, `size_id`, `price`, `discount_price`, `total`, `created_at`, `updated_at`) VALUES
	(15, 13, 38, 1, 2, 28, 1000000, 850000, 850000, NULL, NULL),
	(16, 14, 40, 1, 8, 48, 1500000, 1299000, 1299000, NULL, NULL),
	(17, 15, 71, 2, 2, 96, 3000000, 1990000, 3980000, NULL, NULL),
	(18, 16, 69, 3, 11, 78, 1500000, NULL, 4500000, NULL, NULL),
	(19, 17, 65, 5, 2, 81, 1000000, NULL, 5000000, NULL, NULL),
	(20, 18, 65, 7, 3, 82, 1000000, NULL, 7000000, NULL, NULL),
	(21, 19, 65, 4, 9, 103, 1000000, NULL, 4000000, NULL, NULL),
	(22, 19, 65, 1, 2, 101, 1000000, NULL, 1000000, NULL, NULL),
	(23, 19, 65, 1, 3, 101, 1000000, 0, 1000000, NULL, NULL),
	(24, 19, 65, 1, 3, 101, 1000000, 0, 1000000, NULL, NULL),
	(25, 19, 65, 1, 3, 101, 1000000, 0, 1000000, NULL, NULL),
	(31, 19, 65, 2, 4, 101, 1000000, 0, 1000000, NULL, NULL),
	(32, 20, 66, 1, 6, 84, 2000000, NULL, 2000000, NULL, NULL),
	(33, 21, 66, 1, 6, 84, 2000000, NULL, 2000000, NULL, NULL),
	(34, 22, 66, 1, 6, 84, 2000000, NULL, 2000000, NULL, NULL),
	(35, 23, 66, 1, 6, 84, 2000000, NULL, 2000000, '2023-12-27 14:45:14', '2023-12-27 14:45:14'),
	(36, 31, 66, 1, 6, 84, 2000000, NULL, 2000000, '2024-01-27 14:45:14', '2024-01-27 14:45:14'),
	(37, 32, 66, 1, 6, 84, 2000000, NULL, 2000000, '2024-01-27 14:45:34', '2024-01-27 14:45:34'),
	(38, 33, 66, 1, 6, 84, 2000000, NULL, 2000000, '2024-01-27 14:45:43', '2024-01-27 14:45:43'),
	(39, 34, 66, 1, 6, 84, 2000000, NULL, 2000000, '2024-01-27 14:47:02', '2024-01-27 14:47:02'),
	(40, 35, 66, 1, 6, 84, 2000000, NULL, 2000000, '2024-01-27 14:49:20', '2024-01-27 14:49:20'),
	(42, 37, 66, 1, 6, 84, 2000000, NULL, 2000000, '2024-01-27 14:52:32', '2024-01-27 14:52:32'),
	(46, 41, 66, 2, 6, 84, 2000000, NULL, 4000000, '2024-01-27 15:01:39', '2024-01-27 15:01:39'),
	(51, 49, 66, 6, 6, 84, 2000000, NULL, 12000000, '2024-01-27 15:14:44', '2024-01-27 15:14:44'),
	(52, 52, 66, 3, 6, 84, 2000000, NULL, 6000000, '2024-01-27 15:16:23', '2024-01-27 15:16:23'),
	(53, 56, 66, 4, 6, 84, 2000000, NULL, 8000000, '2024-01-27 16:51:04', '2024-01-27 16:51:04'),
	(54, 56, 67, 8, 2, 86, 4000000, NULL, 32000000, '2024-01-27 16:51:04', '2024-01-27 16:51:04'),
	(55, 56, 71, 10, 2, 96, 3000000, 1990000, 19900000, '2024-01-27 16:51:04', '2024-01-27 16:51:04'),
	(56, 57, 66, 2, 6, 84, 2000000, NULL, 4000000, '2024-01-27 16:57:00', '2024-01-27 16:57:00'),
	(57, 57, 71, 10, 2, 96, 3000000, 1990000, 19900000, '2024-01-27 16:57:00', '2024-01-27 16:57:00'),
	(58, 57, 67, 2, 8, 87, 4000000, NULL, 8000000, '2024-01-27 16:57:00', '2024-01-27 16:57:00'),
	(59, 58, 71, 5, 2, 96, 3000000, 1990000, 9950000, '2024-01-27 17:33:56', '2024-01-27 17:33:56'),
	(60, 58, 67, 13, 8, 87, 4000000, NULL, 52000000, '2024-01-27 17:33:56', '2024-01-27 17:33:56'),
	(61, 59, 66, 1, 6, 84, 2000000, NULL, 2000000, '2024-01-28 08:19:26', '2024-01-28 08:19:26'),
	(62, 60, 67, 1, 2, 86, 4000000, NULL, 4000000, '2024-01-28 14:08:04', '2024-01-28 14:08:04'),
	(63, 60, 71, 12, 2, 96, 3000000, 1990000, 23880000, '2024-01-28 14:08:04', '2024-01-28 14:08:04'),
	(64, 61, 67, 1, 2, 86, 4000000, NULL, 4000000, '2024-01-28 14:13:57', '2024-01-28 14:13:57'),
	(65, 61, 71, 12, 2, 96, 3000000, 1990000, 23880000, '2024-01-28 14:13:57', '2024-01-28 14:13:57'),
	(66, 62, 71, 5, 2, 96, 3000000, 1990000, 9950000, '2024-01-28 17:54:57', '2024-01-28 17:54:57'),
	(67, 63, 65, 1, 2, 100, 1000000, 500000, 500000, '2024-01-30 16:41:29', '2024-01-30 16:41:29'),
	(68, 64, 67, 1, 8, 87, 4000000, 0, 4000000, '2024-01-30 16:48:29', '2024-01-30 16:48:29'),
	(69, 64, 66, 1, 3, 84, 2000000, 0, 2000000, '2024-01-30 16:48:29', '2024-01-30 16:48:29'),
	(70, 65, 69, 1, 3, 76, 1500000, 0, 1500000, '2024-01-30 16:54:27', '2024-01-30 16:54:27'),
	(71, 66, 66, 1, 6, 84, 2000000, 0, 2000000, '2024-01-31 15:04:44', '2024-01-31 15:04:44'),
	(72, 67, 71, 1, 2, 96, 3000000, 0, 3000000, '2024-01-31 15:04:54', '2024-01-31 15:04:54'),
	(73, 68, 65, 1, 3, 82, 1000000, 500000, 500000, '2023-12-27 14:45:14', '2023-12-27 14:45:14'),
	(74, 69, 67, 1, 2, 86, 4000000, 0, 4000000, '2024-01-31 15:05:13', '2024-01-31 15:05:13'),
	(75, 70, 66, 2, 6, 84, 2000000, 0, 4000000, '2024-01-31 15:05:39', '2024-01-31 15:05:39'),
	(76, 71, 70, 1, 3, 93, 1900000, 0, 1900000, '2024-01-31 15:06:44', '2024-01-31 15:06:44'),
	(77, 72, 65, 1, 12, 103, 1000000, 500000, 500000, '2024-01-31 15:06:55', '2024-01-31 15:06:55'),
	(78, 73, 71, 2, 2, 96, 3000000, 0, 6000000, '2024-01-31 15:07:12', '2024-01-31 15:07:12'),
	(79, 74, 66, 1, 11, 84, 2000000, 0, 2000000, '2024-01-31 15:08:05', '2024-01-31 15:08:05');

-- Dumping structure for table shopqa.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.password_resets: ~3 rows (approximately)
DELETE FROM `password_resets`;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('0868033462sdkvq@gmail.com', '$2y$10$P2EaKs5LXsu3UzCCi0I0SeXhm3wWkaDBsfls7jkPfBa8EGONHP3/6', '2024-01-25 16:12:08'),
	('0868033462kvq@gmail.com', '$2y$10$./I6mK69gCY0tFbCMS0S3.2iHxdQAAVvzC9Ze0LowNK1eAjpt4vs.', '2024-01-25 16:37:00');

-- Dumping structure for table shopqa.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table shopqa.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int unsigned NOT NULL,
  `product_category_id` int unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` int NOT NULL,
  `discount_price` int DEFAULT NULL,
  `percent_discount` int DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_sku_unique` (`sku`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.products: ~7 rows (approximately)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `name`, `description`, `content`, `image`, `original_price`, `discount_price`, `percent_discount`, `weight`, `sku`, `price`, `created_at`, `updated_at`, `featured`) VALUES
	(65, 21, 15, 'Áo sơ mi Nam tay ngắn', 'Áo sơ mi Nam tay ngắn', 'Áo sơ mi nam tay ngắn là một phần không thể thiếu trong bộ sưu tập thời trang của các quý ông hiện đại. Với kiểu dáng trẻ trung, năng động và phóng khoáng, áo sơ mi tay ngắn không chỉ mang lại sự thoải mái cho người mặc mà còn tạo nên phong cách riêng biệt và lịch lãm.\r\n\r\nChất liệu của áo sơ mi nam tay ngắn thường là những loại vải nhẹ, thoáng khí như cotton hoặc linen, giúp người mặc luôn cảm thấy thoải mái trong mọi hoàn cảnh. Kiểu dáng đa dạng với nhiều màu sắc và họa tiết khác nhau, từ những chiếc áo trơn tinh tế đến những họa tiết nổi bật, áo sơ mi tay ngắn phản ánh sự đa dạng và sáng tạo trong thế giới thời trang nam.\r\n\r\nÁo sơ mi tay ngắn không chỉ phù hợp cho các bữa tiệc, dịp lễ, mà còn là lựa chọn hoàn hảo cho những buổi gặp gỡ công việc hay các hoạt động giải trí. Sự linh hoạt của chiếc áo này cho phép kết hợp với nhiều kiểu quần khác nhau, từ quần jeans cá tính đến quần âu lịch lãm.\r\n\r\nVới áo sơ mi nam tay ngắn, phái mạnh không chỉ thể hiện phong cách cá nhân mà còn làm nổi bật vẻ đẹp và sự tự tin của mình trong mọi hoàn cảnh, tạo nên một hình ảnh ấn tượng và thu hút.', 'images/sSuguTaTzaYqfB779uZruGbWzE2yvET5MQcDyX1O.jpg', 500000, 500000, 50, NULL, 'somiNN', 1000000, '2024-01-25 14:38:21', '2024-01-30 12:11:57', 0),
	(66, 21, 17, 'Quần nữ-Polo', 'Polo quần nữ là một sự kết hợp tuyệt vời giữa sự thoải mái và phong cách', 'Polo quần nữ là một sự kết hợp tuyệt vời giữa sự thoải mái và phong cách, tạo ra một sản phẩm thời trang không thể thiếu trong tủ đồ của phụ nữ hiện đại. Những chiếc polo quần được thiết kế để mang lại sự thoải mái cao cấp và vẻ ngoại hình thời trang, chúng đã trở thành một biểu tượng của phong cách ăn mặc đẳng cấp và thời thượng.\r\n\r\nVới chất liệu vải chủ yếu là cotton hoặc các sợi tổng hợp thoáng khí, polo quần nữ không chỉ giúp giữ ấm vào mùa lạnh mà còn tạo ra cảm giác mát mẻ trong những ngày nắng nóng. Thiết kế cổ polo kèm theo các chi tiết như nút cài, họa tiết thêu hoặc logo thương hiệu tinh tế, tạo nên sự độc đáo và phong cách riêng biệt cho người mặc.\r\n\r\nPolo quần nữ có khả năng kết hợp linh hoạt với nhiều loại trang phục khác nhau, từ quần jeans cá tính đến váy ngắn thanh lịch. Điều này giúp chúng trở thành sự lựa chọn đa dạng cho nhiều sự kiện khác nhau, từ những buổi dạo phố thư giãn đến các bữa tiệc nhẹ nhàng hay các hoạt động giải trí.\r\n\r\nKhông chỉ là một chiếc áo, polo quần nữ còn là biểu tượng của sự tự tin và phong cách cá nhân. Với sự kết hợp hoàn hảo giữa thiết kế đẳng cấp và tính ứng dụng, chúng là nguồn cảm hứng không ngừng cho phái đẹp khám phá và thể hiện cái tôi qua phong cách thời trang.', 'images/bQkcH2wJ9xoOYPTmgyPg8lNs4WyHilCDzARGYPzu.jpg', 700000, 0, NULL, NULL, 'QNS-1', 2000000, '2024-01-25 14:40:21', '2024-01-30 12:12:50', 0),
	(67, 22, 15, 'Sơ mi Nam - calvin', 'Áo sơ mi nam của thương hiệu Calvin Klein', 'Áo sơ mi nam của thương hiệu Calvin Klein không chỉ là một sản phẩm thời trang, mà còn là biểu tượng của sự đẳng cấp và phong cách hiện đại. Với sự kết hợp tinh tế giữa chất lượng, thiết kế và thương hiệu uy tín, các chiếc áo sơ mi này không ngừng làm say đắm và chinh phục trái tim của những người yêu thời trang nam.\r\n\r\nChất liệu của áo sơ mi Calvin Klein thường là cotton cao cấp hoặc các sợi tổng hợp, mang lại cảm giác thoải mái và êm dịu cho người mặc. Sự tập trung vào chi tiết và sự hoàn thiện trong từng đường may cho thấy sự chăm sóc tỉ mỉ từ phía nhãn hiệu. Logo "CK" độc đáo thường được thêu hoặc in discreetly, tạo nên điểm nhấn nhẹ nhàng nhưng đầy phong cách.\r\n\r\nThiết kế của áo sơ mi nam Calvin Klein thường là sự kết hợp giữa điểm nhấn hiện đại và kiểu dáng truyền thống. Cổ áo, dáng áo, và chi tiết cắt may được chăm chút để tạo nên một hình ảnh lịch lãm và đẳng cấp cho người mặc. Màu sắc của áo sơ mi Calvin Klein thường là những gam màu tinh tế như trắng, đen, xanh navy, hay xám, dễ dàng kết hợp với nhiều loại trang phục khác nhau.\r\n\r\nÁo sơ mi nam Calvin Klein không chỉ là lựa chọn hoàn hảo cho các sự kiện chính thức mà còn phù hợp cho những buổi gặp gỡ, công việc hàng ngày, hay các dịp cuộc sống thường nhật. Đối với người mặc, đây không chỉ là một chiếc áo, mà còn là biểu tượng của phong cách và đẳng cấp, thể hiện sự tự tin và gu thẩm mỹ của mình.', 'images/eP03vqcBzpFn1xDFipKrBL6piGWBDoQAr8KLzBVR.jpg', 2000000, 0, NULL, NULL, 'SO-N1', 4000000, '2024-01-25 14:42:52', '2024-01-30 12:40:09', 0),
	(68, 22, 17, 'Áo thu nữ jean - calvin', 'Áo thu nữ jean Calvin là biểu tượng của sự tinh tế và phóng khoáng trong thế giới', 'Áo thu nữ jean Calvin là biểu tượng của sự tinh tế và phóng khoáng trong thế giới thời trang. Sản phẩm này đến từ thương hiệu nổi tiếng Calvin Klein, nổi tiếng với sự đơn giản, hiện đại và sự sang trọng. Áo thu jean nữ không chỉ là một chiếc áo mà còn là tuyên bố cá nhân và phong cách đặc trưng.\r\n\r\nChất liệu jean được sử dụng trong áo thu nữ Calvin không chỉ tạo nên sự cá tính mà còn mang lại cảm giác ấm áp và thoải mái trong mùa thu se lạnh. Với sự kết hợp linh hoạt, áo jean này có thể dễ dàng phối hợp với nhiều trang phục khác nhau, từ chiếc quần jean cá tính đến chân váy xinh xắn.\r\n\r\nThiết kế của áo thu nữ jean Calvin thường mang đến sự đơn giản nhưng không kém phần tinh tế. Chi tiết cắt may và form dáng được chăm chút tỉ mỉ, tạo nên sự vừa vặn hoàn hảo trên cơ thể người mặc. Logo Calvin Klein thường được thêu hoặc in nổi bật, tôn lên vẻ độc đáo và sang trọng.\r\n\r\nÁo thu nữ jean Calvin không chỉ là trang phục cho mọi ngày mà còn là điểm nhấn hoàn hảo cho các sự kiện thời trang hay những buổi gặp gỡ quan trọng. Khả năng biến hóa của sản phẩm này giúp phụ nữ tự tin và tỏa sáng ở mọi hoàn cảnh.\r\n\r\nVới sự kết hợp của chất liệu chất lượng, thiết kế đẳng cấp và thương hiệu uy tín, áo thu nữ jean Calvin là một lựa chọn không thể bỏ qua cho những người phụ nữ muốn kết hợp giữa phong cách cá nhân và xu hướng thời trang hiện đại trong mùa thu.', 'images/p1Rwv1DGWMq8AWvc1yfxH1UDEpjkZuI0QId6MdHU.jpg', 1200002, 0, NULL, NULL, 'JN2X-01', 2700000, '2024-01-25 14:44:46', '2024-01-30 12:40:22', 0),
	(69, 22, 17, 'Đầm nữ', 'Đầm nữ của thương hiệu Calvin Klein mang đến sự hòa quyện giữa sự thanh lịch', 'Đầm nữ của thương hiệu Calvin Klein mang đến sự hòa quyện giữa sự thanh lịch, hiện đại và phong cách đẳng cấp. Với tư duy thiết kế độc đáo, mỗi chiếc đầm Calvin Klein không chỉ là một sản phẩm thời trang, mà còn là biểu tượng của sự tự tin và quyến rũ.\r\n\r\nChất liệu cao cấp được sử dụng cho các sản phẩm này, thường là cotton, lụa, hoặc các sợi tổng hợp chất lượng cao, tạo nên sự êm dịu và thoải mái khi mặc. Độ chăm sóc chi tiết cao cấp được thể hiện qua từng đường may tỉ mỉ, tạo nên những bức tranh thời trang tinh tế và đẳng cấp.\r\n\r\nKiểu dáng của đầm nữ Calvin Klein là sự kết hợp tinh tế giữa sự giản đơn và sự sang trọng. Các đường cắt may độc đáo và phá cách, cùng với các chi tiết như cổ vuông, đường cúc bấm hay đắp lớp vải thông minh tạo nên sự độc đáo và thu hút. Mỗi chiếc đầm đều mang đến cho người mặc cảm giác thoải mái và tự tin, hòa mình vào thế giới thời trang hiện đại.\r\n\r\nVới màu sắc đa dạng từ những gam trung tính nhẹ nhàng đến những tông màu sắc táo bạo, đầm nữ Calvin Klein là sự lựa chọn hoàn hảo cho nhiều dịp, từ những buổi hẹn hò romantique đến các sự kiện quan trọng trong cuộc sống. Sự đa dạng trong thiết kế và chất liệu giúp chúng dễ dàng kết hợp với các phụ kiện khác nhau, từ giày cao gót đến giày sneakers, tạo nên phong cách cá nhân và ấn tượng. Đầm nữ Calvin Klein không chỉ là một trang phục, mà là biểu tượng của phong cách và vẻ đẹp hiện đại.', 'images/hnZCTjPRP3INJtT8QXtLdHTyJF5QitxAcW1HEii0.jpg', 1000000, 0, NULL, NULL, 'DNOT1', 1500000, '2024-01-25 14:46:22', '2024-01-30 16:20:50', 0),
	(70, 22, 17, 'quần Jean nữ', 'Quần Jeans nữ Calvin là biểu tượng của sự sang trọng và thời trang hiện đại', 'Quần Jeans nữ Calvin là biểu tượng của sự sang trọng và thời trang hiện đại, mang đến cho phụ nữ không chỉ sự thoải mái mà còn vẻ đẹp lịch lãm trong mọi tình huống. Với sự kết hợp tinh tế giữa chất liệu chất lượng và kiểu dáng độc đáo, quần Jeans Calvin là sự lựa chọn hoàn hảo để thể hiện phong cách cá nhân và sự tự tin.\r\n\r\nChất liệu denim cao cấp được sử dụng trong quần Jeans nữ Calvin, tạo nên độ bền và sự thoải mái khi mặc. Đường may tỉ mỉ và chi tiết thiết kế tinh tế không chỉ làm nổi bật đường cong nữ tính mà còn tạo nên một vẻ ngoại hình đẳng cấp và quyến rũ.\r\n\r\nKiểu dáng đa dạng là điểm mạnh của quần Jeans Calvin, từ các kiểu bootcut truyền thống đến skinny fit hoặc straight leg, tất cả đều được tạo ra để làm hài lòng sự đa dạng trong sở thích và phong cách của phụ nữ. Ngoài ra, Calvin còn sáng tạo trong việc áp dụng các chi tiết thời trang như những đường rách nhẹ, wash-out effects, hoặc các chi tiết đính kèm, làm tăng thêm sự cá tính và hiện đại.\r\n\r\nQuần Jeans nữ Calvin không chỉ là trang phục phù hợp cho những buổi dạo chơi hàng ngày mà còn là sự chọn lựa tuyệt vời cho các dịp quan trọng, từ các sự kiện lớn đến những cuộc hẹn nhỏ. Đồng thời, khả năng kết hợp linh hoạt với nhiều loại trang phục khác nhau giúp chúng trở thành một phần không thể thiếu trong tủ đồ của phụ nữ hiện đại, thể hiện sự sành điệu và đẳng cấp trong phong cách thời trang cá nhân.', 'images/mRhGCB067utDMndiJ1xXLgJpnUMFMLmXSx6yO7kd.webp', 1300000, 0, NULL, NULL, 'QCKF-01', 1900000, '2024-01-25 15:16:16', '2024-01-30 12:40:48', 0),
	(71, 22, 15, 'Quần trắng Nam', 'Quần trắng nam Calvin là biểu tượng của phong cách tinh tế và sự hiện đại', 'Quần trắng nam Calvin là biểu tượng của phong cách tinh tế và sự hiện đại, mang đến cho phái mạnh sự tự tin và lịch lãm. Sản phẩm này không chỉ là một chiếc quần, mà còn là biểu tượng của sự thanh lịch và đẳng cấp trong thế giới thời trang nam.\r\n\r\nChất liệu chủ yếu của quần trắng Calvin thường là cotton hoặc các loại vải chất lượng cao khác, đảm bảo sự thoải mái và thoáng khí cho người mặc. Sự chăm sóc đặc biệt đến từ thương hiệu Calvin Klein không chỉ giúp quần trắng trở nên mềm mại mà còn đảm bảo độ bền và dễ chịu trong mọi tình huống.\r\n\r\nKiểu dáng của quần được thiết kế đơn giản nhưng đầy tinh tế, tạo nên sự thoải mái và linh hoạt cho người mặc. Với màu trắng trơn, quần Calvin là sự kết hợp hoàn hảo cho nhiều bộ trang phục khác nhau, từ áo polo cho tới áo sơ mi, giúp tạo nên phong cách đa dạng cho mọi dịp.\r\n\r\nĐiểm nhấn của quần trắng nam Calvin thường là logo nhỏ, tinh tế, nằm ở vị trí tinh tế, tạo điểm nhấn và làm nổi bật thương hiệu. Chi tiết này không chỉ làm tăng giá trị thẩm mỹ mà còn là biểu tượng của sự sang trọng và quyến rũ.\r\n\r\nQuần trắng nam Calvin không chỉ là lựa chọn cho những bữa tiệc thư giãn hay các sự kiện lịch lãm, mà còn là người bạn đồng hành tin cậy trong những ngày dạo phố hay chuyến du lịch. Sự kết hợp giữa thiết kế tinh tế và chất liệu cao cấp khiến cho sản phẩm này trở thành biểu tượng thời trang mà mọi quý ông đều muốn sở hữu.', 'images/GAXaKSvu3M8HevhUmnDXX9yQFKsgF4V5ydza6d8B.jpg', 2500000, 0, NULL, NULL, 'QOGT-09', 3000000, '2024-01-25 15:19:11', '2024-01-30 12:41:01', 0);

-- Dumping structure for table shopqa.product_images
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.product_images: ~62 rows (approximately)
DELETE FROM `product_images`;
INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
	(16, 37, 'images/5wQsFvj2Ch81BEKLOO64qMperG7hUAfo6NZvpH6I.jpg', '2023-11-22 03:22:01', '2023-11-22 03:22:01'),
	(17, 37, 'images/3fw9Sxjz3Xsiub6r1O9Y5gsH1geU2czopw1wELP3.jpg', '2023-11-22 03:22:01', '2023-11-22 03:22:01'),
	(18, 37, 'images/WVhsZQUPSAkfQIUqqOERBN3zgsPtLkiPlWVZwNI9.jpg', '2023-11-22 03:22:01', '2023-11-22 03:22:01'),
	(19, 38, 'images/o9DUtOeR47xfXCLiVy59iSvTsKfMJF70VtHs8pvI.jpg', '2024-01-14 14:32:54', '2024-01-14 14:32:54'),
	(20, 38, 'images/JXwipxrgssBw21aLErzPuiuY4mHkPekBYlTfB990.jpg', '2024-01-14 14:32:54', '2024-01-14 14:32:54'),
	(21, 38, 'images/Ss5BWSTZ17gnbcrYR4bCVMZL4DLmKiGODbXENM3d.jpg', '2024-01-14 14:32:54', '2024-01-14 14:32:54'),
	(22, 39, 'images/VSgWBv2VbIjt7KGiGMs8htFIti8kaTk1HbJy4wjl.jpg', '2024-01-14 14:41:41', '2024-01-14 14:41:41'),
	(23, 39, 'images/8ZmOY8COYLcmBUFHIpsZgXLUZ5ot1TQNDC7mRUBB.jpg', '2024-01-14 14:41:41', '2024-01-14 14:41:41'),
	(24, 39, 'images/RiQ1AYCpbHBS8KUJfOI4leJfnyZQOkbBhcuAHmeO.jpg', '2024-01-14 14:41:41', '2024-01-14 14:41:41'),
	(25, 40, 'images/tsbeghDLjxU52cfiiAgzHukr1Mkl95iaV9H1Twmk.jpg', '2024-01-14 15:19:04', '2024-01-14 15:19:04'),
	(26, 40, 'images/bcBvyY65441FWabNGtCniwgTJGt4M8fC7OuhTtRR.jpg', '2024-01-14 15:19:04', '2024-01-14 15:19:04'),
	(27, 40, 'images/tOqBrxIsakUfkt6fuwcuoyHBvKvaPq6vDaLXLXjw.jpg', '2024-01-14 15:19:04', '2024-01-14 15:19:04'),
	(28, 41, 'images/JCnJPSNiOvo0eBwwThYnspMbQv4EHR7xlrmgLzua.jpg', '2024-01-14 15:36:52', '2024-01-14 15:36:52'),
	(29, 41, 'images/miq3biFNW2mwNcXDkNt40dDWQ0DrAYQurKgMmm9H.jpg', '2024-01-14 15:36:52', '2024-01-14 15:36:52'),
	(30, 41, 'images/NlLFAlCLqZEeHaXXBQenacHV5abyXJ8L0JQBwgp7.jpg', '2024-01-14 15:36:52', '2024-01-14 15:36:52'),
	(31, 42, 'images/dDKRA4dL4j1RckWJIPxTfwxHCbzm3Ts006KEmIqJ.jpg', '2024-01-14 15:43:40', '2024-01-14 15:43:40'),
	(32, 42, 'images/rGgXQZBLcMkVhM8wuX5oJC18iACHgTfjZrZFR8oz.jpg', '2024-01-14 15:43:40', '2024-01-14 15:43:40'),
	(33, 43, 'images/AdQIVpPgb6m7XXP37utptkxwOcbEfKllZxb0jKak.jpg', '2024-01-14 15:56:40', '2024-01-14 15:56:40'),
	(34, 43, 'images/uWAQVIHKPY5BC6YZ59GuuxCgRRW5rdPihZsLFiAV.jpg', '2024-01-14 15:56:40', '2024-01-14 15:56:40'),
	(35, 43, 'images/1r0sYD9MlsugvIwkpF2Atra4Zw29qX53cX48duf9.jpg', '2024-01-14 15:56:40', '2024-01-14 15:56:40'),
	(36, 44, 'images/voLWPEelQ1VdkP945lWQpShwgPXyV8xpcgRfvLbm.jpg', '2024-01-16 16:58:47', '2024-01-16 16:58:47'),
	(37, 44, 'images/HYwkGUYcAiXdPqFzoFzpmJlf8pQnppB1TZT9J3Ui.jpg', '2024-01-16 16:58:47', '2024-01-16 16:58:47'),
	(38, 45, 'images/rHhvjWMM8xok7I76MfdH2NEr7uAzn6hnO6jMOSUR.jpg', '2024-01-16 16:59:37', '2024-01-16 16:59:37'),
	(39, 46, 'images/H3G0MCBs7gqg58IdVIgIVWG3CKGQaeYMgUMfcEoy.jpg', '2024-01-21 15:57:21', '2024-01-21 15:57:21'),
	(40, 47, 'images/M06a9z1Ls2zCWalXf0F4Q3nI8ZMkjj2YB1tdFa6R.jpg', '2024-01-21 18:12:33', '2024-01-21 18:12:33'),
	(41, 48, 'images/dlDypEhtOlZnXQSUv4Luqszl1HbSrc6UxQQZiApL.jpg', '2024-01-21 18:17:42', '2024-01-21 18:17:42'),
	(42, 49, 'images/BbgYdWFgGL1ktEMy9wRI1VLSXSsDBq180Q1Ltwtw.webp', '2024-01-23 14:04:01', '2024-01-23 14:04:01'),
	(43, 50, 'images/eR1SckGwdaHQIqXw3161tLOmcryFeA9f406WMhLE.jpg', '2024-01-23 14:05:51', '2024-01-23 14:05:51'),
	(44, 51, 'images/rMuRZrdtaMrTRIBO7DSie5YIGSWVL6Hp65Gpqlx5.jpg', '2024-01-23 14:11:29', '2024-01-23 14:11:29'),
	(45, 55, 'images/yTxClCXrLmlDVKYDE1b6balDMJOwfTGUyr7bKD5P.jpg', '2024-01-23 14:21:29', '2024-01-23 14:21:29'),
	(46, 56, 'images/9ERa2j77V0ngS6guJaLy5iysaLZM0Ps2yTxPMtJu.jpg', '2024-01-23 14:23:35', '2024-01-23 14:23:35'),
	(47, 57, 'images/qY73hk4Js3zcUwI6bRoePfQFCiZd5FJ6UeqlBJ2J.jpg', '2024-01-23 14:24:47', '2024-01-23 14:24:47'),
	(48, 59, 'images/2A325UzhGxkgkehz9e28kXAABHNekGvzA9yuMi0N.jpg', '2024-01-23 14:49:51', '2024-01-23 14:49:51'),
	(49, 60, 'images/J8vOdmfoP3IHLAywDfoYmp8SJhwBlqwtHgWZZxy3.jpg', '2024-01-23 16:07:58', '2024-01-23 16:07:58'),
	(50, 60, 'images/okM0VjPfmTvw12oUjjxABqaH4NQ297ENEtV0Rw36.jpg', '2024-01-23 16:07:58', '2024-01-23 16:07:58'),
	(51, 60, 'images/euSUHDwqqmhNpNdM14AdLzVWLPSYwXOrfpyulsvx.png', '2024-01-23 16:07:58', '2024-01-23 16:07:58'),
	(52, 60, 'images/T4FBxkuK0jgckLa7SbOotO9j2na4KeYPQhYNDGHt.jpg', '2024-01-23 16:07:58', '2024-01-23 16:07:58'),
	(53, 60, 'images/bI3Shc9wgiFtTEgAJ4FJ4JedRXtV1uegkv3rYZxd.webp', '2024-01-23 16:20:29', '2024-01-23 16:20:29'),
	(54, 60, 'images/LAQI26n9oT8bj8jxJboZPBcHhUEGBQxTatNPLE0K.jpg', '2024-01-23 16:20:29', '2024-01-23 16:20:29'),
	(55, 60, 'images/X6GTrSmEVnf4BqilMGvXD0oSo8fvLGelTcEUtksP.jpg', '2024-01-23 16:20:29', '2024-01-23 16:20:29'),
	(56, 60, 'images/J0CsclJuMasHkj4PGmWeQo3n3LOevXiYvRKxbCsB.jpg', '2024-01-23 16:20:29', '2024-01-23 16:20:29'),
	(57, 60, 'images/jtnBLOBZWvQANpxE6axnQ17TjKdawzYobjybfgif.webp', '2024-01-23 16:21:20', '2024-01-23 16:21:20'),
	(58, 60, 'images/bRUji6Jc19WsrTnjYIQfYaEZfXiFOCfZuH32lEyK.jpg', '2024-01-23 16:21:20', '2024-01-23 16:21:20'),
	(59, 60, 'images/nwYCCgdYzFH1CEhalhYxGXZcDzpfAnNbWLJU8UIn.jpg', '2024-01-23 16:21:20', '2024-01-23 16:21:20'),
	(60, 60, 'images/gRVSHayC4Xw1awMuYQDJeAASBLcHvQMdQ1cEHOBC.jpg', '2024-01-23 16:21:20', '2024-01-23 16:21:20'),
	(72, 63, 'images/hS1EOTj57mryo3W7C7kLWjzKFQMhdifq2v7g1zdH.jpg', '2024-01-25 03:08:54', '2024-01-25 03:08:54'),
	(73, 64, 'images/w8rRMmWoWgufhQR4DlIrKVbIM1UwJiWc01875w2V.jpg', '2024-01-25 03:09:17', '2024-01-25 03:09:17'),
	(74, 65, 'images/kkBrpjMQKKBPT2dPVkiWluUPYmZd6DajkVuKLVG1.jpg', '2024-01-25 14:38:21', '2024-01-25 14:38:21'),
	(75, 65, 'images/a9yfU027M3Ea69noTcGWlykP3us2kfibSJq1jna7.jpg', '2024-01-25 14:38:21', '2024-01-25 14:38:21'),
	(76, 65, 'images/TxpWnmoZK52T9DgtFzp2YPqUMqSqriO8Rvlgi8iX.jpg', '2024-01-25 14:38:21', '2024-01-25 14:38:21'),
	(77, 66, 'images/GFqnTBzHObf7O6edfZB8CMxwDti53kO2ZK8wIsGY.jpg', '2024-01-25 14:40:21', '2024-01-25 14:40:21'),
	(78, 66, 'images/5j6eTZ9wcSVa46VPri5oYBVytEhCuqqozPypqYpA.jpg', '2024-01-25 14:40:21', '2024-01-25 14:40:21'),
	(79, 66, 'images/XXBpqgitrkntkPWvIzAkWBfIAbg42o59h8Ea9Bcw.jpg', '2024-01-25 14:40:21', '2024-01-25 14:40:21'),
	(80, 67, 'images/FkwjZ2N74wL7jh8ENSoTi4rsqeeIV4iQEL5vkNcs.jpg', '2024-01-25 14:42:52', '2024-01-25 14:42:52'),
	(81, 67, 'images/g2FsesLQ2dafO7zbXvi3ymSy6597z401zQn5trMx.jpg', '2024-01-25 14:42:52', '2024-01-25 14:42:52'),
	(82, 67, 'images/MsqkE9OfkGeTJzf0uMCT3prd20GQklkgmKIMiLBI.jpg', '2024-01-25 14:42:52', '2024-01-25 14:42:52'),
	(83, 68, 'images/q1GqjxDoSGsNjjPA8MELp7wTQq2wO7osuy0Izc4S.jpg', '2024-01-25 14:44:46', '2024-01-25 14:44:46'),
	(84, 68, 'images/l6ry4v1f1QeIcC7VRuoDELYfzmWq6FLOf4mDzDWC.jpg', '2024-01-25 14:44:46', '2024-01-25 14:44:46'),
	(85, 68, 'images/K9pmpqN9GYM29E6jDrTFfwxQibdjwl8k0v9UG74t.jpg', '2024-01-25 14:44:46', '2024-01-25 14:44:46'),
	(86, 69, 'images/qsgobpBtOokhSHcB9zF0MyygLS2bvRoCKwwjDO2v.jpg', '2024-01-25 14:46:22', '2024-01-25 14:46:22'),
	(87, 69, 'images/HlhsvEFVviS4uLMFiIeAOGaFJj3851vd4IrSPBqB.jpg', '2024-01-25 14:46:22', '2024-01-25 14:46:22'),
	(88, 70, 'images/LHIFC4knkxwBcHl8ihdVLiAuCDpFkq5igpaeWIVO.webp', '2024-01-25 15:16:16', '2024-01-25 15:16:16'),
	(89, 70, 'images/sOEeQijR4RvpGhFPQKIImYVG1Y1P5Dy5uGtmZstM.webp', '2024-01-25 15:16:16', '2024-01-25 15:16:16'),
	(90, 70, 'images/AkiLhVzfsk5XEtOxRhoqlOXs04bv9ZAj5gWUvu3Z.webp', '2024-01-25 15:16:16', '2024-01-25 15:16:16'),
	(91, 71, 'images/6f3E4mK6S0bTgDdLZnGo2xiO9gbxelqC5SdwFWqN.jpg', '2024-01-25 15:19:11', '2024-01-25 15:19:11'),
	(92, 71, 'images/GZVaKa6hejGx7nnJ7FaM4OSvBA2m1hCIcNYr8XuX.jpg', '2024-01-25 15:19:11', '2024-01-25 15:19:11'),
	(93, 71, 'images/M1aHAXP7msWrRxbWSOI28EtOQwtsk0xQsyWfAjsj.jpg', '2024-01-25 15:19:11', '2024-01-25 15:19:11'),
	(94, 72, 'images/hr6VhrGvMFeLdQ8aY2lLeapNRarVf344iHdolxvm.jpg', '2024-01-28 10:41:35', '2024-01-28 10:41:35');

-- Dumping structure for table shopqa.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_product_id_index` (`product_id`),
  KEY `reviews_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.reviews: ~14 rows (approximately)
DELETE FROM `reviews`;
INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `content`, `rate`, `created_at`, `updated_at`) VALUES
	(1, 16, 11, 'Maiores voluptatibus rerum natus et enim.', 2, '2023-09-07 01:39:13', '2023-09-07 01:39:13'),
	(2, 6, 11, 'Et esse sed sequi odit ut odit.', 5, '2023-09-07 01:39:13', '2023-09-07 01:39:13'),
	(121, 4, 14, 'ádasd', 3, '2023-11-23 09:46:26', '2023-11-23 09:46:26'),
	(122, 4, 14, 'review test', 5, '2023-11-23 09:46:45', '2023-11-23 09:46:45'),
	(123, 4, 14, 'ghfghfgh', 4, '2023-11-23 09:49:21', '2023-11-23 09:49:21'),
	(124, 4, 14, NULL, 2, '2023-11-23 09:51:02', '2023-11-23 09:51:02'),
	(125, 4, 14, NULL, 4, '2023-11-23 09:51:10', '2023-11-23 09:51:10'),
	(126, 4, 14, NULL, 5, '2023-11-23 10:01:59', '2023-11-23 10:01:59'),
	(127, 4, 14, 'asdasdasd', 3, '2023-11-23 10:02:06', '2023-11-23 10:02:06'),
	(128, 4, 14, 'asdsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 4, '2023-11-23 10:02:23', '2023-11-23 10:02:23'),
	(129, 37, 14, 'ádasdasdasd', 4, '2024-01-04 13:44:23', '2024-01-04 13:44:23'),
	(130, 60, 14, 'srgsgr', 5, '2024-01-25 02:57:14', '2024-01-25 02:57:14'),
	(131, 60, 14, '3333', 2, '2024-01-25 02:58:47', '2024-01-25 02:58:47'),
	(132, 60, 14, NULL, 1, '2024-01-25 03:04:06', '2024-01-25 03:04:06'),
	(133, 65, 14, NULL, 4, '2024-01-26 15:48:31', '2024-01-26 15:48:31'),
	(134, 65, 14, 'lien', 3, '2024-01-26 15:48:44', '2024-01-26 15:48:44');

-- Dumping structure for table shopqa.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.sales: ~2 rows (approximately)
DELETE FROM `sales`;
INSERT INTO `sales` (`id`, `product_id`, `title`, `content`, `time_start`, `time_end`, `is_show`, `created_at`, `updated_at`) VALUES
	(27, 71, 'Sale lớn đầu năm', 'Năm mới tết đến cùng nhau sắm đồ đón tết', '2024-01-25 22:24:00', '2024-02-10 22:25:00', 0, '2024-01-25 15:25:07', '2024-01-28 10:40:13');

-- Dumping structure for table shopqa.sizes
CREATE TABLE IF NOT EXISTS `sizes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sizes_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.sizes: ~18 rows (approximately)
DELETE FROM `sizes`;
INSERT INTO `sizes` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
	(76, 'xl', 69, '2024-01-25 14:46:48', '2024-01-25 14:46:48'),
	(78, 'xxl', 69, '2024-01-25 14:56:50', '2024-01-25 14:56:50'),
	(80, 'l', 69, '2024-01-25 15:05:31', '2024-01-25 15:05:31'),
	(82, 'xxl', 65, '2024-01-25 15:08:01', '2024-01-25 15:08:01'),
	(84, 'xl', 66, '2024-01-25 15:08:41', '2024-01-25 15:08:41'),
	(85, 'l', 66, '2024-01-25 15:08:56', '2024-01-25 15:08:56'),
	(86, 'l', 67, '2024-01-25 15:11:01', '2024-01-25 15:11:01'),
	(87, 'xxl', 67, '2024-01-25 15:11:20', '2024-01-25 15:11:20'),
	(89, 'l', 68, '2024-01-25 15:12:00', '2024-01-25 15:12:00'),
	(90, 'xl', 68, '2024-01-25 15:12:17', '2024-01-25 15:12:17'),
	(93, 'l', 70, '2024-01-25 15:16:45', '2024-01-25 15:16:45'),
	(94, 'xl', 70, '2024-01-25 15:17:02', '2024-01-25 15:17:02'),
	(95, 'm', 70, '2024-01-25 15:17:18', '2024-01-25 15:17:18'),
	(96, 'xxl', 71, '2024-01-25 15:19:29', '2024-01-25 15:19:29'),
	(100, 'm', 65, '2024-01-26 14:13:37', '2024-01-26 14:13:37'),
	(101, 'xl', 65, '2024-01-26 14:13:53', '2024-01-26 14:13:53'),
	(103, 's', 65, '2024-01-26 15:13:18', '2024-01-26 15:13:18'),
	(104, 'm', 72, '2024-01-28 10:41:54', '2024-01-28 10:41:54');

-- Dumping structure for table shopqa.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.sliders: ~2 rows (approximately)
DELETE FROM `sliders`;
INSERT INTO `sliders` (`id`, `title`, `content`, `url`, `image`, `created_at`, `updated_at`, `is_show`) VALUES
	(47, 'Sales 50%', 'Sale new year 2024', 'http://shopqa.test/products/somi-nt-N-01', 'images/Nmlz7syCSmukCZBZes2xGz08avYEVkVKkaSbxXrY.jpg', '2024-01-17 06:50:44', '2024-01-28 15:20:43', 1),
	(48, 'Mẫu mới năm 2024', 'một năm bùng nổ mẫu mới năm 2024', 'http://shopqa.test/products/cv-DM-1', 'images/et3DloOpsLrmNFtBgALTih6DqkFT8hSVKKb5tdpd.jpg', '2024-01-17 06:51:52', '2024-01-28 15:07:17', 1);

-- Dumping structure for table shopqa.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shopqa.users: ~4 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `district`, `created_at`, `updated_at`, `address`, `city`, `ward`, `permissions`) VALUES
	(9, 'Norbert Cummerata', 'kq4102000@gmail.com', '2023-09-06 02:56:11', '$2y$10$euvFQ7MllxsGTuHF9vggre7zdz5BkEUvhZZT0tHWgy4c3QFCzek3W', '26lTXuAapNr7CDUFVfbfMAnetLtlepKEd2UoI0PtxTCvGCkIGdNYvD6VrSJF', '012345678', NULL, '2023-09-06 02:56:11', '2024-01-25 17:05:54', 'soso 45 - bắc từ liêm - Hà Nội', NULL, NULL, '{"blog": false, "sale": false, "admin": false, "brand": false, "order": false, "super": false, "product": false, "category": false}'),
	(13, 'quan khổng văn', '0868033462kvq@gmail.com', '2024-01-25 17:11:06', '$2y$10$OvW1Ur8ezQ6vphxOVjWmnOX8YwEm6TXlMRmO4zsdRR9cqhektmoAG', NULL, NULL, NULL, '2023-09-10 09:40:05', '2024-01-25 17:11:06', NULL, NULL, NULL, '{"blog": false, "sale": false, "admin": false, "brand": false, "order": false, "super": false, "product": false, "category": false}'),
	(14, 'Super Admin', '0868033462sdkvq@gmail.com', NULL, '$2y$10$fvJ1Qd/2hgNXDSp0nOFe1.EYbBLu.y.QuNWYA7QC9g9XMhTDRilVG', 'RrQWuWVIipXKEjWRqwYv5V7Url8pI4rHH7EhTAly42Oenj1bcOfgBUmVt8jI', '0868033466', '586', '2023-09-10 09:43:33', '2024-01-30 16:07:18', 'Số 2', '58', '22846', '{"blog": true, "sale": true, "admin": true, "brand": true, "order": true, "super": true, "product": true, "category": true}'),
	(16, 'admin', 'admin@gmail.com', NULL, '$2y$10$EjyHPiarYYVV9QKLYGjJq.Ot4qHNXkYGtOsp77beDO0IRqprR8CSm', NULL, '0901515161', NULL, '2024-01-21 07:20:55', '2024-01-23 18:44:16', 'số 38 Đức Thọ', NULL, NULL, '{"blog": false, "sale": false, "admin": false, "brand": false, "order": false, "super": false, "product": false, "category": false}');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
