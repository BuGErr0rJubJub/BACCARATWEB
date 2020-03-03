-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 08:39 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baba`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `credit` int(11) NOT NULL DEFAULT '0',
  `create_by` varchar(255) NOT NULL,
  `create_date` int(11) NOT NULL DEFAULT '0',
  `code_use` int(11) NOT NULL DEFAULT '0',
  `use_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fml`
--

CREATE TABLE `fml` (
  `id` int(11) NOT NULL,
  `fm` varchar(255) NOT NULL,
  `an` varchar(255) NOT NULL,
  `idea` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fml`
--

INSERT INTO `fml` (`id`, `fm`, `an`, `idea`) VALUES
(43, 'PPBB', 'P', 1),
(44, 'PBBP', 'P', 1),
(45, 'BBPP', 'B', 1),
(46, 'PPPP', 'P', 1),
(47, 'PBBT', 'P', 1),
(48, 'BBTP', 'P', 1),
(49, 'BTPB', 'P', 1),
(50, 'TPBP', 'B', 1),
(51, 'PBPP', 'B', 1),
(52, 'BPPP', 'P', 1),
(53, 'BBBP', 'B', 1),
(54, 'BBPB', 'P', 1),
(55, 'BPBP', 'B', 1),
(56, 'PBPB', 'P', 1),
(57, 'PBPT', 'B', 1),
(58, 'BPTB', 'P', 1),
(59, 'PTBT', 'P', 1),
(60, 'BTBT', 'B', 1),
(61, 'BTBB', 'B', 1),
(62, 'TBBP', 'P', 1),
(63, 'BPPT', 'B', 1),
(64, 'PTPP', 'P', 1),
(65, 'TPPB', 'B', 1),
(66, 'PPBP', 'P', 1),
(67, 'PTPP', 'P', 1),
(68, 'TPPP', 'P', 1),
(69, 'BBBB', 'B', 1),
(70, 'BPPB', 'B', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fml_list`
--

CREATE TABLE `fml_list` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fml_list`
--

INSERT INTO `fml_list` (`id`, `time`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `statistic`
--

CREATE TABLE `statistic` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `room` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `fm` varchar(255) NOT NULL,
  `an` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statistic`
--

INSERT INTO `statistic` (`id`, `user`, `room`, `date`, `fm`, `an`, `result`) VALUES
(1, 'Adminsahacker', 1, '12-02-2020', 'bppbpbp', 'b', 'cancel'),
(2, 'JubJub', 10, '23-02-2020', 'pppbbbbptbpbbbppbpppbp', 'p', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `credit` varchar(255) DEFAULT '',
  `ip` varchar(255) NOT NULL,
  `reg` int(11) NOT NULL,
  `lobby` int(11) NOT NULL DEFAULT '0',
  `online` int(11) NOT NULL,
  `rank` varchar(255) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `credit`, `ip`, `reg`, `lobby`, `online`, `rank`) VALUES
(1, 'JubJub', 'JubJub', 'testza@gmail.com', 9944, '', 1581436981, 1, 1582443597, 'admin'),
(2, 'jubjub1', 'jubjub1', 'alonez@gmail.com', 10000000, '', 1582304347, 1, 0, 'member'),
(3, 'jubjub2', 'jubjub2', 'bugerror@gmail.com', 10000000, '', 1582304395, 0, 0, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fml`
--
ALTER TABLE `fml`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fml_list`
--
ALTER TABLE `fml_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fml`
--
ALTER TABLE `fml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `fml_list`
--
ALTER TABLE `fml_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1355;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
