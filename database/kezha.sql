-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 04:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kezha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cName` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cName`, `description`) VALUES
(1, 'Birthday Cakes', 'test'),
(2, 'Wedding Cakes', 'test'),
(3, 'Cupcakes', 'test'),
(4, 'Specialty', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email_address`, `contact`, `gender`, `country`, `datetime`) VALUES
(1, 'Sean Gabriel', 'joannaseang@gmail.com', '09392459877', 'Female', 'Philippines', '2019-05-06 08:50:32'),
(2, 'Micahel Balibrea', 'rrrrr@gmail.com', '09392459877', 'Male', 'Philippines', '2019-05-06 09:31:01'),
(3, 'LOL LOL', 'rrrrr@gmail.com', '09392459877', 'Female', 'Philippines', '2019-05-06 09:31:26'),
(4, 'adam', 'dsfsd@gmail.com', '098888888888', 'Male', 'Philippines', '2019-05-06 09:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cakename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryID` int(11) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `Cakename`, `categoryID`, `uploaded_on`, `price`, `status`) VALUES
(31, 'f2b545a8abb14f8706f808a79277c061.jpg', 'Cars', 1, '2019-05-16 11:01:22', '1000.00', '1'),
(32, 'e4bd41ac6273016ddf41c11e1d68f5bd.jpg', 'Spidey', 1, '2019-05-16 11:01:45', '1000.00', '1'),
(33, '0d3adee051531c15b3509b4d4d75ce7b.jpg', 'Plane', 1, '2019-05-16 11:02:18', '1000.00', '1'),
(34, '11081b0ce75b0e635708443850bef902.jpg', 'Castle', 0, '2019-05-16 11:02:38', '1000.00', '1'),
(35, '98a892aea3359481ae30e7b66c44d7a8.jpg', 'Clock', 0, '2019-05-16 11:02:54', '1000.00', '1'),
(36, '8fbc7ff7b6ed792ab5e02b014c54332d.jpg', 'Marvel', 1, '2019-05-16 11:04:02', '1000.00', '1'),
(37, 'bb28468f6d1a921fdfc56f85d0bad0a3.jpg', 'Mothers', 1, '2019-05-16 11:04:19', '1500.00', '1'),
(38, '1b373bed5c8580d9635d7e60ac81d5a0.jpg', 'Choco', 1, '2019-05-16 11:05:11', '1000.00', '1'),
(39, '031771256855a60b49c3c17bc188cd80.jpg', 'Two-Layer', 1, '2019-05-16 11:05:27', '2000.00', '1'),
(40, '436db107774b95e069c62fd0bacab134.jpg', 'Fairy', 1, '2019-05-16 11:06:18', '2000.00', '1'),
(41, '992dbb54951a69100cb824e5d5b2b047.jpg', 'Wedding 1', 2, '2019-05-16 11:06:49', '3000.00', '1'),
(42, '3ca9a8ecb0db5a3994c9ad700e36f653.jpg', 'Wedding2', 2, '2019-05-16 11:07:05', '3000.00', '1'),
(43, 'f495ac9b33a24f42cef10f55d7beebab.jpg', 'Colorful', 3, '2019-05-16 11:07:48', '500.00', '1'),
(44, '4d1bee42abeded2b6b701373d7128deb.jpg', 'Themed', 3, '2019-05-16 11:08:14', '500.00', '1'),
(45, 'aac772216aecbeca0e86d06671fe985a.jpg', 'Birthday', 3, '2019-05-16 11:08:46', '1000.00', '1'),
(46, '5be907b1ff540573a6ca83e3f9a05383.jpg', 'Mickey', 3, '2019-05-16 11:09:19', '1500.00', '1'),
(47, '1060bff71539b72cdcb9141968e25ffc.jpg', 'ChocoBrow', 4, '2019-05-16 11:09:51', '500.00', '1'),
(48, 'b5190af1bcc87e359657b13ad793b0e4.jpg', 'Pops', 4, '2019-05-16 11:10:06', '200.00', '1'),
(49, '45ccf85020b8c1ea4700a022b654ce57.jpg', 'Brownies', 4, '2019-05-16 11:10:50', '300.00', '1'),
(50, '6cc7ec2c4a5f698ae93b3bfdb296b85b.jpg', 'Cupcakes', 4, '2019-05-16 11:11:11', '700.00', '1'),
(51, '81fa1c7af40fa89439d803680da4380c.jpg', 'Cuppy', 4, '2019-05-16 11:11:42', '500.00', '1'),
(52, '849bd8f7c64dd2de38dd067b8f318d67.jpg', 'Best Seller Choco', 3, '2019-05-16 11:12:18', '1000.00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`customer_id`, `customer_name`, `email_address`, `contact`, `DateTime`) VALUES
(2, 'Sean Gabriel', 'joannaseang@gmail.com', '09392459877', '2019-03-21 23:14:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
