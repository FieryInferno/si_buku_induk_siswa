-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2021 at 10:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibuklah`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_nilai`
--

CREATE TABLE `detail_nilai` (
  `id_detail_nilai` int(11) NOT NULL,
  `nilai_id` varchar(191) NOT NULL,
  `mata_pelajaran` varchar(191) NOT NULL,
  `pengetahuan` int(191) NOT NULL,
  `keterampilan` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_nilai`
--

INSERT INTO `detail_nilai` (`id_detail_nilai`, `nilai_id`, `mata_pelajaran`, `pengetahuan`, `keterampilan`) VALUES
(10, '61610c953046f', 'Fisika', 78, 87),
(11, '61610c953046f', 'Matematika peminatan', 89, 70),
(12, '61610c953046f', 'Biologin', 80, 80);

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
(8, 'X IPA 2', 'Suhendar'),
(9, 'SI 1', 'Rian Piarna');

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
  `id_nilai` varchar(191) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `nama_semester` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `siswa_id`, `nama_semester`) VALUES
('61610c953046f', 18, 'Ganjil');

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
(1, '19981127', 'SMA Negeri 1 Jalancagak', 'Negeri', 'Jalancagak', 'Subang', 'Jawa tengah', 'Nana Suryana', 'M. Bagas Setia', 'bagassetia271@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `kelas` varchar(191) DEFAULT NULL,
  `status` enum('aktif','lulus','pindah','mengundurkan_diri') NOT NULL,
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
  `updated_at` datetime DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `asal_sekolah` varchar(191) NOT NULL,
  `no_ijazah` varchar(191) NOT NULL,
  `no_akte` varchar(191) NOT NULL,
  `tanggal_siswa_keluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `user_id`, `nama`, `kelas`, `status`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nisn`, `nis`, `nik`, `anak_ke`, `nama_ayah`, `nik_ayah`, `tanggal_lahir_ayah`, `nama_ibu`, `nik_ibu`, `tanggal_lahir_ibu`, `foto`, `created_at`, `updated_at`, `tanggal_masuk`, `asal_sekolah`, `no_ijazah`, `no_akte`, `tanggal_siswa_keluar`) VALUES
(18, '6143f5367a83f', 'M. Bagas Setia', '9', 'aktif', 'Subang', 'Subang', '1998-02-11', 'laki-laki', '3213012611980001', '3213012611980001', '3213012611980001', '1', 'Dadang Supriatna', '3213012611980001', '1980-02-11', 'Dedeh', '3213012611980001', '1998-11-27', 'Arsenal1.png', NULL, '2021-10-09 04:24:20', '2021-10-20', 'SMP 1 Sagalaherang', '123456789', '123456789', '0000-00-00'),
(20, '6160fb86c0458', 'Randy', '9', 'aktif', 'Subang', 'Bandung', '2021-10-20', 'laki-laki', '123456789', '123456789', '123456789', '2', 'Dadang Supriatna', '123456789', '2021-10-05', 'Dedeh', '123456789', '2021-10-27', 'retropus.jpeg', '2021-10-09 04:16:38', NULL, '2021-10-12', 'SMP 1 Jalancagak', '123456789', '123456789', '0000-00-00');

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
('1', 'tatausaha', '$2y$10$QWlUfX9ogHoJQuzgSBneG.m2yMZQb5NewbXvqqqOYXcoKWnao4GU2', 'tu', NULL, '2021-11-09 00:00:00'),
('6143f5367a83f', 'MBagasSetia', '$2y$10$9v09Y1JUGCgtbijxtV3ylO9dQGz3L9DUF/rLqj1YOvw07yN3ihr8K', 'siswa', '2021-09-17 00:00:00', NULL),
('6160fb86c0458', 'Randy', '$2y$10$MPVvJ0CMsdm6lQxwumbgvu4SyCJ0nTEaJQ3.K/fpD8EQwgd7o2cOa', 'siswa', '2021-10-09 04:16:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  ADD PRIMARY KEY (`id_detail_nilai`),
  ADD KEY `nilai_id` (`nilai_id`);

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
  ADD KEY `id_siswa` (`siswa_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  MODIFY `id_detail_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile_sekolah`
--
ALTER TABLE `profile_sekolah`
  MODIFY `id_profile_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  ADD CONSTRAINT `detail_nilai_ibfk_1` FOREIGN KEY (`nilai_id`) REFERENCES `nilai` (`id_nilai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
