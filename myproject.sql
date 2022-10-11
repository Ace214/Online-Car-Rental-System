-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 07:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Id` int(11) NOT NULL,
  `adminuser` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Id`, `adminuser`, `adminpassword`) VALUES
(1, 'navya', 'melvin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `carname` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `modelyear` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `monthly` varchar(255) NOT NULL,
  `priceperday` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Id`, `category_id`, `carname`, `fuel`, `modelyear`, `transmission`, `monthly`, `priceperday`, `image`) VALUES
(1, 1, 'Maruti WagonR VXi', 'Petrol', '2017', 'Manual', '720', '820', 'carh1.jpg'),
(2, 1, 'Hyundai Santro', 'Petrol', '2018', 'Automatic', '770', '870', 'carh2.jpg'),
(3, 1, 'Maruti Celerio ZXi', 'Petrol', '2015', 'Automatic', '700', '875', 'carh3.jpg'),
(4, 1, 'Swift ZXi', 'Petrol', '2016', 'Manual', '800', '890', 'carh4.jpg'),
(5, 1, 'Baleno Zeta', 'Petrol', '2020', 'Manual', '850', '900', 'carh5.jpg'),
(6, 2, 'Ertiga  ZXi', 'Petrol', '2022', 'Automatic', '975', '1000', 'cars1.jpg'),
(7, 2, 'Honda BRV ', 'Diesel', '2021', 'Manual', '989', '1020', 'cars2.jpg'),
(8, 2, 'Hyundai Creta SX', 'Petrol', '2019', 'Automatic', '990', '1378', 'cars3.jpg'),
(9, 2, 'Maruti Vitara Brezza', 'Petrol', '2018', 'Manual', '1000', '1450', 'cars4.jpg'),
(10, 2, 'XUV500 ', 'Diesel', '2017', 'Manual', '1200', '1500', 'cars5.jpg'),
(11, 3, 'Honda Amaze Diesel', 'Petrol', '2022', 'Manual', '1500', '1670', 'carsed1.jpg'),
(12, 3, 'Toyota Yaris J', 'Petrol', '2018', 'Manual', '1775', '1900', 'carsed2.jpg'),
(13, 3, 'Honda City ZX', 'Petrol', '2021', 'Manual', '1900', '2000', 'carsed3.jpg'),
(14, 4, 'Bmw', 'Diesel', '2021', 'Automatic', '16000', '17020', 'carlux1.jpg'),
(15, 4, 'Land Rover Range Rover', 'Diesel', '2020', 'Manual', '18000', '19000', 'carlux2.jpg'),
(16, 4, 'Audi Q3', 'Diesel', '2022', 'Automatic', '25000', '22820', 'carlux3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `name`) VALUES
(1, 'Hatchback Cars'),
(2, 'SUV Cars'),
(3, 'Sedan Cars'),
(4, 'Luxury Cars');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `fullname`, `email`, `phonenumber`, `message`) VALUES
(1, 'Lena Sebastian', 'lena@gmail.com', '87625765755', 'pls contact me'),
(2, 'Ashly Thomas', 'ash@gmail.com', '8267456547', 'Tell me more about your company.');

-- --------------------------------------------------------

--
-- Table structure for table `registrationform`
--

CREATE TABLE `registrationform` (
  `Id` int(11) NOT NULL,
  `carname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pickupdate` date NOT NULL,
  `returndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationform`
--

INSERT INTO `registrationform` (`Id`, `carname`, `name`, `email`, `phonenumber`, `address`, `pickupdate`, `returndate`) VALUES
(1, 'Maruti WagonR VXi', 'Albert Johnson', 'albert@gmail.com', '8275462546', 'Adoor,kerala', '2022-08-09', '2022-08-12'),
(2, 'Honda Amaze Diesel', 'Sushma S', 'sush@gmail.com', '6378567858', 'konni,kerala', '2022-08-15', '2022-09-07'),
(3, 'Audi Q3', 'Melvin Jose', 'melvin04@gmail.com', '3546655777', 'konni,kerala', '2022-08-22', '2022-08-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registrationform`
--
ALTER TABLE `registrationform`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrationform`
--
ALTER TABLE `registrationform`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
