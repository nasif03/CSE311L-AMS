-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 03:42 PM
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
-- Database: `cse311l_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `Crop_ID` int(11) NOT NULL,
  `Farmer_ID` int(11) NOT NULL,
  `CropName` varchar(255) DEFAULT NULL,
  `Weather` varchar(31) DEFAULT NULL,
  `SeedAmount` int(11) NOT NULL,
  `YieldEstimate` int(11) DEFAULT NULL,
  `PlantingDate` date DEFAULT NULL,
  `HarvestDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`Crop_ID`, `Farmer_ID`, `CropName`, `Weather`, `SeedAmount`, `YieldEstimate`, `PlantingDate`, `HarvestDate`) VALUES
(8, 1, 'Wheat', 'Any', 2, 4, '2024-12-04', '2030-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `Farmer_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`Farmer_ID`, `Name`, `DOB`, `Password`, `Address`, `Phone_no`) VALUES
(1, 'Nasif', '2003-12-04', '$2y$10$nnKVRuVJsDJ9aRdX.LY8o.R36NjFBoM3lV7TVZCXFz/RGK4tpX8Bi', 'Home', '01700000000');

-- --------------------------------------------------------

--
-- Table structure for table `livestock`
--

CREATE TABLE `livestock` (
  `Livestock_ID` int(11) NOT NULL,
  `Farmer_ID` int(11) NOT NULL,
  `AnimalType` varchar(31) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(7) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `Health` varchar(255) DEFAULT NULL,
  `Produces` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livestock`
--

INSERT INTO `livestock` (`Livestock_ID`, `Farmer_ID`, `AnimalType`, `Age`, `Gender`, `Weight`, `Health`, `Produces`) VALUES
(9, 1, 'Cow', 3, 'Male', 120, 'g', '');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace`
--

CREATE TABLE `marketplace` (
  `ItemName` varchar(255) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vetvisit`
--

CREATE TABLE `vetvisit` (
  `Visit_ID` int(11) NOT NULL,
  `Livestock_ID` int(11) NOT NULL,
  `VisitDate` date NOT NULL,
  `Diagnosis` varchar(255) NOT NULL,
  `VetName` varchar(255) NOT NULL,
  `FollowUpDate` date DEFAULT NULL,
  `Treatment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`Crop_ID`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`Farmer_ID`);

--
-- Indexes for table `livestock`
--
ALTER TABLE `livestock`
  ADD PRIMARY KEY (`Livestock_ID`);

--
-- Indexes for table `marketplace`
--
ALTER TABLE `marketplace`
  ADD PRIMARY KEY (`ItemName`);

--
-- Indexes for table `vetvisit`
--
ALTER TABLE `vetvisit`
  ADD PRIMARY KEY (`Visit_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `Crop_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `Farmer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `livestock`
--
ALTER TABLE `livestock`
  MODIFY `Livestock_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
