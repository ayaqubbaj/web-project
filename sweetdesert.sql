-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweetdesert`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `sweet-id` int(11) NOT NULL,
  `user-id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crepes`
--

CREATE TABLE `crepes` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crepes`
--

INSERT INTO `crepes` (`id`, `image`, `name`, `price`) VALUES
(1, 'crepe2.jpg', 'Banana Crepe', 20),
(2, 'crepecakes.jpg', 'Crepes Cake', 35),
(3, 'chocolatepwithmarshmellow.jpg', 'Marshmallow chocolate crepe', 22),
(4, 'sweet%20berry%20crepes%20with%20cream.jpg', 'Sweet Berry & Creme crepe', 21),
(5, 'creperolls.jpg', 'Crepe Rolls', 15),
(6, 'corn%20crepe.jpg', 'Corn Crepe', 21);

-- --------------------------------------------------------

--
-- Table structure for table `sweets`
--

CREATE TABLE `sweets` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sweets`
--

INSERT INTO `sweets` (`id`, `type`, `image`, `name`, `price`) VALUES
(1, 'waffle', 'cinnamonwaffleswithberries.jpg', 'Cinnamon & strawberries waffle', 23),
(2, 'crepe', 'crepe2.jpg', 'Banana Crepe', 20),
(3, 'waffle', 'wafflewithbnana.jpg', 'Banana Waffle', 20),
(4, 'waffle', 'wafflenutella.jpg', 'Nutella Waffle', 17),
(5, 'waffle', 'icecreamewaffle.jpg', 'Ice cream Waffle', 21),
(6, 'waffle', 'chocoletfudge%20wuffle.jpg', 'Chocolate fudge Waffle', 25),
(7, 'crepe', 'crepecakes.jpg', 'Crepes Cake', 35),
(8, 'crepe', 'chocolatepwithmarshmellow.jpg', 'Marshmallow chocolate crepe', 22),
(9, 'crepe', 'sweet%20berry%20crepes%20with%20cream.jpg', 'Sweet Berry & Cream crepe', 21),
(10, 'waffle', 'taiyaki.jpg', 'Taiyaki Japanese waffles', 24),
(11, 'crepe', 'creperolls.jpg', 'Crepe Rolls', 15),
(12, 'crepe', 'corn%20crepe.jpg', 'Corn Crepe', 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'haneenSaymeh', 'hannensaymeh@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'itsmalak', 'malakhejab@gmail.com', '275b8e42ab424f0f132d31f6629904e14de9c2e8');

-- --------------------------------------------------------

--
-- Table structure for table `waffles`
--

CREATE TABLE `waffles` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waffles`
--

INSERT INTO `waffles` (`id`, `image`, `name`, `price`) VALUES
(1, 'cinnamonwaffleswithberries.jpg', 'Cinnamon & strawberries waffle', 23),
(2, 'wafflewithbnana.jpg', 'Banana Waffle', 20),
(3, 'wafflenutella.jpg', 'Nutella Waffle', 17),
(4, 'icecreamewaffle.jpg', 'Ice cream Waffle', 21),
(5, 'chocoletfudge%20wuffle.jpg', 'Chocolate fudge Waffle', 25),
(6, 'taiyaki.jpg', 'Taiyaki Japanese waffles', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ucartid` (`user-id`),
  ADD KEY `usweet` (`sweet-id`);

--
-- Indexes for table `crepes`
--
ALTER TABLE `crepes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sweets`
--
ALTER TABLE `sweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `waffles`
--
ALTER TABLE `waffles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crepes`
--
ALTER TABLE `crepes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sweets`
--
ALTER TABLE `sweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `waffles`
--
ALTER TABLE `waffles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `ucartid` FOREIGN KEY (`user-id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usweet` FOREIGN KEY (`sweet-id`) REFERENCES `sweets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
