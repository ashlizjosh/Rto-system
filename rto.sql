-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 02:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `licence`
--

CREATE TABLE `licence` (
  `appno` int(10) NOT NULL,
  `learnersid` int(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `mob` int(10) NOT NULL,
  `gen` text NOT NULL,
  `hname` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `po` varchar(30) DEFAULT NULL,
  `pin` int(6) NOT NULL,
  `vehclass` varchar(30) NOT NULL,
  `dte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licence`
--

INSERT INTO `licence` (`appno`, `learnersid`, `name`, `email`, `mob`, `gen`, `hname`, `place`, `po`, `pin`, `vehclass`, `dte`) VALUES
(2896, 67544, 'tftf', 'rere@gmail.com', 2147483647, 'Male', 'hjgjghgg', 'ggrete', 'erer', 435454, 'trtrtr', '2019-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `rcstatus`
--

CREATE TABLE `rcstatus` (
  `permntno` int(12) NOT NULL,
  `tempno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_permit`
--

CREATE TABLE `vehicle_permit` (
  `Name` varchar(30) NOT NULL,
  `Vehino` varchar(20) NOT NULL,
  `vehitype` varchar(15) NOT NULL,
  `seating` varchar(10) NOT NULL,
  `permit` varchar(15) NOT NULL,
  `permitdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_permit`
--

INSERT INTO `vehicle_permit` (`Name`, `Vehino`, `vehitype`, `seating`, `permit`, `permitdate`) VALUES
('', '', '', '', '', '0000-00-00'),
('', '0', '', '', '', '0000-00-00'),
('fgf', 'kl38h1278', 'BUS', '30', 'private', '2019-10-26'),
('fgf', 'kl38h2321', 'BUS', '30', 'private', '2019-10-26'),
('fgf', 'kl38h6754', 'BUS', '30', 'private', '2019-10-26'),
('sds', 'kl39h3421', 'CAR', '4', 'taxi', '2019-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_reg`
--

CREATE TABLE `vehicle_reg` (
  `tmprno` int(10) NOT NULL,
  `oname` varchar(20) NOT NULL,
  `hname` varchar(20) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `place` varchar(20) NOT NULL,
  `vehclz` varchar(20) NOT NULL,
  `btype` varchar(20) NOT NULL,
  `manufacture` varchar(30) NOT NULL,
  `cylindrno` varchar(10) NOT NULL,
  `cubicpcty` varchar(10) NOT NULL,
  `chaisisno` varchar(10) NOT NULL,
  `engineno` varchar(10) NOT NULL,
  `fuel_type` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `finance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_reg`
--

INSERT INTO `vehicle_reg` (`tmprno`, `oname`, `hname`, `dname`, `place`, `vehclz`, `btype`, `manufacture`, `cylindrno`, `cubicpcty`, `chaisisno`, `engineno`, `fuel_type`, `color`, `finance`) VALUES
(0, 'sdssd', 'green fields', 'bnbgh', 'sdsds', 'LMV', 'HATCHBACK', 'gfgfd', '45', '36', '32434', '6567', 'PETROL', 'BLACK', 'muthoot'),
(562, 'hgh', 'ddre', 'bnbgh', 'fdfdf', 'M/C With Gea', 'SPORTS CAR', 'dfdfd', '4', '31', '897', '4423', 'PETROL', 'BLACK', 'muthoot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `licence`
--
ALTER TABLE `licence`
  ADD PRIMARY KEY (`appno`);

--
-- Indexes for table `rcstatus`
--
ALTER TABLE `rcstatus`
  ADD PRIMARY KEY (`permntno`);

--
-- Indexes for table `vehicle_permit`
--
ALTER TABLE `vehicle_permit`
  ADD PRIMARY KEY (`Vehino`);

--
-- Indexes for table `vehicle_reg`
--
ALTER TABLE `vehicle_reg`
  ADD PRIMARY KEY (`tmprno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
