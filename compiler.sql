-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Des 2015 pada 13.49
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `compiler`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id_anggota` int(10) NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `nama_divisi` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `kelas`, `no_hp`, `nama_divisi`) VALUES
(5, 'Euis', 'IK 37 02', '081260494848', 'Dekorasi'),
(6, 'Fikri', 'IK 37 03', '081256751288', 'Acara'),
(7, 'Deasiva Intan', 'IK 37 04', '08562516256', 'Dekorasi'),
(8, 'Qonita Nurul', 'IK 37 04', '085762014563', 'Inti'),
(9, 'Ria', 'IK 37 03', '085762042466', 'Konsumsi'),
(11, 'Pinky', 'IK 38 03', '085762012678', 'Pubdok'),
(12, 'Risti', 'IK 37 04', '085762012678', 'Konsumsi'),
(13, 'Pak Erli', 'IK 37 03', '085762012678', 'Konsumsi'),
(14, 'ria', 'ik-37-03', '0897675', 'Acara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pertandingan`
--

CREATE TABLE IF NOT EXISTS `hasil_pertandingan` (
`id_hasil` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `team_1` varchar(20) NOT NULL,
  `team_2` varchar(20) NOT NULL,
  `score_1` int(10) DEFAULT NULL,
  `score_2` int(10) DEFAULT NULL,
  `hasil` varchar(30) NOT NULL,
  `pertandingan` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `hasil_pertandingan`
--

INSERT INTO `hasil_pertandingan` (`id_hasil`, `tanggal`, `jam`, `tempat`, `team_1`, `team_2`, `score_1`, `score_2`, `hasil`, `pertandingan`) VALUES
(6, '2015-12-08', '10.00', 'Lapangan Asrama ', 'IK-37-06', 'IK-37-07', 1, 1, 'DRAW', 'basket'),
(7, '2015-12-02', '10.00', 'GOAL futsal', 'IK-37-06', 'IK-37-07', 5, 1, 'WIN IK-37-06', 'futsal'),
(8, '2015-12-15', '10.15', 'Lapangan Asrama ', 'IK-37-06', 'IK-37-07', 0, 0, '', ''),
(9, '2015-12-09', '09.00', 'GOR', 'IK-37-06', 'IK-37-07', 0, 0, '', 'badminton'),
(10, '2015-12-22', '09.00', 'b', 'IK-37-07', 'IK-37-03', 0, 0, '', 'basket'),
(11, '2015-12-18', '13.00', 'Gd.Tokong Nanas', 'Tim A IK-37-03', 'IK-37-04', 0, 0, '', 'renang'),
(12, '2015-12-11', '15.00', 'Gd.', 'IK-37-03', 'IK-37-04', 0, 0, '', 'renang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_pemasukan`
--

CREATE TABLE IF NOT EXISTS `kriteria_pemasukan` (
  `kriteria_pemasukan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_pemasukan`
--

INSERT INTO `kriteria_pemasukan` (`kriteria_pemasukan`) VALUES
('dana_divisi'),
('dana_sponsor'),
('kas'),
('lain-lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `kriteria_pengeluaran` (
  `nama_pengeluaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_pengeluaran`
--

INSERT INTO `kriteria_pengeluaran` (`nama_pengeluaran`) VALUES
('acara_day'),
('closing_day'),
('final_day'),
('lain-lain'),
('opening_day');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id_user` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_role` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `id_role`) VALUES
(14, 'pinky', 'pubdok', 4),
(16, 'qoni', 'inti', 1),
(17, 'Ria', 'konsum', 5),
(18, 'fikri', 'acara', 2),
(19, 'dea', 'dea', 3),
(20, 'erli', 'erli', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE IF NOT EXISTS `pemasukan` (
`id_pemasukan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `kriteria_pemasukan` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan1`
--

CREATE TABLE IF NOT EXISTS `pemasukan1` (
`id_pemasukan` int(10) NOT NULL,
  `id_role` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `kriteria_pemasukan` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `pemasukan1`
--

INSERT INTO `pemasukan1` (`id_pemasukan`, `id_role`, `tanggal`, `nama_anggota`, `kriteria_pemasukan`, `keterangan`, `jumlah`) VALUES
(5, 5, '2015-12-07', 'Deasiva Intan', 'kas', ' kas ku', 7),
(6, 2, '2015-12-14', 'Fikri', 'dana_sponsor', '  asal', 5),
(7, 2, '2015-12-08', 'Fikri', 'kas', 'Kas Acara', 10),
(9, 4, '2015-12-15', 'Pinky', 'kas', ' Kas Pubdok', 10),
(10, 3, '2015-12-16', 'Deasiva Intan', 'kas', ' Kas Dekorasi', 20),
(11, 1, '2015-12-09', 'Fikri', 'dana_divisi', '  divisi inti ', 12),
(12, 5, '2015-12-14', 'Pak Erli', 'dana_divisi', '   divisi konsumsi  ', 2000000000),
(13, 4, '2015-12-04', 'Euis', 'lain-lain', '  pemasukan ', 50),
(14, 4, '0000-00-00', 'Euis', 'dana_sponsor', 'pemasukan', 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
`id_pengeluaran` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `kriteria_pengeluaran` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(20) NOT NULL,
  `id_role` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tanggal`, `nama_anggota`, `kriteria_pengeluaran`, `keterangan`, `jumlah`, `id_role`) VALUES
(4, '2015-12-10', 'Ria', 'closing_day', ' oiu', 9, 5),
(6, '2015-12-15', 'Qonita Nurul', 'acara_day', 'untuk acara', 40, 1),
(7, '2015-12-17', 'Deasiva Intan', 'final_day', ' Pengeluaran Final Day Acara', 10, 2),
(8, '2015-12-14', 'Pinky', 'closing_day', 'Photobooth', 5, 4),
(9, '2015-12-15', 'Euis', 'closing_day', ' Dekorasi Closing', 19, 3),
(10, '2015-12-22', 'Qonita Nurul', 'closing_day', ' closing', 12, 1),
(11, '2015-12-14', 'Pak Erli', 'closing_day', ' konsumsi closing', 400000000, 5),
(12, '2015-12-11', 'Fikri', 'acara_day', ' pengeluaran photobooth', 70000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertandingan`
--

CREATE TABLE IF NOT EXISTS `pertandingan` (
  `pertandingan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertandingan`
--

INSERT INTO `pertandingan` (`pertandingan`) VALUES
('badminton'),
('basket'),
('futsal'),
('renang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`id_role` int(10) NOT NULL,
  `nama_role` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'Inti'),
(2, 'Acara'),
(3, 'Dekorasi'),
(4, 'Pubdok'),
(5, 'Konsumsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `score`
--

CREATE TABLE IF NOT EXISTS `score` (
`score` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `score`
--

INSERT INTO `score` (`score`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`team`) VALUES
('IK-37-03'),
('IK-37-04'),
('IK-37-07'),
('Tim A IK-37-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
 ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kriteria_pemasukan`
--
ALTER TABLE `kriteria_pemasukan`
 ADD PRIMARY KEY (`kriteria_pemasukan`);

--
-- Indexes for table `kriteria_pengeluaran`
--
ALTER TABLE `kriteria_pengeluaran`
 ADD PRIMARY KEY (`nama_pengeluaran`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
 ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `pemasukan1`
--
ALTER TABLE `pemasukan1`
 ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
 ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
 ADD PRIMARY KEY (`pertandingan`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
 ADD PRIMARY KEY (`score`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
MODIFY `id_pemasukan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemasukan1`
--
ALTER TABLE `pemasukan1`
MODIFY `id_pemasukan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
MODIFY `id_role` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
MODIFY `score` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
