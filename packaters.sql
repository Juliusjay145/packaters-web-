-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 05:33 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `packaters`
--

-- --------------------------------------------------------

--
-- Table structure for table `pack_caterer`
--

CREATE TABLE `pack_caterer` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_address` varchar(255) NOT NULL,
  `cat_contactno` varchar(255) NOT NULL,
  `cat_details` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `path_image` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'catering'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pack_caterer`
--

INSERT INTO `pack_caterer` (`id`, `cat_name`, `cat_address`, `cat_contactno`, `cat_details`, `username`, `password`, `logo`, `path_image`, `user_type`) VALUES
(1, 'FMC Catering Services', '25 St. Martin Village, A.S. Fortuna Street, Mandaue City, 6014 Cebu', '(032) 343 3172', 'FMC’s vision is to constantly endeavor in growing the business expressed in increasing number of happy clients and employees, being the company’s primary focus of its existence. It aims to emphasize the significance of upholding the best interests of its ', 'fmcprovider', 'fmcprovider', 'fmc.jpg', 'http://10.0.2.2/packaters/upload/fmc.jpg', 'catering'),
(2, 'Red Carpet Catering Services', 'Cebu City, Cebu', '(032) 232 2320', 'Red Carpet Services', 'redcarpet', 'redcarpet', 'carpet.jpg', 'http://10.0.2.2/packaters/upload/carpet.jpg', 'catering'),
(3, 'Delicious Moment Catering Services', 'Cebu City', '(032) 316 1110', 'Delicious Moment Catering Services', 'delicious', 'delicious', 'delicious.png', 'http://10.0.2.2/packaters/upload/delicious.png', 'catering'),
(4, 'Jhunlyn\'s Catering Services', 'South Road Bulacao Pardo, Cebu City, 6000', '(032) 416 3759', 'Let us celebrate milestones and make it delicious and memorable with Jhunlyn\'s Catering Services. We have been serving Cebu since 2008, capable of serving 40-2,000 guests. We are an off-premise caterer specializing in weddings, private parties and corpora', 'jhunlyn', 'jhunlyn', 'jhunlyn.png', 'http://10.0.2.2/packaters/upload/jhunlyn.png', 'catering');

-- --------------------------------------------------------

--
-- Table structure for table `pack_customer`
--

CREATE TABLE `pack_customer` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_lastname` varchar(255) NOT NULL,
  `cust_phonenum` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pack_caterer`
--
ALTER TABLE `pack_caterer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pack_customer`
--
ALTER TABLE `pack_customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pack_caterer`
--
ALTER TABLE `pack_caterer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pack_customer`
--
ALTER TABLE `pack_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
