-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2022 at 12:42 PM
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
(3, 'jswabiswakarma@gmail.com', 'three', '2022-12-06', '09:08:00', 'Ksakxcj'),
(4, 'todo@gmail.com', 'Add`', '2022-12-30', '05:00:00', 'Add on hover zoom and shjow timer countdown'),
(5, 'todo@gmail.com', 'design', '2022-12-30', '17:00:00', 'grid items must look beautiful '),
(6, 'todo@gmail.com', 'countdown', '2022-12-30', '17:00:00', 'figure out the java script date function and create countdown timer out of it\r\n'),
(7, 'todo@gmail.com', 'samde', '2022-12-30', '17:00:00', 'Every thing must be same size for grid items'),
(8, 'todo@gmail.com', 'center ', '2022-12-30', '17:00:00', 'center grid container'),
(9, 'todo@gmail.com', 'readme', '2022-12-30', '22:00:00', 'create readme file with screen shots and update all to github'),
(10, 'todo@gmail.com', 'label `', '2022-12-30', '17:00:00', 'change colours of the grid according to its priority');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`) VALUES
(1, 'joasocac askcacnnk', 'jswabiswakarma@outlook.com', '456789'),
(2, 'Joshua Biswakarma', 'jswabiswakarma@gmail.com', '123456'),
(3, 'joshsa acskack', 'biacbac@gmail.com', '456789'),
(4, 'Todo ok', 'todo@gmail.com', '123456');

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
