<?php
include"koneksi.php";
$query_user = "SELECT max(id_kategori) as maxId FROM tbl_kategori";
$hasil_user = mysqli_query($connect,$query_user);
$data_user = mysqli_fetch_array($hasil_user);
$iduser = $data_user['maxId'];
$noUser = (int) substr($iduser, 3, 3);
$noUser++;
$char = "KTG";
$iduser= $char . sprintf("%03s", $noUser);


$nama = $_POST['nama'];

      $query2="INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES ('$iduser', '$nama')";
      $sql2=mysqli_query($connect, $query2);
      if ($sql2) {
        echo "<script>alert('Data Kategori Berhasil Disimpan');
        document.location.href='dashboard_owner.php?p=data_kategori'</script>\n";
      }else{
        echo "<script>alert('Data Kategori Gagal Disimpan !');
        document.location.href=dashboard_owner.php?p=data_kategori'</script>\n";
      }
?>