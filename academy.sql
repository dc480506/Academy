-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2020 at 11:17 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `emailid` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`emailid`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `type`) VALUES
(1, 'Computer Science', 'Masters');

-- --------------------------------------------------------

--
-- Table structure for table `course_content`
--

CREATE TABLE `course_content` (
  `cid` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `videono` int(11) NOT NULL,
  `videoname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_content`
--



-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `emailid` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `role` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`emailid`, `password`, `role`) VALUES
('admin@gmail.com', 'admin', 'adm'),
('faculty@gmail.com', '12345678', 'fac'),
('rutvik8422@gmail.com', '12345678', 'stu');

-- --------------------------------------------------------

--
-- Table structure for table `student_admin_course`
--

CREATE TABLE `student_admin_course` (
  `emailid` varchar(30) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` int(11) DEFAULT 0,
  `isaccepted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_admin_course`
--

INSERT INTO `student_admin_course` (`emailid`, `cid`, `status`, `isaccepted`) VALUES
('rutvik8422@gmail.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `emailid` varchar(30) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`emailid`, `cid`) VALUES
('rutvik8422@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course`
--

CREATE TABLE `teacher_course` (
  `emailid` varchar(30) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_course`
--

INSERT INTO `teacher_course` (`emailid`, `cid`) VALUES
('faculty@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `emailid`) VALUES
('Rutvik', 'Belapurkar', 'rutvik8422@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`cid`,`month`,`week`,`day`,`videono`) USING BTREE;

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `student_admin_course`
--
ALTER TABLE `student_admin_course`
  ADD PRIMARY KEY (`emailid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`emailid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `teacher_course`
--
ALTER TABLE `teacher_course`
  ADD PRIMARY KEY (`emailid`,`cid`),
  ADD KEY `teacher_course_course` (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`emailid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_content`
--
ALTER TABLE `course_content`
  ADD CONSTRAINT `course_content_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `courses` (`cid`);

--
-- Constraints for table `student_admin_course`
--
ALTER TABLE `student_admin_course`
  ADD CONSTRAINT `student_admin_course_ibfk_1` FOREIGN KEY (`emailid`) REFERENCES `users` (`emailid`),
  ADD CONSTRAINT `student_admin_course_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `courses` (`cid`);

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`emailid`) REFERENCES `users` (`emailid`),
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `courses` (`cid`);

--
-- Constraints for table `teacher_course`
--
ALTER TABLE `teacher_course`
  ADD CONSTRAINT `teacher_course_course` FOREIGN KEY (`cid`) REFERENCES `courses` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_role` FOREIGN KEY (`emailid`) REFERENCES `role` (`emailid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_role` FOREIGN KEY (`emailid`) REFERENCES `role` (`emailid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
