<?php
// Conexão com o banco (contém erro de variável e de conexão)
$host = "localhost";
$user = "root";
$password = "root";
$db = "crud_system";

$conn = new mysqli($host, $user, $password, $db); // Erro: $hot ao invés de $host

if ($conn->connect_error) {
    echo ("Falha na conexão:", . $conn->connect_error);
}
?>