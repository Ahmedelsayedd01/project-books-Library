-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 03:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `bookDetails` longtext NOT NULL,
  `image_book` varchar(255) NOT NULL,
  `book_audio` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookName`, `bookDetails`, `image_book`, `book_audio`, `author`) VALUES
(27, 'fadfadfadlfdas', 'fdfsdfsdf', '660b63e49dd5c2.85043514.jpg', '660b63e49daba0.01829069.mp3', 'dafsdfsdfsdf'),
(28, 'dasdaf', 'fdfdsfsdfsdfsdf', '660b6435a836d7.91257261.jpg', '660b6435a80066.08448055.mp3', 'dadfadfadf'),
(29, 'fadfadfadlf', 'ffadfadfadfadf', '660b644ae7ff74.68362510.jpg', '660b644ae7e156.75728337.mp3', 'dasfadf'),
(30, 'DASDASDAS', 'ADFSDFADFA', '660b6497354757.48454961.jpg', '660b6497351cd5.35238632.mp3', 'DADFAFA'),
(31, 'asffgdhfg', 'fdgfhng', '660b65047fcf72.93404901.jpg', '660b65047fb1f4.91873617.mp3', 'sfgdhfgj'),
(32, 'adfsgdfhngmh', 'dsfgdhfgh', '660b651774d5e1.82018727.jpg', '660b651774b638.15377081.mp3', 'dfsgdhfg'),
(33, 'fadfadfadlf', 'fsdgfhng', '660b6554e110d2.41284470.jpg', '660b6554e0f505.43449109.mp3', 'adfsgdfhn'),
(34, 'SUPER aHMED', 'dsfgdfhgjmh', '660b661d3d1d64.52070188.jpg', '660b661d3cf4f4.59579000.mp3', 'sfdghfjghk,'),
(35, 'adfgshdgfhg', 'fdsdgfhg', '660b669aca7a08.99383740.jpg', '660b669aca5d65.38847912.mp3', 'fsgdhf'),
(36, 'dafsfdgfhgjmh', 'sfgdfhgjhj', '660b66d41dc403.81055580.jpg', '660b66d41da108.63038435.mp3', 'fsgdhfjgh'),
(37, 'AFDSGDHFJG', 'FDSGDFHGH', '660b66ee7eb4c2.89035131.jpg', '660b66ee7e9728.44204202.mp3', 'FSGDHFGJ'),
(38, 'dfsgdhf', 'dsfgdfhngh', '660b6710372d53.24288363.jpg', '660b67103710d1.02748671.mp3', 'fdsdgfh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `role`, `created_at`) VALUES
(28, 'programmer', 'Alsaghir', 'ziadm57@yahoo.com', 'ae835a7002a88ae37cfc9887e0b2173b', 1099475854, 'admin', '2024-03-31 23:04:32'),
(29, 'programmer', 'Alsaghir', 'ziad@yahoo.com', 'ae835a7002a88ae37cfc9887e0b2173b', 1099475854, 'user', '2024-03-31 23:04:51'),
(30, 'programmer', '', 'ahmedYehya@uahoo.com', 'ae835a7002a88ae37cfc9887e0b2173b', 1099475854, 'admin', '2024-04-01 08:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE `viewer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_User_Book` (`user_id`),
  ADD KEY `FK_Book_User` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `viewer`
--
ALTER TABLE `viewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `viewer`
--
ALTER TABLE `viewer`
  ADD CONSTRAINT `FK_Book_User` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_User_Book` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
