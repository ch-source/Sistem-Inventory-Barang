<?php
include"koneksi.php";
$query_user = "SELECT max(id_user) as maxId FROM tbl_user";
$hasil_user = mysqli_query($connect,$query_user);
$data_user = mysqli_fetch_array($hasil_user);
$iduser = $data_user['maxId'];
$noUser = (int) substr($iduser, 3, 3);
$noUser++;
$char = "USR";
$iduser= $char . sprintf("%03s", $noUser);

$karyawan = $_POST['karyawan'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$username = $_POST['username'];
$password = $_POST['password'];
$cek = mysqli_query($connect, "SELECT * FROM tbl_user WHERE username = '$username'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
   echo "<script>alert('Proses Registrasi Gagal!, Username Yang Anda Masukkan Sudah Digunakan, Masukkan Username Yang Berbeda');
    document.location.href='dashboard.php?p=input_users'</script>\n";
}else if ($result ==0) {
      $query2="INSERT INTO `tbl_user` (`id_user`, `id_karyawan`, `nama_user`, `username`, `password`, `level`) VALUES ('$iduser', '$karyawan', '$nama', '$username', '$password', '$jabatan')";
      $sql2=mysqli_query($connect, $query2);
      if ($sql2) {
        $query1 = "UPDATE tbl_karyawan SET status_user='Ok' WHERE id_karyawan='$karyawan'";
    $sql1 = mysqli_query($connect, $query1); 
    if ($sql2) {
        echo "<script>alert('User Baru Berhasil Ditambahkan.');
        document.location.href='dashboard_owner.php?p=data_users'</script>\n";
      }else{
        echo "<script>alert('Data User Gagal Disimpan !');
        document.location.href=dashboard_owner.php?p=input_users'</script>\n";
      }
    }
  }
?>