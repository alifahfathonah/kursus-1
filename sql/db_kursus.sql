-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 03, 2019 at 03:32 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` varchar(50) NOT NULL,
  `id_kursus` varchar(50) NOT NULL,
  `id_member` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `pertemuan` int(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_kursus`, `id_member`, `tanggal`, `jam`, `pertemuan`, `status`) VALUES
('8f6f2b8a-d559-453a-92a8-b6f883118061', '547aef3a-2780-4c24-9867-b8744d0f00a3', 'f535e870-5943-4e0b-b9b7-ae6825718c6e', '2019-01-19', '09:30:00', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kursus`
--

CREATE TABLE `tb_kursus` (
  `id_kursus` varchar(50) NOT NULL,
  `id_guru` varchar(50) NOT NULL,
  `kategori_kursus` varchar(20) NOT NULL,
  `harga_kursus` decimal(8,2) NOT NULL,
  `judul_kursus` varchar(50) NOT NULL,
  `level_kursus` varchar(20) NOT NULL,
  `point_kelulusan` decimal(8,2) NOT NULL,
  `durasi_kursus` int(11) NOT NULL,
  `deskripsi_kursus` varchar(200) NOT NULL,
  `tgl_dibuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kursus`
--

INSERT INTO `tb_kursus` (`id_kursus`, `id_guru`, `kategori_kursus`, `harga_kursus`, `judul_kursus`, `level_kursus`, `point_kelulusan`, `durasi_kursus`, `deskripsi_kursus`, `tgl_dibuat`) VALUES
('126e9541-ffac-4850-9128-75a7dffdaca6', 'ac55b973-7b40-4282-a3ab-5799b751276e', 'keterampilan', '45000.00', 'Olah vocal', 'sma', '70.00', 5, 'belajar vokal lanjutan', '2019-01-01'),
('245eacfe-fad7-4928-a039-a61d414dd41a', 'c97586b9-9e18-4f6a-8e68-27c0b18f1e3d', 'pelajaran', '45000.00', 'Matematika Dasar', 'sd', '80.00', 7, 'Belajar matematika tingkat SD', '2018-12-24'),
('547aef3a-2780-4c24-9867-b8744d0f00a3', 'f535e870-5943-4e0b-b9b7-ae6825718c6e', 'keterampilan', '50000.00', 'Melukis', 'sd', '70.00', 5, 'Melukis tingkat dasar', '2018-12-23'),
('fe75c76a-97dd-4ce9-a4b0-1b2611965cc4', 'c97586b9-9e18-4f6a-8e68-27c0b18f1e3d', 'pelajaran', '70000.00', 'Matematika Lanjut', 'sma', '90.00', 8, 'belajar matematika tingkat lanjut', '2018-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profil` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `user_name`, `email`, `password`, `profil`, `status`) VALUES
('ac55b973-7b40-4282-a3ab-5799b751276e', 'kil', 'kil@gmail', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'guru', ''),
('b421592f-4777-4365-9701-d28c5c6df1b6', 'adi', 'adi@gmail', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'siswa', ''),
('c97586b9-9e18-4f6a-8e68-27c0b18f1e3d', 'maria', 'maria@gmail', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'guru', ''),
('f535e870-5943-4e0b-b9b7-ae6825718c6e', 'admin', 'admin@kursus', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'guru', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_member` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_join` date NOT NULL,
  `nomer_telp` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `level_member` varchar(10) DEFAULT NULL,
  `link_foto` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_member`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `tanggal_join`, `nomer_telp`, `pendidikan`, `level_member`, `link_foto`, `deskripsi`) VALUES
('f535e870-5943-4e0b-b9b7-ae6825718c6e', 'Bangil', 'laki-laki', '1992-06-16', '2018-12-23', '0846663728', 'SMK', NULL, 'f535e870-5943-4e0b-b9b7-ae6825718c6e.jpg', 'Admin Pro'),
('c97586b9-9e18-4f6a-8e68-27c0b18f1e3d', 'Bangil', 'perempuan', '2004-02-11', '2018-12-24', '', '', NULL, NULL, NULL),
('b421592f-4777-4365-9701-d28c5c6df1b6', 'Bangil', 'laki-laki', '2008-03-19', '2018-12-24', '', '', NULL, NULL, NULL),
('ac55b973-7b40-4282-a3ab-5799b751276e', 'Bangil', 'laki-laki', '1997-02-12', '2019-01-01', '', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  ADD PRIMARY KEY (`id_kursus`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD KEY `id_member` (`id_member`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  ADD CONSTRAINT `tb_kursus_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tb_profile` (`id_member`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD CONSTRAINT `tb_profile_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`) ON DELETE CASCADE ON UPDATE NO ACTION;
