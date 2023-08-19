
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canal informativo</title>

    <!-- Scripts CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.1/cerulean/bootstrap.min.css">

    </head>
<body>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vega Real</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="informacionUSER.php">Novedades
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li>
        <a class="nav-link active" href="CalendarioUser.php">Calendario
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "vegareal";

     $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn->connect_error) {
         die("Conexión fallida: " . $conn->connect_error);
     }

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM noticias WHERE id = $id";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        echo '
        <div style="width: 100%; background-color: green; height: 90px; padding: 20px; text-align: center; margin-bottom: 20px;">
            <h3 style="color: white;">' . $row['titulo'] . '</h3>
        </div>
        <div style="display: flex;">
        <div style="flex: 1; padding-right: 10px;">
            <img src="' . $row['url_imagen'] . '" style="width: 520px; height: 480px; margin: 30px;">
        </div>
        <div style="padding: 100px 25px 0px 20px;">
            <p>' . $row['Contenido'] . '</p>
        </div>
        </div>';
    }
} else {
    echo 'No se ha proporcionado un ID válido.';
}
?>

</body>
