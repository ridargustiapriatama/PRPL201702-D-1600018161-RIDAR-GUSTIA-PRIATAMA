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
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(15) NOT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `jekel` varchar(50) DEFAULT NULL,
  `no_telfon` varchar(20) DEFAULT NULL,
  `alamat_customer` varchar(200) DEFAULT NULL,
  `tgl_checkin` date DEFAULT NULL,
  `tgl_checkout` date DEFAULT NULL,
  `tipe_kamar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `jekel`, `no_telfon`, `alamat_customer`, `tgl_checkin`, `tgl_checkout`, `tipe_kamar`) VALUES
('1600018161', 'Ridar Gustia Priatama', 'Laki-laki', '085743695474', 'Ketandan', '2018-04-04', '2018-04-07', 'Suite'),
('1600018162', 'Gilang Herjun', 'Laki-laki', '083827362711', 'D2S', '2018-04-04', '2018-04-07', 'Double'),
('1600018164', 'Huda', 'Perempuan', '083827362711', 'jambi', '2018-04-05', '2018-04-04', 'Family');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
