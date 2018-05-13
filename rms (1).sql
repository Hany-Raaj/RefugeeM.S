-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 12:23 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'rafat', '7676');

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sectors` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `foods` text NOT NULL,
  `perofcriminal` float NOT NULL,
  `food` varchar(20) NOT NULL,
  `security` varchar(20) NOT NULL,
  `medical` varchar(20) NOT NULL,
  `clothes` varchar(20) NOT NULL,
  `refugees` int(11) NOT NULL,
  `head` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `name`, `sectors`, `location`, `foods`, `perofcriminal`, `food`, `security`, `medical`, `clothes`, `refugees`, `head`, `contact`) VALUES
(1, 'Cox\'s Camp', 12, 'Cox\'s Bazar', 'available', 2.34, 'available', 'unavailable', 'available', 'unavailable', 23424, 'Major Motiur', 0),
(2, 'Bandarban Camp', 11, 'Bandarban Pahar', 'available', 1, 'available', 'available', 'available', 'unavailable', 12133, 'L.C Nur Jahan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `id` int(11) NOT NULL,
  `campname` varchar(100) NOT NULL,
  `locatio` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `common` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`id`, `campname`, `locatio`, `sector`, `common`, `duration`) VALUES
(1, 'Rafiq Camp', 'Gofurgaon, Mymensign', '12 ,23', 'Dairiya', '12 days');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `reg` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `reg`, `name`, `type`, `address`, `email`, `contact`) VALUES
(1, 1002, 'King\'s Coders', 'Medical', 'Aladot Para, Tangial', 'raz@gmail.com', 39483);

-- --------------------------------------------------------

--
-- Table structure for table `refugee`
--

CREATE TABLE `refugee` (
  `id` int(11) NOT NULL,
  `reg` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `parmanentaddress` text NOT NULL,
  `camp` varchar(50) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `temcontact` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `missmem` text NOT NULL,
  `disease` text NOT NULL,
  `blood` varchar(20) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `currentstatus` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refugee`
--

INSERT INTO `refugee` (`id`, `reg`, `name`, `fathername`, `mothername`, `gender`, `dob`, `religion`, `parmanentaddress`, `camp`, `sector`, `contact`, `temcontact`, `status`, `missmem`, `disease`, `blood`, `marital`, `currentstatus`) VALUES
(1, 14201027, 'Farhan Cheng', 'Miki Cheng', 'Wang Cheng', 'Male', '', '', 'Chung chung, Mayanmar.', 'Camp-16', '123 Block', 8932094, 43534789, 'Criminal', 'Wfie Children', 'HIV', 'HIV+', 'Married', '');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `from` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refugee`
--
ALTER TABLE `refugee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `camps`
--
ALTER TABLE `camps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `refugee`
--
ALTER TABLE `refugee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
