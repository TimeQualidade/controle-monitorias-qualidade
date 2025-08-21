
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $consultor = $_POST['consultor'] ?? '';
    $nota = $_POST['nota'] ?? '';
    $observacao = $_POST['observacao'] ?? '';
    $frase = $_POST['frase'] ?? '';
    $dados = "Feedback: $consultor - Nota: $nota - Obs: $observacao - Frase: $frase
";
    file_put_contents('feedbacks.txt', $dados, FILE_APPEND);
    echo "Feedback salvo com sucesso!";
}
?>
