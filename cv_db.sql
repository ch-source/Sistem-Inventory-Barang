-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2021 pada 15.25
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_supplier` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_supplier` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_perusahaan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_merek` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_merek` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `periode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tahun` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_barang_masuk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `harga_beli` varchar(50) CHARACTER SET latin1 NOT NULL,
  `harga_jual` varchar(50) CHARACTER SET latin1 NOT NULL,
  `stok` varchar(50) CHARACTER SET latin1 NOT NULL,
  `satuan` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_supplier`, `nama_supplier`, `nama_perusahaan`, `id_kategori`, `nama_kategori`, `id_merek`, `nama_merek`, `nama_barang`, `periode`, `tahun`, `tgl_barang_masuk`, `harga_beli`, `harga_jual`, `stok`, `satuan`) VALUES
('BRG001', 'SPL002', 'chris', 'PT. SAP', 'KTG001', 'Samsung', 'MRK001', 'Samsung', 'Kursi Kayu', '6', '2021', '2021-07-08', '50000', '500000', '198', 'cm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang_keluar`
--

CREATE TABLE `tbl_barang_keluar` (
  `id_barang_keluar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_supplier` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_perusahaan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_merek` varchar(50) CHARACTER SET latin1 NOT NULL,
  `periode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tahun` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_barang_keluar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `stok` varchar(50) CHARACTER SET latin1 NOT NULL,
  `satuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jml_barang_keluar` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang_keluar`
--

INSERT INTO `tbl_barang_keluar` (`id_barang_keluar`, `id_barang`, `nama_supplier`, `nama_perusahaan`, `nama_kategori`, `nama_merek`, `periode`, `tahun`, `tgl_barang_keluar`, `stok`, `satuan`, `jml_barang_keluar`) VALUES
('IBK001', 'BRG001', 'Ave', 'PT. Indaco', 'Samsung', 'Samsung', '4', '2021', '2021-04-19', '600', 'cm', '400');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang_masuk`
--

CREATE TABLE `tbl_barang_masuk` (
  `id_barang_masuk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_supplier` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_perusahaan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_merek` varchar(50) CHARACTER SET latin1 NOT NULL,
  `periode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tahun` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_barang_masuk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `stok_awal` varchar(50) CHARACTER SET latin1 NOT NULL,
  `satuan` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang_masuk`
--

INSERT INTO `tbl_barang_masuk` (`id_barang_masuk`, `id_barang`, `nama_supplier`, `nama_perusahaan`, `nama_kategori`, `nama_merek`, `periode`, `tahun`, `tgl_barang_masuk`, `stok_awal`, `satuan`) VALUES
('IBM001', 'BRG001', 'Ave', 'PT. Indaco', 'Samsung', 'Samsung', '4', '2021', '2021-04-19', '200', 'cm'),
('IBM002', 'BRG001', 'Ave', 'PT. Indaco', 'Samsung', 'Samsung', '4', '2021', '2021-04-24', '100', 'cm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_karyawan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_tlpn` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status_user` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama_karyawan`, `jk`, `alamat`, `no_tlpn`, `email`, `status`, `status_user`) VALUES
('KRY001', 'Risna', 'Perempuan', 'Jln. tukad badung', '082339368112', 'mariaave110597@gmail.com', 'Karyawan', 'Ok'),
('KRY002', 'Desi', 'Perempuan', 'jln. tukad badung xix', '082339368112', 'desi@gmail.com', 'Owner', 'Ok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
('KTG001', 'Samsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_merek`
--

CREATE TABLE `tbl_merek` (
  `id_merek` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_merek` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_merek`
--

INSERT INTO `tbl_merek` (`id_merek`, `nama_merek`) VALUES
('MRK001', 'Samsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_return_barang`
--

CREATE TABLE `tbl_return_barang` (
  `id_return_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_supplier` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_perusahaan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_merek` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_return_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `periode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tahun` varchar(50) CHARACTER SET latin1 NOT NULL,
  `stok` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jml_return_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alasan` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_return_barang`
--

INSERT INTO `tbl_return_barang` (`id_return_barang`, `id_barang`, `nama_supplier`, `nama_perusahaan`, `nama_kategori`, `nama_merek`, `tgl_return_barang`, `periode`, `tahun`, `stok`, `jml_return_barang`, `alasan`) VALUES
('IRB001', 'BRG001', 'Ave', 'PT. Indaco', 'Samsung', 'Samsung', '2021-04-19', '1', '2021', '200', '2', 'rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_stok_opname`
--

CREATE TABLE `tbl_stok_opname` (
  `id_opname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_barang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_supplier` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_merek` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_barang_masuk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `stok` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_stok_opname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `periode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tahun` varchar(50) CHARACTER SET latin1 NOT NULL,
  `stok_opname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `selisih` varchar(50) CHARACTER SET latin1 NOT NULL,
  `keterangan` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_stok_opname`
--

INSERT INTO `tbl_stok_opname` (`id_opname`, `id_barang`, `nama_supplier`, `nama_kategori`, `nama_merek`, `tgl_barang_masuk`, `stok`, `tgl_stok_opname`, `periode`, `tahun`, `stok_opname`, `selisih`, `keterangan`) VALUES
('SOP001', 'BRG001', 'Ave', 'Samsung', 'Samsung', '2021-04-18', '200', '2021-04-18', '4', '2021', '200', '0', 'pass');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` varchar(50) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `tgl_masuk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlpn` varchar(50) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status_validasi` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama_supplier`, `nama_perusahaan`, `tgl_masuk`, `jk`, `alamat`, `no_tlpn`, `email`, `status_validasi`) VALUES
('SPL001', 'Ave', 'PT. Indaco', '2021-04-23', 'Perempuan', 'Jln. tukad badung', '082339368112', 'avesinthia11051997@gmail.com', 'Valid'),
('SPL002', 'chris', 'PT. SAP', '2021-04-24', 'Laki-laki', 'jln. tukad badung xix', '082339368112', 'chrissony184@gmail.com', 'Valid'),
('SPL003', 'Santi', 'PT. Satria', '2021-04-24', 'Perempuan', 'jln. tukad badung', '082339368112', 'santy@gmail.com', 'Valid'),
('SPL004', 'Kosmas Hatu', 'aku', '', 'Laki-laki', 'jljl', '08978787', 'kosmas@gmail.com', ''),
('SPL005', 'Yustus Egor', 'ffdf', '2021-07-07', 'Laki-laki', 'jljl', '08978787', 'yustus@gmail.com', ''),
('SPL006', 'Senis', 'ffdf', '2021-07-07', 'Laki-laki', 'jljl', '08978787', 'putu@gmail.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(50) NOT NULL,
  `id_karyawan` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `telepon_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_karyawan`, `nama_user`, `telepon_user`, `email_user`, `username`, `password`, `level`) VALUES
('USR001', 'KRY001', 'Ave', '082339368112', 'mariaave110597@gmail.com', 'admin', 'admin', 'Karyawan'),
('USR002', 'KRY002', 'Desi', '082339368112', 'desi@gmail.com', 'owner', 'owner', 'Owner');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_barang_keluar`
--
ALTER TABLE `tbl_barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indeks untuk tabel `tbl_barang_masuk`
--
ALTER TABLE `tbl_barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_merek`
--
ALTER TABLE `tbl_merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `tbl_return_barang`
--
ALTER TABLE `tbl_return_barang`
  ADD PRIMARY KEY (`id_return_barang`);

--
-- Indeks untuk tabel `tbl_stok_opname`
--
ALTER TABLE `tbl_stok_opname`
  ADD PRIMARY KEY (`id_opname`);

--
-- Indeks untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
