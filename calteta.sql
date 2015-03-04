-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2015 at 12:59 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `calteta`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `ans_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `answer` varchar(500) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `ans_control` int(11) NOT NULL,
  `answered_by` bigint(20) NOT NULL,
  `ques_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` bigint(20) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `attachment_url` varchar(200) NOT NULL,
  `question_control` int(11) NOT NULL,
  `asked_by` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions_status`
--

CREATE TABLE IF NOT EXISTS `questions_status` (
  `qid` bigint(20) NOT NULL,
  `current_status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `sid` bigint(20) NOT NULL,
  `status` varchar(200) NOT NULL,
  `status_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `user_id` bigint(20) NOT NULL,
  `level_of_study` varchar(30) NOT NULL,
  `institute` varchar(30) NOT NULL,
  `year_of_study` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `triggers`
--

CREATE TABLE IF NOT EXISTS `triggers` (
  `tid` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) NOT NULL,
  `trigger_content` varchar(500) NOT NULL,
  `trigger_control` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `triggers_personality`
--

CREATE TABLE IF NOT EXISTS `triggers_personality` (
  `pid` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `position` varchar(150) NOT NULL,
  `desc` varchar(500) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `dob` date NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(400) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `dp_url` varchar(300) NOT NULL,
  `user_level` enum('STUDENT','TUTOR','ADMIN','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `triggers`
--
ALTER TABLE `triggers`
  ADD CONSTRAINT `triggers_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `triggers_personality` (`pid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
