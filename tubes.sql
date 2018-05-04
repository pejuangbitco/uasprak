-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2018 pada 04.41
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah`
--

CREATE TABLE `jumlah` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jumlah`
--

INSERT INTO `jumlah` (`indo`, `eng`) VALUES
('banyak', 'a lot of');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketbenda`
--

CREATE TABLE `ketbenda` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketbenda`
--

INSERT INTO `ketbenda` (`indo`, `eng`) VALUES
('besar', 'big'),
('biru', 'blue'),
('hijau', 'green'),
('kecil', 'small'),
('merah', 'red');

-- --------------------------------------------------------

--
-- Struktur dari tabel `objek`
--

CREATE TABLE `objek` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL,
  `count` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `objek`
--

INSERT INTO `objek` (`indo`, `eng`, `count`) VALUES
('baju', 'shirt', 0),
('mobil', 'car', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjek`
--

CREATE TABLE `subjek` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subjek`
--

INSERT INTO `subjek` (`indo`, `eng`) VALUES
('kamu', 'you'),
('saya', 'i');

-- --------------------------------------------------------

--
-- Struktur dari tabel `time`
--

CREATE TABLE `time` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `time`
--

INSERT INTO `time` (`indo`, `eng`) VALUES
('kemarin', 'yesterday'),
('semalam', 'last night');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verb`
--

CREATE TABLE `verb` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `verb`
--

INSERT INTO `verb` (`indo`, `eng`) VALUES
('belajar', 'studied'),
('mencuci', 'washed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jumlah`
--
ALTER TABLE `jumlah`
  ADD PRIMARY KEY (`indo`);

--
-- Indexes for table `ketbenda`
--
ALTER TABLE `ketbenda`
  ADD PRIMARY KEY (`indo`);

--
-- Indexes for table `objek`
--
ALTER TABLE `objek`
  ADD PRIMARY KEY (`indo`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`indo`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`indo`);

--
-- Indexes for table `verb`
--
ALTER TABLE `verb`
  ADD PRIMARY KEY (`indo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
