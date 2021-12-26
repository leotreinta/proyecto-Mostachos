
<?php

$mysqli = new mysqli('localhost', 'root', '', 'Mostachitos');

if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}
   

   $stmt = $mysqli->prepare("INSERT INTO Clientes VALUES(?, ?, ?, ?, ?, ?)") ;
       /* asociar parámetros para marcadores */	    
       $stmt->bind_param('ssssss', $rut, $nombre, $apellido, $telefono,$mail,$clave);
       /* ejecutar la consulta */
       $rut = $_POST['rut'];
       $nombre = $_POST['nombre'];
       $apellido = $_POST['apellido'];
       $telefono = $_POST['telefono'];
       $mail = $_POST['mail'];
       $clave = $_POST['clave'];

       $stmt->execute();
       if($stmt->affected_rows > 0){
           header("location:../../GALERIA/tienditaaa2.html");
       }else{
           echo "ut oh! failed to insert..";
       }
       
       /* cerrar sentencia */
       $stmt->close();
   
?>