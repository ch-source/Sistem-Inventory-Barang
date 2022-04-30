<?php 
include"koneksi.php";

$id=$_GET['id'];
$nama = $_POST['nama'];

    $query="UPDATE tbl_merek SEt nama_merek='$nama' WHERE id_merek='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Merek Berhasil Diubah');
      document.location.href='dashboard_owner.php?p=data_merek'</script>\n";
    }else{
      echo "<script>alert('Data Merek Gagal Diubah!');
      document.location.href='dashboard_owner.php?p=edit_merek&id=".$id."'</script>\n";
    }
?>