-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Agu 2017 pada 08.49
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_kemas`
--

CREATE TABLE `bahan_kemas` (
  `idbk` int(11) NOT NULL,
  `nama_bk` text NOT NULL,
  `harga_bk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_petani`
--

CREATE TABLE `data_petani` (
  `idpt` int(4) NOT NULL,
  `nama_pt` text NOT NULL,
  `luas_lahan` int(5) NOT NULL,
  `komodit` text NOT NULL,
  `kapasitas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komoditas`
--

CREATE TABLE `komoditas` (
  `idk` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `lama` int(100) NOT NULL,
  `harga` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komoditas`
--

INSERT INTO `komoditas` (`idk`, `nama`, `lama`, `harga`) VALUES
(1000, 'bayam', 30, 0),
(2000, 'wortel', 14, 0),
(3000, 'brokoli', 7, 0),
(4000, 'pepaya', 40, 0),
(5000, 'kecambah', 21, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `idp` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`idp`, `username`, `password`, `status`) VALUES
(1000, 'admin', 'admin', 'bosbesar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `idp` int(4) NOT NULL,
  `tgl` date NOT NULL,
  `j_permintaan` int(5) NOT NULL,
  `j_penjualan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`idp`, `tgl`, `j_permintaan`, `j_penjualan`) VALUES
(1, '2017-08-07', 500, 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_kemas`
--
ALTER TABLE `bahan_kemas`
  ADD PRIMARY KEY (`idbk`);

--
-- Indexes for table `data_petani`
--
ALTER TABLE `data_petani`
  ADD PRIMARY KEY (`idpt`);

--
-- Indexes for table `komoditas`
--
ALTER TABLE `komoditas`
  ADD PRIMARY KEY (`idk`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
