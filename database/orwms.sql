-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 06:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orwms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `collector_id` int(11) UNSIGNED NOT NULL,
  `buyId` int(8) NOT NULL,
  `companyId` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `collector_id`, `buyId`, `companyId`, `user_name`, `password`) VALUES
(1, 0, 0, 0, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(8) UNSIGNED NOT NULL,
  `offerId` int(11) UNSIGNED NOT NULL,
  `category` varchar(30) NOT NULL,
  `offer_condition` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` int(10) NOT NULL,
  `price` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `buyId` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `offerId`, `category`, `offer_condition`, `quantity`, `unit`, `price`, `location`, `buyId`) VALUES
(1, 0, 'Textile', 'Mixed', 30, 0, '200', 'mwakirunge', 0),
(2, 0, 'Plastic', 'Baled', 40, 0, '100', 'old town', 0),
(3, 0, 'Glass', 'Mixed', 67, 0, '200', 'kibokoni', 0),
(4, 0, 'Textile', 'Mixed', 67, 0, '400', 'mwakirunge', 0),
(10, 0, 'Textile', 'Baled', 100, 0, '100', 'Kibokoni', 0),
(11, 0, 'Textile', 'Baled', 100, 0, '100', 'Kibokoni', 0);

-- --------------------------------------------------------

--
-- Table structure for table `collectors`
--

CREATE TABLE `collectors` (
  `id` int(11) UNSIGNED NOT NULL,
  `offerId` int(11) UNSIGNED NOT NULL,
  `collector_id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(9) NOT NULL,
  `national_id` int(8) NOT NULL,
  `password` text NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collectors`
--

INSERT INTO `collectors` (`id`, `offerId`, `collector_id`, `first_name`, `last_name`, `user_name`, `location`, `email`, `phone`, `national_id`, `password`, `registration_date`) VALUES
(1, 0, 0, 'Nicholas', 'Karimi', 'Karimi_N', 'Mwakirunge', 'kariminic@gmail.com', 788678900, 33175642, '827ccb0eea8a706c4c34a16891f84e7b', '2018-09-21 12:51:24'),
(2, 0, 0, 'steve', 'olangh', 'steve', 'Mwakirunge', 'xyz@gmail.com', 98899000, 34567890, '827ccb0eea8a706c4c34a16891f84e7b', '2018-09-27 09:47:31'),
(3, 0, 0, 'Johnstone', 'Muchangi', 'Johnie', 'Old Town', 'johnie@gmail.com', 788907653, 56789088, '827ccb0eea8a706c4c34a16891f84e7b', '2018-10-09 17:16:51'),
(4, 0, 0, 'Duncan', 'Muriuki', 'Dan M', 'Majengo', 'danm@majengo.com', 722345678, 44567890, '0f281d173f0fdfdccccd7e5b8edc21f1', '2018-11-08 08:18:40'),
(5, 0, 0, 'Franklin', 'Mugambi', 'Frank123', 'Majengo', 'franklin@gmail.com', 98765432, 34567890, '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-08 08:27:15'),
(6, 0, 0, 'Walid', 'Faiz', 'Faiz', 'Old Town', 'faiz@gmail.com', 0, 0, '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-09 14:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Id` int(8) UNSIGNED NOT NULL,
  `companyId` int(11) UNSIGNED NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `buyId` int(8) NOT NULL,
  `offerId` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Id`, `companyId`, `company_name`, `email`, `category`, `location`, `phone`, `password`, `reg_date`, `buyId`, `offerId`) VALUES
(5, 0, 'ABC', 'abc@sales.com', 'Paper Recycling', 'Mombasa CDB', 78829900, 'e99a18c428cb38d5f260853678922e03', '2018-09-18 08:11:22', 0, 0),
(11, 0, 'AMORE', 'amore@prod.ltd', 'Texttile Recycling', 'Jomvu', 888000, '827ccb0eea8a706c4c34a16891f84e7b', '2018-09-24 14:23:31', 0, 0),
(12, 0, 'MTN', 'mtn@kenya.org', 'Paper Recycling', 'Majengo', 78809976, '418cd4a5598be15f3db8a8c0ed333b02', '2018-11-09 07:34:17', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `Id` int(11) UNSIGNED NOT NULL,
  `offerId` int(11) UNSIGNED NOT NULL,
  `offer_describe` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `offer_condition` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `pricing_terms` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`Id`, `offerId`, `offer_describe`, `category`, `offer_condition`, `quantity`, `unit`, `price`, `pricing_terms`, `location`, `post_date`) VALUES
(1, 0, 'Well Separated recyclable materials', 'Plastic', 'Baled', 300, 'kg', 400, 'KES', 'Old Town', '2018-09-28 11:50:42'),
(2, 0, 'GLASS', 'Glass', 'Baled', 56, 'kg', 200, 'KES', 'Kibokoni', '2018-10-09 17:18:11'),
(3, 0, 'Fabrics', 'Textile', 'Baled', 100, 'tonn', 800, '$US', 'Kibokoni', '2018-10-28 16:10:19'),
(4, 0, 'Plastic bottles', 'Plastic', 'Mixed', 30, 'tonn', 150, '$US', 'Mwakirunge', '2018-10-28 16:12:58'),
(5, 0, 'FABRICS', 'Textile', 'Baled', 100, 'tonn', 100, '$US', 'Kibokoni', '2018-11-08 08:22:26'),
(6, 0, 'TEXTILES', 'Textile', 'Mixed', 45, 'kg', 100, 'KES', 'Old Town', '2018-11-09 14:10:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `collector_id` (`collector_id`),
  ADD KEY `companyId` (`companyId`),
  ADD KEY `buyId` (`buyId`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`buyId`),
  ADD KEY `offerId` (`offerId`);

--
-- Indexes for table `collectors`
--
ALTER TABLE `collectors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `offerId` (`offerId`),
  ADD KEY `offerId_2` (`offerId`),
  ADD KEY `collector_id` (`collector_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `company_name` (`company_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `buyId` (`buyId`),
  ADD KEY `offerId` (`offerId`),
  ADD KEY `companyId` (`companyId`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `offerId` (`offerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `collectors`
--
ALTER TABLE `collectors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_2` FOREIGN KEY (`buyId`) REFERENCES `admin` (`buyId`);

--
-- Constraints for table `collectors`
--
ALTER TABLE `collectors`
  ADD CONSTRAINT `collectors_ibfk_1` FOREIGN KEY (`offerId`) REFERENCES `offers` (`offerId`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_2` FOREIGN KEY (`offerId`) REFERENCES `offers` (`offerId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
