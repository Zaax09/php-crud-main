-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 01:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formation_php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `fichtali1`
--

CREATE TABLE `fichtali1` (
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `department` varchar(30) NOT NULL,
  `salary` decimal(30,0) NOT NULL,
  `function` varchar(30) NOT NULL,
  `fotoUpload` varchar(77) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fichtali1`
--

INSERT INTO `fichtali1` (`FirstName`, `LastName`, `date`, `department`, `salary`, `function`, `fotoUpload`, `id`) VALUES
('mohamed', 'bensliman', '2022-02-01', 'SoliCode1', '920344', 'larashe city', 'daw logo.png', 7),
('Hameza', 'Rejraj', '2022-02-10', 'SoliCode', '92333', 'larashe city', 'logoooo.png', 8),
('Zakaria', 'Fichtali', '2022-03-03', 'SoliCodee', '920307', 'larashe', 'bird.png', 10),
('Simo', 'bensliman', '2021-11-16', 'SoliCode1', '920400', 'fullstack', 'bk1.jpg', 11),
('ziko', 'Fichtali', '2022-02-11', 'SoliCode1', '920344', 'fullstack', 'cat.png', 12),
('Hameza', 'Anime', '2022-02-17', 'SoliCode', '90000', 'fullstack', 'logo.jpg', 13),
('Med', 'Shloute', '2022-02-17', 'SoliCode', '920300', 'larashe', 'logo png.png', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fichtali1`
--
ALTER TABLE `fichtali1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fichtali1`
--
ALTER TABLE `fichtali1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
