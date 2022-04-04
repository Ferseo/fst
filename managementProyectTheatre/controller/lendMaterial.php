<?php
require('../fpdf/fpdf.php');
include_once('../APIquerys/apiQuerys.php');
session_start();
$employee = isset($_SESSION['user']) ? $_SESSION['user'] : 'User';
$conn = new apiQuerys;
$date = $date = date("j-n-Y");

//  $payload = json_decode(file_get_contents("php://input"));
 //$payload = json_decode($_POST["img"]);
//  $payload = $_POST["img"];
$payload = $_POST["img"];
 //print_r($payload);
 $payload = json_decode($payload);
 //print_r($payload);
// $captura = $payload->captura;
//$captura = $payload->captura;
$capturaLimpia = str_replace("data:image/png;base64,", "", urldecode($payload));
//print_r($capturaLimpia);
//Venía codificada pero sólo la codificamos así para que viajara por la red,
//ahora la decodificamos y
//guardamos el contenido dentro de un archivo
$imagenDecodificada = base64_decode($capturaLimpia);
$imagen = file_put_contents('../img/firma/firma.png', $imagenDecodificada);  
//print_r($imagenDecodificada);

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
// $img = $_FILES['imagen']['tmp_name'];
// print_r($img);
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
$pdf->Cell(150, 7, '  Firma del tomador                                                          Firma del Responsable', 0, 1, 'L');
$pdf->Cell(150, 7, '  ' . $employee . '                                                                        ' . $data[5] . '', 0, 1, 'L');
$pdf->Image('../img/firma/firma.png', 130, 165, -200,);
$pdf->Output('F', 'C:\Users\sierr\Downloads\prestamo '.$date.'.pdf');
