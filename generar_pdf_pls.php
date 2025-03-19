<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
    function Header() {
        // Encabezado rojo con logo
        $this->SetFillColor(255, 0, 0);
        $this->Rect(0, 0, 210, 20, 'F');
        $this->Image('img/LOGO_CENCA-removebg-preview.png', 10, 5, 20);
        $this->SetFont('Arial', 'B', 14);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(0, 10, 'Carta Porte - Ingreso', 0, 1, 'C');
        $this->Ln(5);
    }

    function Footer() {
        $this->SetFillColor(0, 0, 0);
        $this->Rect(0, 285, 210, 15, 'F');
        $this->Image('img/LOGO_CENCA-removebg-preview.png', 95, 287, 20);
    }

    function SectionTitle($title) {
        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(190, 8, utf8_decode($title), 1, 1, 'C', true);
        $this->Ln(2);
    }

    function SectionContent($label, $content) {
        $this->SetFont('Arial', 'B', 10);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(50, 6, utf8_decode($label) . ":", 0, 0, 'L');
        $this->SetFont('Arial', '', 10);
        $this->MultiCell(140, 6, utf8_decode($content), 1);
        $this->Ln(2);
    }

    function DrawTableHeader($headers) {
        $this->SetFont('Arial', 'B', 9);
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255, 255, 255);

        foreach ($headers as $header) {
            $this->Cell(20, 8, utf8_decode($header), 1, 0, 'C', true);
        }
        $this->Ln();
    }

    function DrawTableRow($data) {
        $this->SetFont('Arial', '', 9);
        $this->SetTextColor(0, 0, 0);

        foreach ($data as $item) {
            $this->Cell(20, 6, utf8_decode($item), 1, 0, 'C');
        }
        $this->Ln();
    }

    function DrawLine() {
        $this->SetDrawColor(255, 0, 0);
        $this->Line(10, $this->GetY(), 200, $this->GetY());
        $this->Ln(5);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="CartaPorte.pdf"');

    $pdf = new PDF();
    $pdf->AddPage();

    // Datos del Cliente
    $pdf->SectionTitle("Datos del Cliente");
    $pdf->SectionContent("Nombre", $_POST['nombreReceptor'] ?? 'No disponible');
    $pdf->SectionContent("RFC", $_POST['rfcReceptor'] ?? 'No disponible');
    $pdf->SectionContent("Domicilio", $_POST['domicilioReceptor'] ?? 'No disponible');
    $pdf->DrawLine();

    // Datos del Comprobante
    $pdf->SectionTitle("Datos del Comprobante");
    $pdf->SectionContent("Método de Pago", $_POST['metodoPago'] ?? 'No disponible');
    $pdf->SectionContent("Uso de CFDI", $_POST['usoCfdi'] ?? 'No disponible');
    $pdf->SectionContent("Moneda", $_POST['moneda'] ?? 'No disponible');
    $pdf->DrawLine();

    // Servicios
    $pdf->SectionTitle("Servicio");
    $pdf->DrawTableHeader(["Cantidad", "Unidad", "Descripción", "Precio Unitario", "Impuestos", "Importe"]);
    $pdf->DrawTableRow([
        $_POST['cantidad'] ?? '1.00',
        $_POST['unidad'] ?? 'PCE',
        $_POST['descripcion'] ?? 'FLETE',
        $_POST['precio_unitario'] ?? '$1,500.00',
        $_POST['impuestos'] ?? 'IVA: $240.00',
        $_POST['importe'] ?? '$1,740.00'
    ]);
    $pdf->DrawLine();

    // Mercancía
    $pdf->SectionTitle("Mercancía");
    $pdf->DrawTableHeader(["Cantidad", "Unidad", "Descripción", "Peso Kg", "Fracción Arancelaria"]);
    $pdf->DrawTableRow([
        $_POST['mercancia_cantidad'] ?? '1.00',
        $_POST['mercancia_unidad'] ?? 'PCE',
        $_POST['mercancia_descripcion'] ?? 'Transporte de carga',
        $_POST['pesoKg'] ?? '78101800',
        $_POST['fraccion_arancelaria'] ?? ''
    ]);
    $pdf->DrawLine();

    // Total
    $pdf->Ln(5);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(130, 10, "Total:", 0, 0, 'R');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, $_POST['total'] ?? "$1,740.00", 0, 1, 'C');

    // Código QR
    require('phpqrcode/qrlib.php');
    $qrFilename = "temp_qr.png";
    QRcode::png("https://cenca.com.mx", $qrFilename);
    $pdf->Image($qrFilename, 10, 240, 40, 40);

    $pdf->Output('I', 'CartaPorte.pdf');
}