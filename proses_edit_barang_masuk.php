<?php 
include"koneksi.php";

$id=$_GET['id'];
$nim = $_POST['nim'];
$supplier = $_POST['supplier'];
$np = $_POST['np'];
$kategori = $_POST['kategori'];
$merek = $_POST['merek'];
$satuan = $_POST['satuan'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tgl = $_POST['tgl'];
$so =$_POST['so'];

$query_barang="SELECT * FROM tbl_barang WHERE id_barang='$nim'";
$sql_barang=mysqli_query($connect, $query_barang);
$data_barang=mysqli_fetch_array($sql_barang);
$stok=$data_barang['stok']+$so;

    $query="UPDATE tbl_barang_masuk SEt id_barang='$nim', nama_supplier='$supplier', nama_perusahaan='$np', nama_kategori='$kategori', nama_merek='$merek', satuan='$satuan', periode='$bulan', tahun='$tahun', tgl_barang_masuk='$tgl', stok_awal='$so' WHERE id_barang_masuk='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
    	$query_r="UPDATE tbl_barang SET stok='$stok' WHERE id_barang='$nim'";
               $sql_r=mysqli_query($connect, $query_r);
               if ($query_r) {
      echo "<script>alert('Data Barang Masuk Berhasil Diubah');
      document.location.href='dashboard.php?p=data_barang_masuk'</script>\n";
    }else{
      echo "<script>alert('Data Barang Masuk Gagal Diubah!');
      document.location.href='dashboard.php?p=edit_barang_masuk&id=".$id."'</script>\n";
    }
}
?>
