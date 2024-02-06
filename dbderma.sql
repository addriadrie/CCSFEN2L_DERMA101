-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 04:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbderma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblappt`
--

CREATE TABLE `tblappt` (
  `apptID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  `serviceID` varchar(11) NOT NULL,
  `apptDate` date NOT NULL,
  `apptTime` time NOT NULL,
  `statusID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `categID` int(11) NOT NULL,
  `categName` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`categID`, `categName`) VALUES
(1, 'Laser'),
(2, 'Hair Removal'),
(3, 'Facial Treatments'),
(4, 'Body Treatments'),
(5, 'Waxing Treatments');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `patientID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `sex` char(1) NOT NULL,
  `bloodType` varchar(2) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productQty` int(11) NOT NULL,
  `productPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `serviceID` varchar(11) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceFee` varchar(20) NOT NULL,
  `categID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblservice`
--

INSERT INTO `tblservice` (`serviceID`, `serviceName`, `serviceFee`, `categID`) VALUES
('1-01', 'CO² Laser (Fraxel)', '₱5000', 1),
('1-02', 'HiFu Lift', '₱5000', 1),
('1-03', 'Carbon Laser', '₱2500', 1),
('1-04', 'Tattoo Removal', 'Starts at ₱3000', 1),
('1-05', 'RF Microneeding', 'Starts at ₱5000', 1),
('1-06', 'Laser Pigmentation', 'Starts at ₱3000', 1),
('1-07', 'Laser Pinkish Lip', '₱1500', 1),
('1-08', 'Laser Toning/Picolight', '₱5000', 1),
('1-09', 'Whitening Elbow/Inguinal', 'Starts at ₱3000', 1),
('1-10', 'Whitening Laser (Underarm)', '₱3000', 1),
('2-01', 'Arms', '₱5000', 2),
('2-02', 'Beard', '₱2500', 2),
('2-03', 'Bikini Area', '₱4000', 2),
('2-04', 'Chin', '₱1000', 2),
('2-05', 'Legs', '₱5000', 2),
('2-06', 'Underarm', '₱2500', 2),
('2-07', 'Upperlip', '₱1000', 2),
('3-01', 'Deluxe Facial', '₱500', 3),
('3-02', 'Diamond Peel', '₱900', 3),
('3-03', 'Oxygen Facial', '₱1000', 3),
('3-04', 'Hydrafacial', '₱1500', 3),
('3-05', 'Vampire Facial', '₱8000', 3),
('3-06', 'Mermaid Facial', '₱1600', 3),
('3-07', 'Celebrity Facial', '₱1800', 3),
('3-08', 'Glass Skin Facial', '₱2000', 3),
('3-09', 'V Metal Skin', '₱2500', 3),
('3-10', 'Perfect White Facial', '₱1800', 3),
('4-01', 'Diamond Peel (Back/Arms)', '₱2000', 4),
('4-02', 'PWE (Lower Legs)', '₱5000', 4),
('4-03', 'Body Scrub', '₱1500', 4),
('4-04', 'TCL Peel Underarm', '₱1500', 4),
('4-05', 'Perfect White Underarm Bleach', '₱500', 4),
('5-01', 'Upper Lip', 'Starts at ₱300', 5),
('5-02', 'Underarm', 'Starts at ₱500', 5),
('5-03', 'Arms', 'Starts at ₱800', 5),
('5-04', 'Legs', 'Starts at ₱800', 5),
('5-05', 'Brazillian', 'Starts at ₱1000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `staffID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `sex` varchar(1) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus`
--

CREATE TABLE `tblstatus` (
  `statusID` int(11) NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblappt`
--
ALTER TABLE `tblappt`
  ADD PRIMARY KEY (`apptID`),
  ADD KEY `fk_patientID` (`patientID`),
  ADD KEY `fk_serviceID` (`serviceID`),
  ADD KEY `fk_statusID` (`statusID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`categID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`patientID`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD PRIMARY KEY (`serviceID`),
  ADD KEY `fk_categID` (`categID`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `tblstatus`
--
ALTER TABLE `tblstatus`
  ADD PRIMARY KEY (`statusID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `categID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblstatus`
--
ALTER TABLE `tblstatus`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblappt`
--
ALTER TABLE `tblappt`
  ADD CONSTRAINT `fk_patientID` FOREIGN KEY (`patientID`) REFERENCES `tblpatient` (`patientID`),
  ADD CONSTRAINT `fk_serviceID` FOREIGN KEY (`serviceID`) REFERENCES `tblservice` (`serviceID`),
  ADD CONSTRAINT `fk_statusID` FOREIGN KEY (`statusID`) REFERENCES `tblstatus` (`statusID`),
  ADD CONSTRAINT `tblappt_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `tblpatient` (`patientID`);

--
-- Constraints for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD CONSTRAINT `fk_categID` FOREIGN KEY (`categID`) REFERENCES `tblcategory` (`categID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
