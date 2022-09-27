-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 08:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `eproducts`
--

CREATE TABLE `eproducts` (
  `id` int(30) NOT NULL,
  `products_name` varchar(30) NOT NULL,
  `products_description` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `photo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eproducts`
--

INSERT INTO `eproducts` (`id`, `products_name`, `products_description`, `quantity`, `photo`) VALUES
(7, 'aa', 'aaaaaaaaaaaaaaaaa', 3, '7.jpg'),
(8, 'laptop', 'llllllllllllllllllllllllllllll', 5, '8.jpg'),
(11, 'laptop', 'llllllllllllllllllllllllllllll', 4, '11.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eproducts`
--
ALTER TABLE `eproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eproducts`
--
ALTER TABLE `eproducts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
