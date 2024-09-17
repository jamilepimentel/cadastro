<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];

    // Aqui você pode adicionar o código para salvar as informações em um banco de dados

    // Redireciona para a página de confirmação após o cadastro
    header("Location: success.php");
    exit();
}
?>