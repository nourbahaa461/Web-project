-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 05:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work`
--

-- --------------------------------------------------------

--
-- Table structure for table `catigory`
--

CREATE TABLE `catigory` (
  `ID` int(255) NOT NULL,
  `catigory` varchar(20) NOT NULL,
  `producttype_id` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catigory`
--

INSERT INTO `catigory` (`ID`, `catigory`, `producttype_id`) VALUES
(10, 'style', 1),
(11, 'shoes&socks', 1),
(12, 'bags', 1),
(14, 'accessories', 1);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`) VALUES
(1, 'red'),
(2, 'black'),
(3, 'white'),
(4, 'blue'),
(5, 'green'),
(6, 'yellow'),
(7, 'orange'),
(8, 'purple'),
(9, 'grey'),
(10, 'brown'),
(11, 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `message`) VALUES
(18, 'Maiii', '01224255988', 'please send to me the new collection'),
(19, 'Nourrr', '01210555805', 'contact me'),
(20, 'Ziadd', '01560311708', 'send a message'),
(21, 'Dannel', '01210355809', 'please send a message');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `colorid` int(255) DEFAULT NULL,
  `catid` int(255) DEFAULT NULL,
  `sizeid` int(255) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(256) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `colorid`, `catid`, `sizeid`, `name`, `price`, `image`, `amount`) VALUES
(35, 2, 11, 12, 'Adidas shoes', 400, 'AdidasShoes.jpg', 7),
(36, 7, 10, 1, 'NikeT-Shirt', 300, 'NikeShirt.jpg', 20),
(38, 3, 14, 1, 'Mobile Cover', 70, 'mobilecase.jpg', 15),
(39, 3, 11, 2, 'Butterfly Socks', 99, 'butteflysocks.jpg', 7),
(40, 2, 12, 4, 'Butterfly Bag', 900, 'butterflybag.jpg', 2),
(41, 2, 14, 2, 'Wireless', 200, 'underarmorsportwireless.png', 4),
(86, 3, 11, 9, 'Mizuno shoes', 700, 'MizunoShoes.jpg', 2),
(85, 4, 10, 4, 'Fyke T-Shirt', 200, 'fykeshirt.jpg', 8),
(44, 2, 12, 3, 'Reebok bag', 500, 'reebokbag.jpg', 7),
(46, 2, 10, 3, 'Jacket', 450, 'donicjacket.jpg', 5),
(87, 1, 10, 4, 'Adidas T-Shirt', 400, 'AdidasTshirtt.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `id` int(255) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `type`) VALUES
(1, 'Style'),
(2, 'shoes & socks'),
(3, 'Bags'),
(4, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `blurb` varchar(300) NOT NULL,
  `keywords` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(255) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(1, 'small'),
(2, 'medium'),
(3, 'large'),
(4, 'x-large'),
(5, 'xx-small'),
(6, 'x-small'),
(7, 'xx-large'),
(8, '10x10'),
(9, '44'),
(10, '40'),
(11, '41'),
(12, '42'),
(13, '43'),
(14, '45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `type` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `type`) VALUES
(74, 'Ziadd', '$2y$10$XQ5qEnugAue/wxsFO8eEhOj4oHL5SpiL.MSnLy1zcvkJ44lR3O7Zy', '2020-09-02 11:00:09', 0),
(66, 'ZiadKhaled', '$2y$10$qhL6PPEMdlEa/BB1CYTBWu2tczztTsXXr2qUBlW9gLSdfOP.Rwwvq', '2020-09-02 09:45:22', 1),
(72, 'maiii', '$2y$10$5QgNg1LQGd0EyrR.J..8guWnKvFNzSjlHNw9Mpu2G7M2ZXhNUc.RO', '2020-09-02 10:53:03', 0),
(69, 'Nourrr', '$2y$10$zRuqM71Ri9.3cc5wr3bjV.RUn7GqYGcqDFeIbtv9dQ2Q9XYbKovZW', '2020-09-02 09:47:15', 0),
(71, 'Dannel', '$2y$10$crJ4642RdR1ipVJ2ng3wz.XbMSFkLnH23KtjQ7F/9Jp1hfj/TmlPG', '2020-09-02 09:47:52', 0),
(62, 'NourBaha', '$2y$10$AVh0lyMjktmnx/lYKJxKGOTYevXN7YfulCz1BOIRKCEbxk68rU2hq', '2020-09-02 09:43:40', 1),
(65, 'MaiMahmoud', '$2y$10$b5WtXuHfhp6aC8oB.szyTuSIHZZ/iP60sBz4XfrLXJwz5xx4EggQm', '2020-09-02 09:45:02', 1),
(73, 'ZiadDiab', '$2y$10$cRO.yfIm8RkBiVPkaeyCEe6EJlvIcmOVXCIsfFf8IGn61goxmMNky', '2020-09-02 10:59:23', 1),
(67, 'DannelMaged', '$2y$10$2jSVovhisndIYnITUwJWmuFKm6TdfEKtB8oNLmUUk0zNwrz0ZqSbi', '2020-09-02 09:46:15', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catigory`
--
ALTER TABLE `catigory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `producttype_id` (`producttype_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `colorid` (`colorid`),
  ADD KEY `catid` (`catid`),
  ADD KEY `sizeid` (`sizeid`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
