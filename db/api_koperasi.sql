-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2023 at 02:34 AM
-- Server version: 5.7.42
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL,
  `id_koperasi` varchar(100) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `kode_anggota` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telphon` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `id_koperasi`, `nama_anggota`, `kode_anggota`, `email`, `telphon`) VALUES
(8, '3', 'Muhammad Rifqi', '20230910152303', 'muhammad45rifki@gmail.com', '081927067602'),
(9, '3', 'Ali', '20230911020412', 'ali@gmail.com', '082124240977'),
(10, '3', 'SiAnu', '20230911035838', 'sianu@guepegel.com', '08123456789');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '1',
  `session_id` varchar(100) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `kode_barang`, `nama_barang`, `stok`, `harga`, `photo`, `keterangan`, `id_kategori`, `id_koperasi`, `jumlah`, `session_id`, `id_user`) VALUES
(77, 'BRG_00002', 'Bumbu Kuning', 10, 15000, 'https://www.sarimunik.com/wp-content/uploads/2018/09/bumbu-dasar-kuning.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 3, 1, '2j1vff8d7ni2ss8biu6f5rephi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pinjaman`
--

CREATE TABLE IF NOT EXISTS `jenis_pinjaman` (
  `id` int(11) NOT NULL,
  `kode_jenis_pinjaman` varchar(100) NOT NULL,
  `nama_jenis_pinjaman` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pinjaman`
--

INSERT INTO `jenis_pinjaman` (`id`, `kode_jenis_pinjaman`, `nama_jenis_pinjaman`) VALUES
(1, 'JP_0001', 'Biasa'),
(2, 'JP_00002', 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE IF NOT EXISTS `kas` (
  `id` int(11) NOT NULL,
  `kode_trx` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_kas` enum('kas_masuk','kas_keluar') NOT NULL,
  `kas_masuk` int(11) NOT NULL,
  `kas_keluar` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL,
  `kode_kategori` varchar(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kode_kategori`, `nama_kategori`) VALUES
(1, 'KD_00001', 'Peralatan Mandi'),
(2, 'KD_00002', 'Bumbu Dapur'),
(5, 'KD_000003', 'Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `koperasi`
--

CREATE TABLE IF NOT EXISTS `koperasi` (
  `id` int(11) NOT NULL,
  `kode_koperasi` varchar(255) NOT NULL,
  `nama_koperasi` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `maps` varchar(255) NOT NULL,
  `telphon` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koperasi`
--

INSERT INTO `koperasi` (`id`, `kode_koperasi`, `nama_koperasi`, `email`, `alamat`, `maps`, `telphon`) VALUES
(3, 'kop_pgs', 'Koperasi Pegangsaan', 'pgs@newrkiapp.com', 'jakarta', '-6.200000,106.816666', '0834563458345'),
(4, 'kop_graha_kas', 'Koperasi Graha Kas', 'graha_123@gmail.com', 'Kebayoran Baru Jakarta Selatan', '-6.200000,106.816666', '081927067602'),
(5, 'kop_111', 'Koperasi Laku', 'Kop@email.com', 'Jl. Raya Luas No.1', '', '081276543111');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_pinjaman`
--

CREATE TABLE IF NOT EXISTS `pembayaran_pinjaman` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_koperasi` int(11) DEFAULT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `session_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` enum('rki','koperasi','anggota') NOT NULL DEFAULT 'anggota',
  `id_koperasi` int(11) NOT NULL DEFAULT '0',
  `id_toko` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `nama`, `password`, `token`, `status`, `id_koperasi`, `id_toko`) VALUES
(5, 'rki', 'RKI', '827ccb0eea8a706c4c34a16891f84e7b', 'ba60836c05f74f20a4f27f52c39fe429f736906be1c5f6a90f61d2a2dfec3928e6d9d53dc786813400e9fcac708b66e9a69713682e32a7d9f37a820d', 'rki', 0, 0),
(7, 'kop_pgs', 'KOP PGS', '827ccb0eea8a706c4c34a16891f84e7b', 'f47ec7e79896ce69764ace557947d3d50f94a191c3dbc6e34e23fb4473957c9e9420b0e9076baf59c2329e7f12d82d1f4f52b20eff67f2fff6a619cc', 'koperasi', 3, 0),
(15, '081927067602', 'Rifqi', '827ccb0eea8a706c4c34a16891f84e7b', 'd879928e7ca185441c4eddb3f58a5827226d1593063671a1da96ef660d64adc9dec115d41fe17d4a12855d6fbe65164c5a451b5f85b6fb41533cb855', 'anggota', 3, 0),
(16, 'kop_graha_kas', 'KOP GRAHA KAS', '827ccb0eea8a706c4c34a16891f84e7b', 'null', 'koperasi', 4, 0),
(17, '082124240977', 'ALI', '827ccb0eea8a706c4c34a16891f84e7b', '2a94afacd1adeb02e0c199105a196b0860dfa8021378d2bc8cc241a5e8743d592bcaadbf28e7a8410883c488950400cf1216257ff40d1290ef555d77', 'anggota', 3, 0),
(18, 'kop_111', 'KOP 111', '827ccb0eea8a706c4c34a16891f84e7b', 'null', 'koperasi', 5, 0),
(19, '08123456789', 'DIKA', '827ccb0eea8a706c4c34a16891f84e7b', 'null', 'anggota', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `jenis_pinjaman` int(11) NOT NULL,
  `lama_angsuran` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approve` enum('diterima','pending','ditolak') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id`, `id_user`, `jumlah_pinjaman`, `jenis_pinjaman`, `lama_angsuran`, `keterangan`, `tanggal`, `approve`) VALUES
(3, 15, 500000, 1, 3, 'sample keterangan', '2023-09-07 12:33:00', 'diterima'),
(6, 17, 1000000, 2, 3, 'coba apapun', '2023-09-11 03:24:28', 'diterima'),
(7, 17, 1000000, 2, 3, 'test', '2023-09-11 04:36:03', 'diterima'),
(8, 17, 1000000, 2, 3, 'dika minjem duit buat nikah', '2023-09-11 04:36:34', 'diterima'),
(9, 17, 500000, 2, 3, 'test 2', '2023-09-11 04:40:59', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE IF NOT EXISTS `pos` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_koperasi` int(11) NOT NULL,
  `flag` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`id`, `kode_barang`, `nama_barang`, `stok`, `harga`, `photo`, `keterangan`, `id_kategori`, `id_koperasi`, `flag`) VALUES
(1, 'BRG_00001', 'Sampo Lifeboy', 10, 12000, 'https://assets.unileversolutions.com/v1/1634391.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 3, ''),
(2, 'BRG_00002', 'Bumbu Kuning', 10, 15000, 'https://www.sarimunik.com/wp-content/uploads/2018/09/bumbu-dasar-kuning.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, 3, ''),
(3, 'BRG_00003', 'Sikat Gigi', 10, 12000, 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1681963247/attached_image/cara-memilih-dan-merawat-sikat-gigi-0-alodokter.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 4, ''),
(4, 'BRG_00002', 'Garam Dapur', 10, 15000, 'https://id-test-11.slatic.net/p/874c730548c61897f5f55a47f88fadb8.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, 4, ''),
(5, 'BRG_00005', 'Minyak Goreng', 10, 20000, 'http://34.28.160.3/newApiRki/backend/barang/1694405585.jpg', 'ini yah', 2, 3, 'null'),
(7, 'BRG_00006', 'Sikat Gigi', 12, 20000, 'http://34.28.160.3/newApiRki/backend/barang/1694656587.jpg', 'Keterangan', 1, 3, 'null'),
(8, 'BRG_00008', 'Bawang', 2, 20000, 'http://34.28.160.3/newApiRki/backend/barang/1694407746.jpg', 'Keterangan', 2, 1, 'rki');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pinjaman`
--

CREATE TABLE IF NOT EXISTS `riwayat_pinjaman` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `jenis_pinjaman` int(11) NOT NULL,
  `lama_angsuran` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approve` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_pinjaman`
--

INSERT INTO `riwayat_pinjaman` (`id`, `id_user`, `jumlah_pinjaman`, `jenis_pinjaman`, `lama_angsuran`, `keterangan`, `tanggal`, `approve`) VALUES
(10, 17, 1000000, 2, 3, 'dika minjem duit buat nikah', '2023-09-11 04:42:55', 'diterima'),
(11, 17, 1000000, 2, 3, 'test', '2023-09-11 04:43:01', 'diterima'),
(12, 15, 500000, 1, 3, 'sample keterangan', '2023-09-11 04:43:08', 'diterima'),
(13, 17, 1000000, 2, 3, 'coba apapun', '2023-09-11 04:43:11', 'diterima'),
(14, 17, 500000, 2, 3, 'test 2', '2023-09-11 09:35:03', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_simpanan`
--

CREATE TABLE IF NOT EXISTS `riwayat_simpanan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_koperasi` varchar(100) NOT NULL,
  `kode_anggota` varchar(100) NOT NULL,
  `simpanan_pokok` int(11) NOT NULL,
  `simpanan_wajib` int(11) NOT NULL,
  `simpanan_sukarela` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_simpanan`
--

INSERT INTO `riwayat_simpanan` (`id`, `id_user`, `id_koperasi`, `kode_anggota`, `simpanan_pokok`, `simpanan_wajib`, `simpanan_sukarela`, `created_at`) VALUES
(7, 17, '3', '20230910152303', 3000000, 200000, 230000, '0000-00-00 00:00:00'),
(8, 19, '3', '20230911035838', 200000, 100000, 50000, '2023-09-11 04:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE IF NOT EXISTS `simpanan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_koperasi` varchar(100) NOT NULL,
  `kode_anggota` varchar(100) NOT NULL,
  `simpanan_pokok` int(11) NOT NULL,
  `simpanan_wajib` int(11) NOT NULL,
  `simpanan_sukarela` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id`, `id_user`, `id_koperasi`, `kode_anggota`, `simpanan_pokok`, `simpanan_wajib`, `simpanan_sukarela`, `created_at`) VALUES
(10, 15, '3', '20230910152303', 3000000, 200000, 230000, '2023-09-10 20:34:31'),
(11, 17, '3', '20230910152303', 3000000, 200000, 230000, '2023-09-10 20:34:31'),
(12, 19, '3', '20230911035838', 200000, 100000, 50000, '2023-09-11 04:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE IF NOT EXISTS `toko` (
  `id` int(11) NOT NULL,
  `kode_toko` varchar(100) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_koperasi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `kode_toko`, `nama_toko`, `email`, `alamat`, `id_koperasi`) VALUES
(2, 'TK_000001', 'Toko HP', 'andika@gmail.com', 'jakarta', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_pinjaman`
--
ALTER TABLE `jenis_pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_pinjaman`
--
ALTER TABLE `pembayaran_pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_pinjaman`
--
ALTER TABLE `riwayat_pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_simpanan`
--
ALTER TABLE `riwayat_simpanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `jenis_pinjaman`
--
ALTER TABLE `jenis_pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `koperasi`
--
ALTER TABLE `koperasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pembayaran_pinjaman`
--
ALTER TABLE `pembayaran_pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `riwayat_pinjaman`
--
ALTER TABLE `riwayat_pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `riwayat_simpanan`
--
ALTER TABLE `riwayat_simpanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
