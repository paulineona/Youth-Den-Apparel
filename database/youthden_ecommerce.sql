-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 06:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youthden_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `img_name` varchar(150) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_name`, `product_price`, `description`, `img_name`, `featured`, `stock`) VALUES
(1, 'Coffee Club', 550, 'coffee is life', '6198cb60cdf414.69797380.png', 'Yes', 20),
(2, 'No Fear', 650, 'no fear', '6198cdad0d6375.56007800.png', 'No', 30),
(3, 'Euphoria', 700, 'Euphoria', '6198ceceb940b4.25893407.png', 'Yes', 50),
(4, 'Too High', 650, 'Too High', '6198cf004d3357.87151959.png', 'No', 45),
(5, 'Plants & Music', 500, 'Too High', '6198cf27b66551.49623927.png', 'Yes', 43),
(6, 'Zimer', 750, 'Zimer', '61a05c950cec12.64504695.png', 'Yes', 50),
(8, 'Placebo', 550, 'Placebo', '61a0f99c56ae03.94378719.png', 'Yes', 70),
(9, 'Vice', 650, 'Vice is limited edition', '61ae206ee4c9a7.52225897.png', 'No', 25),
(11, 'Vinyl', 550, 'Vinyl', '61ae3f195e8d46.85787570.png', 'No', 155);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `name`, `email`, `date`, `role`) VALUES
(1, 'Mike Arvene Lantin', 'mikearvene.lantin@g.batstate-u.edu.ph', '2021-10-28', 'admin'),
(2, 'Pauline Mae Ona', 'paulinemae.ona@g.batstate-u.edu.ph', '2021-10-28', 'admin'),
(3, 'Kristia Isabelle Samson', 'kristiaisabelle.samson@g.batstate-u.edu.ph', '2021-11-26', 'admin'),
(4, 'Shainne Amurao', 'shainne.amurao@g.batstate-u.edu.ph', '2021-11-26', 'admin'),
(5, 'Jhun Gutierrez', 'jhun.gutierrez@g.batstate-u.edu.ph', '2021-11-30', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
