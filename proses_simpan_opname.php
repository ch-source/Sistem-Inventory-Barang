<?php
include "koneksi.php";
$query = "SELECT max(id_opname) as maxId FROM tbl_stok_opname";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);
$idbarang = $data['maxId'];
$noUrut = (int) substr($idbarang, 3, 3);
$noUrut++;
$char = "SOP";
$idbarang= $char . sprintf("%03s", $noUrut);

$nim = $_POST['nim'];
$supplier = $_POST['supplier'];
$kategori = $_POST['kategori'];
$merek = $_POST['merek'];
$tbm = $_POST['tbm'];
$stok = $_POST['stok'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tgl = $_POST['tgl'];
$so =$_POST['so'];
$selisih = $_POST['selisih'];
$ktr = $_POST['ktr'];


	$query1 = "INSERT INTO `tbl_stok_opname` (`id_opname`, `id_barang`, `nama_supplier`, `nama_kategori`, `nama_merek`, `tgl_barang_masuk`, `stok`, `periode`, `tahun`, `tgl_stok_opname`, `stok_opname`, `selisih`, `keterangan`) VALUES ('$idbarang', '$nim', '$supplier', '$kategori', '$merek', '$tbm', '$stok', '$bulan', '$tahun', '$tgl', '$so', '$selisih', '$ktr')";
	$sql1 = mysqli_query($connect, $query1); 
	if ($sql1) {
			echo "<script>alert('Proses Simpan Data SO Berhasil');
                document.location.href='dashboard.php?p=data_stok_opname'</script>\n";
		}else{
			echo "<script>alert('Proses Simpan Data SO Gagal');
                document.location.href='dashboard.php?p=input_stok_opname'</script>\n";
		}
?>
