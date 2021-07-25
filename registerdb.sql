-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 06:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `firstname`, `lastname`, `birthday`, `added_at`, `address`, `gender`) VALUES
(2, 'Kazimaro', 'Kinuko', '2021-14-06', '0000-00-00 00:00:00', '145 brgy. Obrero, makati philippines', 'Male'),
(3, 'Miya', 'Lesley', '10/11/2006', '0000-00-00 00:00:00', '146 brgy. Obrero, makati philippines', 'Female'),
(4, 'Kevin', 'Durant', '2021-14-07', '0000-00-00 00:00:00', '147 brgy. Obrero, makati philippines', 'Male'),
(5, 'Azry', 'Kiluas', '10/12/2006', '0000-00-00 00:00:00', '148 brgy. Obrero, makati philippines', 'Female'),
(6, 'Azikarox', 'Kinamoto', '2021-14-08', '0000-00-00 00:00:00', '149 Brgy. Obrero, Makati Philippines', 'Male'),
(7, 'Zusi', 'Knama', '10/13/2006', '0000-00-00 00:00:00', '150 brgy. Obrero, makati philippines', 'Female'),
(8, 'Mnairo', 'Azuka', '2021-14-09', '0000-00-00 00:00:00', '151 brgy. Obrero, makati philippines', 'Male'),
(9, 'Kazuru', 'Minako', '10/14/2006', '0000-00-00 00:00:00', '152 brgy. Obrero, makati philippines', 'Female'),
(10, 'Edie', 'Hearn', '2021-14-10', '0000-00-00 00:00:00', '153 brgy. Obrero, makati philippines', 'Male'),
(11, 'ysabel', 'Daza', '10/15/2006', '0000-00-00 00:00:00', '154 brgy. Obrero, makati philippines', 'Female'),
(12, 'Yuma', 'Yutianco', '2021-14-11', '0000-00-00 00:00:00', '155 brgy. Obrero, makati philippines', 'Male'),
(13, 'Jing', 'Kakashi', '10/16/2006', '0000-00-00 00:00:00', '156 brgy. Obrero, makati philippines', 'Female'),
(14, 'Camell', 'Prats', '2021-14-12', '0000-00-00 00:00:00', '157 Brgy. Obrero, Makati Philippines', 'Female'),
(15, 'Yuw', 'Plia', '10/17/2006', '0000-00-00 00:00:00', '158 brgy. Obrero, makati philippines', 'Female'),
(16, 'Dan', 'Zerano', '2021-14-13', '0000-00-00 00:00:00', '159 brgy. Obrero, makati philippines', 'Male'),
(17, 'Ami', 'Kinso', '10/18/2006', '0000-00-00 00:00:00', '160 brgy. Obrero, makati philippines', 'Female'),
(18, 'Yumamoto', 'Hzaol', '2021-14-14', '0000-00-00 00:00:00', '161 brgy. Obrero, makati philippines', 'Male'),
(19, 'Leo', 'Park', '10/19/2006', '0000-00-00 00:00:00', '162 Brgy. Obrero, Makati Philippines', 'Male'),
(20, 'Anne', 'Curtis', '2021-14-15', '0000-00-00 00:00:00', '163 Brgy. Obrero, Makati Philippines', 'Female'),
(21, 'Alvin', 'Blademir', '10/20/2006', '0000-00-00 00:00:00', '164 brgy. Obrero, makati philippines', 'Female'),
(25, 'Vinz', 'Ygbuhay', '1980-30-12', '2021-07-25 20:27:48', 'Manila Philippines', 'Male'),
(26, 'Miya', 'Lesle', '1950-30-12', '2021-07-25 20:29:10', 'Obrero Manila', 'Male'),
(27, 'Ira', 'Magda', '2001-20-11', '2021-07-25 20:29:30', 'Manila Philippines', 'Female'),
(28, 'Maverick', 'Adamsons', '1978-31-20', '2021-07-25 20:58:53', 'Californi, USA', 'Male'),
(30, 'Miyagi', 'Kasimaro', '1717-11-11', '2021-07-25 23:20:14', 'Montario, Canada', 'Male'),
(31, 'Wesha', 'Smith', '1950-30-12', '2021-07-25 23:25:16', 'Hamorawon Calbayog City', 'Female'),
(33, 'Tests', 'Test1', '1980-30-12', '2021-07-26 00:25:36', 'Calbayog City, Samar', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `access`) VALUES
(1, 'admin', 'ygbuhayv@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin'),
(2, 'user', 'gg@gmail.com', '202cb962ac59075b964b07152d234b70', 'User'),
(3, 'mechell', 'mechell@gmail.com', '202cb962ac59075b964b07152d234b70', 'User'),
(4, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin'),
(5, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'User'),
(6, 'guko', 'guko@yahoo.com', '202cb962ac59075b964b07152d234b70', 'Admin'),
(8, 'gloc9', 'gloc9@yahoo.com', '202cb962ac59075b964b07152d234b70', 'User'),
(9, 'test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin'),
(10, 'test', 'test1@gmail.com', '202cb962ac59075b964b07152d234b70', ' '),
(11, 'test', 'test2@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
