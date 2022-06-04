-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2022 pada 16.31
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
-- Database: `pkbm`
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
(1, 1, NULL),
(2, 2, 'B'),
(3, 3, 'A'),
(4, 4, NULL),
(5, 5, NULL),
(6, 6, NULL);

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
  `paket` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(25) DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `pindahan` varchar(125) DEFAULT NULL,
  `ijazah` text DEFAULT NULL,
  `akteu` text DEFAULT NULL,
  `nilai_raport` text DEFAULT NULL,
  `filefoto` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alasan_diterima` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_warga`, `tempat_lahir`, `tgl_lahir`, `agama`, `desa`, `kecamatan`, `kabupaten`, `thn_lulus`, `paket`, `pendidikan`, `tgl_terima`, `pindahan`, `ijazah`, `akteu`, `nilai_raport`, `filefoto`, `status`, `alasan_diterima`) VALUES
(1, 1, 'kuningan', '2022-06-09', 'islam', 'sadamantra', 'jalaksana', 'kuningan', '2022-06-17', 'B', 'SD', NULL, '', NULL, NULL, NULL, NULL, '2', 'tidak kumplit'),
(2, 1, 'kuningan', '2022-06-09', 'islam', 'brebes', 'brebes', 'jawa tengan', '2022-06-07', 'B', 'SD', '2022-06-03', '', NULL, NULL, NULL, NULL, '1', 'data kumplit'),
(3, 4, 'kuningan', '2022-06-07', 'islam', 'babakan mulya', 'jalaksana', 'Kuningan', '2022-06-08', 'C', 'SMA', '2022-06-03', '', NULL, NULL, NULL, NULL, '1', 'sasa'),
(4, 1, 'kuningan', '2022-06-02', 'islam', 'sindang agung', 'sindang agung', 'Kuningan', '2022-06-08', 'B', 'SMP', NULL, 'smk kuningan', NULL, NULL, NULL, 'Pagar-Besi-Hollow-Galvanis.jpg', '2', 'fdsfdsf'),
(5, 1, 'kuningan', '2022-06-10', 'islam', 'cimaranten', 'cimaranten', 'Kuningan', '2022-06-09', 'C', 'SMP', '2022-06-09', 'smk kuningan', NULL, NULL, NULL, NULL, '1', 'dsadsa'),
(6, 1, 'kuningan', '2022-06-14', 'islam', 'ciawilor', 'cimaranten', 'Jakarta', '2022-06-09', 'A', 'SD', NULL, '', NULL, NULL, NULL, NULL, '0', NULL);

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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(125) DEFAULT NULL,
  `jenis_kl` varchar(11) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(25) DEFAULT NULL,
  `paket` varchar(12) DEFAULT NULL,
  `semester_ganjil` varchar(25) DEFAULT NULL,
  `semester_genap` varchar(125) DEFAULT NULL,
  `kelulusan` varchar(50) DEFAULT NULL,
  `tgl_lulus` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `jenis_kl`, `tempat_lahir`, `tgl_lahir`, `kelas`, `paket`, `semester_ganjil`, `semester_genap`, `kelulusan`, `tgl_lulus`) VALUES
(1, 'Ari maulana', 'L', 'Sukabumi', '2000-01-01', 'Tingkat 2', 'A', '', 'genap', 'lulus', '2021-06-04'),
(2, 'Nusroh', 'P', 'Cirebon', '1977-11-11', 'Tingkat 2', 'A', '', 'genap', 'lulus', '2021-06-04'),
(3, 'Yusup maulana', 'L', 'Kuningan', '2004-12-05', 'Tingkat 2', 'A', '', 'genap', 'lulus', '2021-06-04'),
(4, 'Arman maulana', 'L', 'Kuningan', '2007-06-20', 'Tingkat 3', 'B', 'ganjil', '', '', '0000-00-00'),
(5, 'Agis pramudia', 'P', 'Kuningan', '2006-04-16', 'Tingkat 3', 'B', 'ganjil', '', 'lulus', '2021-06-04'),
(6, 'Ananda ilham', 'L', 'Kuningan', '2006-07-02', 'Tingkat 3', 'B', 'ganjil', '', 'lulus', '2021-06-04'),
(7, 'Ramlan hadi', 'L', 'Kuningan', '2006-04-24', 'Tingkat 3', 'B', 'ganjil', '', 'lulus', '2021-06-04'),
(8, 'Muhamad rafli faillah', 'L', 'Kuningan', '2007-11-07', 'Tingkat 3', 'B', 'ganjil', '', 'lulus', '2021-06-04'),
(9, 'Rifki arya saputra', 'L', 'Kuningan', '2005-11-28', 'Tingkat 3', 'B', 'ganjil', '', '', '0000-00-00'),
(10, 'Asih.', 'P', 'Kuningan', '1974-01-07', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(11, 'Beti ayuningsih', 'P', 'Sukabumi', '1981-08-12', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(12, 'Darwan', 'L', 'Kuningan', '1977-08-05', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(13, 'Encih karnasih', 'P', 'Kuningan', '1976-01-01', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(14, 'Feri yanto', 'L', 'Kuningan', '1998-10-19', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(15, 'Ilham rahmawan fajria', 'L', 'Kuningan', '2004-01-12', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(16, 'Jaya lukmansyah', 'L', 'Kuningan', '2003-01-09', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(17, 'Marsih', 'P', 'Kuningan', '1981-03-05', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(18, 'Memet abdul muhamad', 'L', 'Kuningan', '1988-10-31', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(19, 'Rohim', 'L', 'Kuningan', '1981-02-18', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(20, 'Sapta', 'L', 'Kuningan', '1977-07-12', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(21, 'Siti adhayanti', 'P', 'Kuningan', '1978-10-10', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(22, 'Sukinah', 'P', 'Kuningan', '1970-10-21', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(23, 'Toni maulana', 'L', 'Kuningan', '2002-06-07', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(24, 'Ucu nugraha', 'L', 'Kuningan', '1995-02-26', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(25, 'Wano', 'L', 'Kuningan', '1973-01-13', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(26, 'Andrian sucipto', 'L', 'Kuningan', '1999-04-06', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(27, 'Heri solehudin', 'L', 'Kuningan', '1987-05-01', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(28, 'Aries herlambang', 'L', 'Kuningan', '2003-06-04', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(29, 'Hendra jumawan', 'L', 'Rantau prapat', '1999-09-03', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(30, 'Jaja', 'L', 'Karawang', '1983-09-30', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(31, 'Ricky kristian', 'L', 'Kuningan', '2002-10-01', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(32, 'Adha sukarya', 'L', 'Kuningan', '1975-06-08', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(33, 'Ati sukati', 'P', 'Kuningan', '1973-04-20', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(34, 'Dadi nursidik', 'L', 'Kuningan', '1987-09-01', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(35, 'Dais viarendi', 'L', 'Kuningan', '1998-12-05', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(36, 'Enok dosi rosida', 'P', 'Kuningan', '1998-03-05', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(37, 'Fajar erlangga', 'L', 'Kuningan', '2004-02-05', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(38, 'Fitri lestari', 'P', 'Kuningan', '2002-11-27', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(39, 'Nur andar benih', 'L', 'Kuningan', '1991-10-21', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(40, 'Nurita', 'P', 'Kuningan', '1981-08-05', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(41, 'Oni sahroni', 'L', 'Kuningan', '2001-07-24', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(42, 'Puja santika', 'P', 'Kuningan', '2003-01-20', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(43, 'Rumsari', 'P', 'Kuningan', '1978-03-29', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(44, 'Sri mulyati', 'P', 'Kuningan', '1982-09-03', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(45, 'Toto tonarsa', 'L', 'Cirebon', '1981-07-09', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(46, 'Weni ernawati', 'P', 'Kuningan', '1984-09-06', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(47, 'Alviandika nur fadillah', 'L', 'Kuningan', '2005-08-23', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(48, 'Aprilliany', 'P', 'Kuningan', '2002-04-08', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(49, 'Diana putri', 'P', 'Kuningan', '2004-04-18', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(50, 'Johana', 'L', 'Kuningan', '1994-01-27', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(51, 'Rahma tri septiani', 'P', 'Kuningan', '2004-09-09', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(52, 'Wawat risnawati', 'P', 'Kuningan', '2003-07-02', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(53, 'Aghna salsabila', 'P', 'Kuningan', '2006-07-29', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(54, 'Aldy amsah romadhani', 'L', 'Kuningan', '2006-09-23', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(55, 'Fariq ahmad abdulhakim', 'L', 'Cirebon', '2005-12-07', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(56, 'Faris fatahillah', 'L', 'Cirebon', '2006-08-23', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(57, 'Fatimah azzahra', 'P', 'Kuningan', '2005-12-28', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(58, 'Fauzhan helmi bamatrap', 'L', 'Kuningan', '2006-11-02', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(59, 'Ihsan nurfauzan', 'L', 'Cirebon', '2006-10-18', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(60, 'Mohammad ubay al anshor', 'L', 'Bekasi', '2006-08-17', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(61, 'Muhammad farid hidayatullah', 'L', 'Cirebon', '2006-12-16', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(62, 'Raihan wafi aufa', 'L', 'Muaradua', '2006-09-29', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(63, 'Sitti fatimah', 'P', 'Sumenep', '2006-10-16', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(64, 'Adin', 'L', 'Kuningan', '2002-10-20', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(65, 'Asih', 'P', 'Kuningan', '1982-07-07', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(66, 'Awang', 'L', 'Kuningan', '1983-03-15', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(67, 'Carim', 'L', 'Kuningan', '1979-05-15', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(68, 'Darsita', 'P', 'Kuningan', '1979-05-18', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(69, 'Deny ramdhany', 'L', 'Kuningan', '1999-12-30', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(70, 'Didi', 'L', 'Kuningan', '1995-05-24', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(71, 'Enda', 'L', 'Kuningan', '1996-03-04', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(72, 'Esih', 'P', 'Kuningan', '1983-03-30', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(73, 'Hasanudin', 'L', 'Kuningan', '1996-04-28', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(74, 'Parhan pauji', 'L', 'Kuningan', '2004-04-04', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(75, 'Putri sari pamungkas', 'P', 'Kuningan', '1994-01-10', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(76, 'Rokayah', 'P', 'Kuningan', '1972-07-05', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(77, 'Rusnadi', 'L', 'Kuningan', '1978-02-28', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(78, 'Saki', 'L', 'Kuningan', '1982-10-12', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(79, 'Saman', 'L', 'Kuningan', '1982-05-05', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(80, 'Sodikin', 'L', 'Kuningan', '2000-01-17', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(81, 'Suandi', 'L', 'Kuningan', '1985-02-20', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(82, 'Suherman', 'L', 'Kuningan', '1989-09-01', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(83, 'Tarkim', 'L', 'Kuningan', '1980-01-02', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(84, 'Tinah', 'P', 'Kuningan', '1983-06-06', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(85, 'Tohari', 'L', 'Kuningan', '1982-12-01', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(86, 'Wasi\'ah', 'P', 'Kuningan', '1992-08-04', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(87, 'Wati nurhayati', 'P', 'Kuningan', '1988-04-07', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(88, 'Yati mulyati', 'P', 'Kuningan', '1983-06-04', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(89, 'Agas eka pratama', 'L', 'Kuningan', '1996-07-08', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(90, 'Bagja aprianto', 'L', 'Kuningan', '2000-04-05', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(91, 'Dandy hartawan', 'L', 'Semarang', '1970-01-26', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(92, 'Dita rani', 'P', 'Kuningan', '1990-02-22', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(93, 'Irpan sobandi', 'L', 'Kuningan', '1993-07-17', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(94, 'Nana rudianto', 'L', ' ', '0000-00-00', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(95, 'Nanang sutisna', 'L', 'Majalengka', '1976-07-28', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(96, 'Naufal pratama', 'L', 'Kuningan', '2005-12-11', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(97, 'Ridan permana', 'L', 'Kuningan', '2004-04-01', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(98, 'Said', 'L', 'Kuningan', '1972-06-15', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(99, 'Taufik noer hidayat', 'L', 'Kuningan', '1983-03-14', 'Tingkat 4', 'B', '', 'genap', 'lulus', '2021-06-04'),
(100, 'Toto sugiarto', 'L', 'Kuningan', '1975-11-23', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(101, 'Utami putri praditia', 'P', 'Kuningan', '2001-10-11', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(102, 'Yaya mohamad zakaria', 'L', 'Kuningan', '1994-12-04', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(103, 'Deris teja sukmana', 'L', 'Kuningan', '2004-12-25', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(104, 'Muhammad fajrul shiddiq', 'L', 'Kuningan', '2004-12-23', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(105, 'Sarip bahtiar', 'L', 'Kuningan', '2005-03-14', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(106, 'Jaka sutarja', 'L', 'Kuningan', '1998-09-04', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(107, 'Herdiansyah', 'L', 'Kuningan', '2003-01-14', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(108, 'Rasid', 'L', 'Kuningan', '1973-02-02', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(109, 'Yusuf maulana', 'L', 'Kuningan', '2004-12-05', 'Tingkat 4', 'B', '', 'genap', '', '0000-00-00'),
(110, 'Addin nurcahyadin', 'L', 'Kuningan', '1999-08-05', 'Tingkat 5', 'C', 'ganjil', '', '', '0000-00-00'),
(111, 'Ahmad syakir', 'L', 'Cirebon', '2004-08-18', 'Tingkat 5', 'C', 'ganjil', '', '', '0000-00-00'),
(112, 'Amalia nanda azzhara', 'P', 'Kuningan', '2003-07-25', 'Tingkat 5', 'C', 'ganjil', '', '', '0000-00-00'),
(113, 'Didah tsamrotul fu\'adah', 'P', 'Kuningan', '2004-10-12', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(114, 'Haniyah', 'P', 'Rangkas', '2003-05-13', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(115, 'Lisa handayani', 'P', 'Kuningan', '2004-08-06', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(116, 'Muhamad qori lailatul khomis', 'L', 'Kuningan', '2005-01-01', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(117, 'Yogi iskandar', 'L', 'Kuningan', '2003-08-09', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(118, 'Ali imron romadona', 'L', 'Kuningan', '2003-11-11', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(119, 'Salwa irsyadi', 'P', 'Cirebon', '2004-02-10', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(120, 'Sumayyah', 'P', 'Cirebon', '2004-01-02', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(121, 'Asyifa nurlita', 'P', 'Kuningan', '2003-08-29', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(122, 'Maulana han', 'L', 'Kuningan', '2003-03-22', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(123, 'Santika', 'P', 'Cirebon', '2003-01-11', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(124, 'Aldiansyah', 'L', 'Kuningan', '2001-12-06', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(125, 'Afwan muhammad fauzan', 'L', 'Kuningan', '2003-01-01', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(126, 'Muhamad faisal firdaus', 'L', 'Kuningan', '2002-07-19', 'Tingkat 5', 'C', 'ganjil', '', 'lulus', '2022-06-02'),
(127, 'Raafi ananda fazrin', 'L', 'Kuningan', '2002-03-27', 'Tingkat 5', 'C', 'ganjil', '', '', '0000-00-00'),
(128, 'Akbar vangestu putra', 'L', 'Kuningan', '2002-12-08', 'Tingkat 5', 'C', 'ganjil', '', '', '0000-00-00'),
(129, 'Ilham romadon', 'L', 'Garut', '2002-11-23', 'Tingkat 5', 'C', 'ganjil', '', '', '0000-00-00'),
(130, 'Ilham muhammad pirdaus', 'L', 'Kuningan', '2002-04-27', 'Tingkat 5', 'C', 'ganjil', '', '', '0000-00-00'),
(131, 'Ahmad ramdhan bainani', 'L', 'Pekanbaru', '2002-11-08', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(132, 'Ari wardana', 'L', 'Cirebon', '2003-05-17', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(133, 'Haidar ali', 'L', 'Cirebon', '2003-04-17', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(134, 'Maryam abdul malik', 'P', 'Bogor', '2003-04-08', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(135, 'Muhammad abdul aziz', 'L', 'Sukabumi', '2003-02-21', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(136, 'Muhammad al fatih', 'L', 'Pekanbaru', '2001-07-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(137, 'Putri khoyrryyah', 'P', 'Jakarta', '2002-10-15', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(138, 'Rangga putra pratama', 'L', 'Bandung', '2003-06-30', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(139, 'Salwa nabila', 'P', 'Kota cirebon', '2003-07-16', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(140, 'Shofiyah nurjannah', 'P', 'Makasar', '2003-01-18', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(141, 'Tyias luthfiatuzzahra', 'P', 'Cirebon', '2003-11-19', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(142, 'Wandi nugraha', 'L', 'Kuningan', '1999-10-17', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(143, 'Nia daniati', 'P', 'Kuningan', '2001-05-10', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(144, 'Sabrina putri octaviani', 'P', 'Cirebon', '2003-10-05', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(145, 'Abdul rohim', 'L', 'Kuningan', '1995-11-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(146, 'Ahmad ibnu aqil', 'L', 'Kuningan', '1978-09-11', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(147, 'Aldi ferdiana', 'L', 'Kuningan', '2000-06-08', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(148, 'Aldi haldianto', 'L', 'Kuningan', '2001-08-19', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(149, 'Andi rohandi', 'L', 'Kuningan', '2001-06-06', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(150, 'Andis nurikmah', 'L', 'Kuningan', '1988-09-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(151, 'Asep nandar', 'L', 'Kuningan', '1996-02-28', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(152, 'Atin rohatin', 'P', 'Kuningan', '1978-03-06', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(153, 'Bayu irwan rahmatia', 'L', 'Kuningan ', '1989-05-14', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(154, 'Budiman', 'L', 'Kuningan', '1991-08-11', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(155, 'Dapid nurjaman ', 'L', 'Kuningan', '1993-06-03', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(156, 'Dede saefudin', 'L', 'Kuningan', '1988-05-23', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(157, 'Deden suhendi', 'L', 'Kuningan', '1975-11-28', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(158, 'Dedi sutrisno', 'L', 'Kuningan ', '1991-10-10', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(159, 'Desi fitriani', 'P', 'Kuningan', '1997-12-19', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(160, 'Didi sanhadi', 'L', 'Kuningan', '1983-07-13', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(161, 'Diding', 'L', 'Kuningan', '1981-09-10', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(162, 'Edi suhaedi', 'L', 'Kuningan', '1986-04-09', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(163, 'Erna setiyawati', 'P', 'Banjarnegara', '1984-02-19', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(164, 'Ervina novianti', 'P', 'Kuningan', '1994-11-20', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(165, 'Esih suningsih', 'P', 'Kuningan', '1993-02-23', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(166, 'Evi nurjanah', 'P', 'Kuningan', '1983-10-05', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(167, 'Feri hendriana', 'L', 'Kuningan', '1988-04-20', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(168, 'Feri rusli rusdiyana', 'L', 'Garut', '1987-02-04', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(169, 'Fika nurhasanah', 'P', 'Kuningan', '1996-06-07', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(170, 'Hamdi hamami', 'L', 'Kuningan', '1999-04-22', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(171, 'Hevi supriatna', 'P', 'Kuningan', '1985-06-07', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(172, 'Husen sulaeman', 'L', 'Kuningan', '1981-09-04', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(173, 'Iin kursinah', 'P', 'Kuningan', '1974-12-05', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(174, 'Jaenudin,', 'L', 'Kuningan', '1991-08-02', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(175, 'Juhati', 'P', 'Kuningan', '1970-07-17', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(176, 'Juju juhati', 'P', 'Kuningan', '1985-05-24', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(177, 'Juju jumadi', 'L', 'Kuningan', '1986-12-26', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(178, 'Lela nurlaela', 'P', 'Kuningan', '1983-08-07', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(179, 'Lina fitriani', 'P', 'Kuningan', '1992-06-27', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(180, 'Lina nurlina', 'P', 'Kuningan', '1987-01-19', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(181, 'Mirna indriyanti', 'P', 'Kuningan', '1997-08-31', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(182, 'Mohamad anas', 'L', 'Kuningan', '1974-07-10', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(183, 'Mohamad ramdan', 'L', 'Bandung', '1999-01-14', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(184, 'Momoh rohimah', 'P', 'Ciamis', '1979-10-05', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(185, 'Muhamad ridwan', 'L', 'Kuningan', '1992-01-06', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(186, 'Muhamad yunus', 'L', 'Kuningan', '1994-01-30', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(187, 'Nani', 'P', 'Kuningan', '1981-12-06', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(188, 'Nano juhano', 'L', 'Kuningan', '1974-03-14', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(189, 'Nurzanah', 'P', 'Kuningan', '1995-01-22', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(190, 'Oka fajar dwi cahyana', 'L', 'Kuningan', '1995-09-24', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(191, 'Oom rohiman', 'L', 'Kuningan', '1994-05-18', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(192, 'Pedri sudriana', 'L', 'Kuningan', '1990-02-10', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(193, 'Pipin saripin', 'L', 'Kuningan', '1985-09-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(194, 'Pipit pitrianingsih', 'P', 'Kuningan', '2001-03-08', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(195, 'Resa maulana', 'L', 'Kuningan', '2001-06-27', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(196, 'Rika untari', 'P', 'Kuningan', '1993-06-16', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(197, 'Rikky andriansyah', 'L', 'Kuningan', '1990-01-04', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(198, 'Rini nuraeni', 'P', 'Ciamis', '2001-08-27', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(199, 'Riza hidayati lestari', 'P', 'Kuningan', '1998-11-30', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(200, 'Riza triadi', 'L', 'Kuningan', '2001-05-09', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(201, 'Rizki', 'L', 'Kuningan', '1998-08-16', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(202, 'Saefudin', 'L', 'Kuningan', '1982-03-12', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(203, 'Septiana sandy ', 'L', 'Dki jakarta', '1995-09-11', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(204, 'Sigit widiantoro', 'L', 'Kuningan', '1995-04-25', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(205, 'Siswanto', 'L', 'Kuningan', '1986-02-08', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(206, 'Siti maemunah', 'P', 'Kuningan', '1997-01-30', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(207, 'Siti royani', 'P', 'Kuningan', '1981-10-14', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(208, 'Soleh hidayat', 'L', 'Kuningan', '1986-05-30', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(209, 'Sukur sanjaya', 'L', 'Jambi', '1994-04-18', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(210, 'Susi yunani', 'P', 'Kuningan', '1983-04-11', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(211, 'Sutar', 'L', 'Wonogiri', '1973-12-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(212, 'Tika damayanti', 'P', 'Kuningan', '1988-12-28', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(213, 'Titin sri mulyati', 'P', 'Kuningan', '1991-10-02', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(214, 'Uyi mabruri', 'L', 'Kuningan', '1992-07-10', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(215, 'Winda paojiah', 'P', 'Majalengka', '1996-06-26', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(216, 'Wiwin winarsih', 'P', 'Kuningan', '1972-08-20', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(217, 'Yandi riadi purnama', 'L', 'Kuningan', '1990-11-27', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(218, 'Yanuar pramudya', 'L', 'Kuningan', '2000-01-22', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(219, 'Yayan nuryani ', 'P', 'Kuningan', '1986-04-26', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(220, 'Yayat supriatna', 'L', 'Kuningan', '1992-09-16', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(221, 'Yeti yulianti', 'P', 'Kuningan', '1986-07-25', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(222, 'Zubaedah', 'P', 'Lampung', '1972-07-09', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(223, 'Fajar awaludin', 'L', 'Kuningan', '2001-02-22', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(224, 'Hilda vatika dewy', 'P', 'Kuningan', '2000-05-29', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(225, 'Choeri alvaeni', 'L', 'Kuningan', '2000-01-27', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(226, 'Dea saputra', 'L', 'Kuningan', '1998-05-30', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(227, 'Ilham miftahul huda', 'L', 'Kuningan', '1996-03-02', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(228, 'Nabilla putriyana', 'P', 'Kuningan', '1998-12-31', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(229, 'Andrian', 'L', 'Kuningan', '1992-03-30', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(230, 'Edi mulyadi', 'L', 'Kuningan', '1982-01-03', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(231, 'Anjar sunandar', 'L', 'Kuningan', '1995-11-10', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(232, 'Dadan ramdani', 'L', 'Kuningan', '1979-07-14', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(233, 'Dede tarmini', 'P', 'Kuningan', '1971-08-11', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(234, 'Dedi rusnaedi', 'L', 'Kuningan', '1994-11-30', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(235, 'Dian herdiana', 'L', 'Kuningan', '1996-12-15', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(236, 'Dodi herdiana', 'L', 'Kuningan', '1983-10-01', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(237, 'Eka sariffudin', 'L', 'Kuningan', '1994-06-23', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(238, 'Elin melinda', 'P', 'Kuningan', '1990-05-05', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(239, 'Endang susilawati', 'P', 'Kuningan', '1987-08-17', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(240, 'Euis nur\'aisah', 'P', 'Kuningan', '1985-07-17', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(241, 'Fathin aiman', 'L', 'Kuningan', '2000-04-10', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(242, 'Feri rianto', 'L', 'Kuningan', '1998-09-22', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(243, 'Hedi paiz nurohim', 'L', 'Kuningan', '1989-06-15', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(244, 'Iip nur alim', 'L', 'Kuningan', '2001-12-21', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(245, 'Ine agustriani', 'P', 'Kuningan', '1987-08-18', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(246, 'Maman sulaeman', 'L', 'Kuningan', '1980-08-01', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(247, 'Patoni', 'L', 'Kuningan', '1979-08-21', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(248, 'Rian septian', 'L', 'Kuningan', '2000-09-27', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(249, 'Riki septa nugraha', 'L', 'Kuningan', '1995-09-24', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(250, 'Sri mulyati.', 'P', 'Kuningan', '1976-03-04', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(251, 'Tanti septiani', 'P', 'Kuningan', '1991-09-02', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(252, 'Upi supiah', 'P', 'Kuningan', '1982-01-20', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(253, 'Uud mauludin', 'L', 'Kuningan', '1979-12-10', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(254, 'Yudiana', 'L', 'Kuningan', '1996-06-13', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(255, 'Yusep jamaludin', 'L', 'Kuningan', '1977-10-28', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(256, 'Aam samsudin', 'L', 'Kuningan', '1991-04-07', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(257, 'Aam wahyudi', 'L', 'Kuningan', '1994-01-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(258, 'Caswiti', 'P', 'Kuningan', '1996-08-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(259, 'Cucu rusmiati', 'P', 'Kuningan', '1982-06-22', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(260, 'Daskum', 'L', 'Kuningan', '1995-05-13', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(261, 'Dewi kurniasih', 'P', 'Kuningan', '1995-09-14', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(262, 'Fitri', 'P', 'Kuningan', '1993-03-07', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(263, 'Fitri kursih', 'P', 'Kuningan', '1995-03-11', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(264, 'Harun hidayat', 'L', 'Kuningan', '1985-06-11', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(265, 'Iwan tarsani', 'L', 'Kuningan', '1985-08-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(266, 'Jaenudin', 'L', 'Kuningan', '1995-10-23', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(267, 'Kustinah', 'P', 'Kuningan', '1995-10-01', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(268, 'Lukman hakim', 'L', 'Kuningan', '1995-04-24', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(269, 'Lustini', 'P', 'Kuningan', '1992-06-27', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(270, 'Maelani dwi puji', 'P', 'Kuningan', '1995-02-24', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(271, 'Muhammad yusuf', 'L', 'Kuningan', '2000-01-16', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(272, 'Nana juhana', 'L', 'Kuningan', '1988-03-18', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(273, 'Ratnasih', 'P', 'Kuningan', '1986-05-19', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(274, 'Rika rahmawati', 'P', 'Kuningan', '1988-09-10', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(275, 'Rumsinah', 'P', 'Kuningan', '1987-08-15', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(276, 'Ruswan', 'L', 'Kuningan', '1980-07-07', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(277, 'Sainan', 'L', 'Kuningan', '1996-11-05', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(278, 'Siti khodijah', 'P', 'Kuningan', '1995-04-21', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(279, 'Sohib', 'L', 'Kuningan', '1989-12-21', 'Tingkat 6', 'C', '', 'genap', '', '0000-00-00'),
(280, 'Soliah', 'P', 'Kuningan', '1996-02-24', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(281, 'Sri may esa rani', 'P', 'Kuningan', '1990-01-15', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(282, 'Suma', 'L', 'Cirebon', '1969-03-12', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(283, 'Tarwin', 'P', 'Kuningan', '1993-02-10', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(284, 'Tika sartika', 'P', 'Kuningan', '1994-09-29', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(285, 'Titi darsiti ', 'P', 'Kuningan', '1994-09-30', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2022-06-02'),
(286, 'Warsiti', 'P', 'Kuningan', '1985-02-09', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2021-06-04'),
(287, 'Opan soparudin', 'L', 'Kuningan', '1973-06-25', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2021-06-04'),
(288, 'Lomrah', 'P', 'Kuningan', '1992-02-18', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2021-06-04'),
(289, 'Maslikha', 'P', 'Tegal', '1981-02-08', 'Tingkat 6', 'C', '', 'genap', 'lulus', '2021-06-04');

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
(2, 'intan sari', 'intan', '12345', 'perempuan', '20', 'sindang barang', '085156727368'),
(3, 'riki afrizon', 'admin', '12345', 'laki-laki', '23', 'jalaksana', '085745698745'),
(4, 'adi', 'adi', 'adi', 'laki-laki', '21', 'ciawilor', '085745698745'),
(5, 'sasa', 'sasa', 'sasa', 'laki-laki', '15', 'sasa', '085741236985'),
(6, 'sasaxa', 'adsqw', 'dadsadsaa', 'perempuan', '13', 'dsaeds', '212143124132'),
(7, 'dfds', 'cxzff', 'fdsfd', 'laki-laki', '30', 'fdsfdsf', '085741236985'),
(8, 'fdsfds', 'fdfs', 'fdsfad', 'perempuan', '34', 'fcdsfdsc', '1242121431241');

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
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

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
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pro_pkmb`
--
ALTER TABLE `pro_pkmb`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
