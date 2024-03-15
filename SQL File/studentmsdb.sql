-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2023 at 04:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555558, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2023-10-25 04:36:52'),
(12, 'Teacher1', 'Teacher1', 7738446159, 'nesar2004@gmail.com', 'cd202bd6cd7f8de2ce4ceec357807173', '2023-10-29 08:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `ID` int(5) NOT NULL,
  `ClassName` varchar(50) DEFAULT NULL,
  `Section` varchar(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`ID`, `ClassName`, `Section`, `CreationDate`) VALUES
(1, '10', 'A', '2022-01-13 10:42:14'),
(2, '10', 'B', '2022-01-13 10:42:35'),
(3, '10', 'C', '2022-01-13 10:42:41'),
(4, '11', 'A', '2022-01-13 10:42:47'),
(5, '11', 'B', '2022-01-13 10:42:52'),
(6, '11', 'C', '2022-01-13 10:42:57'),
(7, '11', 'D', '2022-01-13 10:43:04'),
(8, '12', 'A', '2022-01-13 10:43:10'),
(9, '12', 'C', '2022-01-13 10:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbllibrary`
--

CREATE TABLE `tbllibrary` (
  `ID` int(11) NOT NULL,
  `LibraryName` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `UserName` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllibrary`
--

INSERT INTO `tbllibrary` (`ID`, `LibraryName`, `UserName`, `Email`, `Password`) VALUES
(4, 'Nesar', 'nesar2004', 'nesar2004@gmail.com', 'b58472ff07e32cfb5f50be0ba37c890a'),
(5, 'Mukesh', 'Mukesh1', 'mukesh@gmail.com', 'fe9642294f8e3bdacf9de8d8caff83ad');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(2, 'contactus', 'Contact Us', 'B/705 Shree Sainath co.hsg, near Priyalok Park, Friends Colony, Bhandup East, Mumbai, Maharashtra 400042, India\r\n          ', 'nesar2004@gmail.com', 7738446159, '2023-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `StudentClass` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `StuID` varchar(200) DEFAULT NULL,
  `FatherName` mediumtext DEFAULT NULL,
  `MotherName` mediumtext DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `AltenateNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `maths` text DEFAULT NULL,
  `dlco` text DEFAULT NULL,
  `ds` text DEFAULT NULL,
  `dsgt` text DEFAULT NULL,
  `cg` text DEFAULT NULL,
  `java` text DEFAULT NULL,
  `amaths` text DEFAULT NULL,
  `adlco` text DEFAULT NULL,
  `ads` text DEFAULT NULL,
  `adsgt` text DEFAULT NULL,
  `acg` text DEFAULT NULL,
  `ajava` text DEFAULT NULL,
  `nobooks` text DEFAULT NULL,
  `book1` text DEFAULT NULL,
  `book2` text DEFAULT NULL,
  `book3` text DEFAULT NULL,
  `book4` text DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `DateofAdmission` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `StudentName`, `StudentEmail`, `StudentClass`, `Gender`, `DOB`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `maths`, `dlco`, `ds`, `dsgt`, `cg`, `java`, `amaths`, `adlco`, `ads`, `adsgt`, `acg`, `ajava`, `nobooks`, `book1`, `book2`, `book3`, `book4`, `UserName`, `Password`, `Image`, `DateofAdmission`) VALUES
(1, 'jghj', 'jhghjg@gmail.com', '4', 'Male', '2022-01-13', 'ui-99', 'bbmnb', 'mnbmb', 5465454645, 4646546565, 'J-908, Hariram Nagra New Delhi', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'kjhkjh', '202cb962ac59075b964b07152d234b70', 'ebcd036a0db50db993ae98ce380f64191642082944.png', '2022-01-13 14:09:04'),
(2, 'Kishore Sharma', 'kishore@gmail.com', '3', 'Male', '2019-01-05', '10A12345', 'Janak Sharma', 'Indra Devi', 7879879879, 7987979879, 'kjhkhjkhdkshfiludzshfiu\r\nfjedh\r\nk;jk', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'kishore2019', '202cb962ac59075b964b07152d234b70', '5bede9f47102611b4df6241c718af7fc1642314213.jpg', '2022-01-16 06:23:33'),
(7, 'Nesar', 'nesar2004@gmail.com', '1', 'Male', '2004-05-07', '7', 'Dharmaraj', 'Sumegha', 7738446159, 7738446159, 'B-705,SHREE SAINATH APTS,NEAR EASTERN EXPRESS HIGHWAY,', '90', '90', '90', '90', '90', '90', '9/10', '9', '9', '9', '9', '9', '4', 'Nesar Wagannawar0', 'Nesar Wagannawar1', 'Nesar Wagannawar2', 'Nesar Wagannawar3', 'nesar', 'b58472ff07e32cfb5f50be0ba37c890a', '125d90842580f38fc28c5bc366c6e8301698242203jpeg', '2023-10-25 13:56:43'),
(8, 'Bhavika', 'bhavika1234@gmail.com', '3', 'Female', '2004-05-07', '23202018', 'abc', 'abc', 7738446159, 9869725043, 'SHREE SAINATH\r\nNEAR EASTERN EXPRESS HIGHWAY\r\nBHANDUP EAST', '90', '90', '90', '90', '90', NULL, '90', '90', '90', '90', '90', NULL, '2', 'book1', 'book2', 'book3', ' ', 'bhavika', '68a24878cc568766b735c62be5f306ed', 'effb6fa92138d550243f9ebec356ae651698826872.png', '2023-11-01 08:21:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbllibrary`
--
ALTER TABLE `tbllibrary`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbllibrary`
--
ALTER TABLE `tbllibrary`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
