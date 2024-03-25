-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 06:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bake haven`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(50) NOT NULL,
  `productType` text NOT NULL,
  `flavor` text NOT NULL,
  `deadline` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `deliveryOption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productType`, `flavor`, `deadline`, `email`, `deliveryOption`) VALUES
(1, 'banana', 'orange', '2024-03-26', 'julie@gmail.com', 'banana'),
(2, 'cakes', 'Stawberry', '2024-03-26', 'julie@gmail.com', 'Self Pickup'),
(3, 'cakes', 'vanilla', '2024-03-26', 'sngwa@gmail.com', 'Home Delivery'),
(4, 'capati', 'vanilla', '2024-03-29', 'julie@gmail.com', 'Others'),
(5, 'capati', 'none', '2024-03-26', 'sngwa@gmail.com', 'Self Pickup'),
(6, 'capati', 'none', '2024-03-26', 'julie@gmail.com', 'Home Delivery'),
(7, 'cakes', 'vanilla', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(8, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(9, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(10, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(11, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(12, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(13, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(14, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(15, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(16, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(17, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(18, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(19, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(20, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(21, 'ibiraha', 'Chocolate', '2024-03-26', 'julienne@gmail.com', 'Self Pickup'),
(22, 'cakes', 'vanilla', '2024-03-26', 'julie@gmail.com', 'Self Pickup'),
(23, 'cakes', 'vanilla', '2024-03-27', 'julie@gmail.com', 'Home Delivery'),
(24, 'ibiraha', 'none', '2024-03-26', 'julie@gmail.com', 'Self Pickup'),
(25, 'capati', 'none', '2024-03-25', 'julie@gmail.com', 'Self Pickup'),
(26, 'capati', 'none', '2024-03-28', 'julie@gmail.com', 'Self Pickup');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signupform`
--

CREATE TABLE `signupform` (
  `id` int(40) NOT NULL,
  `full_name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `password` varchar(87) NOT NULL,
  `gender` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupform`
--

INSERT INTO `signupform` (`id`, `full_name`, `email`, `address`, `password`, `gender`) VALUES
(4, 'julie', 'julie@gmail.com', '34567', '827ccb0eea8a706c4c34a16891f84e7b', 'on'),
(5, 'sangwa briton', 'sngwa@gmail.com', 'kk200st', 'c605246aaec5f39e388f039a1e76e31c', 'on'),
(6, 'julie', 'julie@', '34567', '202cb962ac59075b964b07152d234b70', 'on'),
(7, 'sangwa briton', 'julie@gmail.com', '34567', '202cb962ac59075b964b07152d234b70', 'on'),
(8, 'julie', 'julie@gmail.com', 'kk200st', '827ccb0eea8a706c4c34a16891f84e7b', 'on'),
(9, 'julie', 'julienne@gmail.com', '34567', '202cb962ac59075b964b07152d234b70', 'on'),
(10, 'julie', 'julienne@gmail.com', '34567', '202cb962ac59075b964b07152d234b70', 'on'),
(11, 'sangwa briton', 'sngwa@gmail.com', '34567', '202cb962ac59075b964b07152d234b70', 'on'),
(12, 'sangwa briton', 'sngwa@gmail.com', 'kk200st', '202cb962ac59075b964b07152d234b70', 'on'),
(13, 'julie', 'julie@gmail.com', '34567', '202cb962ac59075b964b07152d234b70', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signupform`
--
ALTER TABLE `signupform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signupform`
--
ALTER TABLE `signupform`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
