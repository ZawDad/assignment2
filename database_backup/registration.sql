-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 03:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(80) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `years_of_experience` varchar(20) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `about_me` text,
  `profile_picture` varchar(255) DEFAULT NULL,
  `professional_title` varchar(50) DEFAULT NULL,
  `career_level` varchar(50) DEFAULT NULL,
  `communication_level` varchar(20) DEFAULT NULL,
  `organizational_level` varchar(20) DEFAULT NULL,
  `job_related_level` varchar(20) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `full_name`, `gender`, `date_of_birth`, `years_of_experience`, `industry`, `location`, `about_me`, `profile_picture`, `professional_title`, `career_level`, `communication_level`, `organizational_level`, `job_related_level`, `address`, `phone_number`, `website`, `email`) VALUES
(1, 'Joy Love Ride', 'Female', '1983-12-12', 'Over 10 Years', 'Education', 'Westmoreland', 'This is my first time using this website. I love to teach and I have been doing it for 25 years.', 'uploads/registration/69african-teacher.jpg', 'Senior Teacher', 'Senior Professional Level/Mid-Level Management', '81-90 %', '91-100 %', '91-100 %', '23 Kingsway Avenue, Kingston 10', '876-926-6598', '', 'joyride@hotmail.com'),
(3, 'Testfa Latty', 'Male', '1980-12-15', '5-10 Years', 'Medical', '', '', NULL, '', '', '', '81-90 %', '', '21 Hope Road', '876-562-2356', '', 'sdw_vam@hotmail.com'),
(5, 'Janet Wilson', 'Female', '1983-12-12', 'Over 10 Years', 'Medical', '', '', 'uploads/registration/76photo20003.jpg', '', 'Professional Level', '', '', '', 'West Min Road', '876-889-8694', '', 'jj@j.com'),
(6, 'Jeff Max', 'Male', '1976-10-11', '1-4 Years', 'Construction', 'St. Ann', '', 'uploads/registration/80EXT logo.png', '', '', '', '', '', 'North West Street', '876-336-9396', '', 'jmax@mustwin.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
