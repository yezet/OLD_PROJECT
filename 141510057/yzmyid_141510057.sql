-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2020 at 05:27 AM
-- Server version: 10.3.24-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yzmyid_141510057`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `kd_level` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ket` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`kd_level`, `level`, `ket`) VALUES
('A', '1', 'Administrator'),
('B', '2', 'Admin Gudang'),
('C', '3', 'Produksi'),
('D', '4', 'Pemasaran');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `kd_barang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nm_barang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `satuan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `stok` int(5) NOT NULL,
  `ket` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kd_barang`, `nm_barang`, `satuan`, `kategori`, `stok`, `ket`) VALUES
(18, 'A002', 'Produk Dua Sajax', 'Satuan', 'Konsum K01J', 0, 'Suku kulawu'),
(19, 'A003', 'Produk Tiga', 'Satuan', 'Suku Cadang KBJ1', 0, 'Nomor 003 abcde'),
(20, 'A004', 'Produk Empat', 'Satuan', 'Angka', 0, 'Nomor 004'),
(21, 'A005', 'Produk Lima', 'Satuan', 'Angka', 0, 'Nomor 005'),
(23, 'A006', 'Produk Enam', 'Satuan', 'Angka', 0, 'Nomor 006'),
(24, 'A007', 'Produk Tujuh', 'Satuan', 'Angka', 0, 'Nomor 007'),
(25, 'A008', 'Produk Delapan', 'Satuan', 'Angka', 0, 'Nomor 008'),
(26, 'A009', 'Produk Sembilan', 'Satuan', 'Angka', 0, 'Nomor 009'),
(27, 'A010', 'Produk Sepuluh', 'Satuan', 'Angka', 0, 'Nomor 010'),
(28, 'A011', 'Produk Sebelas', 'Belasan', 'Angka', 0, 'Nomor 011'),
(29, 'A012', 'Produk Duabelas', 'Belasan', 'Angka', 0, 'Nomor 012'),
(30, 'A013', 'Produk Tigabelas', 'Belasan', 'Angka', 0, 'Nomor 013'),
(31, 'A014', 'Produk Empatbelas', 'Belasan', 'Angka', 0, 'Nomor 014'),
(32, 'A015', 'Produk Limabelas', 'Belasan', 'Angka', 0, 'Nomor 015'),
(33, 'A016', 'Produk Enambelas', 'Belasan', 'Angka', 0, 'Nomor 016'),
(34, 'A017', 'Produk Tujuhbelas', 'Belasan', 'Angka', 0, 'Nomor 017'),
(35, 'A018', 'Produk Delapanbelas', 'Belasan', 'Angka', 0, 'Nomor 018'),
(36, 'A019', 'Produk Sembilanbelas', 'Belasan', 'Angka', 0, 'Nomor 019'),
(37, 'A020', 'Produk Duapuluh', 'Belasan', 'Angka', 0, 'Nomor 020'),
(38, 'A021', 'Produk Duapuluh Satu', 'Puluhan', 'Angka', 0, 'Nomor 021'),
(39, 'A022', 'Produk Duapuluh Dua', 'Puluhan', 'Angka', 0, 'Nomor 022'),
(40, 'A023', 'Produk Duapuluh Tiga', 'Puluhan', 'Angka', 0, 'Nomor 022'),
(41, 'A024', 'Produk Duapuluh Empat', 'Puluhan', 'Angka', 0, 'Nomor 020'),
(42, 'A025', 'Produk Duapuluh Lima', 'Puluhan', 'Angka', 0, 'Nomor 020'),
(43, 'A026', 'Produk Duapuluh Enam', 'Puluhan', 'Angka', 0, 'Nomor 020'),
(44, 'A027', 'Produk Duapuluh Tujuh', 'Puluhan', 'Angka', 0, 'Nomor 020'),
(45, 'A028', 'Produk Duapuluh Delapan', 'Puluhan', 'Angka', 0, 'Nomor 020'),
(46, 'A029', 'Produk Duapuluh Sembilan', 'Puluhan', 'Angka', 0, 'Nomor 020'),
(81, 'ARG01', 'Barang Satu BAru', 'k', 'dsd', 0, 'sd'),
(83, 'A00001', 'Asoy geboy', 'kilo', 'Barang Jadi', 0, 'coba coba melempar gadis'),
(84, 'K000001', 'Kooosong satu', 'capek an', 'Suku Cadang KHP2', 0, 'sd'),
(85, 'K001', 'Barang Satu', 'Angka satu', 'Barang Jadi', 0, 'BARANG JADI tetap'),
(86, 'A01A', 'Asssyyyiaaapppp', 'Satu satu aku saya a', 'Ke-satu', 0, 'Satu satu aku saya ayah, dua dua akusayang ibu. tiga tiga sayang adik kakak. 123 sayang semuanya. oke');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kategori` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ket` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `kategori`, `ket`) VALUES
('K01J', 'Barang Jadi', 'Barang Jual Jadi'),
('K01Kons', 'Konsum K01J', 'Bahan untuk konsumsi Barang Jual jadi'),
('K01SC', 'Suku Cadang KBJ1', 'Suku cadang komponen barang jadi'),
('K02Bhn', 'Bahan Produksi', 'Bahan Baku untuk produksi'),
('K02Kons', 'Konsum K02P', 'Bahan untuk konsumsi Barang Hasil Produksi'),
('K02Prd', 'Hasil Produksi', 'Barang Hasil Produksi'),
('K02SC', 'Suku Cadang KHP2', 'Suku cadang komponen barang hasil produksi'),
('K1', 'Ke-satu', 'Keterangan baru saja'),
('K2', 'Kategori 2', 'Kategori Nomor Dua');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(3) NOT NULL,
  `kd_supplier` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nm_supplier` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kontak` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ket` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `kd_supplier`, `nm_supplier`, `alamat`, `telp`, `kontak`, `ket`) VALUES
(14, 'SP001', 'PT Supplier Nol Nol Satu', 'Alamat PT Supplier Nol Nol Satu No.1 Batam', '0778 331051', 'Mr. Supsat', 'Supplier Satu'),
(15, 'SP002', 'PT Supplier Nol Nol Dua', 'Alamat PT Supplier Nol Nol Dua No.2 Batam', '0778 331052', 'Mr. Supdu', 'Supplier Dua');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(5) NOT NULL,
  `bagian` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `bagian`) VALUES
(1, 'admin', 'P@ssw0rd2019', 'Admin', 1, 'System Administor'),
(11, 'gudang', 'password', 'Admin Gudang', 2, 'Store'),
(12, 'produksi', 'password', 'Produksi', 3, 'Produksi'),
(19, 'sa', 'P@ssw0rd', 'System Administrator', 1, 'IT Administrator / MIS'),
(20, 'marketing', 'password', 'Marketing Satu', 4, 'Sales & Marketing'),
(21, 'admintest', 'password', 'Admin Testing', 1, 'IT (dirubah oleh admintest)'),
(22, 'usertest', 'password', 'User Testing', 4, 'dirubah oleh v1xxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`kd_level`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

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
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
