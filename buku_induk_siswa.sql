-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 02:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_induk_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(191) NOT NULL,
  `nama_wali_kelas` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `nama_wali_kelas`) VALUES
(8, 'X IPA 2', 'Suhendar');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL,
  `kelas_id` varchar(191) NOT NULL,
  `nama_mata_pelajaran` varchar(191) NOT NULL,
  `nama_guru` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `kelas_id`, `nama_mata_pelajaran`, `nama_guru`) VALUES
(8, '8', 'Fisika', 'Sutardjo');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `nama_mata_pelajaran` int(11) NOT NULL,
  `nilai` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile_sekolah`
--

CREATE TABLE `profile_sekolah` (
  `id_profile_sekolah` int(11) NOT NULL,
  `npsn` varchar(191) NOT NULL,
  `bentuk_pendidikan` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `kecamatan` varchar(191) NOT NULL,
  `kabupaten` varchar(191) NOT NULL,
  `provinsi` varchar(191) NOT NULL,
  `kepala_sekolah` varchar(191) NOT NULL,
  `operator` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_sekolah`
--

INSERT INTO `profile_sekolah` (`id_profile_sekolah`, `npsn`, `bentuk_pendidikan`, `status`, `kecamatan`, `kabupaten`, `provinsi`, `kepala_sekolah`, `operator`, `email`) VALUES
(1, '19981127', 'Negeri', 'Negeri', 'Jalancagak', 'Subang', 'Jawa Barat', 'Nana Suryana', 'M. Bagas Setia', 'bagassetia271@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `kelas` varchar(191) DEFAULT NULL,
  `status` enum('aktif','alumni','pindah') NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `nisn` varchar(191) NOT NULL,
  `nis` varchar(191) NOT NULL,
  `nik` varchar(191) NOT NULL,
  `anak_ke` varchar(191) NOT NULL,
  `nama_ayah` varchar(191) NOT NULL,
  `nik_ayah` varchar(191) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `nama_ibu` varchar(191) NOT NULL,
  `nik_ibu` varchar(191) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `foto` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `user_id`, `nama`, `kelas`, `status`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nisn`, `nis`, `nik`, `anak_ke`, `nama_ayah`, `nik_ayah`, `tanggal_lahir_ayah`, `nama_ibu`, `nik_ibu`, `tanggal_lahir_ibu`, `foto`, `created_at`, `updated_at`) VALUES
(18, '6143f5367a83f', 'M. Bagas Setia', NULL, 'aktif', 'Subang', 'Subang', '1998-02-11', 'laki-laki', '3213012611980001', '3213012611980001', '3213012611980001', '1', 'Dadang Supriatna', '3213012611980001', '1980-02-11', 'Dedeh', '3213012611980001', '1998-11-27', 'Arsenal1.png', NULL, '2021-09-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_keluar`
--

CREATE TABLE `siswa_keluar` (
  `id_siswa_keluar` int(11) NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `tanggal_siswa_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `level` enum('tu','siswa') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
('1', 'cici_febriani', '$2y$10$mqGx7g.wvqnX39YHh.ZQLeQ/WxEDNHsDAgJ3lVb.bDhWcHTCnJPlO', 'tu', NULL, '2021-09-30 00:00:00'),
('6143f5367a83f', 'MBagasSetia', '$2y$10$9v09Y1JUGCgtbijxtV3ylO9dQGz3L9DUF/rLqj1YOvw07yN3ihr8K', 'siswa', '2021-09-17 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `nama_kelas` (`nama_kelas`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`siswa_id`),
  ADD KEY `id_mata_pelajaran` (`nama_mata_pelajaran`);

--
-- Indexes for table `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  ADD PRIMARY KEY (`id_profile_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `siswa_keluar`
--
ALTER TABLE `siswa_keluar`
  ADD PRIMARY KEY (`id_siswa_keluar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  MODIFY `id_profile_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `siswa_keluar`
--
ALTER TABLE `siswa_keluar`
  MODIFY `id_siswa_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`nama_mata_pelajaran`) REFERENCES `mata_pelajaran` (`id_mata_pelajaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
