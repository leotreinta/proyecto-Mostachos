<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>feedback</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="coment.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
  </head>
    
  <body > 
       
  <div class="text-center ">
         <h2 ><b>Mostachos.</b></h2> 
         
  </div> 

    <!--Ejemplo tabla con DataTables-->
    <div class="container" style="width:80%">

     
  <br>
        <div class="row">
                <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header"><h4>Tabla de sugerencias</h4></div>
        <div class="card-body">
                    <div class="table-responsive ">        
                        <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead >
                          <tr align="center">
                            <th>ID</th>
                            <th>Comentarios</th>
                         </tr>
                        </thead>

                        <tbody> 
                        <?php 
                            require('cone.php');

                            if ($sql = $conexion->prepare("SELECT  Id, Comentarios from Sugerencias")) {
                                /* asociar parámetros para marcadores */	    
                                //$sql->bind_param("is", $id,$nombre);
                                /* ejecutar la consulta */
                                $sql->execute();
                                /* asociar variables de resultado */
                                $sql->bind_result($id,$comentarios);
                                /* obtener valor */
                                while ($sql->fetch()) {
                                    $datos[$id]['id']=$id;
                                    $datos[$id]['comentarios']=$comentarios;
                                    

                                }
                                /* cerrar sentencia */
                                $sql->close();
                            }


                            foreach($datos as $rowa){
                        ?> 

                        <tr align="center">
                        <td><?php echo $rowa['id'] ?></td>
                        <td><?php echo $rowa['comentarios'] ?></td>
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
      
    </div>
        </div>  
    </div>    
      


    

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="funciones.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>


<footer class="foo py-2">
    
</footer>


