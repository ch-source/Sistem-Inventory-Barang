<?php 
include"koneksi.php";

$id=$_GET['id'];
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

    $query="UPDATE tbl_barang SEt id_supplier='$nim', nama_supplier='$ns', nama_perusahaan='$np', id_kategori='$kategori', nama_kategori='$naka', id_merek='$merek', nama_merek='$nm', nama_barang='$nama', periode='$bulan', tahun='$tahun', tgl_barang_masuk='$tgl', harga_beli='$hb', harga_jual='$hrg', stok='$stok', satuan='$satuan' WHERE id_barang='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Barang Berhasil Diubah');
      document.location.href='dashboard.php?p=data_barang'</script>\n";
    }else{
      echo "<script>alert('Data Barang Gagal Diubah!');
      document.location.href='dashboard.php?p=edit_barang&id=".$id."'</script>\n";
    }
?>
