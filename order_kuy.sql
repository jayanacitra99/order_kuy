-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 06:32 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_kuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `PASSWORD` text,
  `ADMIN_ROLE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `USERNAME`, `PASSWORD`, `ADMIN_ROLE`) VALUES
(1, 'JAYANA', '64e8efe726d48358d8692ff6ded50a97', 'KASIR'),
(2, 'ASHA', '3a36b513e63e14a1355896711a093623', 'CHEF');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMER_ID` int(11) NOT NULL,
  `NO_TABLE` int(11) DEFAULT NULL,
  `CUSTOMER_NAME` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER_ID`, `NO_TABLE`, `CUSTOMER_NAME`) VALUES
(5, 1, 'Jayana'),
(6, 2, 'Nasha'),
(7, 3, 'Irvina'),
(8, 2, 'Asha'),
(9, 5, 'Farras'),
(10, 6, 'Jay'),
(11, 6, 'Jay'),
(12, 5, 'Ash'),
(13, 4, 'JayanaC'),
(14, 5, 'JayanaCi'),
(15, 1, 'Farras');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `DETAIL_ID` int(11) NOT NULL,
  `ORDER_ID` int(11) NOT NULL,
  `ITEMS_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `STATUS` enum('WAITING','COOKING','READY','DELIVERED','DONE') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`DETAIL_ID`, `ORDER_ID`, `ITEMS_ID`, `QUANTITY`, `STATUS`) VALUES
(6, 5, 5, 3, 'DONE'),
(7, 5, 32, 4, 'DONE'),
(9, 6, 10, 3, 'DONE'),
(11, 6, 45, 3, 'DONE'),
(14, 8, 5, 2, 'DONE'),
(15, 8, 5, 4, 'DONE'),
(16, 8, 31, 3, 'DONE'),
(17, 8, 43, 5, 'DONE'),
(18, 9, 3, 3, 'DONE'),
(19, 9, 30, 4, 'DONE'),
(20, 10, 9, 2, 'DONE'),
(21, 10, 13, 2, 'DONE'),
(22, 10, 37, 2, 'DONE'),
(23, 10, 44, 1, 'DONE'),
(24, 10, 30, 1, 'DONE'),
(25, 11, 9, 2, 'DONE'),
(26, 11, 13, 2, 'DONE'),
(27, 11, 37, 2, 'DONE'),
(28, 11, 44, 1, 'DONE'),
(29, 11, 30, 1, 'DONE'),
(30, 12, 3, 2, 'DONE'),
(31, 12, 18, 1, 'DONE'),
(32, 12, 15, 3, 'DONE'),
(33, 12, 31, 4, 'DONE'),
(34, 12, 41, 2, 'DONE'),
(35, 13, 4, 3, 'DONE'),
(36, 13, 31, 5, 'DONE'),
(37, 14, 2, 2, 'DONE'),
(38, 14, 30, 3, 'DONE'),
(39, 15, 4, 2, 'DONE'),
(40, 15, 18, 3, 'DONE'),
(41, 15, 32, 2, 'DONE'),
(42, 15, 44, 4, 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ITEMS_ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `CATEGORY` varchar(50) NOT NULL,
  `KIND` enum('1','2') NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `PICTURE` text NOT NULL,
  `PRICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ITEMS_ID`, `NAME`, `CATEGORY`, `KIND`, `DESCRIPTION`, `PICTURE`, `PRICE`) VALUES
(1, 'BLACKPEPPER', 'steak original & import', '1', 'STEAK AYAM DENGAN TAMBAHAN BLACKPAPER', 'blackpepper.jpg', 30000),
(2, 'CHICKEN PEPPER', 'steak original & import', '1', 'DAGING AYAM,KENTANG,SAYUR MIX,BROWN SAUSE', 'chicken_pepper.jpg\r\n', 20500),
(3, 'STEAK BURGER CHICKEN', 'steak original & import', '1', 'DAGING AYAM OLAHAN,SPAGHETTI,KENTANG,SAYUR MIX, BROWN SAUCE', 'steak_burger_chicken.jpg', 19000),
(4, 'STEAK BURGER BEEF', 'steak original & import', '1', 'DAGING SAPI OLAHAN,SPAGHETTI,KENTANG,SAYUR MIX,BROWN SAUCE', 'steak_burger_beef.jpg', 22000),
(5, 'RIB EYE IMPORT', 'steak original & import', '1', 'RIB,KENTANG,SAYUR MIX,BROWN SAUSE + MUSHROOM', 'rib_eye_import.jpg', 44000),
(6, 'SIRLOIN IMPORT', 'steak original & import', '1', 'SIRLOIN,KENTANG,SAYUR MIX, BROWN SAUSE + MUSHROOM', 'sirloin_import.jpg', 47000),
(7, 'CHICKEN MUSHROOM', 'steak original & import', '1', 'DAGING AYAM,KENTANG,SAYUR MIX,BROWN SAUSE + MUSHROOM', 'chicken_mushroom.jpg', 20500),
(8, 'CHICKEN DOUBLE', 'steak ala waroeng', '1', 'DAGING AYAM,KENTANG,SAYUR MIX,BROWN SAUCE', 'chicken_double.jpg', 23000),
(9, 'STEAK WAROENG', 'steak ala waroeng', '1', 'TENDERLOIN LOKAL,CHICKEN,SHRIMP,KENTANG,SAYUR MIX, BROWN SAUCE', 'steak_waroeng.jpg', 20000),
(10, 'CHICKEN', 'steak ala waroeng', '1', 'DAGING AYAM,KENTANG,SAYUR MIX,BROWN SAUCE', 'chicken.jpg', 17000),
(11, 'SIRLOIN DOUBLE', 'steak ala waroeng', '1', 'SIRLOIN LOKAL,KENTANG,SAYUR MIX,BROWN SAUCE', 'sirloin_double.jpg', 25000),
(12, 'SIRLOIN SINGLE', 'steak ala waroeng', '1', 'SIRLOIN LOKAL,KENTANG,SAYUR MIX,BROWN SAUCE', 'sirloin_single.jpg', 19000),
(13, 'STEAK CUMI', 'steak ikan', '1', 'CUMI,BROWN SAUCE & MIX VEGETABLE', 'steak_cumi.jpg', 17500),
(14, 'STEAK KAKAP', 'steak ikan', '1', 'IKAN KAKAP,KENTANG,SAYUR MIX,BROWN SAUCE', 'steak_kakap.jpg', 17500),
(15, 'TUNA MUSHROOM', 'steak ikan', '1', 'IKAN TUNA,KENTANG,SAYUR MIX,BROWN SAUCE + MUSHROOM', 'tuna_mushroom.jpg', 20000),
(16, 'TUNA PEPPER', 'steak ikan', '1', 'IKAN TUNA,KENTANG,SAYUR MIX,BROWN SAUCE + PEPPER', 'tuna_pepper.jpg', 20000),
(17, 'MUSHROOM', 'other', '1', 'JAMUR', 'mushroom.jpg', 4000),
(18, 'KENTANG LOKAL', 'other', '1', 'KENTANG LOKAL', 'kentang_lokal.jpg', 6000),
(19, 'SPAGHETTI', 'other', '1', 'SPAGHETTI', 'spaghetti.jpg', 11000),
(20, 'FRENCH FRIES', 'other', '1', 'FRENCH FRIES', 'french_fries.jpg', 9500),
(21, 'NASI PAPRIKA SAPI', 'other', '1', 'NASI PUTIH,DAGING SAPI CINCANG,PAPRIKA,TOMAT DAN TIMUN', 'nasi_paprika_sapi.jpg', 15500),
(22, 'NASI PAPRIKA AYAM', 'other', '1', 'NASI PUTIH,DAGING AYAM CINCANG,PAPRIKA,TIMUN DAN TOMAT', 'nasi_paprika_ayam.jpg', 13500),
(23, 'NASI PUTIH', 'other ', '1', 'NASI PUTIH', 'nasi_putih.jpg', 4500),
(24, 'KUAH STEAK', 'other', '1', 'KUAH STEAK', 'kuah_steak.jpg', 5000),
(25, 'SAYUR LENGKAP', 'other', '1', 'KENTANG,JAGUNG,BUNCIS DAN WORTEL', 'sayur_lengkap.jpg', 4500),
(26, 'CHICKEN DRUMSTICK', 'other', '1', 'DAGING AYAM OLAHAN,SAYUR MIX, SAUCE', 'chicken_drum_stick.jpg', 17000),
(27, 'CHICKEN CORDON BLEU', 'other', '1', 'DAGING AYAM,SMOKED BEEF,KEJU,KENTANG,SAYUR MIX,BROWN SAUCE', 'chicken_cordon_bleu.jpg', 21000),
(28, 'MILKSHAKE CHOCOLATE WITH JELLY', 'milkshake', '2', 'MILKSHAKE CHOCOLATE WITH JELLY', 'milkshake_chocolate_with_jelly.jpg', 16500),
(29, 'MILKSHAKE CHOCOLATE SPESIAL', 'milkshake', '2', 'MILKSHAKE CHOCOLATE SPESIAL', 'milkshake_chocolate.jpg', 17500),
(30, 'MILKSHAKE CHOCOLATE', 'milkshake', '2', 'MILKSHAKE CHOCOLATE', 'milkshake_chocolate.jpg', 13500),
(31, 'MILKSHAKE VANILLA WITH JELY', 'milkshake', '2', 'MILKSHAKE VANILLA WITH JELY', 'milkshake_vanilla_with_jelly.jpg', 16500),
(32, 'MILKSHAKE VANILLA SPECIAL', 'milkshake', '2', 'MILKSHAKE VANILLA SPECIAL', 'milkshake_vanilla.jpg', 17000),
(33, 'MILKSHAKE STRAWBERY WITH JELY', 'milkshake', '2', 'MILKSHAKE STRAWBERY WITH JELY', 'milkshake_strawberry_with_jelly.jpg', 16500),
(34, 'MILKSHAKE STRAWBERY SPECIAL', 'milkshake', '2', 'MILKSHAKE STRAWBERY SPECIAL', 'milkshake_strawberry.jpg', 17000),
(35, 'MILKSHAKE STRAWBERY', 'milkshake', '2', 'MILKSHAKE STRAWBERY', 'milkshake_strawberry.jpg', 13500),
(36, 'JUICE ORANGE', 'juice & mix', '2', 'JUICE ORANGE', 'juice_orange.jpg', 13000),
(37, 'CAPPUCINO WITH JELY', 'juice & mix', '2', 'CAPPUCINO WITH JELY', 'cappucino_with_jelly.jpg', 14000),
(38, 'JERUK', 'juice & mix', '2', 'JERUK', 'jeruk.jpg', 8000),
(39, 'JUICE ALPUKAT', 'juice & mix', '2', 'JUICE ALPUKAT', 'juice_alpukat.jpg', 13500),
(40, 'CAPPUCINO', 'hot & ice', '2', 'CAPPUCINO', 'cappucino.jpg', 11000),
(41, 'LEMON TEA', 'hot & ice', '2', 'LEMON TEA', 'lemon_tea.jpg', 9000),
(42, 'TEH MANIS', 'hot & ice', '2', 'TEH MANIS', 'teh_manis.jpg', 5000),
(43, 'ORANGE FLOAT', 'float', '2', 'ORANGE FLOAT', 'orange_float.jpg', 16500),
(44, 'CAPPUCINO FLOAT', 'float', '2', 'CAPPUCINO FLOAT', 'cappucino_float.jpg', 14500),
(45, 'AVOCADO FLOAT', 'float', '2', 'AVOCADO FLOAT', 'avocado_float.jpg', 17000);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `ORDER_ID` int(11) NOT NULL,
  `ADMIN_ID` int(11) DEFAULT NULL,
  `CUSTOMER_ID` int(11) DEFAULT NULL,
  `TOTAL_BAYAR` int(11) DEFAULT NULL,
  `BAYAR` int(11) DEFAULT NULL,
  `KEMBALIAN` int(11) DEFAULT NULL,
  `DATE` varchar(255) NOT NULL,
  `STATUS` enum('UNPAYED','PAYED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`ORDER_ID`, `ADMIN_ID`, `CUSTOMER_ID`, `TOTAL_BAYAR`, `BAYAR`, `KEMBALIAN`, `DATE`, `STATUS`) VALUES
(5, 1, 5, 200000, 250000, 50000, '09 Fri-Feb-2018', 'PAYED'),
(6, 1, 6, 217500, 220000, 2500, '11 Sun-Feb-2018', 'PAYED'),
(8, 1, 8, 396000, 400000, 4000, '11 Sun-Feb-2018', 'PAYED'),
(9, 1, 9, 111000, 120000, 9000, '11 Sun-Feb-2018', 'PAYED'),
(10, 1, 10, 131000, 150000, 19000, '11 Sun-Feb-2018', 'PAYED'),
(11, 1, 11, 131000, 150000, 19000, '11 Sun-Feb-2018', 'PAYED'),
(12, 1, 12, 188000, 200000, 12000, '11 Sun-Feb-2018', 'PAYED'),
(13, 1, 13, 148500, 150000, 1500, '12 Mon-Feb-2018', 'PAYED'),
(14, 1, 14, 81500, 100000, 18500, '12 Mon-Feb-2018', 'PAYED'),
(15, 1, 15, 154000, 200000, 46000, '13 Tue-Feb-2018', 'PAYED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`DETAIL_ID`),
  ADD KEY `detail_order_ibfk_1` (`ITEMS_ID`),
  ADD KEY `detail_order_ibfk_2` (`ORDER_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ITEMS_ID`),
  ADD KEY `ITEMS_ID` (`ITEMS_ID`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`),
  ADD KEY `ADMIN_ID` (`ADMIN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUSTOMER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ITEMS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`ITEMS_ID`) REFERENCES `items` (`ITEMS_ID`),
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`ORDER_ID`) REFERENCES `order_list` (`ORDER_ID`);

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`),
  ADD CONSTRAINT `order_list_ibfk_2` FOREIGN KEY (`ADMIN_ID`) REFERENCES `admin` (`ADMIN_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
