-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 04:54 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onlenkan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idberita` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tglpost` date NOT NULL,
  `iduser` int(11) NOT NULL,
  `isiberita` text NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `tglpost`, `iduser`, `isiberita`, `gambar`) VALUES
(41, 'Gong Xi Fa Cai', '2020-02-04', 14, 'Selamat Tahun Tikus Logam. Tahukah kamu bahwa dalam metologi cina, tikus melambangkan kejayaan, keberuntungan, dan kesuburan. Selamat Tahun Baru Imlek Bagi yang merayakan. Semmoga Selalyu di beri berkat dan kemudahan #happylunarnewyear #ragamindonesia', 'gong.png'),
(42, 'Selamat Hari Natal', '2020-02-04', 11, 'Selamat hari raya Natal bagi teman-teman yang merayakan. May all the peace, joy, and happiness of christmas are yours. Happy Holiday!\r\n\r\n#natal #christmas', 'cristmas.png'),
(43, 'Selamat Hari Raya Idul Adha', '2020-02-04', 11, 'Selamat hari raya Idul Adha jangan lupa bagi daging kurban :)\r\n#eidadha #ragamindonesia', 'Idul Adha.png');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `idkegiatan` int(4) NOT NULL,
  `tglkegiatan` date NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`idkegiatan`, `tglkegiatan`, `kegiatan`, `deskripsi`, `iduser`, `gambar`) VALUES
(8, '2020-02-04', 'Workshop', 'Onlenkan melakukan kegiatan pelatihan berupa workshop, bertempat di kantor telebanger center kota probolinggo, pembicaranya asik namanya kak yunus, peserta sangat antusia', 14, 'workshop.png'),
(10, '2020-02-04', 'Seminar Web Design', 'Seminar yang dilaksanakan di Home land Probolinggo ini berjalan cukup asik dan peserta kelihatan sangat senang', 11, 'acara Seminar.png'),
(11, '2020-02-04', 'Perpisahan', 'Acara perpisahan di onlenkan dikikuti oleh siswa magang dan karyawan onlenkan', 11, 'Acara Perpisahan.png');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `idprofil` int(1) NOT NULL,
  `namaperusahaan` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idprofil`, `namaperusahaan`, `alamat`, `email`, `telp`) VALUES
(1, 'Olenkan', 'jl.Wahidin no.9 Anam\r\n\r\n', 'onlenkansurat@gmail.com', '082228008055');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `idstruktur` int(2) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`idstruktur`, `gambar`) VALUES
(1, 'Tugas 1.2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(2) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `username`, `password`, `level`) VALUES
(2, 'Khoirul Anam', 'anam', 'anam', 'Petugas'),
(11, 'Khoirul Umam', 'umam', 'umam', 'Admin'),
(14, 'Ahmad Dani', 'ahmad', 'ahmad', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`idkegiatan`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`idprofil`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`idstruktur`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `idkegiatan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `idprofil` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `idstruktur` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
