-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 25, 2020 at 09:34 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Ren_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `s_quantity` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `m_quantity` int(11) NOT NULL,
  `l_quantity` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `price`, `s_quantity`, `image`, `detail`, `m_quantity`, `l_quantity`, `gender`) VALUES
(1, 'Sweatshirt', 12.49, 29, '2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 29, 28, 'UNISEX'),
(2, 'Sweatshirt', 12.49, 24, '3.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 23, 28, 'UNISEX'),
(3, 'Sweatshirt', 12.49, 29, '21.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 30, 27, 'UNISEX'),
(4, 'Sweatshirt', 12.49, 29, '23.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 28, 29, 'UNISEX'),
(5, 'Hoodie', 14.99, 29, '24.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 29, 29, 'MEN'),
(6, 'Shoes', 14.99, 28, '25.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 29, 29, 'MEN'),
(7, 'Cap', 12.49, 19, '26.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 20, 20, 'WOMEN'),
(8, 'Jacket', 15.49, 19, '27.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 20, 19, 'WOMEN'),
(9, 'Pants', 14.99, 19, '28.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, laboriosam sequi eligendi perferendis voluptatem maiores aliquid laudantium non, iste rem modi aspernatur tempore, odit veritatis expedita magnam! Fuga, corporis quos!', 16, 20, 'WOMEN'),
(11, 'Glasses', 12.49, 0, '32.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae quo aliquid quidem dolor esse exercitationem facere tempora consequatur minus, nihil dolore iste error totam quae atque sapiente! Ducimus, quibusdam ex!', 0, 0, 'UNISEX'),
(12, 'Glasses', 12.49, 30, '31.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eum iste odio magnam esse a itaque distinctio animi maxime dolorum non doloribus enim asperiores cum, illo sunt nemo ipsum facere.', 27, 30, 'UNISEX');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `buy_quantity` int(11) NOT NULL,
  `total` float NOT NULL,
  `size` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `item_id`, `buy_quantity`, `total`, `size`) VALUES
(10, 1, 2, 2, 24.98, 'M'),
(11, 2, 11, 16, 199.84, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `realOrders`
--

CREATE TABLE `realOrders` (
  `real_order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `buy_quantity` int(11) NOT NULL,
  `size` varchar(1) NOT NULL,
  `total` float NOT NULL,
  `date_purchased` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `realOrders`
--

INSERT INTO `realOrders` (`real_order_id`, `user_id`, `item_id`, `buy_quantity`, `size`, `total`, `date_purchased`) VALUES
(1, 1, 11, 1, 'M', 12.49, '2020-09-23 16:36:04'),
(2, 1, 11, 1, 'M', 12.49, '2020-09-23 16:36:04'),
(3, 1, 7, 1, 'S', 12.49, '2020-09-23 16:36:04'),
(4, 1, 2, 1, 'M', 12.49, '2020-09-23 16:36:04'),
(5, 1, 3, 2, 'L', 24.98, '2020-09-23 16:36:04'),
(6, 1, 6, 2, 'S', 29.98, '2020-09-23 16:36:04'),
(7, 1, 11, 1, 'M', 12.49, '2020-09-23 16:36:04'),
(8, 1, 6, 1, 'M', 14.99, '2020-09-23 16:36:04'),
(9, 1, 2, 1, 'S', 12.49, '2020-09-23 16:36:45'),
(10, 1, 2, 1, 'S', 12.49, '2020-09-23 17:10:39'),
(11, 1, 2, 1, 'S', 12.49, '2020-09-23 17:12:28'),
(12, 1, 2, 1, 'M', 12.49, '2020-09-23 17:18:09'),
(13, 1, 2, 1, 'S', 12.49, '2020-09-23 17:19:26'),
(14, 1, 2, 1, 'S', 12.49, '2020-09-23 17:22:43'),
(15, 1, 5, 1, 'M', 14.99, '2020-09-23 17:34:51'),
(16, 1, 4, 1, 'S', 12.49, '2020-09-23 17:35:27'),
(17, 1, 9, 1, 'S', 14.99, '2020-09-23 17:35:27'),
(18, 2, 4, 1, 'L', 12.49, '2020-09-23 17:52:36'),
(19, 2, 5, 1, 'L', 14.99, '2020-09-23 17:52:36'),
(20, 2, 8, 1, 'S', 15.49, '2020-09-23 18:02:34'),
(21, 2, 1, 1, 'S', 12.49, '2020-09-23 18:40:35'),
(22, 2, 11, 1, 'M', 12.49, '2020-09-23 18:45:02'),
(23, 2, 2, 1, 'L', 12.49, '2020-09-23 18:50:07'),
(24, 2, 6, 1, 'L', 14.99, '2020-09-24 15:37:46'),
(25, 2, 9, 1, 'M', 14.99, '2020-09-24 18:01:27'),
(26, 2, 5, 1, 'S', 14.99, '2020-09-24 18:06:02'),
(27, 2, 2, 3, 'M', 37.47, '2020-09-24 18:14:00'),
(28, 2, 1, 1, 'M', 12.49, '2020-09-24 18:23:35'),
(29, 2, 11, 1, 'M', 12.49, '2020-09-24 18:23:35'),
(30, 2, 8, 1, 'L', 15.49, '2020-09-24 18:23:35'),
(31, 1, 4, 2, 'M', 24.98, '2020-09-25 15:09:13'),
(32, 1, 2, 1, 'L', 12.49, '2020-09-25 17:17:18'),
(33, 1, 2, 1, 'S', 12.49, '2020-09-25 17:26:01'),
(34, 1, 1, 1, 'L', 12.49, '2020-09-25 17:29:02'),
(35, 1, 1, 1, 'L', 12.49, '2020-09-25 17:30:49'),
(36, 1, 12, 3, 'M', 37.47, '2020-09-25 17:45:52'),
(37, 1, 9, 3, 'M', 44.97, '2020-09-25 17:45:52'),
(38, 1, 3, 1, 'L', 12.49, '2020-09-25 17:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(1) NOT NULL DEFAULT 'U',
  `password` varchar(50) NOT NULL,
  `credit_card` varchar(20) DEFAULT NULL,
  `PIN` varchar(50) DEFAULT NULL,
  `cc_month` int(2) DEFAULT NULL,
  `cc_year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `address`, `role`, `password`, `credit_card`, `PIN`, `cc_month`, `cc_year`) VALUES
(1, 'Ren', 'Shimada', 'ren', 'ren@gmail.com', 'London11', 'A', '027d3922dd6fa2060d6a9c1bbf69e122', '1234-1234-1234-1234', '81dc9bdb52d04dc20036dbd8313ed055', 10, 2020),
(2, 'Mark', 'Tanaka', 'mark', 'mark@gmail.com', 'USA', 'U', '6d295738eb6579053ac46a9ca1902583', '4321-4321-4321-4321', 'd93591bdf7860e1e4ee2fca799911215', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `realOrders`
--
ALTER TABLE `realOrders`
  ADD PRIMARY KEY (`real_order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `realOrders`
--
ALTER TABLE `realOrders`
  MODIFY `real_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
