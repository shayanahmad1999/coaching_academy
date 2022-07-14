-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 11:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy`
--

CREATE TABLE `academy` (
  `Academies_ID` int(11) NOT NULL,
  `Academy_Name` varchar(45) NOT NULL,
  `Academy_Email` varchar(45) NOT NULL,
  `Academy_Confirm_Email` varchar(45) NOT NULL,
  `Academy_Phone` varchar(45) NOT NULL,
  `Academy_Password` varchar(45) NOT NULL,
  `Academy_Repeat_Password` varchar(45) NOT NULL,
  `Academy_Telephone` varchar(45) NOT NULL,
  `Academy_photo` varchar(200) NOT NULL,
  `Academy_Address` varchar(45) NOT NULL,
  `academyStatus` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academy`
--

INSERT INTO `academy` (`Academies_ID`, `Academy_Name`, `Academy_Email`, `Academy_Confirm_Email`, `Academy_Phone`, `Academy_Password`, `Academy_Repeat_Password`, `Academy_Telephone`, `Academy_photo`, `Academy_Address`, `academyStatus`) VALUES
(1, 'MM Academy', 'mmacademy@gmail.com', 'mmacademy@gmail.com', '03163476290', 'mm123', 'mm123', '091223344', '1 (3).jpeg', 'university road peshawar                     ', 1),
(2, 'Khan Academy', 'khan@gmail.com', 'khan@gmail.com', '03157634879', 'khan123', 'khan123', '091223355', '1 (4).jpeg', 'board bazar', 1),
(3, 'Islamia Acadmey', 'islamia@gmail.com', 'islamia@gmail.com', '03163476290', 'islamia1122', 'islamia1122', '091648756', '1 (9).jpeg', 'university road', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `User_Name` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `User_Name`, `Email`, `Password`, `Photo`, `status`) VALUES
(5, 'Shayan Ahmad', 'shayanahmad235@gmail.com', 'shayan123', '123560378_102549118299958_1148269069890313503_n.jpg', 1),
(6, 'Mian Dawood', 'dawood@gmail.com', 'dawood123', '125839989_2837412156586890_5239733849278686553_n.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_ID` int(11) NOT NULL,
  `Course_Name` varchar(45) NOT NULL,
  `Credit_Hours` varchar(45) NOT NULL,
  `Course_photo` varchar(200) NOT NULL,
  `Course_Fee` varchar(45) NOT NULL,
  `courseStatus` int(2) NOT NULL DEFAULT 1,
  `Academies_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_ID`, `Course_Name`, `Credit_Hours`, `Course_photo`, `Course_Fee`, `courseStatus`, `Academies_ID`) VALUES
(1, 'Web Development', '3+', '1 (2).jpeg', '$85', 1, 1),
(2, 'Web Development', '3+', '1 (2).jpeg', '$85', 1, 2),
(3, 'App Development', '3+', '1 (5).jpeg', '$79', 1, 1),
(4, 'Graphic Designing', '3+', '1 (6).jpeg', '$57', 1, 2),
(5, 'DIT', '3+', '1 (10).jpeg', '$50', 1, 3),
(6, 'Graphic Designing', '3+', '1 (2).jpeg', '$53', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(11) NOT NULL,
  `Payment` varchar(45) NOT NULL DEFAULT 'unpaid',
  `paymentStatus` int(2) NOT NULL DEFAULT 0,
  `Students_ID` int(10) NOT NULL,
  `Course_ID` int(10) NOT NULL,
  `Academies_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_ID`, `Payment`, `paymentStatus`, `Students_ID`, `Course_ID`, `Academies_ID`) VALUES
(9, 'unpaid', 1, 3, 1, 1),
(11, 'unpaid', 1, 5, 3, 1),
(12, 'unpaid', 1, 6, 1, 1),
(13, 'unpaid', 1, 7, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `Students_ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Confirm_Email` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Repeat_Password` varchar(45) NOT NULL,
  `Telephone` varchar(45) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `Academies_ID` int(10) NOT NULL,
  `Course_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`Students_ID`, `Name`, `Email`, `Confirm_Email`, `Phone`, `Password`, `Repeat_Password`, `Telephone`, `Gender`, `photo`, `Address`, `status`, `Academies_ID`, `Course_ID`) VALUES
(3, 'Shayan Ahmad', 'shayanahmad235@gmail.com', 'shayanahmad235@gmail.com', '03168871033', 'shayan123', 'shayan123', '0915476987', 'Male', '1 (18).jpeg', 'Babi qadeem', 1, 1, 1),
(5, 'atiq khan', 'atiq@gmail.com', 'atiq@gmail.com', '03168871033', 'atiq', 'atiq', '0915476987', 'Male', '1 (23).jpeg', 'Choli', 1, 1, 3),
(6, 'Ansar Khan', 'ansar@gmail.com', 'ansar@gmail.com', '03128873452', 'ansar', 'ansar', '0915476987', 'Male', '1 (2).jpeg', 'peshawar', 1, 1, 1),
(7, 'Aliyar', 'aliyar@gmail.com', 'aliyar@gmail.com', '03147762498', 'ali', 'ali', '0915476987', 'Male', '1 (31).jpeg', 'Igancy', 1, 2, 4),
(8, 'Mian Dawood', 'dawood@gmail.com', 'dawood@gmail.com', 'shayanahmad235@gmail.com', 'abc123', 'abc123', '0315500514', 'Male', 'img.jpg', 'cvbnm,', 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Teacher_ID` int(11) NOT NULL,
  `Teacher_Name` varchar(45) NOT NULL,
  `Teacher_Email` varchar(45) NOT NULL,
  `Teacher_Confirm_Email` varchar(45) NOT NULL,
  `Teacher_Phone` varchar(45) NOT NULL,
  `Teacher_Password` varchar(45) NOT NULL,
  `Teacher_Repeat_Password` varchar(45) NOT NULL,
  `Teacher_Telephone` varchar(45) NOT NULL,
  `Teacher_Gender` varchar(45) NOT NULL,
  `Teacher_Photo` varchar(200) NOT NULL,
  `Teacher_Address` varchar(45) NOT NULL,
  `techerStatus` int(2) NOT NULL DEFAULT 1,
  `Course_ID` int(10) NOT NULL,
  `Academies_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Teacher_ID`, `Teacher_Name`, `Teacher_Email`, `Teacher_Confirm_Email`, `Teacher_Phone`, `Teacher_Password`, `Teacher_Repeat_Password`, `Teacher_Telephone`, `Teacher_Gender`, `Teacher_Photo`, `Teacher_Address`, `techerStatus`, `Course_ID`, `Academies_ID`) VALUES
(1, 'Dawood Khan', 'dawood@gmail.com', 'dawood@gmail.com', '03128873452', 'dawood123', 'dawood123', '091223388', 'Male', 'IMG_20210131_222429.JPG', 'Shabqaddar', 1, 1, 1),
(2, 'Majeed Khan', 'majeed@gmail.com', 'majeed@gmail.com', '03146523879', 'majeed123', 'majeed123', '091223376', 'Male', 'IMG_20210131_222234.JPG', 'Agency', 1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `File_ID` int(11) NOT NULL,
  `File` varchar(200) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`File_ID`, `File`, `Date`) VALUES
(1, 'assignment1.pdf', '2021-12-15 09:34:21'),
(6, '9th--.pdf', '2021-12-15 09:38:28'),
(7, 'challan.pdf', '2022-01-11 17:49:01'),
(8, 'challan.pdf', '2022-01-11 17:51:40'),
(13, '9th--.pdf', '2022-01-11 17:52:26'),
(14, 'challan.pdf', '2022-01-11 17:57:34'),
(15, 'images.png', '2022-07-06 08:20:08'),
(16, '( Non verbal )Dogars unique pma long course-1-1-1.pdf', '2022-07-06 08:23:40'),
(17, '02computing.pdf', '2022-07-06 08:30:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy`
--
ALTER TABLE `academy`
  ADD PRIMARY KEY (`Academies_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `FK_payment_1` (`Students_ID`),
  ADD KEY `FK_payment_2` (`Course_ID`),
  ADD KEY `FK_payment_3` (`Academies_ID`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`Students_ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Teacher_ID`),
  ADD KEY `FK_teachers_1` (`Course_ID`),
  ADD KEY `FK_teachers_2` (`Academies_ID`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`File_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academy`
--
ALTER TABLE `academy`
  MODIFY `Academies_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `City_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Course_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_record`
--
ALTER TABLE `student_record`
  MODIFY `Students_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `Teacher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `File_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_payment_1` FOREIGN KEY (`Students_ID`) REFERENCES `student_record` (`Students_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_payment_2` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`Course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_payment_3` FOREIGN KEY (`Academies_ID`) REFERENCES `academy` (`Academies_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `FK_teachers_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`Course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_teachers_2` FOREIGN KEY (`Academies_ID`) REFERENCES `academy` (`Academies_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
