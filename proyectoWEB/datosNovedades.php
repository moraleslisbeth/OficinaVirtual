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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Obtener los datos del formulario
$titulo = $_POST['Titulo'];
$contenido = $_POST['Contenido'];
$fecha = $_POST['Fecha'];
$urlImagen = $_POST['Url'];

// Consulta de inserción
$sql = "INSERT INTO noticias (titulo, Contenido, fecha_publicacion, url_imagen) VALUES ('$titulo', '$contenido', '$fecha', '$urlImagen')";

if ($conn->query($sql) === TRUE) {
  header("Location: informacionADMIN.php");
  exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}elseif ($_SERVER["REQUEST_METHOD"] == "DELETE") {
  // Si es una solicitud PUT, asumimos que es una actualización
  // ... Código para realizar la actualización ...
} 

// Cerrar conexión
$conn->close();
?>
