-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2018 at 05:23 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corridor1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` int(10) NOT NULL,
  `companyName` text NOT NULL,
  `image` varchar(240) NOT NULL,
  `adId` int(5) DEFAULT NULL,
  `adLocation` text NOT NULL,
  `adDescription` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`firstName`, `lastName`, `email`, `phno`, `companyName`, `image`, `adId`, `adLocation`, `adDescription`) VALUES
('', '', '', 812345678, 'm', 'dc190629ef488355f41b06cc69772842--rollup-banner-banner-web.jpg', 10, 'left', ''),
('', '', '', 812345678, '', '49.png', 11, 'right', ''),
('', '', '', 812345678, '', 'dc190629ef488355f41b06cc69772842--rollup-banner-banner-web.jpg', 12, 'left', ''),
('aaaaa', 'sssssss', 'aaaaa@ss.com', 1234567890, 'aaaaaaaaaa', 'Charith.jpg', NULL, 'left', 'www'),
('', '', '', 778649811, '', 'ad1.png', NULL, 'left', 'test add'),
('', '', '', 778649811, '', 'dc190629ef488355f41b06cc69772842--rollup-banner-banner-web.jpg', NULL, 'left', 'ad'),
('mark', 'yoga', 'yoga@gmail.com', 778649811, 'murc', 'ad1.png', NULL, 'left', 'burger king'),
('', '', '', 770739066, 'murc', 'ad.gif', NULL, 'left', ''),
('charith', 'e', '4rr44@wwwv.com', 770739066, 'murc', 'ad1.png', NULL, 'left', 'sadadasdas'),
('charith', 'lak', 'lak@dkm.com', 770739066, 'murc', 'dc190629ef488355f41b06cc69772842--rollup-banner-banner-web.jpg', NULL, '', 'wee');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `c_id` varchar(30) NOT NULL,
  `p_id` varchar(30) NOT NULL,
  `stu_no` varchar(18) NOT NULL,
  `c_body` varchar(255) NOT NULL,
  `c_votes` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` varchar(100) NOT NULL,
  `p_id` varchar(70) NOT NULL,
  `c_body` varchar(200) NOT NULL,
  `stud_no` varchar(30) NOT NULL,
  `c_vote` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `p_id`, `c_body`, `stud_no`, `c_vote`) VALUES
('dcsd-ka-162f-016+', '', 'work', 'dcsd-ka-162f-016', 4),
('5', '1', 'wwe', 'dcsd-ka-162f-016', 4),
('6', '1', '', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+dcsd-ka-162f-016+17:09:49', 'dcsd-ka-162f-016+17:09:49', 'ha ha\r\n', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+dcsd-ka-162f-016+14:09:27', 'dcsd-ka-162f-016+14:09:27', 'heloo', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+dcsd-ka-162f-016+01:09:05+01:09:16', 'dcsd-ka-162f-016+01:09:05', 'this is the logo of android stuio', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+dcsd-ka-162f-016+01:09:05+01:09:29', 'dcsd-ka-162f-016+01:09:05', 'java latest version is 8', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+dcsd-ka-162f-016+01:09:05+01:09:52', 'dcsd-ka-162f-016+01:09:05', 'android uses java', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+dcsd-ka-162f-016+01:09:05+01:09:44', 'dcsd-ka-162f-016+01:09:05', 'android works with java', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+1+04:09:44', '1', 'java is not working', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+dcsd-ka-162f-016+05:09:55+05:09:50', 'dcsd-ka-162f-016+05:09:55', 'ok ill try', 'dcsd-ka-162f-016', 4),
('dcsd-ka-162f-016+dcsd-ka-162f-016+08:09:31+08:09:07', 'dcsd-ka-162f-016+08:09:31', 'this is java ', 'dcsd-ka-162f-016', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `stuno` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`stuno`, `login_date`) VALUES
('dcsd-ka-162f-016', '25/01/18'),
('dcsd-ka-162f-016', '25/01/18'),
('dcsd-ka-162f-016', '25/01/18'),
('dcsdka162026', '28/01/18'),
('admin', '28/01/18'),
('admin', '28/01/18'),
('admin', '28/01/18'),
('admin', '28/01/18'),
('admin', '28/01/18'),
('admin', '28/01/18');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` varchar(50) NOT NULL,
  `p_body` varchar(225) NOT NULL,
  `p_time` timestamp(6) NULL DEFAULT NULL,
  `stu_no` varchar(20) NOT NULL,
  `p_pic` varchar(200) DEFAULT NULL,
  `heading` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `p_body`, `p_time`, `stu_no`, `p_pic`, `heading`) VALUES
('1', 'java is easy', '2017-09-12 04:53:02.000000', 'dcsd-ka-162f-016', '', 'java'),
('dcsd-ka-162f-016+04:09:18', 'power', NULL, 'dcsd-ka-162f-016', '', 'javascript vs java'),
('dcsd-ka-162f-016+05:09:55', 'is c better or c++', NULL, 'dcsd-ka-162f-016', '', 'c++'),
('dcsd-ka-162f-016+05:09:40', 'who is a full stack devoloper', NULL, 'dcsd-ka-162f-016', '', 'full stack devoloper'),
('dcsd-ka-162f-016+05:09:55', 'stuck with the 2nd line ', NULL, 'dcsd-ka-162f-016', '21729988_2000222226661973_249761900_o.jpg', 'Please Answer This Question'),
('dcsd-ka-162f-016+08:09:31', 'explain this please', NULL, 'dcsd-ka-162f-016', '21729988_2000222226661973_249761900_o.jpg', 'computer architecture'),
('+05:01:19', '', NULL, '', '', 'software'),
('+05:01:26', 'what is this', NULL, '', '', 'software security'),
('dcsdka162026+13:01:05', 'explain tree structure', NULL, 'dcsdka162026', '', 'trees');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` text,
  `lname` text,
  `stu_no` varchar(50) NOT NULL,
  `email` varchar(55) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `pro_pic` varchar(200) DEFAULT NULL,
  `batch` varchar(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `desp` varchar(50) DEFAULT NULL,
  `code` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `stu_no`, `email`, `password`, `pro_pic`, `batch`, `gender`, `desp`, `code`) VALUES
('charith', 'sarukkali', 'dcsd-ka-162f-016', 'charith@gmail.com', '33pasan33', 'Charith.jpg', '16', 'm', '', 0),
('udara', 'navarathne', 'dseka161f011', 'udara128@gmail.com', '1234567', NULL, 'dse161', 'M', NULL, 0),
('mark', 'yoga', 'dcsdka162026', 'mark@gmail.com', '111111', NULL, 'dcsd162', 'M', NULL, 0),
('asanka', 'navarathne', 'dseka161f012', 'udara@gmail.com', '123456', NULL, 'dse161', 'M', NULL, 0),
('Mihindu', 'Bandara', 'dseka161f004', 'mihidu@gmail.com', 'udara1996', NULL, 'dse161', 'M', NULL, 0),
('passan', 'mihindu', 'dse18', '23@gr.com', '111111', NULL, 'des161', 'M', NULL, 0),
('sam', 'perera', 'dcsd34', 'sam@erm.com', '111111', NULL, 'dcsd11', 'M', NULL, 2704),
('sam', 'perera', 'dcsd34', 'sam@erm.com', '111111', NULL, 'dcsd11', 'M', NULL, 2068),
('sean', 'silva', 'dcsd34wwe', 'we@gmail.com', '222222', NULL, 'des33', 'M', NULL, 4508),
('ron', 'perera', 'dcsd234', 'qqwww@wwee.com', '111111', NULL, 'dcse23', 'M', NULL, 7485),
('wer', 'qaz', '111111', 'maww@eer.com', '000000', NULL, 'dew22', 'M', NULL, 3425),
('tharindu', 'darapan', 'dcsd342', 'pan@dara.com', '111111', NULL, 'cde33', 'M', NULL, 2801),
('udara', 'navarathne', 'dse-ka-161f-011', 'udara134@hotmail.com', 'udara1996', NULL, 'dse161', 'M', NULL, 5554),
(NULL, NULL, 'admin', NULL, 'admin', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
