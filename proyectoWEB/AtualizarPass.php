<?php



include 'newconexion.php';


$claves = $_POST['old-password'];
$newclave =$_POST['new-password'];
$conficlave =$_POST['confirm-password'];


$validar = mysqli_query($conexion, "SELECT * FROM socios
           WHERE contrasena='$claves'");

if(mysqli_num_rows($validar) > 0){
  
  echo '<p>su contraseña actual es correcta</p>';
    
if($conficlave == $newclave){
    
  include 'newconexion.php';
      $query ="UPDATE socios SET contrasena = '$newclave' WHERE contrasena = '$claves '";
      $exito = mysqli_query($conexion, $query);

      if($exito) {
       echo '<p>Cliente actualizado con éxito</p>';
      }

    }  else{ 
      echo '<p>LAS CONTRASEÑAS NUEVAS NO CONCUERDAN </p>';
   }  



  }else { 
    echo '<p>su contraseña actual es incorrecta</p>';

  } 

?>
