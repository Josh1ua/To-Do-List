-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2022 at 06:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `To-Do_List`
--

-- --------------------------------------------------------

--
-- Table structure for table `Tasks`
--

CREATE TABLE `Tasks` (
  `taid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Task_Name` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Tasks`
--

INSERT INTO `Tasks` (`taid`, `email`, `Task_Name`, `Date`, `Time`, `Description`) VALUES
(1, 'jswabiswakarma@gmail.com', 'one', '2022-12-22', '06:05:00', 'JSosajcbiac'),
(2, 'jswabiswakarma@gmail.com', 'two', '2022-12-12', '06:05:00', 'Biswaaera'),
(3, 'jswabiswakarma@gmail.com', 'three', '2022-12-06', '09:08:00', 'Ksakxcj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact no` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `contact no`, `Address`) VALUES
(1, 'joasocac askcacnnk', 'jswabiswakarma@outlook.com', '456789', 'acac', ''),
(2, 'Joshua Biswakarma', 'jswabiswakarma@gmail.com', '123456', 'lkasfnalc', ''),
(3, 'joshsa acskack', 'biacbac@gmail.com', '456789', 'akxcbjac', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Tasks`
--
ALTER TABLE `Tasks`
  ADD PRIMARY KEY (`taid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);
COMMIT;
