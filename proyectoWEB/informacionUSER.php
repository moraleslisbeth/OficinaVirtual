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
          <a class="nav-link active" href="#">Novedades
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

<!---------------------------------------->
<div class="container mt-5">
        <h1>Novedades</h1>
        <div class="row">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "vegareal";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            $query = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="card text-white bg-success mb-3" style="width: 30%; margin: 20px;">
                    <div class="card-header"><h5>' . $row['titulo']  . '</h5></div>
                    <div class="card-body">
                        <p class="card-text">' . substr($row['Contenido'], 0, 200) . "..." .'</p>
                    </div>
                    <div style=" text-align: right; margin-bottom: 25px; margin-right: 20px;">
                            <a href="novedadesDetallada.php?id='.$row['id'].'" style="color: white;">Leer mas</a>
                    </div>
                    </div>';
                    
                }
            } else {
                echo '<p>No hay noticias disponibles.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
<html>
