-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 07:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bilsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE `additem` (
  `id` int(10) NOT NULL,
  `barcode` int(25) NOT NULL,
  `stock` int(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `select_type` varchar(50) NOT NULL,
  `price_per_item` int(25) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `additem`
--

INSERT INTO `additem` (`id`, `barcode`, `stock`, `item_name`, `select_type`, `price_per_item`, `description`) VALUES
(1, 23415263, 135, 'almond       ', 'dried fruit', 750, '       this is almond.																																																	'),
(2, 342536, 156, 'coconat oil', 'oil', 180, 'this is coconat oil.'),
(3, 123223, 170, 'dove ', 'soap', 15, ' this is dove soap.														'),
(4, 123456789, 50, 'KURKURE', 'dried fruit', 10, 'THIS IS A KURKURE.'),
(5, 11111, 120, 'lifeboy', 'soap', 25, 'this is lifeboy.'),
(6, 445566, 123, 'lux', 'soap', 25, 'this is lux soap.'),
(7, 12345, 123, 'nirma', 'soap', 20, 'this is nirma soap.'),
(8, 135792468, 15, 'oreo ', 'dried fruit', 25, ' this is oreo biscuit.							'),
(9, 75321, 200, 'tea', 'select type', 320, 'this is tea.'),
(10, 22222, 130, 'Cashew', 'dried fruit', 700, 'this is Cashew.'),
(11, 33333, 155, 'Pista', 'dried fruit', 1000, 'this is Pista.'),
(12, 44444, 126, 'Khajoor', 'dried fruit', 150, 'this is Khajoor.'),
(13, 55555, 127, 'Walnuts', 'dried fruit', 650, 'this is Walnuts.'),
(14, 66666, 128, 'Kismis', 'dried fruit', 450, 'this is Kismis.'),
(15, 77777, 129, ' Anjeer   ', 'dried fruit', 1200, '   this is  Anjeer.																					');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Id`, `Name`, `Phone`, `Email`, `Message`) VALUES
(7, 'PANKAJ', 2147483647, 'rathodpankaj805512@gmail.com', 'my name is PANKAJ.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(25) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Usertype` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`, `Usertype`) VALUES
(1, 'PANKAJ', '1234', 'admin'),
(2, 'VATSAL', '4321', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additem`
--
ALTER TABLE `additem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additem`
--
ALTER TABLE `additem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
