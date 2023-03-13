-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 05:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perpustakaan`
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
(84, 14, 0),
(87, 15, 0),
(88, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email`, `password`) VALUES
(4, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `post_id`, `user_id`, `comment`) VALUES
(28, 16, 32, 'fsdfsfwsfsdfsdfsdfsd'),
(33, 36, 32, 'haii gina ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama`) VALUES
(3, 'Novel'),
(4, 'Cerpen'),
(7, 'Quotes'),
(8, 'Puisi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`id`, `judul`, `kategori_id`, `photo`, `isi`, `view`, `status`, `user_id`) VALUES
(14, 'Sma VS Smk', 0, '118595048-288-k474404.jpg', 'fsfsdfdsf', 51, 'publis', 3),
(15, 'Cinta Putih Abu - Abu', 2, '190494164-288-k461028.jpg', 'Berseragam putih abu-abu terasa paling menyenangkan dari hal lainnya. Masa Remaja menuju masa dewasa. Banyak teman-teman baru, suasana yang baru dan cowok-cowok keren di sekolah. Awal memasuki masa ini, selalu dihantui ketakutan luar biasa membayangkan eksperesi wajah-wajah seram kakak kelas dan MOS (masa orientasi siswa) yang banyak aturan. Kaos kaki dengan warna yang berbeda putih sebelah kanan dan hitam untuk sebelah kiri, tas dari kardus, dan diselingi dengan permainan yang konyol bagi siswa baru dan lucu bagi kakak kelas yang sok atur. Sangat dan sangat menyebalkan. MOS telah selesai, siswa baru bisa bernapas lega akhirnya bisa lepas juga dari kakak kelas. Memulai segalanya dengan serba baru dari seragam, sepatu, tas, sampai buku. Hehehe?, menguras dompet yang tidak sedikit.\r\n\r\nNamaku Dinda. Aku adalah salah satu dari murid baru tersebut. Aku tidak menonjol seperti anak-anak lainnya. Pemalu, murah tersenyum itulah aku. Aku mempunyai banyak teman di sekolah baruku ini. Ada satu teman yang paling dekat denganku dan sudah kuanggap seperti saudara sendiri. Namanya Haflinda, tapi aku biasa memanggilnya Linda. Linda adalah sosok yang sangat menyenangkan buatku. Kami duduk sebangku. Dia adalah teman masa SMPku. Tiada hari tanpa tawa diantara kami. Segala yang menyedihkan kami jadikan hal yang lucu. Kami berdua sangat kompak. Orang akan bertanya bila melihat aku sendiri karena mereka sering bilang dimana ada Dinda disitu ada Linda. Tak dapat dipisahkan.\r\n\r\nSekolahku lumayan luas, mempunyai lapangan basket, futsal, dan volly. Teman-teman kelasku semuanya menyenangkan, mereka baik dan sayang padaku. Terlebih temanku Intan, dia sangat sayang pada aku dan Linda. Hidupku terasa lengkap punya sahabat dalam kelas ini. Kelas kami adalah Xa.', 130, 'publis', 3),
(16, 'Muara Aksara', 3, 'antologi.png', 'ryrtyrtyrtytytytryesssssssssssssssssssssssssssssssss', 94, 'publis', 4),
(17, 'Masa Smk', 2, '200517743-288-k542360.jpg', 'etert', 8, 'publis', 4),
(18, 'Yasinta', 4, '12.jpg', 'eterere', 122, 'publis', 4),
(20, 'bb', 5, '185125230-288-k777566.jpg', 'fdgh', 18, 'publis', 4),
(32, 'Bersama - Mu', 7, 'cer.webp', 'bbbbb', 0, 'publis', 32),
(33, 'Kembang Sepasang', 8, 'pui.jpg', 'aaaaa', 5, 'publis', 32);

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sebab` text NOT NULL,
  `Alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_report`
--

INSERT INTO `tb_report` (`id`, `post_id`, `user_id`, `sebab`, `Alasan`) VALUES
(27, 15, 32, 'Kebencian atau Perundungan', 'EGOIS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`, `photo`) VALUES
(32, 'Gina Rahayu', 'ginarahayu', 'ginarahayu@gmail.com  ', 'b2f5ff47436671b6e533d8dc3614845d', ''),
(33, '', 'a', 'nasirukun@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
