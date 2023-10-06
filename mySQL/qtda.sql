-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2023 lúc 11:56 AM
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
-- Cơ sở dữ liệu: `qtda`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `sonha` varchar(100) NOT NULL,
  `duong` varchar(100) NOT NULL,
  `xa` varchar(100) NOT NULL,
  `huyen` varchar(100) NOT NULL,
  `ngang` varchar(100) NOT NULL,
  `dai` varchar(100) NOT NULL,
  `dientich` varchar(100) NOT NULL,
  `dorong` varchar(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `sonha`, `duong`, `xa`, `huyen`, `ngang`, `dai`, `dientich`, `dorong`, `hinhanh`) VALUES
(209, '66256', '', 'sds', '0', 'ds', 'ss', 'dsd', 'sds', '1696432567_'),
(210, '', '', '', '0', '', '', '', '', '1696432609_'),
(211, '', '', '', '0', '', '', '', '', '1696432613_'),
(212, '', '', '', '0', '', '', '', '', '1696432615_'),
(213, '', '', '', '0', '', '', '', '', '1696432617_'),
(214, '', '', '', '0', '', '', '', '', '1696432619_'),
(215, '', '', '', '0', '', '', '', '', '1696432620_');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thanhvien`
--

CREATE TABLE `tbl_thanhvien` (
  `id_thanhvien` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `vaitro` varchar(50) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `stt` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thanhvien`
--

INSERT INTO `tbl_thanhvien` (`id_thanhvien`, `hoten`, `email`, `vaitro`, `tinhtrang`, `stt`) VALUES
(107, '	Võ Yến Vy', '	Vyheo512@gmail.com', '58 Phạm Cự Lượng', 1, 871254621),
(108, 'Trần Vương Linh', '	linh25789@gmail.com', '	18 Thanh Long', 2, 582463251),
(109, '	Trần Thuý Hiền', '	Trần Thuý Hiền', '	Trần Thuý Hiền', 0, 15478526),
(110, '	Phan Thị Oanh', '	oanh452@gmail.com', '	82 Trần Cao Vân', 3, 89542361),
(111, '	Phan Thị Hồng', '	hong201220@gmai.com', '	12 Nguyễn Tất Thành', 2, 895632145),
(112, '	Phan Như Vy', '	vyhihai@gmail.com', '100 Nguyễn Văn Linh', 2, 95213642);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_thanhvien`
--
ALTER TABLE `tbl_thanhvien`
  ADD PRIMARY KEY (`id_thanhvien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT cho bảng `tbl_thanhvien`
--
ALTER TABLE `tbl_thanhvien`
  MODIFY `id_thanhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
