-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2016 at 08:11 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.10RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auction_fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `role` text NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `job` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `role`, `admin_email`, `password`, `contact`, `country`, `job`, `image`) VALUES
(1, 'Aziz  un nabi', 'Admin', 'azizse971@gmail.com', 'aziz123', '03429859057', 'Pakistan', 'Student', 'put-your-best-smile-forward-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bid_product`
--

CREATE TABLE IF NOT EXISTS `bid_product` (
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
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;

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
(152, 'uzair', 'uzair@gmail.com', 2147483647, 'ipad', 'iPad_mini_inHand_Wht_iOS6_PRINT.jpg', 'this is very good ipad', 'peshawar', 'Pakistan', 'Tablets', '2016-07-13', '2016-09-03', 0, 'pending '),
(153, 'ahmad', 'ahmadkhan@gmail.com', 566666666, 'dell laptop', 'dell-laptop-battery-problem.jpg', 'this is very good laptop', 'peshawar', 'Pakistan', 'Laptops', '2016-07-14', '2016-11-11', 0, 'pending '),
(154, 'zia', 'ziya@gmail.com', 2147483647, 'dress', 'Dress.jpg', 'this is very beutiful dress', 'dir lower', 'Pakistan', 'Others', '2016-07-14', '2016-11-11', 0, 'pending '),
(155, 'junaid', 'junaid@gmail.com', 2323323, 'mototcycle', 'mcycle.jpg', 'this is very good motorcycle', 'dir lower', 'Pakistan', 'Others', '2016-07-14', '2016-11-11', 0, 'pending '),
(156, 'usman', 'usman@gmail.com', 2147483647, 'glasses', 'Nice Glasses.jpg', 'these are good glasses', 'dir lower', 'Pakistan', 'Others', '2016-07-23', '2016-10-29', 0, 'pending '),
(157, 'ahmad', 'fazal@gmail.com', 3333333, 'female shoes', 'images(3).jpg', 'these are very good shoes', 'dir lower', 'Pakistan', 'Others', '2016-07-18', '2016-08-11', 0, 'pending ');

-- --------------------------------------------------------

--
-- Table structure for table `bid_started_products`
--

CREATE TABLE IF NOT EXISTS `bid_started_products` (
  `cus_id` int(100) NOT NULL,
  `product_name` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `bid_rate` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

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
(144, 'smart pointer', ' sif', ' ullah', 700, 'saif@gmail.com', '990ddd', 'China', '333333333333');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_payments`
--

CREATE TABLE IF NOT EXISTS `paypal_payments` (
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

CREATE TABLE IF NOT EXISTS `searched_products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `search_keyword` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

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
(62, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'glasses', 'uploaded'),
(63, 'fazal', 'fazal@gmail.com', 'fazal123', 2147483647, 'camra', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE IF NOT EXISTS `user_signup` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `user_image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bid_product`
--
ALTER TABLE `bid_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `bid_started_products`
--
ALTER TABLE `bid_started_products`
  MODIFY `cus_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `searched_products`
--
ALTER TABLE `searched_products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
