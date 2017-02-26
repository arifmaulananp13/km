-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 06:26 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `km`
--

-- --------------------------------------------------------

--
-- Table structure for table `input_bap`
--

CREATE TABLE IF NOT EXISTS `input_bap` (
  `id_bap` int(11) NOT NULL AUTO_INCREMENT,
  `no_tanggal` date NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `materi` longtext NOT NULL,
  PRIMARY KEY (`id_bap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `input_bap`
--

INSERT INTO `input_bap` (`id_bap`, `no_tanggal`, `dosen`, `matkul`, `kelas`, `materi`) VALUES
(28, '2016-11-19', 'Andi A', 'Fisika', 'SI-36-04', 'MAMA'),
(29, '2016-11-04', 'Toni M', 'Bahasa Inggris I', 'SI-36-02', 'yoooooooohohoho'),
(30, '2016-11-20', 'Budi R', 'Fisika', 'SI-36-05', '1.makan yg bergizi\n2.makan teratur\n3.minum secukupnya'),
(31, '2016-11-20', 'Andi A', 'Fisika', 'SI-36-04', '1. HAHAHAHA\r\n2. NYAAHAHAHA\r\n3. WOOHOOHOHO\r\n4. OWAKOWAKKO'),
(32, '2016-11-21', 'Toni M', 'Bahasa Indonesia', 'SI-36-02', '1. haha\r\n2. hahahah\r\n3. hihihi'),
(33, '2016-11-21', 'Toni M', 'Bahasa Inggris I', 'SI-36-05', 'tidak ada materi hari ini, kita nonton film aja'),
(34, '2016-11-21', 'Andi A', 'Kalkulus I', 'SI-36-04', 'tidak ada materi, hari ini kita nonton2 saja'),
(35, '2016-11-30', 'Budi R', 'Bahasa Inggris I', 'SI-36-04', 'ablasdhaid'),
(36, '2016-12-01', 'Andi A', 'Aljabar Linear', 'SI-36-04', 'jniniybuybu'),
(37, '2016-12-03', 'Toni M', 'Bahasa Indonesia', 'SI-36-04', 'iwerjwoperiwjerw'),
(38, '2016-12-21', 'Andi A', 'Bahasa Inggris I', 'SI-36-05', 'bla bla bla'),
(39, '2016-12-21', 'Andi A', 'Kalkulus I', 'SI-36-01', 'ahahahaha akhirnya bisaa'),
(40, '2016-12-21', 'Andi A', 'Kalkulus I', 'SI-36-01', 'hari ini kita tidak ada materi, cuma nonton film motivasi aja'),
(41, '2016-12-21', 'Toni M', 'Aljabar Linear', 'SI-36-04', 'hari ini saya malas ngajar, mahasiswa saya kasih film di layarkaca21 aja'),
(42, '2016-12-22', 'Andi A', 'Kalkulus I', 'SI-36-01', 'ewtretertrtert'),
(43, '2016-12-28', 'Andi A', 'Kalkulus I', 'SI-36-01', 'bla bla bla'),
(44, '2017-01-03', 'Budi R', 'Aljabar Linear', 'SI-36-03', 'aaaaaaaaaaa'),
(45, '0000-00-00', 'Andi A', 'Kalkulus I', 'SI-36-01', 'hahahahha'),
(46, '2017-01-05', 'Andi A', 'Kalkulus I', 'SI-36-01', 'sdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `input_jadwal`
--

CREATE TABLE IF NOT EXISTS `input_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `input_jadwal`
--

INSERT INTO `input_jadwal` (`id_jadwal`, `dosen`, `matkul`, `kelas`, `hari`, `shift`) VALUES
(1, 'Andi A', 'Kalkulus I', 'SI-36-01', 'Senin', '06:30 - 08:30'),
(2, 'Budi R', 'Fisika', 'SI-36-02', 'Selasa', '10:30 - 12:30'),
(3, 'Toni M', 'Aljabar Linear', 'SI-36-04', 'Rabu', '16:30 - 18:30'),
(4, 'Budi R', 'Aljabar Linear', 'SI-36-03', 'Senin', '06:30 - 08:30');

-- --------------------------------------------------------

--
-- Table structure for table `input_rps`
--

CREATE TABLE IF NOT EXISTS `input_rps` (
  `id_rps` int(11) NOT NULL AUTO_INCREMENT,
  `dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `rps` text NOT NULL,
  PRIMARY KEY (`id_rps`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `input_rps`
--

INSERT INTO `input_rps` (`id_rps`, `dosen`, `matkul`, `rps`) VALUES
(7, 'Toni M', 'Matematika Diskret', 'kopas_CI.docx'),
(9, 'Andi A', 'Kalkulus I', 'proposal_inov.docx'),
(10, 'Toni M', 'Bahasa Indonesia', 'Cover_Letter.docx'),
(11, 'Budi R', 'Fisika', 'Tugas-Besar.docx');

-- --------------------------------------------------------

--
-- Table structure for table `table_comment`
--

CREATE TABLE IF NOT EXISTS `table_comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `id_post` int(255) NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `table_comment`
--

INSERT INTO `table_comment` (`id_comment`, `nama_user`, `comment`, `tanggal`, `id_post`) VALUES
(1, 'ketua KK', 'oke siap', '0000-00-00', 0),
(2, 'ketua KK', 'oke', '0000-00-00', 0),
(3, 'ketua KK', 'oke sipp', '0000-00-00', 0),
(4, 'ketua KK', 'oke oke', '0000-00-00', 0),
(5, 'ketua KK', 'oke oke', '0000-00-00', 0),
(6, 'ketua KK', 'haha', '0000-00-00', 0),
(7, 'ketua KK', 'okeee', '0000-00-00', 0),
(8, 'ketua KK', 'okeee', '0000-00-00', 0),
(9, 'ketua KK', 'wew', '0000-00-00', 0),
(10, 'ketua KK', '...', '0000-00-00', 0),
(11, 'ketua KK', 'hmm', '0000-00-00', 0),
(12, 'ketua KK', 'asd', '0000-00-00', 0),
(13, 'ketua KK', 'halo', '0000-00-00', 0),
(14, 'ketua KK', 'hehe', '0000-00-00', 0),
(15, 'ketua KK', 'hihi', '0000-00-00', 0),
(16, 'ketua KK', 'huahuahua', '0000-00-00', 0),
(17, 'ketua KK', '???', '0000-00-00', 7),
(19, 'ketua KK', 'oh begitu', '2017-01-15', 7),
(20, 'ketua KK', 'bla bla', '2017-01-15', 7),
(21, 'ketua KK', 'hmmm\r\n', '2017-01-15', 8),
(22, 'ketua KK', 'ha?', '2017-01-15', 8),
(23, 'ketua KK', 'hmmm', '2017-01-15', 7),
(24, 'ketua KK', 'okok', '2017-01-15', 8);

-- --------------------------------------------------------

--
-- Table structure for table `table_dosen`
--

CREATE TABLE IF NOT EXISTS `table_dosen` (
  `id_dosen` int(50) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(50) NOT NULL,
  `kode_dosen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `table_dosen`
--

INSERT INTO `table_dosen` (`id_dosen`, `nama_dosen`, `kode_dosen`) VALUES
(1, 'Andi A', 'd01'),
(2, 'Budi R', 'd02'),
(3, 'Toni M', 'd03');

-- --------------------------------------------------------

--
-- Table structure for table `table_hari`
--

CREATE TABLE IF NOT EXISTS `table_hari` (
  `id_hari` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(50) NOT NULL,
  PRIMARY KEY (`id_hari`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `table_hari`
--

INSERT INTO `table_hari` (`id_hari`, `hari`) VALUES
(3, 'Senin'),
(4, 'Selasa'),
(5, 'Rabu'),
(6, 'Kamis'),
(7, 'Jumat'),
(8, 'Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `table_kelas`
--

CREATE TABLE IF NOT EXISTS `table_kelas` (
  `nama_kelas` varchar(50) NOT NULL,
  `id_kelas` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `table_kelas`
--

INSERT INTO `table_kelas` (`nama_kelas`, `id_kelas`) VALUES
('SI-36-01', 1),
('SI-36-02', 2),
('SI-36-03', 3),
('SI-36-04', 4),
('SI-36-05', 5),
('SI-36-06', 6);

-- --------------------------------------------------------

--
-- Table structure for table `table_matkul`
--

CREATE TABLE IF NOT EXISTS `table_matkul` (
  `id_matkul` int(20) NOT NULL AUTO_INCREMENT,
  `nama_matkul` varchar(50) NOT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `table_matkul`
--

INSERT INTO `table_matkul` (`id_matkul`, `nama_matkul`) VALUES
(1, 'Kalkulus I'),
(2, 'Fisika'),
(3, 'Bahasa Inggris I'),
(4, 'Aljabar Linear'),
(5, 'Bahasa Indonesia'),
(6, 'Matematika Diskret');

-- --------------------------------------------------------

--
-- Table structure for table `table_post`
--

CREATE TABLE IF NOT EXISTS `table_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `table_post`
--

INSERT INTO `table_post` (`id_post`, `nama_user`, `judul`, `deskripsi`, `tanggal`, `waktu`) VALUES
(7, 'dekan', 'Server Maintenance', 'Styles for displaying content with some of the most commonly used HTML elements, including normalization, typography, images, tables, and more.', '2017-01-11', '01:47:43'),
(8, 'wakil dekan', 'Server Sibuk', 'Pengertian server adalah sebuah sistem komputer yang menyediakan jenis layanan tertentu dalam sebuah jaringan komputer. Terkadang istilah server disebut sebagai web server.', '2017-01-12', '08:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `table_shift`
--

CREATE TABLE IF NOT EXISTS `table_shift` (
  `id_shift` int(11) NOT NULL AUTO_INCREMENT,
  `shift` varchar(50) NOT NULL,
  PRIMARY KEY (`id_shift`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `table_shift`
--

INSERT INTO `table_shift` (`id_shift`, `shift`) VALUES
(1, '06:30 - 08:30'),
(2, '08:30 - 10:30'),
(3, '10:30 - 12:30'),
(4, '12:30 - 14:30'),
(5, '14:30 - 16:30'),
(6, '16:30 - 18:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE IF NOT EXISTS `tbl_level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `level`) VALUES
(1, 'Dekan'),
(2, 'Wakil Dekan '),
(3, 'Kaprodi'),
(4, 'Sekretaris Kaprodi'),
(5, 'Ketua Kelompok Keahlian'),
(6, 'Dosen Koordinator'),
(7, 'Dosen Pengajar'),
(8, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, '', 'malasngoding', '10406c1d7b7421b1a56f0d951e952a95', 'Mahasiswa'),
(3, 'arif maulana NP', '1106120096', '81dc9bdb52d04dc20036dbd8313ed055', 'Dekan'),
(4, 'Budi R', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'Dosen Pengajar'),
(5, 'dekan', '1', '81dc9bdb52d04dc20036dbd8313ed055', 'Dekan'),
(6, 'wakil dekan', '2', '81dc9bdb52d04dc20036dbd8313ed055', 'Wakil Dekan '),
(7, 'kaprodi', '3', '81dc9bdb52d04dc20036dbd8313ed055', 'Kaprodi'),
(8, 'sekretaris kaprodi', '4', '81dc9bdb52d04dc20036dbd8313ed055', 'Sekretaris Kaprodi'),
(9, 'ketua KK', '5', '81dc9bdb52d04dc20036dbd8313ed055', 'Ketua Kelompok Keahlian'),
(10, 'dosen koor', '6', '81dc9bdb52d04dc20036dbd8313ed055', 'Dosen Koordinator'),
(11, 'dosen pengajar', '7', '81dc9bdb52d04dc20036dbd8313ed055', 'Dosen Pengajar'),
(12, 'mahasiswa', '8', '81dc9bdb52d04dc20036dbd8313ed055', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `verif_bap`
--

CREATE TABLE IF NOT EXISTS `verif_bap` (
  `id_verif` int(11) NOT NULL AUTO_INCREMENT,
  `no_tanggal` date NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `materi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY (`id_verif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `verif_bap`
--

INSERT INTO `verif_bap` (`id_verif`, `no_tanggal`, `dosen`, `matkul`, `kelas`, `materi`, `status`, `ket`) VALUES
(1, '2016-11-21', 'Toni M', 'Bahasa Indonesia', 'SI-36-02', '', 'sesuai', 'bagus pak'),
(2, '2016-11-21', 'Toni M', 'Bahasa Inggris I', 'SI-36-05', '', 'tidak sesuai', 'tidak sesuai dengan RPS, tapi filmnya bagus pak '),
(3, '2016-11-21', 'Andi A', 'Kalkulus I', 'SI-36-04', '', 'tidak sesuai', 'tidak sesuai dengan RPS, tapi filmnya bagus pak!'),
(5, '2016-12-21', 'Andi A', 'Kalkulus I', 'SI-36-01', '', 'sesuai', 'sippp'),
(6, '2016-12-21', 'Andi A', 'Kalkulus I', 'SI-36-01', '', 'tidak sesuai', 'tidak sesuai pak, tapi film nya bagus :D'),
(7, '2016-12-21', 'Toni M', 'Aljabar Linear', 'SI-36-04', '', 'tidak sesuai', 'tidak sesuai dengan RPS pak, tapi film nya bagus! :D'),
(8, '2016-12-28', 'Andi A', 'Kalkulus I', 'SI-36-01', '', 'sesuai', 'blasbljas'),
(9, '2016-12-28', 'Andi A', 'Kalkulus I', 'SI-36-01', '', 'sesuai', 'asdasda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
