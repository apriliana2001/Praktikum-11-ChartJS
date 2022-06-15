-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 07:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_covid`
--

CREATE TABLE `tb_covid` (
  `no` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `total_cases` int(20) NOT NULL,
  `new_cases` int(20) NOT NULL,
  `total_deaths` int(20) NOT NULL,
  `new_deaths` int(20) NOT NULL,
  `total_rcv` int(20) NOT NULL,
  `new_rcv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_covid`
--

INSERT INTO `tb_covid` (`no`, `country`, `total_cases`, `new_cases`, `total_deaths`, `new_deaths`, `total_rcv`, `new_rcv`) VALUES
(1, 'India', 43185049, 3714, 524708, 7, 42633365, 2513),
(2, 'S. Korea', 18168708, 5022, 24279, 21, 17865591, 28085),
(3, 'Turkey', 15072747, 0, 98965, 0, 14971256, 0),
(4, 'Vietnam', 10726045, 806, 43081, 1, 9513981, 9026),
(5, 'Japan', 8945784, 16130, 30752, 17, 8711289, 24361),
(6, 'Iran', 7232790, 59, 141332, 1, 7056206, 713),
(7, 'Indonesia', 6057142, 342, 156622, 7, 5897022, 270),
(8, 'Malaysia', 4516319, 1330, 35690, 2, 4458999, 1881),
(9, 'Thailand', 4468955, 2162, 30201, 27, 4409248, 4879),
(10, 'Israel', 4154566, 2580, 10864, 0, 4124933, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_covid`
--
ALTER TABLE `tb_covid`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_covid`
--
ALTER TABLE `tb_covid`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
