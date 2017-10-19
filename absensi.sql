-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 04:25 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `kd_matkul` varchar(9) DEFAULT NULL,
  `kd_mahasiswa` varchar(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`kd_matkul`, `kd_mahasiswa`, `waktu`) VALUES
(NULL, NULL, NULL),
(NULL, NULL, NULL),
('KS141313A', '5215100011', NULL),
('KS141313A', '5215100011', '2017-10-02 00:57:11'),
('KS141313A', '5215100011', '2017-10-02 01:00:33'),
('KS141313A', '5215100011', '2017-10-13 14:10:10'),
('KS141313A', '5215100011', '2017-10-19 19:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `authentication` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `authentication`) VALUES
('kurakura', '603060edde987ed5e386d0df3efab248', 'Husain', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(18) NOT NULL,
  `nama_dsn` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `authentication` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dsn`, `no_telp`, `password`, `alamat`, `authentication`) VALUES
('111111111111111111', 'Dosen Coba', '081234567892', '81dc9bdb52d04dc20036dbd8313ed055', 'jl.mawar 4', 0),
('111111111222222222', 'Dhania P', '081234567891', '12345678', 'Jl. Semolowaru', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_mahasiswa` varchar(10) DEFAULT NULL,
  `id_matkul` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_mahasiswa`, `id_matkul`) VALUES
('5215100011', 'KS141313A'),
('5215100011', 'KS141318A'),
('5215100011', 'KS141323A'),
('5215100039', 'KS141313B'),
('5215100039', 'KS141318B'),
('5215100039', 'KS141323B'),
('5215100123', 'KS141313A'),
('5215100123', 'KS141318A'),
('5215100123', 'KS141323A');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nrp` varchar(10) NOT NULL,
  `nama_depan` varchar(10) DEFAULT NULL,
  `nama_belakang` varchar(10) DEFAULT NULL,
  `kata_sandi` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `nama_depan`, `nama_belakang`, `kata_sandi`) VALUES
('5215100011', 'Hilda', 'Hanum', '70a801341e03668b2f036c842770765a'),
('5215100039', 'Dhania', 'Pratita', 'd2db33ffd291f36c8dd27bbdfa25fcbf'),
('5215100123', 'Husain', 'Panatas', '997c1605e5ad02749aeebbdead210d4d');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(9) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_matkul`, `nama_matkul`) VALUES
('KS141313A', 'Riset Operasi A'),
('KS141313B', 'Riset Operasi B'),
('KS141318A', 'Manajemen Resiko Teknologi Informasi A'),
('KS141318B', 'Manajemen Resiko Teknologi Informasi B'),
('KS141323A', 'Pengukuran Kinerja dan Evaluasi TI A'),
('KS141323B', 'Pengukuran Kinerja dan Evaluasi TI B');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `password`) VALUES
('5215100011', 'Hilda Hanum', ''),
('5215100039', 'Dhania Pratita L.', ''),
('5215100123', 'Husain Panatas', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD KEY `kd_matkul` (`kd_matkul`),
  ADD KEY `kd_mahasiswa` (`kd_mahasiswa`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nrp`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`kd_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`),
  ADD CONSTRAINT `absen_ibfk_2` FOREIGN KEY (`kd_mahasiswa`) REFERENCES `mahasiswa` (`nrp`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`nrp`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
