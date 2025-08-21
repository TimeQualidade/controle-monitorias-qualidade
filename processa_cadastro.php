
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $tipo = $_POST['tipo'] ?? '';
    $dados = "$tipo: $nome
";
    file_put_contents('cadastros.txt', $dados, FILE_APPEND);
    echo "Cadastro realizado com sucesso!";
}
?>
