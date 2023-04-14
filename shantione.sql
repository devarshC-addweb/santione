-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 12:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shantione`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `shop_name`, `email`, `password`) VALUES
(1, 'shanti', 'shanti@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` bigint(20) NOT NULL,
  `pro_id` bigint(20) NOT NULL,
  `cart_pro_img` varchar(50) NOT NULL,
  `cart_pro_price` varchar(50) NOT NULL,
  `car_prot_name` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `ip_server` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_id`, `cart_pro_img`, `cart_pro_price`, `car_prot_name`, `date_time`, `ip_server`) VALUES
(25, 2, 'admin/image/tblue1.webp', '36.00', 'Freshly Picked Floral Cropped Blouse', '2022-08-02 08:32:52pm', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` bigint(20) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'men', 'image/Men.jpg'),
(2, 'women', 'image/Women.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` bigint(20) NOT NULL,
  `cat_name` varchar(500) NOT NULL,
  `sub_cat_name` varchar(500) NOT NULL,
  `pro_name` varchar(500) NOT NULL,
  `pro_price` varchar(500) NOT NULL,
  `pro_img_1` varchar(500) NOT NULL,
  `pro_img_2` varchar(500) NOT NULL,
  `pro_img_3` varchar(500) NOT NULL,
  `pro_description` varchar(2000) NOT NULL,
  `in_active` varchar(50) NOT NULL,
  `date_time` varchar(500) NOT NULL,
  `ip_server` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `cat_name`, `sub_cat_name`, `pro_name`, `pro_price`, `pro_img_1`, `pro_img_2`, `pro_img_3`, `pro_description`, `in_active`, `date_time`, `ip_server`) VALUES
(1, 'women', 'tops', 'Forever Sunny Smocked Gingham Blouse', '48.00', 'image/tpink1.webp', 'image/tpink2.webp', 'image/tpink3.webp', 'Sunshine and the Forever Sunny Smocked Gingham Blouse are a match made in heaven! This cute top is made of a lightweight woven knit in a gingham print. It features an elastic sweetheart neckline, a smocked bust with functional drawstring ruching, long balloon sleeves with elastic cuffs, and a babydoll fit.', '1', '2022-03-26 07:37:56am', '::1'),
(2, 'women', 'tops', 'Freshly Picked Floral Cropped Blouse', '36.00', 'image/tblue1.webp', 'image/tblue2.webp', 'image/tblue3.webp', 'Bouquets are beautiful, but nothing beats the Freshly Picked Floral Cropped Blouse! This cute top is made of a lightweight woven knit in a floral print. It features a surplice v-neckline, 3/4 length flounce sleeves with elastic cuffs, and a cropped fit with a ruffled elastic bottom hem.', '1', '2022-03-26 07:46:44am', '::1'),
(3, 'women', 'tops', 'Not Just A Crush Babydoll Blouse', '42.00', 'image/tchoco1.webp', 'image/tchoco2.webp', 'image/tchoco3.webp', 'Get ready to be swept away to a world of romance by the Not Just A Crush Babydoll Blouse! This cute top is designed with a lightweight woven knit. It features a rounded neckline, a functional button front, 3/4 length sleeves with functional ties, and a flowy babydoll fit.', '1', '2022-03-26 07:48:30am', '::1'),
(4, 'women', 'tops', 'Spring For You Peplum Blouse', '34.00', 'image/tgrey1.webp', 'image/tgrey2.webp', 'image/tgrey3.webp', 'Falling in love has never been easier when your wearing the Spring For You Peplum Blouse! This cute top is designed with a lightweight woven knit in a boho print. It features a rounded neckline, short drop sleeves, and an oversized fit with a ruffle peplum hem.', '1', '2022-03-26 07:51:36am', '::1'),
(5, 'women', 'dress', 'Sweet At Heart Midi Dress', '30.00', 'image/dblack1.webp', 'image/dblack2.webp', 'image/dblack3.webp', 'The Sweet At Heart Midi Dress is tugging on our heartstrings! This cute dress is designed with a soft and stretchy jersey knit. It features a scoop neckline, short sleeves, and a relaxed fit with a split scoop hem that ends at a midi length.', '1', '2022-03-26 09:25:57am', '::1'),
(6, 'women', 'dress', 'All Yours Mini Dress', '36.00', 'image/dcream1.webp', 'image/dcream2.webp', 'image/dcream3.jpg', 'The All Yours Mini Dress is dedicated to making you look lovely! This cute dress is designed with a lightweight woven knit. It features a rounded neckline with a functional tie and keyhole detail, long balloon sleeves with elastic cuffs, a smocked waistband, and a flowy fit with a tiered hem.', '1', '2022-03-26 09:33:10am', '::1'),
(7, 'women', 'dress', 'View From The Meadow Floral Mini Dress', '48.00', 'image/dpink1.webp', 'image/dpink2.webp', 'image/dpink3.webp', 'The View From The Meadow Floral Mini Dress enchants with its simple sophistication! This cute dress is designed with a lightweight chiffon material in a dainty floral print. It features an elastic square neckline, a smocked bust, long flounce sleeves with smocked cuffs, and a flowy fit with a ruffle hem that ends at a mini length.', '1', '2022-03-26 09:34:57am', '::1'),
(8, 'women', 'dress', 'Hear My Heartbeat Linen Dress', '39.99', 'image/dblue1.webp', 'image/dblue2.webp', 'image/dblue3.webp', 'You have their hearts racing when you step out in the Hear My Heartbeat Linen Dress! This cute dress is designed with a lightweight crinkle linen material. It features a high neckline, functional tie straps that create an open back, and a flowy fit with a ruffle hem that ends at a mini length', '1', '2022-03-26 09:36:55am', '::1'),
(9, 'women', 'shoes', 'Maui Buckled Slide Sandals', '26.49', 'image/cpink1.webp', 'image/cpink2.webp', 'image/cpink3.webp', 'Enjoy the warm weather with the Maui Buckled Slide Sandals! These trendy lightweight rubber slides feature adjustable double buckles. Style the Maui Slides to the pool or beach or with denim shorts + a tee!', '1', '2022-03-26 09:44:23am', '::1'),
(10, 'women', 'shoes', 'Aspen Ankle Booties', '44.99', 'image/bblack1.webp', 'image/bblack2.webp', 'image/bblack3.webp', 'This season will have you reaching for the Aspen Ankle Booties! These cute ankle booties are designed with a faux leather. They feature a pointed toe, and a block heel. They also feature an ankle-high shaft with v-cutouts on the in-step and out-step.', '1', '2022-03-26 09:47:16am', '::1'),
(11, 'women', 'shoes', 'Boulder Block Heel Booties', '39.99', 'image/bchiku1.webp', 'image/bchiku2.webp', 'image/bchiku3.webp', 'Step out looking proper and polished with the help of the Boulder Block Heel Booties! These cute ankle booties are designed with a soft faux leather. They feature a pointed toe, and a block heel. They also feature an ankle-high shaft with zippers on both the in-step and out-step.', '1', '2022-03-26 09:48:02am', '::1'),
(12, 'women', 'shoes', 'Hampton High Top Platform Sneakers', '65.49', 'image/bwhite3.webp', 'image/bwhite1.webp', 'image/bwhite2.webp', 'Elevate your casual look with ease thanks to the trendy design of the Hampton High Top Platform Sneakers! These edgy sneakers are designed with a vegan leather. They have a rounded toe upper, a classic lace-up front, a zipper in-step, and a platform sole to finish off the look! Style the Hampton Sneakers with denim and a graphic tee for a trendy look!', '1', '2022-03-26 09:50:22am', '::1'),
(13, 'women', 'sirt', 'All The Trends Plaid Tunic', '37.90', 'image/sbadami1.webp', 'image/sbadami2.webp', 'image/sbadami3.webp', 'Be a friend to all the trends in the All The Trends Plaid Tunic! This cute top is designed with a lightweight woven knit in a plaid pattern. It features a collared neckline, a functional button front, long sleeves with functional button cuffs, and an oversized fit with side pockets.', '1', '2022-03-26 09:54:42am', '::1'),
(14, 'women', 'sirt', 'All About You Striped Oversized Ruffle Blouse', '39.09', 'image/swhite1.webp', 'image/swhite2.webp', 'image/swhite3.webp', 'No matter the type of event, you be the center of attention with the All About You Striped Oversized Ruffle Blouse! This cute top is made of a textured lightweight woven knit in a striped pattern. It features a collared neckline, a functional button front, short drop sleeves with ruffle detailing, and an oversized fit.', '1', '2022-03-26 09:56:39am', '::1'),
(15, 'women', 'sirt', 'Make A Move Button-Front Top', '26.90', 'image/sblack1.webp', 'image/sblack2.webp', 'image/sblack3.webp', 'Strut your stuff in confidence with the Make A Move Button-Front Top! This cute top is made of a soft and stretchy crepe knit. It features a v-neckline, a functional button front, short sleeves, and an oversized fit. Style the Make A Move Button-Front Top with denim and sneakers for a more casual look! Available in 3 colors.', '1', '2022-03-26 09:58:56am', '::1'),
(16, 'women', 'sirt', 'More To Adore Striped Button-Up Blouse', '44.90', 'image/smulti1.webp', 'image/smulti2.webp', 'image/smulti3.webp', 'When you in the mood to do the most, break out the More To Adore Striped Button-Up Blouse and embrace your extra self! This cute top is designed with a semi-sheer lightweight woven knit in a colorful striped print. It features a collared v-neckline, a functional button front, short sleeves, and an oversized fit with a split hem.', '1', '2022-03-26 10:01:01am', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` bigint(20) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `sub_cat_name` varchar(50) NOT NULL,
  `sub_cat_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `cat_name`, `sub_cat_name`, `sub_cat_img`) VALUES
(1, 'women', 'tops', 'image/top_sub_scategory.webp'),
(2, 'women', 'dress', 'image/dress_sub_cate.webp'),
(3, 'women', 'shoes', 'image/cpink1.webp'),
(4, 'women', 'sirt', 'image/sirt_sub_cat.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `ip_server` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `gender`, `mobile`, `dob`, `date_time`, `ip_server`) VALUES
(1, 'dev', 'd@gmail.com', 'dev', 'male', '1111112222', '2022-03-22', '2022-03-09 10:57:13am', '::1'),
(2, 'devarsh', 'd@gmail.com', '', '', '', '', '2022-03-10 06:00:45am', '::1'),
(3, '', '', '', '', '', '2022-04-20', '2022-04-09 08:26:07am', '::1'),
(4, 'Niki chauhan', 'n@gmail.com', 'niki', 'female', '1234567890', '2022-04-14', '2022-04-09 08:27:07am', '::1'),
(5, 'manish', 'manish@gmail.com', 'manish', 'male', '1234567890', '2022-04-07', '2022-04-18 07:30:38pm', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
