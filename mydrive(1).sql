-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 02:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `Assessment_ID` int(255) NOT NULL,
  `Assessment_No` int(255) NOT NULL,
  `Assessment_Title` varchar(25) NOT NULL,
  `Assessment_Type` varchar(25) NOT NULL,
  `Content` mediumblob NOT NULL,
  `Upload_By` varchar(25) NOT NULL,
  `Upload_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Archived` tinyint(1) NOT NULL DEFAULT 0,
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `Assign_ID` int(255) NOT NULL,
  `Assign_No` int(255) NOT NULL,
  `Assign_Title` varchar(25) NOT NULL,
  `Assign_Type` varchar(25) NOT NULL,
  `Content` mediumblob NOT NULL,
  `Upload_By` varchar(25) NOT NULL,
  `Upload_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Archived` tinyint(1) NOT NULL DEFAULT 0,
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `Exam_ID` int(255) NOT NULL,
  `Exam_No` int(255) NOT NULL,
  `Exam_Title` varchar(25) NOT NULL,
  `Exam_Type` varchar(25) NOT NULL,
  `Content` mediumblob NOT NULL,
  `Upload_By` varchar(25) NOT NULL,
  `Upload_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Archived` tinyint(1) NOT NULL DEFAULT 0,
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `User_ID` int(255) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`User_ID`, `Username`, `Password`, `Active`) VALUES
(1, 'user', 'useraccount', 1),
(2, 'admin', 'administrator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Project_ID` int(255) NOT NULL,
  `Project_No` int(255) NOT NULL,
  `Project_Title` varchar(25) NOT NULL,
  `Project_Type` varchar(25) NOT NULL,
  `Content` mediumblob NOT NULL,
  `Upload_By` varchar(25) NOT NULL,
  `Upload_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Archived` tinyint(1) NOT NULL DEFAULT 0,
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `Quiz_ID` int(255) NOT NULL,
  `Quiz_No` int(255) NOT NULL,
  `Quiz_Title` varchar(25) NOT NULL,
  `Quiz_Type` varchar(25) NOT NULL,
  `Content` mediumblob NOT NULL,
  `Upload_By` varchar(25) NOT NULL,
  `Upload_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Archived` tinyint(1) NOT NULL DEFAULT 0,
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`Assessment_ID`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`Assign_ID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`Exam_ID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project_ID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`Quiz_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `Assessment_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `Assign_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `Exam_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `User_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Project_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `Quiz_ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
