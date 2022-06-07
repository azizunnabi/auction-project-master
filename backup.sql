-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 09:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction_fyp`
--
CREATE DATABASE IF NOT EXISTS `auction_fyp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `auction_fyp`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `role` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `job` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `role`, `email`, `password`, `contact`, `country`, `job`, `image`) VALUES
(1, 'Aziz  un nabi', 'Admin', 'azizse971@gmail.com', 'aziz123', '03429859057', 'Pakistan', 'Student', 'put-your-best-smile-forward-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bid_product`
--

CREATE TABLE `bid_product` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` int(200) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_descreption` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` text NOT NULL,
  `product_category` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `bedding_rate` int(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_product`
--

INSERT INTO `bid_product` (`id`, `name`, `email`, `contact_number`, `product_name`, `product_image`, `product_descreption`, `city`, `country`, `product_category`, `start_date`, `end_date`, `bedding_rate`, `status`) VALUES
(54, 'degar show', 'ali4@gmail.com', 93333333, 'Rado Watch', 'Rado Watch.jpg', 'this is  good shoes', 'dir lower', 'pakisatn', 'mobiles', '0000-00-00', '2022-07-20', 6000, 'Approved'),
(90, 'irfan', 'ahsmi@gmail.com', 2147483647, 'apple laptop', 'apple laptop.jpg', 'this is good laptop', 'dirlower', 'india', 'laptops', '2016-05-03', '2016-09-26', 60000, 'Approved'),
(91, 'irfan', 'irfan@gmail.com', 2147483647, 'canon camra', 'DSLR-camera.jpg', 'thsi is very good camra', 'dirlower', 'india', 'camras', '2016-05-05', '2016-08-31', 6000, 'Approved'),
(93, 'ahmad', 'ahmad@gmail.com', 2147483647, 'hp mini', 'HP-Mini-210.jpg', 'thsi is very good camra', 'dirlower', 'india', 'laptops', '2016-05-05', '2016-08-31', 6000, 'Approved'),
(137, 'jamal', 'rizwan@gmail.com', 2147483647, 'smart pointer', 'Oxford Dictionary.jpg', 'this is very good product', 'dir lower', 'pakistan', 'education', '2016-07-22', '2016-08-27', 800, 'Approved'),
(138, 'jamal', 'rizwan@gmail.com', 2147483647, 'smart pointer', 'Oxford Dictionary.jpg', 'this is very good product', 'dir lower', 'pakistan', 'education', '2016-07-22', '2016-08-27', 800, 'Approved'),
(139, 'jamal', 'rizwan@gmail.com', 2147483647, 'smart pointer', 'Oxford Dictionary.jpg', 'this is very good product', 'dir lower', 'china', 'education', '2016-07-22', '2016-08-27', 800, 'Approved'),
(140, 'jamal', 'rizwan@gmail.com', 2147483647, 'smart pointer', 'Oxford Dictionary.jpg', 'this is very good product', 'dir lower', 'afghanistan', 'education', '2016-07-22', '2016-08-27', 800, 'Approved'),
(141, 'jamal', 'rizwan@gmail.com', 2147483647, 'iron', 'images.jpg', 'this is very good product', 'dir lower', 'india', 'iron', '2016-07-22', '2016-08-27', 800, 'Approved'),
(146, 'akhte', 'akhter@gmail.com', 2147483647, 'glasses', 'ddd', 'good product', 'dir lower', 'pakistan', 'tablets', '0000-00-00', '0000-00-00', 9000, 'pending\r\n'),
(147, 'imad', 'imad@gmail.com', 787878787, 'tablets', 'Microsoft Tablets.jpg', 'this is very good tablet', 'dir lower', 'Pakistan', 'Tablets', '2016-07-23', '2016-09-15', 0, 'Approved'),
(148, 'waqas', 'waqas@gmail.com', 2147483647, 'degar shoes', 'Degar Shoes.jpg', 'these are very good shoes', 'dir lower', 'Pakistan', 'Others', '2016-07-23', '2016-08-20', 0, 'approved'),
(149, 'ddd', 'rizwan@gmail.com', 45555555, 'smart pointer', 'Chapal3.jpg', 'this is very good shoes', 'dir lower', 'Pakistan', 'Laptops', '2016-07-13', '2016-08-26', 0, 'approved'),
(150, 'jamal', 'rizwan@gmail.com', 4444444, 'sho', 'HTC-Google-Nexus-One-2.jpg', 'this is very good product', 'dir lower', 'Pakistan', 'Laptops', '2016-07-21', '2016-09-02', 0, 'pending '),
(151, 'jamal', 'rizwadn@gmail.com', 4444444, 'sho', 'HTC-Google-Nexus-One-2.jpg', 'this is very good product', 'dir lower', 'Pakistan', 'Laptops', '2016-07-21', '2016-09-02', 0, 'pending ');

-- --------------------------------------------------------

--
-- Table structure for table `bid_started_products`
--

CREATE TABLE `bid_started_products` (
  `cus_id` int(100) NOT NULL,
  `product_name` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `bid_rate` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_started_products`
--

INSERT INTO `bid_started_products` (`cus_id`, `product_name`, `first_name`, `last_name`, `bid_rate`, `email`, `password`, `country`, `contact`) VALUES
(112, 'shoes', ' edddd', ' khan', 900, 'shakil@gmail.com', 'hjj', 'Pakistan', '3233333333333'),
(116, 'shoes', ' edddd', ' khan', 800, 'shakil@gmail.com', 'hjj', 'Pakistan', '3233333333333'),
(117, 'iphone 6', ' jawad', ' khan', 600, 'jawad@gmail.com', 'rerr', 'Pakistan', '78888888888888'),
(118, 'iphone 6', ' jawad', ' khan', 700, 'jawad@gmail.com', 'hjjjjjjjjj', 'Pakistan', '78888888888888'),
(119, 'iphone 6', ' jawad', ' khan', 800, 'jawad@gmail.com', 'yyyyyyyyyyyy', 'Pakistan', '78888888888888'),
(120, 'shoes', ' umair', ' khan', 1000, 'umair@gmail.com', 'umair123', 'Pakistan', '3233333333333'),
(121, 'nokia tablet', ' jamal', ' khan', 1200, 'jamal@gmail.com', 'jama;123', 'Pakistan', '89888888888888'),
(122, 'nokia tablet', ' khaliq', ' khan', 1300, 'khaliq@gmail.com', 'kahka', 'Pakistan', '89888888888888'),
(123, 'nokia tablet', ' uzair', ' khan', 1500, 'uzair@gmail.com', 'uzair123', 'Pakistan', '89888888888888'),
(124, 'nokia tablet', ' ', ' ', 0, '', '', 'Pakistan', ''),
(125, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(126, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(127, '', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(128, '', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(129, '', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(130, '', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(131, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(132, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(133, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(134, 'hp mini', ' ', ' ', 1000, '', '', 'Pakistan', ''),
(135, 'hp mini', ' ', ' ', 400, '', '', 'Pakistan', ''),
(136, 'hp mini', ' ', ' ', 444, '', '', 'Pakistan', ''),
(137, 'hp mini', ' ', ' ', 100, '', '', 'Pakistan', ''),
(138, 'hp mini', ' ', ' ', 1200, '', '', 'Pakistan', ''),
(139, 'hp mini', ' rrrr', ' rr', 1300, 'fazal@gmail.com', '4444444', 'Pakistan', '444'),
(140, 'smart pointer', ' ihsan', ' khan', 400, 'ihsan@gmail.com', 'ihsan123', 'Pakistan', '03425556655'),
(141, 'smart pointer', ' ihsan', ' ali', 500, 'ihsanali@gmail.com', 'ihsanali', 'Pakistan', '03425556655'),
(142, 'smart pointer', ' mushtaq', ' ali', 600, 'mushtaq@gmail.com', 'mushtaqali', 'Pakistan', '03425556655'),
(143, 'tablets', ' irshad', ' khan', 8000, 'irshad@gmail.com', 'irshad123', 'Pakistan', '9877777777'),
(144, 'smart pointer', ' sif', ' ullah', 700, 'saif@gmail.com', '990ddd', 'China', '333333333333'),
(145, 'Rado Watch', ' aziz ', ' un nabi', 500, 'ali@gmail.com', 'ali123', 'Pakistan', '89898989891'),
(146, 'Rado Watch', ' aziz ', ' un nabi', 600, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878787'),
(147, 'Rado Watch', ' aziz ', ' un nabi', 700, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767677'),
(148, 'Rado Watch', ' aziz ', ' un nabi', 800, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878787'),
(149, 'Rado Watch', ' aziz ', ' un nabi', 900, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878787'),
(150, 'Rado Watch', ' aziz ', ' un nabi', 901, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878787'),
(151, 'Rado Watch', ' aziz ', ' un nabi', 903, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878787'),
(152, 'Rado Watch', ' aziz ', ' un nabi', 905, 'ali@gmail.com', 'ali123', 'Pakistan', '89889898998'),
(153, 'Rado Watch', ' aziz ', ' un nabi', 906, 'ali@gmail.com', 'ali123', 'Pakistan', '89889898998'),
(154, 'Rado Watch', ' aziz ', ' un nabi', 907, 'ali@gmail.com', 'ali123', 'Pakistan', '89889898998'),
(155, 'Rado Watch', ' aziz ', ' un nabi', 908, 'jameel@gmail.ccom', 'ali123', 'Pakistan', '4545454545'),
(156, 'Rado Watch', ' aziz ', ' un nabi', 909, 'jameel@gmail.ccom', 'ali123', 'Pakistan', '4545454545'),
(157, 'Rado Watch', ' aziz ', ' un nabi', 910, 'jameel@gmail.ccom', 'ali123', 'Pakistan', '4545454545'),
(158, 'Rado Watch', ' aziz ', ' un nabi', 911, 'jameel@gmail.ccom', 'ali123', 'Pakistan', '4545454545'),
(159, 'Rado Watch', ' aziz ', ' un nabi', 912, 'jameel@gmail.ccom', 'ali123', 'Pakistan', '4545454545'),
(160, 'Rado Watch', ' aziz ', ' un nabi', 913, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878788'),
(161, 'Rado Watch', ' aziz ', ' un nabi', 914, 'ali@gmail.com', 'ALI123', 'Pakistan', '78787878788'),
(162, 'Rado Watch', ' aziz ', ' un nabi', 915, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878788'),
(163, 'Rado Watch', ' aziz ', ' un nabi', 916, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878788'),
(164, 'Rado Watch', ' aziz ', ' un nabi', 917, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767676'),
(165, 'Rado Watch', ' aziz ', ' un nabi', 918, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767676'),
(166, 'Rado Watch', ' aziz ', ' un nabi', 919, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767676'),
(167, 'Rado Watch', ' aziz ', ' un nabi', 920, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767676'),
(168, 'Rado Watch', ' aziz ', ' un nabi', 921, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767676'),
(169, 'Rado Watch', ' aziz ', ' un nabi', 923, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767676'),
(170, 'Rado Watch', ' aziz ', ' un nabi', 927, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767676'),
(171, 'Rado Watch', ' aziz ', ' un nabi', 928, 'ali@gmail.com', 'ali123', 'Pakistan', '67676767676'),
(172, 'Rado Watch', ' aziz ', ' un nabi', 930, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878788'),
(173, 'Rado Watch', ' aziz ', ' un nabi', 931, 'ali@gmail.com', 'ali123', 'Pakistan', '78787878788'),
(174, 'Rado Watch', ' aziz ', ' un nabi', 960, 'ali@gmail.com', 'ali123', 'Pakistan', '56565656565');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_payments`
--

CREATE TABLE `paypal_payments` (
  `payment_id` int(100) NOT NULL,
  `transection_no` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `searched_products`
--

CREATE TABLE `searched_products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `search_keyword` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searched_products`
--

INSERT INTO `searched_products` (`id`, `name`, `email`, `password`, `mobile_number`, `search_keyword`, `status`) VALUES
(22, 'rahim', 'rahim@gmail.com', 'rahim123', 333333, 'car', 'pending'),
(23, 'fazal', 'fazal@gmail.com', 'fazal123', 0, 'smart pointer', 'uploaded'),
(24, 'fazal', 'fazal@gmail.com', 'fazal123', 0, 'bmw', 'pending'),
(25, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'laptop', 'pending'),
(26, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'sho', 'uploaded'),
(27, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'sho', 'uploaded'),
(28, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'fan', 'uploaded'),
(29, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'fan', 'uploaded'),
(30, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'pending'),
(31, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'pending'),
(32, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'pending'),
(33, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'pending'),
(34, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'pending'),
(35, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, '9', 'pending'),
(36, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, '9', 'pending'),
(37, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'camra', 'uploaded'),
(38, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(39, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(40, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(41, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(42, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(43, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(44, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(45, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(46, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(47, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(48, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(49, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(50, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(51, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(52, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(53, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(54, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'laptop stand', 'pending'),
(55, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'bag', 'pending'),
(56, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'bag', 'pending'),
(57, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'battery', 'pending'),
(58, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'battery', 'pending'),
(59, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'battery', 'pending'),
(60, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'battery', 'pending'),
(61, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'charger', 'pending'),
(62, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glasses', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `user_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `full_name`, `email`, `password`, `mobile`, `user_image`) VALUES
(32, 'rahim', 'rahi@gmail.com', '$2y$10$zmr.8nJ62IPZLt8ZwVmEaOUEINZCQ2KuZfK2M/UqR4oh168c4Bs.y', '03429859057', 'Cute Cloth.jpg'),
(35, 'sadd', 'sad@gmail.com', '$2y$10$uQisJSOsgJfJaF.rEwHM5OZpo/Q/2BPptx888OBDYGLVv2F7l8kVu', '02347878787', 'mcycle.jpg'),
(46, 'fazal', 'fazal@gmail.com', 'fazal123', '03445656577', 'first.jpg'),
(49, 'ishaq', 'ishaq@gmail.com', '$2y$10$aIO/VWixDSMeVKVeSFszxeaus0PuTnIS9hWSrw0VpHJV440ohI10u', '03456767788', 'apple laptop.jpg'),
(50, 'ali', 'ali@gmail.com', 'ali123', '03456565766', 'Man Shart.jpg'),
(51, 'uzair', 'uzair@gmail.com', '123456', '03428989899', 'abdul-wali-ustaad1.jpg'),
(54, 'talha', 'talha@gmail.com', 'tlhakhan', '03424545655', 'mohsin-shave-papu.jpg'),
(55, 'jamal', 'jamal123@gmail.com', '$2y$10$OfzBeICyumCE8D1HHw3RD.YebtstY5x1xJsrLUCN7FMLFxgl4cv7G', '03425555567', 'abdul-wali-ustaad1.jpg'),
(56, 'kamal', 'kamal@gmail.com', '$2y$10$Ry5DVEsqizSLRahPpqlf6ujp0y5Q316T769VsrAj3CM/kjnLsDOti', '03425656655', ''),
(57, 'tufail', 'tufail@gmail.com', '$2y$10$rTjNAk6YnxWPT7B20lTv8OiA0jpuJr4l9iAUC4Rg68qeXmRl1K2wi', '03423434345', 'abdul-wali-ustaad1.jpg'),
(58, 'junaid', 'junaid@gmail.com', '$2y$10$Rve8ws0c1bqqp5db4QpXqubadxhHaQM9NeXCLb9ljhInOVqgIQQx2', '08456767788', 'B2.jpg'),
(59, 'waqar', 'waqar@gmail.com', '$2y$10$UXQYk6sfpZb7GJL/s7FvK.gkLT3ydeuNY6LNNAjpbkLQ8IGnuFyhK', '03425656644', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_product`
--
ALTER TABLE `bid_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_started_products`
--
ALTER TABLE `bid_started_products`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `searched_products`
--
ALTER TABLE `searched_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid_product`
--
ALTER TABLE `bid_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `bid_started_products`
--
ALTER TABLE `bid_started_products`
  MODIFY `cus_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `searched_products`
--
ALTER TABLE `searched_products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- Database: `auction_fyp1`
--
CREATE DATABASE IF NOT EXISTS `auction_fyp1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `auction_fyp1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `role` text NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `job` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `role`, `admin_email`, `password`, `contact`, `country`, `job`, `image`) VALUES
(1, 'Aziz  un nabi', 'Admin', 'azizse971@gmail.com', 'aziz123', '03429859057', 'Pakistan', 'Student', 'put-your-best-smile-forward-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bid_product`
--

CREATE TABLE `bid_product` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` int(200) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_descreption` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` text NOT NULL,
  `product_category` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `bedding_rate` int(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_product`
--

INSERT INTO `bid_product` (`id`, `name`, `email`, `contact_number`, `product_name`, `product_image`, `product_descreption`, `city`, `country`, `product_category`, `start_date`, `end_date`, `bedding_rate`, `status`) VALUES
(54, 'degar show', 'ali4@gmail.com', 93333333, 'Rado Watch', 'Rado Watch.jpg', 'this is  good shoes', 'dir lower', 'pakisatn', 'mobiles', '0000-00-00', '2016-07-14', 6000, 'Approved'),
(90, 'irfan', 'ahsmi@gmail.com', 2147483647, 'apple laptop', 'apple laptop.jpg', 'this is good laptop', 'dirlower', 'india', 'laptops', '2016-05-03', '2016-09-26', 60000, 'Approved'),
(91, 'irfan', 'irfan@gmail.com', 2147483647, 'canon camra', 'DSLR-camera.jpg', 'thsi is very good camra', 'dirlower', 'india', 'camras', '2016-05-05', '2016-08-31', 6000, 'Approved'),
(93, 'ahmad', 'ahmad@gmail.com', 2147483647, 'hp mini', 'HP-Mini-210.jpg', 'thsi is very good camra', 'dirlower', 'india', 'laptops', '2016-05-05', '2016-08-31', 6000, 'Approved'),
(137, 'jamal', 'rizwan@gmail.com', 2147483647, 'smart pointer', 'Oxford Dictionary.jpg', 'this is very good product', 'dir lower', 'pakistan', 'education', '2016-07-22', '2016-08-27', 800, 'Approved'),
(138, 'jamal', 'rizwan@gmail.com', 2147483647, 'smart pointer', 'Oxford Dictionary.jpg', 'this is very good product', 'dir lower', 'pakistan', 'education', '2016-07-22', '2016-08-27', 800, 'Approved'),
(139, 'jamal', 'rizwan@gmail.com', 2147483647, 'smart pointer', 'Oxford Dictionary.jpg', 'this is very good product', 'dir lower', 'china', 'education', '2016-07-22', '2016-08-27', 800, 'Approved'),
(140, 'jamal', 'rizwan@gmail.com', 2147483647, 'smart pointer', 'Oxford Dictionary.jpg', 'this is very good product', 'dir lower', 'afghanistan', 'education', '2016-07-22', '2016-08-27', 800, 'Approved'),
(141, 'jamal', 'rizwan@gmail.com', 2147483647, 'iron', 'images.jpg', 'this is very good product', 'dir lower', 'india', 'iron', '2016-07-22', '2016-08-27', 800, 'Approved'),
(146, 'akhte', 'akhter@gmail.com', 2147483647, 'glasses', 'ddd', 'good product', 'dir lower', 'pakistan', 'tablets', '0000-00-00', '0000-00-00', 9000, 'pending\r\n'),
(147, 'imad', 'imad@gmail.com', 787878787, 'tablets', 'Microsoft Tablets.jpg', 'this is very good tablet', 'dir lower', 'Pakistan', 'Tablets', '2016-07-23', '2016-09-15', 0, 'Approved'),
(148, 'waqas', 'waqas@gmail.com', 2147483647, 'degar shoes', 'Degar Shoes.jpg', 'these are very good shoes', 'dir lower', 'Pakistan', 'Others', '2016-07-23', '2016-08-20', 0, 'approved'),
(149, 'ddd', 'rizwan@gmail.com', 45555555, 'smart pointer', 'Chapal3.jpg', 'this is very good shoes', 'dir lower', 'Pakistan', 'Laptops', '2016-07-13', '2016-08-26', 0, 'Approved'),
(150, 'jamal', 'rizwan@gmail.com', 4444444, 'sho', 'HTC-Google-Nexus-One-2.jpg', 'this is very good product', 'dir lower', 'Pakistan', 'Laptops', '2016-07-21', '2016-09-02', 0, 'Approved'),
(153, 'ahmad', 'ahmadkhan@gmail.com', 566666666, 'dell laptop', 'dell-laptop-battery-problem.jpg', 'this is very good laptop', 'peshawar', 'Pakistan', 'Laptops', '2016-07-14', '2016-11-11', 0, 'Approved'),
(155, 'junaid', 'junaid@gmail.com', 2323323, 'mototcycle', 'mcycle.jpg', 'this is very good motorcycle', 'dir lower', 'Pakistan', 'Others', '2016-07-14', '2016-11-11', 0, 'Approved'),
(156, 'usman', 'usman@gmail.com', 2147483647, 'glasses', 'Nice Glasses.jpg', 'these are good glasses', 'dir lower', 'Pakistan', 'Others', '2016-07-23', '2016-10-29', 0, 'Approved'),
(157, 'ahmad', 'fazal@gmail.com', 3333333, 'female shoes', 'images(3).jpg', 'these are very good shoes', 'dir lower', 'Pakistan', 'Others', '2016-07-18', '2016-08-11', 0, 'Approved'),
(158, 'shakil', 'dkkdk@gmail.com', 67777, 'apple', 'aaaa.jpg', 'good product', 'Talash Timergera', 'Pakistan', 'Laptops', '2017-02-14', '2017-02-20', 0, 'Approved'),
(159, '', '', 0, '', '', '', '', 'Pakistan', 'Laptops', '2017-02-16', '2017-03-09', 0, 'Approved'),
(160, '', '', 0, '', '', '', '', 'Pakistan', 'Laptops', '2017-02-16', '2017-03-09', 0, 'Approved'),
(161, 'ali', 'ali@gmail.com', 88, 'hhhh', 'Alfazal Hotel.jpg', 'yyyyyyyyswat', 'iiii', 'Pakistan', 'Mobiles', '2017-03-16', '2017-03-25', 0, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `bid_started_products`
--

CREATE TABLE `bid_started_products` (
  `cus_id` int(100) NOT NULL,
  `product_name` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `bid_rate` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_started_products`
--

INSERT INTO `bid_started_products` (`cus_id`, `product_name`, `first_name`, `last_name`, `bid_rate`, `email`, `password`, `country`, `contact`) VALUES
(117, 'iphone 6', ' jawad', ' khan', 600, 'jawad@gmail.com', 'rerr', 'Pakistan', '78888888888888'),
(118, 'iphone 6', ' jawad', ' khan', 700, 'jawad@gmail.com', 'hjjjjjjjjj', 'Pakistan', '78888888888888'),
(119, 'iphone 6', ' jawad', ' khan', 800, 'jawad@gmail.com', 'yyyyyyyyyyyy', 'Pakistan', '78888888888888'),
(120, 'shoes', ' umair', ' khan', 1000, 'umair@gmail.com', 'umair123', 'Pakistan', '3233333333333'),
(121, 'nokia tablet', ' jamal', ' khan', 1200, 'jamal@gmail.com', 'jama;123', 'Pakistan', '89888888888888'),
(122, 'nokia tablet', ' khaliq', ' khan', 1300, 'khaliq@gmail.com', 'kahka', 'Pakistan', '89888888888888'),
(123, 'nokia tablet', ' uzair', ' khan', 1500, 'uzair@gmail.com', 'uzair123', 'Pakistan', '89888888888888'),
(124, 'nokia tablet', ' ', ' ', 0, '', '', 'Pakistan', ''),
(125, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(126, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(127, '', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(128, '', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(129, '', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(130, '', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(131, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(132, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(133, 'hp mini', ' usman', ' khan', 900, 'usman@gmail.com', 'usman123', 'Pakistan', '03425555655'),
(134, 'hp mini', ' ', ' ', 1000, '', '', 'Pakistan', ''),
(135, 'hp mini', ' ', ' ', 400, '', '', 'Pakistan', ''),
(136, 'hp mini', ' ', ' ', 444, '', '', 'Pakistan', ''),
(137, 'hp mini', ' ', ' ', 100, '', '', 'Pakistan', ''),
(138, 'hp mini', ' ', ' ', 1200, '', '', 'Pakistan', ''),
(139, 'hp mini', ' rrrr', ' rr', 1300, 'fazal@gmail.com', '4444444', 'Pakistan', '444'),
(140, 'smart pointer', ' ihsan', ' khan', 400, 'ihsan@gmail.com', 'ihsan123', 'Pakistan', '03425556655'),
(141, 'smart pointer', ' ihsan', ' ali', 500, 'ihsanali@gmail.com', 'ihsanali', 'Pakistan', '03425556655'),
(142, 'smart pointer', ' mushtaq', ' ali', 600, 'mushtaq@gmail.com', 'mushtaqali', 'Pakistan', '03425556655'),
(143, 'tablets', ' irshad', ' khan', 8000, 'irshad@gmail.com', 'irshad123', 'Pakistan', '9877777777'),
(144, 'smart pointer', ' sif', ' ullah', 700, 'saif@gmail.com', '990ddd', 'China', '333333333333'),
(145, 'apple', ' aziz', ' unnabi', 7000, 'aziz484u@gmail.com', 'aziz1234', 'Pakistan', '03429859057'),
(146, 'hhhh', ' ali', ' khan', 900, 'imaduom@gmail.com', 'ali123', 'Pakistan', '677777777');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_payments`
--

CREATE TABLE `paypal_payments` (
  `payment_id` int(100) NOT NULL,
  `transection_no` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `searched_products`
--

CREATE TABLE `searched_products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `search_keyword` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searched_products`
--

INSERT INTO `searched_products` (`id`, `name`, `email`, `password`, `mobile_number`, `search_keyword`, `status`) VALUES
(22, 'rahim', 'rahim@gmail.com', 'rahim123', 333333, 'car', 'pending'),
(23, 'fazal', 'fazal@gmail.com', 'fazal123', 0, 'smart pointer', 'uploaded'),
(24, 'fazal', 'fazal@gmail.com', 'fazal123', 0, 'bmw', 'pending'),
(25, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'laptop', 'pending'),
(26, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'sho', 'uploaded'),
(27, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'sho', 'uploaded'),
(28, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'fan', 'uploaded'),
(29, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'fan', 'uploaded'),
(30, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'uploaded'),
(31, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'uploaded'),
(32, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'uploaded'),
(33, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'uploaded'),
(34, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'apple', 'uploaded'),
(35, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, '9', 'pending'),
(36, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, '9', 'pending'),
(37, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'camra', 'uploaded'),
(38, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(39, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(40, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(41, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(42, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(43, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glues', 'uploaded'),
(44, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(45, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(46, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(47, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(48, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(49, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(50, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(51, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(52, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(53, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'iron', 'uploaded'),
(54, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'laptop stand', 'pending'),
(55, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'bag', 'pending'),
(56, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'bag', 'pending'),
(57, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'battery', 'pending'),
(58, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'battery', 'pending'),
(59, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'battery', 'pending'),
(60, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'battery', 'pending'),
(61, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'charger', 'pending'),
(62, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glasses', 'uploaded'),
(63, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'camra', 'pending'),
(64, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'dsssss', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `user_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `full_name`, `email`, `password`, `mobile`, `user_image`) VALUES
(32, 'rahim', 'rahi@gmail.com', '$2y$10$zmr.8nJ62IPZLt8ZwVmEaOUEINZCQ2KuZfK2M/UqR4oh168c4Bs.y', '03429859057', 'Cute Cloth.jpg'),
(35, 'sadd', 'sad@gmail.com', '$2y$10$uQisJSOsgJfJaF.rEwHM5OZpo/Q/2BPptx888OBDYGLVv2F7l8kVu', '02347878787', 'mcycle.jpg'),
(46, 'fazal', 'fazal@gmail.com', 'fazal123', '03445656577', 'first.jpg'),
(49, 'ishaq', 'ishaq@gmail.com', '$2y$10$aIO/VWixDSMeVKVeSFszxeaus0PuTnIS9hWSrw0VpHJV440ohI10u', '03456767788', 'apple laptop.jpg'),
(50, 'ali', 'ali@gmail.com', 'ali123', '03456565766', 'Man Shart.jpg'),
(51, 'uzair', 'uzair@gmail.com', '123456', '03428989899', 'abdul-wali-ustaad1.jpg'),
(54, 'talha', 'talha@gmail.com', 'tlhakhan', '03424545655', 'mohsin-shave-papu.jpg'),
(55, 'jamal', 'jamal123@gmail.com', '$2y$10$OfzBeICyumCE8D1HHw3RD.YebtstY5x1xJsrLUCN7FMLFxgl4cv7G', '03425555567', 'abdul-wali-ustaad1.jpg'),
(56, 'kamal', 'kamal@gmail.com', '$2y$10$Ry5DVEsqizSLRahPpqlf6ujp0y5Q316T769VsrAj3CM/kjnLsDOti', '03425656655', ''),
(57, 'tufail', 'tufail@gmail.com', '$2y$10$rTjNAk6YnxWPT7B20lTv8OiA0jpuJr4l9iAUC4Rg68qeXmRl1K2wi', '03423434345', 'abdul-wali-ustaad1.jpg'),
(58, 'junaid', 'junaid@gmail.com', '$2y$10$Rve8ws0c1bqqp5db4QpXqubadxhHaQM9NeXCLb9ljhInOVqgIQQx2', '08456767788', 'B2.jpg'),
(59, 'waqar', 'waqar@gmail.com', '$2y$10$UXQYk6sfpZb7GJL/s7FvK.gkLT3ydeuNY6LNNAjpbkLQ8IGnuFyhK', '03425656644', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_product`
--
ALTER TABLE `bid_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_started_products`
--
ALTER TABLE `bid_started_products`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `searched_products`
--
ALTER TABLE `searched_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bid_product`
--
ALTER TABLE `bid_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `bid_started_products`
--
ALTER TABLE `bid_started_products`
  MODIFY `cus_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `searched_products`
--
ALTER TABLE `searched_products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- Database: `ecomm_en`
--
CREATE DATABASE IF NOT EXISTS `ecomm_en` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecomm_en`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_04_22_115305_create_users_table', 1),
(3, '2022_05_09_174748_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'LG mobile', '200', 'mobile', 'A smart Mobile Phone', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVEhgVEhQYFBIZFRwYFRoZGBkSGBoYGBgZGRgaGRgcIS8lHB8rIRgZJjgoKy8xNTs1HCQ7QDs0Py40NTEBDAwMEA8QHxISHzYrIys0NDQ0MTQ/NDE0NDE0NDQ0NDQ2NDQ0NDQ0NDE0NDQ0NDQ0NDE0NDQxMTQ0NDQxNDQ0NP/AABEIAOEA4QMBIgACEQEDEQH/', NULL, NULL),
(2, 'LG mobile', '400', 'mobile', 'A smart Mobile Phone', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVEhgVEhQYFBIZFRwYFRoZGBkSGBoYGBgZGRgaGRgcIS8lHB8rIRgZJjgoKy8xNTs1HCQ7QDs0Py40NTEBDAwMEA8QHxISHzYrIys0NDQ0MTQ/NDE0NDE0NDQ0NDQ2NDQ0NDQ0NDE0NDQ0NDQ0NDE0NDQxMTQ0NDQxNDQ0NP/AABEIAOEA4QMBIgACEQEDEQH/', NULL, NULL),
(3, 'LG Q7', '200', 'mobile', 'A smart Mobile Phone', '//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'aziz', 'aziz@gmail.com', '$2y$10$xf.xzPUu6g2nwgX/j2.Lb.xYjwqyYExO/eurHrfBQzzlIR2FbuBb.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `laraveldb`
--
CREATE DATABASE IF NOT EXISTS `laraveldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `laraveldb`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_22_155814_create_posts_table', 1),
(6, '2022_03_22_161449_create_customers_table', 1),
(7, '2022_03_22_163000_add_abc_to_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `laravel_crud`
--
CREATE DATABASE IF NOT EXISTS `laravel_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `laravel_crud`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_04_064456_create_post_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_author`, `created_at`, `updated_at`) VALUES
(1, 'aziz', 'unnabi', '2022-04-04 02:30:00', '2022-04-05 04:22:05'),
(3, 'shakeel', 'shakeels post', '2022-04-04 05:11:46', '2022-04-05 04:22:21'),
(4, 'Rahims post', 'Raheem Ullah', '2022-04-05 04:02:54', '2022-04-05 04:22:42'),
(5, 'hamad', 'hamads post', '2022-04-05 04:25:54', '2022-04-05 04:25:54'),
(6, 'hamad1', 'hamads first post', '2022-04-05 04:26:46', '2022-04-05 04:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"auction_fyp\",\"table\":\"bid_product\"},{\"db\":\"auction_fyp\",\"table\":\"bid_started_products\"},{\"db\":\"auction_fyp\",\"table\":\"user_signup\"},{\"db\":\"ecomm_en\",\"table\":\"products\"},{\"db\":\"ecomm_en\",\"table\":\"migrations\"},{\"db\":\"ecomm_en\",\"table\":\"users\"},{\"db\":\"laravel_crud\",\"table\":\"posts\"},{\"db\":\"laraveldb\",\"table\":\"posts\"},{\"db\":\"laraveldb\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-06-07 19:23:31', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
