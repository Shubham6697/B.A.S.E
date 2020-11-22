-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 05:50 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `category` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `brand_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(20) CHARACTER SET latin1 NOT NULL,
  `product_image1` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_image2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_image3` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_image4` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `date`, `brand_name`, `price`, `description`, `address`, `mobile`, `product_image1`, `product_image2`, `product_image3`, `product_image4`) VALUES
(8, 'bike', 'Vehicle', '2019-12-03 20:44:48', 'honda', 15000, 'old bike', 'House Number 726by1 Subhash Nagar', '7084605957', 'bike 1.jpg', 'bike 2.jfif', '', ''),
(9, 'cycle', 'Vehicle', '2019-12-03 20:45:09', 'hero', 3000, 'like new', 'cantt, varanasi', '9453105967', 'cycle 1.jpg', 'cycle 2.jfif', '', ''),
(10, 'scooty', 'Vehicle', '2019-12-03 20:45:23', 'honda', 15000, 'vary good condition', 'House Number 726by1 Subhash Nagar', '7998565113', 'scooty 1.jpg', 'scooty.jfif', '', ''),
(11, 'ANCI C', 'Stationary', '2019-12-03 20:46:00', '', 100, 'new book', 'bhabha hostel', '9876543210', 'book1.jpg', 'book1.jpg', '', ''),
(14, 'Almirah', 'Furniture', '2019-12-04 11:20:02', 'neelkamal', 5000, 'not used too much', 'Dalmia Hostel,BHU', '8809306667', 'almirah.jpg', 'chair.jpg', '', ''),
(15, 'Mobile Phone', 'Mobile and Accessories', '2019-12-04 12:20:04', 'Samsung J2', 7000, '', 'Dalmia Hostel,BHU', '8809306667', 'j2.1.jpg', 'j2.jpg', '', ''),
(16, 'kettle', 'Electronics and Appliances', '2019-12-04 12:22:12', 'milton', 500, 'good in condition', 'J.C. Bose Hostel,BHU', '9873512567', 'kettle.jpg', 'kettle1.jpg', 'kettle2.jpg', ''),
(17, 'football', 'Sports', '2019-12-04 12:11:17', 'nivia', 600, 'okay.playable.', 'Aiyer hostel,BHU', '9873512567', 'football.jpg', 'football1.jpg', '', ''),
(18, 't-shirt', 'Fashion', '2019-12-04 12:16:58', 'bewakoof', 250, 'washable.', 'broacha hostel,BHU', '8723255912', 't-shirt.jpg', 't-shirt1.jpg', '', ''),
(19, 'laptop', 'Electronics and Appliances', '2019-12-04 12:25:47', 'dell', 50000, 'ram-8gb;', 'Matreyi Hostel,BHU', '9834668542', 'laptop.jpg', 'laptop1.jpg', '', ''),
(20, 'pgrome', 'Homes', '2019-12-04 12:29:55', '', 12000, 'residental.', 'hyderabad gate', '8798765645', 'house.jpg', 'house1.jpg', '', ''),
(21, 'bucket', 'Others', '2019-12-04 12:32:34', 'neelkamal', 200, '', 'bhabha hostel', '7667766776', 'bucket.jpg', 'bucket1.jpg', '', ''),
(22, 'dustbin', 'Others', '2019-12-04 12:33:53', '', 250, '', 'Lanka', '2323232323', 'dustbin.jpg', 'dustbin1.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
