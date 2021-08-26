-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2021 at 05:10 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anggarin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `id_bank` int(11) NOT NULL AUTO_INCREMENT,
  `nama_akun` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_rek` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_bank` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_bank` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telp_bank` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `status_akun` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `akun_utama` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_bank`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_akun`, `no_rek`, `nama_bank`, `alamat_bank`, `telp_bank`, `saldo_awal`, `status_akun`, `akun_utama`) VALUES
(1, 'Atrina Salsabil', '3456589', 'BRI', 'Jl Call Me Baby 123', '0813349102', 300000, 'Aktif', 'Akun Bank Utama'),
(2, 'Esti Putri', '3456787', 'BCA', 'Jl Call Me Baby 1234', '0813349102', 100000, 'Aktif', 'Akun Bank'),
(3, 'Park Chanyeol', '3456789', 'Mandiri', 'Jl Call Me Baby 123', '0813349102', 200000, 'Aktif', 'Akun Bank'),
(4, 'Bejo', '3456786', 'BNI', 'Jl Call Me Baby 1234', '0813349102', 1000000, 'Aktif', 'Akun Bank Utama'),
(5, 'Paijo', '3456789', 'Mandiri', 'Jl Call Me Baby 123', '0813349102', 7000000, 'Tidak Aktif', 'Akun Bank');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_customer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telp_customer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan_order` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email_customer`, `telp_customer`, `keterangan_order`, `tanggal_bergabung`) VALUES
(1, 'Vira Meliana', 'vira@gmail.com', '082255790865', 'Belum Lunas', '2021-06-17'),
(2, 'Nabilah ', 'nabilah@gmail.com', '08752356821', 'Lunas', '2021-07-07'),
(3, 'Do Kyungsoo', 'kyungsoo@gmail.com', '081342523570', 'Belum Lunas', '2021-07-02'),
(4, 'Kai', 'kai@gmail.com', '0813242563', 'Belum Lunas', '2021-07-02'),
(5, 'Dita Karang', 'dita_karang@gmail.com', '08241948104', 'Lunas', '2021-07-12'),
(6, 'Haechan', 'haechan@gmail.com', '08134737383', 'Belum Lunas', '2021-07-13'),
(7, 'Mark', 'mark@gmail.com', '082255776865', 'Lunas', '2021-06-17'),
(8, 'Bulan', 'bulan234@gmail.com', '087523568223', 'Lunas', '2021-07-07'),
(9, 'Cicil', 'cicil@gmail.com', '08134574804', 'Lunas', '2021-08-24'),
(10, 'Naeyeon', 'naeyeon@gmail.com', '08134574804', 'Belum Lunas', '2021-08-25'),
(11, 'Andin', 'andin@gmail.com', '08241948104', 'Lunas', '2021-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Adobe'),
(2, 'AutoCAD'),
(3, 'Bitdefender'),
(4, 'Camtasia'),
(5, 'Canva'),
(6, 'Corel'),
(7, 'Filmora'),
(8, 'Grammarly'),
(9, 'IDM'),
(10, 'McAfee'),
(11, 'Microsoft Office'),
(12, 'Turnitin'),
(13, 'Windows'),
(14, 'WinRar'),
(15, 'Zoom');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id_order` int(50) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_order` date NOT NULL,
  `jumlah_order` int(11) NOT NULL,
  `status_order` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_order`),
  KEY `FK_CustOrder` (`id_customer`),
  KEY `orders_ibfk_1` (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_customer`, `id_produk`, `tanggal_order`, `jumlah_order`, `status_order`) VALUES
(1, 1, 2, '2021-01-07', 2, 'Proses'),
(2, 2, 2, '2021-07-20', 1, 'Selesai'),
(3, 5, 3, '2021-01-02', 3, 'Selesai'),
(4, 3, 4, '2021-02-02', 1, 'Selesai'),
(5, 4, 5, '2021-06-04', 1, 'Selesai'),
(6, 1, 1, '2021-01-13', 2, 'Selesai'),
(7, 8, 4, '2021-08-24', 1, 'Selesai'),
(8, 8, 5, '2021-08-24', 3, 'Proses'),
(9, 9, 5, '2021-08-24', 1, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` int(11) NOT NULL,
  `nama_produk` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `jumlah_pembayaran` int(11) NOT NULL,
  `jenis_pembayaran` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `akun` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_pembayaran` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `pembayaran_ibfk_1` (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_supplier`, `nama_produk`, `tanggal_pembayaran`, `jumlah_pembayaran`, `jenis_pembayaran`, `akun`, `status_pembayaran`) VALUES
(1, 1, 'Bitdefender 2012', '2020-07-01', 200000, 'Transfer', 'Atrina Salsabil', 'Lunas'),
(2, 2, 'Camtasia', '2021-07-13', 150000, 'Transfer', 'Atrina Salsabil', 'Lunas'),
(3, 3, 'Adobe', '2021-07-13', 150000, 'Transfer', 'Atrina Salsabil', 'Lunas'),
(4, 1, 'Bitdefender 2018', '2021-07-16', 300000, 'Cash', '', 'Lunas'),
(5, 1, 'Bitdefender Pro', '2021-08-18', 90000, 'Transfer', 'Atrina Salsabil', 'Lunas'),
(6, 6, 'Bitdefender 2019', '2021-08-24', 600000, 'Cash', '-', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `deskripsi_produk` text COLLATE utf8_unicode_ci NOT NULL,
  `status_produk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar_produk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `supplier`, `kategori`, `nama_produk`, `harga_beli`, `harga_jual`, `jumlah_produk`, `deskripsi_produk`, `status_produk`, `gambar_produk`) VALUES
(1, 'Maemunah', 'Adobe', 'Bitdefender 2018', 500000, 550000, 3, '', 'akan habis', 'sddefault.jpg'),
(2, 'Maemunah', 'Adobe', 'Camtasia 2018', 200000, 240000, 4, '', 'akan habis', '15f93d7ea579c090ee0e730d5ca7410e.jpg'),
(3, 'Chrisabel Olivia', 'Adobe', 'Adobe 2018', 500000, 550000, 3, 'hdahdadkajdakjsncjcsa', 'akan habis', 'Maemunah.jpg'),
(4, 'Louis', 'Microsoft Office', 'Microsoft Office 2019', 500000, 550000, 3, 'afwafasfasafsaffa', 'akan habis', 'Maemunah.jpg'),
(5, 'Maemunah', 'Adobe', 'Filmora 2010', 250000, 300000, 5, '', '', 'sddefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telp_supplier` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_supplier` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan_supplier` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gambar_supplier` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `telp_supplier`, `email_supplier`, `kategori`, `keterangan_supplier`, `gambar_supplier`) VALUES
(1, 'Maemunah', '08734562123', 'maemunah@gmail.com', 'Canva', 'Lunas', '15f93d7ea579c090ee0e730d5ca7410e.jpg'),
(2, 'Zubaedah', '08245996755', 'zubaedah@gmail.com', 'McAfee', 'Belum Lunas', 'eadc1addd0c52d00a64ab34eb33dc7c5.jpg'),
(3, 'Chrisabel Olivia', '08124384744', 'ibel@gmail.com', 'Adobe', 'Lunas', 'a1b16c4711802590fc930a132c11e9c1.jpg'),
(4, 'Louis', '081244743932', 'louis@gmail.com', 'McAfee', 'Lunas', 'fc9121cb57f00ba27301773232169e39.jpg'),
(5, 'Gabriel', '081244743932', 'gabriel@gmail.com', 'Grammarly', 'Belum Lunas', '043246f6c6e6488fb558d9e26cb3c3b8.jpg'),
(6, 'Wisam', '081244743932', 'wisam@gmail.com', 'AutoCAD', 'Lunas', '08eaf79e596699752dd99612fb39dc62.jpg'),
(7, 'Jorgy', '081244743932', 'jorgy_ariel@gmail.com', 'Zoom', 'Lunas', '6e64cacdd06cc58ffc9919aeeb054279.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_CustOrder` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
