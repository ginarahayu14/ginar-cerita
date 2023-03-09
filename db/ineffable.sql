-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2023 pada 05.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ineffable`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `post_id`, `user_id`) VALUES
(11, 13, 0),
(14, 15, 3),
(21, 0, 0),
(22, 0, 0),
(23, 0, 0),
(24, 0, 0),
(25, 0, 0),
(26, 0, 0),
(27, 0, 0),
(28, 0, 0),
(29, 0, 0),
(30, 0, 0),
(31, 0, 0),
(32, 0, 0),
(33, 0, 0),
(34, 0, 0),
(35, 0, 0),
(36, 0, 0),
(37, 0, 0),
(38, 0, 0),
(39, 0, 0),
(40, 0, 0),
(41, 0, 0),
(42, 0, 0),
(43, 0, 0),
(44, 0, 0),
(45, 0, 0),
(46, 0, 0),
(47, 0, 0),
(48, 0, 0),
(49, 0, 0),
(50, 0, 0),
(51, 0, 0),
(52, 0, 0),
(53, 0, 0),
(54, 0, 0),
(55, 0, 0),
(56, 0, 0),
(57, 0, 0),
(58, 0, 0),
(59, 0, 0),
(60, 0, 0),
(61, 0, 0),
(62, 0, 0),
(63, 0, 0),
(64, 0, 0),
(65, 0, 0),
(66, 0, 0),
(67, 0, 0),
(68, 0, 0),
(69, 0, 0),
(70, 0, 0),
(71, 0, 0),
(72, 0, 0),
(73, 0, 0),
(74, 0, 0),
(75, 0, 0),
(76, 0, 0),
(77, 0, 0),
(78, 0, 0),
(79, 0, 0),
(84, 14, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email`, `password`) VALUES
(4, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `post_id`, `user_id`, `comment`) VALUES
(1, 9, 4, 'aaaa'),
(2, 9, 4, 'bbbb'),
(3, 18, 4, 'qqqqqqq'),
(4, 18, 5, 'rgth'),
(5, 20, 5, 'dhsdjhjhjh'),
(6, 20, 5, 'sdwdf'),
(7, 12, 5, 'weqe'),
(8, 25, 5, 'bdf'),
(9, 25, 5, 'yuki'),
(10, 16, 5, 'dfewdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama`) VALUES
(3, 'Novel'),
(4, 'Quotes'),
(5, 'Cerpen'),
(7, 'Quotes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `isi` text NOT NULL,
  `view` int(11) NOT NULL,
  `status` enum('arsip','publis','disable') NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id`, `judul`, `kategori_id`, `photo`, `isi`, `view`, `status`, `user_id`) VALUES
(14, 'aaa', 0, '118595048-288-k474404.jpg', 'fsfsdfdsf', 32, 'publis', 3),
(15, 'aaa', 0, '190494164-288-k461028.jpg', 'fsefsfsdfd', 43, 'publis', 3),
(16, 'Fatimah', 3, 'antologi.png', 'ryrtyrtyrtytytytryesssssssssssssssssssssssssssssssss', 9, 'publis', 4),
(17, 'rtrt', 2, '200517743-288-k542360.jpg', 'etert', 6, 'publis', 4),
(18, 'aaaaaaaa', 4, '12.jpg', 'eterere', 119, 'publis', 4),
(20, 'bb', 5, '185125230-288-k777566.jpg', 'fdgh', 18, 'publis', 4),
(22, 'wwwfxx', 5, 'Q3LVs9ka-piala12_copy.png', '                                                sssss', 0, 'publis', 5),
(23, 'aaaaaaaa', 4, 'Desert.jpg', 'sdds', 0, 'publis', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_report`
--

CREATE TABLE `tb_report` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sebab` text NOT NULL,
  `Alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_report`
--

INSERT INTO `tb_report` (`id`, `post_id`, `user_id`, `sebab`, `Alasan`) VALUES
(11, 12, 5, 'Kekerasan', 'kkkk'),
(12, 12, 5, 'Kebencian atau Perundungan', 'llllllll'),
(14, 25, 0, 'inappropraite content', 'ewer'),
(15, 14, 0, 'inappropraite content', 'asas'),
(16, 9, 0, 'inappropraite content', 'ss'),
(17, 9, 0, 'inappropraite content', 'ssdasd'),
(18, 25, 0, 'inappropraite content', 'uiiii'),
(19, 16, 0, 'Kebencian atau Perundungan', 'wdw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`, `photo`, `role`) VALUES
(5, '', 'anisaa', 'ginar8480@gmail.com ', '1', '', 'user'),
(6, '', 'gina', 'ginarahayu@gmail.com', '2', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
