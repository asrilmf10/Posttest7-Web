-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 06:27 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep`
--

-- --------------------------------------------------------

--
-- Table structure for table `kumpulan_resep`
--

CREATE TABLE `kumpulan_resep` (
  `id_resep` int(11) NOT NULL,
  `nama_masakan` varchar(50) NOT NULL,
  `asal_makanan` varchar(50) NOT NULL,
  `bahan_utama` varchar(25) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kumpulan_resep`
--

INSERT INTO `kumpulan_resep` (`id_resep`, `nama_masakan`, `asal_makanan`, `bahan_utama`, `gambar`, `keterangan`) VALUES
(18, 'Gado-gado', 'Betawi, Jakarta', 'Sayur-sayuran', 'Gado-gado.jpg', '27-10-2022'),
(20, 'Soto Banjar', 'Banjarmasin, Kalimantan Selatan', 'Ayam', 'Soto Banjar.jpg', '27-10-2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kumpulan_resep`
--
ALTER TABLE `kumpulan_resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kumpulan_resep`
--
ALTER TABLE `kumpulan_resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
