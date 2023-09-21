-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 02:06 AM
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
-- Database: `dbpustaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tadmin`
--

CREATE TABLE `tadmin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tadmin`
--

INSERT INTO `tadmin` (`id_admin`, `username`, `password`, `foto_profil`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1813_SkVNQSBGQU1PIDg0Ny0wMQ.jpg'),
(3, 'saaya', 'eaf5055a015f8293cb1b81fb0e065795', '610998183_Everybody 27s_Sister_transparent.png'),
(6, 'layer', 'f56b53e412e87751f665cb9f9061e50b', '834536112_RAISE_A_SUILEN_Frontman_T_transparent.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbuku`
--

CREATE TABLE `tbuku` (
  `kode_buku` varchar(6) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `cover_buku` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `harga` int(16) NOT NULL,
  `stok` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuku`
--

INSERT INTO `tbuku` (`kode_buku`, `nama_buku`, `cover_buku`, `pengarang`, `genre`, `tahun_terbit`, `harga`, `stok`) VALUES
('KDB001', 'A Familiar Figure', 'A_Familiar_Figure.jpg', 'Saaya Yamabuki', 'Fiksi Ilmiah', '2018', 12000, 25),
('KDB002', 'Otae si Kelinci', 'Bragging_Tricks.png', 'Tae Hanazono', 'Humor', '2019', 15000, 60),
('KDB003', 'Barista Moca', 'Background Barista.png', 'Moca Aoba', 'Romansa', '2014', 14000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tpinjaman_buku`
--

CREATE TABLE `tpinjaman_buku` (
  `kode_pinjaman` varchar(6) NOT NULL,
  `kode_buku` varchar(6) NOT NULL,
  `tgl_pinjaman` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` varchar(13) NOT NULL,
  `harga_pinjam` int(16) NOT NULL,
  `lama_pinjaman` int(6) NOT NULL,
  `total_pinjaman` bigint(16) NOT NULL,
  `status` enum('Belum Selesai','Selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpinjaman_buku`
--

INSERT INTO `tpinjaman_buku` (`kode_pinjaman`, `kode_buku`, `tgl_pinjaman`, `nama`, `alamat`, `nomor_hp`, `harga_pinjam`, `lama_pinjaman`, `total_pinjaman`, `status`) VALUES
('PBK001', 'KDB001', '2022-07-17', 'Fiqri', 'Jln. Mentimun no.5j', '083245623242', 45000, 2, 22500, 'Selesai'),
('PBK002', 'KDB002', '2022-07-18', 'Rias', 'Jln. Pengayoman no. 30', '0852478569', 50000, 8, 6250, 'Belum Selesai'),
('PBK003', 'KDB003', '2022-07-19', 'Andi', 'Jln. Pendidikan no.01', '082138492301', 42000, 5, 8400, 'Belum Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tadmin`
--
ALTER TABLE `tadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbuku`
--
ALTER TABLE `tbuku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tpinjaman_buku`
--
ALTER TABLE `tpinjaman_buku`
  ADD PRIMARY KEY (`kode_pinjaman`),
  ADD KEY `kode_buku` (`kode_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tadmin`
--
ALTER TABLE `tadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tpinjaman_buku`
--
ALTER TABLE `tpinjaman_buku`
  ADD CONSTRAINT `tpinjaman_buku_ibfk_1` FOREIGN KEY (`kode_buku`) REFERENCES `tbuku` (`kode_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
