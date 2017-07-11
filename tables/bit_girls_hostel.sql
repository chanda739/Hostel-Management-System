-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2016 at 08:00 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bit_girls_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_un` varchar(20) NOT NULL,
  `admin_pswd` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`aid`, `admin_un`, `admin_pswd`) VALUES
(1, 'world', 'book');

-- --------------------------------------------------------

--
-- Table structure for table `admin_msg`
--

CREATE TABLE IF NOT EXISTS `admin_msg` (
  `amid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `amsub` varchar(25) NOT NULL,
  `amcom` varchar(100) NOT NULL,
  `amdate` date NOT NULL,
  `amtime` time NOT NULL,
  PRIMARY KEY (`amid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_msg`
--

INSERT INTO `admin_msg` (`amid`, `sid`, `amsub`, `amcom`, `amdate`, `amtime`) VALUES
(1, 2, 'fcdzfvdxc', 'dvffcxbvgfgbfgx', '2016-04-02', '08:23:24'),
(2, 3, 'hfxbgzsdcs', 'fgbnjgjncffvdxfdx', '2016-04-02', '13:54:54'),
(3, 3, 'room', 'room does not clean', '2016-04-05', '11:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `allocate_room`
--

CREATE TABLE IF NOT EXISTS `allocate_room` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `allocate_room`
--

INSERT INTO `allocate_room` (`aid`, `sid`, `rid`) VALUES
(1, 1, 81),
(2, 2, 262),
(3, 3, 263),
(4, 3, 263);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `msubject` varchar(25) NOT NULL,
  `mmsg` varchar(100) NOT NULL,
  `mdate` date NOT NULL,
  `mtime` time NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `sid`, `msubject`, `mmsg`, `mdate`, `mtime`) VALUES
(1, 1, 'yf', 'ghnvmv', '2016-04-02', '12:13:00'),
(2, 3, 'hjg', 'sxfhbhfvmgjv', '2016-04-02', '12:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE IF NOT EXISTS `notif` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `nnotif` varchar(100) NOT NULL,
  `ndate` date NOT NULL,
  `ntime` time NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`nid`, `nnotif`, `ndate`, `ntime`) VALUES
(1, 'g  vgjn ftukmbvf  ', '2016-04-01', '04:50:00'),
(2, 'jgfgcgbdgymchg', '2016-04-02', '05:00:00'),
(3, 'jhxdsjxhdjsxdshbdcwsjax bdjhsdgbxakujbsxjadbxasxdgsav', '2016-04-01', '07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `room_request`
--

CREATE TABLE IF NOT EXISTS `room_request` (
  `reqid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  PRIMARY KEY (`reqid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `room_request`
--

INSERT INTO `room_request` (`reqid`, `sid`, `rid`) VALUES
(1, 3, 263);

-- --------------------------------------------------------

--
-- Table structure for table `stud_registration`
--

CREATE TABLE IF NOT EXISTS `stud_registration` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(20) NOT NULL,
  `sclass` varchar(10) NOT NULL,
  `sbranch` varchar(20) NOT NULL,
  `ssem` varchar(2) NOT NULL,
  `syradmission` varchar(4) NOT NULL,
  `sfname` varchar(20) NOT NULL,
  `sdob` date NOT NULL,
  `sgender` varchar(10) NOT NULL,
  `sbldgrp` varchar(5) NOT NULL,
  `saddr` varchar(50) NOT NULL,
  `spincode` varchar(6) NOT NULL,
  `sphnno` varchar(15) NOT NULL,
  `smobno` varchar(10) NOT NULL,
  `slgname` varchar(20) NOT NULL,
  `slgaddr` varchar(50) NOT NULL,
  `slgpincode` varchar(6) NOT NULL,
  `slgphnno` varchar(15) NOT NULL,
  `slgmobno` varchar(10) NOT NULL,
  `susername` varchar(20) NOT NULL,
  `spswd` varchar(20) NOT NULL,
  `semail` varchar(20) NOT NULL,
  `sphoto` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stud_registration`
--

INSERT INTO `stud_registration` (`sid`, `sname`, `sclass`, `sbranch`, `ssem`, `syradmission`, `sfname`, `sdob`, `sgender`, `sbldgrp`, `saddr`, `spincode`, `sphnno`, `smobno`, `slgname`, `slgaddr`, `slgpincode`, `slgphnno`, `slgmobno`, `susername`, `spswd`, `semail`, `sphoto`) VALUES
(1, 'a', 'be', 'cse', '4', '2012', 'dccsd', '1994-09-04', 'female', 'a+', '', '345354', '354423422', '3543545435', 'lg,fgvsfdvde', 'esgffrdgdf', '434324', '436544334', '345454436', 'hello', 'hii', 'dkcfdkfd@sfd.com', ''),
(2, 'b', 'mba', 'cse', '1', '2013', 'rgdghrsf', '1992-09-01', 'female', 'b+', '', '345352', '56562343', '6564352', 'fmdkgjskegd', 'ldkfjrbgksjdf', '54352', '5456243243', '652343243', 'hii', 'copy', 'sdscs', ''),
(3, 'Saumya Sharma', 'be', 'cse', '7', '2012', 'm sharma', '1994-04-09', 'female', 'ab+', '', '490006', '4872393821', '5464564565', 'gbfvb', 'dbvdCS', '432121', '43317865933', '5632653190', 'saumya', 'qwe', 'saumya88@yahoo.co.in', '4');

-- --------------------------------------------------------

--
-- Table structure for table `visit_notif`
--

CREATE TABLE IF NOT EXISTS `visit_notif` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `visit` varchar(20) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `vout` datetime NOT NULL,
  `vin` datetime NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `visit_notif`
--

INSERT INTO `visit_notif` (`vid`, `sid`, `visit`, `purpose`, `vout`, `vin`) VALUES
(1, 1, 'cfn', 'jdhbscsj', '2016-04-02 05:05:19', '2016-04-02 00:00:00'),
(2, 2, 'dscds', 'cdscs', '2016-04-02 06:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
