<?php
include"koneksi.php";
$id = $_GET['id'];


$query2="UPDATE tbl_supplier SET status_validasi='Valid' WHERE id_supplier='$id'";
$sql2=mysqli_query($connect, $query2);
if ($sql2) {
	echo "<script>alert('Data Supplier Berhasil Divalidasi');
	document.location.href='dashboard_owner.php?p=data_supplier'</script>\n";
}else{
	echo "<script>alert('Data Supplier Berhasil Divalidasi');
	document.location.href='dashboard_owner.php?p=data_supplier'</script>\n";
}
?>