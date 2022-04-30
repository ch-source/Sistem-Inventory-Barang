<?php
include'koneksi.php';
session_start();
include"fpdf.php";
require('makefont/makefont.php');
$pdf = new FPDF("L","cm","A4");
$data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                if ($data['level'] == 'Owner') {
                    $konten = $data['nama_user'];
                }
$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);
$pdf->SetX(1.6);            
$pdf->MultiCell(15.5,0.6,'CV. Ana Ikat',0,'L');
$pdf->SetX(1.6);
$pdf->SetFont('Times','i',10);
$pdf->MultiCell(15.5,0.6,'Jln. Tukad Ijo Gading No. 1 Panjer, Denpasar Bali - 80224',0,'L'); 
$ta = $_POST['ta'];
$ak = $_POST['ak'];
$pdf->SetX(1.6);
$pdf->SetFont('Times','i',10);
$pdf->MultiCell(22.5,0.6,"Laporan Stok Barang: ".$ta."- ".$ak,0,'L'); 
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->SetFont('Times','i',8);
$ta = $_POST['ta'];
$ak = $_POST['ak'];
$pdf->ln(1);
$pdf->Cell(3.5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Times','B',8);
$pdf->Cell(1, 0.6, 'No', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'ID Barang', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'Nama Supplier', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'Kategori', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'Merek', 1, 0, 'C');
$pdf->Cell(3, 0.6, 'Tanggal', 1, 0, 'C');
$pdf->Cell(4, 0.6, 'Stok', 1, 1, 'C');

$no=1;
$sql="SELECT * FROM tbl_barang WHERE tgl_barang_masuk between '$ta' AND '$ak'";
$tampil=mysqli_query($connect, $sql);
while($lihat=mysqli_fetch_array($tampil)){
    $pdf->SetFont('Times','',7);
    $pdf->Cell(1, 0.6, $no , 1, 0, 'C');
    $query1="SELECT * FROM tbl_barang WHERE id_barang='".$lihat['id_barang']."'";
    $sql1=mysqli_query($connect, $query1);
    while ($data1=mysqli_fetch_array($sql1)) {
        $pdf->Cell(4, 0.6, $lihat['id_barang']."-".$lihat['nama_barang'],1, 0, 'L');
    }
    $pdf->Cell(4, 0.6, $lihat['nama_supplier'],1, 0, 'L');
    $pdf->Cell(4, 0.6, $lihat['nama_kategori'],1, 0, 'L');
    $pdf->Cell(4, 0.6, $lihat['nama_merek'],1, 0, 'L');
    $pdf->Cell(3, 0.6, $lihat['tgl_barang_masuk'],1, 0, 'L');
    $pdf->Cell(4, 0.6, $lihat['stok'],1, 1, 'L');
    $no++;
}
$pdf->SetFont('Times','B',7);
$order="SELECT * FROM tbl_barang WHERE tgl_barang_masuk between '$ta' AND '$ak'";
$query_order=mysqli_query($connect, $order);
$data_order=array();
while(($row_order=mysqli_fetch_array($query_order)) !=null){
$data_order[]=$row_order;
}
$count=count($data_order);
$pdf->Cell(20, 0.8,"Jumlah Stok Barang",1, 0, '');
$pdf->Cell(4, 0.8, $count ,1, 1, 'C');
$pdf->Cell(20,0.5,"-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------",0,1,'L');
$pdf->SetFont('Times','i',8);
$pdf->Cell(20.5,0.7,"Denpasar, ".date("D-d/m/Y"),0,1,'L');

$pdf->SetMargins(2,1,2);
$pdf->SetFont('Times','',10);
$pdf->SetX(23);            
$pdf->Cell(10,2,"Yang Bertanda Tangan,",0,'R');
$pdf->SetFont('Times','',10);
$pdf->SetX(24);            
$pdf->Cell(10,8,$data['nama_user'],0,'R');

$pdf->Output();
?>