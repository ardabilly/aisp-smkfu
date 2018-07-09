-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 02:35 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `spesifikasi` varchar(35) NOT NULL,
  `lokasi_barang` varchar(40) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `jumlah_brg` int(5) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `jenis_brg` varchar(20) NOT NULL,
  `sumber_dana` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kode_barang`, `nama_barang`, `spesifikasi`, `lokasi_barang`, `kategori`, `jumlah_brg`, `kondisi`, `jenis_brg`, `sumber_dana`) VALUES
('B001', 'Buku Pemrograman Dasar', '30 Halaman', 'Lab RPL', 'Furniture', 1, 'Baru', 'Electronics', 'Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarbarang`
--

CREATE TABLE `tbl_keluarbarang` (
  `no_pinjam` varchar(8) NOT NULL,
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `penerima` varchar(35) NOT NULL,
  `jumlah_keluar` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keluarbarang`
--

INSERT INTO `tbl_keluarbarang` (`no_pinjam`, `kode_barang`, `nama_barang`, `tgl_keluar`, `penerima`, `jumlah_keluar`) VALUES
('PMJN001', 'B001', 'Buku Pemrograman Dasar', '2018-01-01', 'Rosmila', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masukbarang`
--

CREATE TABLE `tbl_masukbarang` (
  `id_masukbarang` varchar(11) NOT NULL,
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jumlah_masuk` int(8) NOT NULL,
  `kode_supplier` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masukbarang`
--

INSERT INTO `tbl_masukbarang` (`id_masukbarang`, `kode_barang`, `nama_barang`, `tgl_masuk`, `jumlah_masuk`, `kode_supplier`) VALUES
('BMSK001', 'B001', 'Buku Pemrograman Dasar', '2018-12-01', 2, 'SP001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `nomor_pinjam` varchar(8) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah_pinjam` int(7) NOT NULL,
  `peminjam` varchar(35) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`nomor_pinjam`, `tgl_pinjam`, `kode_barang`, `nama_barang`, `jumlah_pinjam`, `peminjam`, `tgl_kembali`, `keterangan`) VALUES
('PMJN001', '2018-01-01', 'B001', 'Buku Pemrograman Dasar', 1, 'Rosmila', '2018-02-02', 'Sedang dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stok`
--

CREATE TABLE `tbl_stok` (
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jml_barangmasuk` int(7) NOT NULL,
  `jml_barangkeluar` int(7) NOT NULL,
  `total_barang` int(8) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stok`
--

INSERT INTO `tbl_stok` (`kode_barang`, `nama_barang`, `jml_barangmasuk`, `jml_barangkeluar`, `total_barang`, `keterangan`) VALUES
('B002', 'Buku Pemrograman Dasar', 2, 1, 2, 'Segera');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `kode_supplier` varchar(5) NOT NULL,
  `nama_supplier` varchar(35) NOT NULL,
  `alamat_supplier` varchar(50) NOT NULL,
  `telp_supplier` varchar(25) NOT NULL,
  `kota_supplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`kode_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`, `kota_supplier`) VALUES
('SP001', 'Gramedia', 'Jl. raya pajajaran No 37', '02518356341', 'Bogor'),
('SP002', 'Electronics Best', 'Jl. Gajah Mada No 55', '02518356341', 'Jakarta'),
('SP003', 'Furniture Indonesia', 'Jl. raya tamrin', '02513534764', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(8) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
('001', 'admin', '4QrcOUm6Wau+VuBX8g+IPg==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tbl_masukbarang`
--
ALTER TABLE `tbl_masukbarang`
  ADD PRIMARY KEY (`id_masukbarang`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`nomor_pinjam`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
