<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canal informativo</title>

    <!-- Scripts CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.1/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css">
    <link rel="stylesheet" href="fullcalendar/main.css">

<!-- Scripts JS -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/datatables.min.js"></script>
<script src="js/bootstrap-clockpicker.js"></script>
<script src="js/moment-with-locales.js"></script>
<script src="fullcalendar/main.js"></script>
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
        <a class="nav-link active" href="CalendarADMIN.php">Calendario
          </a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>


<!---------------------------------------->
<div class="container mt-5">
    <button type="button" class="btn btn-primary" id="BotonADD">Agregar</button>
    
    <button type="button" class="btn btn-danger" id="eliminar">Borrar</button>
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
                    <div class="card-header"><h4>ID:'. $row['id'].'<h4><h5>' . $row['titulo']  . '</h5></div>
                    <div class="card-body">
                        <p class="card-text">' . substr($row['Contenido'], 0, 200) . "..." .'</p>
                    </div>
                    <div style="margin-bottom: 25px; margin-right: 20px; text-align: right">
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

    <!-- Formulario de INSERT -->
    <div class="modal fade" id="FormularioEventos" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span>
            </button>
          </div>
          <form method="POST" action="datosNovedades.php">
          <div class="modal-body">
            <input type="hidden" id="Id">

            <div class="form-row">
              <div class="form-group col-12">
                <label for="">Titulo:</label>
                <input type="text" id="Titulo" name="Titulo" class="form-control" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12">
                <label for="">Contenido:</label>
                <textarea id="Contenido" name="Contenido" class="form-control" rows="3"></textarea>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Fecha:</label>
                <div class="input-group" data-autoclose="true">
                  <input type="date" id="Fecha" name="Fecha" value="" class="form-control">
                </div>
              </div>

            <div class="form-row">
              <label for="">URL de la imagen:</label>
              <textarea id="Url" name="Url" class="form-control" rows="3"></textarea>
          </div>

          </div>

          <div class="modal-footer">
            <button type="submit" id="BotonAgregar" class="btn btn-success">Agregar</button>
          </div>
          </form>

        </div>
      </div>
    </div>
            

    <script>
    // Escuchador de eventos para el botón "Agregar"
    document.getElementById('BotonADD').addEventListener('click', function () {
        // Abre el modal
        var modal = new bootstrap.Modal(document.getElementById('FormularioEventos'));
        modal.show();
        
    });
    document.getElementById('eliminar').addEventListener('click', function () {
        // Redirige a la página "pagina_destino.html"
        window.location.href = "borrarNovedades.php";

    });
</script>

    
</body>
<html>
