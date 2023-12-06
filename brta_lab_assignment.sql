-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 01:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brta_lab_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('Md Eyashin', 'eyashin35-712@diu.edu.bd', '$2y$10$Hr1veD7W8cRLUonDw6AZ1ur0REAu65dzSgh7gSyKP1/SywVEx.Oi.');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `name` varchar(255) NOT NULL,
  `nid_no` varchar(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `vehicle_chassis_no` varchar(255) NOT NULL,
  `present_addr` varchar(255) NOT NULL,
  `permanent_addr` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `nid_softcopy` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`name`, `nid_no`, `vehicle_no`, `vehicle_chassis_no`, `present_addr`, `permanent_addr`, `profile_pic`, `nid_softcopy`, `id`, `email`) VALUES
('Md Asif', '38724687264', '3424243433', '5654', 'Saver, Dhaka', 'Saver, Dhaka', './uploads/asif@gmail.com.jpeg', './uploads/asif@gmail.com.pdf', 10, 'asif@gmail.com'),
('Md Sagor', '1234534564', '12343', '4565', 'Ashulia, Dhaka', 'Ashulia, Dhaka', './uploads/eyashin35-712@gmail.com.jpg', './uploads/eyashin35-712@gmail.com.pdf', 5, 'eyashin35-712@gmail.com'),
('Abdulla Al Jaber', '167235762562', '52342121', '2322', 'Saver, Dhaka', 'Saver, Dhaka', './uploads/jaber@gmail.com.jpg', './uploads/jaber@gmail.com.pdf', 6, 'jaber@gmail.com'),
('Md Jaker', '7638726432723', '46723647273', '3837', 'Saver, Dhaka', 'Saver, Dhaka', './uploads/jaker@gmail.com.jpeg', './uploads/jaker@gmail.com.pdf', 7, 'jaker@gmail.com'),
('Md Sagor', '84728472874687', '87478682764', '3434', 'Saver, Dhaka', 'Saver, Dhaka', './uploads/sagor@gmail.com.jpeg', './uploads/sagor@gmail.com.pdf', 9, 'sagor@gmail.com'),
('Md Shamim', '738468732633', '36435532', '3424', 'Saver, Dhaka', 'Saver, Dhaka', './uploads/shamim@gmail.com.jpeg', './uploads/shamim@gmail.com.pdf', 8, 'shamim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`email`) VALUES
('eyashin35-712@gmail.com'),
('abc@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`email`),
  ADD KEY `INDEX` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
