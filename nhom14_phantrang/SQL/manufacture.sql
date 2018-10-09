-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 03, 2018 lúc 12:30 PM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web1_nhom14`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacture`
--

DROP TABLE IF EXISTS `manufacture`;
CREATE TABLE IF NOT EXISTS `manufacture` (
  `MANU_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hãng',
  `MANU_NAME` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'tên hãng',
  `MANU_IMG` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'hình ảnh hãng',
  PRIMARY KEY (`MANU_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `manufacture`
--

INSERT INTO `manufacture` (`MANU_ID`, `MANU_NAME`, `MANU_IMG`) VALUES
(1, 'HONDA WINNER', ''),
(2, 'YAMAHA EXCITER', ''),
(3, 'HONDA SH125', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
