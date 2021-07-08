-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 14.22
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
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `kota` text NOT NULL,
  `provinsi` text NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `nama_website` text NOT NULL,
  `alamat_website` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telphone` varchar(13) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL,
  `whatsapp` varchar(13) NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `author` varchar(128) NOT NULL,
  `favicon` text NOT NULL,
  `maps` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id_company`, `nama_perusahaan`, `alamat_perusahaan`, `kota`, `provinsi`, `kodepos`, `nama_website`, `alamat_website`, `email`, `no_telphone`, `facebook`, `instagram`, `twitter`, `whatsapp`, `meta_deskripsi`, `meta_keyword`, `author`, `favicon`, `maps`, `create_date`) VALUES
(1, 'PT. RENTAL CARS', 'Jl. Mayor Bismo No.54 Semampir', 'Kota Kediri', 'Jawa Timur', '64112', 'Rental CARS', 'https://www.rentalcars.com', 'rentalcars@gmail.com', '085735777899', 'https://facebook.com/rentalcars', 'https://instagram.com/rentalcars', 'https://twitter.com/rentalcars', '081235345543', 'Website Rental Cars', 'Tempat sewa mobil terpercaya di kota kediri ', 'ONOSAS', 'PngItem_2717499.png', '</iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\"></iframe>\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126480.06212025635!2d111.94614619386324!3d-7.842416313099357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78570dfd6e0647%3A0x25037b968333d9b2!2sKediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1623306673918!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-06-21 13:22:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `judul_gallery` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_gallery` text NOT NULL,
  `create_gallery` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_mobil`, `judul_gallery`, `keterangan`, `foto_gallery`, `create_gallery`) VALUES
(1, 10, 'Interrior Mitsubishi Pajero Sport', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-pajerosport-my20-feature-interior-1200x630.jpg', '2021-06-21 16:20:04'),
(2, 10, 'Airbag Mitsubishi Pajero Sport', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'srs-airbags.jpg', '2021-06-21 16:21:52'),
(3, 9, 'Interrior Cabin Mitsubishi Xpander', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Xpander-Thai-Cabin-630x350.jpeg', '2021-06-21 16:29:25'),
(4, 9, 'Interrior Mitsubishi Xpander', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'xpander.jpg', '2021-06-21 16:30:16'),
(5, 8, 'Interrior Daihatsu Ayla', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', '5e72fc7bcaa79-interior-daihatsu-ayla-2020_100kpj.jpg', '2021-06-21 16:37:26'),
(6, 8, 'Interrior Daihatsu Ayla', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'unnamed_(1).jpg', '2021-06-21 16:38:04'),
(7, 7, 'Interrior Cabin Daihatsu Sigra', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'sigra-5-2846.jpg', '2021-06-21 16:40:32'),
(8, 7, 'Interrior Daihatsu Sigra', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Interior-Daihatsu-Sigra.jpg', '2021-06-21 16:41:07'),
(9, 6, 'Interrior Suzuki SX-4 S-Cross', 'Suzuki SX-4 S-Cross', 'interior-1.jpg', '2021-06-21 16:43:39'),
(10, 6, 'Interrior Cabin Suzuki SX-4 S-Cross', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'interior-sx-4-s-cross-1-8c6f.jpg', '2021-06-21 16:44:22'),
(11, 5, 'Interrior Suzuki Ertiga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', '5_r3.jpg', '2021-06-21 16:46:53'),
(12, 5, 'Interrior Kursi Suzuki Ertiga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Kursi-Suzuki-Ertiga-2018.jpg', '2021-06-21 16:47:46'),
(13, 4, 'Interrior Cabin Toyota Kijang Innova', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Interior_All_New_Kijang_Innova.JPG', '2021-06-21 16:51:06'),
(14, 4, 'Interrior Toyota Kijang Innova', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'galerry_large-5_optimized_innova.jpg', '2021-06-21 16:51:42'),
(15, 3, 'Interrior Cabin Toyota Avanza 1.3G MT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'interior-toyota-avanza-facelift.jpg', '2021-06-21 16:55:41'),
(16, 3, 'Interrior Toyota Avanza 1.3G MT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'avanza__kursi.jpg', '2021-06-21 16:56:39'),
(17, 2, 'Interrior Honda Mobilio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Interior-Honda-Mobilio.jpg', '2021-06-21 16:59:14'),
(18, 2, 'Interrior Cabin Honda Mobilio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'interior_3L_1_mobilio.jpg', '2021-06-21 16:59:46'),
(19, 1, 'Interrior Honda Brio ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', '2021-Honda-Brio-with-new-interior-design.jpg', '2021-06-21 17:03:20'),
(20, 1, 'Interrior Cabin Honda Brio', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', '2021-Honda-Brio-Dashboard-and-Features_(1).jpg', '2021-06-21 17:03:48');

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
-- Struktur dari tabel `neraca`
--

CREATE TABLE `neraca` (
  `id_neraca` int(11) NOT NULL,
  `tgl_trx` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `pemasukan` bigint(20) NOT NULL,
  `pengeluaran` bigint(20) NOT NULL,
  `saldobersih` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `neraca`
--

INSERT INTO `neraca` (`id_neraca`, `tgl_trx`, `keterangan`, `pemasukan`, `pengeluaran`, `saldobersih`) VALUES
(1, '2021-06-20 09:21:02', 'Sewa mobil Daihatsu\r\nAyla selama 2 hari.', 800000, 0, 800000),
(2, '2021-06-21 18:15:11', 'Pembelian Oli Mobil', 0, 200000, 600000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `tgl_trx` datetime NOT NULL,
  `no_trx` varchar(128) NOT NULL,
  `ket` text NOT NULL,
  `saldo` bigint(20) NOT NULL,
  `status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `tgl_trx`, `no_trx`, `ket`, `saldo`, `status`) VALUES
(1, '2021-06-20 09:21:02', 'TRX-20210620091222', 'Sewa mobil Daihatsu\r\nAyla selama 2 hari.', 800000, 'Dibooking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `tgl_trx` datetime NOT NULL,
  `ktr` text NOT NULL,
  `saldo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tgl_trx`, `ktr`, `saldo`) VALUES
(1, '2021-06-21 18:15:11', 'Pembelian Oli Mobil', 200000);

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
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

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
-- Indeks untuk tabel `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`id_neraca`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

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
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT untuk tabel `neraca`
--
ALTER TABLE `neraca`
  MODIFY `id_neraca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
