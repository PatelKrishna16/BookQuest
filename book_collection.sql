-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 08:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `published_year` year(4) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `published_year`, `genre`) VALUES
(1, 'Philosopher Stone', 'J. K. Rowling', '1997', 'Fantasy'),
(2, 'The Palace Of Illusions', 'Chitra Banerjee Divakaruni', '2008', 'Poetry'),
(4, 'The Great Gatsby', 'F. Scott Fitzgerald', '1925', 'Tragedy, Social Commentary'),
(5, 'The Grapes of Wrath', 'John Steinbeck', '1939', 'Realist Fiction, Social Commentary'),
(7, 'Brave New World', 'Aldous Huxley', '1932', 'Dystopian/Science Fiction'),
(8, 'Fahrenheit 451', 'Ray Bradbury', '1953', 'Dystopian/Science Fiction'),
(9, 'The Stranger', 'Albert Camus', '1942', 'Absurdist Fiction/Classic'),
(10, 'The Sound and the Fury', 'William Faulkner', '1929', 'Modernist Fiction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
