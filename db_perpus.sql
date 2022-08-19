-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2021 pada 05.33
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_buku` char(255) NOT NULL,
  `penulis_buku` char(255) NOT NULL,
  `penerbit_buku` char(100) NOT NULL,
  `jumlah_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `jumlah_buku`) VALUES
(1, 2, 'Matematika', 'Sukino', 'Erlangga', 10),
(2, 2, 'Aktif Kreatif Belajar Matematika', 'Nanang priatna & Tito Sutinto', 'Erlangga', 10),
(3, 3, 'Pendidikan Agama Islam dan Budi Pekerti Kelas X', 'Nelty Khairiyah dan Endi Suhendi Zen', 'Andi', 10),
(4, 3, 'Pendidikan Agama Islam dan Budi Pekerti Kelas XI', 'Mustahdi dan Mustakim', 'Andi', 10),
(5, 4, 'Ilmu Pengetahuan Alam X', 'Sarah Aulia az', 'Erlangga', 20),
(6, 4, 'Ilmu Pengetahuan Alam XI', 'Dwina', 'Erlangga', 20),
(7, 4, 'Ilmu Pengetahuan Alan XII', 'Tika', 'Erlangga', 20),
(8, 4, 'IPA Terapan X', 'Nazar', 'Erlangga', 20),
(9, 4, 'IPA Terapan XI', 'Firdaus', 'Erlangga', 20),
(10, 4, 'IPA Terapan XII', 'Juan', 'Erlangga', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `foto`) VALUES
(1, 'Sejarah', 'http://localhost/Perpustakaan/vendor/img/work-1.jpg'),
(2, 'Matematika', 'http://localhost/Perpustakaan/vendor/img/work-2.jpg'),
(3, 'Agama', 'http://localhost/Perpustakaan/vendor/img/work-3.jpg'),
(4, 'Ipa', 'http://localhost/Perpustakaan/vendor/img/work-4.jpg'),
(5, 'Bahasa Indonesia', 'http://localhost/Perpustakaan/vendor/img/work-5.jpg'),
(6, 'Pkn', 'http://localhost/Perpustakaan/vendor/img/work-6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` int(20) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_tempo` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tenggat` int(11) NOT NULL,
  `status` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `jk_user` char(1) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `telp_user` varchar(15) NOT NULL,
  `status_user` char(5) NOT NULL,
  `level_user` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `jk_user`, `alamat_user`, `telp_user`, `status_user`, `level_user`) VALUES
(1, 'petugas', 'petugas', 'Benedict Wong', 'L', 'New York', '081234567890', 'aktif', 'petugas'),
(2, 'anggota', 'anggota', 'Wanda Maximoff', 'P', 'Sokovia', '092834746102', 'aktif', 'anggota');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kode_transaksi` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
