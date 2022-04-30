<?php
 session_start();
include "koneksi.php";
    if (isset($_POST['masuk'])) {
        $user = $_POST['Username'];
        $pass = $_POST['Password'];

        $cek = mysqli_query($connect, "SELECT username, password, level FROM tbl_user WHERE username = '$user' AND password = '$pass'");
        $result = mysqli_num_rows($cek);
        $data = mysqli_fetch_array($cek);
        if ($result > 0) {
            if ($data['level']=='Owner') {
                $_SESSION['masuk'] = $user;
                header("location:dashboard_owner.php");
            }elseif ($data['level']=='Karyawan') {
                $_SESSION['masuk'] = $user;
                header("location:dashboard.php");
            }
        }else if ($result ==0) {
            echo "<script>alert('Proses Login Gagal, Email / Username Atau Password Yang Anda Masukkan Tidak Terdaftar');
            document.location.href='index.php'</script>\n";
            }
        }   
?>