-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 09:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(200) NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `address` text DEFAULT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `s_question` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `first_name`, `last_name`, `address`, `contact_no`, `photo`, `s_question`) VALUES
('aayush@gmail.com', 'aayush123', 'aayush', 'barfa', NULL, '9876543210', NULL, 'red'),
('jeejamunnahero@gmail.com', '1234567', 'Shubham', 'Gupta', NULL, '7084605957', NULL, ''),
('pade@gmail.com', '1234567', 'rud', 'pade', NULL, '7084605957', NULL, ''),
('pankajshah.spy@gmail.com', '1234567', 'Shubham', 'Gupta', NULL, '7084605957', NULL, ''),
('pankcadjshaah.spy@gmail.com', '111111', 'Shubham', 'Gupta', NULL, '07084f0557', NULL, ''),
('pankcadjshah.spy@gmail.com', '777777', 'Shubham', 'Gupta', NULL, '07084f0557', NULL, ''),
('pankcajshah.spy@gmail.com', '1234567', 'Shubham', 'Gupta', NULL, '0708405957', NULL, ''),
('ra@gmail.com', '1234567', 'ram', 'jais', NULL, '9453105967', NULL, ''),
('ram1@gmail.com', 'shubham', 'Shubham', 'Gupta', NULL, '7084605957', NULL, 'doggy'),
('ram@gmail.com', '1234567', 'Shubham', 'Gupta', NULL, '7084605957', NULL, ''),
('sg3477628@gmail.com', '1234567890', 'Shubham', 'Gupta', NULL, '7084605957', NULL, ''),
('shs@gamil.com', '1234567', 'Shubham', 'Gupta', NULL, '7084605957', NULL, ''),
('shubham@gmail.com', '1234567890', 'Shubham', 'Gupta', NULL, '7084605957', NULL, 'doggy'),
('vivekkumar989892@gmail.com', 'ekma1234', 'vivek', 'kumar', NULL, '9801456566', NULL, 'dudu'),
('yaseen3@hotmail.com', '1234567890', 'Shubham', 'Gupta', NULL, '7084605957', NULL, ''),
('yaseen43@hotmail.com', '123456789', 'Shubham', 'Gupta', NULL, '7084605957', NULL, ''),
('yasfeen3@hotmail.com', 'qwerty', 'Shubham', 'Gupta', NULL, '0784605957', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
