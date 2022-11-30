-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 06:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagoron`
--

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `sno` int(7) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `BookDes` varchar(355) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `sno` int(7) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `CourseDes` varchar(355) NOT NULL,
  `Link` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Harassment_Complaint`
--

CREATE TABLE `Harassment_Complaint` (
  `sno` int(7) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Bywhom` varchar(60) NOT NULL,
  `Place` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Harassment_Complaint`
--

INSERT INTO `Harassment_Complaint` (`sno`, `Name`, `Bywhom`, `Place`, `Email`, `Address`, `Description`) VALUES
(3, 'Nadia Tabassum', 'Sample Name', 'Dhaka', 'nadia44@gmail.com', '1234,A,Mirpur, Dhaka', 'This is a sample Harassment Complaint.');

-- --------------------------------------------------------

--
-- Table structure for table `Lawyer_Support`
--

CREATE TABLE `Lawyer_Support` (
  `sno` int(7) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Lawyer_Support`
--

INSERT INTO `Lawyer_Support` (`sno`, `Name`, `Email`, `Address`, `Description`) VALUES
(1, 'Md Sakibul Islam', 'sakib.islam@gmail.com', '1233/A,Pollobi,Dhaka', 'This is a sample law support message.'),
(2, 'Md Takibul Islam', 'shorot@gmail.com', '11/1, Mirpur-11, Dhaka', 'This is second lawyer support message.');

-- --------------------------------------------------------

--
-- Table structure for table `MENTAL_SUPPORT`
--

CREATE TABLE `MENTAL_SUPPORT` (
  `sno` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `MENTAL_SUPPORT`
--

INSERT INTO `MENTAL_SUPPORT` (`sno`, `Name`, `Email`, `Address`, `Description`) VALUES
(1, 'Sadia Islam Neer', 'sadia88@gmail.com', '1234,A,Mirpur, Dhaka', 'This is a sample Mental Stress Support Text');

-- --------------------------------------------------------

--
-- Table structure for table `Police_Station`
--

CREATE TABLE `Police_Station` (
  `sno` int(7) NOT NULL,
  `District` varchar(60) NOT NULL,
  `Thana` varchar(60) NOT NULL,
  `Phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Police_Station`
--

INSERT INTO `Police_Station` (`sno`, `District`, `Thana`, `Phone`) VALUES
(1, 'Dhaka', 'Mirpur', '01750074394'),
(2, 'Dhaka', 'Pollobi', '01750074355'),
(3, 'Dhaka', 'Khafrul', '01751174394');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `sno` int(7) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductDes` varchar(355) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `sno` int(7) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`sno`, `Name`, `Username`, `Password`, `Email`, `Role`) VALUES
(1, 'Md Masum Musfique', 'Masum_22', 'masum', 'musfiquemasum@gmail.com', 'Admin'),
(2, 'Md Ridwan Mahmud', 'Ridwan_44', 'ridwan', 'ridwan.mahmud@gmail.com', 'General User'),
(3, 'Sayema Ahmed Mou', 'Mou_53', 'mou', 'sayema.mou@gmail.com', 'Lawyer'),
(5, 'Sadia Islam Neer', 'sadia_88', 'sadia', 'sadia88@gmail.com', 'General User'),
(6, 'Nadia Tabassum', 'Nadia_44', 'nadia', 'nadia44@gmail.com', 'General User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `Harassment_Complaint`
--
ALTER TABLE `Harassment_Complaint`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `Lawyer_Support`
--
ALTER TABLE `Lawyer_Support`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `MENTAL_SUPPORT`
--
ALTER TABLE `MENTAL_SUPPORT`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `Police_Station`
--
ALTER TABLE `Police_Station`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Course`
--
ALTER TABLE `Course`
  MODIFY `sno` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Harassment_Complaint`
--
ALTER TABLE `Harassment_Complaint`
  MODIFY `sno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Lawyer_Support`
--
ALTER TABLE `Lawyer_Support`
  MODIFY `sno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `MENTAL_SUPPORT`
--
ALTER TABLE `MENTAL_SUPPORT`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Police_Station`
--
ALTER TABLE `Police_Station`
  MODIFY `sno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `sno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
