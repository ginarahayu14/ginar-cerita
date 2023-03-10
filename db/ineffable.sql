-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 11:01 AM
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
(87, 15, 0);

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
(4, 'admin@gmail.com', 'admin');

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
(1, 9, 4, 'aaaa'),
(2, 9, 4, 'bbbb'),
(3, 18, 4, 'qqqqqqq'),
(4, 18, 5, 'rgth'),
(5, 20, 5, 'dhsdjhjhjh'),
(6, 20, 5, 'sdwdf'),
(7, 12, 5, 'weqe'),
(8, 25, 5, 'bdf'),
(9, 25, 5, 'yuki'),
(10, 16, 5, 'dfewdf'),
(11, 26, 5, 'fdsf'),
(12, 16, 23, 'hoho');

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
(3, 'novel'),
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
(14, 'aaa', 0, '118595048-288-k474404.jpg', 'fsfsdfdsf', 32, 'publis', 3),
(15, 'aaa', 0, '190494164-288-k461028.jpg', 'fsefsfsdfd', 43, 'publis', 3),
(16, 'Fatimah', 3, 'antologi.png', 'ryrtyrtyrtytytytryesssssssssssssssssssssssssssssssss', 21, 'publis', 4),
(17, 'rtrt', 2, '200517743-288-k542360.jpg', 'etert', 6, 'publis', 4),
(18, 'aaaaaaaa', 4, '12.jpg', 'eterere', 119, 'publis', 4),
(20, 'bb', 5, '185125230-288-k777566.jpg', 'fdgh', 18, 'publis', 4),
(22, 'wwwfxx', 5, 'Q3LVs9ka-piala12_copy.png', '                                                sssss', 0, 'publis', 5),
(26, 'matamu', 7, 'cer.webp', 'ererfew', 4, 'publis', 0),
(27, 'Kembang Sepasang', 8, 'pui.jpg', 'gfkewgf', 0, 'publis', 0),
(29, 'matamu', 8, 'Screenshot (4).png', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq                                        ', 0, 'publis', 0);

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
(19, 'gina', 'gina', 'ginar@gmail.com', 'g', ''),
(21, '', 'user', 'ginar8480@gmail.com', 'f', ''),
(22, '', 'gina rahayu', 'ginarahayu@gmail.com', 'b', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
