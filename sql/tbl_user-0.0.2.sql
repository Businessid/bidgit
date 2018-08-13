-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 05:20 PM
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
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `user_type` enum('company','personal','bid','admin') DEFAULT 'personal',
  `parent_company` int(11) NOT NULL DEFAULT '0',
  `user_level` enum('admin','normal') DEFAULT 'admin',
  `token` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `activity` varchar(200) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `company_mobile` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `legal_status` varchar(100) DEFAULT NULL,
  `registration_number` varchar(100) DEFAULT NULL,
  `license_number` varchar(100) DEFAULT NULL,
  `headline` varchar(200) DEFAULT NULL,
  `summary` text,
  `profile_small` varchar(100) DEFAULT NULL,
  `profile_medium` varchar(100) DEFAULT NULL,
  `profile_large` varchar(100) DEFAULT NULL,
  `profile_cover` varchar(100) DEFAULT NULL,
  `profile_url` varchar(200) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `birthday` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `marital` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `fk_country_id` int(11) DEFAULT '0',
  `fk_city_id` int(11) DEFAULT '0',
  `fk_area_id` int(11) DEFAULT '0',
  `postal_code` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `address` text,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `trade_image` varchar(200) DEFAULT NULL,
  `otp` varchar(100) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `order_rank` int(11) NOT NULL DEFAULT '10',
  `is_app_user` int(11) DEFAULT '0',
  `verified` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
