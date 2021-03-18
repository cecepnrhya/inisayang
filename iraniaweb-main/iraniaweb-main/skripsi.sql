-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2021 pada 13.24
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apply_job`
--

CREATE TABLE `apply_job` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `nomor_kontak` varchar(11) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `nilai_akhir` int(11) NOT NULL,
  `cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apply_job`
--

INSERT INTO `apply_job` (`id`, `nama_lengkap`, `nomor_kontak`, `jurusan`, `nilai_akhir`, `cv`) VALUES
(1, 'cecep nurcahya', '08569584879', 'TKJ', 20, 'CV.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_perusahaan`
--

CREATE TABLE `daftar_perusahaan` (
  `id` int(5) NOT NULL,
  `nama_perusahaan` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_job`
--

CREATE TABLE `kategori_job` (
  `id` int(5) NOT NULL,
  `role` varchar(10) NOT NULL,
  `type` varchar(15) NOT NULL,
  `city` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_job`
--

INSERT INTO `kategori_job` (`id`, `role`, `type`, `city`) VALUES
(1, 'tkj', 'part time', 'bandung'),
(2, 'multimedia', 'internship', 'jakarta'),
(3, 'akuntansi', 'full time', 'bandung'),
(4, 'tkj', 'internship', 'tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(5) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id`, `nama`, `password`) VALUES
(1, 'cecep', 'yayaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `signup`
--

CREATE TABLE `signup` (
  `id` int(5) NOT NULL,
  `NISN` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirm_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `signup`
--

INSERT INTO `signup` (`id`, `NISN`, `email`, `password`, `confirm_password`) VALUES
(2, '', '', '', ''),
(3, '212121212', 'cecepnrchya@gmail.com', '1212121', '1212'),
(4, '121212121212', '', '', ''),
(7, '5555555555555', '', '', ''),
(11, '222222222222222', 'hshshs@gmail.com', 'qwwwq', 'wqwqwq'),
(12, '3333333333', 'cecepnrchya@gmail.com', 'qwqwqwqw', 'qwqwq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_perusahaan`
--
ALTER TABLE `daftar_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_job`
--
ALTER TABLE `kategori_job`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NISN` (`NISN`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_perusahaan`
--
ALTER TABLE `daftar_perusahaan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_job`
--
ALTER TABLE `kategori_job`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
