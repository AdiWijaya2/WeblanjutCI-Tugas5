-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 05:01 PM
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
-- Database: `web_2001050006`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_2001050006`
--

CREATE TABLE `tabel_2001050006` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_2001050006`
--

INSERT INTO `tabel_2001050006` (`id`, `nama`, `nim`, `alamat`, `prodi`) VALUES
(1, 'Adi Wijaya', '2001050006', 'Cakra', 'D3 RPL'),
(2, 'Ahmad Mustaan', '2001050005', 'Lotim', 'D3 RPL'),
(3, 'Dhira ', '2001050004', 'Karang Baru', 'D3 RPL'),
(4, 'Novi', '2001050008', 'Karang Baru', 'D3 RPL'),
(5, 'Ari', '2001050001', 'Seganteng', 'D3 RPL'),
(6, 'Yahya', '1001050009', 'Gebang', 'D3 RPL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_2001050006`
--
ALTER TABLE `tabel_2001050006`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_2001050006`
--
ALTER TABLE `tabel_2001050006`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
