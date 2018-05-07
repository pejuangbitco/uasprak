-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 03:48 PM
-- Server version: 10.1.16-MariaDB
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
-- Table structure for table `jumlah`
--

CREATE TABLE `jumlah` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumlah`
--

INSERT INTO `jumlah` (`indo`, `eng`) VALUES
('', ''),
('banyak', 'a lot of'),
('beberapa', 'several'),
('sedikit', 'few');

-- --------------------------------------------------------

--
-- Table structure for table `ketbenda`
--

CREATE TABLE `ketbenda` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ketbenda`
--

INSERT INTO `ketbenda` (`indo`, `eng`) VALUES
('', ''),
('berani', 'brave'),
('bersih', 'clean'),
('besar', 'big'),
('biru', 'blue'),
('biru air', 'aqua'),
('bodoh', 'foolish'),
('cantik', 'beautyfull'),
('cepat', 'fast'),
('coklat', 'brown'),
('emas', 'gold'),
('enak', 'delicious'),
('gembira', 'excited'),
('gendut', 'fat'),
('gratis', 'free'),
('gray', 'abu-abu'),
('hijau', 'green'),
('hitam', 'black'),
('jauh', 'distant'),
('jelek', 'ugly'),
('jujur', 'honest'),
('kecil', 'small'),
('kotor', 'dirty'),
('krem', 'cream'),
('kuat', 'forceful'),
('kuning', 'yellow'),
('langsung', 'direct'),
('lebar', 'broad'),
('mahal', 'expensive'),
('menjijikan', 'disgusting'),
('merah', 'red'),
('merah muda', 'pink'),
('merah tua', 'maroon'),
('mobil', 'car'),
('mudah', 'easy'),
('murah', 'cheap'),
('pahit', 'bitter'),
('palsu', 'fake'),
('pendek', 'short'),
('penuh', 'full'),
('perak', 'silver'),
('pintar', 'smart'),
('pusing', 'dizzy'),
('putih', 'white'),
('rajin', 'diligent'),
('segar', 'fresh'),
('sepeda motor', 'motorcycle'),
('sulit', 'difficult'),
('tampan', 'handsome'),
('tebal', 'bold'),
('tinggi', 'tall'),
('ungu', 'purple'),
('ungu muda', 'lavender');

-- --------------------------------------------------------

--
-- Table structure for table `objek`
--

CREATE TABLE `objek` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL,
  `count` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objek`
--

INSERT INTO `objek` (`indo`, `eng`, `count`) VALUES
('baju', 'shirt', 0),
('bola', 'ball', 2),
('boneka', 'doll', 3),
('buku', 'book', 6),
('bunga', 'flower', 5),
('handphone', 'handphone', 4),
('mobil', 'car', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`indo`, `eng`) VALUES
('', ''),
('ayah', 'father'),
('ibu', 'mother'),
('kakek', 'granndpa'),
('kami', 'we'),
('kamu', 'you'),
('keponakan', 'nephew'),
('laki-laki', 'he'),
('mereka', 'they'),
('nenek', 'granma'),
('paman', 'uncle'),
('perempuan', 'she'),
('saudara laki-laki', 'brother'),
('saudara perempuan', 'sister'),
('saya', 'i'),
('sepupu', 'cousin'),
('tante', 'aunt');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`indo`, `eng`) VALUES
('akhirnya', 'finally'),
('awalnya', 'first'),
('baru saja', 'just'),
('berikutnya', 'next'),
('besok', 'tomorrow'),
('biasanya', 'generally'),
('dahulu', 'in the past'),
('dahulunya', 'formerly'),
('dengan segera', 'immediately'),
('di malam hari', 'in the night'),
('di siang hari', 'in the day'),
('dipagi hari', 'in the morning'),
('dua minggu sekali', 'fornightly'),
('hampir tidak pernah', 'hardly ever'),
('hari berikutnya', 'next day'),
('hari ini', 'today'),
('jam dua belas', 'at twelve o''clock'),
('jarang', 'infrequently'),
('kemarin', 'yesterday'),
('lebih dahulu', 'earlier'),
('malam ini', 'tonight'),
('malam lalu', 'last night'),
('masih', 'still'),
('minggu depan', 'next week'),
('nanti', 'later'),
('pada hari rabu', 'on wednesday'),
('pada hari selasa', 'on tuesday'),
('pada hari senin', 'on monday'),
('pada saat ini', 'at this moment'),
('pada saat sekarang ini', 'at the moment'),
('pernah', 'ever'),
('satu tahun', 'one year'),
('sebelum', 'before'),
('segera', 'early'),
('sekarang', 'now'),
('selalu', 'always'),
('selama', 'during'),
('selama satu jam', 'for an hour'),
('selamanya', 'for'),
('semalam', 'last night'),
('seoanjang hari', 'all day'),
('sering', 'often'),
('seringkali', 'frequently'),
('setelah', 'after'),
('setelah itu', 'afterwards'),
('setiap abad', 'every century'),
('setiap bulan', 'every month'),
('setiap detik', 'every second'),
('setiap hari', 'every day'),
('setiap jam', 'every hour'),
('setiap malam', 'every night'),
('setiap menit', 'every minute'),
('setiap minggu', 'every week'),
('setiap pagi', 'every morning'),
('setiap senin', 'every monday'),
('setiap sepuluh tahun sekali', 'every decade'),
('setiap tahun', 'every year'),
('setiap waktu', 'every time'),
('sudah', 'already'),
('tahun depan', 'next year'),
('terkadang', 'now and then'),
('tiap hari', 'daily'),
('tiap jam', 'hourly'),
('tiap minggu', 'weekly'),
('tiap tahun', 'annually'),
('tidak sering', 'not often'),
('yang lalu', 'ago');

-- --------------------------------------------------------

--
-- Table structure for table `verb`
--

CREATE TABLE `verb` (
  `indo` varchar(40) NOT NULL,
  `eng` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verb`
--

INSERT INTO `verb` (`indo`, `eng`) VALUES
('bangun', 'awoke'),
('bangun kesiangan', 'oveslept'),
('belajar', 'studied'),
('berbicara', 'spoke'),
('bercerita', 'told'),
('berenang', 'swam'),
('beristirahat', 'unwound'),
('berkata', 'said'),
('berlari', 'ran'),
('berpakaian', 'dressed'),
('duduk', 'sat'),
('jatuh', 'fell'),
('kehilangan', 'bereft'),
('makan', 'ate'),
('meletakkan', 'laid'),
('memakai', 'wore'),
('memanaskan', 'heated'),
('memandikan', 'bathed'),
('memarut', 'grated'),
('memasukkan', 'input'),
('membaca', 'read'),
('membakar', 'burned'),
('membangun', 'built'),
('membawa', 'brought'),
('membeli', 'bought'),
('membengkokan', 'bent'),
('memberi makan', 'fed'),
('membuang', 'wasted'),
('membuat', 'made'),
('membuka', 'opened'),
('memecahkan', 'broke'),
('memilih', 'chose'),
('memotong', 'cut'),
('memotong rumput', 'mowed'),
('mencicipi', 'tasted'),
('mencuci', 'washed'),
('mencukur', 'sheared'),
('mendapatkan', 'got'),
('mendidih', 'boiled'),
('menelpon', 'called'),
('menenun', 'wove'),
('menerangi', 'lit'),
('mengajar', 'taught'),
('mengatur', 'set'),
('mengeja', 'spelt'),
('mengerjakan', 'did'),
('menggambar', 'drew'),
('menggergaji', 'sawed'),
('mengisi', 'filled'),
('meniup', 'blew'),
('menjahit', 'sewed'),
('menolong', 'helped'),
('menonton', 'watched'),
('menulis', 'wrote'),
('menumpahkan', 'spilt'),
('menurunkan', 'begot'),
('menyapu', 'swept'),
('merengek', 'whined'),
('minum', 'drank'),
('tidur', 'slept');

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
