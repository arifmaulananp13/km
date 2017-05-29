-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mei 2017 pada 16.15
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `km`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `eimport`
--

CREATE TABLE `eimport` (
  `idimport` int(2) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nim` int(100) DEFAULT NULL,
  `uts` int(12) DEFAULT NULL,
  `uas` int(12) DEFAULT NULL,
  `tugas` int(12) DEFAULT NULL,
  `total` int(12) DEFAULT NULL,
  `grade` varchar(3) DEFAULT NULL,
  `dosen` varchar(10) DEFAULT NULL,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `eimport`
--

INSERT INTO `eimport` (`idimport`, `nama`, `nim`, `uts`, `uas`, `tugas`, `total`, `grade`, `dosen`, `matkul`, `kelas`, `deskripsi`) VALUES
(36, 'ADRI', 1111, 50, 43, 0, 28, 'E', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(37, 'DANA', 1112, 60, 48, 25, 42, 'D', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(38, 'VELA', 1113, 53, 23, 54, 44, 'D', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(39, 'YUNI', 1114, 58, 15, 77, 53, 'C', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(40, 'AHMAD', 1115, 82, 53, 99, 80, 'A ', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(41, 'AZKA', 1116, 85, 20, 97, 70, 'AB ', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(42, 'AJI', 1117, 79, 80, 73, 77, 'AB ', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(43, 'DENI', 1118, 94, 48, 69, 70, 'AB ', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(44, 'TIA', 1119, 45, 20, 25, 29, 'E', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(45, 'YUDI', 1120, 82, 48, 94, 77, 'AB ', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(46, 'TIAS', 1121, 58, 0, 34, 31, 'E', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(47, 'TYO', 1122, 63, 56, 81, 68, 'B', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(48, 'HARI', 1123, 87, 78, 63, 75, 'AB ', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(49, 'AMIN', 1124, 85, 43, 96, 77, 'AB ', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(50, 'ADAM', 1125, 71, 50, 94, 74, 'AB', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(51, 'TRIZA', 1126, 76, 43, 99, 75, 'AB', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(52, 'TOBI', 1127, 91, 70, 90, 84, 'A', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(53, 'YONO', 1128, 74, 31, 78, 63, 'BC', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(54, 'ALIF', 1129, 66, 45, 87, 68, 'B', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(55, 'BANU', 1130, 87, 50, 100, 81, 'A', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(56, 'BIMO', 1131, 72, 43, 95, 73, 'AB', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(57, 'ZAKI', 1132, 49, 15, 72, 48, 'D', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(58, 'GANI', 1133, 64, 67, 11, 44, 'D', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(59, 'NINA', 1134, 96, 86, 96, 88, 'A', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(60, 'NONI', 1135, 88, 73, 50, 68, 'B', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(61, 'JAID', 1136, 73, 38, 83, 66, 'B', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(62, 'JUKI', 1137, 74, 35, 72, 61, 'BC', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(63, 'TALAM', 1138, 71, 35, 84, 65, 'B', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(64, 'MAMAT', 1139, 79, 36, 100, 74, 'AB', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(65, 'MUDA', 1140, 69, 27, 78, 60, 'BC', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(66, 'SONI', 1141, 49, 23, 84, 55, 'C', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(67, 'SIGI', 1142, 54, 36, 92, 64, 'BC', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(68, 'TATA', 1143, 81, 41, 75, 67, 'B', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(69, 'SURYA', 1144, 94, 58, 71, 74, 'AB', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the '),
(70, 'SONIA', 1145, 68, 40, 84, 66, 'B', 'Andi A', 'Fisika', 'SI-36-04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_bap`
--

CREATE TABLE `input_bap` (
  `id_bap` int(11) NOT NULL,
  `pertemuan` int(50) NOT NULL,
  `no_tanggal` date NOT NULL,
  `shift` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `materi` longtext NOT NULL,
  `materitambahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_bap`
--

INSERT INTO `input_bap` (`id_bap`, `pertemuan`, `no_tanggal`, `shift`, `ruangan`, `dosen`, `matkul`, `kelas`, `materi`, `materitambahan`) VALUES
(89, 1, '2017-04-12', '06:30 - 08:30', 'B101', 'Andi A', 'Fisika', 'SI-36-04', 'Metallic, Ionic, Vanderwalls,Covalent bonding', 'rumus percepatan'),
(90, 2, '2017-04-12', '12:30 - 14:30', 'B102', 'Andi A', 'Fisika', 'SI-36-04', 'Stress & strain curve', ''),
(91, 1, '2017-04-12', '08:30 - 10:30', 'B104', 'Budi R', 'Fisika', 'SI-36-02', ' Atomic structure ', ''),
(92, 2, '2017-04-12', '14:30 - 16:30', 'B101', 'Budi R', 'Fisika', 'SI-36-02', ' Atomic structure ', ''),
(93, 3, '2017-04-13', '06:30 - 08:30', 'B101', 'Andi A', 'Fisika', 'SI-36-04', 'Metallic, Ionic, Vanderwalls,Covalent bonding', ''),
(94, 3, '2017-04-13', '08:30 - 10:30', 'B104', 'Budi R', 'Fisika', 'SI-36-02', 'Stress & strain curve', ''),
(95, 1, '2017-04-15', '12:30 - 14:30', 'B101', 'Andi A', 'Kalkulus I', 'SI-36-01', 'Rumus luas segitiga', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_jadwal`
--

CREATE TABLE `input_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_jadwal`
--

INSERT INTO `input_jadwal` (`id_jadwal`, `dosen`, `matkul`, `kelas`, `hari`, `shift`, `ruangan`) VALUES
(12, 'Budi R', 'Fisika', 'SI-36-02', 'Kamis', '14:30 - 16:30', 'B101'),
(13, 'Budi R', 'Bahasa Indonesia', 'SI-36-04', 'Jumat', '06:30 - 08:30', 'B105'),
(14, 'Toni M', 'Bahasa Inggris I', 'SI-36-03', 'Senin', '12:30 - 14:30', 'B105'),
(15, 'Toni M', 'Bahasa Inggris I', 'SI-36-01', 'Sabtu', '08:30 - 10:30', 'B102'),
(16, 'Toni M', 'Matematika Diskret', 'SI-36-06', 'Sabtu', '16:30 - 18:30', 'B105'),
(17, 'Andi A', 'Kalkulus I', 'SI-36-01', 'Senin', '06:30 - 08:30', 'B101'),
(22, 'Toni M', 'Aljabar Linear', 'SI-36-06', 'Jumat', '16:30 - 18:30', 'B105'),
(23, 'Andi A', 'Fisika', 'SI-36-04', 'Senin', '12.30 - 14.30', 'B 105');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_nilai`
--

CREATE TABLE `input_nilai` (
  `id_nilai` int(5) NOT NULL,
  `dosen` varchar(20) NOT NULL,
  `matkul` varchar(20) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `no_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_nilai`
--

INSERT INTO `input_nilai` (`id_nilai`, `dosen`, `matkul`, `nilai`, `kelas`, `deskripsi`, `no_tanggal`) VALUES
(44, 'Andi A', 'Fisika', 'BAB_IV_Arif_Maulana_NP.docx', 'SI-36-04', 'aadsadassd', '2017-04-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_rps`
--

CREATE TABLE `input_rps` (
  `id_rps` int(11) NOT NULL,
  `pertemuan` int(50) NOT NULL,
  `materi` varchar(200) NOT NULL,
  `matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_rps`
--

INSERT INTO `input_rps` (`id_rps`, `pertemuan`, `materi`, `matkul`) VALUES
(4, 1, ' Atomic structure ', 'Fisika'),
(5, 1, 'Metallic, Ionic, Vanderwalls,Covalent bonding', 'Fisika'),
(6, 2, 'Stress & strain curve', 'Fisika'),
(7, 1, 'Rumus luas segitiga', 'Kalkulus%20I'),
(8, 2, 'Rumus luas persegi', 'Kalkulus I'),
(9, 3, 'Rumus keliling lingkaran', 'Kalkulus I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_comment`
--

CREATE TABLE `table_comment` (
  `id_comment` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `id_post` int(255) NOT NULL,
  `profile_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_comment`
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
-- Struktur dari tabel `table_dosen`
--

CREATE TABLE `table_dosen` (
  `id_dosen` int(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `kode_dosen` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_dosen`
--

INSERT INTO `table_dosen` (`id_dosen`, `nama_dosen`, `kode_dosen`) VALUES
(1, 'Andi A', 'd01'),
(2, 'Budi R', 'd02'),
(3, 'Toni M', 'd03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_hari`
--

CREATE TABLE `table_hari` (
  `id_hari` int(11) NOT NULL,
  `hari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_hari`
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
-- Struktur dari tabel `table_kelas`
--

CREATE TABLE `table_kelas` (
  `nama_kelas` varchar(50) NOT NULL,
  `id_kelas` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_kelas`
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
-- Struktur dari tabel `table_matkul`
--

CREATE TABLE `table_matkul` (
  `id_matkul` int(20) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_matkul`
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
-- Struktur dari tabel `table_pertemuan`
--

CREATE TABLE `table_pertemuan` (
  `id_pertemuan` int(11) NOT NULL,
  `pertemuan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_pertemuan`
--

INSERT INTO `table_pertemuan` (`id_pertemuan`, `pertemuan`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_post`
--

CREATE TABLE `table_post` (
  `id_post` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `profile_picture` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_post`
--

INSERT INTO `table_post` (`id_post`, `nama_user`, `judul`, `deskripsi`, `profile_picture`, `tanggal`, `waktu`) VALUES
(14, 'kaprodi', 'iPhone 5c screen not working properly', 'I got my iphone 5c last october and it has always worked fine until a couple weeks ago when the screen went totally cuckoo: i click on something and it takes me somewhere else, sometimes I click everywhere and it doesn''t do anything, other times I''m not even clicking the screen and it is moving, opening tabs in safari and swiping right or left.', 'avatar.png', '2017-01-18', '22:04:01'),
(15, 'ketua KK', 'How do I change calendar alert tones on iPhone 6?', 'I have changed the alert tone in Settings but the chimes (which are way to quiet for me to hear) are still the alert tone. In Settings, I went to Notifications, Calendar (badges, sound, alerts) and picked a loud enough sound under upcoming events. I changed all possible alerts in calendar just to be sure but still get the chimes instead of the alert I have chosen. It clearly shows my pick but uses something else.\r\nWhat am I missing?', 'ava3.png', '2017-01-18', '22:05:48'),
(16, 'dosen koor', 'Need to change card on Iphone upgrade program', 'I need to contact someone about charging my card on my iPhone Upgrade program. How do I do this.', 'ava4.png', '2017-01-18', '22:08:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_ruangan`
--

CREATE TABLE `table_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_ruangan`
--

INSERT INTO `table_ruangan` (`id_ruangan`, `ruangan`) VALUES
(1, 'B101'),
(2, 'B102'),
(3, 'B103'),
(4, 'B104'),
(5, 'B105');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_shift`
--

CREATE TABLE `table_shift` (
  `id_shift` int(11) NOT NULL,
  `shift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_shift`
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
-- Struktur dari tabel `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_level`
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
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `profile_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
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
(18, 'Toni M', '3333', '81dc9bdb52d04dc20036dbd8313ed055', 'Dosen Pengajar', 'asdsad.PNG'),
(19, 'Arif Maulana NP', '1106120096', '81dc9bdb52d04dc20036dbd8313ed055', 'Mahasiswa', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verif_bap`
--

CREATE TABLE `verif_bap` (
  `id_verif` int(11) NOT NULL,
  `pertemuan` int(50) NOT NULL,
  `no_tanggal` date NOT NULL,
  `shift` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `materiajar` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `namauser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `verif_bap`
--

INSERT INTO `verif_bap` (`id_verif`, `pertemuan`, `no_tanggal`, `shift`, `ruangan`, `dosen`, `matkul`, `kelas`, `materiajar`, `status`, `ket`, `namauser`) VALUES
(43, 1, '2017-04-12', '06:30 - 08:30', 'B101', 'Andi A', 'Fisika', 'SI-36-04', 'Metallic, Ionic, Vanderwalls,Covalent bonding.rumus percepatan', 'tidak sesuai', 'tidak sama sekali', 'Arif Maulana NP'),
(44, 2, '2017-04-12', '12:30 - 14:30', 'B102', 'Andi A', 'Fisika', 'SI-36-04', 'Stress & strain curve.', 'sesuai', '', 'Arif Maulana NP'),
(45, 1, '2017-04-12', '08:30 - 10:30', 'B104', 'Budi R', 'Fisika', 'SI-36-02', ' Atomic structure .', 'sesuai', '', 'Arif Maulana NP'),
(46, 2, '2017-04-12', '14:30 - 16:30', 'B101', 'Budi R', 'Fisika', 'SI-36-02', ' Atomic structure .', 'sesuai', '', 'Arif Maulana NP'),
(47, 3, '2017-04-13', '06:30 - 08:30', 'B101', 'Andi A', 'Fisika', 'SI-36-04', 'Metallic, Ionic, Vanderwalls,Covalent bonding.', 'sesuai', '', 'Arif Maulana NP'),
(48, 3, '2017-04-13', '08:30 - 10:30', 'B104', 'Budi R', 'Fisika', 'SI-36-02', 'Stress & strain curve.', 'sesuai', '', 'Arif Maulana NP'),
(49, 1, '2017-04-15', '12:30 - 14:30', 'B101', 'Andi A', 'Kalkulus I', 'SI-36-01', 'Rumus luas segitiga.', 'tidak sesuai', '', 'Arif Maulana NP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eimport`
--
ALTER TABLE `eimport`
  ADD PRIMARY KEY (`idimport`);

--
-- Indexes for table `input_bap`
--
ALTER TABLE `input_bap`
  ADD PRIMARY KEY (`id_bap`);

--
-- Indexes for table `input_jadwal`
--
ALTER TABLE `input_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `input_nilai`
--
ALTER TABLE `input_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `input_rps`
--
ALTER TABLE `input_rps`
  ADD PRIMARY KEY (`id_rps`);

--
-- Indexes for table `table_comment`
--
ALTER TABLE `table_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `table_dosen`
--
ALTER TABLE `table_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `table_hari`
--
ALTER TABLE `table_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `table_kelas`
--
ALTER TABLE `table_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `table_matkul`
--
ALTER TABLE `table_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `table_pertemuan`
--
ALTER TABLE `table_pertemuan`
  ADD PRIMARY KEY (`id_pertemuan`);

--
-- Indexes for table `table_post`
--
ALTER TABLE `table_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `table_ruangan`
--
ALTER TABLE `table_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `table_shift`
--
ALTER TABLE `table_shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `verif_bap`
--
ALTER TABLE `verif_bap`
  ADD PRIMARY KEY (`id_verif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eimport`
--
ALTER TABLE `eimport`
  MODIFY `idimport` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `input_bap`
--
ALTER TABLE `input_bap`
  MODIFY `id_bap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `input_jadwal`
--
ALTER TABLE `input_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `input_nilai`
--
ALTER TABLE `input_nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `input_rps`
--
ALTER TABLE `input_rps`
  MODIFY `id_rps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `table_comment`
--
ALTER TABLE `table_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `table_dosen`
--
ALTER TABLE `table_dosen`
  MODIFY `id_dosen` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `table_hari`
--
ALTER TABLE `table_hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `table_kelas`
--
ALTER TABLE `table_kelas`
  MODIFY `id_kelas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `table_matkul`
--
ALTER TABLE `table_matkul`
  MODIFY `id_matkul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `table_pertemuan`
--
ALTER TABLE `table_pertemuan`
  MODIFY `id_pertemuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `table_post`
--
ALTER TABLE `table_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `table_ruangan`
--
ALTER TABLE `table_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `table_shift`
--
ALTER TABLE `table_shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `verif_bap`
--
ALTER TABLE `verif_bap`
  MODIFY `id_verif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
