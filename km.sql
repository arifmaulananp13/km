-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 01:28 PM
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
-- Table structure for table `eimport`
--

CREATE TABLE IF NOT EXISTS `eimport` (
  `idimport` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `nim` int(100) DEFAULT NULL,
  `uts` int(12) DEFAULT NULL,
  `uas` int(12) DEFAULT NULL,
  `quiz` int(12) DEFAULT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`idimport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `eimport`
--

INSERT INTO `eimport` (`idimport`, `nama`, `nim`, `uts`, `uas`, `quiz`, `file`) VALUES
(33, 'roy', 111, 60, 75, 75, ''),
(34, 'adi', 112, 70, 85, 75, ''),
(35, 'budi', 113, 80, 90, 80, ''),
(36, 'hana', 114, 90, 95, 80, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `input_bap`
--

INSERT INTO `input_bap` (`id_bap`, `no_tanggal`, `dosen`, `matkul`, `kelas`, `materi`) VALUES
(56, '2017-03-07', 'Andi A', 'Fisika', 'SI-36-04', 'abcd'),
(57, '2017-03-07', 'Andi A', 'Fisika', 'SI-36-04', 'haha'),
(58, '2017-03-07', 'Andi A', 'Fisika', 'SI-36-04', 'blabla'),
(59, '2017-03-07', 'Andi A', 'Fisika', 'SI-36-04', 'hahaha'),
(60, '2017-03-07', 'Andi A', 'Kalkulus I', 'SI-36-01', '1. blabla2. hahaha3. .....'),
(61, '2017-03-07', 'Andi A', 'Kalkulus I', 'SI-36-01', 'hihihihi'),
(62, '2017-03-07', 'Budi R', 'Fisika', 'SI-36-02', 'lalala'),
(63, '2017-03-07', 'Budi R', 'Fisika', 'SI-36-02', 'xixixixi'),
(64, '2017-03-07', 'Budi R', 'Fisika', 'SI-36-02', 'jiahaha'),
(65, '2017-03-07', 'Budi R', 'Fisika', 'SI-36-02', 'jajajaja'),
(66, '2017-03-08', 'Toni M', 'Bahasa Inggris I', 'SI-36-03', 'hmm'),
(67, '2017-03-08', 'Toni M', 'Bahasa Inggris I', 'SI-36-01', 'oh yeah');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `input_jadwal`
--

INSERT INTO `input_jadwal` (`id_jadwal`, `dosen`, `matkul`, `kelas`, `hari`, `shift`) VALUES
(7, 'Andi A', 'Fisika', 'SI-36-04', 'Senin', '06:30 - 08:30'),
(8, 'Andi A', 'Fisika', 'SI-36-04', 'Rabu', '12:30 - 14:30'),
(9, 'Andi A', 'Kalkulus I', 'SI-36-01', 'Selasa', '12:30 - 14:30'),
(10, 'Andi A', 'Kalkulus I', 'SI-36-01', 'Jumat', '14:30 - 16:30'),
(11, 'Budi R', 'Fisika', 'SI-36-02', 'Rabu', '08:30 - 10:30'),
(12, 'Budi R', 'Fisika', 'SI-36-02', 'Kamis', '14:30 - 16:30'),
(13, 'Budi R', 'Bahasa Indonesia', 'SI-36-04', 'Jumat', '06:30 - 08:30'),
(14, 'Toni M', 'Bahasa Inggris I', 'SI-36-03', 'Senin', '12:30 - 14:30'),
(15, 'Toni M', 'Bahasa Inggris I', 'SI-36-01', 'Sabtu', '08:30 - 10:30');

-- --------------------------------------------------------

--
-- Table structure for table `input_nilai`
--

CREATE TABLE IF NOT EXISTS `input_nilai` (
  `id_nilai` int(5) NOT NULL AUTO_INCREMENT,
  `dosen` varchar(20) NOT NULL,
  `matkul` varchar(20) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `no_tanggal` date NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `input_nilai`
--

INSERT INTO `input_nilai` (`id_nilai`, `dosen`, `matkul`, `nilai`, `kelas`, `no_tanggal`) VALUES
(7, 'Andi A', 'Kalkulus I', 'belajar-php-dengan-framework-code-igniter1.pdf', 'SI-36-01', '2016-12-12'),
(9, 'Toni M', 'Matematika Diskret', 'outsourcing24.pdf', 'SI-36-06', '2016-12-31'),
(10, 'Budi R', 'Bahasa Indonesia', 'nilai.xlsx', 'SI-36-04', '2016-11-27'),
(11, 'Andi A', 'Kalkulus I', 'req__1459999527_84e7e771a1ecbed51f214592fe380517.pdf', 'SI-36-01', '2017-01-09'),
(12, 'Andi A', 'Kalkulus I', '', 'SI-36-01', '2017-11-01'),
(13, 'Budi R', 'Fisika', 'nilai1.xlsx', 'SI-36-02', '2017-01-01'),
(14, 'Toni M', 'Aljabar Linear', '', 'SI-36-04', '2017-02-01'),
(15, 'Andi A', 'Kalkulus I', 'nilai.pdf', 'SI-36-01', '2017-12-01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `input_rps`
--

INSERT INTO `input_rps` (`id_rps`, `dosen`, `matkul`, `rps`) VALUES
(7, 'Toni M', 'Matematika Diskret', 'kopas_CI.docx'),
(9, 'Andi A', 'Kalkulus I', 'proposal_inov.docx'),
(10, 'Toni M', 'Bahasa Indonesia', 'Cover_Letter.docx'),
(11, 'Budi R', 'Fisika', 'Tugas-Besar.docx'),
(12, 'Andi A', 'Aljabar Linear', 'Landasan_Teori_APSI.docx'),
(13, 'Andi A', 'Kalkulus I', 'SURKET_FRI_2014.docx'),
(14, 'Budi R', 'Aljabar Linear', 'aa.jpg');

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
  `profile_picture` varchar(50) NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `table_comment`
--

INSERT INTO `table_comment` (`id_comment`, `nama_user`, `comment`, `tanggal`, `id_post`, `profile_picture`) VALUES
(31, 'ketua KK', 'It sounds as if your digitizer is failing. Make an appointment at the Genius Bar at your local Apple Store', '2017-01-18', 14, 'ava3.png'),
(32, 'dosen koor', 'If you are running iOS 10.0.1 or later, tap Settings > Sounds and scroll down to Calendar Alerts to select the tone you wish to use.', '2017-01-18', 15, 'ava4.png'),
(33, 'dekan', 'Hi\r\n \r\nFollow the instructions in the terms and conditions for the iPhone Upgrade Program in your country.\r\n \r\nFor example, in the US, contact Citizens One at 1-888-201-6306.', '2017-01-18', 16, 'ava2.png'),
(34, 'dekan', 'Hi\r\n \r\nFollow the instructions in the terms and conditions for the iPhone Upgrade Program in your country.\r\n \r\nFor example, in the US, contact Citizens One at 1-888-201-6306.', '2017-01-18', 14, 'ava2.png'),
(35, 'kaprodi', 'thanks guys', '2017-01-18', 14, 'avatar.png'),
(36, 'ketua KK', 'blabla', '2017-01-20', 14, 'ava3.png');

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
  `profile_picture` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `table_post`
--

INSERT INTO `table_post` (`id_post`, `nama_user`, `judul`, `deskripsi`, `profile_picture`, `tanggal`, `waktu`) VALUES
(14, 'kaprodi', 'iPhone 5c screen not working properly', 'I got my iphone 5c last october and it has always worked fine until a couple weeks ago when the screen went totally cuckoo: i click on something and it takes me somewhere else, sometimes I click everywhere and it doesn''t do anything, other times I''m not even clicking the screen and it is moving, opening tabs in safari and swiping right or left.', 'avatar.png', '2017-01-18', '22:04:01'),
(15, 'ketua KK', 'How do I change calendar alert tones on iPhone 6?', 'I have changed the alert tone in Settings but the chimes (which are way to quiet for me to hear) are still the alert tone. In Settings, I went to Notifications, Calendar (badges, sound, alerts) and picked a loud enough sound under upcoming events. I changed all possible alerts in calendar just to be sure but still get the chimes instead of the alert I have chosen. It clearly shows my pick but uses something else.\r\nWhat am I missing?', 'ava3.png', '2017-01-18', '22:05:48'),
(16, 'dosen koor', 'Need to change card on Iphone upgrade program', 'I need to contact someone about charging my card on my iPhone Upgrade program. How do I do this.', 'ava4.png', '2017-01-18', '22:08:43');

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
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id_test` int(50) NOT NULL AUTO_INCREMENT,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `matkul`, `kelas`, `dosen`) VALUES
(1, 'Fisika', 'SI-36-02', 'Budi R');

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
  `profile_picture` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `profile_picture`) VALUES
(5, 'dekan', '1', '81dc9bdb52d04dc20036dbd8313ed055', 'Dekan', 'ava2.png'),
(6, 'wakil dekan', '2', '81dc9bdb52d04dc20036dbd8313ed055', 'Wakil Dekan ', 'ava3.png'),
(7, 'kaprodi', '3', '81dc9bdb52d04dc20036dbd8313ed055', 'Kaprodi', 'avatar.png'),
(8, 'sekretaris kaprodi', '4', '81dc9bdb52d04dc20036dbd8313ed055', 'Sekretaris Kaprodi', 'ava4.png'),
(9, 'ketua KK', '5', '81dc9bdb52d04dc20036dbd8313ed055', 'Ketua Kelompok Keahlian', 'ava3.png'),
(10, 'dosen koor', '6', '81dc9bdb52d04dc20036dbd8313ed055', 'Dosen Koordinator', 'ava4.png'),
(11, 'dosen pengajar', '7', '81dc9bdb52d04dc20036dbd8313ed055', 'Dosen Pengajar', 'avatar.png'),
(12, 'mahasiswa', '8', '81dc9bdb52d04dc20036dbd8313ed055', 'Mahasiswa', 'ava2.png'),
(14, 'Andi A', '1111', '81dc9bdb52d04dc20036dbd8313ed055', 'Dosen Pengajar', 'Bnrwwt4IIAAlExv.jpg'),
(17, 'Budi R', '2222', '81dc9bdb52d04dc20036dbd8313ed055', 'Dosen Pengajar', 'c76761d36eaf813e08a3fccd61ced3271.jpg'),
(18, 'Toni M', '3333', '81dc9bdb52d04dc20036dbd8313ed055', 'Dosen Pengajar', 'asdsad.PNG');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `verif_bap`
--

INSERT INTO `verif_bap` (`id_verif`, `no_tanggal`, `dosen`, `matkul`, `kelas`, `materi`, `status`, `ket`) VALUES
(15, '2017-03-07', 'Andi A', 'Fisika', 'SI-36-04', 'abcd', 'sesuai', ''),
(16, '2017-03-07', 'Andi A', 'Fisika', 'SI-36-04', 'hehehe', 'tidak sesuai', ''),
(17, '2017-03-07', 'Andi A', 'Fisika', 'SI-36-04', 'blablabla', 'sesuai', ''),
(18, '2017-03-07', 'Andi A', 'Fisika', 'SI-36-04', 'hahaha', 'tidak sesuai', ''),
(19, '2017-03-07', 'Andi A', 'Kalkulus I', 'SI-36-01', '1. blabla2. hahaha3. .....', 'sesuai', ''),
(20, '2017-03-07', 'Andi A', 'Kalkulus I', 'SI-36-01', 'hihihihi', 'sesuai', ''),
(21, '2017-03-07', 'Budi R', 'Fisika', 'SI-36-02', 'lalala', 'tidak sesuai', ''),
(22, '2017-03-07', 'Budi R', 'Fisika', 'SI-36-02', 'xixixixi', 'sesuai', ''),
(23, '2017-03-07', 'Budi R', 'Fisika', 'SI-36-02', 'jiahaha', 'sesuai', ''),
(24, '2017-03-07', 'Budi R', 'Fisika', 'SI-36-02', 'jajajaja', 'sesuai', ''),
(25, '2017-03-08', 'Toni M', 'Bahasa Inggris I', 'SI-36-03', 'hmm', 'sesuai', ''),
(26, '2017-03-08', 'Toni M', 'Bahasa Inggris I', 'SI-36-01', 'oh yeah', 'tidak sesuai', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
