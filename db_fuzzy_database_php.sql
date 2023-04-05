-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jan 2016 pada 09.37
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fuzzy_database_php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(200) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `deskripsi`) VALUES
('CWLNI', 'Ciwalini', '-'),
('GNPTR', 'Gunung Putri', '-'),
('KPBBO', 'Kampung Bamboo', '-'),
('KWPTH', 'Kawah Putih', '-'),
('KBBDG', 'Kebun Binatang Bandung', '-'),
('PCKBT', 'Puncak Bintang', '-'),
('RCUPS', 'Ranca Upas', '-'),
('SHYHT', 'Sanghyang Heuleut', '-'),
('SAUJO', 'Saung Angklung Udjo', '-'),
('STUCS', 'Situ Cisanti', '-'),
('STPTG', 'Situ Patenggang', '-'),
('STGRD', 'Stone Garden', '-'),
('SGCKH', 'Sungai Cikahuripan', '-'),
('THRID', 'Taman Hutan Raya Ir Djuanda', '-'),
('TKPRH', 'Tangkuban Perahu', '-'),
('TBKRT', 'Tebing Keraton', '-'),
('TSBDG', 'Trans Studio Mall Bandung', '-'),
('BTKDA', 'Wisata Batukuda', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_fuzzy`
--

CREATE TABLE IF NOT EXISTS `kriteria_fuzzy` (
  `id_kriteria_fuzzy` varchar(50) NOT NULL,
  `nama_kriteria_fuzzy` varchar(200) DEFAULT NULL,
  `batas_bawah` double DEFAULT NULL,
  `batas_tengah` double DEFAULT NULL,
  `batas_atas` double DEFAULT NULL,
  `nama_bawah` varchar(200) DEFAULT NULL,
  `nama_tengah` varchar(200) DEFAULT NULL,
  `nama_atas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_fuzzy`
--

INSERT INTO `kriteria_fuzzy` (`id_kriteria_fuzzy`, `nama_kriteria_fuzzy`, `batas_bawah`, `batas_tengah`, `batas_atas`, `nama_bawah`, `nama_tengah`, `nama_atas`) VALUES
('JRK', 'Jarak', 13, 26, 38, 'Dekat', 'Sedang', 'Jauh'),
('HRG', 'Harga', 15000, 30000, 50000, 'Murah', 'Sedang', 'Mahal'),
('FSL', 'Fasilitas', 50, 70, 85, 'Kurang', 'Cukup', 'Lengkap'),
('SPT', 'Spot Foto', 50, 70, 85, 'Kurang', 'Cukup', 'Keren'),
('PKR', 'Parkiran', 50, 70, 85, 'Sempit', 'Sedang', 'Luas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_fuzzy`
--

CREATE TABLE IF NOT EXISTS `nilai_fuzzy` (
`id_nilai_fuzzy` int(11) NOT NULL,
  `id_alternatif` varchar(50) DEFAULT NULL,
  `id_kriteria_fuzzy` varchar(50) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `bawah` double DEFAULT NULL,
  `tengah` double DEFAULT NULL,
  `atas` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_fuzzy`
--

INSERT INTO `nilai_fuzzy` (`id_nilai_fuzzy`, `id_alternatif`, `id_kriteria_fuzzy`, `nilai`, `bawah`, `tengah`, `atas`) VALUES
(1, 'CWLNI', 'JRK', 42, 0, 0, 1),
(2, 'CWLNI', 'HRG', 25000, 0.3333, 0.6667, 0),
(3, 'CWLNI', 'FSL', 84, 0, 0.0667, 0.93333),
(4, 'CWLNI', 'SPT', 80, 0, 0.3333, 0.6667),
(5, 'CWLNI', 'PKR', 79, 0, 0.4, 0.6),
(6, 'GNPTR', 'JRK', 16, 0.7692, 0.2308, 0),
(7, 'GNPTR', 'HRG', 30000, 0, 1, 0),
(8, 'GNPTR', 'FSL', 81, 0, 0.2667, 0.73333),
(9, 'GNPTR', 'SPT', 87, 0, 0, 1),
(10, 'GNPTR', 'PKR', 82, 0, 0.2, 0.8),
(11, 'KPBBO', 'JRK', 10, 1, 0, 0),
(12, 'KPBBO', 'HRG', 75000, 0, 0, 1),
(13, 'KPBBO', 'FSL', 86, 0, 0, 1),
(14, 'KPBBO', 'SPT', 81, 0, 0.2667, 0.7333),
(15, 'KPBBO', 'PKR', 79, 0, 0.4, 0.6),
(16, 'KWPTH', 'JRK', 45, 0, 0, 1),
(17, 'KWPTH', 'HRG', 45000, 0, 0.25, 0.75),
(18, 'KWPTH', 'FSL', 84, 0, 0.0667, 0.93333),
(19, 'KWPTH', 'SPT', 82, 0, 0.2, 0.8),
(20, 'KWPTH', 'PKR', 80, 0, 0.3333, 0.6667),
(21, 'KBBDG', 'JRK', 4, 1, 0, 0),
(22, 'KBBDG', 'HRG', 55000, 0, 0, 1),
(23, 'KBBDG', 'FSL', 88, 0, 0, 1),
(24, 'KBBDG', 'SPT', 82, 0, 0.2, 0.8),
(25, 'KBBDG', 'PKR', 87, 0, 0, 1),
(26, 'PCKBT', 'JRK', 14, 0.9231, 0.0769, 0),
(27, 'PCKBT', 'HRG', 15000, 1, 0, 0),
(28, 'PCKBT', 'FSL', 76, 0, 0.6, 0.4),
(29, 'PCKBT', 'SPT', 90, 0, 0, 1),
(30, 'PCKBT', 'PKR', 70, 0, 1, 0),
(31, 'RCUPS', 'JRK', 41, 0, 0, 1),
(32, 'RCUPS', 'HRG', 30000, 0, 1, 0),
(33, 'RCUPS', 'FSL', 82, 0, 0.2, 0.8),
(34, 'RCUPS', 'SPT', 85, 0, 0, 1),
(35, 'RCUPS', 'PKR', 82, 0, 0.2, 0.8),
(36, 'SHYHT', 'JRK', 36, 0, 0.1667, 0.8333),
(37, 'SHYHT', 'HRG', 20000, 0.6667, 0.3333, 0),
(38, 'SHYHT', 'FSL', 63, 0.35, 0.65, 0),
(39, 'SHYHT', 'SPT', 85, 0, 0, 1),
(40, 'SHYHT', 'PKR', 70, 0, 1, 0),
(41, 'SAUJO', 'JRK', 6, 1, 0, 0),
(42, 'SAUJO', 'HRG', 60000, 0, 0, 1),
(43, 'SAUJO', 'FSL', 87, 0, 0, 1),
(44, 'SAUJO', 'SPT', 84, 0, 0.0667, 0.9333),
(45, 'SAUJO', 'PKR', 85, 0, 0, 1),
(46, 'STUCS', 'JRK', 43, 0, 0, 1),
(47, 'STUCS', 'HRG', 10000, 1, 0, 0),
(48, 'STUCS', 'FSL', 68, 0.1, 0.9, 0),
(49, 'STUCS', 'SPT', 82, 0, 0.2, 0.8),
(50, 'STUCS', 'PKR', 69, 0.05, 0.95, 0),
(51, 'STPTG', 'JRK', 46, 0, 0, 1),
(52, 'STPTG', 'HRG', 25000, 0.3333, 0.6667, 0),
(53, 'STPTG', 'FSL', 82, 0, 0.2, 0.8),
(54, 'STPTG', 'SPT', 84, 0, 0.0667, 0.9333),
(55, 'STPTG', 'PKR', 85, 0, 0, 1),
(56, 'STGRD', 'JRK', 24, 0.1538, 0.8462, 0),
(57, 'STGRD', 'HRG', 17000, 0.8667, 0.1333, 0),
(58, 'STGRD', 'FSL', 59, 0.55, 0.45, 0),
(59, 'STGRD', 'SPT', 82, 0, 0.2, 0.8),
(60, 'STGRD', 'PKR', 73, 0, 0.8, 0.2),
(61, 'SGCKH', 'JRK', 34, 0, 0.3333, 0.6667),
(62, 'SGCKH', 'HRG', 20000, 0.6667, 0.3333, 0),
(63, 'SGCKH', 'FSL', 51, 0.95, 0.05, 0),
(64, 'SGCKH', 'SPT', 87, 0, 0, 1),
(65, 'SGCKH', 'PKR', 40, 1, 0, 0),
(66, 'THRID', 'JRK', 9, 1, 0, 0),
(67, 'THRID', 'HRG', 20000, 0.6667, 0.3333, 0),
(68, 'THRID', 'FSL', 80, 0, 0.3333, 0.6667),
(69, 'THRID', 'SPT', 81, 0, 0.2667, 0.7333),
(70, 'THRID', 'PKR', 78, 0, 0.4667, 0.5333),
(71, 'TKPRH', 'JRK', 22, 0.3077, 0.6923, 0),
(72, 'TKPRH', 'HRG', 35000, 0, 0.75, 0.25),
(73, 'TKPRH', 'FSL', 83, 0, 0.1333, 0.8667),
(74, 'TKPRH', 'SPT', 83, 0, 0.1333, 0.8667),
(75, 'TKPRH', 'PKR', 83, 0, 0.1333, 0.8667),
(76, 'TBKRT', 'JRK', 13, 1, 0, 0),
(77, 'TBKRT', 'HRG', 17000, 0.8667, 0.1333, 0),
(78, 'TBKRT', 'FSL', 62, 0.4, 0.6, 0),
(79, 'TBKRT', 'SPT', 83, 0, 0.1333, 0.8667),
(80, 'TBKRT', 'PKR', 65, 0.25, 0.75, 0),
(81, 'TSBDG', 'JRK', 3, 1, 0, 0),
(82, 'TSBDG', 'HRG', 180000, 0, 0, 1),
(83, 'TSBDG', 'FSL', 95, 0, 0, 1),
(84, 'TSBDG', 'SPT', 84, 0, 0.0667, 0.9333),
(85, 'TSBDG', 'PKR', 90, 0, 0, 1),
(86, 'BTKDA', 'JRK', 19, 0.5384, 0.4615, 0),
(87, 'BTKDA', 'HRG', 15000, 1, 0, 0),
(88, 'BTKDA', 'FSL', 79, 0, 0.4, 0.6),
(89, 'BTKDA', 'SPT', 80, 0, 0.3333, 0.6667),
(90, 'BTKDA', 'PKR', 68, 0.1, 0.9, 0);

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
 ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria_fuzzy`
--
ALTER TABLE `kriteria_fuzzy`
 ADD PRIMARY KEY (`id_kriteria_fuzzy`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `nilai_fuzzy`
--
ALTER TABLE `nilai_fuzzy`
 ADD PRIMARY KEY (`id_nilai_fuzzy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_fuzzy`
--
ALTER TABLE `nilai_fuzzy`
MODIFY `id_nilai_fuzzy` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;