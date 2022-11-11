-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2022 at 11:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE17_CR4_Ericka_BigLibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `isbn` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `isbn`, `image`) VALUES
(2, 'Zog', 'Julia Donaldson', 'Scholastic', '1443157015', '636e2ddd794a2.jpg'),
(3, 'Room on the Broom', 'Julia Donaldson', 'Mac PanMillan', '978-1-5098-0477-1', '636e2f4621d40.jpg'),
(4, 'The Gruffalo   ', 'Julia Donaldson', ' MacMillan', '978-1-5098-0477-2', '636e93871b646.jpg'),
(7, 'The Snail and the Whale', 'Julia Donaldson', 'Pan MacMillan', '978-1-5098-3044-2', '636ec3fc7aabc.jpg'),
(8, 'Grumpy Monkey', 'Suzanne Lang', 'Trillas', '978-0-593-12399-7', '636ec4d0ddfde.jpg'),
(9, 'Basic Cooking', 'Elizabeth Wilson', 'Dona', '978-3-7742-1142-1', '636ec617c651c.jpg'),
(10, 'Harry Potter', 'J.k Rowling', 'Hufflepuff', '978-1-4088-9815-4', '636ec6eaab622.jpg'),
(11, 'Isadora Moon ', 'Harriet Muncaster', 'Oxford', '978-0-19-277257-2', '636ecac2a5f0c.jpg'),
(12, 'Grumpy Monkey Christmas', 'Suzanne Lang', 'Trillas', '978-0-593-30609-3', '636ecbcabc1ad.jpg'),
(13, 'Winnie the Witch', 'Valerie Thomas', 'Oxford', '978-0-19-274816-4', 'book.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
