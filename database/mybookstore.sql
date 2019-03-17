-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 01:42 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `noisbn` varchar(15) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `stok` varchar(15) NOT NULL,
  `harga_pokok` varchar(25) NOT NULL,
  `harga_jual` varchar(25) NOT NULL,
  `ppn` varchar(15) NOT NULL,
  `diskon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `noisbn`, `penulis`, `penerbit`, `tahun`, `stok`, `harga_pokok`, `harga_jual`, `ppn`, `diskon`) VALUES
(1, 'Mengenal Dasar-Dasar Pemrograman Android', '9786020269757', 'Jubilee Enterprise', 'Elex Media Komputindo', '2015', '5', '35000', '45000', '10', '5'),
(2, 'Membangun Server dengan Debian 7', '9786020823041', 'Agus Prasetio', 'Jasakom', '2018', '18', '55000', '52500', '10', '15'),
(3, 'Pemrograman Android & Database', '9786020459721', 'Abdul Kadir', 'Elex Media Komputindo', '2018', '15', '100000', '120000', '10', '10'),
(4, 'Pemrograman Matlab Untuk Mahasiswa', '9789792963977', 'Ramses Y. Hutahaean, Ir.,MT', 'Other', '2018', '38', '120000', '135000', '10', '10'),
(5, 'Coreldraw X8 Untuk Pemula', '9789792966329', 'Madcoms', 'Other', '2018', '5', '50000', '60000', '10', '10'),
(6, '500 Trik Dan Tips Excel', '789792963960', 'Musliadi K.H', 'Other', '2018', '10', '95000', '100000', '10', '5'),
(7, 'Mengenal Fitur Accurate Online', '9786029031652', 'Lutfia Perdiasari', 'BISNIS2030', '2018', '30', '35000', '40000', '5', '10'),
(8, 'Dasar Pemrograman Python 3', '9789792958102', 'Abdul Kadir', 'Other', '2018', '15', '50000', '65000', '5', '15');

-- --------------------------------------------------------

--
-- Table structure for table `distrib`
--

CREATE TABLE `distrib` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distrib`
--

INSERT INTO `distrib` (`id`, `nama`, `alamat`, `telepon`) VALUES
(1, 'Ludi Priyadi', 'Jl. Cingised', '081273823225'),
(5, 'Rifqi Subagja', 'Jl. Pasir Hitam', '081273823221'),
(6, 'Bayu Dirga', 'Jl. Maju Mundur No.1', '089528324589'),
(7, 'Rachmizard', 'Jl. Simpang Sari', '081345738232'),
(8, 'Prayogi Sukmana', 'Jl. Suka Asih', '089725432593'),
(9, 'Riki Pandika', 'Jl. Raya Ujung Berung', '087823492383'),
(10, 'Ismail Rohaga', 'Jl. Cimencrang', '089723564121');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasok`
--

CREATE TABLE `pasok` (
  `id` int(11) NOT NULL,
  `distrib_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasok`
--

INSERT INTO `pasok` (`id`, `distrib_id`, `buku_id`, `jumlah`, `tanggal`) VALUES
(1, 5, 2, '10', '2018-08-24'),
(3, 7, 5, '5', '2018-08-24'),
(4, 7, 5, '10', '2018-08-24'),
(5, 6, 6, '5', '2018-08-24'),
(6, 9, 6, '15', '2018-08-24'),
(7, 1, 1, '5', '2018-08-24'),
(8, 5, 7, '5', '2018-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `total` varchar(25) NOT NULL,
  `tanggal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `buku_id`, `user_id`, `jumlah`, `total`, `tanggal`) VALUES
(1, 3, 9, '10', '1105000', '2018-08-27'),
(2, 2, 9, '5', '552500', '2018-08-27'),
(3, 5, 9, '3', '331500', '2018-08-27'),
(4, 6, 9, '5', '221000', '2018-08-28'),
(5, 4, 9, '3', '331500', '2018-08-27'),
(6, 1, 9, '10', '1105000', '2018-08-27'),
(7, 4, 9, '3', '328500', '2018-08-31'),
(9, 2, 9, '2', '219000', '2018-08-31'),
(10, 4, 9, '3', '315000', '2018-08-31'),
(11, 6, 9, '12', '1260000', '2018-09-07'),
(12, 5, 9, '2', '210000', '2018-09-07'),
(13, 4, 9, '3', '114000', '2018-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `telepon`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Fadjri Alfalah', 'JL. Mana Aja No.1', '085524580902', 'fadjriaf', '$2y$10$/TVErcUKT6YMS09FA2t2C.S8uAf/.8/FkgD3CkKsWMIFNJikyng56', 'ncmKJsvsRzpNdMR9AKkUGWGoF517nbmwt9injMJcEDmSta7ioFO3GrergRxb', '2018-08-16 06:54:58', '2018-09-22 14:03:15'),
(10, 'Admin', 'jl. Mana Aja', '085524580902', 'admin', '$2y$10$kdG4K4Akn3N.AgWE1573geWVo7/vMvXxqauAXINFEn8rSNSquW6OW', '9a6ojShNZ8WgOQaBJizV9VtKq72VKzeCcNvBAFRhG4WAnULJA2NrYMLaCfgq', '2018-09-22 14:02:53', '2018-09-22 14:02:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distrib`
--
ALTER TABLE `distrib`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `distrib`
--
ALTER TABLE `distrib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasok`
--
ALTER TABLE `pasok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
