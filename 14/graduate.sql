-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 08:02 AM
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
-- Table structure for table `graduate`
--

CREATE TABLE `graduate` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fathers_name` varchar(30) NOT NULL,
  `mothers_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `ssc_roll` varchar(30) NOT NULL,
  `ssc_reg` varchar(30) NOT NULL,
  `ssc_board` varchar(30) NOT NULL,
  `hsc_roll` varchar(30) NOT NULL,
  `hsc_reg` varchar(30) NOT NULL,
  `hsc_board` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graduate`
--

INSERT INTO `graduate` (`id`, `fname`, `lname`, `fathers_name`, `mothers_name`, `email`, `birthdate`, `ssc_roll`, `ssc_reg`, `ssc_board`, `hsc_roll`, `hsc_reg`, `hsc_board`, `photo`) VALUES
(15, 'Md Rabiul', 'islam', 'Md Delowar Hossin', 'Rabya Sultana', 'rabiulislam12360@gmail.com', '2022-06-16', '1111111111', '11111111111111', 'Rajshahi', '2222222', '2222222222222222', 'Rajshahi', '15.jpg'),
(16, 'Delowar Hossin', 'Doe', 'Md Delowar', 'Rabya Sultana', 'rabiulislam12362@gmail.com', '2022-05-30', '196338', '654545356', 'Rajshahi', '207999', '89787656', 'Dhaka', '16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graduate`
--
ALTER TABLE `graduate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graduate`
--
ALTER TABLE `graduate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
