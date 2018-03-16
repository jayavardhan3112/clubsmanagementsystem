-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 04:59 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clubsmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_name` varchar(20) NOT NULL,
  `clubtype` varchar(20) NOT NULL,
  `coordinator` int(11) NOT NULL,
  `cocoordinator` int(11) NOT NULL,
  `councilmember` int(11) NOT NULL,
  `totalmembers` int(4) NOT NULL,
  `budget` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clubevents`
--

CREATE TABLE `clubevents` (
  `event_name` varchar(20) NOT NULL,
  `eventcoordinator` int(11) NOT NULL,
  `eventmonth` varchar(20) NOT NULL,
  `venue` varchar(10) NOT NULL,
  `noofparticipants` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conducts`
--

CREATE TABLE `conducts` (
  `club_name` varchar(20) NOT NULL,
  `event_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fest`
--

CREATE TABLE `fest` (
  `fest_name` varchar(20) NOT NULL,
  `festtype` varchar(20) NOT NULL,
  `festlevel` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `budget` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `has_a`
--

CREATE TABLE `has_a` (
  `club_name` varchar(20) NOT NULL,
  `item` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memberof`
--

CREATE TABLE `memberof` (
  `roll_no` int(11) NOT NULL,
  `club_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organizes`
--

CREATE TABLE `organizes` (
  `club_name` varchar(20) NOT NULL,
  `fest_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `item` varchar(40) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `cost` int(4) NOT NULL,
  `stocktype` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `hallofresidence` varchar(30) DEFAULT NULL,
  `post` varchar(20) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `branch` char(10) NOT NULL,
  `phone_no` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `place` varchar(40) NOT NULL,
  `tripyear` int(11) NOT NULL,
  `achievements` varchar(60) DEFAULT NULL,
  `noofpeople` int(6) NOT NULL,
  `budget` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wentto`
--

CREATE TABLE `wentto` (
  `club_name` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_name`);

--
-- Indexes for table `conducts`
--
ALTER TABLE `conducts`
  ADD PRIMARY KEY (`club_name`,`event_name`);

--
-- Indexes for table `fest`
--
ALTER TABLE `fest`
  ADD PRIMARY KEY (`fest_name`);

--
-- Indexes for table `has_a`
--
ALTER TABLE `has_a`
  ADD PRIMARY KEY (`club_name`,`item`);

--
-- Indexes for table `memberof`
--
ALTER TABLE `memberof`
  ADD PRIMARY KEY (`roll_no`,`club_name`);

--
-- Indexes for table `organizes`
--
ALTER TABLE `organizes`
  ADD PRIMARY KEY (`club_name`,`fest_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `wentto`
--
ALTER TABLE `wentto`
  ADD PRIMARY KEY (`club_name`,`place`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
