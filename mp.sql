-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 06:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoiment`
--

CREATE TABLE `appoiment` (
  `aid` int(11) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `expertise` varchar(10) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fees` int(100) NOT NULL,
  `did` int(10) NOT NULL,
  `pid` int(11) NOT NULL,
  `date_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `expertise` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fees` int(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `address`, `contact`, `email`, `expertise`, `status`, `gender`, `fees`, `password`) VALUES
(1, 'Dr.Suvidh Turkhia', 'Ahemdabad', '814848631', 'suvidh@gmail.com', 'Neuro', 'verified', 'm', 500, 'suvidh'),
(2, 'Dr.Kartik kachhia', 'Vaso', '814848631', 'kartik@gmail.com', 'Bone', 'verified', 'm', 600, 'kartik'),
(3, 'Dr.Nivid Patel', 'Anand', '7874767520', 'nivid@gmail.com', 'Pyscian', 'verified', 'm', 250, 'nivid'),
(4, 'Dr.Jiten_Thakkar', 'gandhinagar', '123456789', 'jiten@gmail.com', 'Eye', 'verified', 'm', 300, 'jiten'),
(5, 'Dr.Nimesh_Devani', 'Surat', '8239933880', 'nimesh@gmail.com', 'Gynologist', 'verified', 'm', 500, 'nimesh'),
(6, 'Dr.Parthiv Patel', 'Nadiad', '1236585', 'parthiv@gmail.com', 'Heart', 'verified', 'm', 550, 'pp'),
(7, 'Dr.Mayank Patel', 'Surat', '15649842', 'mayank@gmail.com', 'Heart', 'verified', 'm', 350, 'mp'),
(8, 'Dr.Naresh Shah', 'Nadiad', '81412563', 'ns@gmail.com', 'Skin', 'pending', 'm', 250, 'ns');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `name`, `age`, `mobile`, `city`, `email`, `password`) VALUES
(1, 'kartik A Kachhia', 21, '81418486', 'vaso', 'kartik@gmail.com', 'kk'),
(2, 'Nimesh Devani', 22, '8238193880', 'Surat', 'nimesh@gmail.com', 'nd'),
(3, 'Nivid Patel', 23, '123654789', 'Anand', 'nivid@gmail.com', 'np');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoiment`
--
ALTER TABLE `appoiment`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `fk_doc` (`did`),
  ADD KEY `fk_pid` (`pid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoiment`
--
ALTER TABLE `appoiment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoiment`
--
ALTER TABLE `appoiment`
  ADD CONSTRAINT `fk_doc` FOREIGN KEY (`did`) REFERENCES `doctor` (`did`),
  ADD CONSTRAINT `fk_pid` FOREIGN KEY (`pid`) REFERENCES `patient` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
