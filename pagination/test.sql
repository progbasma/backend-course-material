-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 01:01 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `email`, `birthdate`, `added`) VALUES
(1, 'Christian', 'Hackett', 'suzanne41@example.com', '1983-12-30', '1992-02-05 11:21:46'),
(2, 'Percy', 'Blanda', 'to\'keefe@example.org', '2011-09-19', '1990-04-23 23:17:02'),
(3, 'Kennedi', 'Crona', 'xmorissette@example.com', '2013-12-17', '1973-03-17 11:21:12'),
(4, 'Jordan', 'Hessel', 'lucio73@example.com', '1975-04-17', '1970-10-18 12:43:11'),
(5, 'Ila', 'Von', 'bkohler@example.net', '1989-10-04', '2004-08-15 04:25:33'),
(6, 'Caitlyn', 'Legros', 'gusikowski.alycia@example.com', '2020-02-05', '1978-01-05 18:54:52'),
(7, 'Jace', 'Mills', 'mante.claud@example.org', '2017-04-30', '1999-12-06 15:56:43'),
(8, 'Kiley', 'Hickle', 'megane34@example.net', '1999-09-16', '2014-05-27 20:54:34'),
(9, 'Keshaun', 'Swift', 'ahickle@example.com', '1984-05-27', '1979-06-15 00:41:44'),
(10, 'Bernhard', 'Hudson', 'ramiro46@example.com', '1996-09-30', '1987-10-15 17:29:03'),
(11, 'Brando', 'Maggio', 'katarina90@example.org', '2001-10-16', '1989-08-31 06:25:57'),
(12, 'Kariane', 'Dicki', 'hwilliamson@example.net', '2006-03-25', '2018-10-07 04:23:34'),
(13, 'Earnestine', 'Ankunding', 'nwindler@example.org', '1975-11-11', '2019-08-20 15:12:29'),
(14, 'Nayeli', 'Schiller', 'camden.kemmer@example.net', '2005-01-28', '2008-02-28 17:42:52'),
(15, 'Tressie', 'Willms', 'randerson@example.com', '1995-11-24', '2000-05-19 07:48:39'),
(16, 'Shaun', 'Walsh', 'howell.brenna@example.net', '1991-11-01', '1976-03-24 09:54:20'),
(17, 'Roosevelt', 'Leuschke', 'janiya.kub@example.com', '1984-12-16', '2004-09-30 22:21:22'),
(18, 'Bill', 'Farrell', 'bins.moses@example.net', '1986-03-18', '1994-01-12 00:22:08'),
(19, 'Maurice', 'Johns', 'katelyn.friesen@example.org', '2000-12-07', '2004-07-16 00:59:16'),
(20, 'Taya', 'Towne', 'vbauch@example.net', '1972-01-14', '2018-04-19 20:00:33'),
(21, 'Ivah', 'Kuhlman', 'vswaniawski@example.org', '2003-10-30', '2004-08-28 06:01:06'),
(22, 'Virgie', 'Quitzon', 'terrell.ratke@example.net', '1977-06-30', '1990-08-13 03:30:49'),
(23, 'Laurel', 'Lueilwitz', 'karen02@example.com', '1973-03-10', '2006-06-24 13:01:07'),
(24, 'Colton', 'Wisoky', 'ivory40@example.com', '2004-03-13', '1972-04-13 08:39:32'),
(25, 'Frankie', 'Kutch', 'schuster.adrianna@example.com', '1983-07-16', '1993-03-27 04:29:23'),
(26, 'Noelia', 'Kertzmann', 'dubuque.blanca@example.org', '1990-10-18', '1989-02-02 14:52:51'),
(27, 'Aida', 'Durgan', 'brendan05@example.org', '1979-05-30', '1996-08-20 06:45:41'),
(28, 'Vesta', 'Stiedemann', 'jo\'kon@example.net', '2019-03-18', '1977-11-04 10:13:54'),
(29, 'Emmy', 'Armstrong', 'schuster.adrienne@example.org', '1971-07-24', '1997-08-23 00:34:33'),
(30, 'Melany', 'Kris', 'antonio.towne@example.net', '1970-05-03', '1993-01-11 02:26:59'),
(31, 'Valentine', 'Boyle', 'swift.joana@example.net', '1988-02-08', '2012-11-15 10:54:23'),
(32, 'Trisha', 'Gutmann', 'jdickinson@example.net', '1992-07-21', '1989-10-25 19:52:17'),
(33, 'Angela', 'Stoltenberg', 'walter.leta@example.com', '1973-08-15', '2008-11-21 14:16:02'),
(34, 'Dulce', 'Bartoletti', 'mosciski.nolan@example.com', '2011-04-03', '2015-10-07 03:27:01'),
(35, 'Haylie', 'Rohan', 'edna.maggio@example.net', '2003-07-15', '2005-05-09 22:13:04'),
(36, 'Daphney', 'Nikolaus', 'tdibbert@example.org', '1978-02-19', '1984-02-12 06:32:02'),
(37, 'Gabriella', 'Wolf', 'egutmann@example.org', '2009-11-28', '2001-10-20 04:25:35'),
(38, 'Elvie', 'Pfannerstill', 'aorn@example.org', '2014-08-14', '2015-10-19 11:48:05'),
(39, 'Elliot', 'Denesik', 'borer.tierra@example.net', '2005-02-28', '2015-01-29 05:09:30'),
(40, 'Jermaine', 'Cartwright', 'lhane@example.org', '2013-07-05', '1970-03-26 00:34:32'),
(41, 'Herminio', 'Rosenbaum', 'shanahan.gilda@example.com', '1997-10-06', '2010-07-25 06:32:11'),
(42, 'Mateo', 'Raynor', 'esmeralda.yost@example.com', '2006-11-04', '2017-08-25 04:13:30'),
(43, 'Maymie', 'Runte', 'kwhite@example.com', '2000-06-19', '2018-06-01 03:42:58'),
(44, 'Demond', 'Skiles', 'schinner.westley@example.com', '1983-02-22', '2013-08-11 12:39:05'),
(45, 'Arvel', 'Jones', 'udietrich@example.net', '1975-03-20', '1974-10-04 08:44:12'),
(46, 'Donavon', 'Thiel', 'smitham.keven@example.org', '1994-12-25', '2019-05-05 11:08:57'),
(47, 'Aiyana', 'Ziemann', 'katlyn.shields@example.com', '1987-02-18', '1982-12-16 07:38:25'),
(48, 'Gillian', 'Streich', 'zmertz@example.com', '1976-07-07', '1990-09-03 07:25:48'),
(49, 'Bryon', 'Roob', 'rosanna03@example.com', '1979-06-21', '1979-03-27 23:58:17'),
(50, 'Wendy', 'McLaughlin', 'katelyn.howell@example.com', '2018-06-06', '2002-10-11 19:50:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
