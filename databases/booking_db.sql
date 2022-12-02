-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 11:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pdate` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `ddate` varchar(255) NOT NULL,
  `daddress` varchar(255) NOT NULL,
  `services` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `first`, `last`, `number`, `email`, `pdate`, `paddress`, `ddate`, `daddress`, `services`) VALUES
(1, 'Rizz', 'Lopez', 918289457, 'Rizz@gmail.com', '2022-02-14T15:04', 'Lipa City', '2022-12-08T15:04', 'Lipa City', 'Dry Cleaning,Hand Wash'),
(2, 'Shasha', 'Lopez', 918289457, 'Rizz@gmail.com', '2022-02-14T15:04', 'Batangas city', '2022-12-08T15:04', 'Lipa City', 'Dry Cleaning,Hand Wash,Iron/Press'),
(3, 'Mr Beean', 'Banban', 918289457, 'mococ@gmail.com', '2022-02-14T15:04', 'Batangas city', '2022-12-08T15:04', 'Lipa City', 'Dry Cleaning'),
(4, 'Larea', 'Kinis', 918289457, 'mococ@gmail.com', '2022-02-14T15:04', 'batangas city', '2022-12-08T15:04', 'Lipa City', 'Dry Cleaning'),
(5, 'Lebron ', 'James', 946238732, 'HEHE@gmail.com', '2022-12-05T15:04', 'Soro Soro', '2022-11-29T03:04', 'Lipa City', 'Iron/Press'),
(6, 'Howard', 'Dogshit', 912345334, 'dogodog@gmail.com', '2022-12-02T09:01', 'Alangilan', '2022-12-08T16:00', 'Alangilan', 'Wash Dry & Fold,Dry Cleaning'),
(7, 'Airapot', 'Venerable', 918289457, 'ajvenerable@gmail.com', '2022-12-04T10:30', 'Masin Norte ', '2022-12-08T15:30', 'Masin Norte', 'Wash Dry & Fold,Dry Cleaning,Hand Wash,Iron/Press'),
(8, 'Lebron ', 'James', 947272922, 'Leberon@gmail.com', 'Dec-5-2022 7:30 AM', 'Malabanban Norte', 'Dec-7-2022 10:30 AM', 'Malabanban Norte', 'Dry cleaning'),
(9, 'Kevin', 'Durant', 948232323, 'KevinMorant@gmail.com', '2022-12-03T01:02', 'Mahabang parang', '2022-12-10T14:03', 'Mahabang parang', 'Wash Dry & Fold,Dry Cleaning');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
