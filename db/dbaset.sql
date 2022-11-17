-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 04:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaset`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_aset`
--

CREATE TABLE `tabel_aset` (
  `id` int(11) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_aset`
--

INSERT INTO `tabel_aset` (`id`, `nama_aset`, `jenis`, `lokasi`, `jumlah`) VALUES
(1, 'Rumah', 'Property', 'Narmada', 2),
(2, 'Mobil', 'Kendaraan', 'Gebang Baru', 10),
(3, 'HP', 'Android', 'Babakan', 56),
(4, 'Ikan Arwana', 'Rare Fish', 'Selagalas', 100),
(5, 'Cincin', 'Perhiasan', 'Babakan', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_aset`
--
ALTER TABLE `tabel_aset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_aset`
--
ALTER TABLE `tabel_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
