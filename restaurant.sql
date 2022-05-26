-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 06:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `room_add`
--

CREATE TABLE `room_add` (
  `id` int(32) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `room_price` int(32) NOT NULL,
  `room_catagory` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_add`
--

INSERT INTO `room_add` (`id`, `room_name`, `room_price`, `room_catagory`, `discription`, `photo`, `time`) VALUES
(1, 'A3', 133, 'single', 'tyui', 'room_images/s (1).jpg', '2022-05-23 08:19:20.677157'),
(2, 'A5', 22, 'single', 'erhgh', 'room_images/s (2).jpg', '2022-05-23 08:20:51.652186'),
(3, 'A2', 133, 'single', 'rtuio', 'room_images/s (4).jpg', '2022-05-23 08:25:55.209349'),
(4, 'A5', 245, 'single', 'sdfg', 'room_images/loginimg.jpg', '2022-05-23 08:41:42.625708'),
(9, 'A5', 133, 'single', 'ffgtgh', 'room_images/s (2).jpg', '2022-05-23 09:01:57.178069');

-- --------------------------------------------------------

--
-- Table structure for table `room_confirm`
--

CREATE TABLE `room_confirm` (
  `id` int(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nid` int(32) NOT NULL,
  `phone` int(32) NOT NULL,
  `checkin` varchar(100) NOT NULL,
  `checkout` varchar(100) NOT NULL,
  `member` varchar(100) NOT NULL,
  `roomname` varchar(100) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_confirm`
--

INSERT INTO `room_confirm` (`id`, `name`, `email`, `nid`, `phone`, `checkin`, `checkout`, `member`, `roomname`, `time`) VALUES
(1, 'saiful', 'saiful@gmail.com', 123, 333, '25/5/22', '26/5/22', 'two', 'A1', '2022-05-11 09:03:22.000000'),
(2, 'ss', 'ss@gmail.com', 555, 6777, '26/5/22', '27/5/22', 'two', 'A2', '0000-00-00 00:00:00.000000'),
(3, 'saiii', 'd@gmail.com', 55, 667, '25/6/22', '26/7/22', 'one', 'B1', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `User_password` varchar(100) NOT NULL,
  `time` timestamp(3) NOT NULL DEFAULT current_timestamp(3) ON UPDATE current_timestamp(3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `id` int(32) NOT NULL,
  `user_cmt_name` varchar(100) NOT NULL,
  `User_cmt_email` varchar(100) NOT NULL,
  `user_cmt` varchar(100) NOT NULL,
  `cmt_time` smallint(6) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`id`, `user_cmt_name`, `User_cmt_email`, `user_cmt`, `cmt_time`) VALUES
(1, 'jtjt', 'ttd@gj.com', 'stjnt', 32767),
(2, 'defrj', 'rty5t5@gmail.com', 'r5g', 32767),
(3, 'defrj', 'rty5t5@gmail.com', 'r5g', 32767),
(4, 'hggjhg', 'jjgjg@gmail.com', 'jykyty', 32767),
(5, 'lkk', 'jjgjg@gmail.com', 'xeleldl', 32767),
(6, 'lkk', 'jjgjg@gmail.com', 'xeleldl', 32767),
(7, 'lkk', 'jjgjg@gmail.com', 'xeleldl', 32767),
(8, 'lkk', 'jjgjg@gmail.com', 'xeleldl', 32767),
(9, 'lkk', 'jjgjg@gmail.com', 'xeleldl', 32767),
(10, 'hggjhg', 'jjgjg@gmail.com', '77967', 32767),
(11, 'hggjhg', 'jjgjg@gmail.com', '6yityi', 32767),
(12, 'defrj', 'rty5t5@gmail.com', 'r5g', 32767),
(13, 'defrj', 'rty5t5@gmail.com', 'r5g', 32767);

-- --------------------------------------------------------

--
-- Table structure for table `user_registation`
--

CREATE TABLE `user_registation` (
  `id` int(32) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `User_password` varchar(100) NOT NULL,
  `time` smallint(6) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registation`
--

INSERT INTO `user_registation` (`id`, `User_name`, `user_email`, `User_password`, `time`) VALUES
(1, 'sxax', 'belalkhan.cse@gmail.com', '12345624', 32767),
(2, 'saiful', 'saiful@gmail.com', '12345678', 32767);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room_add`
--
ALTER TABLE `room_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_confirm`
--
ALTER TABLE `room_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registation`
--
ALTER TABLE `user_registation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room_add`
--
ALTER TABLE `room_add`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_confirm`
--
ALTER TABLE `room_confirm`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_registation`
--
ALTER TABLE `user_registation`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
