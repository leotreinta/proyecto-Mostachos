<?php

$mysqli = new mysqli('localhost', 'root', '', 'Mostachitos');

if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}
   

   $stmt = $mysqli->prepare("INSERT INTO Sugerencias VALUES(?)") ;
       /* asociar parámetros para marcadores */	    
       $stmt->bind_param('s', $suge);
       /* ejecutar la consulta */
       $suge = $_POST['suge'];
    
       $stmt->execute();
       
       /* cerrar sentencia */
       $stmt->close();
   
?>