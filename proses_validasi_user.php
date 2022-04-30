<?php
include"koneksi.php";
$id = $_GET['id'];


$query2="UPDATE tbl_user SET status_user='Valid' WHERE id_user='$id'";
$sql2=mysqli_query($connect, $query2);
if ($sql2) {
	echo "<script>alert('Data Warga Berhasil Divalidasi');
	document.location.href='dashboard.php?p=data_warga'</script>\n";
}else{
	echo "<script>alert('Data Warga Berhasil Divalidasi');
	document.location.href='dashboard.php?p=data_warga'</script>\n";
}
?>