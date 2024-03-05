-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2024 pada 03.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `no` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `status` enum('Masuk','Pulang') NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`no`, `nama`, `keterangan`, `status`, `waktu`) VALUES
(110, 'roy', 'hadir', 'Masuk', '2024-03-01 10:27:14'),
(111, 'asep', 'Hadir', 'Masuk', '2024-03-01 03:31:52'),
(112, 'agus', 'Hadir', 'Masuk', '2024-03-01 03:32:28'),
(113, 'agus', 'Hadir', 'Masuk', '2024-03-01 03:32:33'),
(114, 'asfi', 'Hadir', 'Masuk', '2024-03-01 03:34:36'),
(115, 'agus', 'Hadir', 'Pulang', '2024-03-01 03:35:13'),
(116, 'agus', 'Hadir', 'Masuk', '2024-03-02 10:51:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `namakaryawan`
--

CREATE TABLE `namakaryawan` (
  `no` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(40) NOT NULL,
  `email` varchar(15) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `namakaryawan`
--

INSERT INTO `namakaryawan` (`no`, `nip`, `nama`, `jabatan`, `jenis_kelamin`, `tanggal_lahir`, `email`, `no_tlpn`, `alamat`, `waktu`) VALUES
(31, '111111', 'agus', 'Direktur utama', 'Laki-laki', '17-03-1999', 'agus@gmail', '083856695857', 'BLOK A5 NO17', '2024-02-29 02:11:07'),
(32, '111112', 'asep', 'Menejer', 'Laki-laki', '03-08-1997', 'asep@gmail', '087254177896', 'BLOK A NO05', '2024-02-29 02:11:07'),
(33, '111113', 'alya', 'Bidang personal', 'Perempuan', '20-09-1999', 'alya@gmail', '083875926565', 'BLOK AB NO18', '2024-02-29 02:11:07'),
(34, '111114', 'asfi', 'Sekertaris', 'Perempuan', '17-08-1992', 'asfi@gmail', '087563214558', 'BLOK A37 NO26', '2024-02-29 02:11:07'),
(35, '111115', 'dina', 'Staf administra', 'Perempuan', '13-03-1999', 'dina@gmail', '087265495667', 'BLOK A3 NO20', '2024-02-29 02:11:07'),
(36, '111116', 'desi', 'Aspek pabrik', 'Perempuan', '13-1201998', 'desi@gmail', '085321685492', 'BLOK H23 NO18', '2024-02-29 02:11:07'),
(37, '111117', 'roy', 'Direksi(CEO)', 'Laki-laki', '17-03-1999', 'roy@gmail', '083856695857', 'BLOK AC NO18', '2024-02-29 07:56:44'),
(38, '111118', 'jangki', 'Menejer', 'Laki-laki', '20-05-1984', 'jangki@gmail', '087864532159', 'BLOK AB NO06', '2024-02-29 02:11:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `namakaryawan`
--
ALTER TABLE `namakaryawan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `namakaryawan`
--
ALTER TABLE `namakaryawan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
