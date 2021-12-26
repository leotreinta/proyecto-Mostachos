<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crud 2.0</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/funciones2.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
  
</head>
<body>
    
   <div class="container">
     <div id="tabla"></div>
   </div>

 <!-- Modal para Registros nuevos -->
 <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
           <div class="modal-content">
                 <div class="modal-header " >
                    <h5 class="modal-title" id="exampleModalLabel" >Agregar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
              <div class="modal-body">
                      
                      <div class="col-sm-12 col-md-12 mb-6">
                          <label for="rut">Rut</label>
                          <input name="rut" type="text" class="form-control" id="rutu" placeholder="" value="" required>
                          <div class="valid-feedback">¡Ok válido!</div>
                          <div class="invalid-feedback">Complete el campo.</div>    
                      </div>

                        <div class="col-sm-12 col-md-12 mb-6">
                          <label for="nombre">Nombre</label>
                          <input name="nombre" type="text" class="form-control" id="nombreu" placeholder="" value="" required>
                          <div class="valid-feedback">¡Ok válido!</div>
                          <div class="invalid-feedback">Complete el campo.</div>    
                        </div>

                        <div class="col-sm-12 col-md-12 mb-6">
                          <label for="apellido">Apellido</label>
                          <input name="apellido" type="text" class="form-control" id="apellidou" placeholder="" value="" required>
                          <div class="valid-feedback">¡Ok válido!</div>
                          <div class="invalid-feedback">Complete el campo.</div>   
                        </div>
                      
                      <div class="col-sm-12 col-md-4 mb-6">
                          <label for="telefono">Telefono</label>
                          <input name="telefono" type="text" class="form-control" id="telefonou" placeholder="" value="" required>
                          <div class="valid-feedback">¡Ok válido!</div>
                          <div class="invalid-feedback">Complete el campo.</div>    
                        </div>
                        
                        <div class="col-sm-12 col-md-12 mb-6">
                          <label for="mail">Email</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                              </div>
                                <input name="mail" type="text" class="form-control" id="mailu" placeholder="" aria-describedby="inputGroupPrepend" required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>   
                          </div>
                        </div>
                      
                      <div class="col-sm-12 col-md-4 mb-6">
                          <label for="clave">Clave</label>
                          <input name="clave" type="text" class="form-control" id="claveu" placeholder="" value="" required>
                          <div class="valid-feedback">¡Ok válido!</div>
                          <div class="invalid-feedback">Complete el campo.</div>    
                      </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
                    </div>
             </div>
          </div>
         </div>
       </div>



        <!-- Modal para Registros nuevos -->
      <div class="modal fade" id="Modaledicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog ">
           <div class="modal-content">
                 <div class="modal-header " >
                    <h5 class="modal-title" id="exampleModalLabel" >Agregar Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
              <div class="modal-body">
                      <div>
                         <input type="text" hidden="" id="idpersona" name="">
                      </div>
                      
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
                    <button type="button" class="btn btn-info" id="actualizadatos" data-dismiss="modal" >Actualizar</button>
                    </div>
                
            </div>
          </div>
         </div>
       </div>
</body>
</html>

<script type="text/javascript">
   $(document).ready(function(){
      $('#tabla').load('componentes/tabla.php');
   });
</script>