-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 09:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `harga`, `stok`, `kode_barang`) VALUES
(1, 'Laptop Lenovo ThinkPad', 'Elektronik', 12000000.00, 15, 'ELEC-001'),
(2, 'Kursi Kantor Ergonomis', 'Perabotan', 850000.00, 50, 'FURN-001'),
(3, 'Smartphone Samsung Galaxy', 'Elektronik', 9500000.00, 20, 'ELEC-002'),
(4, 'Meja Belajar Kayu Jati', 'Perabotan', 1200000.00, 10, 'FURN-002'),
(5, 'Kompor Gas 2 Tungku', 'Dapur', 550000.00, 30, 'KITC-001'),
(6, 'Sepatu Olahraga Adidas', 'Pakaian', 1250000.00, 25, 'CLOT-001'),
(7, 'Printer Canon Pixma', 'Elektronik', 2500000.00, 12, 'ELEC-003'),
(8, 'Helm Sepeda Polaris', 'Olahraga', 320000.00, 40, 'SPOR-001'),
(9, 'Panci Teflon Anti Lengket', 'Dapur', 220000.00, 60, 'KITC-002'),
(10, 'Tas Ransel Waterproof', 'Aksesoris', 450000.00, 35, 'ACCS-001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
