-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2015 at 06:24 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `user_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `admin_password` (`admin_password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`user_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_tbl`
--

CREATE TABLE IF NOT EXISTS `affiliate_tbl` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `year_of_birth` int(4) NOT NULL,
  `month_of_birth` text NOT NULL,
  `day_of_birth` int(2) NOT NULL,
  `nationality` text NOT NULL,
  `code` varchar(4) NOT NULL,
  `phone` int(9) NOT NULL,
  `occupation` text NOT NULL,
  `residential_country` text NOT NULL,
  `district` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `affiliate_tbl`
--

INSERT INTO `affiliate_tbl` (`user_id`, `first_name`, `last_name`, `gender`, `year_of_birth`, `month_of_birth`, `day_of_birth`, `nationality`, `code`, `phone`, `occupation`, `residential_country`, `district`) VALUES
(1, 'Patient', 'Musafiri', 'Male', 1963, 'April', 6, 'American', '+253', 587966413, 'Driver', 'South Sudan', 'Goma'),
(2, 'Papus', 'Merope', 'Female', 1961, 'September', 11, 'American', '+252', 2147483647, 'Lecturer', 'Zambia', 'Kampala'),
(3, 'Papa', 'Maman', 'Male', 1975, 'October', 14, 'Erithrean', '+250', 5789641, 'Student', 'Uganda', 'Kampala');

-- --------------------------------------------------------

--
-- Table structure for table `rent_tbl`
--

CREATE TABLE IF NOT EXISTS `rent_tbl` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `pdy` varchar(15) NOT NULL,
  `pdm` varchar(15) NOT NULL,
  `pdd` varchar(15) NOT NULL,
  `ddy` varchar(15) NOT NULL,
  `ddm` varchar(15) NOT NULL,
  `ddd` varchar(15) NOT NULL,
  `timep` varchar(15) NOT NULL,
  `timed` varchar(15) NOT NULL,
  `drivers` varchar(15) NOT NULL,
  `actual` varchar(15) NOT NULL,
  `pl` varchar(15) NOT NULL,
  `dl` varchar(15) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `rate` varchar(15) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rent_tbl`
--

INSERT INTO `rent_tbl` (`user_id`, `first_name`, `last_name`, `gender`, `pdy`, `pdm`, `pdd`, `ddy`, `ddm`, `ddd`, `timep`, `timed`, `drivers`, `actual`, `pl`, `dl`, `activity`, `rate`) VALUES
(1, 'papa', 'maman', 'Male', '', 'June', '6', '2017', 'May', '5', '06:00 AM', '05:00 AM', '18 - 20', 'Uganda', 'Juba', 'Juba', 'Campainging cer', '10 $ per hour');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE IF NOT EXISTS `users_tbl` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `year_of_birth` int(4) NOT NULL,
  `month_of_birth` text NOT NULL,
  `day_of_birth` int(2) NOT NULL,
  `nationality` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `code` varchar(4) NOT NULL,
  `phone` int(9) NOT NULL,
  `occupation` text NOT NULL,
  `residential_country` text NOT NULL,
  `district` text NOT NULL,
  `question_one` text NOT NULL,
  `answer_one` varchar(50) NOT NULL,
  `question_two` text NOT NULL,
  `answer_two` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `first_name`, `last_name`, `gender`, `year_of_birth`, `month_of_birth`, `day_of_birth`, `nationality`, `email`, `password`, `code`, `phone`, `occupation`, `residential_country`, `district`, `question_one`, `answer_one`, `question_two`, `answer_two`) VALUES
(2, 'janvier', 'safari', 'Male', 1990, 'January', 1, 'Congolese', 'janviersafari@gmail.com', '364ed13a84b3b4c48e3f90bb12adf412', '+256', 758964123, 'Student', 'Uganda', 'Mbarara', 'What is your Best football team', 'Real Madrid', 'What is your Girl friend''s name', 'Clarice'),
(3, 'Jonathan', 'Merope', 'Male', 2002, 'April', 19, 'Congolese', 'jonathan@gmail.com', 'c1f80eddea77f14650a2062dda3eb15c', '+243', 2147483647, 'Teacher', 'D R Congo', 'Bukavu/ South-kivu', 'What is your Favorite Song', 'Mascara', 'What is your Mother''s name', 'Marie louise');
