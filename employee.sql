-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2025 at 04:50 PM
-- Server version: 5.5.57
-- PHP Version: 5.4.45-0+deb7u11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `its66040233126`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_title` varchar(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_surname` varchar(50) NOT NULL,
  `emp_birthday` date NOT NULL,
  `emp_adr` text NOT NULL,
  `emp_skill` text NOT NULL,
  `emp_tel` varchar(20) NOT NULL,
  `emp_user` varchar(20) NOT NULL,
  `emp_pass` varchar(32) NOT NULL,
  `emp_level` varchar(1) NOT NULL,
  `d_id` int(3) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_title`, `emp_name`, `emp_surname`, `emp_birthday`, `emp_adr`, `emp_skill`, `emp_tel`, `emp_user`, `emp_pass`, `emp_level`, `d_id`) VALUES
(1, 'นาง', 'มาโนด2', 'วงศ์ชารี', '2025-01-04', 'บ้าน', 'นอน', '088888', 'Filmza0079', '827ccb0eea8a706c4c34a16891f84e7b', 'u', 0),
(5, 'นาย', 'มานะ', 'โนดนำชัย', '2025-07-17', 'จ.เลย', 'นอนเล่น', '051245365', 'mama', '827ccb0eea8a706c4c34a16891f84e7b', 'u', 0),
(6, 'นาย', 'มีนา', 'นาชัย', '2025-01-27', 'จ.กรุงเทพ', 'ว่ายน้ำได้', '016587125', 'mena', '827ccb0eea8a706c4c34a16891f84e7b', 'u', 0),
(7, 'นาย', 'มานะมามี', 'มะโนธรรม', '2025-01-03', 'จ.อุบล', 'นอนไม่ได้', '01558/45', 'momo', '827ccb0eea8a706c4c34a16891f84e7b', 'u', 0),
(8, 'นาย', 'วีรพงศ์', 'มะโนธรรม', '2025-01-08', 'dasd', 'awdsa', '01558/45', 'momo', 'e10adc3949ba59abbe56e057f20f883e', 'u', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
