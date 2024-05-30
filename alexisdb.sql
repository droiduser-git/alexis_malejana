-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 10:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alexisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_bg_image` varchar(255) NOT NULL,
  `home_name` varchar(255) NOT NULL,
  `home_subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `profile_title` varchar(255) NOT NULL,
  `profile_address` varchar(255) NOT NULL,
  `profile_email` varchar(255) NOT NULL,
  `profile_mobile` varchar(255) NOT NULL,
  `profile_portfolio` varchar(255) NOT NULL,
  `profile_college` varchar(255) NOT NULL,
  `profile_availability` varchar(255) NOT NULL,
  `profile_facts` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `profile_map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `profile_name`, `profile_title`, `profile_address`, `profile_email`, `profile_mobile`, `profile_portfolio`, `profile_college`, `profile_availability`, `profile_facts`, `profile_image`, `profile_map`) VALUES
(1, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'hero-bg.jpg', 'google_map'),
(2, 'Alexis Mlalejana', 'Graphic Designer', 'San Mateo Rizal', 'malejanaalexis61@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'hero-bg.jpg', 'google_map'),
(3, 'Alexis Mlalejana', 'designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', '', 'google_map'),
(4, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', '', 'google_map'),
(5, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'hero-bg.jpg', 'google_map'),
(6, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'hero-bg.jpg', 'google'),
(7, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'hero-bg.jpg', 'google'),
(8, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'nimda@123.png', 'google'),
(9, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'nimda@123.png', 'google'),
(10, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', '', 'google'),
(11, 'Alexis Mlalejana', 'Design', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', '', 'google'),
(12, 'Alexis Mlalejana', 'Design', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'assets/img/uploads/person-holding-disposable-cup-coffee.jpg', 'google'),
(13, 'Alexis Mlalejana', 'Design', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'assets/img/uploads/person-holding-disposable-cup-coffee.jpg', 'google'),
(14, 'Alexis Mlalejana', 'Design', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', '', 'facts', 'assets/img/uploads/person-holding-disposable-cup-coffee.jpg', 'google'),
(15, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'Arrayperson-holding-disposable-cup-coffee.jpg', 'google'),
(16, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'person-holding-disposable-cup-coffee.jpg', 'google'),
(17, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', '', 'google'),
(18, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'assets/img/uploads/coffee-cup-coffee-shop.jpg', 'google'),
(19, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'assets/img/uploads/coffee-cup-coffee-shop.jpg', 'google'),
(20, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'assets/img/uploadscoffee-cup-coffee-shop.jpg', 'google'),
(21, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'assets/img/uploads/coffee-cup-coffee-shop.jpg', 'google'),
(22, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'assets/img/uploads/coffee-cup-coffee-shop.jpg', 'google'),
(23, 'Alexis Mlalejana', 'designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'assets/img/uploads/coffee-cup-coffee-shop.jpg/', 'google'),
(24, 'Alexis Mlalejana', 'Designer', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', '.assets/img/uploads/coffee-cup-coffee-shop.jpg.', 'google'),
(25, 'Alexis Mlalejana', 'Design', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'coffee-cup-coffee-shop.jpg', 'google'),
(26, 'Alexis Mlalejana', 'Design', 'San Mateo Rizal', 'admin@gmail.com', '09357837195', 'https://www.behance.net/malejanaalexis', 'ICCT College', 'Full Time', 'facts', 'coffee-cup-coffee-shop.jpg', 'google');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_email`, `user_password`) VALUES
(1, 'root', '', ''),
(2, 'root', '', ''),
(3, 'admin', '', 'pwd12345'),
(4, 'admin', '', '$2y$10$Ex9DFbe7f9DOZ2HmIBYWFOaDVSTVGejD3X4sgfduKrayl4nQUFDQO'),
(5, 'admin', '', '$2y$10$lKMUhtvgHaAquiIDaY1kw.uuv1cynSBEAgnlSrg7LesKG6vcRzr8W'),
(6, 'admin2', '', '$2y$10$fCXrR0L4PsnL.yt1RpS6WOrcgoAB1QC.x1OPyvaRH175WLtNHC6om');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
