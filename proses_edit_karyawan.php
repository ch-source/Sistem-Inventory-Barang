<?php 
include"koneksi.php";

$id=$_GET['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alt = $_POST['alt'];
$notel = $_POST['notel'];
$email = $_POST['email'];
$status = $_POST['status'];
    $query="UPDATE tbl_karyawan SEt nama_karyawan='$nama', jk='$jk', alamat='$alt', no_tlpn='$notel', email='$email', status='$status' WHERE id_karyawan='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Karyawan Berhasil Diubah');
      document.location.href='dashboard_owner.php?p=data_karyawan'</script>\n";
    }else{
      echo "<script>alert('Data Karyawan Gagal Diubah!');
      document.location.href='dashboard_owner.php?p=edit_karyawan&id=".$id."'</script>\n";
    }
?>