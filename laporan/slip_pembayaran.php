<?php
include'koneksi.php';
session_start();
include"fpdf.php";
require('makefont/makefont.php');
$pdf = new FPDF("P","cm","A4");
$pelanggan = $_POST['pelanggan'];
$tgl = $_POST['tgl'];
$data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tbl_user  WHERE username='$_SESSION[masuk]'")); 
                if ($data['level'] == 'Admin') {
                    $konten = $data['nama_user'];
                }

$sql="SELECT * FROM tbl_pembayaran WHERE tgl_pembayaran='$tgl' AND id_pelanggan='$pelanggan'";
$tampil=mysqli_query($connect, $sql);
$lihat=mysqli_fetch_array($tampil);
$pk=$lihat['harga_jual'] * $lihat['jml_barang'];
$sql1="SELECT * FROM tbl_pelanggan WHERE id_pelanggan='$pelanggan'";
$tampil1=mysqli_query($connect, $sql1);
$lihat1=mysqli_fetch_array($tampil1);
$pdf->SetMargins(2,1,2);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',10);
$pdf->Cell(11,0.5,"CV. Rajawali Cellular",0,0,'L');
$pdf->Cell(3,0.5,"User",0,0,'L');
$pdf->Cell(1,0.5,":",0,0,'L');
$pdf->Cell(5,0.5,$data['nama_user'],0,1,'L');
$pdf->Cell(11,0.5,"Jln. Raya Sesetan No.126, Kec. Denpasar Selatan",0,0,'L');
$pdf->Cell(3,0.5,"Tgl. Transaksi",0,0,'L');
$pdf->Cell(1,0.5,":",0,0,'L');
$pdf->Cell(5,0.5,$tgl,0,1,'L');
$pdf->Cell(11,0.5,"Hal : Slip Pembayaran",0,1,'L');
$pdf->Cell(20,0.5,"------------------------------------------------------------------------------------------------------------------------------------------------",0,1,'L');
$pdf->SetFont('Times','i',10);
    $pdf->Cell(5, 0.6,"ID Pembayaran",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat['id_pembayaran'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"pelanggan",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat['id_pelanggan']."-".$lihat1['nama_pelanggan'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"Tgl. Pembayaran",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat['tgl_pembayaran'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"Harga Barang",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6,"Rp. ".number_format($lihat['harga_jual'], 2, ".", ",") ,0, 1, 'L');
    $pdf->Cell(5, 0.6,"Jumlah Barang",0, 0, 'L');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(10, 0.6, $lihat['jml_barang'],0, 1, 'L');
    $pdf->Cell(5, 0.6,"",0, 0, 'L');
    $pdf->Cell(1, 0.6,"",0, 0, 'C');
    $pdf->Cell(10, 0.6,"________________ *",0, 1, 'L');
    $pdf->Cell(5, 0.6,"Total Bayar",0, 0, 'R');
    $pdf->Cell(1, 0.6,":",0, 0, 'C');
    $pdf->Cell(5, 0.6, "Rp. ".number_format($pk, 2, ".", ","),0, 1, 'L');
    $pdf->Cell(20,0.5,"------------------------------------------------------------------------------------------------------------------------------------------------",0,1,'L');
    $pdf->SetFont('Times','i',8);
    $pdf->Cell(20.5,0.7,"Denpasar, ".date("D-d/m/Y"),0,1,'L');

    $pdf->SetMargins(2,1,2);

    $pdf->SetFont('Times','',10);
    $pdf->SetX(3);            
    $pdf->Cell(10,2,"Yang Bertanda Tangan,",0,'L');
    $pdf->SetX(15);
    $pdf->SetFont('Times','',10);
    $pdf->Cell(10,2,"Denpasar, ".date("d/m/Y"),0,'R');
    $pdf->SetFont('Times','',10);
    $pdf->SetX(4);            
    $pdf->Cell(10,8,$data['nama_user'],0,'L');
    $pdf->SetX(16);
    $pdf->SetFont('Times','',10);
    $pdf->Cell(10,8,$lihat1['nama_pelanggan'],0,'R');

$pdf->Output();
?>