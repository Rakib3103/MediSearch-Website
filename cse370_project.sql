-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 10:52 PM
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
-- Database: `cse370_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `a_email` varchar(20) NOT NULL,
  `a_p_number` int(11) NOT NULL,
  `a_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `password`, `a_email`, `a_p_number`, `a_address`) VALUES
(365647, 'admin1', 1234, 'admin1@gmail.com', 826386237, 'Barisal');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_p_number` int(11) NOT NULL,
  `c_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `password`, `c_email`, `c_p_number`, `c_address`) VALUES
(36, 'delta', '8456', 'delta@gmail.com', 550639, 'Dhanmondi'),
(2935, 'Tom', 'nametom', 'tom@gmail.com', 204415, 'Mirpur'),
(345245, 'alpha', '1234', 'alpha@gmail.com', 1782939436, 'Mirpur'),
(425825, 'gama', '7623', 'gama@gmail.com', 505599, 'Mohakhali'),
(443685, 'beta', '6345', 'beta@gmail.com', 2147483647, 'ctg');

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
-- Table structure for table `dman`
--

CREATE TABLE `dman` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `password` int(11) NOT NULL,
  `d_email` varchar(20) NOT NULL,
  `d_p_number` int(11) NOT NULL,
  `d_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dman`
--

INSERT INTO `dman` (`d_id`, `d_name`, `password`, `d_email`, `d_p_number`, `d_address`) VALUES
(919716, 'dman1', 5467, 'dman1@gmail.com', 982489273, 'Mohakhali');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_name` varchar(20) NOT NULL,
  `price_per_pack` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_name`, `price_per_pack`) VALUES
('Biltin', 150),
('Comet', 70),
('Coralcal-Dx', 150),
('Monas', 250),
('Omidon', 30),
('Pantonix', 100),
('Reelife', 80),
('Rivortril', 80),
('Rositor', 200),
('Thyrox', 70);

-- --------------------------------------------------------

--
-- Table structure for table `medicine-order list`
--

CREATE TABLE `medicine-order list` (
  `order_no` int(11) NOT NULL,
  `med_name` varchar(11) NOT NULL,
  `price_per_pack` int(11) NOT NULL,
  `pharm_id` int(11) NOT NULL,
  `med-quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine-order list`
--

INSERT INTO `medicine-order list` (`order_no`, `med_name`, `price_per_pack`, `pharm_id`, `med-quantity`) VALUES
(0, 'histasin', 150, 5, 1),
(1, 'losectil', 30, 3, 2),
(2, 'Napa', 60, 6, 2),
(3, 'monas', 150, 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_order_list`
--

CREATE TABLE `medicine_order_list` (
  `order_no` int(11) NOT NULL,
  `med_name` varchar(11) NOT NULL,
  `price_per_pack` int(11) NOT NULL,
  `pharm_id` int(11) NOT NULL,
  `med_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_order_list`
--

INSERT INTO `medicine_order_list` (`order_no`, `med_name`, `price_per_pack`, `pharm_id`, `med_quantity`) VALUES
(0, 'histasin', 150, 5, 1),
(1, 'losectil', 30, 3, 2),
(2, 'Napa', 60, 6, 2),
(3, 'monas', 150, 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_no` int(11) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `store_id` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_no`, `customer_id`, `store_id`, `total_price`, `order_date`) VALUES
(0, 110, 220, 150, '2022-08-26'),
(1, 111, 221, 30, '2022-08-27'),
(2, 112, 222, 60, '2022-08-28'),
(3, 113, 223, 150, '2022-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `order_payment`
--

CREATE TABLE `order_payment` (
  `order_no` int(11) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `payment_method` char(1) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_payment`
--

INSERT INTO `order_payment` (`order_no`, `customer_name`, `customer_address`, `email`, `phone`, `payment_method`, `discount`) VALUES
(0, 'rakibbbbb', 'mirpur', 'rakib@gmail.com', 1236547894, 'c', 10),
(1, 'adib', 'banani', 'adib@yahoo.com', 156478963, 'o', 6),
(2, 'prima', 'gulshan', 'prima@yahoo.com', 2147483647, 'c', 12),
(4, 'Adib Hossain', '156/A,east ulon,west', 'adibmoinul@gmail.com', 2147483647, 'o', 0),
(5, 'Rositor', '156/A,east ulon,west', 'adiinul@gmail.com', 2147483647, 'o', 0),
(6, 'Him', 'Mirpur', 'himokay@gmail.com', 2147483647, 'o', 0),
(7, 'abcd', 'jatrabari', 'abcd@gmail.com', 123456432, 'c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `payment_method` char(1) NOT NULL,
  `discount` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`payment_method`, `discount`, `order_no`, `grand_total`) VALUES
('c', 10, 0, 0),
('o', 6, 1, 0),
('c', 12, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `pharm_id` int(11) NOT NULL,
  `pharm_name` varchar(30) NOT NULL,
  `pharm_location` varchar(50) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pharm_id`, `pharm_name`, `pharm_location`, `Location`, `Time`) VALUES
(1, 'Lazz Pharma', 'Mirpur 6', 'Mirpur', '8am-12am'),
(2, 'Popular Pharmacy', 'Shankar, West Dhanmondi', 'Dhanmondi', '24hrs'),
(3, 'Medicine Plus', 'Tajmahal road', 'Mohammadpur', '8am-12am'),
(4, 'Dhaka Drugs', 'TB Gate', 'Mohakhali', '8am-12am'),
(5, 'M/S Globe Pharmacy', ' Gulshan Shopping Center', 'Gulshan', '8am-12am'),
(6, 'Medilife Global', 'Mirpur-13', 'Mirpur', '8am-12am'),
(7, 'BMCH Pharmacy', '14/A, Dhanmondi', 'Dhanmondi', '8am-12am'),
(8, 'Medicare Pharma', 'Chinu mia road', 'Mohammadpur', '24hrs'),
(9, 'Islam Pharmacy', 'Mohakhali, South Para', 'Mohakhali', '8am-12am'),
(10, 'Gulshan Pharmacy', 'Kalachandpur, Gulshan-2', 'Gulshan', '24hrs'),
(11, 'RT Pharmacy', '63, 1 Rd No. 4, Pallabi', 'Mirpur', '24hrs'),
(12, 'Leed Pharama', 'Tajmahal road', 'Mohammadpur', '24hrs'),
(13, 'Desh Pharma', 'Wireless gate', 'Mohakhali', '24hrs');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_sells`
--

CREATE TABLE `pharmacy_sells` (
  `Pharm_id` int(11) NOT NULL,
  `med_name` varchar(30) NOT NULL,
  `Quantity_per_pack` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy_sells`
--

INSERT INTO `pharmacy_sells` (`Pharm_id`, `med_name`, `Quantity_per_pack`) VALUES
(0, '', ''),
(3, 'Monas', '10'),
(3, 'Reelife', '9'),
(3, 'Rivortril', '25'),
(3, 'Thyrox', '21'),
(4, 'Coralcal-Dx', '10'),
(4, 'Thyrox', '25'),
(5, 'abc', '2'),
(5, 'Pantonix', '15'),
(5, 'Thyrox', '10'),
(6, 'Rositor', '11'),
(7, 'Biltin', '7'),
(8, 'Monas', '10'),
(8, 'Pantonix', '13'),
(8, 'Rivortril', '11'),
(9, 'Thyrox', '10'),
(10, 'Biltin', '7'),
(10, 'Comet', '15'),
(10, 'Coralcal-Dx', '9'),
(11, 'Rositor', '12');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custId`);

--
-- Indexes for table `dman`
--
ALTER TABLE `dman`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_name`);

--
-- Indexes for table `medicine-order list`
--
ALTER TABLE `medicine-order list`
  ADD PRIMARY KEY (`order_no`,`med_name`);

--
-- Indexes for table `medicine_order_list`
--
ALTER TABLE `medicine_order_list`
  ADD PRIMARY KEY (`order_no`,`med_name`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `order_payment`
--
ALTER TABLE `order_payment`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pharm_id`);

--
-- Indexes for table `pharmacy_sells`
--
ALTER TABLE `pharmacy_sells`
  ADD PRIMARY KEY (`Pharm_id`,`med_name`);

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
-- AUTO_INCREMENT for table `dman`
--
ALTER TABLE `dman`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=919717;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_payment`
--
ALTER TABLE `order_payment`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `pharm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
