<?php

    $conexion = new mysqli('localhost', 'root', '', 'mostacho', 3308);

	if (mysqli_connect_errno()) {
	    printf("Error de conexión: %s\n", mysqli_connect_error());
	    exit();
	}

?>   