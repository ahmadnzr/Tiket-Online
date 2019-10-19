-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 08:54 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_cus` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` enum('L','P') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cus`, `name`, `email`, `password`, `phone`, `gender`) VALUES
(1, 'Ahmad2', 'ahmad22', '1231231', '123', 'L'),
(2, 'Ahmad nizar', 'ahmad.rpl001@gmail.com', '12345', '23425677', 'L'),
(3, 'M. Rafa Zaidan Ahza', 'rafa@gmail.com', 'rafa01', '087763235723', 'L'),
(4, 'Aji', 'aji@gmail.com', 'aji', '087763235723', 'L'),
(5, 'Pak Aris Sudianto', 'pakaris@gmail.com', 'rpl2', '087763235723', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id_res` int(11) NOT NULL,
  `reservation_code` varchar(10) NOT NULL,
  `reservation_at` varchar(15) NOT NULL,
  `reservation_date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `seat_code` varchar(10) NOT NULL,
  `ruteid` int(11) NOT NULL,
  `depart_at` varchar(15) NOT NULL,
  `price` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_res`, `reservation_code`, `reservation_at`, `reservation_date`, `customerid`, `seat_code`, `ruteid`, `depart_at`, `price`, `userid`) VALUES
(2, '21334', '06:03:39 am', '2018-03-16', 2, '1', 2, '12:00', 'Rp. 400.000,00', 5),
(3, 'res15', '12:03:47 pm', '2018-03-17', 3, '2', 8, '11:00 am', 'Rp. 400.000,00', 7),
(4, 'res12', '01:03:28 pm', '2018-03-17', 5, '34', 8, '09:03 am', 'Rp.2.000.000,00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id_rute` int(11) NOT NULL,
  `depart_at` varchar(15) NOT NULL,
  `rute_from` varchar(100) NOT NULL,
  `rute_to` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `transportationid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `depart_at`, `rute_from`, `rute_to`, `price`, `transportationid`) VALUES
(3, '08:03 am', 'lombok', 'jakarta', 'Rp.2.000.000,00', 5),
(4, '02:03 pm', 'jakarta', 'lombok', 'Rp.2.000.000,00', 5),
(5, '05:20 pm', 'Yogyakarta', 'Kalimantan', 'Rp.1.500.000,00', 1),
(6, '11:00 am', 'Aceh', 'Lombok', 'Rp.2.000.000,00', 2),
(7, '11:00 am', 'Bandung', 'surabaya', 'Rp. 100.000,00', 3),
(8, '10:03 am', 'Selong', 'Sembalun', 'Rp. 500.000,00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE IF NOT EXISTS `transportation` (
  `id_transp` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` int(11) NOT NULL,
  `transportation_typeid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id_transp`, `code`, `description`, `seat_qty`, `transportation_typeid`) VALUES
(1, 'pes001', 'Pesawat Lion Air 001', 200, 1),
(2, 'pes002', 'Pesawat Lion Air 002', 100, 1),
(3, 'ker001', 'kerata api keren', 400, 2),
(4, 'ker002', 'kereta api modern jaman now', 500, 2),
(5, 'p003', 'pesawat garuda', 150, 1),
(6, 'p004', 'pesawat modrn', 500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transportation_type`
--

CREATE TABLE IF NOT EXISTS `transportation_type` (
  `id_transtype` int(11) NOT NULL,
  `description` enum('Pesawat','Kereta api') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation_type`
--

INSERT INTO `transportation_type` (`id_transtype`, `description`) VALUES
(1, 'Pesawat'),
(2, 'Kereta api');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `fullname`, `level`) VALUES
(1, 'ahmad', '011001100', 'ahmad nizar', 'admin'),
(7, 'rpl', 'rpl', 'Rekayasa Perangkat lunak', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_res`),
  ADD KEY `useid` (`userid`),
  ADD KEY `ruteid` (`ruteid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `transportationid` (`transportationid`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id_transp`),
  ADD KEY `transportation_typeid` (`transportation_typeid`);

--
-- Indexes for table `transportation_type`
--
ALTER TABLE `transportation_type`
  ADD PRIMARY KEY (`id_transtype`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id_transp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transportation_type`
--
ALTER TABLE `transportation_type`
  MODIFY `id_transtype` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
