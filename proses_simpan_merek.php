<?php
include"koneksi.php";
$query_user = "SELECT max(id_merek) as maxId FROM tbl_merek";
$hasil_user = mysqli_query($connect,$query_user);
$data_user = mysqli_fetch_array($hasil_user);
$iduser = $data_user['maxId'];
$noUser = (int) substr($iduser, 3, 3);
$noUser++;
$char = "MRK";
$iduser= $char . sprintf("%03s", $noUser);


$nama = $_POST['nama'];

      $query2="INSERT INTO `tbl_merek` (`id_merek`, `nama_merek`) VALUES ('$iduser', '$nama')";
      $sql2=mysqli_query($connect, $query2);
      if ($sql2) {
        echo "<script>alert('Data Merek Berhasil Disimpan');
        document.location.href='dashboard_owner.php?p=data_merek'</script>\n";
      }else{
        echo "<script>alert('Data Merek Gagal Disimpan !');
        document.location.href=dashboard_owner.php?p=data_merek'</script>\n";
      }
?>