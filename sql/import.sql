-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 10:39 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asiapet`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinic_animal`
--

CREATE TABLE `clinic_animal` (
  `id` int(11) NOT NULL,
  `animal_name` varchar(256) NOT NULL,
  `animal_detail` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_animal`
--

INSERT INTO `clinic_animal` (`id`, `animal_name`, `animal_detail`, `created_date`, `updated_date`) VALUES
(6, 'หมา (Dog)', '', '2017-12-05 08:59:37', '2017-12-05 08:59:37'),
(7, 'แมว (Cat)', '', '2017-12-05 08:59:49', '2017-12-05 08:59:49'),
(8, 'ลิง (Monkey)', '', '2017-12-05 09:06:36', '2017-12-05 09:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_appointment`
--

CREATE TABLE `clinic_appointment` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `appo_animal` varchar(256) NOT NULL,
  `appo_date` date NOT NULL,
  `appo_time` time NOT NULL,
  `appo_name` varchar(256) NOT NULL,
  `appo_details` text NOT NULL,
  `status_booking` int(11) NOT NULL COMMENT '1:waiting ,2:cancel, 3:approve',
  `reason` text NOT NULL,
  `flag` int(11) NOT NULL,
  `trans_id` varchar(256) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_appointment`
--

INSERT INTO `clinic_appointment` (`id`, `member_id`, `appo_animal`, `appo_date`, `appo_time`, `appo_name`, `appo_details`, `status_booking`, `reason`, `flag`, `trans_id`, `created_dt`, `updated_dt`) VALUES
(134, 44, 'หมา (Dog)', '2017-12-19', '08:45:00', 'test', 'test', 3, '', 0, '5349535799', '2017-12-05 10:38:07', '2017-12-05 10:38:07'),
(135, 44, 'หมา (Dog)', '2017-12-23', '09:00:00', 'test', 'test', 3, '', 0, '5053989853', '2017-12-05 10:38:16', '2017-12-05 10:38:16'),
(136, 44, 'หมา (Dog)', '2017-12-06', '08:30:00', 'test', 'test', 3, '', 0, '9953495452', '2017-12-05 10:38:25', '2017-12-05 10:38:25'),
(137, 44, 'หมา (Dog)', '2018-01-25', '09:00:00', 'test', 'test', 3, '', 0, '4953545310', '2017-12-05 10:38:41', '2017-12-05 10:38:41'),
(138, 44, 'หมา (Dog)', '2018-01-09', '08:45:00', 'test', 'test', 3, '', 0, '1004810253', '2017-12-05 10:38:51', '2017-12-05 10:38:51'),
(139, 45, 'ลิง (Monkey)', '2017-12-19', '09:00:00', 'dd', 'dd', 3, '', 0, '5352574857', '2017-12-05 10:39:26', '2017-12-05 10:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_member`
--

CREATE TABLE `clinic_member` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `role` varchar(256) NOT NULL,
  `member_id` varchar(256) DEFAULT NULL,
  `animal_name` varchar(256) DEFAULT NULL,
  `appo_birth_date_show_animal` varchar(256) DEFAULT NULL,
  `appo_animal` varchar(256) DEFAULT NULL,
  `breed` varchar(256) DEFAULT NULL,
  `gender` int(10) DEFAULT NULL,
  `color` varchar(256) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_member`
--

INSERT INTO `clinic_member` (`id`, `first_name`, `last_name`, `username`, `password`, `address`, `mobile`, `role`, `member_id`, `animal_name`, `appo_birth_date_show_animal`, `appo_animal`, `breed`, `gender`, `color`, `created_at`, `updated_at`) VALUES
(44, 'สมชาย', 'ใจดี', 'somchai', '1234', 'ห้วยขวาง ประเทศไทย', '08999939493', 'user', '1234567', 'ปีเตอร์', '2017-12-04', 'หมา (Dog)', 'test', 1, 'ขาว', '2017-12-04 16:43:09', '2017-12-05 09:21:02'),
(45, 'สมหญิง', 'ใจดี', 'somying', '1234', 'ประชาสงเคราะห์ 47', '0899993994', 'user', '123123123123', 'อดัม', '2017-11-06', 'ลิง (Monkey)', 'test', 1, 'ดำ', '2017-12-04 16:46:45', '2017-12-05 07:43:09'),
(46, 'น.พ สมชาย', 'ใจดี', 'admin1', '1234', 'ห้วยขวาง', '0899992992', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-05 08:48:40', '2017-12-05 08:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_news`
--

CREATE TABLE `clinic_news` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `details` text NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_news`
--

INSERT INTO `clinic_news` (`id`, `title`, `details`, `flag`) VALUES
(8, 'ลูกค้าเอเชียเพทออนไลน์ลด 20 %', 'ลูกค้าเอเชียเพทออนไลน์ลด 20 % เมื่อมียอดค่าใช้จ่ายมากกว่า 5000 บาท สำหรับคนที่มียอดค่าใช้จ่ายไม่ถึง 5000 บาทสามารถนำใบเสร็จไปแลกค่าจอดรถได้ 3 ชั่วโมงที่อาคาร ดิเอมไพ ตั้งแต่วันนี้ถึงสิ้นปี โปรโมชั่นดีๆแบบนี้ไม่ควรพลาด สามารถติดต่อสอบถามได้ที่ 02-2223211\r\nหรือที่เค้าเตอร์ เอเชียเพทออน สาขานครสวรรค์', 1),
(9, 'ลูกค้าเอเชียเพทออนไลน์ที่ใช้ TruemoveH ', 'ลูกค้าเอเชียเพทออนไลน์ที่ใช้ TruemoveH  สามารถแสดงและกด USSD *123 เพื่อใช้ส่วนลดเมื่อมาใช้บริการที่ เอเชียเพท นครสวรรค์ ( สามารถใช้สิทธิ์ได้ 2 ครั้งแต่เดือนเท่านั้น ) ตั้งแต่วันนี้ถึงสิ้นปี อย่าช้า !!!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clinic_product`
--

CREATE TABLE `clinic_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_detail` text NOT NULL,
  `amt` varchar(256) NOT NULL,
  `unit` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `flag` int(11) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_product`
--

INSERT INTO `clinic_product` (`id`, `product_name`, `product_detail`, `amt`, `unit`, `price`, `flag`, `created_dt`, `updated_dt`) VALUES
(7, 'น้ำยาล้างแผล', 'น้ำยาล้างแผลใช้สำหรับล้างแผลสัตว์เช่น หมา แมว', '87', 'ขาด(เล็ก)', '50', 1, '2017-07-09 13:40:47', '2017-12-05 10:01:04'),
(8, 'ผ้าก็อตพันแผล', 'ผ้าก็อตพันแผล ใช้สำหรับพันขา ของสัตว์กรณี สัตว์มีแผล หรือ เจ็บปวด', '195', 'ชิ้น', '25', 1, '2017-07-09 13:41:49', '2017-12-04 19:03:43'),
(9, 'ยาทาแก้ปวด', 'ยาทาแก้ปวดใช้สำหรับทาตรงจุดที่มีอาการฟกช้ำ', '197', 'หลอด', '45', 1, '2017-07-09 13:42:37', '2017-07-12 23:05:36'),
(10, 'สำลี', 'ใช้สำหรับล้างแผล', '94', 'ถุง', '20', 1, '2017-07-09 15:16:44', '2017-12-05 10:01:04'),
(11, 'อาหารสุนัข', 'อาหารสุนัขพันธุ์เล็ก', '50', 'กระสอบ', '500', 1, '2017-07-13 15:45:30', '2017-07-13 15:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_service`
--

CREATE TABLE `clinic_service` (
  `id` int(11) NOT NULL,
  `appo_id` int(11) NOT NULL,
  `service_detail` text NOT NULL,
  `service_bath` varchar(256) NOT NULL,
  `order_status` int(11) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clinic_service_detail`
--

CREATE TABLE `clinic_service_detail` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_type` varchar(256) NOT NULL COMMENT 'o=optional , m=main',
  `product_amt` int(11) NOT NULL,
  `product_amt_sum` int(11) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinic_animal`
--
ALTER TABLE `clinic_animal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_appointment`
--
ALTER TABLE `clinic_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `clinic_member`
--
ALTER TABLE `clinic_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_news`
--
ALTER TABLE `clinic_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_product`
--
ALTER TABLE `clinic_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_service`
--
ALTER TABLE `clinic_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic_service_detail`
--
ALTER TABLE `clinic_service_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinic_animal`
--
ALTER TABLE `clinic_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clinic_appointment`
--
ALTER TABLE `clinic_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `clinic_member`
--
ALTER TABLE `clinic_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `clinic_news`
--
ALTER TABLE `clinic_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clinic_product`
--
ALTER TABLE `clinic_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clinic_service`
--
ALTER TABLE `clinic_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `clinic_service_detail`
--
ALTER TABLE `clinic_service_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
