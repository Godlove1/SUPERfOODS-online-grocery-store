-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 02:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `claudia`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

CREATE TABLE `products_list` (
  `product_code` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` varchar(19) NOT NULL DEFAULT '0',
  `promo` int(11) DEFAULT 0,
  `product_pprice` varchar(19) NOT NULL DEFAULT '0',
  `product_category` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_seo` text NOT NULL,
  `available` int(11) NOT NULL,
  `best_or_new` int(11) NOT NULL DEFAULT 0 COMMENT '0 os defaut,1 is new ariival, 2 is best seller',
  `product_image` varchar(255) NOT NULL,
  `measurement` text NOT NULL,
  `qty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`product_code`, `product_name`, `product_price`, `promo`, `product_pprice`, `product_category`, `product_desc`, `product_seo`, `available`, `best_or_new`, `product_image`, `measurement`, `qty`) VALUES
(1, 'Tomatoes', '1500', 0, '0', 5, '', '', 1, 0, '64df5c9e87655.jpg', 'kg', '1'),
(2, 'Bell Pepper', '500', 0, '0', 5, '', '', 1, 0, '64df5cd2cc1ae.jpg', 'g', '250'),
(3, 'Bell Pepper', '400', 0, '0', 5, '', '', 1, 0, '64df5cf450fb8.jpg', 'g', '250'),
(4, 'Carrots', '750', 0, '0', 5, '', '', 1, 0, '64df5d2a08c2c.jpg', 'g', '500'),
(5, 'Onions', '500', 0, '0', 5, '', '', 1, 0, '64df5d4b222f8.jpg', 'g', '250'),
(6, 'Cabbage', '1000', 0, '0', 5, '<p>Price rnages from 1000Francs to 2000 francs</p>', '', 1, 0, '64df5d91442ae.jpg', '', ''),
(7, 'Red Cabbage', '500', 0, '0', 5, '<p>Prices range from 500Frs to 1000. indicate when buying</p>', '', 1, 0, '64df5ddc54037.jpg', '', ''),
(8, 'Broccoli', '2000', 0, '0', 4, '', '', 1, 0, '64df5e03d57fe.jpg', 'g', '500'),
(9, 'Spinach', '1500', 0, '0', 5, '', '', 1, 0, '64df5e2b0bc92.jpg', 'g', '500'),
(10, 'Cucumber', '200', 0, '0', 2, '<p>Prices range from 200 - 500 frs. indicate at checkout</p>', '', 1, 0, '64df5e5d3ea9a.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `phone`) VALUES
(1, 'claudia', '2b9ff3efc4a999ecfacd18c4bbc57a2e', '237676579370');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(56) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_name`, `cat_image`) VALUES
(1, 'Raw Spices', 'editedcat-8488.jpg'),
(2, 'Fresh Fruits ', 'editedcat-270.jpg'),
(3, 'Grind Spice', 'editedcat-2672.jpg'),
(4, 'Fresh Spices', 'cat-9588.jpg'),
(5, 'Vegetables ', 'cat-2609.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_measurements`
--

CREATE TABLE `tbl_measurements` (
  `id` int(11) NOT NULL,
  `m_name` text NOT NULL,
  `m_unit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_measurements`
--

INSERT INTO `tbl_measurements` (`id`, `m_name`, `m_unit`) VALUES
(1, 'KiloGram', 'kg'),
(2, 'Grams', 'g'),
(3, 'Litres', 'l'),
(4, 'MilliGram', 'mg'),
(5, 'Meals', 'ml');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimony`
--

CREATE TABLE `tbl_testimony` (
  `id` int(11) NOT NULL,
  `prof_image` varchar(300) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `testimony` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_list`
--
ALTER TABLE `products_list`
  ADD PRIMARY KEY (`product_code`);

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_measurements`
--
ALTER TABLE `tbl_measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimony`
--
ALTER TABLE `tbl_testimony`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_list`
--
ALTER TABLE `products_list`
  MODIFY `product_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_measurements`
--
ALTER TABLE `tbl_measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_testimony`
--
ALTER TABLE `tbl_testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
