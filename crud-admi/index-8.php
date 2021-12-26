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
         <button class="btn btn-success" data-toggle="modal" data-target="#Modalnuevo" > Nuevo</button>
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
                                <button type="button" class="btn btn-info editbtn" data-toggle="modal" data-target="#editar">Editar</button> 
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

                <form>
                <div class="col-sm-12 col-md-12 mb-6">
                      <label for="rut">Rut</label>
                      <input name="rut" type="text" class="form-control" id="rut" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>

                    <div class="col-sm-12 col-md-12 mb-6">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>

                    <div class="col-sm-12 col-md-12 mb-6">
                      <label for="apellido">Apellido</label>
                      <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  

                  <div class="col-sm-12 col-md-4 mb-6">
                      <label for="telefono">Telefono</label>
                      <input name="telefono" type="text" class="form-control" id="telefono" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    

                    <div class="col-sm-12 col-md-12 mb-6">
                      <label for="mail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="mail" type="text" class="form-control" id="mail" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                      </div>
                     </div>
                  

                  <div class="col-sm-12 col-md-4 mb-6">
                      <label for="clave">Clave</label>
                      <input name="clave" type="text" class="form-control" id="clave" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    

                  
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
                    
                </div>
               
                    </form>
            </div>
          </div>
         </div>
       </div>
      </div>
            
          



                <!-- Modal para Edicion -->
            <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog ">
               <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                 <form action="actualizaDatos.php" method="POST">

                    <input type="text" hidden="" id="idpersona" name="">
                        
                    <label for="rut" class="col-form-label">Rut:</label>
                    <input type="text" class="form-control" id="rutu" class="form-control input-sm">

                    <label for="nombre" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombreu" class="form-control input-sm">

                    <label for="apellido" class="col-form-label">Apellido:</label>
                    <input type="text" class="form-control" id="apellidou" class="form-control input-sm">

                    <label for="mail" class="col-form-label">Mail:</label>
                    <input type="text" class="form-control" id="mailu" class="form-control input-sm">

                    <label for="telefono" class="col-form-label">Telefono:</label>
                    <input type="text" class="form-control" id="telefonou" class="form-control input-sm">

                    <label for="clave" class="col-form-label">Clave:</label>
                    <input type="text" class="form-control" id="claveu" class="form-control input-sm">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Actualizar</button>
                </div>

              </form>
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
    <script src="codigo.js"></script> 	
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>

  <script type="text/javascript">
   $(document).ready(function(){
       $('#tabla').load('crudiito/index.php');
          
   });
 </script>

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

});
 </script>

<script>
$('.editbtn').on('click',function(){

  $tr=$(this).closest('tr');
  var datos=$tr.children("td").map(function(){
    return $(this).text();
  });
   $('#rutu').val(datos[0]);
   $('#nombreu').val(datos[1]);
   $('#apellidou').val(datos[2]);
   $('#telefonou').val(datos[3]);
   $('#mailu').val(datos[4]);
   $('#claveu').val(datos[5]);

});

</script>


</html>

<footer class="foo py-4">
    ...
</footer>

 