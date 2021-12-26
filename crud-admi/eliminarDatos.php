<?php
$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'world');

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}


$del = $mysqli->prepare("DELETE FROM clientes WHERE rut = ?");
$del->bind_param("s", $rut);
$rut=$_POST['rut'];

/* ejecuta sentencias prepradas */
$del->execute();


/* cierra la conexión */
$del->close();
?>