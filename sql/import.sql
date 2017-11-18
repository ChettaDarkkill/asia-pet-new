-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2017 at 03:02 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takraw_thailand`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinic_appointment`
--

CREATE TABLE IF NOT EXISTS `clinic_appointment` (
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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_appointment`
--

INSERT INTO `clinic_appointment` (`id`, `member_id`, `appo_animal`, `appo_date`, `appo_time`, `appo_name`, `appo_details`, `status_booking`, `reason`, `flag`, `trans_id`, `created_dt`, `updated_dt`) VALUES
(38, 37, 'สุนัข (Dog)', '2017-07-15', '09:00:00', 'สุนัขขาบวม', 'สุนัขขาบวมเดินตกท่อมีอาการใกล้จะเป็นหนอง', 3, '', 1, '5450102484', '2017-07-09 13:45:07', '2017-07-09 13:48:42'),
(39, 37, 'นก (Bird)', '2017-05-15', '09:00:00', 'นกแก้วเหงา', 'นกแก้วเหงาไม่ยอมกินอะไร', 3, '', 0, '5399519999', '2017-07-09 13:45:39', '2017-07-09 13:51:53'),
(40, 37, 'สุนัข (Dog)', '2017-07-30', '09:00:00', 'อาการเป็นแผลเรื้อรัง', 'อาการเป็นแผลเรื้อรังเป็นหนอง', 2, 'รอดูอาการไปก่อน', 0, '5450534955', '2017-07-09 13:50:08', '2017-07-09 13:50:34'),
(41, 37, 'กระต่าย (Rabbit)', '2017-07-20', '10:00:00', 'กระต่ายไม่กินข้าว', 'กระต่ายไม่กินข้าว ไม่ร่าเริงเหมือนเดิม', 1, '', 0, '5710253491', '2017-07-09 13:51:43', '2017-07-09 13:51:43'),
(42, 38, 'แกสบี้ (Guinea Pig)', '2017-07-10', '01:00:00', 'แกสบี้ป่วย', 'แกสบี้ป่วยชอบไม่หลับไม่นอนตอนกลางคืน', 1, '', 0, '5448545410', '2017-07-09 13:54:02', '2017-07-09 13:54:02'),
(43, 38, 'สุนัข (Dog)', '2017-07-20', '09:50:00', 'หมาท้องเสีย', 'หมาท้องเสียกินอะไรก็ไม่ค่อยได้', 3, '', 1, '4852521001', '2017-07-09 13:54:29', '2017-07-09 15:17:41'),
(44, 38, 'ชูการ์ ไกรเดอร์ (Suger Glider)', '2017-07-10', '09:00:00', 'ชูการ์ ไกรเดอร์ป่วย', 'โดนรถชน', 1, '', 0, '4851509848', '2017-07-09 13:55:05', '2017-07-09 13:55:05'),
(45, 38, 'ปลา (Fish)', '2017-07-20', '09:00:00', 'ปลาไม่กินอาหาร', 'ปลาไม่กินอาหารไม่รู้ทำไม', 2, 'ปล่อยมันตายไปเหอะครับ อิอิ', 0, '5499991015', '2017-07-09 13:55:28', '2017-07-09 14:00:00'),
(46, 39, 'กระรอก (Squirrel)', '2017-07-12', '09:00:00', 'กระรอกท้องเสีย', 'กระรอกท้องเสียไม่รู้ไปกินอะไรมา', 1, '', 0, '9997995397', '2017-07-09 13:56:25', '2017-07-09 13:56:25'),
(47, 39, 'แกสบี้ (Guinea Pig)', '2017-07-12', '10:00:00', 'แกสบี้ขาเจ็บ', 'แกสบี้ขาเจ็บไปฟัดกับหมามาแผลเป็นหนอง', 3, '', 1, '5452102501', '2017-07-09 13:57:07', '2017-07-12 23:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_member`
--

CREATE TABLE IF NOT EXISTS `clinic_member` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `role` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_member`
--

INSERT INTO `clinic_member` (`id`, `first_name`, `last_name`, `username`, `password`, `address`, `mobile`, `role`, `created_at`, `updated_at`) VALUES
(36, 'น.พ สมชาย', 'ใจดี', 'admin1', '1234', '58 ซอยอินทามระ 43 ถนนสุทธิสารวินิจฉัย Khwaeng Din Daeng, Khet Din Daeng, Krung Thep Maha Nakhon 10400', '0917038483', 'admin', '2017-07-09 13:31:28', '2017-07-09 13:58:23'),
(37, 'สมาน', 'ดีใจ', 'user1', '1234', 'ซอย อินทามระ 43 Sutthisan Winitchai Rd, Din Daeng, Bangkok 10400', '0917038483', 'user', '2017-07-09 13:32:42', '2017-07-09 13:32:42'),
(38, 'เชษฐา', 'ครอบกระโทก', 'user2', '1234', ' 58 ซอยอินทามระ 43 ถนนสุทธิสารวินิจฉัย Khwaeng Din Daeng, Khet Din Daeng, Krung Thep Maha Nakhon 10400', '0917038483', 'user', '2017-07-09 13:33:08', '2017-07-09 13:33:08'),
(39, 'สมยง', 'ใจดี', 'user3', '1234', ' ซอย อินทามระ 43 Sutthisan Winitchai Rd, Din Daeng, Bangkok 10400', '0917038483', 'user', '2017-07-09 13:33:54', '2017-07-09 13:33:54'),
(40, 'พ.ญ สมหญิง', 'ใจดี', 'admin2', '1234', '23, ซอยพระยาสุเรนทร์ 14 ถนนพระยาสุเรนทร์, แขวงบางชัน เขตคลองสามวา กรุงเทพมหานคร, 10510 10510', '0917038483', 'admin', '2017-07-09 13:59:12', '2017-07-09 13:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_news`
--

CREATE TABLE IF NOT EXISTS `clinic_news` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `details` text NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `clinic_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_detail` text NOT NULL,
  `amt` varchar(256) NOT NULL,
  `unit` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `flag` int(11) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_product`
--

INSERT INTO `clinic_product` (`id`, `product_name`, `product_detail`, `amt`, `unit`, `price`, `flag`, `created_dt`, `updated_dt`) VALUES
(7, 'น้ำยาล้างแผล', 'น้ำยาล้างแผลใช้สำหรับล้างแผลสัตว์เช่น หมา แมว', '97', 'ขาด(เล็ก)', '50', 1, '2017-07-09 13:40:47', '2017-07-12 23:05:36'),
(8, 'ผ้าก็อตพันแผล', 'ผ้าก็อตพันแผล ใช้สำหรับพันขา ของสัตว์กรณี สัตว์มีแผล หรือ เจ็บปวด', '198', 'ชิ้น', '25', 1, '2017-07-09 13:41:49', '2017-07-12 23:05:36'),
(9, 'ยาทาแก้ปวด', 'ยาทาแก้ปวดใช้สำหรับทาตรงจุดที่มีอาการฟกช้ำ', '197', 'หลอด', '45', 1, '2017-07-09 13:42:37', '2017-07-12 23:05:36'),
(10, 'สำลี', 'ใช้สำหรับล้างแผล', '96', 'ถุง', '20', 1, '2017-07-09 15:16:44', '2017-07-12 23:05:36'),
(11, 'อาหารสุนัข', 'อาหารสุนัขพันธุ์เล็ก', '50', 'กระสอบ', '500', 1, '2017-07-13 15:45:30', '2017-07-13 15:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_service`
--

CREATE TABLE IF NOT EXISTS `clinic_service` (
  `id` int(11) NOT NULL,
  `appo_id` int(11) NOT NULL,
  `service_detail` text NOT NULL,
  `service_bath` varchar(256) NOT NULL,
  `order_status` int(11) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_service`
--

INSERT INTO `clinic_service` (`id`, `appo_id`, `service_detail`, `service_bath`, `order_status`, `created_dt`, `updated_dt`) VALUES
(64, 38, 'ทำแผลที่ขาและให้ยาชา', '400', 1, '2017-07-09 13:48:20', '2017-07-09 13:48:42'),
(65, 43, 'ฉีดยาแก้ปวด', '200', 1, '2017-07-09 15:17:19', '2017-07-09 15:17:41'),
(66, 47, 'ทำแผล', '400', 1, '2017-07-12 23:04:41', '2017-07-12 23:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_service_detail`
--

CREATE TABLE IF NOT EXISTS `clinic_service_detail` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_type` varchar(256) NOT NULL COMMENT 'o=optional , m=main',
  `product_amt` int(11) NOT NULL,
  `product_amt_sum` int(11) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clinic_service_detail`
--

INSERT INTO `clinic_service_detail` (`id`, `service_id`, `product_id`, `order_type`, `product_amt`, `product_amt_sum`, `created_dt`, `updated_dt`) VALUES
(193, 64, 7, 'o', 1, 50, '2017-07-09 13:48:35', '2017-07-09 13:48:35'),
(194, 64, 8, 'o', 1, 25, '2017-07-09 13:48:35', '2017-07-09 13:48:35'),
(195, 64, 9, 'o', 1, 45, '2017-07-09 13:48:35', '2017-07-09 13:48:35'),
(196, 64, 0, 'm', 0, 0, '2017-07-09 13:48:35', '2017-07-09 13:48:35'),
(197, 65, 7, 'o', 0, 0, '2017-07-09 15:17:27', '2017-07-09 15:17:27'),
(198, 65, 8, 'o', 0, 0, '2017-07-09 15:17:27', '2017-07-09 15:17:27'),
(199, 65, 9, 'o', 0, 0, '2017-07-09 15:17:27', '2017-07-09 15:17:27'),
(200, 65, 10, 'o', 2, 40, '2017-07-09 15:17:27', '2017-07-09 15:17:27'),
(201, 65, 0, 'm', 0, 0, '2017-07-09 15:17:27', '2017-07-09 15:17:27'),
(202, 66, 7, 'o', 2, 100, '2017-07-12 23:04:52', '2017-07-12 23:04:52'),
(203, 66, 8, 'o', 1, 25, '2017-07-12 23:04:52', '2017-07-12 23:04:52'),
(204, 66, 9, 'o', 2, 90, '2017-07-12 23:04:52', '2017-07-12 23:04:52'),
(205, 66, 10, 'o', 2, 40, '2017-07-12 23:04:52', '2017-07-12 23:04:52'),
(206, 66, 0, 'm', 0, 0, '2017-07-12 23:04:52', '2017-07-12 23:04:52');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `clinic_appointment`
--
ALTER TABLE `clinic_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `clinic_member`
--
ALTER TABLE `clinic_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `clinic_news`
--
ALTER TABLE `clinic_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `clinic_product`
--
ALTER TABLE `clinic_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `clinic_service`
--
ALTER TABLE `clinic_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `clinic_service_detail`
--
ALTER TABLE `clinic_service_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=207;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
