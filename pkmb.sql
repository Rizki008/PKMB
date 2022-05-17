-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2022 pada 19.24
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_pendaftaran` int(11) DEFAULT NULL,
  `kelas` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_pendaftaran`, `kelas`) VALUES
(1, 1, 'c'),
(2, NULL, 'c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_warga` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `thn_lulus` date DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `pindahan` varchar(125) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alasan_diterima` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_warga`, `tempat_lahir`, `tgl_lahir`, `agama`, `desa`, `kecamatan`, `kabupaten`, `thn_lulus`, `tgl_terima`, `pindahan`, `status`, `alasan_diterima`) VALUES
(1, 3, 'kuningan', '2022-05-03', 'islam', 'ciawilor', 'ciawigebang', 'Kuningan', '2022-05-18', '2022-05-19', '', '1', 'pinter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pro_pkmb`
--

CREATE TABLE `pro_pkmb` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(128) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pro_pkmb`
--

INSERT INTO `pro_pkmb` (`id_program`, `nama_program`, `deskripsi`, `gambar`) VALUES
(2, 'Penyluhan', 'penyuhuna agama', 'bd202.png'),
(3, 'Penyluhan', 'sasasa', 'bayar.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `level` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'yayasan', 'yayasan', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nama_lengkap` varchar(125) DEFAULT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `jenis_kel` varchar(20) DEFAULT NULL,
  `usia` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nama_lengkap`, `username`, `password`, `jenis_kel`, `usia`, `alamat`, `no_tlpn`) VALUES
(1, 'diana safitri', 'diana', '12345', 'perempuan', '25', 'kuningan', '085741321452'),
(2, 'intan sari', 'intan', '12345', 'perempuan', '25', 'sindang barang', '085156727368'),
(3, 'riki afrizon', 'admin', '12345', 'laki-laki', '25', 'jalaksana', '085745698745');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `pro_pkmb`
--
ALTER TABLE `pro_pkmb`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pro_pkmb`
--
ALTER TABLE `pro_pkmb`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
