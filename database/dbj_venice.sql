-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 04:01 PM
-- Server version: 5.7.39
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbj_venice`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunci_jawaban`
--

CREATE TABLE `kunci_jawaban` (
  `no` int(11) NOT NULL,
  `jawaban` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunci_jawaban`
--

INSERT INTO `kunci_jawaban` (`no`, `jawaban`) VALUES
(1, 'd'),
(2, 'a'),
(3, 'd'),
(4, 'c'),
(5, 'c'),
(6, 'a'),
(7, 'b'),
(8, 'c'),
(9, 'b'),
(10, 'd'),
(11, 'b'),
(12, 'a'),
(13, 'd'),
(14, 'a'),
(15, 'd'),
(16, 'c'),
(17, 'a'),
(18, 'b'),
(19, 'c'),
(20, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `score` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `user_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`score`, `time`, `user_name`) VALUES
(1, '2023-12-14 09:33:40', 'coba@gmail.com'),
(9, '2023-12-14 09:41:34', 'coba@gmail.com'),
(7, '2023-12-14 10:41:03', 'coba@gmail.com'),
(4, '2023-12-19 22:53:21', 'coba@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `email`, `password`) VALUES
('coba', 'coba@gmail.com', 'coba1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunci_jawaban`
--
ALTER TABLE `kunci_jawaban`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
