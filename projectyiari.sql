-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 05:33 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectyiari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nik`, `nama`, `jabatan`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'admin1', 'syapp', 'admin', 'akuganteng@gmail.com', '$2y$10$KAaNNpIsthgZzznO1aaXV.GJZbC189yG6rb6oUWsfn3aueBegfYOe', '2022-12-03 21:21:11', '2022-12-14 22:23:57'),
(3, '04072003', 'Baba Ifan', 'hrd', 'ifan@gmail.com', '$2y$10$LbvONyjqQ0LSZiP4vfNyTesRM0WDBCdvGGxwUzh0Q09BGogggJhN2', '2022-12-06 06:39:37', '2022-12-06 06:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `ket` longtext NOT NULL,
  `foto` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_pengajuan`, `nama_barang`, `jumlah`, `lokasi`, `kategori`, `ket`, `foto`, `created_at`, `updated_at`) VALUES
(10, 18, 'pisang', 2, 'hdvfgdgvv', 'Barang', 'sdfffffffff', 'app/image/barang/-1669193797-Zb.png', '2022-11-23 01:56:37', '2022-11-23 01:56:37'),
(31, 31, 'pisang', 12, 'sksk', 'Barang', 'afdfdsfsd', 'app/barang/13biZ.png', '2022-11-30 21:49:33', '2022-11-30 21:49:33'),
(32, 32, 'sddsdd', 12, 'sfddvdfvf', 'Barang', 'adhjsjhvsjhvd', 'app/barang/fkIar.png', '2022-11-30 22:01:14', '2022-11-30 22:01:14'),
(33, 33, 'pisang', 12, 'sksk', 'Barang', 'wweefwef', 'app/barang/MwvJa.png', '2022-11-30 22:05:10', '2022-11-30 22:05:10'),
(37, 37, 'pc', 21, 'ye', 'Barang', 'da', 'app/barang/LQZWg.png', '2022-12-04 04:33:17', '2022-12-04 04:33:17'),
(38, 38, 'PC', 12, 'ketapang', 'Barang', 'yyyyyy', 'app/barang/68hKQ.png', '2022-12-04 23:36:55', '2022-12-04 23:36:55'),
(39, 38, 'Kipas', 12, 'ketapang', 'Barang', 'yyyyy', 'app/barang/4oSc1.png', '2022-12-04 23:36:55', '2022-12-04 23:36:55'),
(40, 38, 'ac', 12, 'ketapang', 'Barang', 'yyyyy', 'app/barang/cIXTQ.png', '2022-12-04 23:36:55', '2022-12-04 23:36:55'),
(41, 42, 'PC', 12, '234', 'Barang', 'www', 'app/barang/TJ6DO.png', '2022-12-05 23:31:56', '2022-12-05 23:31:56'),
(42, 43, 'kaset', 123, '234', 'Barang', 'zzzz', 'app/barang/Cq55w.png', '2022-12-06 22:47:25', '2022-12-06 22:47:25'),
(43, 44, 'hammock', 2, '234', 'Barang', 'kain', 'app/barang/5sQqc.png', '2022-12-14 05:39:58', '2022-12-14 05:39:58'),
(44, 45, 'hammock', 123, '456', 'Barang', 'iye', 'app/barang/lJN3H.png', '2022-12-14 18:15:41', '2022-12-14 18:15:41'),
(45, 45, 'tikar', 23, '234', 'Pangan', 'iye', 'app/barang/ZsjoV.png', '2022-12-14 18:15:41', '2022-12-14 18:15:41'),
(46, 46, 'apapun', 12, '234', 'Barang', 'yyyyyy', 'app/barang/Gu12y.png', '2022-12-14 22:08:13', '2022-12-14 22:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`, `created_at`, `updated_at`) VALUES
(12, 'Community Development', '2022-11-24 07:48:29', '2022-11-24 07:48:29'),
(13, 'Edukasi Ketapang', '2022-11-24 19:28:18', '2022-11-24 19:28:18'),
(14, 'HRD', '2022-11-24 19:30:58', '2022-11-24 19:30:58'),
(15, 'Finance & Accounting', '2022-11-24 19:32:10', '2022-11-24 19:32:10'),
(16, 'Administrasi', '2022-11-24 19:33:51', '2022-11-24 19:33:51'),
(17, 'Orangutan Protection Unit', '2022-11-24 19:54:28', '2022-11-24 19:54:28'),
(18, 'Biodiversity Research & Landscape Management', '2022-11-24 19:54:56', '2022-11-24 19:54:56'),
(19, 'Operasional LC', '2022-11-24 19:55:09', '2022-11-24 19:55:09'),
(20, 'Animal Management', '2022-11-24 19:55:21', '2022-11-24 19:55:21'),
(21, 'Maintenance', '2022-11-24 19:56:30', '2022-11-24 19:56:30'),
(22, 'Informasi Teknologi', '2022-11-24 19:56:48', '2022-11-24 19:56:48'),
(23, 'Purchasing & Asset Management', '2022-11-24 19:57:05', '2022-11-24 19:57:05'),
(24, 'Satpam', '2022-11-24 19:57:20', '2022-11-24 19:57:20'),
(25, 'Restorasi', '2022-11-24 19:57:38', '2022-11-24 19:57:38'),
(26, 'SRM Gunung Tarak', '2022-11-24 19:57:54', '2022-11-24 19:57:54'),
(27, 'SRM TNBBBR', '2022-11-24 19:58:08', '2022-11-24 19:58:08'),
(28, 'Fenologi & Sensus Pematang Gadung', '2022-11-24 20:01:10', '2022-11-24 20:01:10'),
(29, 'Media & Komunikasi', '2022-11-24 20:01:30', '2022-11-24 20:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `id_divisi`, `nik`, `nama`, `jk`, `jabatan`, `email`, `password`, `created_at`, `updated_at`) VALUES
(14, 12, 'YIARI-KTG-21-0240', 'Konselia D. Vera', 'Perempuan', 'Fasilitator Pertanian', 'vera@internationalanimalrescue.org', '$2y$10$oE2lVZGNGSVT0BqlsMC6Fu.IfiaP.WOcEIGxs/LDU0OB9kI79FHkm', '2022-11-24 07:49:43', '2022-11-24 07:49:43'),
(15, 13, 'YIARI-KTG-18-0159', 'Septia Putri Hidayati', 'Perempuan', 'Supervisor', 'septia@internationalanimalrescue.org', '$2y$10$DMcUNMjsUNUOXe1sl0Zm2eN79l3tQD2o/b9LQNbMqJjcxUMVgtqfm', '2022-11-24 19:29:34', '2022-11-24 19:29:34'),
(16, 14, 'YIARI-KTG-21-0275', 'Rikardus', 'Laki-Laki', 'Supervisor', 'rikardus@internationalanimalrescue.org', '$2y$10$DNIYF7Tc.XIFg/tc9.7hA.nXh1BaU4wqyOBofd1Lf.LGrCSvdaA2O', '2022-11-24 19:31:47', '2022-11-24 19:31:47'),
(17, 15, 'YIARI-KTG-17-0135', 'Hardi', 'Laki-Laki', 'Supervisor', 'hardi@internationalanimalrescue.org', '$2y$10$QMLpC5pS6cq3hkd7z8VjvOd9Z3HI9mkLUs1DilMa65qpd9VIUJYHi', '2022-11-24 19:33:11', '2022-11-24 19:33:11'),
(18, 16, 'YIARI-KTG-18-0186', 'Gatri Yuliestia Hardiatna', 'Perempuan', 'admin', 'gatri@internationalanimalrescue.org', '$2y$10$E83weUrbvBWr59gFHW8PqObwGl6RNTbFWo5rnhKo/vbpWX3IktOoW', '2022-11-24 19:34:45', '2022-11-24 19:35:56'),
(19, 17, 'YIARI-KTG-14-0046', 'Muhadi', 'Laki-Laki', 'Supervisor', 'muhadi@internationalaanimalrescue.org', '$2y$10$Xi1NFlrkJx03kVhsGP1n9OK3MHyIZkwKebLnebGVmaFziMPSbmc1e', '2022-11-24 20:16:22', '2022-11-24 20:16:22'),
(20, 18, 'YIARI-KTG-21-0286', 'Umar Fadhli Kennedi', 'Laki-Laki', 'Staff', 'umar@internationalanimalrescue.org', '$2y$10$p8XzXdYnOLp2b8xAGu8oUOhVEuf4xOCwoKoNZk1lka9mK50HD2tUe', '2022-11-24 20:46:28', '2022-11-24 20:46:28'),
(21, 19, 'YIARI-KTG-18-0185', 'Peter Immanuel Sumarsono', 'Laki-Laki', 'Assisten Manajer', 'immanuelpet@internationalanimalrescue.org', '$2y$10$cNq3CrBoLAolryaTE0OiXOQdXaejgOfCJFJsPYa3H/jSXRYHQULRy', '2022-11-24 20:55:16', '2022-11-24 20:55:16'),
(22, 20, 'YIARI-KTG-18-0181', 'Komara', 'Laki-Laki', 'Koordinator Medis', 'komara@internationalanimalrescue.org', '$2y$10$y2m/tlELfr0z8HkvE7on7uHT2KXUq4JrAU1Rw7FcY4zWamBiNK/aq', '2022-11-24 20:56:25', '2022-11-24 20:56:25'),
(23, 20, 'YIARI-KTG-14-0035', 'Samsudin', 'Laki-Laki', 'Supervisor AK', 'samsudin@internationalanimalrescue.org', '$2y$10$wTmA1bhW3Ys.evJPVr.5fe7atkKeOx6jCa1dP7EF.NN8LO8XCa3Ty', '2022-11-24 20:57:17', '2022-11-24 20:57:17'),
(24, 20, 'YIARI-KTG-14-0047', 'Fajar Iman', 'Laki-Laki', 'Staff', 'arcy993@gmail.com', '$2y$10$/S8zdIVNSjBtHmTy9stirOreb89qclwOLSCmpiDXSFi1ZM8CrDt8.', '2022-11-24 20:58:32', '2022-11-24 20:58:32'),
(25, 21, 'YIARI-KTG-13-0018', 'Hardadi', 'Laki-Laki', 'Koordinator', 'dadiktp7019@gmail.com', '$2y$10$EBi0.FbA7D4dC49AoBn2/e4wIc.dPjVeAl.P3Fl5IfGFpDM0pHCRG', '2022-11-24 20:59:29', '2022-11-24 20:59:29'),
(26, 22, 'YIARI-KTG-20-0231', 'Hermanto Saputra', 'Laki-Laki', 'Staff', 'hermantosaputra871@gmail.com', '$2y$10$t.VuYvy40nTB9e.in8fNRe37Qr9FqlYB4KiRn6n1hzBMza2RmXLsK', '2022-11-24 21:00:42', '2022-11-24 21:00:42'),
(27, 23, 'YIARI-KTG-14-0048', 'Haspianto', 'Laki-Laki', 'Supervisor', 'haspianto@internationalanimalrescue.org', '$2y$10$BOGzvcmch6K3UWjSX.3FNePH.2og5y4I6cHl1mzgDkgGpFRJDb/qy', '2022-11-24 21:02:41', '2022-11-24 21:02:41'),
(28, 24, 'YIARI-KTG-14-0043', 'Rahmat', 'Laki-Laki', 'Koordinator', 'rahmatrahmat7187@gmail.com', '$2y$10$VBIiYj4tNwpn5xo0RCASKupQh7SrLr8tFgmlX4w457LXR2L6Hnwji', '2022-11-24 21:03:45', '2022-11-24 21:03:45'),
(29, 25, 'YIARI-KTG-18-0169', 'Syarif Albani', 'Laki-Laki', 'Assisten Koordinator', 'albani@internationalanimalrescue.org', '$2y$10$UAUvtvL9ZJ8Cj6SeZdta8us2D7VK5o/xf8wm6wVvE1fjewS9wLyxS', '2022-11-24 21:04:38', '2022-11-24 21:04:38'),
(30, 27, 'YIARI-KTG-21-0293', 'Gregorius', 'Laki-Laki', 'Kepala Camp Teluk Ribas', 'gregorius@internationalanimalrescue.org', '$2y$10$NNLSt/WIUPmA5f5wOzZ31u/7U5z7.lN/JqZ7cOd.xYhvoAOi8wwaO', '2022-11-24 23:46:27', '2022-11-24 23:46:27'),
(31, 26, 'YIARI-KTG-13-0029', 'Deni', 'Laki-Laki', 'Koordinator', 'deni@internationalanimalrescue.org', '$2y$10$sNx8adfr5jr4LDd78Sy14u3sxI6A9qoGqwpdwq5MQKfDsN2GqEfEe', '2022-11-24 23:48:20', '2022-11-24 23:48:20'),
(32, 28, 'YIARI-KTG-16-0126', 'Rohadi', 'Laki-Laki', 'Koordinator', 'rohadiadja812@gmail.com', '$2y$10$pxe.ItfHK6dhdrTQ5MJeweu8VShUXEn2VmCldu3oGyExfTnj.vQjS', '2022-11-24 23:49:33', '2022-11-24 23:49:33'),
(33, 15, 'YIARI-KTG-00-PN01', 'Yeni Suriyati', 'Perempuan', 'Staff', 'yeni@internationalanimalrescue.org', '$2y$10$gDivxYO2729TPq72C/aMRek68xix4a0BmZJk8BI1y6PwfEAYOrQ.O', '2022-11-24 23:50:32', '2022-11-24 23:50:32'),
(34, 29, 'YIARI-KTG-22-0308', 'Muffidz Ma\'sum', 'Laki-Laki', 'Staff', 'almusyafir204@gmail.com', '$2y$10$iJcmo9wlE3XBzZgOg8z6seLs6ALlgxLP9g..FRI/h/ibApzwh4fWS', '2022-11-24 23:51:34', '2022-11-24 23:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nama_pengaju` varchar(255) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_dibutuhkan` date NOT NULL,
  `diketahui` varchar(50) NOT NULL,
  `disetujui` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nama_kegiatan` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `id_pegawai`, `no_surat`, `nama_pengaju`, `tgl_pengajuan`, `tgl_dibutuhkan`, `diketahui`, `disetujui`, `status`, `nama_kegiatan`, `created_at`, `updated_at`) VALUES
(33, 16, 'IAR2022123', 'ifan', '2022-12-15', '2022-12-26', 'manajer', 'ye', 'Diterima', 'pembukaan pbl', '2022-11-30 22:05:10', '2022-12-01 00:14:56'),
(38, 21, 'IAR2022128', 'arjun', '2022-12-05', '2022-12-05', 'kepala divisi', 'manajer', 'Diproses', 'pbl', '2022-12-04 23:36:54', '2022-12-04 23:36:54'),
(39, 21, 'IAR2022129', 'gita', '2022-12-06', '2022-12-06', 'kepala divisi', 'manajer', 'Diproses', 'yaaaaaa', '2022-12-05 23:26:50', '2022-12-05 23:26:50'),
(40, 21, 'IAR2022129', 'fadhila', '2022-12-06', '2022-12-06', 'kepala divisi', 'manajer', 'Diproses', 'yaaaaaa', '2022-12-05 23:30:30', '2022-12-05 23:30:30'),
(41, 21, 'IAR2022129', 'hariyati', '2022-12-06', '2022-12-06', 'kepala divisi', 'manajer', 'Diproses', 'yaaaaaa', '2022-12-05 23:30:37', '2022-12-05 23:30:37'),
(42, 21, 'IAR20221210', 'eci', '2022-12-06', '2022-12-06', 'kepala divisi', 'manajer', 'Diproses', 'pbl', '2022-12-05 23:31:56', '2022-12-05 23:31:56'),
(43, 18, 'IAR2022121', 'Putra Kelana', '2022-12-07', '2022-12-07', 'har', 'dila', 'Diproses', 'ngab', '2022-12-06 22:47:25', '2022-12-06 22:47:25'),
(44, 18, 'IAR2022122', 'Ifan Rifalldi', '2022-12-14', '2022-12-16', 'lola', 'reghita', 'Diproses', 'hilling', '2022-12-14 05:39:57', '2022-12-14 05:39:57'),
(45, 18, 'IAR2022123', 'Ifan Rifalldi', '2022-12-15', '2022-12-15', 'arjun', 'ifan', 'Ditolak', 'hilling', '2022-12-14 18:15:41', '2022-12-14 22:03:47'),
(46, 18, 'IAR2022124', 'lola', '2022-12-15', '2022-12-15', 'ifan', 'ifan', 'Diterima', 'iari', '2022-12-14 22:08:13', '2022-12-14 22:09:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
