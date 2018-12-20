-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 20, 2018 at 12:35 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_kursus`
--

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
('4c05ce54-66c5-4b6d-a4f3-fe5f5cb2e9d0', '7be0cb56-73b0-48c0-988e-18e766c9037f', 'keterampilan', '50000.00', 'Melukis', 'smp', '90.00', 7, 'melukis untuk anak-anak', '2018-12-20'),
('7861966a-11b6-4bff-bd74-ca82e7f43767', '7be0cb56-73b0-48c0-988e-18e766c9037f', 'keterampilan', '30000.00', 'Menari', 'sd', '70.00', 6, 'belajar menari', '2018-12-20');

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
('177c40a6-7b85-46ac-b734-6c570c936fec', 'luky', 'luky@gmail', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'guru', ''),
('193e2345-d2ed-4dc6-af2c-742da732f857', 'panji', 'panji@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'siswa', ''),
('21bfa68f-26bc-4c72-bd91-debf4c8dfb12', 'michele', 'michele@gmail.com', '81e4db2f35bdeb8c5b2c39848241f9f9882cfc87', 'guru', ''),
('3d31b985-2778-4677-a9d5-ad84341106e4', 'wqdwq', 'fwnhy@hgj', 'jytttg', 'guru', ''),
('415bbedb-8df5-4695-88ba-ad36c95dc5c6', 'kiki', 'kiki@email.com', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'siswa', ''),
('46d21f6b-98d4-414f-9b10-1086a3d26124', 'ad', 'ad@email', '17ba0791499db908433b80f37c5fbc89b870084b', 'guru', ''),
('4affd16c-a4de-4b05-a2ca-d255b4b9e8f4', 'rgtghtr', 'hrthr@ddddd', 'hrhr', 'guru', ''),
('54104508-fb71-4220-8783-8baae9ab5188', 'abdul', 'abdul@gmail.com', 'ghjagdj', 'siswa', ''),
('54c45c4b-0306-4220-9491-748613448a47', 'aan', 'aan@gmail.com', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', 'guru', ''),
('7be0cb56-73b0-48c0-988e-18e766c9037f', 'admin', 'admin@kursus', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'guru', ''),
('809f7fb8-2325-4699-9421-19fade3e965d', 'rudi', 'rudi@gmail.com', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'siswa', ''),
('8208fada-6801-4ca8-8a61-c377dbf5323d', 'titik', 'titik@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'siswa', ''),
('8f239257-2f0a-4dbd-a398-0a9f3a1b3d60', '', 'dq', '17ba0791499db908433b80f37c5fbc89b870084b', 'guru', ''),
('98a1c889-a4d2-4c9c-8681-96cf51913f9d', 'nur', 'nur@gmail.com', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'guru', ''),
('9ddf67c5-09c2-4488-8ee8-580bc603025d', 'ab', 'ab@aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'guru', ''),
('a628d7ed-a62d-4e99-94cc-6f0e130f452a', 'maria', 'maria@gmail.com', '33', 'guru', ''),
('ab400d2e-741a-4016-ba29-5d10e88e6939', 'wfef', 'fwf', 'wqf', 'guru', ''),
('aebe7570-1566-4238-bdfa-80e3a7adceb2', 'ari', 'ari@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'siswa', ''),
('baa91a65-0be7-494b-b232-0c8be3efebb9', 'user', 'user@kursus', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'siswa', ''),
('c62b0170-2a52-4133-8f44-6b88805fefde', 'andi', 'andi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'siswa', ''),
('da837155-2b3d-453f-84b2-5ac36c0ca1e9', 'abdi', 'abdi@gmail.com', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'guru', ''),
('dc9012cb-642e-4ac1-94f0-8b5cf566c056', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'guru', ''),
('f5300096-e5d1-47b0-b40e-54f2c5aeed06', 'anton', 'anton@gmail.com', 'paskdjf', 'siswa', '');

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
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_member`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `tanggal_join`, `nomer_telp`, `pendidikan`, `level_member`, `link_foto`, `deskripsi`) VALUES
('177c40a6-7b85-46ac-b734-6c570c936fec', 'pasuruan', 'laki-laki', '2000-10-23', '2018-12-12', '', '', NULL, NULL, ''),
('193e2345-d2ed-4dc6-af2c-742da732f857', 'bandung', 'laki-laki', '1998-07-10', '2018-12-08', '', '', NULL, NULL, ''),
('21bfa68f-26bc-4c72-bd91-debf4c8dfb12', 'fg', 'perempuan', '2015-02-17', '2018-12-08', '', '', NULL, NULL, ''),
('415bbedb-8df5-4695-88ba-ad36c95dc5c6', 'surabaya', 'laki-laki', '2007-05-15', '2018-12-09', '', '', NULL, NULL, ''),
('46d21f6b-98d4-414f-9b10-1086a3d26124', 'Pasuruan', 'laki-laki', '2007-08-18', '2018-12-09', '', '', NULL, NULL, ''),
('54c45c4b-0306-4220-9491-748613448a47', 'Pasuruan', 'laki-laki', '2002-11-13', '2018-12-09', '', '', NULL, NULL, ''),
('71e423e6-d1fd-4bc1-b538-2129aebfd951', 'bangil', 'laki-laki', '0000-00-00', '2018-12-08', '', '', NULL, NULL, ''),
('7be0cb56-73b0-48c0-988e-18e766c9037f', 'Bangil', 'laki-laki', '2009-07-09', '2018-12-09', '0823334947', 'SMK', NULL, '7be0cb56-73b0-48c0-988e-18e766c9037f.jpg', 'Guru Pro'),
('809f7fb8-2325-4699-9421-19fade3e965d', 'Pasuruan', 'laki-laki', '2009-07-08', '2018-12-09', '', '', NULL, NULL, ''),
('8208fada-6801-4ca8-8a61-c377dbf5323d', 'bangil', 'perempuan', '2010-02-02', '2018-12-09', '', '', NULL, NULL, ''),
('8f239257-2f0a-4dbd-a398-0a9f3a1b3d60', 'ed', 'perempuan', '0000-00-00', '2018-12-09', '', '', NULL, NULL, ''),
('98a1c889-a4d2-4c9c-8681-96cf51913f9d', 'Pasuruan', 'perempuan', '2003-04-04', '2018-12-09', '', '', NULL, NULL, ''),
('9ddf67c5-09c2-4488-8ee8-580bc603025d', 'pasuruan', 'laki-laki', '2014-07-08', '2018-12-16', '', '', NULL, NULL, ''),
('a628d7ed-a62d-4e99-94cc-6f0e130f452a', 'surabaya', 'perempuan', '2000-06-14', '2018-12-08', '', '', NULL, NULL, ''),
('aebe7570-1566-4238-bdfa-80e3a7adceb2', 'bangil', 'laki-laki', '2011-05-16', '2018-12-09', '', '', NULL, NULL, ''),
('baa91a65-0be7-494b-b232-0c8be3efebb9', 'Bangil', 'laki-laki', '1999-06-09', '2018-12-16', '', '', NULL, NULL, ''),
('c62b0170-2a52-4133-8f44-6b88805fefde', 'Bangil', 'laki-laki', '2000-07-06', '2018-12-09', '', '', NULL, NULL, ''),
('da837155-2b3d-453f-84b2-5ac36c0ca1e9', 'Pogar', 'laki-laki', '2014-03-06', '2018-12-09', '', '', NULL, NULL, ''),
('dc9012cb-642e-4ac1-94f0-8b5cf566c056', '', 'perempuan', '0000-00-00', '2018-12-09', '', '', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_member_2` (`id_member`);
