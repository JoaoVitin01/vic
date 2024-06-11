<?php
require('fpdf/fpdf.php');

// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliotech";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Preparar a consulta SQL
$sql = "SELECT * FROM registro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Criar um novo PDF
    $pdf = new FPDF('P', 'mm', 'A4'); // Página no formato A4
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(20, 10, 'Código', 1);
    $pdf->Cell(35, 10, 'Nome do Aluno', 1);
    $pdf->Cell(20, 10, 'Série', 1);
    $pdf->Cell(35, 10, 'Curso', 1);
    $pdf->Cell(35, 10, 'Livro', 1);
    $pdf->Cell(20, 10, 'Tombo', 1);
    $pdf->Cell(35, 10, 'Data de Empréstimo', 1);
    $pdf->Cell(35, 10, 'Data de Devolução', 1);
    $pdf->Ln();

    // Dados da tabela
    $pdf->SetFont('Arial', '', 10);
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(20, 10, $row['cod_rigistro'], 1);
        $pdf->Cell(35, 10, $row['nomealuno'], 1);
        $pdf->Cell(20, 10, $row['seriealuno'], 1);
        $pdf->Cell(35, 10, $row['cursoaluno'], 1);
        $pdf->Cell(35, 10, $row['livro'], 1);
        $pdf->Cell(20, 10, $row['Rtombo'], 1);
        $pdf->Cell(35, 10, $row['datemprestimo'], 1);
        $pdf->Cell(35, 10, $row['datdevolucao'], 1);
        $pdf->Ln();
    }

    // Saída do PDF
    $pdf->Output('D', 'relatorio_registros.pdf');
} else {
    echo "Não foram encontrados registros na tabela.";
}

$conn->close();
?>
