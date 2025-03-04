<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
    function Header() {
        // Encabezado rojo con logo y texto alineados
        $this->SetFillColor(255, 0, 0); // Fondo rojo
        $this->Rect(0, 0, 210, 15, 'F'); // Recuadro rojo más pequeño

        // Logo dentro del recuadro rojo alineado a la izquierda
        $this->Image('img/LOGO_CENCA-removebg-preview.png', 10, 2, 15);

        // Texto alineado al centro verticalmente dentro del recuadro
        $this->SetFont('Arial', 'B', 14);
        $this->SetTextColor(255, 255, 255); // Blanco
        $this->SetY(4); // Ajustar posición vertical para centrar el texto
        $this->Cell(0, 8, 'Carta Porte - Complemento CFDI', 0, 1, 'C');
    
    }

    function Footer() {
        // Pie de página negro
        $this->SetFillColor(0, 0, 0);
        $this->Rect(0, 285, 210, 15, 'F');

        // Logo mismo tamaño que el del encabezado, centrado en el pie de página
        $this->Image('img/LOGO_CENCA-removebg-preview.png', 97.5, 287, 15);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="CartaPorte.pdf"');
    header('Cache-Control: private, max-age=0, must-revalidate');
    header('Pragma: public');

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

// Espacio antes de la siguiente sección
$pdf->Ln(10);

// Sección Datos Físcales :)
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(190, 10, "DatosFiscales", 1, 1, 'C', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);

$datosCampos = ['version','tipoComprobante','usoCfdi','tipoRelacion'];

foreach ($datosCampos as $campo) {
    if (isset($_POST[$campo])) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 10, ucfirst(str_replace('_', ' ', $campo)) . ':', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(130, 10, utf8_decode($_POST[$campo]), 1, 1, 'L');
    }
}


$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(190, 10, "Receptor", 1, 1, 'C', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);

$receptorCampos = ['rfcReceptor','razonSocialReceptor'];

foreach ($receptorCampos as $campo) {
    if (isset($_POST[$campo])) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 10, ucfirst(str_replace('_', ' ', $campo)) . ':', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(130, 10, utf8_decode($_POST[$campo]), 1, 1, 'L');
    }
} 

//Uicacion
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(190, 10, "Ubicaciones", 1, 1, 'C', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);

$ubicacionesCampos = ['idOrigen','rfcRemitente','nombreRemitente','fechaSalida','idDestino','rfcDestinatario','fechaLlegada'];

foreach ($ubicacionesCampos as $campo) {
    if (isset($_POST[$campo])) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 10, ucfirst(str_replace('_', ' ', $campo)) . ':', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(130, 10, utf8_decode($_POST[$campo]), 1, 1, 'L');
    }
}

//Merca
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(190, 10, "Mercancias", 1, 1, 'C', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);

$mercanciaCampos = ['tipoMercancia','descripcionMercancia','cantidad','dimensiones','pesoKg','valorMercancia','usoCfdi'];

foreach ($mercanciaCampos as $campo) {
    if (isset($_POST[$campo])) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 10, ucfirst(str_replace('_', ' ', $campo)) . ':', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(130, 10, utf8_decode($_POST[$campo]), 1, 1, 'L');
    }
}

//Tipo de Embalage
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(190, 10, "Tipo de Embalage", 1, 1, 'C', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);

$tipoEmbalage = ['usoCfdi','fraccionArancelaria','pedimento'];

foreach ($tipoEmbalage as $campo) {
    if (isset($_POST[$campo])) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 10, ucfirst(str_replace('_', ' ', $campo)) . ':', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(130, 10, utf8_decode($_POST[$campo]), 1, 1, 'L');
    }
}

//Transporte
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(190, 10, "Transporte", 1, 1, 'C', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);

$transporte = ['tipoTransporte','PermisoSCT','configVehicular','placaVehiculo'];

foreach ($transporte as $campo) {
    if (isset($_POST[$campo])) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 10, ucfirst(str_replace('_', ' ', $campo)) . ':', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(130, 10, utf8_decode($_POST[$campo]), 1, 1, 'L');
    }
}



// Espacio antes de la siguiente sección
$pdf->Ln(10);

// Sección Operador
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(190, 10, "Operador", 1, 1, 'C', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);

$operadorCampos = ['nombreOperador', 'rfcOperador'];

foreach ($operadorCampos as $campo) {
    if (isset($_POST[$campo])) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 10, ucfirst(str_replace('_', ' ', $campo)) . ':', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(130, 10, utf8_decode($_POST[$campo]), 1, 1, 'L');
    }
}

//Dpmicilio
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetFillColor(255, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(190, 10, "Direccion", 1, 1, 'C', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);

$direccion = ['pais','codigo_postal','estado','municipio','localidad','calle','numero_exterior'];

foreach ($direccion as $campo) {
    if (isset($_POST[$campo])) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(60, 10, ucfirst(str_replace('_', ' ', $campo)) . ':', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(130, 10, utf8_decode($_POST[$campo]), 1, 1, 'L');
    }
}
   
    
    $pdf->Output('I', 'CartaPorte.pdf');
}
?>