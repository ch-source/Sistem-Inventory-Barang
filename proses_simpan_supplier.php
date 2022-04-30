<?php
include"koneksi.php";
$query_a = "SELECT max(id_supplier) as maxId FROM tbl_supplier";
$hasil_a = mysqli_query($connect,$query_a);
$data_a = mysqli_fetch_array($hasil_a);
$id_a = $data_a['maxId'];
$no_a = (int) substr($id_a, 3, 3);
$no_a++;
$char = "SPL";
$id_a= $char . sprintf("%03s", $no_a);

$nama = $_POST['nama'];
$np = $_POST['np'];
$tgl= $_POST['tgl'];
$jk = $_POST['jk'];
$alt = $_POST['alt'];
$notel = $_POST['notel'];
$email = $_POST['email'];

 $query2="INSERT INTO `tbl_supplier` (`id_supplier`, `nama_supplier` , `nama_perusahaan`, `tgl_masuk`, `jk`, `alamat`, `no_tlpn`, `email`) VALUES ('$id_a', '$nama', '$np', '$tgl', '$jk','$alt', '$notel', '$email')";
  $sql2=mysqli_query($connect, $query2);
  if ($sql2) {
              echo "<script>alert('Data Supplier Berhasil Di Simpan, Silahkan Menunggu Proses Validasi');
              document.location.href='dashboard.php?p=data_supplier'</script>\n";
              }else{
                echo "<script>alert('Oops !! Data Supplier Gagal Di Simpan..');
                document.location.href='dashboard.php?p=input_supplier'</script>\n";
           }
?>

