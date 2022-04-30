<?php 
include"koneksi.php";

$id=$_GET['id'];
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

    $query="UPDATE tbl_stok_opname SEt id_barang='$nim', nama_supplier='$supplier', nama_kategori='$kategori', nama_merek='$merek', tgl_barang_masuk='$tbm', stok='$stok', periode='$bulan', tahun='$tahun', tgl_stok_opname='$tgl', stok_opname='$so', selisih='$selisih', keterangan='$ktr' WHERE id_opname='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data SO Berhasil Diubah');
      document.location.href='dashboard.php?p=data_stok_opname'</script>\n";
    }else{
      echo "<script>alert('Data SO Gagal Diubah!');
      document.location.href='dashboard.php?p=edit_stok_opname&id=".$id."'</script>\n";
    }
?>
