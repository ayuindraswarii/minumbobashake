-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2022 pada 03.00
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bobashake`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `kode_bahan` varchar(10) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`kode_bahan`, `nama_bahan`) VALUES
('BDC', 'Bubuk Belgium Dark Choco'),
('BG', 'Bubuk Bubble Gum'),
('CRV', 'Bubuk Chocolate Red Velvet'),
('DC', 'Dark Choco'),
('RV', 'Bubuk Red Velvet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id_user` varchar(20) NOT NULL,
  `kode_beli` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id_user`, `kode_beli`, `tgl`, `nama_barang`, `jumlah`, `harga`, `total`) VALUES
('ayu_bratan', 1, '2021-10-13', 'Gas Elpiji', 1, 12000, 12000),
('ayu_bratan', 2, '2021-10-13', 'Sedotan Boba', 1, 15000, 15000),
('ayu_bratan', 3, '2022-01-14', 'Sedotan Kecil', 50, 12000, 12000),
('ayu_bratan', 4, '2022-01-14', 'Cup 50', 5, 20000, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual`
--

CREATE TABLE `jual` (
  `id_user` varchar(20) NOT NULL,
  `no_nota` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `kode_minuman` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jual`
--

INSERT INTO `jual` (`id_user`, `no_nota`, `tgl`, `nama_pembeli`, `kode_minuman`, `jumlah`, `harga`, `total`) VALUES
('ayu_bratan', 2, '2022-01-12', 'abc', 'BDC', 2, 12000, 24000),
('ayu_bratan', 3, '2022-01-12', 'ayuk', 'BDC', 2, 12000, 24000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `kode_minuman` varchar(5) NOT NULL,
  `nama_minuman` varchar(50) NOT NULL,
  `kode_bahan` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`kode_minuman`, `nama_minuman`, `kode_bahan`, `harga`) VALUES
('RV', 'Red Velvet', 'RV', 12000),
('BG', 'Bubble Gum', 'BG', 12000),
('DC', 'Dark Chocolate', 'DC', 12000),
('CRV', 'Chocolate Red Velvet', 'CRV', 12000),
('BDC', 'Belgium Dark Choco', 'BDC', 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `no_order` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `BDC` int(11) NOT NULL,
  `BG` int(11) NOT NULL,
  `CRV` int(11) NOT NULL,
  `DC` int(11) NOT NULL,
  `RV` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`no_order`, `id_user`, `BDC`, `BG`, `CRV`, `DC`, `RV`, `tgl_pesan`, `tgl_ambil`) VALUES
(1, 'ayu_bratan', 0, 1, 3, 0, 0, '2021-10-01', '2021-10-02'),
(2, 'ayu_bratan', 1, 2, 1, 1, 0, '2021-11-26', '2021-11-29'),
(3, 'ayu_bratan', 3, 9, 8, 7, 6, '2022-01-09', '2022-01-11'),
(4, 'ayu_bratan', 3, 1, 1, 1, 3, '2022-01-14', '2022-01-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id_user` varchar(10) NOT NULL,
  `BDC` int(11) NOT NULL,
  `BG` int(11) NOT NULL,
  `CRV` int(11) NOT NULL,
  `DC` int(11) NOT NULL,
  `RV` int(11) NOT NULL,
  `id_bhn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id_user`, `BDC`, `BG`, `CRV`, `DC`, `RV`, `id_bhn`) VALUES
('ayu_bratan', 3, 4, 3, 6, 9, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `booth` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','employee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `booth`, `username`, `password`, `level`) VALUES
('admin', 'admin', 'Alun-alun', 'yay', 'yay', 'admin'),
('admin1', 'admin1', 'Alun-alun', 'admin1', 'admin1', 'admin'),
('nina_basra', 'Nina', 'Basuki Rahmat', 'nina', 'nina', 'employee'),
('ayu_bratan', 'Ayu', 'Bratan', 'ayu', 'ayu', 'employee'),
('', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`kode_beli`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD KEY `kode_bahan` (`kode_bahan`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`no_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_bhn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `kode_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `orderan`
--
ALTER TABLE `orderan`
  MODIFY `no_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id_bhn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
