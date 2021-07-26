-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2021 pada 09.39
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

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
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(191) NOT NULL,
  `nama_wali_kelas` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `nama_wali_kelas`) VALUES
(2, 'X IPA 2', ''),
(3, 'X Ipa 3', ''),
(4, 'X Ipa 4', ''),
(5, 'VII F', 'Suhendar'),
(6, 'X IPS 10', 'Rian Piarna'),
(7, 'XI IPA 2', 'Nunu Nugraha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_mata_pelajaran`
--

CREATE TABLE `kelas_mata_pelajaran` (
  `id_kelas_mata_pelajaran` int(11) NOT NULL,
  `id_kelas` varchar(191) NOT NULL,
  `id_mata_pelajaran` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas_mata_pelajaran`
--

INSERT INTO `kelas_mata_pelajaran` (`id_kelas_mata_pelajaran`, `id_kelas`, `id_mata_pelajaran`) VALUES
(1, '5', '2'),
(2, '5', '3'),
(3, '6', '2'),
(4, '6', '4'),
(5, '6', '6'),
(6, '7', '2'),
(7, '7', '3'),
(8, '7', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL,
  `nama_mata_pelajaran` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `nama_mata_pelajaran`) VALUES
(2, 'Pendidikan Agama'),
(3, 'Fisika'),
(4, 'Bahasa Indonesia'),
(5, 'Bahasa Inggris'),
(6, 'Sejarah Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mata_pelajaran` int(11) NOT NULL,
  `nilai` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_mata_pelajaran`, `nilai`) VALUES
(23, 12, 2, 90),
(24, 12, 3, 70),
(25, 16, 2, 70),
(26, 16, 3, 89),
(27, 16, 5, 84);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id_orang_tua` int(11) NOT NULL,
  `id_user` varchar(191) NOT NULL,
  `nama_orang_tua` varchar(191) NOT NULL,
  `tempat_lahir_orang_tua` varchar(191) NOT NULL,
  `tanggal_lahir_orang_tua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`id_orang_tua`, `id_user`, `nama_orang_tua`, `tempat_lahir_orang_tua`, `tanggal_lahir_orang_tua`) VALUES
(1, '60cd511d3c507', 'Dadang Supriatna', 'Subang', '2021-06-17'),
(5, '60d193612a3f8', 'Dadang Supriatna', 'Subang', '2021-06-22'),
(6, '60d3fa7fa73fe', 'Dadang Supriatna', 'Subang', '2021-06-24'),
(7, '60e28108cacd1', 'Dadang Supriatna', 'Subang', '2021-07-05'),
(9, '60f7bff2930c6', 'Dadang Supriatna', 'Subang', '2021-07-22'),
(10, '60f9187c0eda2', 'Dadang Supriatna', 'Subang', '2021-07-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` varchar(191) NOT NULL,
  `no_induk` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `kelas` varchar(191) DEFAULT NULL,
  `status` enum('aktif','alumni','pindah') NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis` enum('siswa_baru','pindahan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_user`, `no_induk`, `nama`, `kelas`, `status`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis`) VALUES
(12, '60d193612a3f8', '10104019', 'M. Bagas Setia Permana', '5', 'aktif', 'Kp. Pasir Gombong', 'Bandung', '2021-06-22', 'siswa_baru'),
(13, '60d3fa7fa73fe', '10104032', 'Willy', '5', 'pindah', 'Bandung', 'Subang', '2021-06-24', 'siswa_baru'),
(14, '60e28108cacd1', '10104001', 'Firizki', '6', 'alumni', 'Tambakan', 'Subang', '2021-07-05', 'siswa_baru'),
(16, '60f7bff2930c6', '10104090', 'Febriana Rokhman Permana', '7', 'aktif', 'Subang', 'Bandung', '2021-06-28', 'siswa_baru'),
(17, '60f9187c0eda2', '10104013', 'Indriya Nur Oktaviani', NULL, 'aktif', 'Subang', 'Subang', '2021-07-22', 'siswa_baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_keluar`
--

CREATE TABLE `siswa_keluar` (
  `id_siswa_keluar` int(11) NOT NULL,
  `id_user` varchar(191) NOT NULL,
  `tanggal_siswa_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa_keluar`
--

INSERT INTO `siswa_keluar` (`id_siswa_keluar`, `id_user`, `tanggal_siswa_keluar`) VALUES
(2, '60e28108cacd1', '2021-07-10'),
(3, '60d3fa7fa73fe', '2021-07-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `level` enum('tu','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
('1', 'tata_usaha', '$2y$10$04uVtARjAYoJZFbx8cpCzu6pAy1Iq0YmpQqAe0MKSTkGtRPoJrcUa', 'tu'),
('60d193612a3f8', 'bagassetia271', '$2y$10$04uVtARjAYoJZFbx8cpCzu6pAy1Iq0YmpQqAe0MKSTkGtRPoJrcUa', 'siswa'),
('60d3fa7fa73fe', 'willy', '$2y$10$04uVtARjAYoJZFbx8cpCzu6pAy1Iq0YmpQqAe0MKSTkGtRPoJrcUa', 'siswa'),
('60e28108cacd1', 'firizki', '$2y$10$04uVtARjAYoJZFbx8cpCzu6pAy1Iq0YmpQqAe0MKSTkGtRPoJrcUa', 'siswa'),
('60f7bff2930c6', 'febriana', '$2y$10$fcnIKlFcoEQAi4JJ0JxdWe/pgAyBdZjXG3zAR8LTgi90/DqM74Y1G', 'siswa'),
('60f9187c0eda2', '', '', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `nama_kelas` (`nama_kelas`);

--
-- Indeks untuk tabel `kelas_mata_pelajaran`
--
ALTER TABLE `kelas_mata_pelajaran`
  ADD PRIMARY KEY (`id_kelas_mata_pelajaran`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_mata_pelajaran` (`id_mata_pelajaran`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id_orang_tua`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `siswa_keluar`
--
ALTER TABLE `siswa_keluar`
  ADD PRIMARY KEY (`id_siswa_keluar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelas_mata_pelajaran`
--
ALTER TABLE `kelas_mata_pelajaran`
  MODIFY `id_kelas_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `siswa_keluar`
--
ALTER TABLE `siswa_keluar`
  MODIFY `id_siswa_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_mata_pelajaran`) REFERENCES `mata_pelajaran` (`id_mata_pelajaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
