-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 07:28 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(10) NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `spesialis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `no_hp`, `spesialis`) VALUES
(2, 'dr.estu', '123', 'poli anak'),
(3, 'dr.estu', '081234', 'poli anak'),
(4, 'dr.maul', '081234', 'umum');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_pesan` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `tanggal` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id_pesan`, `nama`, `perihal`, `isi`, `waktu`, `tanggal`) VALUES
(1, '', '', '', '06:54:12', '18-Apr-202'),
(2, '', '', '', '06:55:19', '18-Apr-2020'),
(3, 'estu', 'tes', 'abcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabcabc', '06:56:26', '18-Apr-2020'),
(4, 'maul', '', 'baik', '06:56:56', '18-Apr-2020');

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `id_kwitansi` int(10) NOT NULL,
  `nama_pasien` varchar(20) NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `obat1` varchar(30) NOT NULL,
  `harga1` int(5) NOT NULL,
  `jumlah1` int(3) NOT NULL,
  `obat2` varchar(30) DEFAULT NULL,
  `harga2` int(5) DEFAULT NULL,
  `jumlah2` int(3) DEFAULT NULL,
  `obat3` varchar(30) DEFAULT NULL,
  `harga3` int(5) DEFAULT NULL,
  `jumlah3` int(3) DEFAULT NULL,
  `obat4` varchar(30) DEFAULT NULL,
  `harga4` int(5) DEFAULT NULL,
  `jumlah4` int(3) DEFAULT NULL,
  `jumlah_uang` int(5) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kwitansi`
--

INSERT INTO `kwitansi` (`id_kwitansi`, `nama_pasien`, `nama_dokter`, `obat1`, `harga1`, `jumlah1`, `obat2`, `harga2`, `jumlah2`, `obat3`, `harga3`, `jumlah3`, `obat4`, `harga4`, `jumlah4`, `jumlah_uang`, `tanggal`, `waktu`) VALUES
(2, 'maulana', 'dr.estu', 'promag', 7000, 2, '', 0, 0, '', 0, 0, '', 0, 0, 50000, '21-Jul-2020', '05:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jumlah`, `harga`, `keterangan`, `tanggal`) VALUES
(1, 'promag', 2, 7000, 'obat sakit maag', '23-May-2020'),
(2, 'inzana', 2, 5000, '', '23-May-2020');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `kode_pasien` varchar(5) DEFAULT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `usia` int(2) DEFAULT NULL,
  `jenkel` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `kode_pasien`, `nama`, `nik`, `usia`, `jenkel`, `alamat`, `keterangan`, `tanggal`, `waktu`) VALUES
(18, 'A003', 'maulana', '213', 12, 'Laki-laki', 'osaka', 'sudah Terdaftar', '14-May-2020', '05:14:16'),
(19, 'A003', 'nama', 'nik', 12, 'jenkel', 'osaka', 'Sudah Terdaftar', '14-May-2020', '03:57:44'),
(20, 'A002', 'maul', '070156', 12, 'Laki-laki', 'osaka', 'Sudah Terdaftar', '17-May-2020', '04:25:28'),
(21, 'A002', 'maul', '070156', 12, 'Laki-laki', 'osaka', 'Sudah Terdaftar', '17-May-2020', '04:25:28'),
(22, NULL, 'maulana', NULL, NULL, 'Laki-Laki', 'osaka', 'Tunggu Konfirmasi', '21-Jul-2020', '05:20:14'),
(23, 'a056', 'maul', '98712', 26, 'Laki-laki', 'osaka', 'Sudah Terdaftar', '21-Jul-2020', '05:22:38'),
(24, NULL, 'maulana', '123456', NULL, 'Laki-Laki', 'osaka', 'Tunggu Konfirmasi', '24-Jul-2020', '11:27:28'),
(25, NULL, 'ben', '1234', NULL, 'Laki-Laki', 'osaka', 'Tunggu Konfirmasi', '24-Jul-2020', '11:29:14'),
(26, NULL, 'ria', '12345', NULL, 'Laki-Laki', 'tangerang', 'Tunggu Konfirmasi', '24-Jul-2020', '11:29:54'),
(27, NULL, 'MAULANA', '2611', NULL, 'Laki-Laki', 'JEPANG', 'Tunggu Konfirmasi', '24-Jul-2020', '02:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_data` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kode_pasien` varchar(5) NOT NULL,
  `penyakit` text NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `obat` text,
  `jumlah` int(2) DEFAULT NULL,
  `keterangan` text,
  `status` varchar(10) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_data`, `nama`, `kode_pasien`, `penyakit`, `nama_dokter`, `obat`, `jumlah`, `keterangan`, `status`, `tanggal`, `waktu`) VALUES
(1, 'maulana', 'A003', 'batuk', 'MAUL', 'promag', 1, 'obat maag', 'sudah', '23-May-2020', '05:16:09'),
(2, 'maulana', '', 'pilek', 'dr.estu', NULL, NULL, NULL, 'tunggu', '21-Jul-2020', '05:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(10) NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `nama_pasien` varchar(20) NOT NULL,
  `resep` text NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `nama_dokter`, `nama_pasien`, `resep`, `tanggal`, `waktu`, `status`) VALUES
(2, 'd', 'e', '2 buah kecap', '15-Jun-2020', '07:15:01', 'Kwitansi'),
(3, 'a', 'b', '2 buah gula', '15-Jan-2020', '07:12:19', ''),
(6, 'dr.maul', 'maulana', 'halo', '25-Jun-2020', '08:04:22', ''),
(7, 'dr.estu', 'maulana', 'halo dia belum makan\r\n', '18-Jul-2020', '08:46:05', 'Kwitansi'),
(9, 'dr.maul', 'nama', 'halo aku belum makan', '18-Jul-2020', '08:59:14', 'Kwitansi'),
(10, 'dr.estu', 'nama', 'halo aku laper\r\n', '18-Jul-2020', '09:30:42', 'Kwitansi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `kode_user` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `kode_user`, `nama`, `username`, `password`, `hak_akses`) VALUES
(1, 0, 'maul', 'dokter', '57f842286171094855e51fc3a541c1e2', 'dokter'),
(2, 222, 'pangestu', 'pegawai', 'ado', 'pegawai'),
(3, 3334, 'pegawai 1', 'pegawai1', '57f842286171094855e51fc3a541c1e2', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`id_kwitansi`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_pesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `id_kwitansi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_data` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
