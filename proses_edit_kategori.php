<?php 
include"koneksi.php";

$id=$_GET['id'];
$nama = $_POST['nama'];

    $query="UPDATE tbl_kategori SEt nama_kategori='$nama' WHERE id_kategori='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Kategori Berhasil Diubah');
      document.location.href='dashboard_owner.php?p=data_kategori'</script>\n";
    }else{
      echo "<script>alert('Data Kategori Gagal Diubah!');
      document.location.href='dashboard_owner.php?p=edit_kategori&id=".$id."'</script>\n";
    }
?>