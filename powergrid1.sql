-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 05:37 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powergrid1`
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

--
-- Dumping data for table `employee_entry`
--

INSERT INTO `employee_entry` (`id`, `empid`, `empname`, `email`, `mobile`, `dept`, `des`, `dob`, `gender`, `sports`, `password`, `date`, `status`) VALUES
(7, '1001', 'avneet', 'avneetbagga05@gmail.com', '1234456677', 'adjsndjef', 'hfhdsljl', '2018-08-08', 'Female', 'chess', '08082018', '2018-08-03 11:44:21am', '1');

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
(6, '1002', 'Abhinav', 'abhi@1', '9650485090', 'Des', 'Deg', '2018-08-03', 'Male', '03082018', '2018-08-02 11:07:12pm', '0'),
(7, '1001', 'avneet', 'avneetbagga05@gmail.com', '3455678738', 'ghdfhjsdg', 'hfhdsljl', '2018-08-08', 'Female', '08082018', '2018-08-03 11:35:30am', '0'),
(8, '1111', 'avneet', 'avneetbagga@gmail.com', '12345678', 'adjsndjef', 'ghj', '2018-08-01', 'Female', '01082018', '2018-08-08 09:33:38am', '0'),
(9, '1002', 'dgfhug', 'gfh@gmail.com', '7667556543', 'ghghd', 'hggshihj', '2018-08-16', 'Female', '1002', '2018-08-12 12:54:46pm', '0'),
(10, '1009', 'anu', 'anu@gmail.com', '546788765', 'ggyug', 'dffghh', '1999-08-17', 'Female', '17081999', '2018-08-28 04:07:08pm', '0');

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
  `hod` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_submit`
--

INSERT INTO `form_submit` (`id`, `login_id`, `empname`, `email`, `mobile`, `dept`, `des`, `dob`, `gender`, `sports`, `photo`, `hod`, `date`) VALUES
(7, '1002', 'Abhinav', 'abhi@1', '9650485090', 'Des', 'Deg', '2018-08-03', 'Male', 'Carrom ,Chess ,Badminton ,Table Tennis ', '', '', '2018-08-02 11:08:32pm'),
(8, '1001', 'avneet', 'avneetbagga05@gmail.com', '3455678738', 'ghdfhjsdg', 'hfhdsljl', '2018-08-08', 'Female', 'Carrom ,Badminton ,Bridge ', '3.jpg', '', '2018-08-03 11:38:43am'),
(9, '1001', 'avneet', 'avneetbagga05@gmail.com', '3455678738', 'ghdfhjsdg', 'hfhdsljl', '2018-08-08', 'Female', 'Badminton ,Cricket ', '', '', '2018-08-08 09:41:07am'),
(10, '1002', 'dgfhug', 'gfh@gmail.com', '7667556543', 'ghghd', 'hggshihj', '2018-08-16', 'Female', 'Carrom ,Badminton ,Bridge ', '', '', '2018-08-12 01:10:41pm'),
(11, '1002', 'dgfhug', 'gfh@gmail.com', '7667556543', 'ghghd', 'hggshihj', '2018-08-16', 'Female', 'Chess ,Badminton ,Cricket ', '3.jpg', '', '2018-08-12 01:11:58pm'),
(13, '1002', '', 'gfh@gmail.com', '7667556543', 'ghghd', 'hggshihj', '2018-08-16', 'Female', 'Chess ,Bridge ,Cricket ', '', '', '2018-08-12 01:23:20pm'),
(15, '1001', '2001', 'avneetbagga05@gmail.com', '3455678738', 'ghdfhjsdg', 'hfhdsljl', '2018-08-08', 'Female', '', '', '', '2018-08-23 02:00:44pm'),
(16, '1001', 'avneet', 'avneetbagga05@gmail.com', '3455678738', 'ghdfhjsdg', 'hfhdsljl', '2018-08-08', 'Female', '', '', '578789', '2018-08-23 02:20:42pm'),
(17, '1001', 'avneet', 'avneetbagga05@gmail.com', '3455678738', 'ghdfhjsdg', 'hfhdsljl', '2018-08-08', 'Female', 'Chess ,Badminton ,Bridge ,Cricket ', '', '1234', '2018-08-24 04:26:19pm'),
(18, '1111', 'avneet', 'avneetbagga@gmail.com', '12345678', 'adjsndjef', 'ghj', '2018-08-01', 'Female', '', '', '1234', '2018-08-27 06:14:55pm');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hod` int(100) NOT NULL,
  `eid` int(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `desig` varchar(100) NOT NULL,
  `dob` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `emp_entry`
--
ALTER TABLE `emp_entry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `form_submit`
--
ALTER TABLE `form_submit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
