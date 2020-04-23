-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 20 Apr 2020 pada 04.13
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoroti_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminku`
--

DROP TABLE IF EXISTS `adminku`;
CREATE TABLE IF NOT EXISTS `adminku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adminku`
--

INSERT INTO `adminku` (`id`, `username`, `password`) VALUES
(1, 'adminbro', 'adminbro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pgw` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pgw` varchar(20) NOT NULL,
  `alamat_pgw` varchar(40) NOT NULL,
  `notelp_pgw` char(12) NOT NULL,
  PRIMARY KEY (`id_pgw`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pgw`, `nama_pgw`, `alamat_pgw`, `notelp_pgw`) VALUES
(1, 'Mahesa', 'Jl. Jendral Sudirman', '08190000441'),
(2, 'Niken Marsito', 'Jl. Eco Valley', '08992329129'),
(3, 'Tukiyem', 'Jl. GayungSari No 15', '08572828288'),
(4, 'Elvi Susanti', 'Jl. Sepanjang Tani No. 10', '08990001010'),
(5, 'Putri Indrani', 'Jl. Kalibata City No. 99', '08312323232'),
(6, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pel` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pel` varchar(20) NOT NULL,
  `alamat_pel` varchar(40) NOT NULL,
  `notelp_pel` char(12) NOT NULL,
  PRIMARY KEY (`id_pel`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pel`, `nama_pel`, `alamat_pel`, `notelp_pel`) VALUES
(1, 'Dio Suhendra', 'Jl. Kalibata City 01', '089911232131'),
(2, 'Mike Leonard', 'Jl. Sudirman 02', '081213459599'),
(3, 'Yuke Panggelama', 'Jl. Arif Rahman Hakim 1', '087712323000'),
(4, 'Rianti Pilloran', 'Jl. Kusuma Bangsa 01', '082213300191'),
(5, 'Kara Inojin', 'Jl. Lidah Wetan 19', '085500001231');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roti`
--

DROP TABLE IF EXISTS `roti`;
CREATE TABLE IF NOT EXISTS `roti` (
  `id_roti` int(11) NOT NULL AUTO_INCREMENT,
  `nama_roti` varchar(20) NOT NULL,
  `harga_roti` int(40) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id_roti`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `roti`
--

INSERT INTO `roti` (`id_roti`, `nama_roti`, `harga_roti`, `exp_date`) VALUES
(1, 'Roti Pisang', 5000, '2020-10-10'),
(2, 'Bolu Pisang', 10000, '2020-10-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
