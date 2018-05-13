-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mei 2018 pada 03.49
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(3) NOT NULL,
  `foto` text NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gender`
--

CREATE TABLE `gender` (
  `id_gender` int(1) NOT NULL,
  `nama_gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gender`
--

INSERT INTO `gender` (`id_gender`, `nama_gender`) VALUES
(1, 'laki-laki'),
(2, 'perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'teknologi'),
(4, 'mobleg'),
(5, 'lejen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` int(1) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `jk` int(1) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `nama`, `email`, `kontak`, `jk`, `foto`) VALUES
('admin2', 'e10adc3949ba59abbe56e057f20f883e', 3, 'admin2', 'admin2@gmail.com', '085758612443', 2, '1686696928_ngoding.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(3) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL,
  `time` date NOT NULL,
  `id_kategori` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `judul`, `isi`, `foto`, `time`, `id_kategori`) VALUES
(16, 'Berita Satu', '<span>The <a target="_blank" rel="nofollow" href="https://www.independent.co.uk/life-style/gadgets-and-tech/news/www.independent.co.uk/life-style/gadgets-and-tech/news/bitcoin-price-today-live-updates-latest-value-exchange-rate-usd-gbp-chart-graph-a8147511.html">value of bitcoin</a>&nbsp;has\r\n seen modest gains over the last week, following a period of relative \r\nstability hovering&nbsp;above $9,000. If it continues its good form, it could\r\n break above $10,000 in the coming days.&nbsp;</span>\r\n\r\nThe volatile cryptocurrency’s price has shifted&nbsp;wildly ever&nbsp;since \r\nmid-December - when&nbsp;it hit a record high of more than $19,850 \r\n(£14,214)&nbsp;- with frequent heavy drops and speedy recoveries. Its \r\nprice&nbsp;plummet back to earth in January and February, as governments and \r\ncentral banks around the world&nbsp;raised the spectre of future regulation.\r\n\r\n<span>Bitcoin’s value plummeted again shortly before Christmas,&nbsp;<a target="_blank" rel="nofollow" href="http://www.independent.co.uk/news/business/news/bitcoin-price-live-updates-drop-value-latest-news-exchange-coinbase-digital-currency-cryptocurrency-a8119801.html">dropping by almost $2,000 (£1,449) in just an hour</a>&nbsp;at one point, and almost slipping below the $11,000 mark (£7,970). </span><br><span>Google''s announcement that it would <a target="_blank" rel="nofollow" href="https://www.independent.co.uk/life-style/gadgets-and-tech/news/bitcoin-price-latest-google-cryptocurrency-advertising-ban-initial-coin-offerings-exchanges-a8255346.html">ban cryptocurrency advertising</a> from its pages from June on the grounds that it considers it "deceptive content" was also a major blow to the sector.</span>\r\n\r\nRecent goings-on have demonstrated just how quickly things can change for investors.&nbsp;\r\n\r\n<span>It is worth $9,378&nbsp;as of Thursday morning, up from around $6,500 in early April, according to the <a target="_blank" rel="nofollow" href="https://www.coinbase.com/charts?locale=en">Coinbase</a> exchange.</span>\r\n\r\nIts value up by 2&nbsp;per cent since&nbsp;this time yesterday but down by 2 \r\nper cent&nbsp;week-on-week. Bitcoin''s value is up more than 39&nbsp;per cent from \r\nwhat it was one month ago. The latest price gains follow&nbsp;a week of \r\nsteady gains for the world''s most valuable cryptocurrency.&nbsp;\r\n\r\n<span>Bitcoin''s rise last year meanwhile led to increasing amounts of interest in other digital currencies, such as <a target="_blank" rel="nofollow" href="http://www.independent.co.uk/life-style/gadgets-and-tech/news/litecoin-ethereum-bitcoin-price-latest-update-rise-alternative-value-cryptocurrency-digital-currency-a8107191.html">ethereum, litecoin</a> and <a target="_blank" rel="nofollow" href="http://www.independent.co.uk/news/business/news/bitcoin-latest-value-ripple-xrp-best-performing-cryptocurrency-38-fold-increase-2017-a8138546.html">ripple XRP</a>&nbsp;- all of which have <a target="_blank" rel="nofollow" href="https://www.independent.co.uk/life-style/gadgets-and-tech/news/bitcoin-latest-rival-cryptocurrencies-growth-ethereum-litecoin-ripple-market-capitalisation-price-a8243551.html">performed well recently</a> -&nbsp;and&nbsp;more and more people are now looking to invest in digital currencies.&nbsp;</span>\r\n\r\n<span><div>&nbsp;</div>\r\n</span><span>However, <a target="_blank" rel="nofollow" href="http://www.independent.co.uk/voices/bitcoin-boom-economics-cryptocurrency-value-exchange-rate-investment-trading-a8082936.html">there are serious fears that bitcoin&nbsp;has created a bubble that could burst at any moment</a>.</span>\r\n\r\n<span>Numerous <a target="_blank" rel="nofollow" href="http://www.independent.co.uk/news/business/news/bitcoin-bubble-investment-value-cryptocurrency-burst-digital-boom-currency-a8086256.html">financial experts have advised&nbsp;potential investors to avoid getting involved with bitcoin</a>, and <a target="_blank" rel="nofollow" href="http://www.independent.co.uk/life-style/gadgets-and-tech/news/bitcoin-latest-updates-investors-sec-warning-hackers-cyber-security-steal-money-a8143631.html">the US Securities and Exchange Commission has told people to "exercise caution" and be wary of&nbsp;scammers</a>.</span>\r\n\r\nBut others have speculated&nbsp;that it could eventually rise&nbsp;towards the $1m (£724,549) mark.\r\n\r\nBitcoin has no central bank and is not linked to or regulated by any state.\r\n\r\nAn anonymised record of every bitcoin transaction is stored on a huge public ledger known as a blockchain.&nbsp;\r\n\r\n\r\n    \r\n  <h2>Gadgets and tech news in pictures</h2><br>', '1639586917_simplelogokela1s.jpg', '2018-05-12', 2),
(17, 'Berita Dua', 'Once you receive the mining payment to your NiceHash wallet, you can withdraw funds from NiceHash wallet at any time but please note&nbsp;that withdrawals and payments are manually confirmed once per day between 11:00 AM - 12:00 PM CET.\r\nUnpaid balances, lower than 0.0001 BTC, are considered as leftover \r\namounts and the only option for you to get these amounts paid out is to \r\nconnect your miner long enough to reach an unpaid balance higher than \r\n0.001 BTC (for NiceHash wallets) or 0.001 BTC (for external wallets), \r\nwhich will then be processed in full during the next payout schedule.\r\nPlease also note that we are periodically discarding balances, lower \r\nthan 0.0001 BTC for miners that are inactive 30 days, and balances lower\r\n than 0.001 BTC for miners that are inactive 90 days. All balances from \r\nall algorithms are aggregated into a single payment.\r\n<span>You can find the information on the service fees <a target="_blank" rel="nofollow" href="https://www.nicehash.com/help/fees#sellerFee">here</a> and the fee comparison between NiceHash wallet and external wallet <a target="_blank" rel="nofollow" href="https://new.nicehash.com/help/is-it-better-to-choose-nicehash-wallet-or-an-external-wallet-provider">here</a>.</span>\r\n&nbsp;\r\n<span>** W<span>e are already actively working on implementing alternative crypto-currencies for payments.&nbsp;This will help smaller miners to be paid more regularly.</span></span><br>', '2068395066_ngoding.jpg', '2018-05-12', 4),
(18, 'PR: BitBoost’s Blockchain Marketplace Goes Live in June', '<i>This is a paid press release, which contains forward \r\nlooking statements, and should be treated as advertising or promotional \r\nmaterial. Bitcoin.com does not endorse nor support this product/service.\r\n Bitcoin.com is not responsible for or liable for any content, accuracy \r\nor quality within the press release.</i>\r\nThe pioneering Ethereum-based e-commerce solution is looking for Sellers and Ambassadors to kickstart its new platform.\r\n<span><a target="_blank" rel="nofollow" href="http://bitboost.net/">BitBoost</a>\r\n will launch its decentralised marketplace in June. The project, which \r\nis built using Ethereum’s smart contracts, will enable buyers and \r\nsellers to connect directly – facilitating free and private online \r\ncommerce.</span>\r\n<span>Traditional user experience, low fees<br>\r\nThe marketplace takes the form of a downloadable piece of software that \r\nconnects to the Ethereum blockchain via either BitBoost’s node or a \r\nlocal node, if preferred. Payments for goods are made in ETH, and all \r\nlistings cost a flat fee of just $1, payable in the BBT token. The team \r\nhas worked hard to replicate the look and feel of traditional e-commerce\r\n platforms, with instant search and product images hosted on Imgur for \r\nanonymity.</span>\r\n‘We think this is going to be a game-changing decentralised \r\ne-commerce solution,’ says founder and CEO Paul Mahone. ‘We believe in \r\nfree trade, and the BitBoost marketplace entirely removes several common\r\n barriers and intermediaries in online commerce. Anyone can sign up for \r\nan account. You don’t need to submit an email address or any personal \r\ndetails: all that is required is an Ethereum address. The interface is \r\nclean and familiar, payments are fast and borderless, and privacy is \r\nbuilt in.’\r\n<span>Sellers’ Programme<br>\r\nBitBoost is looking for merchants to join the platform’s <a target="_blank" rel="nofollow" href="https://mailchi.mp/247bc905d5c6/sellers-campaign">Sellers’ Program</a>,\r\n bootstrapping activity on the marketplace and helping to build network \r\neffect and momentum. With low listing fees, and a smart contracts escrow\r\n system to protect both buyers and sellers, the company believes it will\r\n be an attractive alternative to the high commission fees and data \r\nharvesting that are the price of doing business in the traditional \r\ne-commerce industry.</span>\r\nBitBoost is also looking for Ambassadors to promote the initiative \r\naround the crypto world and the broader e-commerce sector. If you would \r\nlike to be involved in the project as a Seller or Ambassador, contact \r\ninfo@bitboost.net.<br>', '896168587_PR-May-1-696x464.jpg', '2018-05-12', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `silabus`
--

CREATE TABLE `silabus` (
  `id_silabus` int(3) NOT NULL,
  `nama_silabus` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `silabus`
--

INSERT INTO `silabus` (`id_silabus`, `nama_silabus`, `foto`) VALUES
(320044318, 'bermainmain', '1635361846_simplelogokela1s.jpg'),
(1444445521, 'mobel lejen', '1444445521_ngoding.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `jk` (`jk`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `silabus`
--
ALTER TABLE `silabus`
  ADD PRIMARY KEY (`id_silabus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=937628861;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id_gender` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `silabus`
--
ALTER TABLE `silabus`
  MODIFY `id_silabus` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1444445522;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `a` FOREIGN KEY (`jk`) REFERENCES `gender` (`id_gender`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `berita` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
