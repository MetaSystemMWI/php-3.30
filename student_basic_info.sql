-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 12:27 PM
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
-- Database: `students_information_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_basic_info`
--

CREATE TABLE `student_basic_info` (
  `S.No` int(11) NOT NULL,
  `Std_Name` varchar(50) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Discipline` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_basic_info`
--

INSERT INTO `student_basic_info` (`S.No`, `Std_Name`, `Father_Name`, `Discipline`) VALUES
(1, 'Ali', 'Ahmed', 'MEdical'),
(3, 'Ahmed', 'Asif', 'Pre_medical'),
(4, 'Tamoor', 'Sher Afzal', 'Pre_Engg'),
(5, 'Ahsan ', 'Ahmed ', ''),
(6, 'Ali', 'Arif ud din ', 'Programming'),
(7, 'ahmed khan ', 'fateh khan ', 'FA-IT'),
(8, 'ahmed khan ', 'fateh khan ', 'FA-IT'),
(9, 'Asif', 'ahmed', 'ADP English'),
(10, 'Asif', 'ahmed', 'ADP English'),
(11, 'Asif', 'ahmed', 'ADP English'),
(12, 'Asif', 'ahmed', 'ADP English'),
(13, 'Asif', 'ahmed', 'ADP English'),
(14, 'Faisal ', 'Ahmed kHan ', 'Medical'),
(15, 'Faisal ', 'Ahmed kHan ', 'Medical'),
(16, 'ali khan ', 'ahmed khan ', 'BSCS'),
(17, 'ali khan ', 'ahmed khan ', 'BSCS'),
(18, 'ali khan ', 'ahmed khan ', 'BSCS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_basic_info`
--
ALTER TABLE `student_basic_info`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_basic_info`
--
ALTER TABLE `student_basic_info`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
