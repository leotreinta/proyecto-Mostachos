<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    
           
  </head>
    
  <body > 
     <header>
         <h2 class="text-center text-light py-3"><span class="badge badge-danger">DATATABLES</span></h2> 
     </header>    
    
     
    <div class="container">
        <div class="row">
         <div class="col-lg-12">
         <button class="btn btn-success" > <a href="insert.php"><b class="be text-white">NUEVO</b></a>
        </button>
         
         </div>
        </div>
      </div>

      <br>

    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead >
                            <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Mail</th>
                            <th>Telefono</th>
                            <th>Clave</th>
                            <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody> 
                        <?php 
                            require('cone.php');

                            if ($sql = $conexion->prepare("SELECT  Nombre, Rut, Apellido, Mail, Telefono, Clave  from Clientes")) {
                                /* asociar parámetros para marcadores */	    
                                //$sql->bind_param("is", $id,$nombre);
                                /* ejecutar la consulta */
                                $sql->execute();
                                /* asociar variables de resultado */
                                $sql->bind_result($nombre,$rut,$apellido,$telefono,$mail,$clave);
                                /* obtener valor */
                                while ($sql->fetch()) {
                                    $datos[$rut]['rut']=$rut;
                                $datos[$rut]['nombre']=$nombre;
                                $datos[$rut]['apellido']=$apellido;
                                $datos[$rut]['telefono']=$telefono;
                                $datos[$rut]['mail']=$mail;
                                    $datos[$rut]['clave']=$clave;

                                }

                                
                                /* cerrar sentencia */
                                $sql->close();
                            }


                            foreach($datos as $rowe){
                        ?> 

                        <tr>
                        <td><?php echo $rowe['rut'] ?></td>
                        <td><?php echo $rowe['nombre'] ?></td>
                        <td><?php echo $rowe['apellido'] ?></td>
                        <td><?php echo $rowe['mail'] ?></td>
                        <td><?php echo $rowe['telefono'] ?></td>
                        <td><?php echo $rowe['clave'] ?></td>
                        <td align="center">
                               <button class="btn btn-info" data-toggle="modal" data-target="#Modaledicion" >Editar</button> 
                               <button class="btn btn-danger">Eliminar</button> 
                        </td>
                        </tr>   

                        <?php
                        }
                        ?>   
                     </tbody>
                     </table>                  
                 </div>
            </div>
        </div>  
    </div>    
      
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

      

   
   <!-- jQuery, Popper.js, Bootstrap JS -->
   <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="funciones.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
    <script type="text/javascript">
      $(document).ready(function(){
      $('#tabla').load('crudiiito/index.php');
      });
  </script>
    
<script type="text/javascript">
  function actualizar(){location.reload(true);}

</script>
  </body>
</html>


<footer class="foo py-4">
    
</footer>

