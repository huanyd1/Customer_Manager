-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 11, 2021 lúc 12:01 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `customer_manager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_department` varchar(200) NOT NULL,
  `birth_day` date NOT NULL,
  `admin_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_img` varchar(200) NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `total_order_value` float NOT NULL,
  `contact` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `status` bit(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `department`
--

CREATE TABLE `department` (
  `id_department` varchar(20) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_status` bit(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `department`
--

INSERT INTO `department` (`id_department`, `department_name`, `department_status`) VALUES
('', '', b'0000000000'),
('BV', 'Phòng ban bảo vệ', b'0000000001'),
('KT', 'Phòng ban kế toán', b'0000000000'),
('KT1', 'Phòng ban kiểm thử 1', b'0000000000'),
('KT2', 'Phòng ban kiểm thử 2', b'0000000000'),
('KT5', 'Phòng ban kiểm thử 2', b'0000000000'),
('LT', 'Phòng ban lập trình', b'0000000000'),
('LT2', 'sdfsdfsd', b'0000000001'),
('NV', 'Phòng ban nhân viên', b'0000000000'),
('PB', 'Phòng ban', b'0000000001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `indebt`
--

CREATE TABLE `indebt` (
  `id_debt` varchar(20) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `total_money` float NOT NULL,
  `contract` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `status` bit(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` varchar(20) NOT NULL,
  `number_order` varchar(255) NOT NULL,
  `date_order` date NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_product` varchar(20) NOT NULL,
  `order_value` float NOT NULL,
  `id_staff` varchar(20) NOT NULL,
  `status` bit(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` varchar(20) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_group` varchar(200) NOT NULL,
  `product_value` float NOT NULL,
  `product_total` int(11) NOT NULL,
  `product_sold` int(11) NOT NULL,
  `product_inventory` int(11) NOT NULL,
  `status` bit(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id_staff` varchar(20) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `status` bit(20) NOT NULL,
  `id_department` varchar(20) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `birdth_day` date NOT NULL,
  `staff_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Chỉ mục cho bảng `indebt`
--
ALTER TABLE `indebt`
  ADD PRIMARY KEY (`id_debt`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_staff` (`id_staff`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD KEY `id_department` (`id_department`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `indebt`
--
ALTER TABLE `indebt`
  ADD CONSTRAINT `indebt_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
