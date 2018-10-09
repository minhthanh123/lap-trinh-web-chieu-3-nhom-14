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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã sản phẩm',
  `NAME` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'tên sản phẩm',
  `IMAGE` varchar(150) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'hình sản phẩm',
  `DESCRIPTION` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'mô tả sản phẩm',
  `MANU_ID` int(11) NOT NULL COMMENT 'mã hãng sản xuất',
  `TYPE_ID` int(11) NOT NULL COMMENT 'mã loại sản phẩm',
  `PỈCE` int(11) NOT NULL COMMENT 'giá sản phẩm',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `NAME`, `IMAGE`, `DESCRIPTION`, `MANU_ID`, `TYPE_ID`, `PỈCE`) VALUES
(1, 'HONDA WINNER', 'honda-winner_2019.jpg', 'WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.', 1, 1, 45490000),
(2, 'HONDA WINNER', 'honda_Winner_2018.jpg', 'WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.', 1, 1, 45000000),
(3, 'YAMAHA EXCITER', 'yamaha-exciter-2019.jpg', 'Loại 4 thì, 4 van, SOHC, làm mát bằng dung dịch,Bố trí xi lanh,Xy lanh đơn,Dung tích xy lanh (CC) 150,Đường kính và hành trình piston 57.0 x 58.7 mm,Tỷ số nén 10.4:1,Công suất tối đa 11,3 kW (15,4 PS) / 8.500 vòng/phút, Mô men cực đại 13,8 N·m (1,4 kgf·m) / 7.000 vòng/phút,Hệ thống khởi động, Điện, Hệ thống bôi trơn,Dung tích bình xăng 4.2 lít,Bộ chế hòa khí,Phun xăng (1 vòi phun)', 1, 1, 47490000),
(4, 'YAMAHA EXCITER', 'yamaha-exciter-2019-tai-dai-ly-4.png', 'Loại 4 thì, 4 van, SOHC, làm mát bằng dung dịch,Bố trí xi lanh,Xy lanh đơn,Dung tích xy lanh (CC) 150,Đường kính và hành trình piston 57.0 x 58.7 mm,Tỷ số nén 10.4:1,Công suất tối đa 11,3 kW (15,4 PS) / 8.500 vòng/phút, Mô men cực đại 13,8 N·m (1,4 kgf·m) / 7.000 vòng/phút,Hệ thống khởi động, Điện, Hệ thống bôi trơn,Dung tích bình xăng 4.2 lít,Bộ chế hòa khí,Phun xăng (1 vòi phun)', 1, 1, 47990000),
(5, 'HONDA WINNER', 'winner_150.jpg', 'WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.', 1, 1, 45000000),
(6, 'HONDA WINNER', 'winner_2018.jpg', 'WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.', 2, 2, 47000000),
(7, 'HONDA SH125', 'sh_1905367.jpeg', 'SH125/150i - một kiệt tác thiết kế mới sang trọng và đẳng cấp hơn với những đường nét đậm chất châu Âu, chinh phục mọi con tim ngay từ ánh nhìn đầu tiên.', 2, 2, 60600000),
(8, 'HONDA WINNER', 'xe-winner-1201.jpg', 'WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.', 2, 2, 46000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_NAME` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TYPE_IMG` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`TYPE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`TYPE_ID`, `TYPE_NAME`, `TYPE_IMG`) VALUES
(1, 'HONDA SH125', ''),
(2, 'HONDA EXCITER', ''),
(5, 'HONDA WINNER', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
