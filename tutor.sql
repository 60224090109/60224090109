-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 05:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorpoom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(2) NOT NULL,
  `name` varchar(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `lastname` varchar(20) COLLATE utf32_thai_520_w2 NOT NULL,
  `gender` varchar(10) COLLATE utf32_thai_520_w2 NOT NULL,
  `subject` varchar(30) COLLATE utf32_thai_520_w2 NOT NULL,
  `province` varchar(30) COLLATE utf32_thai_520_w2 NOT NULL,
  `tel` char(10) COLLATE utf32_thai_520_w2 NOT NULL,
  `experience` text COLLATE utf32_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_thai_520_w2;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `lastname`, `gender`, `subject`, `province`, `tel`, `experience`) VALUES
(6, 'สมชาย', 'คนดี', 'male', 'วิทยาศาสตร์', 'ราชบุรี', '0897564825', ''),
(7, 'กนกวรรณ', 'งามดี', 'female', 'ภาษาไทย', 'สุพรรณบุรี', '0800456127', ''),
(11, 'สิทธิไชย', 'ธนบูรณ์กาญจน์', 'female', 'คณิตศาสตร์', 'กาญจนบุรี', '0815429456', ''),
(13, 'สมหญิง', 'ธนบูรณ์กาญจน์', 'female', 'คณิตศาสตร์', 'กาญจนบุรี', '0815429456', ''),
(14, 'อมตะ', 'วันดี', 'male', 'อังกฤษ', 'ราชบุรี', '7777777', 'มาเตอร์ฟักเกอร์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
