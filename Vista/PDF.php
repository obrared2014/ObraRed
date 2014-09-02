<?php
require('../Controlador/FPDF/fpdf.php');

class PDF extends FPDF{
    function Header(){// Cabecera de página
        // Logo
        $this->Cell(0,1,'',1);                                                      //Linea Horizontal
        $this->Image('../img/LOGO_3.png',150,12,50);                                //logo ObraRed
        $this->Ln(20);                                                              // Salto de linea
        $this->Cell(0,1,'',1);                                                      //Linea Horizontal
        $this->Ln(5);
    }

    function Footer(){// Pie de página
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,1,'',1);
        $this->Ln(1);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

session_start();    
// Cuerpo del PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();



$pdf->SetFont('Arial','B',15);                                                  // Tipo de Fuente
$pdf->Cell(35,10,'Tipo de Obra: ');                                             //celda con texto
$pdf->SetFont('Arial','',12);
$pdf->Cell(50,10,'Cobertizo de 12 m2');                                         //tipo de obra
$pdf->Ln(12);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,5,'Nombre:',0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60,5,$_SESSION['nombre']." ".$_SESSION['ap_paterno']." ".$_SESSION['ap_materno'],0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(23,5,'Actividad:',0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(87,5,$_SESSION['actividad'],0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,5,'Fono:',0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(60,5,$_SESSION['telefono'],0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(23,5,'Correo:',0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(87,5,$_SESSION['email'],0);
$pdf->Ln(20);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(0,1,'',1);
$pdf->Ln(3);
$pdf->Cell(87,5,'Detalle materiales',0);
$pdf->Ln(6);
$pdf->Cell(0,1,'',1);
$pdf->Ln(6);
$pdf->SetFont('Arial','',10);
$pdf->Cell(85,8,'Descripcion',1);
$pdf->Cell(21,8,'Cantidad',1);
$pdf->Cell(42,8,'Precio Unitario',1);
$pdf->Cell(42,8,'Precio Total',1);
$pdf->Ln(8);
$pdf->Cell(0.001,130,'',1);

//detalle de materiales (despliegue de datos)
$pdf->Cell(85,5,'Perfil Rectangular de 50x10x2.0mm (6m)',0);
$pdf->Cell(21,5,'2',0);
$pdf->Cell(42,5,'$9.750',0);
$pdf->Cell(42,5,'$19.500',0);


$pdf->Cell(0.001,130,'',1);

//Panel final con total de materiales $$$
$pdf->SetY(-72);
$pdf->Cell(0,0.001,'',1);
$pdf->Ln(0);
$pdf->Cell(106,10,'',1);
$pdf->Cell(42,10,'TOTAL',1);
$pdf->Cell(42,10,'$10.054.541.215',1);


$pdf->Output();