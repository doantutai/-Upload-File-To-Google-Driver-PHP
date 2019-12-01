-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 23, 2019 lúc 02:50 AM
-- Phiên bản máy phục vụ: 5.6.44-cll-lve
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `payadsco_UPDOWSF`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filetrung`
--

CREATE TABLE `filetrung` (
  `id` int(20) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `size` bigint(20) NOT NULL,
  `time` bigint(20) NOT NULL,
  `link` text NOT NULL,
  `passwd` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `type` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `filetrung`
--

INSERT INTO `filetrung` (`id`, `name`, `size`, `time`, `link`, `passwd`, `type`) VALUES
(10, 'A_Long_Cold_Sting.mp3', 585326, 1560958681, '1qqoNM3JBqFwshE8wsGIyc39bx1S84-zV', '', 'audio/mp3'),
(8, 'eClick.html', 677, 1558196810, '1QL63jpIB_wdtsN7JkYC6HDm9LPQEv063', '', 'text/html'),
(9, 'HỒNG NHAN Remix trên ORG 2020 _ đàn organ trên điện thoại.mp4', 6703548, 1559391430, '103NnQPr9WBYH_yxo5JDTEuIz93ynERNj', '', 'video/mp4'),
(1, 'code popads.txt', 908, 1558196553, '1vzbeJCU8XHGAouQG49mpsfiAh6Xoqv4O', '', 'text/plain'),
(11, 'NCV1_SeoulStation.mp4', 50800190, 1561214753, '1kXGcMQdThvticbNgx7pslcgY5_r7vUq8', '', 'video/mp4'),
(12, '404.png', 24042, 1561215391, '1HmmWOh-fi_1YymgkYWmhU1nnsPZDLGvc', '', 'image/png'),
(13, 'Người tình mùa đông remix.wav', 45194604, 1561221125, '1J36ythHuS9arg2gSIx8nI4Kpfoeb25Z6', '', 'audio/wav'),
(14, 'admin-png-4.png', 5164, 1561263433, '1sg4hVeMKcv459zyr9TrnwWDGUDjEuuhy', '8888', 'image/png'),
(15, '1.PNG', 222021, 1561272275, '1PtROg3CvUY1MvoEPGILG9G8tx30o1Cfe', '', 'image/png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `filetrung`
--
ALTER TABLE `filetrung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `filetrung`
--
ALTER TABLE `filetrung`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
