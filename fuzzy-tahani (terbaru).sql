-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 12:26 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuzzy-tahani`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar_wisata` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `deskripsi`, `gambar_wisata`, `website`) VALUES
('AKB', 'Alun-Alun Kota Batu', 'Destinasi wisata ikonik dengan bianglala dengan harga tiket masuk GRATIS', 'aakb.JPG', 'https://travelspromo.com/htm-wisata/alun-alun-kota-wisata-batu'),
('AKM', 'Alun-Alun Kota Malang', 'Destinasi wisata untuk bersantai bersama keluarga maupun pasangan dengan harga tiket masuk GRATIS', 'aakm.jpg', 'https://salsawisata.com/alun-alun-kota-malang/'),
('BLG', 'Batu Love Garden', 'Destinasi wisata berbagai macam flora dengan harga tiket masuk Rp. 60.000', 'baloga.JPG', 'https://jtp.id/batulovegarden/'),
('BNS', 'Batu Night Spectacular', 'Destinasi wisata dengan wahana seru dan lampu warna-warni dengan harga tiket masuk Rp. 35.000', 'bns.jpg', 'https://jtp.id/bns/mobile/'),
('CB', 'Candi Badut', 'Destinasi wisata berupa candi peninggalan Kerajaan Kanjuruhan dengan harga tiket masuk Rp. 10.000', 'cbadut.jpg', 'https://sikidang.com/candi-badut/'),
('CP', 'Coban Putri', 'Destinasi wisata alam air terjun dengan harga tiket Rp. 10.000', 'coban putri.jpg', 'https://dolanyok.com/air-terjun-coban-putri/'),
('CR', 'Coban Rondo', 'Destinasi wisata alam air terjun dengan harga tiket Rp. 35.000', 'coban rondo.jpeg', 'https://salsawisata.com/air-terjun-coban-rondo/'),
('CS', 'Candi Singosari', 'Destinasi wisata berupa candi peninggalan Kerajaan Singasari dengan harga tiket masuk GRATIS', 'csingosari.jpg', 'https://salsawisata.com/candi-singosari/'),
('CT', 'Coban Talun', 'Destinasi wisata alam air terjun dengan harga tiket Rp. 12.000', 'coban talun.jpg', 'https://salsawisata.com/air-terjun-coban-talun/'),
('CWO', 'Coban Watu Ondo', 'Destinasi wisata alam air terjun dengan harga tiket terjangkau', 'watu ondo.jpg', 'https://www.pinhome.id/info-area/coban-kembar-watu-ondo/'),
('EGP', 'Eco Green Park', 'Destinasi indah yang menawarkan aneka fauna dengan harga Rp. 55.000', 'eco green park.jpg', 'https://jtp.id/ecogreenpark/'),
('FST', 'Florawisata San Terra', 'Destinasi wisata dengan spot foto instagramable dengan harga tiket masuk Rp. 30.000', 'santerra.jpg', 'https://travelspromo.com/htm-wisata/flora-wisata-san-terra-malang/'),
('GP', 'Goa Pinus', 'Destinasi wisata di kawasan hutan pinus dengan harga tiket Rp. 10.000', 'goapinus.jpg', 'https://travelspromo.com/htm-wisata/goa-pinus-batu/'),
('HW', 'Hawai Waterpark', 'Destinasi wisata berbagai macam kolam renang harga tiket Rp. 85.000', 'hawaiwaterpark.jpg', 'https://travelspromo.com/htm-wisata/hawai-waterpark-malang-harga-tiket-masuk-2015/'),
('JTP1', 'Jatim Park 1', 'Destinasi wisata berbagai macam wahana seru dengan harga tiket Rp. 100.000', 'jtp1.jpg', 'https://jtp.id/jatimpark1/mobile/'),
('JTP2', 'Jatim Park 2', 'Destinasi wisata berbagai macam fauna dengan harga tiket Rp. 140.000', 'jtp2.jpg', 'https://jtp.id/batusecretzoo/'),
('JTP3', 'Jatim Park 3', 'Destinasi wisata sejarah dinosaurus dengan harga tiket mulai dari Rp. 125.000', 'jtp3.jpg', 'https://jtp.id/jatimpark3/mobile/'),
('KBP', 'Kampung Budaya Polowijen', 'Destinasi wisata edukasi dengan harga tiket masuk GRATIS jika pengunjung 1 - 2 orang', 'kbp.jpg', 'https://atourin.com/destination/malang/kampung-budaya-polowijen/'),
('KT', 'Kampung Tridi', 'Destinasi wisata rumah warna-warni dengan harga tiket Rp. 3.000', 'kampungtridi.jpg', 'https://atourin.com/destination/malang/kampung-tridi'),
('KTW', 'Kebun Teh Wonosari', 'Destinasi wisata pemandangan kebun teh dan petik daun teh dengan harga tiket masuk Rp. 12.000', 'ktwonosari.jpg', 'https://sikidang.com/kebun-teh-wonosari/'),
('MA', 'Museum Angkut', 'Destinasi wisata menyediakan koleksi berbagai macam kendaraan dengan harga tiket masuk Rp. 110.000', 'mangkut.jpg', 'https://jtp.id/museumangkut/'),
('MB', 'Museum Brawijaya', 'Destinasi wisata sejarah & edukasi dengan harga tiket Rp. 5.000', 'mbrawijaya.jpg', 'https://salsawisata.com/museum-brawijaya/'),
('MMP', 'Museum Mpu Purwa', 'Destinasi wisata museum yang mengoleksi benda purbakala dengan harga tiket masuk GRATIS', 'mmp.jpg', 'https://tempatwisata.pro/wisata/Museum-Mpu-Purwa/'),
('MMTD', 'Museum Malang Tempoe Doeloe', 'Destinasi wisata sejarah & edukasi dengan harga tiket Rp. 25.000 Namun sudah tutup permanen', 'mmtd.jpg', 'https://sikidang.com/museum-malang-tempo-doeloe/'),
('OK', 'Omah Kayu', 'Destinasi wisata rumah kayu dengan harga tiket Rp. 10.000', 'omahkayu.jpg', 'https://salsawisata.com/omah-kayu-malang/'),
('PB', 'Pantai Balekambang', 'Destinasi wisata pantai dengan harga tiket Rp. 20.000', 'balekambang.jpg', 'https://salsawisata.com/pantai-balekambang/'),
('PBM', 'Pantai Bajulmati', 'Destinasi wisata pantai dengan harga tiket Rp. 10.000', 'bajulmati.jpg', 'https://sikidang.com/pantai-bajul-mati/'),
('PLG', 'Paralayang', 'Destinasi wisata alam dan Paralayang dengan harga tiket masuk Rp. 10.000', 'paralayang.jpg', 'https://penginapan.net/harga-tiket-masuk-fasilitas-dan-biaya-paralayang-batu-malang/'),
('PN', 'Pantai Ngliyep', 'Destinasi wisata pantai dengan harga tiket Rp. 15.000', 'ngliyep.jpg', 'https://piknikwisata.com/jatim/malang/pantai/ngliyep/'),
('PSB', 'Pantai Sendang Biru', 'Destinasi wisata pantai dengan harga tiket Rp. 12.000', 'sendangbiru.jpg', 'https://sikidang.com/pantai-sendang-biru/'),
('PTA', 'Pantai Teluk Asmara', 'Destinasi wisata pantai dengan harga tiket Rp. 15.000', 'telukasmara.jpg', 'https://travelspromo.com/htm-wisata/pantai-teluk-asmara-malang/'),
('PTT', 'Pantai Tiga Warna', 'Destinasi wisata pantai dengan harga tiket Rp. 10.000', '3warna.jpg', 'https://sikidang.com/pantai-tiga-warna'),
('SS', 'Sumber Sirah', 'Destinasi sumber air dengan harga tiket Rp. 5.000', 'sumbersirah.jpg', 'https://sikidang.com/sumber-sirah/');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_fuzzy`
--

CREATE TABLE `kriteria_fuzzy` (
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
-- Dumping data for table `kriteria_fuzzy`
--

INSERT INTO `kriteria_fuzzy` (`id_kriteria_fuzzy`, `nama_kriteria_fuzzy`, `batas_bawah`, `batas_tengah`, `batas_atas`, `nama_bawah`, `nama_tengah`, `nama_atas`) VALUES
('FSL', 'Fasilitas', 50, 70, 85, 'Kurang', 'Cukup', 'Lengkap'),
('HRG', 'Harga', 10000, 55000, 100000, 'Murah', 'Sedang', 'Mahal'),
('JRK', 'Jarak', 10, 25, 55, 'Dekat', 'Sedang', 'Jauh'),
('LPKR', 'Luas Parkir', 50, 70, 85, 'Sempit', 'Sedang', 'Luas'),
('SPTF', 'Spot Foto', 50, 70, 90, 'Kurang', 'Cukup', 'Keren');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123'),
('fauzan', 'fauzan123');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_fuzzy`
--

CREATE TABLE `nilai_fuzzy` (
  `id_nilai_fuzzy` int(11) NOT NULL,
  `id_alternatif` varchar(50) DEFAULT NULL,
  `id_kriteria_fuzzy` varchar(50) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `bawah` double DEFAULT NULL,
  `tengah` double DEFAULT NULL,
  `atas` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_fuzzy`
--

INSERT INTO `nilai_fuzzy` (`id_nilai_fuzzy`, `id_alternatif`, `id_kriteria_fuzzy`, `nilai`, `bawah`, `tengah`, `atas`) VALUES
(1, 'EGP', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(2, 'EGP', 'HRG', 55000, 0, 1, 0),
(3, 'EGP', 'JRK', 20, 0.33333333333333, 0.66666666666667, 0),
(4, 'EGP', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(5, 'EGP', 'SPTF', 80, 0, 0.5, 0.5),
(6, 'CP', 'FSL', 75, 0, 0.66666666666667, 0.33333333333333),
(7, 'CP', 'HRG', 10000, 1, 0, 0),
(8, 'CP', 'JRK', 23, 0.13333333333333, 0.86666666666667, 0),
(9, 'CP', 'LPKR', 70, 0, 1, 0),
(10, 'CP', 'SPTF', 80, 0, 0.5, 0.5),
(11, 'CWO', 'FSL', 75, 0, 0.66666666666667, 0.33333333333333),
(12, 'CWO', 'HRG', 2500, 1, 0, 0),
(13, 'CWO', 'JRK', 38, 0, 0.56666666666667, 0.43333333333333),
(14, 'CWO', 'LPKR', 70, 0, 1, 0),
(15, 'CWO', 'SPTF', 85, 0, 0.25, 0.75),
(16, 'CT', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(17, 'CT', 'HRG', 12000, 0.95555555555556, 0.044444444444444, 0),
(18, 'CT', 'JRK', 30, 0, 0.83333333333333, 0.16666666666667),
(19, 'CT', 'LPKR', 65, 0.25, 0.75, 0),
(20, 'CT', 'SPTF', 85, 0, 0.25, 0.75),
(21, 'CR', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(22, 'CR', 'HRG', 35000, 0.44444444444444, 0.55555555555556, 0),
(23, 'CR', 'JRK', 20, 0.33333333333333, 0.66666666666667, 0),
(24, 'CR', 'LPKR', 75, 0, 0.66666666666667, 0.33333333333333),
(25, 'CR', 'SPTF', 85, 0, 0.25, 0.75),
(26, 'HW', 'FSL', 85, 0, 0, 1),
(27, 'HW', 'HRG', 85000, 0, 0.33333333333333, 0.66666666666667),
(28, 'HW', 'JRK', 8, 1, 0, 0),
(29, 'HW', 'LPKR', 85, 0, 0, 1),
(30, 'HW', 'SPTF', 85, 0, 0.25, 0.75),
(31, 'PTA', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(32, 'PTA', 'HRG', 15000, 0.88888888888889, 0.11111111111111, 0),
(33, 'PTA', 'JRK', 73, 0, 0, 1),
(34, 'PTA', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(35, 'PTA', 'SPTF', 85, 0, 0.25, 0.75),
(36, 'PB', 'FSL', 85, 0, 0, 1),
(37, 'PB', 'HRG', 20000, 0.77777777777778, 0.22222222222222, 0),
(38, 'PB', 'JRK', 67, 0, 0, 1),
(39, 'PB', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(40, 'PB', 'SPTF', 85, 0, 0.25, 0.75),
(41, 'PN', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(42, 'PN', 'HRG', 15000, 0.88888888888889, 0.11111111111111, 0),
(43, 'PN', 'JRK', 65, 0, 0, 1),
(44, 'PN', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(45, 'PN', 'SPTF', 75, 0, 0.75, 0.25),
(46, 'PSB', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(47, 'PSB', 'HRG', 12000, 0.95555555555556, 0.044444444444444, 0),
(48, 'PSB', 'JRK', 70, 0, 0, 1),
(49, 'PSB', 'LPKR', 75, 0, 0.66666666666667, 0.33333333333333),
(50, 'PSB', 'SPTF', 70, 0, 1, 0),
(51, 'PTT', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(52, 'PTT', 'HRG', 10000, 1, 0, 0),
(53, 'PTT', 'JRK', 72, 0, 0, 1),
(54, 'PTT', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(55, 'PTT', 'SPTF', 75, 0, 0.75, 0.25),
(56, 'PBM', 'FSL', 85, 0, 0, 1),
(57, 'PBM', 'HRG', 10000, 1, 0, 0),
(58, 'PBM', 'JRK', 58, 0, 0, 1),
(59, 'PBM', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(60, 'PBM', 'SPTF', 85, 0, 0.25, 0.75),
(61, 'KT', 'FSL', 70, 0, 1, 0),
(62, 'KT', 'HRG', 3000, 1, 0, 0),
(63, 'KT', 'JRK', 2, 1, 0, 0),
(64, 'KT', 'LPKR', 65, 0.25, 0.75, 0),
(65, 'KT', 'SPTF', 90, 0, 0, 1),
(66, 'SS', 'FSL', 70, 0, 1, 0),
(67, 'SS', 'HRG', 5000, 1, 0, 0),
(68, 'SS', 'JRK', 21, 0.26666666666667, 0.73333333333333, 0),
(69, 'SS', 'LPKR', 70, 0, 1, 0),
(70, 'SS', 'SPTF', 80, 0, 0.5, 0.5),
(71, 'OK', 'FSL', 60, 0.5, 0.5, 0),
(72, 'OK', 'HRG', 10000, 1, 0, 0),
(73, 'OK', 'JRK', 28, 0, 0.9, 0.1),
(74, 'OK', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(75, 'OK', 'SPTF', 85, 0, 0.25, 0.75),
(76, 'PLG', 'FSL', 60, 0.5, 0.5, 0),
(77, 'PLG', 'HRG', 10000, 1, 0, 0),
(78, 'PLG', 'JRK', 28, 0, 0.9, 0.1),
(79, 'PLG', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(80, 'PLG', 'SPTF', 85, 0, 0.25, 0.75),
(81, 'GP', 'FSL', 60, 0.5, 0.5, 0),
(82, 'GP', 'HRG', 10000, 1, 0, 0),
(83, 'GP', 'JRK', 30, 0, 0.83333333333333, 0.16666666666667),
(85, 'GP', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(86, 'GP', 'SPTF', 85, 0, 0.25, 0.75),
(87, 'MMTD', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(88, 'MMTD', 'HRG', 25000, 0.66666666666667, 0.33333333333333, 0),
(89, 'MMTD', 'JRK', 5, 1, 0, 0),
(90, 'MMTD', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(91, 'MMTD', 'SPTF', 85, 0, 0.25, 0.75),
(92, 'MB', 'FSL', 70, 0, 1, 0),
(93, 'MB', 'HRG', 5000, 1, 0, 0),
(94, 'MB', 'JRK', 4, 1, 0, 0),
(95, 'MB', 'LPKR', 75, 0, 0.66666666666667, 0.33333333333333),
(96, 'MB', 'SPTF', 65, 0.25, 0.75, 0),
(97, 'JTP1', 'FSL', 85, 0, 0, 1),
(98, 'JTP1', 'HRG', 100000, 0, 0, 1),
(99, 'JTP1', 'JRK', 20, 0.33333333333333, 0.66666666666667, 0),
(100, 'JTP1', 'LPKR', 85, 0, 0, 1),
(101, 'JTP1', 'SPTF', 85, 0, 0.25, 0.75),
(102, 'JTP2', 'FSL', 85, 0, 0, 1),
(103, 'JTP2', 'HRG', 140000, 0, 0, 1),
(104, 'JTP2', 'JRK', 18, 0.46666666666667, 0.53333333333333, 0),
(105, 'JTP2', 'LPKR', 85, 0, 0, 1),
(106, 'JTP2', 'SPTF', 85, 0, 0.25, 0.75),
(107, 'JTP3', 'FSL', 85, 0, 0, 1),
(108, 'JTP3', 'HRG', 125000, 0, 0, 1),
(109, 'JTP3', 'LPKR', 85, 0, 0, 1),
(110, 'JTP3', 'JRK', 15, 0.66666666666667, 0.33333333333333, 0),
(111, 'JTP3', 'SPTF', 85, 0, 0.25, 0.75),
(112, 'AKB', 'FSL', 70, 0, 1, 0),
(113, 'AKB', 'HRG', 0, 1, 0, 0),
(114, 'AKB', 'JRK', 21, 0.26666666666667, 0.73333333333333, 0),
(115, 'AKB', 'LPKR', 70, 0, 1, 0),
(116, 'AKB', 'SPTF', 70, 0, 1, 0),
(117, 'BNS', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(118, 'BNS', 'HRG', 35000, 0.44444444444444, 0.55555555555556, 0),
(119, 'BNS', 'JRK', 19, 0.4, 0.6, 0),
(120, 'BNS', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(121, 'BNS', 'SPTF', 85, 0, 0.25, 0.75),
(122, 'MA', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(123, 'MA', 'HRG', 110000, 0, 0, 1),
(124, 'MA', 'JRK', 19, 0.4, 0.6, 0),
(126, 'MA', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(127, 'MA', 'SPTF', 85, 0, 0.25, 0.75),
(128, 'BLG', 'FSL', 85, 0, 0, 1),
(129, 'BLG', 'HRG', 60000, 0, 0.88888888888889, 0.11111111111111),
(130, 'BLG', 'JRK', 21, 0.26666666666667, 0.73333333333333, 0),
(131, 'BLG', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(132, 'BLG', 'SPTF', 90, 0, 0, 1),
(133, 'FST', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(134, 'FST', 'HRG', 30000, 0.55555555555556, 0.44444444444444, 0),
(135, 'FST', 'JRK', 26, 0, 0.96666666666667, 0.033333333333333),
(136, 'FST', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(137, 'FST', 'SPTF', 90, 0, 0, 1),
(138, 'KTW', 'FSL', 85, 0, 0, 1),
(139, 'KTW', 'HRG', 12000, 0.95555555555556, 0.044444444444444, 0),
(140, 'KTW', 'JRK', 30, 0, 0.83333333333333, 0.16666666666667),
(141, 'KTW', 'LPKR', 85, 0, 0, 1),
(142, 'KTW', 'SPTF', 85, 0, 0.25, 0.75),
(143, 'AKM', 'FSL', 70, 0, 1, 0),
(144, 'AKM', 'HRG', 0, 1, 0, 0),
(145, 'AKM', 'JRK', 2, 1, 0, 0),
(146, 'AKM', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(147, 'AKM', 'SPTF', 70, 0, 1, 0),
(148, 'KBP', 'FSL', 60, 0.5, 0.5, 0),
(149, 'KBP', 'HRG', 0, 1, 0, 0),
(150, 'KBP', 'JRK', 3, 1, 0, 0),
(151, 'KBP', 'LPKR', 75, 0, 0.66666666666667, 0.33333333333333),
(152, 'KBP', 'SPTF', 70, 0, 1, 0),
(153, 'MMP', 'FSL', 65, 0.25, 0.75, 0),
(154, 'MMP', 'HRG', 0, 1, 0, 0),
(155, 'MMP', 'JRK', 2, 1, 0, 0),
(156, 'MMP', 'LPKR', 70, 0, 1, 0),
(157, 'MMP', 'SPTF', 70, 0, 1, 0),
(158, 'CB', 'FSL', 80, 0, 0.33333333333333, 0.66666666666667),
(159, 'CB', 'HRG', 10000, 1, 0, 0),
(160, 'CB', 'JRK', 5, 1, 0, 0),
(161, 'CB', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(162, 'CB', 'SPTF', 80, 0, 0.5, 0.5),
(163, 'CS', 'FSL', 75, 0, 0.66666666666667, 0.33333333333333),
(164, 'CS', 'HRG', 0, 1, 0, 0),
(165, 'CS', 'JRK', 10, 1, 0, 0),
(166, 'CS', 'LPKR', 80, 0, 0.33333333333333, 0.66666666666667),
(167, 'CS', 'SPTF', 80, 0, 0.5, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(8) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `id_alternatif` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `website`, `alamat`, `latitude`, `longitude`, `id_alternatif`) VALUES
(1, 'Eco Green Park', 'https://jtp.id/ecogreenpark/', 'Jl. Jl. Raya Oro-Oro Ombo No.9A, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314', '-7.8886606', '112.5276998', 'EGP'),
(2, 'Coban Watu Ondo', 'https://www.pinhome.id/info-area/coban-kembar-watu-ondo/', 'Bagean Borah, Madiredo, Kec. Pujon, Kabupaten Malang, Jawa Timur 65392', '-7.783541', '112.4547438', 'CWO'),
(3, 'Coban Putri', 'https://dolanyok.com/air-terjun-coban-putri/', 'Jalur Lkr. Bar., Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316', '-7.912707', '112.526767', 'CP'),
(4, 'Coban Talun', 'https://salsawisata.com/air-terjun-coban-talun/', 'Dusun Wonorejo, Desa Tulungrejo, Bumiaji, Kota Batu, Jawa Timur', '-7.8039181', '112.5061791', 'CT'),
(5, 'Coban Rondo', 'https://salsawisata.com/air-terjun-coban-rondo/', 'Jl. Coban Rondo, Krajan, Pandesari, Kec. Pujon, Kabupaten Malang, Jawa Timur 65391', '-7.884994', '112.477319', 'CR'),
(6, 'Hawai Waterpark', 'https://travelspromo.com/htm-wisata/hawai-waterpark-malang-harga-tiket-masuk-2015/', 'Jl. Graha Kencana Utara V, Karanglo, Banjararum, Kec. Singosari, Kabupaten Malang, Jawa Timur 65153', '-7.9232799', '112.6571', 'HW'),
(7, 'Pantai Teluk Asmara', 'https://travelspromo.com/htm-wisata/pantai-teluk-asmara-malang/', 'Tambak, Sitiarjo, Kec. Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur 65176', '-8.4429422', '112.6654655', 'PTA'),
(8, 'Pantai Balekambang', 'https://salsawisata.com/pantai-balekambang/', 'Jl. Bale Kambang, Surigondo, Srigonco, Kec. Bantur, Kabupaten Malang, Jawa Timur 65179', '-8.4031095', '112.5358953', 'PB'),
(9, 'Pantai Ngliyep', 'https://piknikwisata.com/jatim/malang/pantai/ngliyep/', 'Desa, Hutan, Kedungsalam, Kec. Donomulyo, Kabupaten Malang, Jawa Timur 65167', '-8.3835873', '112.4242054', 'PN'),
(10, 'Pantai Sendangbiru', 'https://sikidang.com/pantai-sendang-biru/', 'Sendangbiru, Tambakrejo, Kec. Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur 65176', '-8.431425', '112.6860615', 'PSB'),
(11, 'Pantai Tiga Warna', 'https://sikidang.com/pantai-tiga-warna', 'Jl. Sendang Biru, Area Sawah/Kebun, Tambakrejo, Kec. Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur 65176', '-8.4391425', '112.6674944', 'PTT'),
(12, 'Pantai Bajulmati', 'https://sikidang.com/pantai-bajul-mati/', 'Jl. Prempatan Jls pantai, Umbulrejo, bajulmati, Gedangan, Kabupaten Malang, Jawa Timur 65178', '-8.4284642', '112.6361241', 'PBM'),
(13, 'Kampung Tridi', 'https://atourin.com/destination/malang/kampung-tridi', 'Jl. Temenggungan Ledok, Kesatrian, Kec. Blimbing, Kota Malang, Jawa Timur 65121', '-7.981849', '112.6355354', 'KT'),
(14, 'Sumber Sirah', 'https://sikidang.com/sumber-sirah/', 'Jalan Sunan Kalijaga I RT.05/RW.02, Putuk Utara, Putukrejo, Kec. Gondanglegi, Kabupaten Malang, Jawa Timur 65174', '-8.1229106', '112.6180274', 'SS'),
(15, 'Omah Kayu', 'https://salsawisata.com/omah-kayu-malang/', 'Jl. Gn. Banyak, Gunungsari, Kec. Bumiaji, Kota Batu, Jawa Timur 65312', '-7.8549492', '112.4952355', 'OK'),
(16, 'Paralayang', 'https://penginapan.net/harga-tiket-masuk-fasilitas-dan-biaya-paralayang-batu-malang/', 'Jl. Brigjend Abd Manan Wijaya No.186, Maron, Pandesari, Kec. Pujon, Kabupaten Malang, Jawa Timur 65391', '-7.8550438', '112.4942235', 'PLG'),
(17, 'Museum Malang Tempoe Doeloe', 'https://sikidang.com/museum-malang-tempo-doeloe/', 'Jl. Gajahmada, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119', '-7.9789589', '112.6323569', 'MMTD'),
(18, 'Goa Pinus', 'https://travelspromo.com/htm-wisata/goa-pinus-batu/', 'Gunungsari, Kec. Bumiaji, Kota Batu, Jawa Timur 65337', '-7.8488572', '112.4915294', 'GP'),
(19, 'Museum Brawijaya', 'https://salsawisata.com/museum-brawijaya/', 'Jl. Besar Ijen No.25A, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115', '-7.9721325', '112.6186394', 'MB'),
(20, 'Jawa Timur Park 1', 'https://jtp.id/jatimpark1/mobile/', 'Jl. Kartika No.2, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65315', '-7.884152', '112.5222573', 'JTP1'),
(21, 'Jawa Timur Park 2', 'https://jtp.id/batusecretzoo/', 'Jl. Raya Oro-Oro Ombo No.9, Temas, Kec. Batu, Kota Batu, Jawa Timur 65315', '-7.888021', '112.5269746', 'JTP2'),
(22, 'Jawa Timur Park 3', 'https://jtp.id/jatimpark3/mobile/', 'Jl. Ir. Soekarno No.144, Beji, Kec. Junrejo, Kota Batu, Jawa Timur 65236', '-7.8971338', '112.5505331', 'JTP3'),
(23, 'Alun-Alun Kota Batu', 'https://travelspromo.com/htm-wisata/alun-alun-kota-wisata-batu', 'Jl. Diponegoro, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314', '-7.8711707', '112.5243562', 'AKB'),
(24, 'Batu Night Spectacular', 'https://jtp.id/bns/mobile/', 'Jl. Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316', '-7.8965265', '112.5334589', 'BNS'),
(25, 'Museum Angkut', 'https://jtp.id/museumangkut/', 'Jl. Terusan Sultan Agung No.2, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65314', '-7.878809', '112.5173998', 'MA'),
(26, 'Batu Love Garden', 'https://jtp.id/batulovegarden/', 'Jl. Raya Pandanrejo No.91, Pandanrejo, Kec. Bumiaji, Kota Batu, Jawa Timur 65332', '-7.8639275', '112.540267', 'BLG'),
(27, 'Florawisata Santerra De Laponte', 'https://travelspromo.com/htm-wisata/flora-wisata-san-terra-malang/', 'Jalan Raya Madya, Jurangrejo, Pandesari, Kec. Pujon, Kabupaten Malang, Jawa Timur 65391', '-7.8541183', '112.4857375', 'FST'),
(28, 'Kebun Teh Wonosari', 'https://sikidang.com/kebun-teh-wonosari/', 'RT.04/RW.07, Bodean Putuk, Toyomarto, Kec. Singosari, Kabupaten Malang, Jawa Timur 65153', '-7.8204902', '112.6405753', 'KTW'),
(29, 'Alun-Alun Kota Malang', 'https://salsawisata.com/alun-alun-kota-malang/', 'Jl. Merdeka Selatan, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119', '-7.9826145', '112.6282364', 'AKM'),
(30, 'Museum Mpu Purwa', 'https://tempatwisata.pro/wisata/Museum-Mpu-Purwa/', 'Perumahan Griya Santa, Jl. Soekarno - Hatta No.210, Mojolangu, Lowokwaru, Kota Malang, Jawa Timur 65141', '-7.9404409', '112.6182048', 'MMP'),
(31, 'Candi Badut', 'https://sikidang.com/candi-badut/', 'Jl. Raya Candi V No.5D, Doro, Karangwidoro, Kec. Dau, Kota Malang, Jawa Timur 65146', '-7.9577701', '112.596042', 'CB'),
(32, 'Candi Singosari', 'https://salsawisata.com/candi-singosari/', 'Jl. Kertanegara, Candirenggo, Kec. Singosari, Kabupaten Malang, Jawa Timur 65153', '-7.8878045', '112.6589051', 'CS'),
(33, 'Kampung Budaya Polowijen', 'https://atourin.com/destination/malang/kampung-budaya-polowijen/', 'Polowijen, Kec. Blimbing, Kota Malang, Jawa Timur 65126', '-7.9297107', '112.6410554', 'KBP');

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
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_fuzzy`
--
ALTER TABLE `nilai_fuzzy`
  MODIFY `id_nilai_fuzzy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
