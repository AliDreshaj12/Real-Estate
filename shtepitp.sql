-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 05:41 PM
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
-- Table structure for table `shtepitp`
--

CREATE TABLE `shtepitp` (
  `ID` int(11) NOT NULL,
  `Pershkrimi` varchar(255) NOT NULL,
  `Qmimi` varchar(255) NOT NULL,
  `Emri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shtepitp`
--

INSERT INTO `shtepitp` (`ID`, `Pershkrimi`, `Qmimi`, `Emri`) VALUES
(3, '113m2', '2000000', 'AlkoGroup'),
(4, '114m2', '200000', 'Alko-Group'),
(5, '90m2', '80000$', 'Alko_-Group');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shtepitp`
--
ALTER TABLE `shtepitp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shtepitp`
--
ALTER TABLE `shtepitp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
