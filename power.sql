-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 07:50 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_games`
--

CREATE TABLE `add_games` (
  `id` int(10) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `pmonth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_games`
--

INSERT INTO `add_games` (`id`, `gname`, `place`, `pmonth`) VALUES
(1, 'Carrom', 'Nagpur', 'July 2018'),
(2, 'Chess', 'Hyderabad', 'July 2018'),
(3, 'Badminton', 'Vadodara', 'August 2018'),
(4, 'Table Tennis', 'Kolkata', 'August 2018'),
(5, 'Bridge', 'Bengaluru', 'September 2018'),
(6, 'Volley Ball', 'Patna', 'October 2018'),
(7, 'Cricket', 'Lucknow', 'November 2018'),
(8, 'Football', 'Shillong', 'December 2018');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `password`) VALUES
(1, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `employee_entry`
--

CREATE TABLE `employee_entry` (
  `id` int(100) NOT NULL,
  `empid` varchar(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_entry`
--

CREATE TABLE `emp_entry` (
  `id` int(255) NOT NULL,
  `empid` varchar(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_entry`
--

INSERT INTO `emp_entry` (`id`, `empid`, `empname`, `email`, `mobile`, `dept`, `des`, `dob`, `gender`, `password`, `date`, `status`) VALUES
(6, '1002', 'Abhinav', 'abhi@1', '9650485090', 'Des', 'Deg', '2018-08-03', 'Male', '03082018', '2018-08-02 11:07:12pm', '0');

-- --------------------------------------------------------

--
-- Table structure for table `form_submit`
--

CREATE TABLE `form_submit` (
  `id` int(100) NOT NULL,
  `login_id` varchar(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_submit`
--

INSERT INTO `form_submit` (`id`, `login_id`, `empname`, `email`, `mobile`, `dept`, `des`, `dob`, `gender`, `sports`, `photo`, `date`) VALUES
(7, '1002', 'Abhinav', 'abhi@1', '9650485090', 'Des', 'Deg', '2018-08-03', 'Male', 'Carrom ,Chess ,Badminton ,Table Tennis ', '', '2018-08-02 11:08:32pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_games`
--
ALTER TABLE `add_games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_entry`
--
ALTER TABLE `employee_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_entry`
--
ALTER TABLE `emp_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_submit`
--
ALTER TABLE `form_submit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_games`
--
ALTER TABLE `add_games`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee_entry`
--
ALTER TABLE `employee_entry`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `emp_entry`
--
ALTER TABLE `emp_entry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `form_submit`
--
ALTER TABLE `form_submit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
