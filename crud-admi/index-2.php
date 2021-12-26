<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      <!--alertify-->
      <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

   
  </head>
    
  <body > 
     <header >
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
                   <li class="nav-item active">
                      <a class="nav-link js-scroll-trigger" href="#" class="nav-link">
                         <b><i> CLIENTES</i></b>
                      </a>
                   </li> 
                   <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="../SUGERENCIAS/coment.php" class="nav-link">
                        <b><i>SUGERENCIAS</i></b>
                     </a>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
                          <b><i> GALERIA</i></b>
                       </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../GALERIA/galeria-chico.html"><b><i> CABALLEROS</i></b></a>
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
    <br>
     
    <div class="container caja">
    
     <div id="tabla">
     
      <div class="row pt-1">
         <div class="col-lg-12">
         <button class="btn btn-success" data-toggle="modal" data-target="#Modalnuevo" ><span class="material-icons">person_add_alt_1</span> New</button>
         </div>
      </div>
     

      <br>

    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive" >        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead align="center" >
                            <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Clave</th>
                            <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody align="center"> 
                        <?php 
                            require('cone.php');

                            if ($sql = $conexion->prepare("SELECT  Nombre, Rut, Apellido, Telefono, Mail, Clave  from Clientes")) {
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

                               $datos=$rowe['rut']."||".
                                      $rowe['nombre']."||".
                                      $rowe['apellido']."||".
                                      $rowe['telefono']."||".
                                      $rowe['mail']."||".
                                      $rowe['clave'];
                        ?> 

                        <tr>
                        <td><?php echo $rowe['rut'] ?></td>
                        <td><?php echo $rowe['nombre'] ?></td>
                        <td><?php echo $rowe['apellido'] ?></td>
                        <td><?php echo $rowe['telefono'] ?></td>
                        <td><?php echo $rowe['mail'] ?></td>
                        <td><?php echo $rowe['clave'] ?></td>
                        <td align="center">
                               <button class="btn btn-info" data-toggle="modal" data-target="#Modaledicion"  onclick="agregaform('<?php echo $datos ?>')"><span class="material-icons">edit</span>Edit</button> 
                               <button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $rowe['rut'] ?>')"><span class="material-icons">delete</span>Delete</button> 
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
 </div>  

      <!-- Modal para Registros nuevos -->
      <div class="modal fade" id="Modalnuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
           <div class="modal-content">
                 <div class="modal-header " >
                    <h5 class="modal-title" id="exampleModalLabel" >Agregar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
              <div class="modal-body">
              <form id="formUsuarios">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Rut:</label>
                    <input type="text" class="form-control" id="rut">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Apellido:</label>
                    <input type="text" class="form-control" id="apellido">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Telefono:</label>
                    <input type="text" class="form-control" id="telefono">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-group">
                        <label for="" class="col-form-label">Mail:</label>
                        <input type="text" class="form-control" id="mail">
                        </div>
                    </div>    
                    <div class="col-lg-3">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Clave:</label>
                        <input type="text" class="form-control" id="clave">
                        </div>            
                    </div>    
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
            </div>
        </form>    
            </div>
          </div>
         </div>
       </div>
       
  
         <!-- Modal para Edicion -->
           <div class="modal fade" id="Modaledicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog ">
               <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                <form id="formUsuarios">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Rut:</label>
                    <input type="text" class="form-control" id="rutu">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombreu">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Apellido:</label>
                    <input type="text" class="form-control" id="apellidou">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Telefono:</label>
                    <input type="text" class="form-control" id="telefonou">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-group">
                        <label for="" class="col-form-label">Mail:</label>
                        <input type="text" class="form-control" id="mailu">
                        </div>
                    </div>    
                    <div class="col-lg-3">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Clave:</label>
                        <input type="text" class="form-control" id="claveu">
                        </div>            
                    </div>    
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-info" id="actualizadatos" data-dismiss="modal" >Actualizar</button>
            </div>
        </form>    
             </div>
           </div>
          </div>
         </div>
      </div>
       <br>
       <br>

      <footer class="footer bg-black small text-center text-white-50"><div class="container"><b>Copyright © B.Mostachos 2020</b></div></footer>
    
     <!-- jQuery, Popper.js, Bootstrap JS -->
     <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="funciones.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
    <script src="codigo.js"></script> 	
    <script type="text/javascript" src="main.js"></script> 
           
  </body>
</html>




<script type="text/javascript">
   $(document).ready(function(){
       $('#guardarnuevo').click(function(){
           rut=$('#rut').val();
           nombre=$('#nombre').val();
           apellido=$('#apellido').val();
           telefono=$('#telefono').val();
           mail=$('#mail').val();
           clave=$('#clave').val();
        agregardatos(rut,nombre,apellido,telefono,mail,clave);

       });

   $('#actualizadatos').click(function(){
    rut=$('#rutu').val([0]);
  nombre=$('#nombreu').val([1]);
  apellido=$('#apellidou').val([2]);
  mail=$('#telefonou').val([3]);
  telefono=$('#mailu').val([4]);
  clave=$('#claveu').val([5]);
     actualizaDatos(rut,nombre,apellido,telefono,mail,clave);
   })

   $("#Modalnuevo").click(function(){
    $("#formUsuarios").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
              
   
});  
  $("#Modaledicion").click(function(){
    
    $(".modal-header").css("background-color", "#11B7BC");
    $(".modal-header").css("color", "white");
              
   
});    

});
 </script>

<footer class="foo py-2">
    
</footer>

 