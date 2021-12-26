<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FeedBack</title>
      
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
       <header>
       <div class="container navar ">
        <nav class="navbar navbar-expand-lg navbar-dark ">
           <a class="navbar-brand js-scroll-trigger" href="#page-top"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i></button>
            <img src="lom2.jpg"  height="40px">
            </a>
            <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="../MOSTACHOS.php" class="nav-link">
                        <b><i> INICIO</i></b>
                     </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="../crud-admi/index-2.php" class="nav-link">
                         <b><i> CLIENTES</i></b>
                      </a>
                   </li> 
                   <li class="nav-item active">
                      <a class="nav-link js-scroll-trigger" href="coment.php" class="nav-link">
                        <b><i>SUGERENCIAS</i></b>
                     </a>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
                          <b><i> GALERIA</i></b>
                       </a>
                        <div class="dropdown-menu">
                         <a  class="dropdown-item" href="../GALERIA/galeria-chico.html"><b><i> CABALLEROS</i></b></a>
                            <a class="dropdown-item" href="../GALERIA/galeria-chica.html"><b><i> DAMAS</i></b></a>
                        </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="../GALERIA/tiendita.html" class="nav-link">
                        <b><i> TIENDA</i></b>
                     </a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="https://mostachos1.agendapro.com/cl/workflow?local=9662" target="_blank" class="nav-link">
                        <b><i>RESERVAS</i></b>
                     </a>
                   </li>
                </ul>
                    <span class="navbar-text">
                       <b><i> Mostachos</i></b>
                    </span>
             </div>
        </nav>

    </div>
      </header>
  
    <!--Ejemplo tabla con DataTables-->
    <div class="container" style="width:80%">

     
  <br>
        <div class="row ">
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
      


 <footer class="footer bg-black small text-center text-BLACK-50"><div class="container"><b>Copyright © B.Mostachos 2020</b></div></footer>
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


