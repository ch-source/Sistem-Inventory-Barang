<?php
include"koneksi.php";
session_start();

$id=$_GET['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

$data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
if ($data['level'] == 'Owner') {
  $iduser="".$data['id_user']."";

  $query2="UPDATE tbl_user SET nama_user='$nama', level='$jabatan' WHERE id_user='$id'";
  $sql2=mysqli_query($connect, $query2);
      if ($sql2) {
        if ($id==$iduser) {
          echo "<script>alert('Data Anda Berhasil Diubah Silahkan Login Lagi');
          document.location.href='index.php'</script>\n";
        }else{
          echo "<script>alert('Data User Berhasil Diubah.');
          document.location.href='dashboard_owner.php?p=data_users'</script>\n";
        }
      }else{
        echo "<script>alert('Data User Gagal Diubah !');
        document.location.href=dashboard_owner.php?p=edit_users&id=".$id."'</script>\n";
      }
    }
?>