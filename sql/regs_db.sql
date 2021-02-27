-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2021 at 07:07 AM
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
-- Database: `regs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(10) NOT NULL,
  `name` varchar(199) NOT NULL DEFAULT 'NOT NULL',
  `dept_code` varchar(199) NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `name`, `dept_code`) VALUES
(1, 'Finance ', 'FIN'),
(2, 'Finance ', 'FIN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(199) NOT NULL DEFAULT 'NOT NULL',
  `address` longtext NOT NULL,
  `birth_day` varchar(199) NOT NULL DEFAULT 'NOT NULL',
  `gender` varchar(10) NOT NULL DEFAULT 'NOT NULL',
  `email` varchar(199) NOT NULL,
  `phone_number` varchar(199) NOT NULL,
  `isadmin` int(10) DEFAULT NULL,
  `department` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `date_of_joing` varchar(199) NOT NULL DEFAULT 'NOT NULL',
  `employee_salary` varchar(199) NOT NULL,
  `password` varchar(199) NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_name`, `address`, `birth_day`, `gender`, `email`, `phone_number`, `isadmin`, `department`, `date_of_joing`, `employee_salary`, `password`) VALUES
(13, 'kkhk', 'khjklkl', '', 'M', '', '', 1, '', '', '', '14'),
(14, '', '', '', '', '', '', 1, '', '', '', '14'),
(15, '', '', '', '', '', '', 1, '', '', '', '14'),
(16, '', '', '', '', '', '', 1, '', '', '', '14'),
(17, '', '', '', '', '', '', 1, '', '', '', '14'),
(18, '', '', '', '', '', '', 1, '', '', '', '14'),
(19, 'roni', 'boni', '2021-02-14', '', '', '', 1, '', '', '', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;