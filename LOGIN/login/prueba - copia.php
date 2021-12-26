<?php
$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$clave = $_POST['clave'];

echo "Recibimos... <br>";
echo "Rut: ".$rut."<br>";
echo "Nombre: ".$nombre."<br>";
echo "Apellido: ".$apellido."<br>";
echo "Telefono: ".$telefono."<br>";
echo "Mail: ".$mail."<br>";
echo "Clave: ".$clave."<br>";





?>
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
       
       /* cerrar sentencia */
       $stmt->close();
   
?>