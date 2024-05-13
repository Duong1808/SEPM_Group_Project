-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th5 13, 2024 lúc 05:48 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `plant`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'bbcc'),
(4, 'bcd'),
(5, 'def');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plants`
--

CREATE TABLE `plants` (
  `id` int(11) NOT NULL,
  `genus_name` varchar(255) NOT NULL,
  `common_name` varchar(255) NOT NULL,
  `plant_type` varchar(100) DEFAULT NULL,
  `light` varchar(100) DEFAULT NULL,
  `height` varchar(100) DEFAULT NULL,
  `width` varchar(100) DEFAULT NULL,
  `flower_color` varchar(100) DEFAULT NULL,
  `foliage_color` varchar(100) DEFAULT NULL,
  `season_features` text DEFAULT NULL,
  `special_features` text DEFAULT NULL,
  `zones` varchar(100) DEFAULT NULL,
  `propagation` text DEFAULT NULL,
  `problem_solvers` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `where_to_plant` text DEFAULT NULL,
  `when_to_plant` text DEFAULT NULL,
  `care_tips` text DEFAULT NULL,
  `reputable_address` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `plants`
--

INSERT INTO `plants` (`id`, `genus_name`, `common_name`, `plant_type`, `light`, `height`, `width`, `flower_color`, `foliage_color`, `season_features`, `special_features`, `zones`, `propagation`, `problem_solvers`, `details`, `where_to_plant`, `when_to_plant`, `care_tips`, `reputable_address`, `image_url`) VALUES
(3, 'Red Rose', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg', 'http://localhost/public/assets/plant/rose.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
