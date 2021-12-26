<?php

    $conexion = new mysqli('localhost', 'root', '', 'Mostachitos');

	if (mysqli_connect_errno()) {
	    printf("Error de conexión: %s\n", mysqli_connect_error());
	    exit();
	}

?>   

