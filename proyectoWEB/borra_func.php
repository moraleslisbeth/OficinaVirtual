<?php
// Conexión a la base de datos (cambia estos valores por los tuyos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vegareal";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "DELETE FROM noticias WHERE id = '$_POST[id]'";

if ($conn->query($sql) === TRUE) {
  header("Location: informacionADMIN.php");
  exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>