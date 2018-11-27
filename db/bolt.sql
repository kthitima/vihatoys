-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 09:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin') NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$fmd/nRjXAT/H5a3oh5QgFONx9xZQx8m1MPUJdahdotQWqAoKKpjgy', 'superadmin', '2018-11-09 06:00:41', '2018-11-09 06:00:41', '2018-11-09 06:00:41'),
(4, 'test', 'test', 'test', '$2y$10$u.HLKSBUVau2p4CkHM4GTOaf0RbcWKgKd1BooC.dhGXtDN61tBXiW', 'superadmin', '2018-11-15 16:31:06', '2018-11-15 16:31:06', '2018-11-15 16:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datail` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `datail`, `created_at`) VALUES
(5, '205-504 Le Van luong, Phuong Tan Phong, q. 7, TP. Ho Chi Minh', '8493811800', 'Ha.chau@vssa.com.vn', 'Toys', '2018-11-17'),
(6, 'Phu Quoc Island in Vietnam', '0991562381', 'kthitima@kkumail.com', 'I wanna know about cost some products', '2018-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(19, '01501136538', 'Jigsaw Puzzles', '1) Practicing the Concentration skill.<br>\r\n2) Practicing the Memory skill.<br>\r\n3) Practicing the Planning skill.<br>\r\n4) The children become more resourceful.<br>', 173000, 6, 1038000, '2018-11-21 07:57:39', 'jonathi@gmail.com'),
(20, ' 00201505241', 'A B C  Alphabet', '1) The children develop a greater love for reading, writing, and art.<br>\r\n2) Practicing the language skill.<br>\r\n3) Practicing the Memory skill.<br>\r\n4) Practicing the Concentration skill.<br>', 76000, 4, 304000, '2018-11-21 07:57:39', 'jonathi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(5) NOT NULL,
  `firstName` varchar(100) COLLATE utf8_bin NOT NULL,
  `lastName` varchar(100) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `address2` text COLLATE utf8_bin NOT NULL,
  `country` varchar(100) COLLATE utf8_bin NOT NULL,
  `state` varchar(100) COLLATE utf8_bin NOT NULL,
  `zip` int(5) NOT NULL,
  `sameaddress` varchar(20) COLLATE utf8_bin NOT NULL,
  `saveinfo` varchar(20) COLLATE utf8_bin NOT NULL,
  `bank_pay` varchar(100) COLLATE utf8_bin NOT NULL,
  `payment_date` varchar(20) COLLATE utf8_bin NOT NULL,
  `hour` int(2) NOT NULL,
  `minute` int(2) NOT NULL,
  `slip` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `firstName`, `lastName`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`, `sameaddress`, `saveinfo`, `bank_pay`, `payment_date`, `hour`, `minute`, `slip`) VALUES
(6, 'Thitma', 'Kaiyasa', 'kthitima@kkumail.com', 'jonathipotent@gmail.com', 'Ho Chi Minh ', 'Khon Kaen Thailand ', 'Vietnam', 'Ho Chi Minh City', 700071, '', '', 'Vietcombank ', '2018-11-27', 7, 14, '20181126212059.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text CHARACTER SET utf8 NOT NULL,
  `product_img_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('true','false') NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`, `status`, `tag`) VALUES
(4, ' 00201505241', 'A B C  Alphabet', '1) The children develop a greater love for reading, writing, and art.<br>\r\n2) Practicing the language skill.<br>\r\n3) Practicing the Memory skill.<br>\r\n4) Practicing the Concentration skill.<br>', '(1).jpg', 11, '76000.00', 'true', 'all, 1'),
(5, '01501812754', 'Clay pot', '1) Practicing the Arm muscle of children.<br>\r\n2) The children learn to be creative in highly.<br>\r\n3) The children develop a greater love for reading, writing, and art.<br>', '(2).jpg', 20, '75000.00', 'true', 'all, 1'),
(6, '01501631521', 'Clay pot Model for kid', '1) Practicing the Arm muscle of children.<br>\r\n2) The children learn to be creative in highly.<br>\r\n3) The children develop a greater love for reading, writing, and art.<br>', '(3).jpg', 20, '65000.00', 'true', 'all, 1'),
(7, '01501137015', 'Kitchenware Set', '1) The children learn to be creative in highly.<br>\r\n2) The children become more resourceful.<br>\r\n3) Practicing the Planning skill.<br>\r\n4) Practicing the Arm muscle of children.<br>\r\n5)  Practicing the Good human relations skill.<br>', '(5).jpg', 20, '144000.00', 'true', 'all, 1'),
(8, '01501136538', 'Jigsaw Puzzles', '1) Practicing the Concentration skill.<br>\r\n2) Practicing the Memory skill.<br>\r\n3) Practicing the Planning skill.<br>\r\n4) The children become more resourceful.<br>', '12.jpg', 14, '173000.00', 'true', 'all, 1'),
(9, '01501724194', 'Easter egg  coloring ', '1) The children learn to be creative in highly.<br>\r\n2) The children develop a greater love for reading, writing, and art.<br>\r\n3) Practicing the Arm muscle of children.<br>', '(8).jpg', 20, '1090000.00', 'true', 'all, 1'),
(38, '1232412', 'Rubik 2X2 and 3X3', '1) Practicing the Analysis and Problem solving skill.<br>\r\n2) The children become more resourceful.<br>\r\n3) Practicing the Concentration skill.<br>\r\n4) Practicing the Arm muscle of children.<br>', 'Rubik.jpg', 1235123, '111.00', 'true', '2'),
(39, '123241211', 'Train ', '1) The children become more resourceful.<br>\r\n2) The children learn to be creative in highly.<br>', '9.jpg', 1235123, '111.00', 'true', '7'),
(45, '12356123', 'Spider Man', '1) The children become more resourceful.\r\n2) The children learn to be creative in highly.', '29.jpg', 1241, '12111.00', 'true', '7'),
(46, '124', 'Helicopter control', '1) Practicing the Arm muscle of children.<br>\r\n2) The children become more resourceful.<br>\r\n3) The children learn to be creative in highly.<br>', '(16).jpg', 1111, '111111.00', 'true', '5'),
(47, '1426', 'Kitty hammer song', '1) Practicing the Arm muscle of children.<br>\r\n2) Practicing the listening skill.<br>\r\n3) The children become more resourceful.<br>', '4.jpg', 0, '12525.00', 'true', '6'),
(50, '12345', 'Fidget Spinner', '1) Practicing the Analysis and Problem solving skill.<br>\r\n2) The children become more resourceful.<br>\r\n3) Practicing the Concentration skill.<br>\r\n4) Practicing the Arm muscle of children.<br>', 'spinn.jpg', 20, '12345.00', 'true', '2'),
(53, '13', 'Jingle & Shake', '1) Practicing the listening skill.<br>\r\n2) The children become more resourceful.<br>', '1.jpg', 13, '13.00', 'true', '6'),
(58, '1212', 'Guitar (Battery)', '1) Practicing the Arm muscle of children.<br>\r\n2) Practicing the listening skill.<br>\r\n3) The children learn to be creative in highly.<br>\r\n4) The children develop a greater love for reading, writing, and art.<br>\r\n5) The children become more resourceful.<br>', '10guitar.jpg', 121212, '1212.00', 'true', '9'),
(60, '12312', 'Piano (Battery)', '1) Practicing the Arm muscle of children.<br>\r\n2) Practicing the listening skill.<br>\r\n3) The children learn to be creative in highly.<br>\r\n4) The children develop a greater love for reading, writing, and art.<br>\r\n5) The children become more resourceful.<br>', '8pia.jpg', 11111111, '99999999.99', 'true', '9'),
(61, '1111', 'Math games for kids', '1) Practicing the Numerical calculation skill.<br>\r\n2) Practicing the Analysis and Problem solving skill.<br>\r\n3) The children become more resourceful.<br>', '14.jpg', 1111, '1121.00', 'true', 'all, 1'),
(63, '111111111', 'Chef career', '1)  Practicing the Good human relations skill.<br>\r\n2)  Practicing the Planning skill.<br>\r\n3) The children become more resourceful.<br>', 'cook.jpg', 1111, '1121.00', 'true', '3'),
(64, '11111111111', 'Ball', '1) Practicing the Arm muscle of children.<br>\r\n2)  Practicing the Good human relations skill.<br>\r\n3) The children learn to be creative in highly.<br>', 'ball.jpg', 1111, '1121.00', 'true', '4'),
(65, '112356u7', 'Bowling', '1) Practicing the Arm muscle of children.<br>\r\n2)  Practicing the Good human relations skill.<br>\r\n3) The children learn to be creative in highly.<br>', 'bow.jpg', 111, '12341.00', 'true', '4'),
(69, '11235671412', 'Doctor career', '1)  Practicing the Good human relations skill.<br>\r\n2)  Practicing the Planning skill.<br>\r\n3) The children become more resourceful.<br>', 'career.jpg', 111, '12341123.00', 'true', '3'),
(71, '145241', 'Lego villa market', '1)  Practicing the Good human relations skill.<br>\r\n2) Practicing the Planning skill.<br>\r\n3) Practicing the Arm muscle of children.<br>\r\n4) The children become more resourceful.<br>', 'villa.jpg', 11112, '12341123.00', 'true', '8'),
(73, '120099', 'Frozen home', '1)  Practicing the Good human relations skill.<br>\r\n2) Practicing the Planning skill.<br>\r\n3) Practicing the Arm muscle of children.<br>\r\n4) The children become more resourceful.<br>', 'elsa.jpg', 11112, '12341123.00', 'true', '8'),
(79, '120099123', 'Car Racing control ', '1) Practicing the Arm muscle of children.<br>\r\n2) The children become more resourceful.<br>\r\n3) The children learn to be creative in highly.<br>', '(30).jpg', 11112, '12341123.00', 'true', '5'),
(80, '1436010047', 'Aroma fragrance fan', '<br>1) Eliminates feelings of depression. <br> 2) Provides relief from insomnia & stress.<br> 3) Boots immune system. <br> 4) Increases circulation & energy levels in body.<br> 5) Helps in treating constipation, indigestion & bloating.<br> 6) Reduces severity and discomfort cause by psoriasis & eczema.<br>', 'aroma.jpg', 30, '90000.00', 'true', '10'),
(81, '231001', 'Romance woman', '1) Make your home attractive because it helps to increase the interest level and motivation towards your work. <br>\r\n2) Make a home more functional because good Home Decoration help to make the members more generous and social. <br>\r\n3) Reduced stress.<br>', 'woman.jpg', 20, '70000.00', 'true', '10'),
(82, '231002', 'Romance woman2', '1) Make your home attractive because it helps to increase the interest level and motivation towards your work. <br> 2) Make a home more functional because good Home Decoration help to make the members more generous and social. <br> 3) Reduced stress.<br>', 'woman2.jpg', 10, '70000.00', 'true', '10');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `questionnaire_id` int(10) NOT NULL,
  `a_1` text COLLATE utf8_bin NOT NULL,
  `a_2` text COLLATE utf8_bin NOT NULL,
  `a_3` text COLLATE utf8_bin NOT NULL,
  `a_4` text COLLATE utf8_bin NOT NULL,
  `a_5` text COLLATE utf8_bin NOT NULL,
  `a_6` text COLLATE utf8_bin NOT NULL,
  `a_7` text COLLATE utf8_bin NOT NULL,
  `a_8` text COLLATE utf8_bin NOT NULL,
  `a_9` text COLLATE utf8_bin NOT NULL,
  `a_10` text COLLATE utf8_bin NOT NULL,
  `a_11` text COLLATE utf8_bin NOT NULL,
  `a_12` text COLLATE utf8_bin NOT NULL,
  `a_13` text COLLATE utf8_bin NOT NULL,
  `a_14` text COLLATE utf8_bin NOT NULL,
  `a_15` text COLLATE utf8_bin NOT NULL,
  `a_16` text COLLATE utf8_bin NOT NULL,
  `a_17` text COLLATE utf8_bin NOT NULL,
  `a_18` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`questionnaire_id`, `a_1`, `a_2`, `a_3`, `a_4`, `a_5`, `a_6`, `a_7`, `a_8`, `a_9`, `a_10`, `a_11`, `a_12`, `a_13`, `a_14`, `a_15`, `a_16`, `a_17`, `a_18`) VALUES
(1, 'Nữ', '36-45', 'Đạt học/Bằng cử nhân', '7,200,720 – 14,400,000 VND', 'Xuất sắc (5)', 'Tốt (4)', 'Trung bình (3)', 'Thấp (2)', 'Rất thấp (1)', 'Thấp (2)', 'Trung bình (3)', 'Tốt (4)', 'Xuất sắc (5)', 'Tốt (4)', 'Trung bình (3)', 'Thấp (2)', 'Rất thấp (1)', 'Chắc chắn (5)'),
(3, 'Female', '26-35', 'College/Bachelor Degree', '303.06 – 606.06 USD', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Definitely recommend (5)'),
(4, 'Male', '15-25', 'Highschool', 'Below 303.03 USD', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Excellent (5)', 'Definitely recommend (5)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(3, 'Thitima', 'Kaiyasa', '112', 'khon kaen', 1234, 'jonathi@gmail.com', 'jonathi1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`questionnaire_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `questionnaire_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
