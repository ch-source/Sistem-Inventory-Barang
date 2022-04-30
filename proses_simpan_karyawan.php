<?php
include"koneksi.php";
$query_a = "SELECT max(id_karyawan) as maxId FROM tbl_karyawan";
$hasil_a = mysqli_query($connect,$query_a);
$data_a = mysqli_fetch_array($hasil_a);
$id_a = $data_a['maxId'];
$no_a = (int) substr($id_a, 3, 3);
$no_a++;
$char = "KRY";
$id_a= $char . sprintf("%03s", $no_a);

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alt = $_POST['alt'];
$notel = $_POST['notel'];
$email = $_POST['email'];
$status = $_POST['status'];

 $query2="INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama_karyawan` , `jk`, `alamat`, `no_tlpn`, `email`, `status`, `status_user`) VALUES ('$id_a', '$nama', '$jk','$alt', '$notel', '$email', '$status', '')";
  $sql2=mysqli_query($connect, $query2);
  if ($sql2) {
              echo "<script>alert('Data Karyawan Berhasil Di Simpan');
              document.location.href='dashboard_owner.php?p=data_karyawan'</script>\n";
              }else{
                echo "<script>alert('Oops !! Data Karyawan Gagal Di Simpan..');
                document.location.href='dashboard_owner.php?p=input_karyawan'</script>\n";
           }
?>

