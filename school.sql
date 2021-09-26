-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2021 at 02:45 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoi`
--

DROP TABLE IF EXISTS `hoi`;
CREATE TABLE IF NOT EXISTS `hoi` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20211002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoi`
--

INSERT INTO `hoi` (`h_id`, `name`, `pass`) VALUES
(20211001, 'Anirban Dash', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

DROP TABLE IF EXISTS `notice_board`;
CREATE TABLE IF NOT EXISTS `notice_board` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`n_id`, `subject`, `content`, `time`, `status`) VALUES
(9, 'Bharat Band', 'Bharat band on Monday. So all classes will be suspended for that day. Regular classes are started from Tuesday onwards.', '2021-09-25 04:57:18.528727', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roll` int(10) NOT NULL,
  `father` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `cast` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `class_id` int(10) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20213004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `name`, `roll`, `father`, `address`, `dob`, `cast`, `religion`, `aadhar`, `mother`, `class_id`, `pass`) VALUES
(20213001, 'Arkya Jyoti', 1, 'Someone', 'Jhargram', '2016-01-01', 'General', 'Hindu', '123456789012', 'Someone', 3, 'pass'),
(20213002, 'Hangtamala Saren', 1, 'Koka saren', 'Somewehere in earth', '2013-01-30', 'ST', 'Hindu', '987656780987', 'Someone Saren', 1, 'password'),
(20213003, 'Debnath Mishra', 2, 'Somnath Mishra', 'Berhampore', '2016-04-15', 'General', 'Hindu', '896545342312', 'Debolina Mishra', 1, 'password');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2021010 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_id`, `name`) VALUES
(2021001, 'Bengali'),
(2021002, 'English'),
(2021003, 'Math'),
(2021004, 'Physical Science'),
(2021005, 'Life Science'),
(2021006, 'Hostory'),
(2021007, 'Geography'),
(2021008, 'Physical Education');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `joining` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20212014 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `name`, `age`, `sub_id`, `sub_name`, `mobile_no`, `email`, `joining`, `pass`) VALUES
(20212004, 'Hari ram Sarkar', 42, 2021001, 'Bengali', '8976549754', 'harihar@xyz.com', '2021-09-24 16:32:43', 'pass'),
(20212005, 'Salman Khan', 34, 2021004, 'Physical Science', '9876345676', 'salluvai@xyz.com', '2021-09-24 16:53:46', 'password'),
(20212006, 'Bulbul Mandi', 34, 2021006, 'Hostory', '9012564378', 'bulbul@xyz.com', '2021-09-24 16:54:48', 'password'),
(20212007, 'Akshay Pal', 34, 2021001, 'Bengali', '7894531256', 'akshay@xyz.com', '2021-09-24 16:55:26', 'password'),
(20212008, 'Swapan Das', 34, 2021002, 'English', '9056783412', 'swapan@xyz.com', '2021-09-24 16:56:01', 'password'),
(20212009, 'Nara Mahata', 26, 2021005, 'Life Science', '8976543245', 'nara@xyz.com', '2021-09-24 16:56:49', 'password'),
(20212010, 'Sandy Mallick', 33, 2021007, 'Geography', '9067451324', 'sandy@xyz.com', '2021-09-24 16:57:58', 'password'),
(20212012, 'Anirban Biswas', 34, 2021008, 'Physical Education', '9067451234', 'anirbanbiswas@xyz.com', '2021-09-26 10:39:54', 'password'),
(20212013, 'Asish Roy', 24, 2021006, 'Hostory', '2039430283', 'ashis@xyz.com', '2021-09-26 18:45:31', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

DROP TABLE IF EXISTS `time_table`;
CREATE TABLE IF NOT EXISTS `time_table` (
  `tt_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `period` int(10) NOT NULL,
  `day` varchar(255) NOT NULL,
  `class_id` int(10) NOT NULL,
  PRIMARY KEY (`tt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`tt_id`, `sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES
(104, 'English', 'Swapan Das', 2, 'Saturday', 1),
(103, 'Bengali', 'Swapan Das', 1, 'Saturday', 1),
(102, 'Physical Science', 'Salman Khan', 3, 'Friday', 1),
(101, 'Math', 'Harihar Sarkar', 2, 'Friday', 1),
(100, 'Bengali', 'Swapan Das', 1, 'Friday', 1),
(99, 'Math', 'Harihar Sarkar', 3, 'Thursday', 1),
(98, 'Life Science', 'Nara Mahata', 2, 'Thursday', 1),
(97, 'Bengali', 'Swapan Das', 1, 'Thursday', 1),
(96, 'Geography', 'Sandy Mallick', 3, 'Wednesday', 1),
(95, 'English', 'Swapan Das', 2, 'Wednesday', 1),
(94, 'Bengali', 'Swapan Das', 1, 'Wednesday', 1),
(93, 'Hostory', 'Bulbul Mandi', 3, 'Tuesday', 1),
(90, 'Math', 'Harihar Sarkar', 3, 'Monday', 1),
(91, 'Bengali', 'Swapan Das', 1, 'Tuesday', 1),
(92, 'Physical Science', 'Salman Khan', 2, 'Tuesday', 1),
(89, 'English', 'Swapan Das', 2, 'Monday', 1),
(88, 'Bengali', 'Swapan Das', 1, 'Monday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `update_req`
--

DROP TABLE IF EXISTS `update_req`;
CREATE TABLE IF NOT EXISTS `update_req` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_req`
--

INSERT INTO `update_req` (`u_id`, `a_id`, `text`, `status`) VALUES
(13, 20212004, 'Change my name to Harsh', 'Success'),
(14, 20213001, 'Change my caste to general\r\n', 'Success'),
(15, 20212004, 'Change my name Hari ram', 'Success'),
(16, 20212004, 'Change my religion to hindu', 'Pending');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
