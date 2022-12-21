-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 12:29 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcandidate`
--

CREATE TABLE `tblcandidate` (
  `candidateid` int(11) NOT NULL,
  `studentid` int(11) DEFAULT NULL,
  `positionindex` int(11) DEFAULT NULL,
  `candidatename` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `yearlevel` int(11) DEFAULT NULL,
  `votecount` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcandidate`
--

INSERT INTO `tblcandidate` (`candidateid`, `studentid`, `positionindex`, `candidatename`, `position`, `yearlevel`, `votecount`) VALUES
(4, 30792, 1, 'Michael Miranda', 'President', 3, 5),
(6, 30288, 1, 'Raymond Jamero', 'President', 3, 1),
(7, 30123, 2, 'Kim Kyle Cornel Marquez', 'Vice President', 3, 6),
(8, 30124, 2, 'Mery Lovely Janna  Lu', 'Vice President', 3, 0),
(9, 30125, 3, 'Marisol Canta De Leon', 'Secretary', 3, 4),
(10, 30126, 3, 'Jahnelle Mae  Menor', 'Secretary', 3, 2),
(11, 30127, 4, 'Rica Gin  Gonzales', 'Sub-Secretary', 3, 3),
(12, 30128, 4, 'Timothy  Tandoc', 'Sub-Secretary', 3, 3),
(13, 30129, 5, 'Ken  Rosario', 'Treasurer', 3, 4),
(14, 30130, 5, 'Shy  Caparros', 'Treasurer', 3, 2),
(15, 30131, 6, 'Jennefer  Catalan', 'Sub-Treasurer', 3, 4),
(16, 30132, 6, 'Juan  Dela Cruz', 'Sub-Treasurer', 3, 2),
(17, 30133, 7, 'Mark  Del monte', 'Auditor', 3, 5),
(18, 30134, 7, 'Kim Syeong Ju', 'Auditor', 3, 4),
(19, 30135, 7, 'Batang Malakas Paninindigan', 'Auditor', 3, 3),
(20, 30136, 7, 'Batang  Pasaway', 'Auditor', 3, 0),
(21, 30137, 8, 'Cardo  Dalisay', 'Business Manager', 3, 4),
(22, 10000, 8, 'B M 2', 'Business Manager', 3, 4),
(23, 10001, 8, 'B M 3', 'Business Manager', 3, 2),
(24, 10002, 8, 'B M 4', 'Business Manager', 3, 2),
(25, 20000, 9, 'Ad o nis', 'Adonis', 3, 5),
(26, 20001, 9, 'Ad o nis2', 'Adonis', 3, 1),
(27, 20002, 10, 'Mu s e', ' Muse', 3, 5),
(28, 20003, 10, 'Mu s e2', ' Muse', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblposition`
--

CREATE TABLE `tblposition` (
  `positionindex` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `votecount` int(11) NOT NULL DEFAULT 0,
  `validvote` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblposition`
--

INSERT INTO `tblposition` (`positionindex`, `position`, `status`, `votecount`, `validvote`) VALUES
(1, 'President', 1, 6, 1),
(2, 'Vice President', 1, 6, 1),
(3, 'Secretary', 1, 6, 1),
(4, 'Sub-Secretary', 1, 6, 1),
(5, 'Treasurer', 1, 6, 1),
(6, 'Sub-Treasurer', 1, 6, 1),
(7, 'Auditor', 1, 12, 2),
(8, 'Business Manager', 1, 12, 2),
(9, 'Adonis', 1, 6, 1),
(10, 'Muse', 1, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblrecord`
--

CREATE TABLE `tblrecord` (
  `candidateid` int(11) DEFAULT NULL,
  `studentid` int(11) DEFAULT NULL,
  `positionindex` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `studentid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `program` varchar(20) NOT NULL,
  `yearlevel` int(11) NOT NULL,
  `votestatus` tinyint(1) NOT NULL DEFAULT 0,
  `voterskey` varchar(100) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`studentid`, `firstname`, `middlename`, `lastname`, `program`, `yearlevel`, `votestatus`, `voterskey`, `active`) VALUES
(10000, 'B', 'M', '2', 'BSIT', 3, 0, '1669793699', 1),
(10001, 'B', 'M', '3', 'BSIT', 3, 0, '1669793718', 1),
(10002, 'B', 'M', '4', 'BSIT', 3, 0, '1669793740', 1),
(20000, 'Ad', 'o', 'nis', 'BSIT', 3, 1, '1669793805', 1),
(20001, 'Ad', 'o', 'nis2', 'BSIT', 3, 0, '1669793824', 1),
(20002, 'Mu', 's', 'e', 'BSIT', 3, 0, '1669793842', 1),
(20003, 'Mu', 's', 'e2', 'BSIT', 3, 1, '1669793864', 1),
(30123, 'Kim Kyle', 'Cornel', 'Marquez', 'BSIT', 3, 1, '30123', 1),
(30124, 'Mery Lovely Janna', '', 'Lu', 'BSIT', 3, 0, '1669291732', 1),
(30125, 'Marisol', 'Canta', 'De Leon', 'BSIT', 3, 0, '1669291783', 1),
(30126, 'Jahnelle Mae', '', 'Menor', 'BSIT', 3, 0, '1669291862', 1),
(30127, 'Rica Gin', '', 'Gonzales', 'BSIT', 3, 0, '1669292132', 1),
(30128, 'Timothy', '', 'Tandoc', 'BSIT', 3, 0, '1669292173', 1),
(30129, 'Ken', '', 'Rosario', 'BSIT', 3, 0, '1669292186', 1),
(30130, 'Shy', '', 'Caparros', 'BSIT', 3, 0, '1669292214', 1),
(30131, 'Jennefer', '', 'Catalan', 'BSIT', 3, 0, '1669292227', 1),
(30132, 'Juan', '', 'Dela Cruz', 'BSIT', 3, 0, '1669292423', 1),
(30133, 'Mark', '', 'Del monte', 'BSIT', 3, 0, '1669293392', 1),
(30134, 'Kim', 'Syeong', 'Ju', 'BSIT', 3, 0, '1669293754', 1),
(30135, 'Batang', 'Malakas', 'Kumain', 'BSIT', 3, 0, '1669293786', 1),
(30136, 'Batang', '', 'Pasaway', 'BSIT', 3, 0, '1669293833', 1),
(30137, 'Cardo', '', 'Dalisay', 'BSIT', 3, 0, '1669518597', 1),
(30288, 'Raymond', 'Payopaynnb', 'Jamero', 'BSIT', 3, 1, '30288', 1),
(30300, 'Ernesto', 'Espanol', 'Dela Cruz', 'BSIT', 3, 1, '30300', 1),
(30792, 'Michael', 'Esguerra', 'Miranda III', 'BSIT', 3, 1, '30792', 1),
(31290, 'Austyn', 'Stark', 'Oberbrunner', 'BSCS', 2, 0, '1670329850', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcandidate`
--
ALTER TABLE `tblcandidate`
  ADD PRIMARY KEY (`candidateid`),
  ADD KEY `studentid` (`studentid`),
  ADD KEY `positionindex` (`positionindex`);

--
-- Indexes for table `tblposition`
--
ALTER TABLE `tblposition`
  ADD PRIMARY KEY (`positionindex`);

--
-- Indexes for table `tblrecord`
--
ALTER TABLE `tblrecord`
  ADD KEY `candidateid` (`candidateid`),
  ADD KEY `studentid` (`studentid`),
  ADD KEY `positionindex` (`positionindex`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcandidate`
--
ALTER TABLE `tblcandidate`
  MODIFY `candidateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblposition`
--
ALTER TABLE `tblposition`
  MODIFY `positionindex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcandidate`
--
ALTER TABLE `tblcandidate`
  ADD CONSTRAINT `tblcandidate_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `tblstudent` (`studentid`),
  ADD CONSTRAINT `tblcandidate_ibfk_2` FOREIGN KEY (`positionindex`) REFERENCES `tblposition` (`positionindex`);

--
-- Constraints for table `tblrecord`
--
ALTER TABLE `tblrecord`
  ADD CONSTRAINT `tblrecord_ibfk_1` FOREIGN KEY (`candidateid`) REFERENCES `tblcandidate` (`candidateid`),
  ADD CONSTRAINT `tblrecord_ibfk_2` FOREIGN KEY (`studentid`) REFERENCES `tblstudent` (`studentid`),
  ADD CONSTRAINT `tblrecord_ibfk_3` FOREIGN KEY (`positionindex`) REFERENCES `tblposition` (`positionindex`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
