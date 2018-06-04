-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Apr 2018 pada 14.22
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prplhotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `kd_kamar` varchar(15) NOT NULL,
  `kd_kategori` varchar(50) DEFAULT NULL,
  `nama_kamar` varchar(20) DEFAULT NULL,
  `lokasi_lantai` varchar(2) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`kd_kamar`, `kd_kategori`, `nama_kamar`, `lokasi_lantai`, `keterangan`, `status`) VALUES
('001', 'ST', 'Amarilis', '3', 'Single', 'empty'),
('002', 'ST', 'Amarilis', '3', 'Double', 'used'),
('003', 'DE', 'Anyelir', '2', 'Twin', 'empty'),
('004', 'SU', 'Asoka', '2', 'Family', 'empty'),
('005', 'PR', 'Aster', '1', 'Family', 'empty'),
('006', 'DE', 'Anyelir', '2', 'Single', 'empty'),
('007', 'SU', 'Asoka', '2', 'Single', 'empty'),
('008', 'PR', 'Aster', '1', 'Single', 'empty'),
('009', 'PR', 'Aster', '1', 'Double', 'used'),
('010', 'SU', 'Asoka', '2', 'Double', 'empty'),
('011', 'DE', 'Anyelir', '2', 'Double', 'empty'),
('012', 'ST', 'Amarilis', '3', 'Suite', 'used'),
('013', 'DE', 'Anyelir', '2', 'Suite', 'empty'),
('014', 'SU', 'Asoka', '2', 'Suite', 'empty'),
('015', 'PR', 'Aster', '1', 'Suite', 'empty'),
('016', 'ST', 'Amarilis', '3', 'Twin', 'empty'),
('017', 'SU', 'Asoka', '2', 'Twin', 'empty'),
('018', 'PR', 'Aster', '1', 'Twin', 'empty'),
('019', 'ST', 'Amarilis', '3', 'Family', 'empty'),
('020', 'DE', 'Anyelir', '2', 'Family', 'empty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kd_kamar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
