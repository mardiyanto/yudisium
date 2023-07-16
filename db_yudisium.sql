-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jul 2023 pada 18.56
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_yudisium`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id_mhs` int(100) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `npm_mhs` varchar(100) NOT NULL,
  `email_mhs` varchar(100) NOT NULL,
  `hp_mhs` varchar(100) NOT NULL,
  `hobi_mhs` varchar(100) NOT NULL,
  `lulus_mhs` varchar(100) NOT NULL,
  `foto_mhs` varchar(100) NOT NULL,
  `prodi_mhs` varchar(100) NOT NULL,
  `alamat_mhs` text NOT NULL,
  `ayah_mhs` varchar(100) NOT NULL,
  `ibu_mhs` varchar(100) NOT NULL,
  `pekerjaan_mhs` varchar(100) NOT NULL,
  `status_mhs` varchar(100) NOT NULL,
  `pass_mhs` varchar(100) NOT NULL,
  `read_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(20) NOT NULL,
  `nama_app` varchar(100) NOT NULL,
  `tahun` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alias` varchar(350) NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `akabest` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_app`, `tahun`, `nama`, `alias`, `alamat`, `isi`, `gambar`, `akabest`) VALUES
(1, 'YUDISUM', '2022/2023', 'IBN PRINGSEWU', 'IBN', '-', '<h1>Silahkan Mengisi form di bawah ini, data foto dan biodata akan di tampilkan di slide pada saat mahasiswa di panggil di depan untuk prosesi wisuda atau yidisuum pastikan data anda benar dan valid, jika ada kesalahan silahkan login dengan npm dan passw yang anda buat</h1>\r\n', '18102022034029.jpg', 'mardybest@gmail.com'),
(2, 're', '', 'MARDIYANTO', '19081989578978975', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(1, 'Adminatun Jhony', 'admin', '21232f297a57a5a743894a0e4a801fc3', '482937136_avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id_mhs` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
