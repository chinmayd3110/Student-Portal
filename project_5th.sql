-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 08:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_5th`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(20) NOT NULL,
  `semester` int(2) NOT NULL,
  `department` varchar(40) NOT NULL,
  `section` varchar(2) NOT NULL,
  `teacher_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `semester`, `department`, `section`, `teacher_id`) VALUES
('18CS51', 5, 'CSE', 'A', 'RVITIS001'),
('18CS51', 5, 'ISE', 'A', 'RVITIS001'),
('18CS52', 5, 'ISE', 'A', 'RVITIS002');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `type` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`type`, `userid`, `email`, `password`) VALUES
('student', '1RF19IS001', 'abc@gmail.com', 'zxcvbnm'),
('student', '1RF19IS002', 'xsaz@gmail.com', 'xhsjsksk'),
('student', '1RF19IS003', 'apoiuy@gmail.com', 'zxssaaa'),
('student', '1RF19IS004', 'ajkl@gmail.com', 'zxczxcdss'),
('teacher', 'RVITIS001', 'bnm@gmail.com', 'klopi'),
('teacher', 'RVITIS002', 'abss@gmail.com', 'abcdsq'),
('teacher', 'RVITIS003', 'cvbc@gmail.com', 'zxcvb');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `name` varchar(60) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `department` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`name`, `teacher_id`, `department`) VALUES
('Ram', 'RVITIS001', 'ISE'),
('Sita', 'RVITIS002', 'ISE'),
('Laxman', 'RVITIS003', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`,`department`,`section`,`teacher_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
