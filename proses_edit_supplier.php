<?php 
include"koneksi.php";

$id=$_GET['id'];
$nama = $_POST['nama'];
$np = $_POST['np'];
$tgl= $_POST['tgl'];
$jk = $_POST['jk'];
$alt = $_POST['alt'];
$notel = $_POST['notel'];
$email = $_POST['email'];
    $query="UPDATE tbl_supplier SEt nama_supplier='$nama', nama_perusahaan='$np', tgl_masuk='$tgl', jk='$jk', alamat='$alt', no_tlpn='$notel', email='$email' WHERE id_supplier='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Supplier Berhasil Diubah');
      document.location.href='dashboard.php?p=data_supplier'</script>\n";
    }else{
      echo "<script>alert('Data Supplier Gagal Diubah!');
      document.location.href='dashboard.php?p=edit_supplier&id=".$id."'</script>\n";
    }
?>