-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 03:47 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `coursecode` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `totalunits` int(2) NOT NULL,
  `lecunits` int(2) NOT NULL,
  `labunits` int(2) NOT NULL,
  `instructorname` varchar(255) NOT NULL,
  `semester` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `coursecode`, `coursename`, `totalunits`, `lecunits`, `labunits`, `instructorname`, `semester`) VALUES
(1, 'REL101', 'The Revelation of God in the Old Testament', 3, 3, 0, 'Mrs. Balisi', '1'),
(2, 'GEC105', 'Art Appreciation', 3, 3, 0, 'Mr. Fermin', '1'),
(3, 'GEC106', 'Ethics', 3, 3, 0, 'TBA', '1'),
(4, 'GEC107', 'Readings in Philippine History', 3, 3, 0, 'TBA', '1'),
(5, 'GE Ele101', 'Kontekstwalisadong Komunikasyon sa FIlipino', 3, 3, 0, 'Mrs. Laguitao', '1'),
(6, 'PED101', 'Wellness and Fitness', 3, 3, 0, 'Mrs. Bagunu', '1'),
(7, 'ITE101', 'Introduction to Computing', 3, 0, 3, 'Mr. Pugeda', '1'),
(8, 'ITE102', 'Programming 1', 3, 0, 3, 'Mr. Babaran', '1'),
(9, 'REL102', 'Revelation of God in the New Testament', 3, 3, 0, 'Mrs. Balisi', '2'),
(10, 'GEC101', 'Purposive Communication', 3, 3, 0, 'TBA', '2'),
(11, 'GEC102', 'Science, Technology, and Society', 3, 3, 0, 'TBA', '2'),
(12, 'GEC103', 'Mathematics in the Modern World', 3, 3, 0, 'Mrs. Masigan', '2'),
(13, 'GEC104', 'Understanding the Self', 3, 3, 0, 'TBA', '2'),
(14, 'GE Ele102', 'Filipino salbat-Ibang Disiplina', 3, 3, 0, 'Mrs. Cabalza', '2'),
(15, 'ITE103', 'Programming 2', 3, 0, 3, 'Mr. Pugeda', '2'),
(16, 'ITE104', 'Information Management', 3, 0, 3, 'Dr. Kummer', '2'),
(17, 'PED102', 'Movement Enhancement', 2, 2, 0, 'Mr. Fermin', '3'),
(18, 'ITE105', 'Discrete Mathematics', 3, 3, 0, 'Engr. Molina', '3'),
(19, 'NST101', 'National Service Training Program 1', 3, 3, 0, 'TBA', '3');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `semester` varchar(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` varchar(1) NOT NULL,
  `account_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `middlename`, `lastname`, `department`, `program`, `section`, `semester`, `username`, `password`, `account_type`, `account_status`) VALUES
(15, 'Lalisa', '', 'Manoban', 'SITE', 'BSIT', '2A', '3', 'lalisa', '2199b5b83758ca6fac4bb16bf344501b3f75528e', '1', '1'),
(16, 'Park', '', 'Chaeyoung', 'SITE', 'BSIT', '2A', '2', 'rose', '7b7074fca36fc89fb3f1e3c46d74f6ffe2477a09', '0', '1'),
(17, 'Jennie', 'asdfghj', 'Kim', 'SITE', 'BSIT', '2A', '3', 'jennie', 'a17a52fc21ef19510f2a6cb00143780457599dbf', '0', '0'),
(18, 'Jisoo', '', 'Kim', 'SITE', 'BSIT', '2A', '1', 'jisoo', '97d64753584a9b9cea5b3b5d494a452752d0bef3', '0', ''),
(22, 'miguel francisco', '', 'gamiao', 'SITE', 'BSIT', '2A', '1', 'miguel', '75004f149038473757da0be07ef76dd4a9bdbc8d', '1', '1'),
(24, 'Jonas', '', 'Rivera', 'SITE', 'BSIT', '2A', '2', 'jonas', '35a2c6fae61f8077aab61faa4019722abf05093c', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
