<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(18, 7, 'Estado', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Medida', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Categoria', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Marca', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Nombre', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Descripcion', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Saldo', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Precio', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Ubicacion', 0, 0, 'C', 0);
	$this->cell(18, 7, 'Iva', 0, 0, 'C', 0);
	$this->cell(20, 10,'Comentario', 0, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php'; 
$consulta = "SELECT * FROM producto";
$resultado = $mysqli->query($consulta);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc()) {
	$pdf->cell(18, 7, $row['Estado_idEstado'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Unidademedida_idUnidademedida'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Categoria_IdCategoria'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Marca_idMarca'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Nom_producto'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Descripcion'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Saldo'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Precio'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Ubicacion'], 1, 0, 'C', 0);
	$pdf->cell(18, 7, $row['Iva'], 1, 0, 'C', 0);
	$pdf->cell(20, 10, $row['Comentario'], 1, 1, 'C', 0);

}



$pdf->Output();
?>