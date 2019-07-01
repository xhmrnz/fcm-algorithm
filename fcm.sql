-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 07:31 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bildom`
--

CREATE TABLE `bildom` (
  `id` int(12) NOT NULL,
  `u1` varchar(12) NOT NULL,
  `u2` varchar(12) NOT NULL,
  `kj_sum` varchar(64) NOT NULL,
  `lj_sum` varchar(64) NOT NULL,
  `on_sum` varchar(64) NOT NULL,
  `pn_sum` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bildom`
--

INSERT INTO `bildom` (`id`, `u1`, `u2`, `kj_sum`, `lj_sum`, `on_sum`, `pn_sum`) VALUES
(1, '0.4', '0.6', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(2, '0.5', '0.5', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(3, '0.3', '0.7', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(4, '0.2', '0.8', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(5, '0.4', '0.6', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(6, '0.6', '0.4', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(7, '0.4', '0.6', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(8, '0.5', '0.5', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(9, '0.7', '0.3', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(10, '0.2', '0.8', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(11, '0.4', '0.6', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(12, '0.5', '0.5', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(13, '0.6', '0.4', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(14, '0.1', '0.9', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(15, '0.7', '0.3', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(16, '0.2', '0.8', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(17, '0.6', '0.4', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(18, '0.5', '0.5', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(19, '0.9', '0.1', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(20, '0.3', '0.7', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(21, '0.8', '0.2', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(22, '0.5', '0.5', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(23, '0.4', '0.6', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(24, '0.8', '0.2', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(25, '0.2', '0.8', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(26, '0.6', '0.4', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(27, '0.9', '0.1', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(28, '0.3', '0.7', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(29, '0.4', '0.6', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(30, '0.7', '0.3', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(31, '0.5', '0.5', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(32, '0.8', '0.2', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012'),
(33, '0.1', '0.9', '0.22420684486635', '89.44608418686', '0.74961702813835', '89.851832218012');

-- --------------------------------------------------------

--
-- Table structure for table `cluster`
--

CREATE TABLE `cluster` (
  `id` int(12) NOT NULL,
  `hasil` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cluster`
--

INSERT INTO `cluster` (`id`, `hasil`) VALUES
(1, 'c1'),
(4, 'c1'),
(7, 'c1'),
(8, 'c1'),
(9, 'c1'),
(14, 'c1'),
(1, 'c1'),
(4, 'c1'),
(7, 'c1'),
(8, 'c1'),
(9, 'c1'),
(14, 'c1'),
(1, 'c1'),
(4, 'c1'),
(7, 'c1'),
(8, 'c1'),
(9, 'c1'),
(14, 'c1');

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `id` int(12) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `x1` varchar(64) NOT NULL,
  `x2` varchar(64) NOT NULL,
  `c` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`id`, `nama`, `x1`, `x2`, `c`) VALUES
(1, 'Sarip', '0', '93.19', 'c1'),
(2, 'Udin', '0', '87.19', 'c2'),
(3, 'Yesayas', '0', '85.71', 'c2'),
(4, 'Desnam', '2', '97.62', 'c1'),
(5, 'Ucok', '0', '86.67', 'c2'),
(6, 'Stepen', '0', '87.71', 'c2'),
(7, 'Laila', '2', '96.10', 'c1'),
(8, 'Jae ', '2', '97.52', 'c1'),
(9, 'Nudin', '0', '94.47', 'c1'),
(10, 'Mad Andriani', '0', '81.81', 'c2'),
(11, 'Muhammad Nur Ikhwan Soheh', '0', '89.76', 'c2'),
(12, 'Muhammad Hikmatullah', '0', '80.98', 'c2'),
(13, 'Mohamad Pengki', '0', '81.81', 'c2'),
(14, 'Mukmin', '1', '91.00', 'c1');

-- --------------------------------------------------------

--
-- Table structure for table `datatest`
--

CREATE TABLE `datatest` (
  `id` int(12) NOT NULL,
  `nama` varchar(12) NOT NULL,
  `x1` int(12) NOT NULL,
  `x2` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datatest`
--

INSERT INTO `datatest` (`id`, `nama`, `x1`, `x2`) VALUES
(1, 'Sarip', 0, '93.19'),
(2, 'Udin', 0, '87.19'),
(3, 'Yesayas', 0, '85.71'),
(4, 'Desnam', 2, '97.62'),
(5, 'Ucok', 0, '86.67'),
(6, 'Stepen', 0, '87.71'),
(7, 'Laila', 2, '96.10'),
(8, 'Jae ', 2, '97.52'),
(9, 'Nudin', 0, '94.47'),
(10, 'Mad Andriani', 0, '81.81'),
(11, 'Muhammad Nur', 0, '89.76'),
(12, 'Muhammad Hik', 0, '80.98'),
(13, 'Mohamad Peng', 0, '81.81'),
(14, 'Mukmin', 1, '91.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bildom`
--
ALTER TABLE `bildom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datatest`
--
ALTER TABLE `datatest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bildom`
--
ALTER TABLE `bildom`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `datatest`
--
ALTER TABLE `datatest`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
