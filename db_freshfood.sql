-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 10:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_freshfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`) VALUES
(1, 'Vegetarian'),
(2, 'Low-calorie'),
(3, '7 days plan'),
(4, 'Detoxing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'Aldi', '08123', 'aldi@gmail.com', 'asd', 'test'),
(2, 'aldi setiawan', '083163753824', 'setiawan17x@gmail.com', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food_categories`
--

CREATE TABLE `tbl_food_categories` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_food_categories`
--

INSERT INTO `tbl_food_categories` (`id`, `food_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 1),
(6, 5, 2),
(7, 6, 2),
(8, 6, 3),
(9, 7, 3),
(10, 7, 4),
(11, 8, 1),
(12, 8, 2),
(13, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food_details`
--

CREATE TABLE `tbl_food_details` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` text NOT NULL,
  `meals` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` float(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_food_details`
--

INSERT INTO `tbl_food_details` (`id`, `title`, `subtitle`, `meals`, `days`, `rating`, `description`, `price`) VALUES
(1, 'Clean Eating 7 days Meal Plan', '1700 Calories / days', 28, 7, 5, 'A little bit nutty and a whole lot noice, thid healthy spin on the takeout classic stars chicken and veg in a sweet and savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal paln.', 295.58),
(2, 'Satay chicken with radicchio sauce', '500 Calories/days', 10, 1, 4, 'A little bit nutty and a whole lot noice, thid healthy spin on the takeout classic stars chicken and veg in a sweet and savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal paln.', 10.00),
(3, 'Rasberry & Protein Blondie', '200 Calories/days', 28, 1, 5, 'A little bit nutty and a whole lot noice, thid healthy spin on the takeout classic stars chicken and veg in a sweet and savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal paln.', 5.00),
(4, 'Chco Protein Brownie', '300 Calories/days', 28, 1, 5, 'A little bit nutty and a whole lot noice, thid healthy spin on the takeout classic stars chicken and veg in a sweet and savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal paln.', 7.00),
(5, 'Just Wing it Brkkey Ball', '400 Calories/days', 28, 1, 4, 'A little bit nutty and a whole lot noice, thid healthy spin on the takeout classic stars chicken and veg in a sweet and savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal paln.', 6.00),
(6, 'Youtella Protein Cookies', '350 Calories/days', 28, 1, 5, 'A little bit nutty and a whole lot noice, thid healthy spin on the takeout classic stars chicken and veg in a sweet and savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal paln.', 4.00),
(7, 'Blueberry Yoghurt with Protein Granola', '1000 Calories/days', 200, 3, 4, 'A little bit nutty and a whole lot noice, thid healthy spin on the takeout classic stars chicken and veg in a sweet and savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal paln.', 100.00),
(8, 'Loaded chicken and pumpkin salad', '700 Calories/days', 300, 5, 5, 'A little bit nutty and a whole lot noice, thid healthy spin on the takeout classic stars chicken and veg in a sweet and savoury stir-fry sauce. Based on what you’ve told us, We’ve customised a clean eating meal paln.', 1100.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_header_menu`
--

CREATE TABLE `tbl_header_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `destination` varchar(128) NOT NULL,
  `class` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_header_menu`
--

INSERT INTO `tbl_header_menu` (`id`, `title`, `destination`, `class`) VALUES
(1, 'Menu', '', 'selectedMenu'),
(2, 'About', '', 'menuList'),
(3, 'Contact', '', 'menuList');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`id`, `user_id`, `item_count`) VALUES
(2, 1, 1),
(3, 1, 4),
(4, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`) VALUES
(1, 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@freshfood.com'),
(4, 'chibai', 'e10adc3949ba59abbe56e057f20f883e', 'setiawanaldi.0508@gmail.com'),
(5, 'FightteamAgen', '098f6bcd4621d373cade4e832627b4f6', 'aldi@gmail.com'),
(6, 'asep', 'dc855efb0dc7476760afaa1b281665f1', 'asep@gmail.com'),
(7, 'bambang', 'a9711cbb2e3c2d5fc97a63e45bbe5076', 'bambang@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food_categories`
--
ALTER TABLE `tbl_food_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food_details`
--
ALTER TABLE `tbl_food_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_header_menu`
--
ALTER TABLE `tbl_header_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_food_categories`
--
ALTER TABLE `tbl_food_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_food_details`
--
ALTER TABLE `tbl_food_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_header_menu`
--
ALTER TABLE `tbl_header_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
