<html>
  <head>
    <title>BORRAR REGISTRO</title>
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
    <style>
        /* Estilos para el formulario */
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 20%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button[type="submit"] {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .form_sub:hover {
            background-color: #d32f2f;
        }
        #formulario{
          text-align: center;
          margin-top: 150px;
        }
    </style>
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
          <a class="nav-link active" href="informacionADMIN.php">Novedades
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li>
        <a class="nav-link active" href="CalendarioADMIN.php">Calendario
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <div id ="formulario">
  <form method="POST" action="borra_func.php" name="form">
      <label>Ingrese el ID a borrar: </label><br>
      <input type= "text" name="id">
      <button class= "form_sub" type= "submit">Borrar</button>
</form>
      </div>
</body>
</html>