<?php
include "koneksi.php";
$query = "SELECT max(id_barang) as maxId FROM tbl_barang";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$idbarang = $data['maxId'];
$noUrut = (int) substr($idbarang, 3, 3);
$noUrut++;
$char = "BRG";
$idbarang= $char . sprintf("%03s", $noUrut);

$nim = $_POST['nim'];
$ns = $_POST['ns'];
$np = $_POST['np'];
$kategori = $_POST['kategori'];
$naka = $_POST['naka'];
$merek = $_POST['merek'];
$nm = $_POST['nm'];
$nama = $_POST['nama'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tgl = $_POST['tgl'];
$hb =$_POST['hb'];
$hrg = $_POST['hrg'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];


	$query1 = "INSERT INTO `tbl_barang` (`id_barang`, `id_supplier`, `nama_supplier`, `nama_perusahaan`, `id_kategori`, `nama_kategori`, `id_merek`, `nama_merek`, `nama_barang`, `periode`, `tahun`, `tgl_barang_masuk`, `harga_beli`, `harga_jual`,`stok`, `satuan`) VALUES ('$idbarang', '$nim', '$ns', '$np', '$kategori', '$naka', '$merek', '$nm', '$nama', '$bulan', '$tahun', '$tgl', '$hb', '$hrg', '$stok', '$satuan')";
	$sql1 = mysqli_query($connect, $query1); 
	if ($sql1) {
			echo "<script>alert('Proses Simpan Data Barang Berhasil');
                document.location.href='dashboard.php?p=data_barang'</script>\n";
		}else{
			echo "<script>alert('Proses Simpan Data Barang Gagal');
                document.location.href='dashboard.php?p=input_data_barang'</script>\n";
		}
?>
