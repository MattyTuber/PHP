<?php
require("FPDF/fpdf.php");

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial", "", 12);

$y = 10;

$pdf->SetX(10);
$pdf->SetY($y);

$pdf->Cell(40, 6, "Prova", 1, 0, "c");
$pdf->Cell(40, 6, "Testerone", 1, 0, "c");

$y += 10;
$pdf->SetY($y);

for ($i=1; $i < 20; $i++) { 
    $pdf->Cell(40, 6, "Prova ".$i, 1, 0, "c");
    $pdf->Cell(40, 6, "Testerone ".$i, 1, 0, "c");

    $y += 7;
    $pdf->SetY($y);
}

$pdf->Output();
?>