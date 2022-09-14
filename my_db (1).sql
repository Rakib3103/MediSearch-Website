-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 06:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone Number` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custId`, `Name`, `Address`, `Phone Number`, `created`) VALUES
(1, 'Rahim', 'Mirpur', '01668099068', NULL),
(2, 'Karim', 'Mohakhali', '01587900639', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `username` varchar(100) NOT NULL,
  `Address` varchar(11) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Payment` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `Address`, `Phone Number`, `Payment`) VALUES
('User-2', 'Mirpur', 15555, 30),
('User-1', 'Banani', 188904854, 30),
('User-3', 'Gulshan', 15565250, 10),
('User-4', 'Mohakhali', 15464456, 36),
('User-5', 'Mirpur', 15465, 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`) VALUES
(1, 'Shahriar', '$2y$10$O3.1VOg1v1MQococXkQsKuwXoK/0SEFaZQ1lRaJAPQbCGGn5gloS6', '2022-08-12 02:20:57', 'sh@gmail.com'),
(7, 'Adib', '$2y$10$O3.1VOg1v1MQococXkQsKuwXoK/0SEFaZQ1lRaJAPQbCGGn5gloS6', '2022-08-28 02:06:53', 'sho@gmail.com'),
(8, 'Prima', '$2y$10$XoosbfaBQTrGauWLpt2ZhOVjxZFhJzr45SdE890BErduQ.vmPZKg.', '2022-08-28 09:38:29', ''),
(9, 'Rakib', '$2y$10$5WR7YcyovU1YucRngoz69.kFDUMR/bUGlZCcopg6T0R335mwk7r6O', '2022-08-28 10:28:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `your order`
--

CREATE TABLE `your order` (
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `your order`
--

INSERT INTO `your order` (`Name`, `Address`, `Phone Number`, `Payment`) VALUES
('Adib Hossain', 'Mirpur', 1214644646, 255);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `custId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
