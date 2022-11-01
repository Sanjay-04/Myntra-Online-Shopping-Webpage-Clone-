-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 08:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myntra`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Customer_Name` varchar(20) NOT NULL,
  `Levis` varchar(100) NOT NULL,
  `Peter England` varchar(100) NOT NULL,
  `Indian Terrain` varchar(100) NOT NULL,
  `Flying Machine` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_home`
--

CREATE TABLE `feedback_home` (
  `Customer_Name` varchar(20) NOT NULL,
  `Art_Decor` varchar(100) NOT NULL,
  `Lamps_Lighting` varchar(100) NOT NULL,
  `Kitchen_Dining` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_kids`
--

CREATE TABLE `feedback_kids` (
  `Customer_Name` varchar(25) NOT NULL,
  `Ginni_Jony` varchar(100) NOT NULL,
  `Cherokee` varchar(100) NOT NULL,
  `Pepe_Jeans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_women`
--

CREATE TABLE `feedback_women` (
  `Customer_Name` varchar(50) NOT NULL,
  `Levis` varchar(150) NOT NULL,
  `Westside` varchar(150) NOT NULL,
  `H&M` varchar(150) NOT NULL,
  `GUCCI` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `name` text NOT NULL,
  `dname` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `phoneno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`name`, `dname`, `email`, `address`, `phoneno`) VALUES
('Ajay', 'Tharun', 'ajaytharun@thirumalai.com', 'CIT 348', '9677302305'),
('HariKuThan', 'AN', 'harikuthandash@gmail.com', 'class 301, 302 M.Sc DCS, DS', '9677302301');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`Email`, `Password`) VALUES
('saala@gmail.com', 'tharun');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
