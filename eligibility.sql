-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 06:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eligibility`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `matric_omarks` int(11) NOT NULL,
  `matric_tmarks` int(11) NOT NULL,
  `matric_per` float NOT NULL,
  `inter_omarks` int(11) NOT NULL,
  `inter_tmarks` int(11) NOT NULL,
  `inter_per` float NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `matric_omarks`, `matric_tmarks`, `matric_per`, `inter_omarks`, `inter_tmarks`, `inter_per`, `loginid`) VALUES
(55, 900, 1050, 85.7143, 900, 1100, 81.8182, 80),
(56, 20, 1000, 2, 500, 1200, 41.6667, 70);

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `email`, `username`, `password`) VALUES
(66, 'aaa', 'aaa', '4124bc0a9335c27f086f24ba207a4912'),
(67, 'qw', 'qw', '006d2143154327a64d86a264aea225f3'),
(68, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(69, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(70, 'abubakar435@gmail.com', '12345', '827ccb0eea8a706c4c34a16891f84e7b'),
(71, 'aaaa', 'aa', '81dc9bdb52d04dc20036dbd8313ed055'),
(72, 'bb', 'bbb', '202cb962ac59075b964b07152d234b70'),
(73, 'm', 'm', '6512bd43d9caa6e02c990b0a82652dca'),
(74, 'q', 'q', 'c4ca4238a0b923820dcc509a6f75849b'),
(75, 'm', '11', 'd41d8cd98f00b204e9800998ecf8427e'),
(76, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(77, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(78, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(79, 'joj', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(80, 'ikhlaq.ahmad@gmail.com', 'aaa', '6512bd43d9caa6e02c990b0a82652dca'),
(81, 'abubakar@gmail.com', 'bakar', '202cb962ac59075b964b07152d234b70'),
(82, 'ikhlaq.ahmad@yahoo.com', '11', '6512bd43d9caa6e02c990b0a82652dca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkey` (`loginid`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `fkey` FOREIGN KEY (`loginid`) REFERENCES `slogin` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
