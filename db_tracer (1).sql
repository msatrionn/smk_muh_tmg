-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 21, 2022 at 01:56 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tracer`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_alumni` varchar(50) DEFAULT NULL,
  `alamat_alumni` varchar(50) DEFAULT NULL,
  `foto_alumni` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `id_user`, `nama_alumni`, `alamat_alumni`, `foto_alumni`, `no_hp`) VALUES
(1, 1, 'adi Jos', 'magelang', '22-04-23:07:04:4011.jpeg', '083742424223'),
(14, 24, 'Joni', NULL, NULL, NULL),
(15, 25, 'jono', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `foto` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `foto`, `created_at`) VALUES
(2, 'judul2333', 'isi deskripsi3333 Jl. Dr. Soetomo No.288, Gendongan, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56253Jl. Dr. Soetomo No.288, Gendongan, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56253Jl. Dr. Soetomo No.288, Gendongan, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56253Jl. Dr. Soetomo No.288, Gendongan, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56253 Jl. Dr. Soetomo No.288, Gendongan, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56253', '22-04-22:03:04:5911.jpeg', '2022-04-17 06:56:04'),
(5, 'judul2', 'deskripsi2', '22-04-21:12:04:216.jpeg', '2022-04-20 13:27:24'),
(19, 'Judul4', 'akdaskdsa', '22-04-21:12:04:38unnamed.jpeg', '2022-04-21 12:04:38'),
(20, 'berita', 'cek', '22-05-11:01:05:1411.jpeg', '2022-05-11 13:25:14'),
(21, 'berita 43', 'asdas', '22-05-11:01:05:2111.jpeg', '2022-05-11 13:25:21'),
(22, 'aiaojdasd', 'dsa;ldsasa', '22-05-11:01:05:296.jpeg', '2022-05-11 13:25:29'),
(23, '6', '6', '22-05-11:01:05:2911.jpeg', '2022-05-11 13:29:29'),
(24, '7', '7', '22-05-11:01:05:386.jpeg', '2022-05-11 13:29:38'),
(25, '8', '8', '22-05-11:01:05:4511.jpeg', '2022-05-11 13:29:45'),
(26, '9', '9', '22-05-11:01:05:5511.jpeg', '2022-05-11 13:29:55'),
(27, '10', '10', '22-05-11:01:05:0311.jpeg', '2022-05-11 13:30:03'),
(28, '11', '12', '22-05-11:01:05:1111.jpeg', '2022-05-11 13:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id_hasil` int(11) NOT NULL,
  `id_lamaran` int(11) NOT NULL,
  `hasil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id_lamaran` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `keterangan_kandidat` text NOT NULL,
  `cv` varchar(225) DEFAULT NULL,
  `hasil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`id_lamaran`, `id_lowongan`, `id_alumni`, `keterangan_kandidat`, `cv`, `hasil`) VALUES
(1, 3, 1, '', 'cek', 'Selamat, anda diterima'),
(2, 2, 1, 'cek', '22-05-11:02:05:042022-SE_Rektor_Covid-19_-Penerapan_KDK_secara_penuh-full-periode_April_2022_Rev_SE_Rek_organized.pdf', 'Maaf, Kami tidak dapat melanjutkan lamaran anda'),
(3, 1, 1, 'cek', '22-05-19:02:05:3711.jpeg', 'Sedang menjalankan ujian');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `deskripsi` text,
  `created_at_lowongan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `judul`, `id_perusahaan`, `deskripsi`, `created_at_lowongan`) VALUES
(1, 'CS', 2, '<p>BErikut persyaratannya:</p>\r\n<p>1.jujur</p>\r\n<p>2. dah itu aja</p>', '2022-04-17 07:26:51'),
(2, 'CS DEVELOPER', 2, 'JADI CS AJA GAN ENAK\r\n', '2022-04-17 07:27:31'),
(3, 'JADI KULI TAMBANG ', 1, '<p>Telah Dibuka lowongan dengan deskripsi sebagai berikut :&nbsp;<br /><br /></p>\r\n<p>1. Pria/Wanita, min 18 th</p>\r\n<p>2. Bisa bekerja dalam tim</p>\r\n<p>3. Suka menabung</p>\r\n<p>&nbsp;</p>', '2022-04-17 07:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `alamat_perusahaan` varchar(50) DEFAULT NULL,
  `foto_perusahaan` varchar(50) DEFAULT NULL,
  `deskripsi_perusahaan` text,
  `no_telp_perusahaan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_user`, `nama_perusahaan`, `alamat_perusahaan`, `foto_perusahaan`, `deskripsi_perusahaan`, `no_telp_perusahaan`) VALUES
(1, 3, 'PT Batubara', 'Magelang', '22-04-23:07:04:466.jpeg', 'perusahaan batubara adalah perusahaan yg bergerak di biang batu bara ', '0942083422'),
(2, 5, 'PT Antemi', 'Yogyakarta', '22-04-24:02:04:27facebook.png', 'PT ANtemi bergerak dibidang perhiasan dan ngantemi\r\n', '01234832842');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `pengurus` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `pengurus`, `jabatan`, `created_at`) VALUES
(1, 'Andi', 'Kepala Sekolah', '2022-04-17 07:07:10'),
(2, 'Mamat', 'Wakil Kepala Sekolah', '2022-04-17 07:07:12'),
(3, 'Ratih', 'Bendahara', '2022-04-17 07:07:31'),
(4, 'Yati', 'Sekretaris', '2022-04-17 07:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `role`) VALUES
(1, 'adi', 'adi', '81dc9bdb52d04dc20036dbd8313ed055', 'alumni'),
(2, 'admin', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(3, 'cek', 'cek', '81dc9bdb52d04dc20036dbd8313ed055', 'perusahaan'),
(5, 'antam', 'antam', '81dc9bdb52d04dc20036dbd8313ed055', 'perusahaan'),
(24, 'Joni', 'joni', '42867493d4d4874f331d288df0044baa', 'alumni'),
(25, 'jono', 'jono', '81dc9bdb52d04dc20036dbd8313ed055', 'alumni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`),
  ADD KEY `alumni_ibfk_1` (`id_user`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `hasil_seleksi_ibfk_1` (`id_lamaran`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id_lamaran`),
  ADD KEY `lamaran_ibfk_1` (`id_lowongan`),
  ADD KEY `lamaran_ibfk_2` (`id_alumni`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `lowongan_ibfk_1` (`id_perusahaan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `perusahaan_ibfk_1` (`id_user`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id_lamaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD CONSTRAINT `hasil_seleksi_ibfk_1` FOREIGN KEY (`id_lamaran`) REFERENCES `lamaran` (`id_lamaran`);

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`),
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`id_alumni`) REFERENCES `alumni` (`id_alumni`);

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
