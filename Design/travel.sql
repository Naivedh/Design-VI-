-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 07:44 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_package`
--

CREATE TABLE `create_package` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `name` text NOT NULL,
  `number` int(11) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(11) NOT NULL,
  `places` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_package`
--

INSERT INTO `create_package` (`id`, `user_name`, `name`, `number`, `address`, `city`, `state`, `zip`, `places`) VALUES
(1, 'hacker', 'Naivedh', 0, 'XYZ, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC ABC', 'VVV', 'Gujarat', 2313, 'a:3:{i:0;s:32:\"Cellular Jail National Memorial \";i:1;s:16:\"Radhanagar Beach\";i:2;s:21:\"Corbynâ€™s Cove Beach\";}'),
(2, 'hacker', 'Naivedh', 0, 'XYZ, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC, ABC ABC', 'VVV', 'Gujarat', 2313, 'a:2:{i:0;s:14:\"Elephant Falls\";i:1;s:10:\"Umiam Lake\";}');

-- --------------------------------------------------------

--
-- Table structure for table `inbuilt`
--

CREATE TABLE `inbuilt` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `name` text NOT NULL,
  `number` int(11) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(11) NOT NULL,
  `package` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbuilt`
--

INSERT INTO `inbuilt` (`id`, `user_name`, `name`, `number`, `address`, `city`, `state`, `zip`, `package`) VALUES
(1, 'hacker', 'ABC', 2, 'hell HEll2', 'jlnkm', 'Gujarat', 3900, 'Andaman Tour Package'),
(2, 'hacker', 'Hacker', 0, 'cdsxz, ABC, ABC ABC', 'VVV', 'Gujarat', 2313, 'Shillong Guwahati Package');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_email`, `user_password`, `type`) VALUES
(1, 'NS', 'naivedhshah1999@gmail.com    ', '123456789', ''),
(2, 'shah_naivedh', 'naivedhshah1999@gmail.com', '1248', ''),
(3, 'hacker', 'hacker@gmail.com', 'hacker', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_package`
--
ALTER TABLE `create_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbuilt`
--
ALTER TABLE `inbuilt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_package`
--
ALTER TABLE `create_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inbuilt`
--
ALTER TABLE `inbuilt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
