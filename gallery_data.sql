-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 09:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_db`
--

CREATE TABLE `image_db` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_db`
--

INSERT INTO `image_db` (`id`, `email`, `image_link`) VALUES
(1, 'jishanta@gmail.com', 'images/1img.jpg'),
(2, 'jishanta@gmail.com', 'images/2img.jpg'),
(3, 'jishanta@gmail.com', 'images/3img.jpg'),
(4, 'jishantacharya@gmail.com', 'images/4img.jpg'),
(5, 'jishanta@gmail.com', 'images/5img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `password`, `insta`, `twitter`, `facebook`) VALUES
(1, 'Sheetal.Acharya', 'jishanta@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Sheetal Prashant Acharya', 'sdfsd', 'sfd'),
(2, 'Sheetal.Acharya', 'jishantacharya@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Sheetal Prashant Acharya', 'sdfsdf', 'sdfsdfs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_db`
--
ALTER TABLE `image_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_db`
--
ALTER TABLE `image_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
