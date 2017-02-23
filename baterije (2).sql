-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 07:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baterije`
--

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL,
  `PICTURE` varchar(100) NOT NULL,
  `A_LINK_B` varchar(255) NOT NULL,
  `A_LINK` varchar(255) NOT NULL,
  `TYPE` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`ID`, `NAME`, `PRODUCT_ID`, `PICTURE`, `A_LINK_B`, `A_LINK`, `TYPE`) VALUES
(1, 'Iphone 7', 1, 'iphone_7.png', '', '', 1),
(2, 'Iphone 7 Plus', 1, 'iphone_7_plus.png', '', '', 1),
(3, 'Iphone 6', 1, 'iphone_6.png', 'https://www.amazon.de/LEISTUNGSST%C3%84RKSTER-Premiumakku-Hochwertigste-QUALIT%C3%84TSZELLEN-AKKULAUFZEIT/dp/B01MYCCR10/ref=pd_sbs_107_3?_encoding=UTF8&psc=1&refRID=W9XG8WBEBHDA8BC7GC51', 'https://www.amazon.de/LEISTUNGSST%C3%84RKSTER-Premiumakku-Hochwertigste-QUALIT%C3%84TSZELLEN-AKKULAUFZEIT/dp/B01N6V2H1I/ref=sr_1_2?ie=UTF8&qid=1487847090&sr=8-2&keywords=hagnaven', 1),
(4, 'Iphone 6 Plus', 1, 'iphone_6_plus.png', '', '', 1),
(5, 'Iphone 5s', 1, 'iphone_5s.png', '', '', 1),
(6, 'Samsung Galaxy S7', 2, 'galaxy_s7.png', '', '', 1),
(7, 'Samsung Galaxy S6', 2, 'galaxy_s6.png', '', '', 1),
(8, 'IPad Air 2', 1, 'ipad_air_2.png', '', '', 2),
(9, 'Samsung Galaxy Note 3', 2, 'galaxy_note_3.png', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `NAME`) VALUES
(1, 'Apple'),
(2, 'Samsung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
