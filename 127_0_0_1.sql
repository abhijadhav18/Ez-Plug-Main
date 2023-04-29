-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 01:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vysoxnyu_ev`
--
CREATE DATABASE IF NOT EXISTS `vysoxnyu_ev` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vysoxnyu_ev`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `sno` int(200) NOT NULL,
  `c_email` varchar(600) NOT NULL,
  `ctype` varchar(500) NOT NULL,
  `location` varchar(600) NOT NULL,
  `station` varchar(600) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `bslot` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `price` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`sno`, `c_email`, `ctype`, `location`, `station`, `bdate`, `bslot`, `mobile`, `price`, `date`) VALUES
(1, 'harshit@gmail.com', 'EV', 'Jaipur', 'Bhartiyacoders', '2023-04-26', '4:00PM - 5:00PM', '8278698501', '5000', '2023-04-23'),
(2, 'harshit@gmail.com', 'EV', 'Jaipur', 'Bhartiyacoders', '2023-03-26', '1:00PM - 3:00PM', '8278698501', '5000', '2023-03-20'),
(3, 'yash@gmail.com', 'CNG', 'Jaipur', 'Bhartiyacoders', '2023-03-26', '7:00PM - 8:00PM', '8278698501', '1000', '2023-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(200) NOT NULL,
  `name` varchar(600) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(900) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'harshit', 'HARSHIT@GMAIL.COM', '8278698501', 'hello', '2023-04-23'),
(2, 'harshit jangid', 'abc@gmail.com', '8278698501', 'hello', '2023-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `sno` int(200) NOT NULL,
  `name` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`sno`, `name`) VALUES
(1, 'Jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `sno` int(200) NOT NULL,
  `ctype` varchar(500) NOT NULL,
  `location` varchar(700) NOT NULL,
  `location_code` varchar(600) NOT NULL,
  `station` varchar(800) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `price` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`sno`, `ctype`, `location`, `location_code`, `station`, `image`, `detail`, `price`, `date`) VALUES
(6, 'EV', 'Jaipur', 'EV1', 'harshit', '2023-04-24-11-00BHARTIYA_CODERS-T-LOGO.png', 'Address', '300', '2023-04-24'),
(7, 'EV', 'Jaipur', 'EV1', 'Dumm', '2023-04-26-16-27BHARTIYA_CODERS-T-LOGO.png', 'ghn', '44', '2023-04-26'),
(8, 'EV', 'Jaipur', 'EV1', 'Dum', '2023-04-26-16-27creative_2023-04-14_1681464224.jpeg', 'ghn', '44', '2023-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(200) NOT NULL,
  `name` varchar(600) NOT NULL,
  `email` varchar(700) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `name`, `email`, `mobile`, `password`, `status`) VALUES
(1, 'harshit jangid', 'harshit@gmail.com', '8278698501', '123', 0),
(2, 'yash', 'yash@gmail.com', '8278698501', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
