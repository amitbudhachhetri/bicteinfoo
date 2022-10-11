-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2022 at 04:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bicteinfoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'abc', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `model_question`
--

CREATE TABLE `model_question` (
  `id` int(50) NOT NULL,
  `sub_id` int(50) NOT NULL,
  `sem_id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `xtra` int(20) DEFAULT NULL,
  `xtras` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model_question`
--

INSERT INTO `model_question` (`id`, `sub_id`, `sem_id`, `title`, `year`, `file`, `xtra`, `xtras`) VALUES
(12, 1, 2, 'database relationships', '2020', 'abc_6f9818c8098ad0b1d01e64a7deaba3a8.pdf', NULL, NULL),
(13, 3, 3, 'computer', '2021', 'abc_3b4e3c902983ef78b7269291840eba30.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(50) NOT NULL,
  `sub_id` int(50) NOT NULL,
  `sem_id` int(50) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `sub_id`, `sem_id`, `title`, `year`, `url`) VALUES
(12, 1, 3, NULL, NULL, 'http://www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(50) NOT NULL,
  `sub_id` int(50) NOT NULL,
  `sem_id` int(50) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(20) NOT NULL,
  `sub_id` int(50) NOT NULL,
  `sem_id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `deadline` varchar(50) DEFAULT NULL,
  `file` varchar(50) NOT NULL,
  `xtra` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `sub_id`, `sem_id`, `title`, `deadline`, `file`, `xtra`) VALUES
(2, 3, 2, 'comp', '2020', 'abc_8f3476d63b139124b9f257b768d8296c.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(20) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `xtra` int(30) DEFAULT NULL,
  `xtras` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `s_name`, `xtra`, `xtras`) VALUES
(2, 'SEM I', NULL, NULL),
(3, 'SEM II', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sem` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `sem`, `email`) VALUES
(1, 'abc', 'xyz', 'abc@gmail.com'),
(2, 'xyz', '123abc', '123abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(50) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_code` varchar(50) NOT NULL,
  `s_c_hour` int(30) NOT NULL,
  `xtra` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `s_name`, `s_code`, `s_c_hour`, `xtra`) VALUES
(1, 'Database', 'CSC001', 12, NULL),
(3, 'computer', '123', 120, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_code` varchar(50) NOT NULL,
  `s_file` varchar(50) NOT NULL,
  `xtra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `s_name`, `s_code`, `s_file`, `xtra`) VALUES
(1, 'abc', 'csc1', 'abc_2a2fa59c1c34d52ce2cf55e5a4f18f50.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `email`, `name`, `address`, `username`, `password`) VALUES
(4, 'anita@gmail.com', 'anita', 'kathmandu', 'anita', 'anita'),
(6, 'kathmandu', 'sanzu', 'sanzu@gmail.com', 'sanzu', 'sanzus'),
(7, 'kathmandu', 'sanzu', 'sanzu@gmail.com', 'sanzu', 'sanzus'),
(8, 'abc@gmail.com', 'abc', 'pkr', 'abc', 'abc123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_question`
--
ALTER TABLE `model_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `sem_id` (`sem_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `sem_id` (`sem_id`);

--
-- Indexes for table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `sem_id` (`sem_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `sem_id` (`sem_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `model_question`
--
ALTER TABLE `model_question`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_question`
--
ALTER TABLE `model_question`
  ADD CONSTRAINT `model_question_sem_id` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `model_question_sub_id` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_sem_id` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notes_sub_id` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presentation`
--
ALTER TABLE `presentation`
  ADD CONSTRAINT `presentation_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `presentation_ibfk_2` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
