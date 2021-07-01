-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 07:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `password`, `eid`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(6, 'jhjkhjkj', 'manu@gmail.com', 'jhkkkj', 'gfghghhjj'),
(7, 'Rehan', 'rehan@gmail.com', 'hlo', 'hey'),
(8, '', '', '7', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(13, 'B.tech'),
(15, 'BCA'),
(16, 'MCA'),
(22, 'BCS');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(11) NOT NULL,
  `semester_name` varchar(20) DEFAULT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `semester_name`, `department_id`) VALUES
(2, '2nd', 13),
(3, '3rd', 13),
(4, '4th', 13),
(7, '1st', 15),
(8, '2nd', 15),
(9, '3rd', 15),
(10, '4th', 15),
(11, '1st', 16),
(15, 'abc', 13),
(16, '1st', 22);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `pic` varchar(255) NOT NULL,
  `gender` enum('f','m') NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `name`, `eid`, `password`, `mob`, `address`, `department_id`, `sem_id`, `dob`, `pic`, `gender`, `status`, `date`) VALUES
(1, 'Manu', 'manu@gmail.com', '123', 9891142743, 'Punjab', 13, 2, '1995-07-22', 'salary.png', '', 'ON', '2016-05-22'),
(2, 'Neeru', 'neeru@gmail.com', 'neeru', 9876541234, 'Noida', 13, 2, '1994-12-29', '20151118_105435.jpg', 'f', 'ON', '2016-05-22'),
(3, 'Nandni', 'nandni@gmail.com', 'nandni', 7696303090, 'Punjab', 13, 3, '1995-07-11', 'DSC_0015_1.JPG', 'f', 'OFF', '2016-05-22'),
(4, 'Japleen', 'japleen@gmail.com', 'japleen', 3265897896, 'Noida', 13, 4, '1999-12-06', '20151118_105529.jpg', 'f', 'OFF', '2016-05-22'),
(5, 'Ria', 'ria@gmail.com', 'ria', 9874563214, 'jalandhar', 14, 6, '1997-12-02', '20151118_000454.jpg', 'f', 'OFF', '2016-05-22'),
(6, 'Neha', 'neha@gmail.com', 'neha', 7894561234, 'Ludhiana', 15, 7, '1994-12-05', 'DSC_0033.JPG', 'f', 'OFF', '2016-05-22'),
(7, 'Parul', 'parul@gmail.com', 'parul', 9874563131, 'Gurgaon', 15, 8, '1993-12-01', 'DSC_0042.JPG', 'f', 'ON', '2016-05-22'),
(9, 'Rakesh', 'rakesh@gmail.com', 'rakesh', 9874566544, 'Shimla', 15, 9, '0091-12-02', 'DSC_0048.JPG', 'm', 'OFF', '2016-05-22'),
(10, 'Myra', 'myra@gmail.com', 'myra', 9874123654, 'Punjab', 15, 10, '1995-11-23', 'DSC_0061.JPG', 'f', 'OFF', '2016-05-22'),
(11, 'Dazy', 'dazy@gmail.com', 'dazy', 7894563214, 'Banglore', 16, 11, '1994-02-14', 'IMG_20160117_140446.jpg', 'f', 'OFF', '2016-05-22'),
(12, 'Aman', 'aman@gmail.com', 'aman', 7894563258, 'Mansa', 16, 12, '1993-05-23', 'IMG_20160214_104030-1.jpg', 'f', 'ON', '2016-05-22'),
(14, 'ty', 'ketangorule29@gmail.com', '123', 3244, 'Kedar complex near MR highschool gadhinglaj', 15, 7, '2021-05-12', 'salary.png', 'm', 'ON', '2021-05-27'),
(15, 'Amit', 'amit@gmail.com', '1234', 234356777, 'Kedar complex near MR highschool gadhinglaj', 22, 16, '2021-05-28', 'salary.png', 'm', 'ON', '2021-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(20) DEFAULT NULL,
  `sem_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `sem_id`, `department_id`) VALUES
(3, 'Advance PHP', 3, 13),
(4, 'Cake PHP', 4, 13),
(6, 'Java', 7, 15),
(7, 'Advance Java', 8, 15),
(8, 'Core Java', 9, 15),
(9, 'OOPS', 10, 15),
(10, 'Wordpress', 11, 16),
(16, 'mysql', 2, 13),
(17, 'sales', 11, 16),
(18, 'dot net', 16, 22);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `eid`, `password`, `mob`, `address`, `department_id`, `sem_id`, `status`, `date`) VALUES
(18, 'Rahul', 'rahul@gmail.com', '123', 6547893214, 'Gurgoan', 13, 4, 'OFF', '2016-05-22'),
(19, 'Ravi', 'ravi@yahoo.com', 'ravi', 9874123654, 'Shimla', 13, 4, 'ON', '2016-05-22'),
(20, 'Ali', 'ali@gmail.com', 'ali', 7456981236, 'Madras', 14, 6, 'OFF', '2016-05-22'),
(21, 'Sanjay', 'sanjay@gmail.com', 'sanjay', 9874123658, 'Mohali', 15, 7, 'OFF', '2016-05-22'),
(22, 'Himanshu', 'himanshu@yahoo.com', 'himanshu', 6547893214, 'Noida', 15, 8, 'ON', '2016-05-22'),
(23, 'Deepak', 'deepak@gmail.com', 'deepak', 3214569878, 'Manali', 15, 9, 'ON', '2016-05-22'),
(24, 'Jassi', 'jassi@gmail.com', 'jassi', 9876532145, 'Punjab', 15, 10, 'ON', '2016-05-22'),
(25, 'Shavir', 'shavir@gmail.com', 'shavir', 6541239874, 'Phagwara', 16, 7, 'OFF', '2016-05-22'),
(28, 'Sumit', 'sumit@gmail.com', '123', 12323454, 'Kedar complex near MR highschool gadhinglaj', 22, 16, 'ON', '2021-05-28'),
(29, 'Rajesh', 'rajesh@gmail.com', '123', 9988776655, 'Kedar complex near MR highschool gadhinglaj', 22, 16, 'ON', '2021-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `timeschedule`
--

CREATE TABLE `timeschedule` (
  `timeschedule_id` int(11) NOT NULL,
  `department_name` varchar(20) DEFAULT NULL,
  `semester_name` varchar(20) DEFAULT NULL,
  `subject_name` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `date` varchar(40) DEFAULT NULL,
  `teacher_id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeschedule`
--

INSERT INTO `timeschedule` (`timeschedule_id`, `department_name`, `semester_name`, `subject_name`, `time`, `date`, `teacher_id`, `day`) VALUES
(14, '13', '2', '16', '00:58', '2021-05-28', 18, ''),
(15, '13', '2', '16', '06:59', '2021-06-04', 18, ''),
(16, '13', '2', '16', '05:14', '2021-05-25', 18, ''),
(17, '13', '2', '16', '01:12', '2021-06-05', 18, ''),
(18, '13', '2', '16', '20:14', '2021-05-18', 18, ''),
(25, '13', '2', '16', '20:35', '2021-05-28', 18, ''),
(26, '22', '16', '16', '20:48', '2021-05-29', 28, ''),
(27, '16', '11', '10', '10:49', '2021-06-12', 19, 'Saturday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `eid` (`eid`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);
ALTER TABLE `department` ADD FULLTEXT KEY `course_name` (`department_name`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`),
  ADD KEY `course_id` (`department_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`),
  ADD UNIQUE KEY `eid` (`eid`);
ALTER TABLE `student` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `course_id` (`department_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `eid` (`eid`);
ALTER TABLE `teacher` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `timeschedule`
--
ALTER TABLE `timeschedule`
  ADD PRIMARY KEY (`timeschedule_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `timeschedule`
--
ALTER TABLE `timeschedule`
  MODIFY `timeschedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `semester_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE;

--
-- Constraints for table `timeschedule`
--
ALTER TABLE `timeschedule`
  ADD CONSTRAINT `timeschedule_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
