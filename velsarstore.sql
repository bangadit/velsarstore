-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2018 pada 04.59
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velsarstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, '2e41bfd3b555bc6e5267e3977ccc420a', 'ea89e688b85cf9960c27e20e94115e08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `city`
--

CREATE TABLE `city` (
  `id_city` int(11) NOT NULL,
  `id_province` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `city`
--

INSERT INTO `city` (`id_city`, `id_province`, `city`) VALUES
(1, 1, 'Badung'),
(2, 1, 'Bangli'),
(3, 2, 'Cilegon'),
(4, 2, 'Lebak'),
(5, 39, '-Select city-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `confirm`
--

CREATE TABLE `confirm` (
  `id_confirm` int(11) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `day`
--

CREATE TABLE `day` (
  `id_day` int(11) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `day`
--

INSERT INTO `day` (`id_day`, `day`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gender`
--

CREATE TABLE `gender` (
  `id_gender` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gender`
--

INSERT INTO `gender` (`id_gender`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `id_province` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `id_day` int(11) NOT NULL,
  `id_month` int(11) NOT NULL,
  `id_year` int(11) NOT NULL,
  `id_gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `fname`, `lname`, `email`, `address`, `password`, `telepon`, `id_province`, `id_city`, `id_day`, `id_month`, `id_year`, `id_gender`) VALUES
(1, 'Aditya Putra Irawan', 'Irawan', 'bangadit.irawan@gmail.com', 'dimana aja', '364bbf8c65ad15dc8e5ee0f79742d21d', '082177329234', 39, 5, 22, 7, 29, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `month`
--

CREATE TABLE `month` (
  `id_month` int(11) NOT NULL,
  `month` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `month`
--

INSERT INTO `month` (`id_month`, `month`) VALUES
(1, 'January'),
(2, 'Febuary'),
(3, 'March'),
(4, 'April'),
(5, 'Mei'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(5) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `harga` int(30) NOT NULL,
  `stok` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` varchar(65000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kategori`, `nama`, `berat`, `harga`, `stok`, `foto`, `deskripsi`) VALUES
(32, 'Bibit', 'Bibit Cabai', '2', 40000, 13, 'gamis2.jpg', 'Cabe adalah makanan kesukaan orang indonesia, dengan rasa yang menimbulkan respon panas terhadap panas, namun inilah sensasinya makan capai.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `province`
--

CREATE TABLE `province` (
  `id_province` int(11) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `province`
--

INSERT INTO `province` (`id_province`, `province`) VALUES
(1, 'Bali'),
(2, 'Banten'),
(3, 'Bengkulu'),
(4, 'Daerah Istimewa Yogyakarta'),
(5, 'DKI Jakarta'),
(6, 'Gorontalo'),
(7, 'Jambi'),
(8, 'Jawa Barat'),
(9, 'Jawa Tengah'),
(10, 'Jawa Timur'),
(11, 'Kalimantan Barat'),
(12, 'Kalimantan Selatan'),
(13, 'Kalimantan Tengah'),
(14, 'Kalimantan Timur'),
(15, 'Kalimantan Utara'),
(16, 'Kepulauan Bangka Belitung'),
(17, 'Kepulauan Riau'),
(18, 'Lampung'),
(19, 'Maluku'),
(20, 'Maluku Utara'),
(21, 'Nanggroe Aceh Darussalam'),
(22, 'Nusa Tenggara Barat'),
(23, 'Nusa Tenggara Timur'),
(24, 'Papua'),
(25, 'Papua Barat'),
(26, 'Riau'),
(27, 'Sulawesi Barat'),
(28, 'Sulawesi Selatan'),
(29, 'Sulawesi Tengah'),
(30, 'Sulawesi Tenggara'),
(31, 'Sulawesi Utara'),
(32, 'Sumatera Barat'),
(33, 'Sumatera Selatan'),
(34, 'Sumatera Utara'),
(35, 'Teluk Cendrawasih'),
(39, '-Select province-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `tgl_beli` varchar(20) NOT NULL,
  `tgl_sampai` varchar(100) NOT NULL,
  `metode` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(40) NOT NULL,
  `jumlah` int(40) NOT NULL,
  `total` int(40) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pembeli`, `nama_pembeli`, `telepon`, `alamat`, `tgl_beli`, `tgl_sampai`, `metode`, `email`, `id_produk`, `nama_produk`, `harga`, `jumlah`, `total`, `status`) VALUES
(17, 1, 'Aditya Putra', '082177329234', 'dimana aja', '21-07-2018', '-', 'BRI', 'bangadit.irawan@gmail.com', 29, 'asd', 234234234, 3, 702702702, 'Dibatalkan Oleh Pembeli'),
(18, 1, 'Aditya Putra', '082177329234', 'dimana aja', '21-07-2018', ' ', 'BRI', 'bangadit.irawan@gmail.com', 32, 'Bibit Cabai', 40000, 5, 200000, 'Menunggu Konfirmasi'),
(19, 1, 'Aditya Putra', '082177329234', 'dimana aja', '21-07-2018', ' ', 'BRI', 'bangadit.irawan@gmail.com', 32, 'Bibit Cabai', 40000, 1, 40000, 'Menunggu Konfirmasi'),
(20, 1, 'Aditya Putra', '082177329234', 'dimana aja', '21-07-2018', '21-07-2018', 'BRI', 'bangadit.irawan@gmail.com', 32, 'Bibit Cabai', 40000, 1, 40000, 'Barang Telah Sampai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `year`
--

CREATE TABLE `year` (
  `id_year` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `year`
--

INSERT INTO `year` (`id_year`, `year`) VALUES
(1, 1970),
(2, 1971),
(3, 1972),
(4, 1973),
(5, 1974),
(6, 1975),
(7, 1976),
(8, 1977),
(9, 1978),
(10, 1979),
(11, 1980),
(12, 1981),
(13, 1982),
(14, 1983),
(15, 1984),
(16, 1985),
(17, 1986),
(18, 1987),
(19, 1988),
(20, 1989),
(21, 1990),
(22, 1991),
(23, 1992),
(24, 1993),
(25, 1994),
(26, 1995),
(27, 1996),
(28, 1997),
(29, 1998),
(30, 1999),
(31, 2000),
(32, 2001),
(33, 2002),
(34, 2003),
(35, 2004),
(36, 2005),
(37, 2006),
(38, 2007),
(39, 2008),
(40, 2009),
(41, 2010),
(42, 2011),
(43, 2012),
(44, 2013),
(45, 2014),
(46, 2015),
(47, 2016),
(48, 2017),
(49, 2018);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`),
  ADD KEY `id_province` (`id_province`);

--
-- Indeks untuk tabel `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id_confirm`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id_day`);

--
-- Indeks untuk tabel `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `id_day` (`id_day`),
  ADD KEY `id_month` (`id_month`),
  ADD KEY `id_year` (`id_year`),
  ADD KEY `id_gender` (`id_gender`),
  ADD KEY `id_province` (`id_province`),
  ADD KEY `id_city` (`id_city`);

--
-- Indeks untuk tabel `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id_month`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_province`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id_year`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `city`
--
ALTER TABLE `city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id_confirm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `day`
--
ALTER TABLE `day`
  MODIFY `id_day` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `gender`
--
ALTER TABLE `gender`
  MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `month`
--
ALTER TABLE `month`
  MODIFY `id_month` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `province`
--
ALTER TABLE `province`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `year`
--
ALTER TABLE `year`
  MODIFY `id_year` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`id_province`) REFERENCES `province` (`id_province`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_month`) REFERENCES `month` (`id_month`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`id_year`) REFERENCES `year` (`id_year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_3` FOREIGN KEY (`id_gender`) REFERENCES `gender` (`id_gender`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_4` FOREIGN KEY (`id_day`) REFERENCES `day` (`id_day`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_5` FOREIGN KEY (`id_province`) REFERENCES `province` (`id_province`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_6` FOREIGN KEY (`id_city`) REFERENCES `city` (`id_city`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
