<!DOCTYPE html>
<html>
<head>

  <title>Cambiar Contraseña</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>

<body>

  
<div class="container">
    <h2>Cambiar Contraseña</h2>
    <form action="AtualizarPass.php" method="POST">


        <div class="form-group">
            <label for="old-password">Contraseña Atual:</label>
            <input type="password" id="old-password" name="old-password"  required>
            <?php
    // Mostrar el mensaje de error si existe en la sesión
    if (isset($_SESSION['mensaje_error'])) {
        echo "<p>{$_SESSION['mensaje_error']}</p>";
        // Eliminar el mensaje de error de la sesión para que no se muestre en otras páginas
        unset($_SESSION['mensaje_error']);
    }
    ?>
        </div>
     

        <div class="form-group">
            <label for="new-password">Nueva Contraseña:</label>
            <input type="password" id="new-password" name="new-password" required>
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirmar  Contraseña:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>

        <button type="submit">Cambiar Contraseña</button>
    </form>
</div>

    </form>
  </div>
</body>
</html>