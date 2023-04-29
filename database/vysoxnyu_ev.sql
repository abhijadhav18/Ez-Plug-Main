-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2023 at 03:04 AM
-- Server version: 10.3.38-MariaDB-log-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vysoxnyu_ev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`sno`, `c_email`, `ctype`, `location`, `station`, `bdate`, `bslot`, `mobile`, `price`, `date`) VALUES
(1, 'harshit@gmail.com', 'EV', 'Jaipur', 'Bhartiyacoders', '2023-04-26', '4:00PM - 5:00PM', '8278698501', '5000', '2023-04-23'),
(2, 'harshit@gmail.com', 'EV', 'Jaipur', 'Bhartiyacoders', '2023-03-26', '1:00PM - 3:00PM', '8278698501', '5000', '2023-03-20'),
(3, 'yash@gmail.com', 'CNG', 'Jaipur', 'Bhartiyacoders', '2023-03-26', '7:00PM - 8:00PM', '8278698501', '1000', '2023-03-20'),
(4, 'harshit@gmail.com', 'EV', 'Jaipur', 'harshit', '2023-04-28', '10AM-11AM', '8278698501', '300', '2023-04-26'),
(5, 'harshit@gmail.com', 'EV', 'Jaipur', 'harshit', '2023-04-28', '10AM-11AM', '8278698501', '300', '2023-04-26'),
(6, 'abjadhavpatil18@gmail.com', 'EV', 'ChargeGrid Charging Station - Amanora Park Town, Amanora, Magarpatta Rd, Hadapsar, Pune, Maharashtra 411028', 'ChargeGrid Charging Station - Amanora Park Town, Amanora, Magarpatta Rd, Hadapsar, Pune, Maharashtra 411028', '2023-04-28', '10AM-11AM', '9172466900', '300', '2023-04-27'),
(7, 'abjadhavpatil18@gmail.com', 'CNG', 'S K CNG GAS PUMP , Location :- 18/2 SHEWALWADI, Pune - Nashik Hwy, Manchar, Maharashtra 410503', 'S K CNG GAS PUMP', '2023-04-27', '10AM-11AM', '7447525697', '91 /Kg', '2023-04-27');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'harshit', 'HARSHIT@GMAIL.COM', '8278698501', 'hello', '2023-04-23'),
(2, 'harshit jangid', 'abc@gmail.com', '8278698501', 'hello', '2023-04-23'),
(3, 'Yashvendra Singh panwar', 'singhyashvendra936@gmail.com', '6350123641', 'test', '2023-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `sno` int(200) NOT NULL,
  `name` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`sno`, `name`) VALUES
(2, 'Electric Vehicle Charging Station - Shah Sarbatwale ,Katraj-Dehu Road , Pune'),
(6, 'Tata Power Rudra Motors Charging Station , Location:- Ubale Nagar Bus Stop Sai Satyam Park Wagholi Pune'),
(7, 'ChargeGrid Charging Station - Amanora Park Town, Amanora, Magarpatta Rd, Hadapsar, Pune, Maharashtra 411028'),
(9, 'LionCharge Charging Station - HX64+GF7, Wagholi, Pune, Maharashtra 412207'),
(12, 'Electric Vehicle Charging Station , Location:- Near KVK Narayangaon Nashik Highway Junnar Pune'),
(14, 'Chakan Petrol Depot with CNG ONLINE pump ,  Address:- N.H.50, At Post Chakan, Taluka-Khed, Pune â€“ Nashik Hwy, Chakan, Maharashtra 410501'),
(15, 'Maharashtra Natural Gas Ltd CNG Station , Address:- QV84+R4Q, Chakan, Maharashtra 410501'),
(16, 'Bharat Petroleum CNG & Petrol Pump ,Address:-	QR32+G4V, Talegaon-Chakan Rd, Mahalunge Ingale, Maharashtra 410501'),
(17, 'S K CNG GAS PUMP , Location :- 18/2 SHEWALWADI, Pune - Nashik Hwy, Manchar, Maharashtra 410503'),
(18, 'Torrent Gas CNG Station , Location :- 2XG2+FG7, Sai Dwarka Petroleum, IOCL station, Pune - Nashik Hwy, near Jain Temple, Kalamb, Maharashtra 410515');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`sno`, `ctype`, `location`, `location_code`, `station`, `image`, `detail`, `price`, `date`) VALUES
(10, 'EV', 'Electric Vehicle Charging Station , Location:- Near KVK Narayangaon Nashik Highway Junnar Pune', 'EV12', 'ASR Charging Station', '2023-04-27-15-33Screenshot 2023-04-27 153200.png', 'Book Now And Pay After Charge', '200', '2023-04-27'),
(11, 'EV', 'ChargeGrid Charging Station - Amanora Park Town, Amanora, Magarpatta Rd, Hadapsar, Pune, Maharashtra 411028', 'EV7', 'ChargeGrid Charging Station', '2023-04-27-15-38Screenshot 2023-04-27 153818.png', 'Book Now And Pay After Charge\r\n', '200', '2023-04-27'),
(12, 'EV', 'Electric Vehicle Charging Station - Shah Sarbatwale ,Katraj-Dehu Road , Pune', 'EV2', 'Electric Vehicle Charging Station ', '2023-04-27-15-42jpg.webp', 'Book  Now And Pay After Charge\r\n ', '250', '2023-04-27'),
(13, 'EV', 'LionCharge Charging Station - HX64+GF7, Wagholi, Pune, Maharashtra 412207', 'EV9', 'LionCharge Charging Station', '2023-04-27-15-44Tata_Nexon.avif', 'Book Now And Pay After Charge\r\n', '200', '2023-04-27'),
(14, 'EV', 'Tata Power Rudra Motors Charging Station , Location:- Ubale Nagar Bus Stop Sai Satyam Park Wagholi Pune', 'EV6', 'Tata Power Rudra Motors Charging Station ', '2023-04-27-15-4620191007120422_Plug-n-Go-EV-charge-1.jpg', 'Book Now And Pay After Charge', '150', '2023-04-27'),
(15, 'CNG', 'Bharat Petroleum CNG & Petrol Pump ,Address:-	QR32+G4V, Talegaon-Chakan Rd, Mahalunge Ingale, Maharashtra 410501', 'CNG16', 'Bharat Petroleum CNG & Petrol Pump ', '2023-04-27-15-49CNG-Pune-768x505.jpg', 'Book Now Pay After Filling', '91 /Kg', '2023-04-27'),
(16, 'CNG', 'Chakan Petrol Depot with CNG ONLINE pump ,  Address:- N.H.50, At Post Chakan, Taluka-Khed, Pune â€“ Nashik Hwy, Chakan, Maharashtra 410501', 'CNG14', 'Chakan Petrol Depot with CNG ONLINE pump ', '2023-04-27-15-50Torrent-Gas-CNG.jpeg', 'Book Now And Pay After Filling', '91 /Kg', '2023-04-27'),
(17, 'CNG', 'Maharashtra Natural Gas Ltd CNG Station , Address:- QV84+R4Q, Chakan, Maharashtra 410501', 'CNG15', 'Maharashtra Natural Gas Ltd CNG Station ', '2023-04-27-15-51mngl.jpg', 'Book Now nd Pay After Filling', '91 /Kg', '2023-04-27'),
(18, 'CNG', 'S K CNG GAS PUMP , Location :- 18/2 SHEWALWADI, Pune - Nashik Hwy, Manchar, Maharashtra 410503', 'CNG17', 'S K CNG GAS PUMP ', '2023-04-27-15-53th.jpg', 'Book Now And Pay After Filling ', '91 /Kg', '2023-04-27'),
(19, 'CNG', 'Torrent Gas CNG Station , Location :- 2XG2+FG7, Sai Dwarka Petroleum, IOCL station, Pune - Nashik Hwy, near Jain Temple, Kalamb, Maharashtra 410515', 'CNG18', 'Torrent Gas CNG Station ', '2023-04-27-15-545968cngstations.jpg', 'Book Now And Pay After Filling', '91 / Kg', '2023-04-27');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `name`, `email`, `mobile`, `password`, `status`) VALUES
(5, 'Abhishek Bharat Jadhav', 'abjadhavpatil18@gmail.com', '+919172466900', '123456789', 0);

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
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
