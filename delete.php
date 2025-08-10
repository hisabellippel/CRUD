<?php
// Exclusão com risco de SQL Injection e sem confirmação
include 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = $id";

if ($conn->query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='read.php'>Ver registros.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();
?>
