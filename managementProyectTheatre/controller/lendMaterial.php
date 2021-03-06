<?php
require('../fpdf/fpdf.php');
include_once('../APIquerys/apiQuerys.php');
session_start();
$employee = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
$conn = new apiQuerys;
$date = $date = date("j-n-Y");

$payload = $_POST["img"];
$payload = json_decode($payload);
$capturaLimpia = str_replace("data:image/png;base64,", "", urldecode($payload));
$imagenDecodificada = base64_decode($capturaLimpia);
$imagen = file_put_contents('../img/firma/firma.png', $imagenDecodificada);  
echo $imagen;

$data[0] = $_POST["tipo_materialLend"];
$data[1] = $_POST["dia_retirada"];
$data[2] = $_POST["dia_entrega"];
$data[3] = $_POST["estado_material"];
$data[4] = $_POST["observaciones"];
$data[5] = $_POST["per_entiLend"];
$data[6] = "false";
$data[7] = "";                        
$data[8] = $employee;
$data[9] = "";
 $conn->lendMaterial($data);



/**
 * Generar un pdf con los datos recibidos de js
 */
$pdf = new FPDF();
$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(20);
$pdf->SetTopMargin(20);
$pdf->AddPage();
$pdf->Image('../img/icons/Oj.png', 10, 10, -200);
$pdf->SetFont('Helvetica', 'B', 11);
$pdf->Cell(150, 10, '', 0, 1, 'C');
$pdf->Cell(150, 10, '', 0, 1, 'C');
$pdf->Cell(150, 10, "Teatro Auditorio Ciudad de Vicar", 0, 1, 'R');
$pdf->Cell(150, 10, "C/ de las Artes y de las Letras, S/N", 0, 1, 'R');
$pdf->Cell(150, 10, 'Puebla de Vicar, Almeria', 0, 1, 'R');
$pdf->Cell(150, 10, '', 0, 1, 'C');
$pdf->Cell(150, 10, '', 0, 1, 'C');
$pdf->Cell(150, 10, "Comunicamos, que desde el Teatro Auditorio Vicar se le presta el material '" . $data[0] . "',", 0, 1, 'C');
$pdf->Cell(150, 10, "a la persona o entidad '" . $data[5] . "' el dia " . $data[1] . ", siendo devuelto el dia " . $data[2] . ". El", 0, 1, 'C');
$pdf->Cell(150, 10, "estado del material el dia de la retirada es: " . $data[3] . ", y conllevando las siguientes", 0, 1, 'C');
$pdf->Cell(150, 10, "observaciones:
" . $data[4] . ".", 0, 1, 'C');
$pdf->Cell(150, 10, '', 0, 1, 'C');
$pdf->Cell(150, 10, '', 0, 1, 'C');
$pdf->Cell(150, 10, '', 0, 1, 'C');
$pdf->Cell(150, 7, '  Firma del Responsable                                                                   Firma del Tomador', 0, 1, 'L');
$pdf->Cell(150, 7, '  ' . $employee . '                                                                                             ' . $data[5] . '', 0, 1, 'L');   
$pdf->Image('../img/firma/sello_cultura_2.png', 30, 175, -400);
$pdf->Image('../img/firma/firma.png', 130, 165, -200,);
//$pdf->Output('F', 'C:\Users\sierr\Downloads\prestamo '.$date.'.pdf');
$pdf->Output('I', 'prestamo '.$date.'.pdf');