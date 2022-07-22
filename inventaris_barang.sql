-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 09:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` varchar(50) NOT NULL,
  `tgl_maasuk_barang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tgl_inventaris` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `id_barang`, `id_ruangan`, `id_pegawai`, `tgl_inventaris`) VALUES
(4, 4, 7, 2, '2022-07-12 17:07:43'),
(5, 3, 8, 2, '2022-07-12 17:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `tlp_pegawai` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `tlp_pegawai`, `username`, `password`) VALUES
(2, 'lina astika dewi', '08191602855', 'lina', 'f6f4deb7dad1c2e5e0b4d6569dc3c1c5');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `id_inventrasi` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id_peminjam`, `id_inventrasi`, `nama_peminjam`, `tgl_pinjam`) VALUES
(2, 4, 'afikha', '2022-07-12'),
(3, 5, 'ALKHA', '2022-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`) VALUES
(7, 'AP'),
(8, 'MM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'lina', 'f6f4deb7dad1c2e5e0b4d6569dc3c1c5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_inventrasi` (`id_inventrasi`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
