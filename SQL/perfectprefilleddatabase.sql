-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 09:37 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hilton`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` longtext NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Somraj', '1234'),
(3, 'Jagriti', '1234'),
(4, 'Anwesha', '1234'),
(5, 'Souradip', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `roomtype` longtext NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `noofdays` bigint(20) NOT NULL,
  `payment` bigint(20) NOT NULL,
  `paymethod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `contact`, `address`, `roomtype`, `checkin`, `checkout`, `noofdays`, `payment`, `paymethod`) VALUES
(5, 'Anushka Ghosh', 'anushka@gmail.com', 9966542385, 'Kolkata', 'Superior', '2019-06-15', '2019-06-30', 15, 217500, 'Pay Now'),
(6, 'Biswajit Mukherjee', 'biswa08@gmail.com', 9865451236, 'Howrah', 'Deluxe', '2019-06-16', '2019-06-30', 14, 147000, 'Pay Now'),
(7, 'Somraj Mukherjee', 'iamsomraj@gmail.com', 7856451236, 'Sodepur', 'Saver', '2019-06-16', '2019-06-25', 9, 49500, 'Pay Now'),
(14, 'Anwesha Mitra ', 'anwesha@gmail.com', 9845632178, 'Sinthi', 'Superior', '2019-06-15', '2019-06-30', 15, 217500, 'Pay Now'),
(15, 'Jagriti Chourasia', 'jagriti47@gmail.com', 7865321469, 'Malda', 'Deluxe', '2019-06-16', '2019-06-30', 14, 147000, 'Pay Now'),
(16, 'Souradip Ganguly', 'sourafcb@gmail.com', 8563214756, 'Bally', 'Saver', '2019-06-16', '2019-06-25', 9, 49500, 'Pay Now');

-- --------------------------------------------------------

--
-- Table structure for table `completebooking`
--

CREATE TABLE `completebooking` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `roomtype` longtext NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `noofdays` bigint(20) NOT NULL,
  `payment` bigint(20) NOT NULL,
  `paymethod` varchar(20) NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `completebooking`
--

INSERT INTO `completebooking` (`id`, `name`, `email`, `contact`, `address`, `roomtype`, `checkin`, `checkout`, `noofdays`, `payment`, `paymethod`, `customerid`) VALUES
(3, 'Rohan Dutta', 'rohan@gmail.com', 9845632147, 'Airport', 'Semi Deluxe', '2019-06-29', '2019-07-26', 27, 202500, 'Pay Now', 6),
(4, 'Monalisa Mondal', 'mona2013@gmail.com', 9756852642, 'Amta', 'Deluxe', '2019-08-11', '2019-08-24', 13, 136500, 'Pay Later', 7),
(5, 'Indrajit Bhattacharya', 'indra@gmail.com', 5698753122, 'Maniktala', 'Deluxe', '2019-08-23', '2019-08-31', 8, 84000, 'Pay Later', 5),
(6, 'Arka Chowdhury', 'arka@gmail.com', 6587546321, 'Khirpai', 'Superior', '2019-06-16', '2019-06-29', 13, 188500, 'Pay Later', 8);

-- --------------------------------------------------------

--
-- Table structure for table `confirmbooking`
--

CREATE TABLE `confirmbooking` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `roomtype` longtext NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `noofdays` bigint(20) NOT NULL,
  `payment` bigint(20) NOT NULL,
  `paymethod` varchar(20) NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmbooking`
--

INSERT INTO `confirmbooking` (`id`, `name`, `email`, `contact`, `address`, `roomtype`, `checkin`, `checkout`, `noofdays`, `payment`, `paymethod`, `customerid`) VALUES
(9, 'Saptarshi Ghosh', 'saptarshi@gmail.com', 2564953612, 'Dumdum', 'Semi Deluxe', '2019-06-16', '2019-06-18', 2, 15000, 'Pay Now', 9),
(10, 'Chandrim Niogy', 'chiku@gmail.com', 2364589612, 'Shyamnagar', 'Semi Deluxe', '2019-07-19', '2019-07-31', 12, 90000, 'Pay Now', 8);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roomtype` longtext NOT NULL,
  `total` int(11) NOT NULL,
  `vacant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomtype`, `total`, `vacant`) VALUES
(1, 'Superior', 5, 5),
(2, 'Deluxe', 5, 5),
(3, 'Semi Deluxe', 5, 3),
(4, 'Saver', 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completebooking`
--
ALTER TABLE `completebooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmbooking`
--
ALTER TABLE `confirmbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `completebooking`
--
ALTER TABLE `completebooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `confirmbooking`
--
ALTER TABLE `confirmbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
