-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 05:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalps`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id_auth` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `about_me` text NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0' COMMENT '0=user, 1=admin, 2=super'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id_auth`, `email`, `password`, `username`, `address`, `about_me`, `level`) VALUES
(2, 'laland@gmail.com', 'lala', 'lala', '  jl. Manggarai 13', 'lala', 1),
(4, 'admin@admin.php', 'c84258e9c39059a89ab77d846ddab909', 'admin', '', '', 1),
(6, 'user@user.php', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', '  jl lempang 211', '', 0),
(7, 'admin2@admin.php', '12345', 'admin2', 'jl. papa abu-abu 11', 'seorang admin yang sungguh halu ', 1),
(11, 'saya@sya.sya', '20c1a26a55039b30866c9d0aa51953ca', 'saya', '', '', 0),
(666, 'salman@gmail.com', 'salman', 'salman', 'jalan jalan', 'ojritt', 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `id_package` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_auth`, `id_package`) VALUES
(7, 2, 1),
(8, 6, 2),
(10, 6, 1),
(11, 6, 2),
(12, 6, 3),
(13, 6, 3),
(14, 11, 1),
(15, 11, 1),
(16, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages_travel`
--

CREATE TABLE `packages_travel` (
  `id_package` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `decs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages_travel`
--

INSERT INTO `packages_travel` (`id_package`, `name`, `price`, `days`, `decs`) VALUES
(1, 'Yogyakarta Travel', 34, 3, 'Mengelilingi Yogyakarta selamaa 3 hari, menginap di hotel ternama bintang 4 dengan jaminan akomodasi.'),
(2, 'Lombok Travel', 43, 4, '   Mengelilingi Bali selamaa 3 hari, menginap di hotel ternama bintang 5 dengan jaminan akomodasi.        '),
(3, 'Bandung Tour', 28, 3, '   Mengelilingi bandung 3 hari dengan harga $28 beserta beberapa fasilitas menarik lainnya seperti free transport dan penginapan '),
(4, 'bali', 4, 10, '   asdasdas '),
(5, 'dedw', 32, 233, '  sdcsdcdcd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `level` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `no_telp`, `level`, `created_at`) VALUES
(1, 'cahya', 'cahya', '', '', '', '', 'User', '2020-10-29 12:05:10'),
(2, 'Abdullas', 'fuck', 'abdullas@gmail.com', 'Abdullas Bin Rizieq', 'Mekkah 666', '081217360', '', '2020-10-30 03:35:09'),
(3, 'Abdullas', 'abdul', 'abdullas@gmail.com', 'Abdullas Bin Rizieq', 'Mekkah 666', '12344566', 'User', '2020-10-30 03:38:45'),
(4, 'abduldellas', 'habibdellas', '', '', '', '', 'Admin', '2020-11-10 08:05:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_auth` (`id_auth`),
  ADD KEY `id_package` (`id_package`);

--
-- Indexes for table `packages_travel`
--
ALTER TABLE `packages_travel`
  ADD PRIMARY KEY (`id_package`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id_auth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `packages_travel`
--
ALTER TABLE `packages_travel`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_auth`) REFERENCES `auth` (`id_auth`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_package`) REFERENCES `packages_travel` (`id_package`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
