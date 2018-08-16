-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 03:02 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_businessid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_legal_status`
--

CREATE TABLE `tbl_users_legal_status` (
  `pk_users_legal_status_id` int(11) NOT NULL,
  `orderby` int(11) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users_legal_status`
--

INSERT INTO `tbl_users_legal_status` (`pk_users_legal_status_id`, `orderby`, `title_en`, `description_en`, `is_active`, `added_date`) VALUES
(1, 1, 'LLC', '', 'Y', '2014-05-06 00:00:00'),
(2, 2, 'Service Agency', '', 'Y', '2014-05-06 00:00:00'),
(3, 3, 'FZE', '', 'Y', '2014-08-28 15:06:26'),
(4, 4, 'Group', '', 'Y', '2015-01-08 13:49:22'),
(5, 5, 'FZ-LLC', '', 'Y', '2015-01-28 11:24:06'),
(6, 6, 'Civil company', '', 'Y', '2015-02-24 12:14:04'),
(7, 7, 'Partnership Company', '', 'Y', '2015-03-05 14:18:27'),
(8, 8, 'Foreign Recognized Company', '', 'Y', '2015-03-15 16:58:42'),
(9, 9, 'Private Joint Stock Company', '', 'Y', '2017-12-19 00:00:00'),
(10, 10, 'Public Joint Stock Company', '', 'Y', '2017-12-19 00:00:12'),
(11, 11, 'Holding Company', '', 'Y', '2017-12-19 06:14:15'),
(12, 12, 'Sole Proprietorship', '', 'Y', '0000-00-00 00:00:00'),
(13, 13, 'Professional Trade Licence', '', 'Y', '0000-00-00 00:00:00'),
(14, 14, 'Professional Freelance Licence', '', 'Y', '0000-00-00 00:00:00'),
(15, 15, 'LLP', '', 'Y', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users_legal_status`
--
ALTER TABLE `tbl_users_legal_status`
  ADD PRIMARY KEY (`pk_users_legal_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users_legal_status`
--
ALTER TABLE `tbl_users_legal_status`
  MODIFY `pk_users_legal_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
