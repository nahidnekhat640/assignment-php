-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 10:15 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dera_resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(45) NOT NULL,
  `chair` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `date`, `time`, `chair`) VALUES
(12, 'FAHIMA', 'FAHIMA@GMAIL.COM', '+93777089067', '2022-07-09', '12:30am', '4'),
(13, 'SHAFIQA', 'SHAFIQA@GMAIL.COM', '+93777089067', '2022-07-09', '12:00am', '3'),
(14, 'NAHID', 'NAHID@GMAIL.COM', '+93777089067', '2022-07-09', '1:30am', '1'),
(15, 'FARIBURZE', 'FARUBURZE@GMAIL.COM', '+93777089067', '2022-07-09', '12:30am', '4'),
(16, 'FAHIMA', 'FAHIMA@GMAIL.COM', '+93777089067', '2022-07-30', '12:00am', '2'),
(17, 'SURAYA', 'SURAYA@GMAIL.COM', '+93777089067', '2022-07-09', '1:30am', '5'),
(18, 'FARWA JAN', 'FARWA@GMAIL.COM', '0790723436', '2022-07-13', '1:30am', '3'),
(19, 'Ali', 'ali@gmail.com', '000000000000', '2022-07-13', '12:30am', '3'),
(20, 'farhad', 'fariburza@gmail.com', '099999999', '2022-07-23', '12:00am', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
