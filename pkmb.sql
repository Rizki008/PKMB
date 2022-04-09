-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 06:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

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
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_daftar` int(11) DEFAULT NULL,
  `kelas` varchar(25) DEFAULT NULL,
  `paket` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_warga` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `nama_pang` varchar(50) DEFAULT NULL,
  `jenis_kel` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `warganegara` varchar(50) DEFAULT NULL,
  `anak_ke` varchar(25) DEFAULT NULL,
  `jml_sdr` varchar(25) DEFAULT NULL,
  `jml_sdr_tiri` varchar(25) DEFAULT NULL,
  `jml_sdr_angkat` varchar(25) DEFAULT NULL,
  `bahasa` varchar(50) DEFAULT NULL,
  `berat_bd` varchar(25) DEFAULT NULL,
  `tinggi_bd` varchar(25) DEFAULT NULL,
  `gol_darah` varchar(25) DEFAULT NULL,
  `penyakit` varchar(125) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `rt_rw` varchar(50) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `tempat_tinggal` text DEFAULT NULL,
  `ayah` varchar(125) DEFAULT NULL,
  `ibu` varchar(125) DEFAULT NULL,
  `sklh_ayah` varchar(125) DEFAULT NULL,
  `sklh_ibu` varchar(125) DEFAULT NULL,
  `pkrj_ayah` varchar(125) DEFAULT NULL,
  `pkrj_ibu` varchar(125) DEFAULT NULL,
  `wali` varchar(125) DEFAULT NULL,
  `sklh_tinggi` varchar(125) DEFAULT NULL,
  `hub_peserta` varchar(125) DEFAULT NULL,
  `pekerjaan` varchar(125) DEFAULT NULL,
  `alamat_ortu` text DEFAULT NULL,
  `tlpn` varchar(15) DEFAULT NULL,
  `msk_sklh` varchar(125) DEFAULT NULL,
  `nama_sklh` varchar(125) DEFAULT NULL,
  `thn_lulus` date DEFAULT NULL,
  `sklh_asal` varchar(125) DEFAULT NULL,
  `tgl_pindah` date DEFAULT NULL,
  `kelas_pindah` varchar(25) DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `kelas_terima` varchar(25) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alasan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_warga`, `nama_lengkap`, `nama_pang`, `jenis_kel`, `tempat_lahir`, `tgl_lahir`, `agama`, `warganegara`, `anak_ke`, `jml_sdr`, `jml_sdr_tiri`, `jml_sdr_angkat`, `bahasa`, `berat_bd`, `tinggi_bd`, `gol_darah`, `penyakit`, `provinsi`, `rt_rw`, `desa`, `kecamatan`, `kabupaten`, `no_tlpn`, `tempat_tinggal`, `ayah`, `ibu`, `sklh_ayah`, `sklh_ibu`, `pkrj_ayah`, `pkrj_ibu`, `wali`, `sklh_tinggi`, `hub_peserta`, `pekerjaan`, `alamat_ortu`, `tlpn`, `msk_sklh`, `nama_sklh`, `thn_lulus`, `sklh_asal`, `tgl_pindah`, `kelas_pindah`, `tgl_terima`, `kelas_terima`, `status`, `alasan`) VALUES
(1, 1, 'diana', 'dian', 'Perempuan', 'kuningan', '1999-06-09', 'islam', 'WNI', '1', '1', '', '', '', '50', '160', 'A', '', 'jawabarat', '12/04', 'ciawilor', 'ciawigebang', 'kuningan', '0897126273812', 'Orangtua', 'jamaludin', 'omah', 'sd', 'sd', 'buruh', 'ibu rumah tangga', '', '', '', '', 'Jakarta', '0891238727182', 'Peserta Didik Baru', 'sdn kuningan', '2019-02-04', '', '0000-00-00', '', '2022-04-06', NULL, '2', 'sangat pinter');

-- --------------------------------------------------------

--
-- Table structure for table `pro_pkmb`
--

CREATE TABLE `pro_pkmb` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(128) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_pkmb`
--

INSERT INTO `pro_pkmb` (`id_program`, `nama_program`, `deskripsi`, `gambar`) VALUES
(2, 'Penyluhan', 'penyuhuna agama', 'bd202.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `level` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'yayasan', 'yayasan', '2');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  `jenis_kel` varchar(20) DEFAULT NULL,
  `usia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `username`, `password`, `jenis_kel`, `usia`) VALUES
(1, 'diana', '12345', 'perempuan', '25'),
(2, 'contoh', '12345', 'perempuan', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `pro_pkmb`
--
ALTER TABLE `pro_pkmb`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pro_pkmb`
--
ALTER TABLE `pro_pkmb`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
