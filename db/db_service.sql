-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 06:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleaning service`
--

CREATE TABLE `cleaning service` (
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jenis_pembayaran` varchar(150) NOT NULL,
  `jenis_pembangunan` varchar(150) NOT NULL,
  `jenis_service` varchar(150) NOT NULL,
  `jenis_ac` varchar(150) NOT NULL,
  `keluhan_ac` varchar(255) NOT NULL,
  `jadwal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah teknisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penugasan`
--

CREATE TABLE `penugasan` (
  `teknisi_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teknisis`
--

CREATE TABLE `teknisis` (
  `no_telpon` int(11) NOT NULL,
  `teknisi_id` int(11) NOT NULL,
  `nama lengkap` varchar(150) NOT NULL,
  `status_pembayaran` varchar(150) NOT NULL,
  `status_order` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `no_telpon`, `password`, `email`, `alamat`) VALUES
(1, 'Fakhri Akmal', '0829389283', '5f4dcc3b5aa765d61d8327deb882cf99', 'akmal@gmail.com', 'Gang Kostrad Cilodong'),
(3, 'irvan pramana', '', 'caf1a3dfb505ffed0d024130f58c5cfa', 'admin@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cleaning service`
--
ALTER TABLE `cleaning service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `jenis_pembayaran` (`jenis_pembayaran`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`teknisi_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `teknisis`
--
ALTER TABLE `teknisis`
  ADD PRIMARY KEY (`no_telpon`),
  ADD KEY `teknisi_id` (`teknisi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `nama lengkap` (`nama_lengkap`),
  ADD KEY `no_telpon` (`no_telpon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cleaning service`
--
ALTER TABLE `cleaning service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `teknisi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teknisis`
--
ALTER TABLE `teknisis`
  MODIFY `no_telpon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cleaning service`
--
ALTER TABLE `cleaning service`
  ADD CONSTRAINT `cleaning service_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `penugasan`
--
ALTER TABLE `penugasan`
  ADD CONSTRAINT `penugasan_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `cleaning service` (`service_id`);

--
-- Constraints for table `teknisis`
--
ALTER TABLE `teknisis`
  ADD CONSTRAINT `teknisis_ibfk_1` FOREIGN KEY (`teknisi_id`) REFERENCES `penugasan` (`teknisi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
