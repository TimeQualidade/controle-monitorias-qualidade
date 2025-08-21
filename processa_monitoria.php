
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $consultor = $_POST['consultor'] ?? '';
    $monitor = $_POST['monitor'] ?? '';
    $data = $_POST['data'] ?? '';
    $status = $_POST['status'] ?? '';
    $obs = $_POST['observacao'] ?? '';
    $dados = "Monitoria: $data - $consultor - $monitor - $status - $obs
";
    file_put_contents('monitorias.txt', $dados, FILE_APPEND);
    echo "Monitoria registrada com sucesso!";
}
?>
