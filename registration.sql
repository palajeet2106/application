-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 10:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `insname` varchar(255) NOT NULL,
  `insplace` varchar(255) NOT NULL,
  `insstate` varchar(255) NOT NULL,
  `insnature` varchar(255) NOT NULL,
  `instype` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `cooradinator_name` varchar(255) NOT NULL,
  `year` date NOT NULL,
  `oplan` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `venue` varchar(255) NOT NULL,
  `coordinatingdept` varchar(255) NOT NULL,
  `applid` varchar(255) NOT NULL,
  `aicte` varchar(255) NOT NULL,
  `teqip` varchar(255) NOT NULL,
  `appldate` date NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `contact`, `gender`, `pic`, `dob`, `religion`, `category`, `qualification`, `designation`, `department`, `interest`, `insname`, `insplace`, `insstate`, `insnature`, `instype`, `password`, `course_title`, `cooradinator_name`, `year`, `oplan`, `startdate`, `enddate`, `venue`, `coordinatingdept`, `applid`, `aicte`, `teqip`, `appldate`, `occupation`, `course`, `status`) VALUES
(28, 'admin', 'admin@gmail.com', '6253659874', 'female', 'images/picofme (1).png', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '    javascript', 'abc', '2023-06-06', ' 12', '2023-06-06', '2023-06-06', 'fatehpur', ' 12', ' 11', '    11', '   11', '2023-06-06', ' 11', '', 1),
(32, 'ajeet', 'ajeet@gmail.com', '8954789467984', '', 'images/', '0000-00-00', '', '', '', '', '', '', 'Utttar pradesh', 'Utttar pradesh', 'Utttar pradesh', 'Utttar pradesh', 'Utttar pradesh', 'dcddb75469b4b4875094e14561e573d8', 'web design', 'javascript', '0000-00-00', '12', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '', 'web design', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
