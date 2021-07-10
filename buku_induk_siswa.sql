-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2021 pada 08.42
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
  `nama_kelas` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(2, 'X IPA 2'),
(3, 'X Ipa 3'),
(4, 'X Ipa 4');

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
(18, 12, 2, 80),
(19, 12, 3, 90),
(20, 12, 4, 80),
(21, 12, 5, 70),
(22, 12, 6, 60);

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
(7, '60e28108cacd1', 'Dadang Supriatna', 'Subang', '2021-07-05');

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
(12, '60d193612a3f8', '10104019', 'M. Bagas Setia Permana', NULL, 'aktif', 'Kp. Pasir Gombong', 'Bandung', '2021-06-22', 'siswa_baru'),
(13, '60d3fa7fa73fe', '10104032', 'Willy', '4', 'pindah', 'Bandung', 'Subang', '2021-06-24', 'siswa_baru'),
(14, '60e28108cacd1', '10104001', 'Firizki', NULL, 'alumni', 'Tambakan', 'Subang', '2021-07-05', 'siswa_baru');

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
(2, '60e28108cacd1', '2021-07-10');

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
('1', 'tata_usaha', '$2y$10$ZjBCcnQ2mXfmQS.AnJp9Sur7in/SDMLdlwqC0feC5N8qLcpD0y/E2', 'tu'),
('60d193612a3f8', 'bagassetia', '$2y$10$Q/C/ro.rM1K3G38yY4XAXejOExjIAb1fefU5xk3mUY7nsXkrwTGPO', 'siswa'),
('60d3fa7fa73fe', 'willyrifqi', '$2y$10$NOzN5XaOUEU6hN03BBqzxOjrzk53lnnHSQ6AG64GCgiJD9NQSPvHq', 'siswa'),
('60e28108cacd1', 'firizki', '$2y$10$ltyq6BjHZ69evPOhzJE..eReKZFBSUDyhlYG8C29L/1hDHbPrlC7G', 'siswa');

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
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id_orang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `siswa_keluar`
--
ALTER TABLE `siswa_keluar`
  MODIFY `id_siswa_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
