<?php
include "koneksi.php";
$query = "SELECT max(id_barang_masuk) as maxId FROM tbl_barang_masuk";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$idbarang = $data['maxId'];
$noUrut = (int) substr($idbarang, 3, 3);
$noUrut++;
$char = "IBM";
$idbarang= $char . sprintf("%03s", $noUrut);

$nim = $_POST['nim'];
$supplier = $_POST['supplier'];
$np = $_POST['np'];
$kategori = $_POST['kategori'];
$merek = $_POST['merek'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tgl = $_POST['tgl'];
$so =$_POST['so'];
$satuan = $_POST['satuan'];

$query_barang="SELECT * FROM tbl_barang WHERE id_barang='$nim'";
$sql_barang=mysqli_query($connect, $query_barang);
$data_barang=mysqli_fetch_array($sql_barang);
$stok=$data_barang['stok']+$so;

	$query1 = "INSERT INTO `tbl_barang_masuk` (`id_barang_masuk`, `id_barang`, `nama_supplier`, `nama_perusahaan`, `nama_kategori`, `nama_merek`, `periode`, `tahun`, `tgl_barang_masuk`, `stok_awal`, `satuan`) VALUES ('$idbarang', '$nim', '$supplier', '$np', '$kategori', '$merek', '$bulan', '$tahun', '$tgl', '$so', '$satuan')";
	$sql1 = mysqli_query($connect, $query1); 
	if ($sql1) {
		$query_r="UPDATE tbl_barang SET stok='$stok' WHERE id_barang='$nim'";
               $sql_r=mysqli_query($connect, $query_r);
               if ($query_r) {
			echo "<script>alert('Proses Simpan Data Barang Masuk Berhasil');
                document.location.href='dashboard.php?p=data_barang_masuk'</script>\n";
		}else{
			echo "<script>alert('Proses Simpan Data Barang Masuk Gagal');
                document.location.href='dashboard.php?p=input_barang_masuk'</script>\n";
		}
	}
?>
