<?php

require('./FPDF/fpdf.php');
$nombre = $_POST['nombre'];
// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','8',16);
// $pdf->Write(10,'Hola mundo '.$nombre);
// //$pdf->Cell(40,10,'Hola mundo '.$nombre);
// $pdf->Output();
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, '.$nombre.'!');
$pdf->ln(10);
$pdf->SetFont('Arial','I',14);
$pdf->Cell(60,10,"Este es un archivo PDF");
$pdf->Output();
?>
?>