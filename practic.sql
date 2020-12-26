-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 01:44 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practic`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `vender` varchar(50) NOT NULL,
  `feature` int(2) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `prod_image` varchar(250) NOT NULL,
  `usernamep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `vender`, `feature`, `size`, `price`, `prod_image`, `usernamep`) VALUES
(1, 'SSc english Book', 'IT is the best book.', 'book', 1, 'XL', 550, 'jk1.png', 'infojitendra@gmail.com'),
(3, 'The Best English Book', 'This book is the best for English preparation. Please buy it and read.', 'book', 1, 'XLL', 800, 'jk.png', 'infojitendra6@gmail.com'),
(26, 'The best Audi car in market', 'The best Audi car in market. It is one of the best car in market . It all feature is good.', 'audi', 1, 'S', 599999, '74716-gk3.png', 'infojitendra6@gmail.com'),
(27, 'The best Volvo car in market.', 'The best Volvo car in market. It is one of the best Volvo in market . It all feature is good.', 'Volvo', 1, 'S', 999999, '67174-quiz2.jpg', 'jitukumar@gmail.com'),
(28, 'The best Audi car in market.', 'The best Audi car in market. It is one of the best car in market . It all feature is good.', 'audi', 1, 'S', 9000000, '63137-quiz2.jpg', 'jitukumar@gmail.com'),
(29, 'The best Audi car in market', 'The best Audi car in market. It is one of the best car in market . It all feature is good.', 'audi', 1, 'S', 999999, '35285-quiz2.jpg', 'infojitendra6@gmail.com'),
(30, 'The best Opel car in market. ', 'The best Opel car in market. It is one of the best Opel in market . It all feature is good.', 'opel', 0, 'XXL', 0, '36909-quiz2.jpg', 'infojitendra6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resistration`
--

CREATE TABLE `resistration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` int(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resistration`
--

INSERT INTO `resistration` (`id`, `firstname`, `lastname`, `email`, `mobileno`, `password`) VALUES
(1, 'jitendra', 'kumar', 'infojitendra6@gmail.com', 705063191, '12345678'),
(3, 'jitendra', 'kumar', 'amanroadway@gmail.com', 12345678, '123456'),
(10, 'jitendra', 'kumar', 'infojitukumar28@gmail.com', 705063191, 'jitu@123'),
(11, 'jitu', 'Raj', 'jitukumar@gmail.com', 756399987, 'jitu@`12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resistration`
--
ALTER TABLE `resistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `resistration`
--
ALTER TABLE `resistration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
