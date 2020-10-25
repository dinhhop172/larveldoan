-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 07, 2020 lúc 05:34 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsieuthi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `mail`, `address`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Miss Maegan', 'missmaea@gmail.com', 'Quang Dien, TT Hue', '097514123', '2020-06-03 13:04:37', '2020-06-28 10:16:44'),
(2, 'MacProdasd', 'macasd@gmail.com', 'Quang Dien, TT Hue', '0121441235', '2020-06-03 13:04:50', '2020-06-28 10:17:00'),
(3, 'Keira Dom', 'keiradom@gmail.com', 'Quang Dien, TT Hue', '0351451502', '2020-06-03 13:05:00', '2020-06-28 10:17:17'),
(4, 'DianaLen', 'dianalen@gmail.com', 'Nguyễn Huệ, TT-Huế', '086561852', '2020-06-03 13:05:19', '2020-06-28 10:17:36'),
(5, 'Msier', 'msied@gmail.com', 'Nguyễn Huệ, TT-Huế', '095718415', '2020-06-03 13:05:35', '2020-06-28 10:17:46'),
(7, 'Truong Khong', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '098912301', '2020-06-28 10:14:05', '2020-06-28 10:14:05'),
(8, 'Hop', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '0121441235', '2020-06-29 09:14:47', '2020-06-29 09:14:47'),
(9, 'Hop', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '0121441235', '2020-06-29 09:18:39', '2020-06-29 09:18:39'),
(10, 'Khong Phu', 'keiradom@gmail.com', 'Nguyễn Huệ, TT-Huế', '0351451502', '2020-06-29 09:19:51', '2020-06-29 09:19:51'),
(11, 'Khong Phu', 'keiradom@gmail.com', 'Nguyễn Huệ, TT-Huế', '0351451502', '2020-06-29 09:23:05', '2020-06-29 09:23:05'),
(12, 'Khong Phu', 'keiradom@gmail.com', 'Nguyễn Huệ, TT-Huế', '0351451502', '2020-06-29 09:23:25', '2020-06-29 09:23:25'),
(13, 'Keira', 'domdom@gmaill.com', 'Quang Dien, TT Hue', '415131541', '2020-06-29 09:25:02', '2020-06-29 09:25:02'),
(14, 'Domdom', 'domdom@gmail.com', 'Nguyễn Huệ, TT-Huế', '0121441235', '2020-06-29 09:29:50', '2020-06-29 09:29:50'),
(15, 'Domdom', 'domdom@gmail.com', 'Nguyễn Huệ, TT-Huế', '0121441235', '2020-06-29 09:40:50', '2020-06-29 09:40:50'),
(16, 'Apple', 'linhdan@gmail.com', 'Nguyễn Huệ, TT-Huế', '0121441235', '2020-06-29 09:41:42', '2020-06-29 09:41:42'),
(17, 'Android', 'linhdan@gmail.com', 'Quang Dien, TT Hue', '0121441235', '2020-06-29 09:49:22', '2020-06-29 09:49:22'),
(18, 'Miss Maegan', 'streutel@yahoo.com.vn', 'Quang Dien, TT Hue', '0351451502', '2020-06-29 09:50:00', '2020-06-29 09:50:00'),
(19, 'MacProdasd', 'streutel@yahoo.com.vn', 'Quang Dien, TT Hue', '0351451502', '2020-06-29 09:50:32', '2020-06-29 09:50:32'),
(20, 'Iphone', 'ip@gmail.com', 'Nguyễn Huệ, TT-Huế', '123', '2020-06-29 09:51:36', '2020-06-29 09:51:36'),
(21, 'ProRackingBOy', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '0121441235', '2020-06-29 09:53:53', '2020-06-29 09:53:53'),
(22, 'ProRackingBOy', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '0121441235', '2020-06-29 09:59:04', '2020-06-29 09:59:04'),
(23, 'Maybe', 'bemay@gmaill.com', 'Quang Dien, TT Hue', '0351451502', '2020-06-29 10:03:44', '2020-06-29 10:03:44'),
(24, 'Truong Khong', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '0121441235', '2020-06-29 10:46:22', '2020-06-29 10:46:22'),
(25, 'Iphone', 'dasdads@gmail.com', 'Quang Dien, TT Hue', '0351451502', '2020-06-29 13:07:02', '2020-06-29 13:07:02'),
(26, 'Truong Khong', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '0121441235', '2020-06-29 13:16:50', '2020-06-29 13:16:50'),
(27, 'Truong Khong', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '0351451502', '2020-06-29 13:20:31', '2020-06-29 13:20:31'),
(28, 'Truong Khong', 'dinhho@gmail.com', 'Quang Dien, TT Hue', '0351451502', '2020-06-29 13:22:38', '2020-06-29 13:22:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_08_023852_create_customer_table', 1),
(4, '2020_05_08_024047_create_order_table', 1),
(5, '2020_05_08_024242_create_product_table', 1),
(6, '2020_05_08_024651_create_order_detail_table', 1),
(7, '2020_05_31_063342_create_product_brand_table', 1),
(8, '2020_05_08_144026_add_foreignkey_to_order', 2),
(9, '2020_05_31_065339_add_foreignkey_to_product', 3),
(10, '2020_05_08_144519_add_foreignkey_to_order_detail', 4),
(22, '2014_10_12_100000_create_password_resets_table', 5),
(26, '2020_06_08_123040_add_role_to_users', 6),
(37, '2020_06_22_152344_edit_all_to_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `date_order` date DEFAULT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `customer_id`, `date_order`, `total`, `created_at`, `updated_at`) VALUES
(1, 8, '2020-06-29', 26.759, '2020-06-29 09:14:47', '2020-06-29 09:14:47'),
(2, 9, '2020-06-29', 26.759, '2020-06-29 09:18:39', '2020-06-29 09:18:39'),
(3, 10, '2020-06-29', 33.589, '2020-06-29 09:19:51', '2020-06-29 09:19:51'),
(4, 11, '2020-06-29', 33.589, '2020-06-29 09:23:05', '2020-06-29 09:23:05'),
(5, 12, '2020-06-29', 33.589, '2020-06-29 09:23:25', '2020-06-29 09:23:25'),
(6, 13, '2020-06-29', 32.198, '2020-06-29 09:25:02', '2020-06-29 09:25:02'),
(7, 14, '2020-06-29', 10.45, '2020-06-29 09:29:50', '2020-06-29 09:29:50'),
(8, 15, '2020-06-29', 10.45, '2020-06-29 09:40:50', '2020-06-29 09:40:50'),
(9, 16, '2020-06-29', 10.45, '2020-06-29 09:41:42', '2020-06-29 09:41:42'),
(10, 17, '2020-06-29', 10.45, '2020-06-29 09:49:22', '2020-06-29 09:49:22'),
(11, 18, '2020-06-29', 10.45, '2020-06-29 09:50:00', '2020-06-29 09:50:00'),
(12, 19, '2020-06-29', 10.45, '2020-06-29 09:50:32', '2020-06-29 09:50:32'),
(13, 20, '2020-06-29', 10.45, '2020-06-29 09:51:36', '2020-06-29 09:51:36'),
(14, 21, '2020-06-29', 23.123, '2020-06-29 09:53:53', '2020-06-29 09:53:53'),
(15, 22, '2020-06-29', 23.123, '2020-06-29 09:59:04', '2020-06-29 09:59:04'),
(16, 23, '2020-06-29', 10.45, '2020-06-29 10:03:44', '2020-06-29 10:03:44'),
(17, 24, '2020-06-29', 10.45, '2020-06-29 10:46:23', '2020-06-29 10:46:23'),
(18, 25, '2020-06-29', 2.424, '2020-06-29 13:07:02', '2020-06-29 13:07:02'),
(19, 26, '2020-06-29', 12.94, '2020-06-29 13:16:50', '2020-06-29 13:16:50'),
(20, 27, '2020-06-29', 17.49, '2020-06-29 13:20:31', '2020-06-29 13:20:31'),
(21, 28, '2020-06-29', 32.123, '2020-06-29 13:22:38', '2020-06-29 13:22:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `quantity`, `price`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 23.123, 2, 56, '2020-06-29 09:18:39', '2020-06-29 09:18:39'),
(2, 3, 1.212, 2, 55, '2020-06-29 09:18:39', '2020-06-29 09:18:39'),
(3, 1, 17.49, 5, 60, '2020-06-29 09:23:25', '2020-06-29 09:23:25'),
(4, 1, 16.099, 5, 62, '2020-06-29 09:23:25', '2020-06-29 09:23:25'),
(5, 2, 16.099, 6, 62, '2020-06-29 09:25:02', '2020-06-29 09:25:02'),
(6, 1, 10.45, 8, 61, '2020-06-29 09:40:50', '2020-06-29 09:40:50'),
(7, 1, 10.45, 9, 61, '2020-06-29 09:41:42', '2020-06-29 09:41:42'),
(8, 1, 10.45, 10, 61, '2020-06-29 09:49:22', '2020-06-29 09:49:22'),
(9, 1, 10.45, 11, 61, '2020-06-29 09:50:00', '2020-06-29 09:50:00'),
(10, 1, 10.45, 12, 61, '2020-06-29 09:50:32', '2020-06-29 09:50:32'),
(11, 1, 10.45, 13, 61, '2020-06-29 09:51:36', '2020-06-29 09:51:36'),
(12, 1, 23.123, 14, 56, '2020-06-29 09:53:53', '2020-06-29 09:53:53'),
(13, 1, 23.123, 15, 56, '2020-06-29 09:59:04', '2020-06-29 09:59:04'),
(14, 1, 10.45, 16, 61, '2020-06-29 10:03:44', '2020-06-29 10:03:44'),
(15, 1, 10.45, 17, 61, '2020-06-29 10:46:23', '2020-06-29 10:46:23'),
(16, 2, 1.212, 18, 55, '2020-06-29 13:07:02', '2020-06-29 13:07:02'),
(17, 1, 2.49, 19, 63, '2020-06-29 13:16:50', '2020-06-29 13:16:50'),
(18, 1, 10.45, 19, 61, '2020-06-29 13:16:50', '2020-06-29 13:16:50'),
(19, 1, 17.49, 20, 60, '2020-06-29 13:20:31', '2020-06-29 13:20:31'),
(20, 1, 32.123, 21, 53, '2020-06-29 13:22:38', '2020-06-29 13:22:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc` varchar(500) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` double NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hdh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_brand_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `desc`, `image`, `price`, `pin`, `card`, `cpu`, `camera`, `hdh`, `screen`, `product_brand_id`, `created_at`, `updated_at`) VALUES
(53, 'Smartphone Masstel X6', 'Chia đôi màn hình, Nhận diện khuôn mặt Ứng dụng kép, Không gian thứ hai, chặn tin nhắn, thu nhỏ màn hình sử dụng một tay, chạm 2 lần sáng màn hình, sạc pin nhanh', 'http://127.0.0.1:8000/upload/d1.jpg', 32.123, '5000 mAh', 'MicroSD, hỗ trợ tối đa 512 GB', '8 nhân 1.8 GHz', '13.0 MP + 2.0 MP + 5.0 MP', 'Android', 'PLS TFT LCD, 6.4\"', 3, '2020-06-22 07:54:17', '2020-06-22 09:04:12'),
(55, 'Samsung Galaxy M30s', 'Mở khóa bằng vân tay, Dolby Audio, đèn pin, sạc pin nhanh, chặn cuộc gọi, chặn tin nhắn', 'http://127.0.0.1:8000/upload/d2.jpg', 1.212, '6000 mAh', 'MicroSD, hỗ trợ tối đa 512 GB', 'Exynos 9611 8 nhân', '48 MP, 8 MP và 5 MP (3 camera)', 'Android', 'Super AMOLED, 6.4\", Full HD+ (1080 x 2280 Pixels)', 3, '2020-06-22 08:03:29', '2020-06-22 09:05:35'),
(56, 'Samsung Galaxy A20s', 'Mở khóa bằng vân tay, Mở khóa bằng khuôn mặt', 'http://127.0.0.1:8000/upload/d5.jpg', 23.123, '4000 mAh', 'MicroSD, hỗ trợ tối đa 256 GB', 'Qualcomm Snapdragon 450 8 nhân 64-bit', 'Chính 13 MP & Phụ 8 MP, 5 MP', 'Android 9.0 (Pie)', '6.5\", HD+ (720 x 1520 Pixels), Mặt kính cong 2.5D, IPS LCD', 3, '2020-06-22 08:04:55', '2020-06-22 09:07:07'),
(57, 'Samsung Galaxy M11', 'Gia tốc, Cảm biến vân tay, Cảm biến ánh sáng, Cảm biến tiệm cận', 'http://127.0.0.1:8000/upload/d7.jpg', 23.123, '5000 mAh', 'MicroSD, hỗ trợ tối đa 256 GB', 'Exynos 9611 8 nhân', '13.0 MP + 2.0 MP + 5.0 MP', 'Android', 'PLS TFT LCD, 6.4\"', 3, '2020-06-22 08:07:53', '2020-06-22 09:08:25'),
(58, 'Xiaomi Redmi Note 8', 'Chia đôi màn hình, Nhận diện khuôn mặt Ứng dụng kép, Không gian thứ hai, chặn tin nhắn, thu nhỏ màn hình sử dụng một tay, chạm 2 lần sáng màn hình, sạc pin nhanh', 'http://127.0.0.1:8000/upload/x1.png', 32.123, '4000 mAh', 'MicroSD, hỗ trợ tối đa 256 GB', 'Qualcomm Snapdragon 665 8 nhân', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Android 9.0 (Pie)', 'IPS LCD Full HD+ (1080 x 2340 Pixels)', 5, '2020-06-22 09:00:47', '2020-06-22 09:00:47'),
(59, 'iPhone 11 Pro', 'Chống nước, chống bụi, Face ID, Sạc pin nhanh', 'http://127.0.0.1:8000/upload/i6.jpg', 27.99, '4000 mAh', 'MicroSD, hỗ trợ tối đa 256 GB', 'Apple A13 Bionic (7 nm+)', '12MP / 12MP + 12MP + 12MP', 'IOS', 'OLED (Super Retina XDR), 6.5 inch, 2688 x 1242 pixels', 1, '2020-06-23 03:49:23', '2020-06-23 03:49:23'),
(60, 'iPhone XS', 'Đạt chuẩn chống nước bụi IP68, Face ID', 'http://127.0.0.1:8000/upload/i3.jpg', 17.49, '2716mAh', '64GB', 'A12 Bionic 64-bit 7nm', '7MP/ 2 camera 12MP', 'IOS', '5.8 inch Super Retina (2436 x 1125), 463ppi, 3D Touch, TrueTone Dolby Vision HDR 10', 1, '2020-06-23 03:52:22', '2020-06-23 03:52:22'),
(61, 'iPhone 7 Plus', 'Chống nước, chống bụi, 3D Touch', 'http://127.0.0.1:8000/upload/i7.jpg', 10.45, '2900 mAh', 'MicroSD, hỗ trợ tối đa 256 GB', 'Apple A10 Fusion 4 nhân 64-bit', '7MP/ 12MP', 'IOS', '5.5 inch, Full HD (1080 x 1920 pixels)', 1, '2020-06-23 03:56:24', '2020-06-23 03:56:24'),
(62, 'iPhone X', 'Chống nước, chống bụi, Face ID', 'http://127.0.0.1:8000/upload/i8.jpg', 16.099, '2716 mAh', 'MicroSD, hỗ trợ tối đa 256 GB', 'Apple A11 Bionic 6 nhân', '7MP/ 2 camera 12MP', 'IOS', 'Super AMOLED capacitive touchscreen, 5.8 inch HD', 1, '2020-06-23 03:58:32', '2020-06-23 03:58:32'),
(63, 'Xiaomi Redmi 8', 'Mở khóa bằng vân tay, Mở khoá khuôn mặt, Tiết kiệm pin, Sạc nhanh Quick Charge 3.0', 'http://127.0.0.1:8000/upload/x4.jpg', 2.49, '5000 mAh, có sạc nhanh', 'MicroSD, hỗ trợ tối đa 512 GB', 'Snapdragon 439 8 nhân', 'Chính 12 MP & Phụ 2 MP', 'Android 9.0 (Pie)', 'IPS LCD, 6.22\", HD+', 5, '2020-06-23 04:01:38', '2020-06-23 04:01:38'),
(64, 'Xiaomi Redmi 7', 'Mở khóa bằng vân tay, Mở khoá khuôn mặt, Tiết kiệm pin, Sạc nhanh Quick Charge 3.0', 'http://127.0.0.1:8000/upload/x5.png', 2.48, '5000 mAh', 'MicroSD, hỗ trợ tối đa 512 GB', 'Snapdragon 439, 8, 1.95 GHz', '12.0 MP + 2.0 MP', 'Android 9.0 (Pie)', '6.22 inches, HD +, 720 x 1520 Pixels', 5, '2020-06-23 04:05:32', '2020-06-28 00:33:39'),
(65, 'Xiaomi Redmi 7A', 'Mở khóa bằng khuôn mặt', 'http://127.0.0.1:8000/upload/x3.jpg', 2.05, '4000 mAh', 'MicroSD, hỗ trợ tối đa 256 GB', 'Qualcomm Snapdragon 439 8 nhân 64-bit', '7MP/ 2 camera 12MP', 'Android 9.0 (Pie)', 'IPS LCD, 5.45\"\", HD+', 5, '2020-06-23 04:11:39', '2020-06-23 04:11:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_brand`
--

CREATE TABLE `product_brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_brand`
--

INSERT INTO `product_brand` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '2020-06-03 13:03:42', '2020-06-23 03:53:12'),
(3, 'Samsung', '2020-06-03 13:03:56', '2020-06-03 13:03:56'),
(5, 'Xiaomi', '2020-06-03 13:04:10', '2020-06-22 09:01:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Admin', 'admin@gmail.com', NULL, '$2y$10$xCcVgXkN1/KxEWIi9Ghw1eqUsXyODHhWJCaMkfVDWIh6t8HBJjaT6', 'admin', 'ajqB9ffDVMARTEgufqTDuTjB7gr3dPRMB1ZebESnxE7Bzm5PHYX1gTcQgkfu', '2020-06-17 11:28:46', '2020-06-18 02:45:29'),
(10, 'Keira', 'keira@gmail.com', NULL, '$2y$10$NoyHrDM2El61VqwDXrIrmezJrqX0yVvItmDlrOy5IYH5ThyEdGWvq', 'user', 'pGRGzUn3A0FttW0unFViWGtSQbdkJuFVNSTi4gvyDwcpk5NyH6Ny8rNXuJ9v', '2020-06-17 14:05:46', '2020-06-23 03:44:06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_order_id_foreign` (`order_id`),
  ADD KEY `order_detail_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_product_brand_id_foreign` (`product_brand_id`);

--
-- Chỉ mục cho bảng `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_product_brand_id_foreign` FOREIGN KEY (`product_brand_id`) REFERENCES `product_brand` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
