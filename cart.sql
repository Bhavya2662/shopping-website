-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 04:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Lehenga', '3423', 1455.00, 'images/wt2.jpg'),
(2, 'Girl\'s Top', '3424', 455.00, 'images/gt2.jpeg'),
(3, 'Kid\'s Shoes', '444', 1000.00, 'images/kf2.jpeg'),
(4, 'Sandel', '333', 500.00, 'images/wf2.jpg'),
(5, 'Men Shoes', '334', 550.00, 'images/mf3.webp'),
(6, 'Mens Shirt', '335', 1000.00, 'images/mt1.jpg'),
(7, 'Kurti', '3434', 1000.00, 'images/wk2.jpg'),
(8, 'Lehenga', '3435', 600.00, 'images/wt1.jpg'),
(9, 'Shirt', '1234', 555.00, 'images/s12.webp'),
(10, 'Shoe', '1235', 1000.00, 'images/mf1.jpeg'),
(11, 'Watch', '1236', 455.00, 'images/ma1.jpg'),
(12, 'Bottomwear', '1237', 600.00, 'images/d3.jpg'),
(13, 'Kurti', '1238', 700.00, 'images/wk1.webp'),
(14, 'Gown', '1239', 900.00, 'images/wt5.jpg'),
(15, 'Sandel', '1240', 3000.00, 'images/wf1.jpg'),
(16, 'Saree', '1241', 4000.00, 'images/ws4.jpg'),
(17, 'Frok', '1242', 555.00, 'images/kt3.jpg'),
(18, 'Frok', '1243', 755.00, 'images/kt1.jpg'),
(19, 'Shoes', '1244', 1000.00, 'images/kf1.webp'),
(20, 'Sandel', '1245', 800.00, 'images/kf4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
