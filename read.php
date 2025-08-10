<?php
// Listagem com erro de lógica (ordem incorreta e falta de conexão)
include 'db.php';

$sql = "SELECT * FROM usuarios"; // Erro de SQL: FORM ao invés de FROM

$res = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Data de Criação </th>
            <th> Ações </th>
        </tr>
         ";

while ($row = $res->fetch_assoc()) {
    echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['name']} </td>
                <td> {$row['email']} </td>
                <td> {$row['created_at']} </td>
                <td> 
                    <a href='update.php?id={$row['id']}'>Editar<a>
                    <a href='delete.php?id={$row['id']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='create.php'>Inserir novo Registro</a>";
