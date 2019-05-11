-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 01:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utmldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` text,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Md Imran Hosen', 'imran@gmail.com', 'This is First Subject Title', 'sdfsf fdsfsdf'),
(2, 'Md Imran Hosen', 'imranhosen@gmail.com', 'Hellow World', 'Hello Mark How are you ?');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_phone`, `user_address`, `user_password`) VALUES
(1, 'Md Imran Hosen', 'imranhosen5912@gmail.com', '01983912645', 'Kushtia, Bangladesh', '12345678'),
(2, 'Md Imran Hosen', 'imranhosen5912@gmail.com', '01983912645', 'Kushtia, Bangladesh', '94b8cea57c49a3007225a0c70c475450'),
(3, 'Md Imran Hosen', 'imranhosen5912@gmail.com', '01983912645', 'Kushtia, Bangladesh', '3dbe00a167653a1aaee01d93e77e730e'),
(4, 'Md Imran Hosen', 'imranhosen5912@gmail.com', '01983912645', 'Kushtia, Bangladesh', 'ef800207a3648c7c1ef3e9fe544f17f0'),
(5, 'Md Imran Hosen', 'imranhosen5912@gmail.com', '01983912645', 'Kushtia, Bangladesh', 'ef800207a3648c7c1ef3e9fe544f17f0'),
(6, 'Md Imran Hosen', 'imranhosen591222@gmail.com', '01983912645', 'Kushtia, Bangladesh', '4bbde07660e5eff90873642cfae9a8dd'),
(7, 'Md Imran Hosen', 'imran@gmail.com', '09187382872', 'Kushtia, Bangladesh', '3dbe00a167653a1aaee01d93e77e730e'),
(8, 'salifar Rahman', 'salifar@gmail.com', '0298493872', 'Kushtia', '3dbe00a167653a1aaee01d93e77e730e'),
(9, 'Md Imran Hosen', 'imranhosen12@gmail.com', '01965837190', 'Kushtia', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
