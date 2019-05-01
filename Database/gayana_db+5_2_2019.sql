-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 09:12 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gayana_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_order`
--

CREATE TABLE `booking_order` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `hotel_id` int(20) NOT NULL,
  `package_id` int(20) NOT NULL,
  `tour_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_order_feedback`
--

CREATE TABLE `booking_order_feedback` (
  `id` int(20) NOT NULL,
  `booking_order_id` int(20) NOT NULL,
  `booking_manager_user_id` int(20) NOT NULL,
  `feedback_message` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_order_info`
--

CREATE TABLE `booking_order_info` (
  `id` int(20) NOT NULL,
  `booking_id` int(20) NOT NULL,
  `check_in_data` date NOT NULL,
  `check_out_data` date NOT NULL,
  `no_of_room` int(20) NOT NULL,
  `no_of_guest` int(20) NOT NULL,
  `notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(20) NOT NULL,
  `destination` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone_hotline` int(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `image_path` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `location`, `email`, `telephone_hotline`, `address`, `price`, `image_path`, `details`) VALUES
(3, 'Try1', 'location', 'keminda4lk@gmail.com', 123456789, 'address', 12222, 'images/hotel_1.jpg', 'u'),
(4, 'Hotel1', 'location', 'keminda4lk@gmail.com', 123456789, 'address', 12222, 'images/hotel_1.jpg', 'dasdadasda'),
(5, 'asda', 'location', 'kumara@gmail', 123456789, 'address', 42414, 'images/hotel_1.jpg', 'sfasdada'),
(6, 'Try1', 'location', 'keminda4lk@gmail.com', 123456789, 'address', 12222, 'images/hotel_1.jpg', 'dasdadasda'),
(11, 'Try1', 'location', 'keminda4lk@gmail.com', 123456789, 'address', 12222, 'images/hotel_1.jpg', 'dasdadasda'),
(13, 'swsw', 'location', 'keminda4lk@gmail.com', 123456789, 'address', 3.4e35, 'images/hotel_1.jpg', 'abvd'),
(14, 'new', 'location', 'keminda4lk@gmail.com', 123456789, 'address', 21342, 'images/hotel_1.jpg', 'new'),
(18, 'swsw', 'location', '', 123456789, 'address', 25454, 'images/hotel_1.jpg', 'dsdsds'),
(20, 'shangila', 'location', 'keminda4lk@gmail.com', 123456789, 'address', 150000, 'images/hotel_1.jpg', 'nice Hotel'),
(21, 'Try1', 'location', 'keminda4lk@gmail.com', 123456789, 'address', 12222, 'images/hotel_1.jpg', 'dasdadasda');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_package`
--

CREATE TABLE `hotel_package` (
  `id` int(20) NOT NULL,
  `hotel_id` int(20) NOT NULL,
  `package` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room`
--

CREATE TABLE `hotel_room` (
  `id` int(20) NOT NULL,
  `hotel_id` int(20) NOT NULL,
  `no_available_room` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `destination` varchar(45) NOT NULL,
  `price` decimal(54,0) NOT NULL,
  `image_path` varchar(45) NOT NULL,
  `details` varchar(45) NOT NULL,
  `tour_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `name`, `destination`, `price`, `image_path`, `details`, `tour_type`) VALUES
(2, 'Try1', 'rjdfk', '12222', 'images/hotel_1.jpg', 'dasdadasda', 'jkdfk'),
(3, 'Try1', 'rjdfk', '12222', 'images/hotel_1.jpg', 'dasdadasda', 'jkdfk'),
(4, 'Trdsdsy1', 'dasddadasda', '0', 'images/hotel_1.jpg', '12222', 'keminda'),
(5, 'fefdfdff', 'dff', '5451', 'images/hotel_1.jpg', 'ddss', '54545'),
(6, 'keminda', 'yala', '25555', '', 'best', 'oneday'),
(8, 'fddfd', 'fdfdfd', '0', '', 'kemidaa stri kfjdksfm', 'dfnsdkf'),
(9, 'swsw', 'Galle', '5000', 'images/hotel_1.jpg', 'best Tour', 'one day'),
(10, 'swsw', 'Galle', '5000', 'images/hotel_1.jpg', 'best', 'one day');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `user_type_id` int(20) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type_id`, `user_name`, `password_hash`) VALUES
(1, 0, 'test', 'kjhjfweofwe'),
(6, 0, 'ran', '44f437ced647ec3f40fa0841041871cd'),
(7, 1, 'chan4lk', '7cfec3d1deabd4ea4ef6e3253468197e'),
(8, 1, 'chan4l2k', '7cfec3d1deabd4ea4ef6e3253468197e'),
(9, 1, 'chan4l3k', '7cfec3d1deabd4ea4ef6e3253468197e'),
(20, 1, 'chan4l4k', '7cfec3d1deabd4ea4ef6e3253468197e'),
(24, 1, 'chan4l5k', '7cfec3d1deabd4ea4ef6e3253468197e'),
(25, 1, 'chan4l0k', '7cfec3d1deabd4ea4ef6e3253468197e'),
(27, 2, 'Chandima ', '1c63129ae9db9c60c3e8aa94d3e00495'),
(29, 1, 'Chandima9', '2c216b1ba5e33a27eb6d3df7de7f8c36'),
(30, 2, 'chan10lk', '2c216b1ba5e33a27eb6d3df7de7f8c36');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone_mobile` int(20) DEFAULT NULL,
  `telephone_work` int(20) DEFAULT NULL,
  `address_line_1` varchar(45) DEFAULT NULL,
  `address_line_2` varchar(45) DEFAULT NULL,
  `address_line_3` varchar(45) DEFAULT NULL,
  `address_line_4` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `email`, `telephone_mobile`, `telephone_work`, `address_line_1`, `address_line_2`, `address_line_3`, `address_line_4`) VALUES
(1, 0, 'test', 'test', 'test', 'test', 0, 0, 'testq', 'test', 'test', 'test'),
(3, 0, 'rangika', 'ran', 'gika', 'ran@ran.com', 716278562, 0, 'divulapitiya road ', 'Naiwala', '', ''),
(4, 8, 'Customer', NULL, 'User', 'chan4l2k@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 9, 'Customer', NULL, 'User', 'chan4l3k@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 20, 'Customer', NULL, 'User', 'chan4l4k@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 24, 'Customer', NULL, 'User', 'chan4l5k@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 25, 'Customer', NULL, 'User', 'chan4l0k@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 27, 'Customer', NULL, 'User', '', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 29, 'Customer', NULL, 'User', 'chan4lk29@gmal.com', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 30, 'Customer', NULL, 'User', 'chan10lk@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(20) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
(1, 'admin'),
(2, 'customer'),
(3, 'maintainer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_order_feedback`
--
ALTER TABLE `booking_order_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_order_info`
--
ALTER TABLE `booking_order_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_package`
--
ALTER TABLE `hotel_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_user_name` (`user_name`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
