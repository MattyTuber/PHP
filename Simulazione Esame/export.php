<?php
require("FPDF/fpdf.php");
ob_end_clean();

$id   = $_POST['tessera'];
$pass = $_POST['password'];

$db = new mysqli('localhost', 'Operatore', '', 'Vaccinazioni');

$sql = "SELECT * FROM Operatore WHERE tessera_san = '$id' AND password = '$pass'";

$result = $db->query($sql);

if ($result->num_rows <= 0) {
    echo "Login Fallito";
    echo "<br><br><a href='index.html'>Torna alla pagina iniziale</a>";
}

$sql    = "SELECT * FROM Dose, Operatore WHERE Dose.codOp = Operatore.codOp AND Operatore.tessera_san = '$id'";
$result = $db->query($sql);

$nrpagina = 0;
$max      = 25;
$y        = 0;
$i        = 0;
$y_inizio = 15;
$h        = 6;
$l1       = 18;
$l2       = 10;
$l3       = 30;
$l4       = 20;
$l5       = 25;
$l6       = 25;

$pdf = new FPDF();
$pdf->SetFont('Arial', '', 11);
$pdf->SetAutoPageBreak(false);

$pdf->AddPage();
$pdf->SetFillColor(255, 0, 200);
$pdf->Text(10, 10, "Vaccini dell'operatore " . $id . ":");
$pdf->SetY($y_inizio);
$pdf->SetX(10);

$pdf->Cell(18, 6, "codFiala", 1, 0, "L", 1);
$pdf->Cell(10, 6, "lotto", 1, 0, "L", 1);
$pdf->Cell(30, 6, "data", 1, 0, "L", 1);
$pdf->Cell(20, 6, "ora", 1, 0, "L", 1);
$pdf->Cell(25, 6, "idPaziente", 1, 0, "L", 1);
$pdf->Cell(18, 6, "codOp", 1, 0, "L", 1);
$pdf->Cell(25, 6, "braccio", 1, 0, "L", 1);
$pdf->Cell(25, 6, "codSede", 1, 0, "L", 1);
$pdf->Cell(25, 6, "ragSoc", 1, 0, "L", 1);

$pdf->SetFillColor(240, 180, 180);
$y = $y_inizio;
$y += $h;
$i = 0;

foreach ($result as $row) {
    $codFiala   = $row["codFiala"];
    $lotto      = $row["lotto"];
    $data       = $row["data"];
    $time       = $row["time"];
    $idPaziente = $row["idPaziente"];
    $codOp      = $row["codOp"];
    $braccio    = $row["braccio"];
    $codSede    = $row["codSede"];
    $ragSoc     = $row["ragSoc"];
    
    $pdf->SetY($y);
    $pdf->SetX(10);
    
    $pdf->Cell($l1, $h, $codFiala, 1, 0, "L", 1);
    $pdf->Cell($l2, $h, $lotto, 1, 0, "L", 1);
    $pdf->Cell($l3, $h, $data, 1, 0, "L", 1);
    $pdf->Cell($l4, $h, $time, 1, 0, "L", 1);
    $pdf->Cell($l5, $h, $idPaziente, 1, 0, "L", 1);
    $pdf->Cell($l1, $h, $codOp, 1, 0, "L", 1);
    $pdf->Cell($l6, $h, $braccio, 1, 0, "L", 1);
    $pdf->Cell($l6, $h, $codSede, 1, 0, "L", 1);
    $pdf->Cell($l6, $h, $ragSoc, 1, 0, "L", 1);
    
    $y += $h;
    $i++;
    
}

$pdf->Output();
?>