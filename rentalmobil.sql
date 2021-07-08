-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2021 pada 10.55
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `no_trx` text NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_saatini` text NOT NULL,
  `status_rmh` varchar(128) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `hrg_rental` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `jam_ambil` time NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jam_kembali` time NOT NULL,
  `status` varchar(64) NOT NULL,
  `role` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `no_trx`, `nama_lengkap`, `alamat`, `alamat_saatini`, `status_rmh`, `gender`, `no_ktp`, `no_telpon`, `id_mobil`, `lama_sewa`, `hrg_rental`, `total`, `tujuan`, `tgl_ambil`, `jam_ambil`, `tgl_kembali`, `jam_kembali`, `status`, `role`, `created_at`) VALUES
(2, 'TRX-20210620091222', 'Joko Suloyo', 'Jl. Merpati No.12 RT.01/RW.02 Ds. Ngampel Kec.Mojoroto Kota Kediri', 'Jl. Merpati No.12 RT.01/RW.02 Ds. Ngampel Kec.Mojoroto Kota Kediri', 'Milik Sendiri', 'Laki-laki', '1234567890123456', '085335112113', 8, 2, 400000, 800000, 'Malang', '2021-06-21', '08:00:00', '2021-06-23', '08:00:00', 'Dibooking', 'Konsumen', '2021-06-20 09:21:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jaminan`
--

CREATE TABLE `jaminan` (
  `id_jaminan` int(11) NOT NULL,
  `no_trx` varchar(32) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `ktp` varchar(16) NOT NULL,
  `milik_ktp` text NOT NULL,
  `nama_unit` text NOT NULL,
  `nopol_unit` varchar(16) NOT NULL,
  `thn_unit` int(4) NOT NULL,
  `wrn_unit` varchar(64) NOT NULL,
  `an_stnk` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `milik_hp` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `milik_telp` text NOT NULL,
  `foto_jaminan` text NOT NULL,
  `tgl_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jaminan`
--

INSERT INTO `jaminan` (`id_jaminan`, `no_trx`, `nama_lengkap`, `ktp`, `milik_ktp`, `nama_unit`, `nopol_unit`, `thn_unit`, `wrn_unit`, `an_stnk`, `no_hp`, `milik_hp`, `no_telp`, `milik_telp`, `foto_jaminan`, `tgl_create`) VALUES
(1, 'TRX-20210620091222', 'Joko Suloyo', '0987654321123456', 'Milik Istri', 'Yamaha Mio J', 'AG 4587 CH', 2014, 'Hitam', 'Joko Suloyo', '081235123123', 'Istri', '087789234234', 'Orang Tua', '', '2021-06-20 09:17:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(128) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id_merk`, `nama_merk`, `aktif`, `created_at`) VALUES
(1, 'Honda', 'Y', '2021-06-18 12:59:40'),
(2, 'Toyota', 'Y', '2021-06-18 13:00:30'),
(3, 'Suzuki', 'Y', '2021-06-18 13:01:32'),
(4, 'Daihatsu', 'Y', '2021-06-18 13:02:05'),
(5, 'Mitsubishi', 'Y', '2021-06-18 13:32:49'),
(6, 'Nissan', 'Y', '2021-06-18 13:04:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `nama_mobil` varchar(128) NOT NULL,
  `nopol` varchar(15) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `warna` varchar(128) NOT NULL,
  `jml_kursi` bigint(20) NOT NULL,
  `hrg_rental` bigint(20) NOT NULL,
  `foto` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_merk`, `nama_mobil`, `nopol`, `tahun`, `warna`, `jml_kursi`, `hrg_rental`, `foto`, `created_at`) VALUES
(1, 1, 'Brio All New S M/T', 'S 450 NO', '2021', 'Kuning', 5, 500000, 'brio.jpg', '2021-06-18 16:00:09'),
(2, 1, 'Mobilio', 'AG 5450 NO', '2021', 'Silver', 7, 500000, 'IMG_20200522_180619-1024x768.png', '2021-06-18 16:05:49'),
(3, 2, 'Avanza 1.3G MT', 'N 5450 NO', '2021', 'Hitam', 7, 500000, 'avanza.jpg', '2021-06-18 16:14:26'),
(4, 2, 'Kijang Innova', 'L 5450 NO', '2021', 'Hitam', 7, 500000, '1fef742611f0b06d3cc25f1e585aca94.png', '2021-06-18 16:20:37'),
(5, 3, 'Ertiga', 'W 5450 NO', '2021', 'Silver', 8, 500000, 'ertiga.jpg', '2021-06-18 16:23:02'),
(6, 3, 'New SX4 S-Cross', 'AE 5450 NO', '2021', 'Putih', 8, 500000, 'Webp_net-resizeimage_(3).png', '2021-06-18 16:25:16'),
(7, 4, 'SIGRA', 'B 5450 NO', '2021', 'Silver', 5, 400000, 'astra-daihatsu-sigra.jpg', '2021-06-18 16:52:47'),
(8, 4, 'Ayla', 'AB 5450 N0', '2021', 'Coklat', 5, 400000, 'daihatsu_ayla.jpg', '2021-06-18 16:32:02'),
(9, 5, 'Xpander', 'H 5450 N0', '2021', 'Silver', 8, 500000, 'mtsxpander.jpg', '2021-06-18 16:34:01'),
(10, 5, 'Pajero Sport', 'M 5450 NO', '2021', 'Silver', 8, 500000, 'mtsbpajero.jpg', '2021-06-18 16:35:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL,
  `no_ktp` bigint(16) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `role` varchar(64) NOT NULL,
  `foto` text NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `nama_lengkap`, `password`, `repassword`, `no_ktp`, `gender`, `alamat`, `no_telpon`, `role`, `foto`, `is_active`, `tanggal_daftar`, `last_login`) VALUES
(1, 'onosas', '', '$2y$10$7ROMuA0eD.mu0.at8XUPle4R82bI.jPRdCFLXWWhTgx2WraIfvL92', 'admin123', 0, '', '', '082123549999', 'Admin', '', 'aktif', '2021-06-18 03:36:33', '0000-00-00 00:00:00'),
(2, '', 'Kang Taek Wook', '', '', 1234567890123456, 'Laki-laki', 'Jl. A.Yani 55 Pandean Kediri', '081335888777', 'Konsumen', '', '', '2021-06-19 11:32:18', '0000-00-00 00:00:00'),
(3, '', 'Joko Suloyo', '', '', 1234567890123456, 'Laki-laki', 'Jl. Merpati No.12 RT.01/RW.02 Ds. Ngampel Kec.Mojoroto Kota Kediri', '085335112113', 'Konsumen', '', '', '2021-06-20 09:15:42', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `jaminan`
--
ALTER TABLE `jaminan`
  ADD PRIMARY KEY (`id_jaminan`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jaminan`
--
ALTER TABLE `jaminan`
  MODIFY `id_jaminan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
