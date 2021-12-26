<?php

$mysqli = new mysqli('localhost', 'root', '', 'Mostachitos');

         if (mysqli_connect_errno()) {
             printf("Error de conexión: %s\n", mysqli_connect_error());
             exit();
         }
        
            $stmt = $mysqli->prepare("UPDATE Clientes Set Nombre = ?, Apellido = ?, Mail = ?, Telefono = ?, Clave = ? WHERE Rut = ?");
                /* asociar parámetros para marcadores */	    
                $stmt->bind_param("sssss", $nombre, $apellido, $mail, $telefono, $clave);
                /* ejecutar la consulta */
               
                $rut=$_POST['rut'];
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $mail=$_POST['mail'];
                $telefono=$_POST['telefono'];
                $clave=$_POST['clave'];
                $stmt->execute();
                
                /* cerrar sentencia */
                $stmt->close();
?>
