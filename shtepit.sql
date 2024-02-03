-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 11:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shtepit`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`) VALUES
(2, 0x74682e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `numbers` bigint(20) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `firstName`, `lastName`, `Email`, `numbers`, `notes`) VALUES
(8, 'Arianit', 'Kadrijaj', 'arianitkadrijajj@hotmail.com', 49139889, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `roli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`username`, `email`, `psw`, `roli`) VALUES
('arianit', 'arianitkadrijaj@gmail.com', '12345678', 'admin'),
('arianitk', 'arianitkadrijaj@gmail.com', '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `shtepitp`
--

CREATE TABLE `shtepitp` (
  `ID` int(11) NOT NULL,
  `Pershkrimi` varchar(255) NOT NULL,
  `Qmimi` varchar(255) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shtepitp`
--

INSERT INTO `shtepitp` (`ID`, `Pershkrimi`, `Qmimi`, `Emri`, `img`) VALUES
(6, '114m2', '2000000$', 'AlkoGroup', 0x3030395f363431355f4441484c4f4e4547415f524f41445f3239303538385f3532343637302e77656270),
(7, '115m2', '5000000$', 'Alko-Group', 0x6172697a6f6e612d6c75787572792d686f6d652d6275696c6465722e6a7067),
(8, '150m2', '10000000$', 'AlkoGroup', 0x696d616765726561646572202831292e77656270),
(13, '120m2', '2000000', 'AlkoGropu', 0x696d616765726561646572202831292e77656270),
(14, '120m2', '2000000', 'AlkoGropu', 0x696d616765726561646572202833292e77656270),
(15, '120m2', '2000000', 'AlkoGropu', 0x6172697a6f6e612d6c75787572792d686f6d652d6275696c6465722e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shtepitp`
--
ALTER TABLE `shtepitp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shtepitp`
--
ALTER TABLE `shtepitp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
