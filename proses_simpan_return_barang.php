<?php
include "koneksi.php";
$query = "SELECT max(id_return_barang) as maxId FROM tbl_return_barang";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$idbarang = $data['maxId'];
$noUrut = (int) substr($idbarang, 3, 3);
$noUrut++;
$char = "IRB";
$idbarang= $char . sprintf("%03s", $noUrut);

$nim = $_POST['nim'];
$supplier = $_POST['supplier'];
$np = $_POST['np'];
$kategori = $_POST['kategori'];
$merek = $_POST['merek'];
$tgl = $_POST['tgl'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$stk =$_POST['stk'];
$jml = $_POST['jml'];
$alasan = $_POST['alasan'];

$query_barang="SELECT * FROM tbl_barang WHERE id_barang='$nim'";
$sql_barang=mysqli_query($connect, $query_barang);
$data_barang=mysqli_fetch_array($sql_barang);
$stok=$data_barang['stok'] - $jml;

	$query1 = "INSERT INTO `tbl_return_barang` (`id_return_barang`, `id_barang`, `nama_supplier`, `nama_perusahaan`, `nama_kategori`, `nama_merek`, `tgl_return_barang`, `periode`, `tahun`, `stok`, `jml_return_barang`, `alasan`) VALUES ('$idbarang', '$nim', '$supplier', '$np', '$kategori', '$merek', '$tgl', '$bulan', '$tahun', '$stk', '$jml', '$alasan')";
	$sql1 = mysqli_query($connect, $query1); 
	if ($sql1) {
		$query_r="UPDATE tbl_barang SET stok='$stok' WHERE id_barang='$nim'";
               $sql_r=mysqli_query($connect, $query_r);
               if ($query_r) {
			echo "<script>alert('Proses Simpan Data Return Barang Berhasil');
                document.location.href='dashboard.php?p=data_return_barang'</script>\n";
		}else{
			echo "<script>alert('Proses Simpan Data Return Barang Gagal');
                document.location.href='dashboard.php?p=input_return_barang'</script>\n";
		}
	}
?>
