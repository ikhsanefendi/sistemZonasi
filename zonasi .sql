-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 05:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zonasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bobot`
--

CREATE TABLE `tb_bobot` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bobot`
--

INSERT INTO `tb_bobot` (`id`, `nama`, `nilai`) VALUES
('jarak', 'Jarak', 20),
('jumlah_guru', 'Jumlah Guru', 10),
('nilai_ns', 'Nilai Ujian Sekolah', 30),
('nilai_un', 'Nilai Ujian Nasional', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `id_sekolah`, `longitude`, `latitude`) VALUES
(1, 1, 112.607, -7.41329),
(2, 2, 112.607, -7.41329),
(3, 3, 112.72, -7.46246),
(4, 4, 112.683, -7.44701),
(5, 5, 112.739, -7.38784),
(6, 6, 112.576, -7.402),
(7, 7, 112.623, -7.51179),
(8, 8, 112.688, -7.53822),
(9, 9, 112.678, -7.36385),
(10, 10, 112.521, -7.43344),
(11, 11, 112.621, -7.43258),
(12, 12, 112.524, -7.40971),
(13, 13, 112.499, -7.42767),
(14, 14, 112.698, -7.43769),
(15, 15, 112.73, -7.43179),
(16, 16, 112.714, -7.47834),
(17, 17, 112.696, -7.47846),
(18, 18, 112.715, -7.46931),
(19, 19, 112.7, -7.48078),
(20, 20, 112.733, -7.40706),
(21, 21, 112.731, -7.39872),
(22, 22, 112.699, -7.40301),
(23, 23, 112.527, -7.40293),
(24, 24, 112.74, -7.5393),
(25, 25, 112.618, -7.50693),
(26, 26, 112.631, -7.51655),
(27, 27, 112.603, -7.40212),
(28, 28, 112.594, -7.3733),
(29, 29, 112.575, -7.40396),
(30, 30, 112.609, -7.38563),
(31, 31, 112.596, -7.39659),
(32, 32, 112.573, -7.40752),
(33, 33, 112.695, -7.54123),
(34, 34, 112.685, -7.53929),
(35, 35, 112.663, -7.52391),
(36, 36, 112.696, -7.53491),
(37, 37, 112.669, -7.51833),
(38, 38, 112.226, -7.51134),
(39, 39, 112.579, -7.47833),
(40, 40, 112.763, -7.38608),
(41, 41, 112.786, -7.39591),
(42, 42, 112.678, -7.45175),
(43, 43, 112.708, -7.44697),
(44, 44, 112.702, -7.44695),
(45, 45, 112.675, -7.44684),
(46, 46, 112.678, -7.41538),
(47, 47, 112.658, -7.39161),
(48, 48, 112.708, -7.37304),
(49, 49, 112.702, -7.34672),
(50, 50, 112.678, -7.36441),
(51, 51, 112.674, -7.35796),
(52, 52, 112.657, -7.3548),
(53, 53, 112.707, -7.50351),
(54, 54, 112.709, -7.50422),
(55, 55, 112.695, -7.50929),
(56, 56, 112.52, -7.44716),
(57, 57, 112.529, -7.44919),
(58, 58, 112.652, -7.49082),
(59, 59, 112.585, -7.49064),
(60, 60, 112.754, -7.35549),
(61, 61, 112.769, -7.34568),
(62, 62, 112.773, -7.35114),
(63, 63, 112.757, -7.35332),
(64, 64, 112.727, -7.36046),
(65, 65, 112.743, -7.36468),
(66, 66, 112.608, -7.43631),
(67, 67, 112.64, -7.41338);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ìd_lokasi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama`, `ìd_lokasi`, `gambar`) VALUES
(1, 'SMAN 1 SIDOARJO', 'JL. JENGGOLO NO. 1 Sidoarjo, Pucang, Kec. Sidoarjo', '1'),
(2, 'SMAN 2 SIDOARJO', 'JL. LINGKAR BARAT GADING FAJAR 2, Sidokare, Kec. Sidoarjo', '2'),
(3, 'SMAN 3 SIDOARJO', 'JL. DR. WAHIDIN NO. 130, Sekardangan, Kec. Sidoarjo', '3'),
(4, 'SMAN 4 SIDOARJO', 'JL. RAYA SUKO, Suko, Kec. Sidoarjo', '4'),
(5, 'SMAN 1 GEDANGAN', 'JL. RAYA SEDATI KM.2, WEDI, Kec. Gedangan', '5'),
(6, 'SMAN 1 KRIAN', 'JL. SUNANDAR PS NO. 5, KRATON, Kec. Krian', '6'),
(7, 'SMAN 1 KREMBUNG', 'JL. RAYA KECAMATAN, MOJORUNTUT, Kec. Krembung', '7'),
(8, 'SMAN 1 PORONG', 'JL. BHAYANGKARI NO.12, Juwet Kenongo, Kec. Porong', '8'),
(9, 'SMAN 1 TAMAN', 'JL. Sawunggaling 2 , Jemundo, Kec. Taman', '9'),
(10, 'SMAN 1 TARIK', 'JL.RAYA JANTI, JANTI, Kec. Tarik', '10'),
(11, 'SMAN 1 WONOAYU', 'JL. RAYA PAGERNGUMBUK, PAGERNGUMBUK, Kec. Wonoayu', '11'),
(12, 'SMP NEGERI 1 BALONGBENDO ', 'JL. RAYA BALONGBENDO ', '12'),
(13, 'SMP NEGERI 2 BALONGBENDO ', 'SUMOKEMBANGSRI ', '13'),
(14, 'SMP ANUGERAH SCHOOL', 'KAWASAN SENTRA NIAGA BLOK RE\nNO.29 ', '14'),
(15, 'SMP UNGGULAN AL FALAH BUDURAN', 'Jalan Makam Ulama Nomor 8\nSiwalanpanji ', '15'),
(16, 'SMP AL AZIZIYAH ', 'JL. KEDUNGPELUK 3 ', '16'),
(17, 'SMP HANGTUAH 5 CANDI ', 'PERUM JALAGRIYA B16 / 18 ', '17'),
(18, 'SMP NEGERI 1 CANDI ', 'JL. MOJOPAHIT 7 ', '18'),
(19, 'SMP NEGERI 3 CANDI ', 'SUGIHWARAS ', '19'),
(20, 'SMP ITABA ', 'JL RA MUSTIKA TEBEL ', '20'),
(21, 'SMP NEGERI 1 GEDANGAN ', 'JALAN RAJAWALI 53 ', '21'),
(22, 'SMP NEGERI 2 GEDANGAN ', 'JALAN SINGOMENGGOLO ', '22'),
(23, 'SMP MIFTAHUL ULUM ', 'JALAN PERTIGAAN KEDUNG BAHAK ', '23'),
(24, 'UPT SMP NEGERI 2 JABON ', 'JL. PERMISAN NO. 01 JABON ', '24'),
(25, 'SMP NEGERI 2 KREMBUNG', 'JL. RAYA KREMBUNG NO. 37\nSIDOARJO ', '25'),
(26, 'UPT SMP NEGERI 1 KREMBUNG ', 'DESA MOJORUNTUT ', '26'),
(27, 'SMP BILINGUAL TERPADU ', 'JL. JUNWANGI NO. 43 C ', '27'),
(28, 'SMP ISLAM TANWIRUL AFKAR ', 'JL.KALIPELAYARAN 23 ', '28'),
(29, 'SMP NEGERI 2 KRIAN ', 'JL. GUB. SUNANDAR PRIYO SUDARMO ', '29'),
(30, 'SMP NEGERI 3 KRIAN ', 'JL. RAYA KEBOHARAN ', '30'),
(31, 'SMP PANCASILA ', 'JLN. RAYA PONOKAWAN NO. 7 ', '31'),
(32, 'UPT SMP NEGERI 1 KRIAN ', 'JL. RAYA NO 2 KRIAN ', '32'),
(33, 'SMP KEMALA BHAYANGKARI 7 ', 'JL.BHAYANGKARI NO. 36 B ', '33'),
(34, 'SMP NEGERI 1 PORONG ', 'JL. BHAYANGKARI NO. 368 PORONG ', '34'),
(35, 'SMP NEGERI 2 PORONG ', 'JL. CANDI WANGKAL ', '35'),
(36, 'SMP NEGERI 3 PORONG ', 'JL. WR SUPRATMAN NO 32 PORONG ', '36'),
(37, 'SMP NURUL HUDA PORONG ', 'JL. MASJID NO. 4 RT 06 RW 02 ', '37'),
(38, 'SMP BUDI UTOMO ', 'JL RAYA TEMU PRAMBON ', '38'),
(39, 'SMP NEGERI 1 PRAMBON ', 'WIROBITING ', '39'),
(40, 'SMP NEGERI 1 SEDATI ', 'JL. BRANTAS NO. 1 JUANDA SEDATI ', '40'),
(41, 'SMP NEGERI 2 SEDATI ', 'JL. RAYA CEMANDI ', '41'),
(42, 'SMP ISLAM AS SAKINAH ', 'SUNGON RT.21 RW.06 ', '42'),
(43, 'SMP KATOLIK UNTUNG SUROPATI SIDOARJO', 'JL.TENNIS III ', '43'),
(44, 'SMP YOS SUDARSO SIDOARJO ', 'JL. MONGINSIDI NO.1 SIDOARJO ', '44'),
(45, 'SMPS ISLAM TERPADU INSAN KAMIL', 'JL. PECANTINGAN RT 12 RW 4\nSEKARDANGAN SIDOARJO ', '45'),
(46, 'SMP NEGERI 1 SUKODONO ', 'JL. PUTRA BANGSA NO.15 ', '46'),
(47, 'SMP NEGERI 2 SUKODONO ', 'PLUMBUNGAN ', '47'),
(48, 'SMP JATI AGUNG ', 'JL. JERUK NO. 27 ', '48'),
(49, 'SMP NEGERI 1 TAMAN ', 'JL SATRIA NO 1 ', '49'),
(50, 'SMP NEGERI 2 TAMAN ', 'JL SAWUNGGALING NO.4 ', '50'),
(51, 'SMP NEGERI 3 TAMAN', 'JL. PERUM SAWUNGGALING PERMAI\nBLOCK C/1 A ', '51'),
(52, 'SMP NIDHOMUDDIN TAMAN ', 'KREMBANGAN ', '52'),
(53, 'SMP DHARMA WANITA 7 ', 'KALITENGAH UTARA RT.01 RW.01 ', '53'),
(54, 'SMP DHARMA WIRAWAN 3', 'JALAN RADEN WIJAYA NO. 28\nKALITENGAH ', '54'),
(55, 'SMP NEGERI 1 TANGGULANGIN', 'JL. H. UMAR NO. 1 KALISAMPURNO\nKEC. TANGGULANGIN ', '55'),
(56, 'SMP NEGERI 1 TARIK ', 'JL. KEMUNING - TARIK ', '56'),
(57, 'SMP NEGERI 2 TARIK SIDOARJO ', 'DESA KEDUNGBOCOK ', '57'),
(58, 'SMP NEGERI 1 TULANGAN', 'JL. AMD. GELANG TULANGAN\nSIDOARJO ', '58'),
(59, 'SMP NURUL HUDA ', 'JL. RAYA KEPODANG 37 TULANGAN ', '59'),
(60, 'SMP AL FALAH ASSALAM', 'JL. RAYA WISMA TROPODO BLOK FG 20 WARU ', '60'),
(61, 'SMP AL MUSLIM ', 'JLN. RAYA WADUNG ASRI 39 F ', '61'),
(62, 'SMP ARDITAMA WARU', 'JL. K. ZAINAL ABIDIN 2 A ', '62'),
(63, 'SMP NEGERI 2 WARU SIDOARJO', 'Jl. Lawu No. 1 KOMP. KEPUH PERMAI ', '63'),
(64, 'SMP NEGERI 3 WARU ', 'JL. JEND. S. PARMAN NO. 30 ', '64'),
(65, 'SMP NEGERI 4 WARU', 'JL GAJAH MADA ', '65'),
(66, 'SMP NEGERI 1 WONOAYU ', 'JL. SEMAMBUNG ', '66'),
(67, 'SMP NEGERI 2 WONOAYU ', 'JL BECIRONGENGOR ', '67');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jumlah_un` int(11) NOT NULL,
  `jumlah_nilai_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nama_siswa`, `jumlah_un`, `jumlah_nilai_sekolah`, `nama_sekolah`) VALUES
(4, 'Ikhsan Efendi', 98, 97, '18'),
(5, 'Fahmi', 87, 95, '12'),
(6, 'Budi', 96, 93, '25'),
(7, 'IIII', 87, 90, '12'),
(8, '111', 99, 99, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sma`
--

CREATE TABLE `tb_sma` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text,
  `id_lokasi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sma`
--

INSERT INTO `tb_sma` (`id`, `nama`, `alamat`, `id_lokasi`, `gambar`) VALUES
(1, 'SMAN 1 SIDOARJO', 'JL. JENGGOLO NO. 1 Sidoarjo, Pucang, Kec. Sidoarjo', '1', ''),
(2, 'SMAN 2 SIDOARJO', 'JL. LINGKAR BARAT GADING FAJAR 2, Sidokare, Kec. Sidoarjo', '2', ''),
(3, 'SMAN 3 SIDOARJO', 'JL. DR. WAHIDIN NO. 130, Sekardangan, Kec. Sidoarjo', '3', ''),
(4, 'SMAN 4 SIDOARJO', 'JL. RAYA SUKO, Suko, Kec. Sidoarjo', '4', ''),
(5, 'SMAN 1 GEDANGAN', 'JL. RAYA SEDATI KM.2, WEDI, Kec. Gedangan', '5', ''),
(6, 'SMAN 1 KRIAN', 'JL. SUNANDAR PS NO. 5, KRATON, Kec. Krian', '6', ''),
(7, 'SMAN 1 KREMBUNG', 'JL. RAYA KECAMATAN, MOJORUNTUT, Kec. Krembung', '7', ''),
(8, 'SMAN 1 PORONG', 'JL. BHAYANGKARI NO.12, Juwet Kenongo, Kec. Porong', '8', ''),
(9, 'SMAN 1 TAMAN', 'JL. Sawunggaling 2 , Jemundo, Kec. Taman', '9', ''),
(10, 'SMAN 1 TARIK', 'JL.RAYA JANTI, JANTI, Kec. Tarik', '10', ''),
(11, 'SMAN 1 WONOAYU', 'JL. RAYA PAGERNGUMBUK, PAGERNGUMBUK, Kec. Wonoayu', '11', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_smp`
--

CREATE TABLE `tb_smp` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_lokasi` varchar(255) NOT NULL,
  `nilai_akreditasi` varchar(255) DEFAULT NULL,
  `jumlah_guru` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_smp`
--

INSERT INTO `tb_smp` (`id`, `nama`, `id_lokasi`, `nilai_akreditasi`, `jumlah_guru`) VALUES
(12, 'SMP NEGERI 1 BALONGBENDO ', '12', '92', NULL),
(13, 'SMP NEGERI 2 BALONGBENDO ', '13', '92', NULL),
(14, 'SMP ANUGERAH SCHOOL', '14', '84', NULL),
(15, 'SMP UNGGULAN AL FALAH BUDURAN', '15', '87', NULL),
(16, 'SMP AL AZIZIYAH ', '16', '81', NULL),
(17, 'SMP HANGTUAH 5 CANDI ', '17', '93', NULL),
(18, 'SMP NEGERI 1 CANDI ', '18', '93', NULL),
(19, 'SMP NEGERI 3 CANDI ', '19', '93', NULL),
(20, 'SMP ITABA ', '20', '82', NULL),
(21, 'SMP NEGERI 1 GEDANGAN ', '21', '92', NULL),
(22, 'SMP NEGERI 2 GEDANGAN ', '22', '92', NULL),
(23, 'SMP MIFTAHUL ULUM ', '23', '83', NULL),
(24, 'UPT SMP NEGERI 2 JABON ', '24', '92', NULL),
(25, 'SMP NEGERI 2 KREMBUNG', '25', '93', NULL),
(26, 'UPT SMP NEGERI 1 KREMBUNG ', '26', '93', NULL),
(27, 'SMP BILINGUAL TERPADU ', '27', '94', NULL),
(28, 'SMP ISLAM TANWIRUL AFKAR ', '28', '83', NULL),
(29, 'SMP NEGERI 2 KRIAN ', '29', '92', NULL),
(30, 'SMP NEGERI 3 KRIAN ', '30', '92', NULL),
(31, 'SMP PANCASILA ', '31', '92', NULL),
(32, 'UPT SMP NEGERI 1 KRIAN ', '32', '93', NULL),
(33, 'SMP KEMALA BHAYANGKARI 7 ', '33', '91', NULL),
(34, 'SMP NEGERI 1 PORONG ', '34', '93', NULL),
(35, 'SMP NEGERI 2 PORONG ', '35', '93', NULL),
(36, 'SMP NEGERI 3 PORONG ', '36', '93', NULL),
(37, 'SMP NURUL HUDA PORONG ', '37', '74', NULL),
(38, 'SMP BUDI UTOMO ', '38', '92', NULL),
(39, 'SMP NEGERI 1 PRAMBON ', '39', '93', NULL),
(40, 'SMP NEGERI 1 SEDATI ', '40', '94', NULL),
(41, 'SMP NEGERI 2 SEDATI ', '41', '94', NULL),
(42, 'SMP ISLAM AS SAKINAH ', '42', '92', NULL),
(43, 'SMP KATOLIK UNTUNG SUROPATI SIDOARJO', '43', '93', NULL),
(44, 'SMP YOS SUDARSO SIDOARJO ', '44', '91', NULL),
(45, 'SMPS ISLAM TERPADU INSAN KAMIL', '45', '92', NULL),
(46, 'SMP NEGERI 1 SUKODONO ', '46', '92', NULL),
(47, 'SMP NEGERI 2 SUKODONO ', '47', '92', NULL),
(48, 'SMP JATI AGUNG ', '48', '86', NULL),
(49, 'SMP NEGERI 1 TAMAN ', '49', '92', NULL),
(50, 'SMP NEGERI 2 TAMAN ', '50', '92', NULL),
(51, 'SMP NEGERI 3 TAMAN', '51', '94', NULL),
(52, 'SMP NIDHOMUDDIN TAMAN ', '52', '83', NULL),
(53, 'SMP DHARMA WANITA 7 ', '53', '88', NULL),
(54, 'SMP DHARMA WIRAWAN 3', '54', '87', NULL),
(55, 'SMP NEGERI 1 TANGGULANGIN', '55', '94', NULL),
(56, 'SMP NEGERI 1 TARIK ', '56', '93', NULL),
(57, 'SMP NEGERI 2 TARIK SIDOARJO ', '57', '92', NULL),
(58, 'SMP NEGERI 1 TULANGAN', '58', '94', NULL),
(59, 'SMP NURUL HUDA ', '59', '84', NULL),
(60, 'SMP AL FALAH ASSALAM', '60', '91', NULL),
(61, 'SMP AL MUSLIM ', '61', '93', NULL),
(62, 'SMP ARDITAMA WARU', '62', '86', NULL),
(63, 'SMP NEGERI 2 WARU SIDOARJO', '63', '93', NULL),
(64, 'SMP NEGERI 3 WARU ', '64', '92', NULL),
(65, 'SMP NEGERI 4 WARU', '65', '94', NULL),
(66, 'SMP NEGERI 1 WONOAYU ', '66', '94', NULL),
(67, 'SMP NEGERI 2 WONOAYU ', '67', '94', NULL),
(68, '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sma`
--
ALTER TABLE `tb_sma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_smp`
--
ALTER TABLE `tb_smp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_sma`
--
ALTER TABLE `tb_sma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_smp`
--
ALTER TABLE `tb_smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
