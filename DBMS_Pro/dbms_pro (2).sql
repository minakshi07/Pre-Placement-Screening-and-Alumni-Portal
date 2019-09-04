-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 07:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `aid` bigint(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `year_of_passing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(11) NOT NULL,
  `bname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` bigint(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `website` varchar(80) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `password`, `name`, `website`, `contact`, `location`) VALUES
(101, '12345', 'Microsoft', 'www.microsoft.com', 9987528254, 'California, US');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` bigint(20) NOT NULL,
  `cid` bigint(11) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `vaccancy` int(11) NOT NULL,
  `job_desc` varchar(500) NOT NULL,
  `skillset` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `cid`, `company_name`, `vaccancy`, `job_desc`, `skillset`) VALUES
(1, 101, 'Microsoft', 3, 'MINIMUM QUALIFICATIONS\r\nBachelor\'s degree or equivalent experience / training.\r\n\r\nThree or more years of relevant experience - Web Development experience (front-end, back-end or full stack development).\r\n\r\nExperience and proven success in fundamental', 'Communication skills,Power BI,Excel,Tableau,Content Writing, Leadership');

-- --------------------------------------------------------

--
-- Table structure for table `jobnormal`
--

CREATE TABLE `jobnormal` (
  `jid` bigint(20) NOT NULL,
  `job_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobnormal`
--

INSERT INTO `jobnormal` (`jid`, `job_name`) VALUES
(1, 'Business Analyst');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `uid` bigint(20) NOT NULL,
  `cid` bigint(11) NOT NULL,
  `jid` bigint(20) NOT NULL,
  `position` varchar(50) NOT NULL,
  `skillset` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`uid`, `cid`, `jid`, `position`, `skillset`) VALUES
(2017140017, 101, 1, 'Business Analyst', 'Web development,Communication Skills'),
(2017140023, 101, 1, 'Business Analyst', 'Power BI,Java Stack developer,Communication Skills,Excel,Leadership,Tableau,Content Writing');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `uid` bigint(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `year_of_passing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`uid`, `password`, `name`, `contact`, `email`, `year_of_passing`) VALUES
(2017140017, '12345', 'Shashank Gupta', 8983236009, 'shashankgupta10ajbl@gmail.com', 2021),
(2017140023, '12345', 'Minakshi Kudalkar ', 9819743332, 'kudalkarminakshi07@gmail.com', 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `jobnormal`
--
ALTER TABLE `jobnormal`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `jid` (`jid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`uid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`);

--
-- Constraints for table `jobnormal`
--
ALTER TABLE `jobnormal`
  ADD CONSTRAINT `jobnormal_ibfk_1` FOREIGN KEY (`jid`) REFERENCES `job` (`jid`);

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`),
  ADD CONSTRAINT `resume_ibfk_2` FOREIGN KEY (`jid`) REFERENCES `job` (`jid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
