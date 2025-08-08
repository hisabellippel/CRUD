<?php
// Cadastro com erros de sintaxe e falta de validação
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuarios (nome, email) VALUE ('$nome', '$email')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "Usuário cadastrado com sucesso!";
        }else{
            echo "Erro ao cadastrar!";
    }
};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="create.php">

        <label for="name">Nome:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read.php">Ver registros.</a>
</body>
</html>