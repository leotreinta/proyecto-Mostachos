<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <title>Registro</title>
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
 <!-- Custom styles for this template -->
    <link href="regi.css" rel="stylesheet">
 </head>

  <body>
  <header>
    <h3>...</h3>
</header>
    <div class="Container">

      <div class="rowi" align="center" >
          <div class="col-12">

            <div class="card shadow-lg p-3 mb-5 bg-white  ">
              <div class="card-header">Registrarse</div>
              <div class="card-body ">

              <div class="row ">
                  <div class=" col-sm-12 col-md-6 py-4 ">
                           <img src="img/demo1.jpg " class="img-fluid float-right img-thumbnail" >
                       </div>

                       <div class="col-sm-12 col-md-6 ">
                       
                        <form id="form1" action=prueba.php method="post" class="needs-validation" novalidate>
          
                          <div class="form-row">
        
                          <div class="col-sm-12 col-md-6 mb-6">
                              <label for="rut">Rut</label>
                              <input name="rut" type="text" class="form-control" id="rut" placeholder="" value="" required>
                              <div class="valid-feedback">¡Ok válido!</div>
                              <div class="invalid-feedback">Complete el campo.</div>    
                            </div>
        
                            <div class="col-sm-12 col-md-6 mb-6">
                              <label for="nombre">Nombre</label>
                              <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                              <div class="valid-feedback">¡Ok válido!</div>
                              <div class="invalid-feedback">Complete el campo.</div>    
                            </div>
        
                            <div class="col-sm-12 col-md-6 mb-6">
                              <label for="apellido">Apellido</label>
                              <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required>
                              <div class="valid-feedback">¡Ok válido!</div>
                              <div class="invalid-feedback">Complete el campo.</div>   
                            </div>
                          
        
                          <div class="col-sm-12 col-md-6 mb-6">
                              <label for="telefono">Telefono</label>
                              <input name="telefono" type="text" class="form-control" id="telefono" placeholder="" value="" required>
                              <div class="valid-feedback">¡Ok válido!</div>
                              <div class="invalid-feedback">Complete el campo.</div>    
                            </div>
                            
        
                            <div class="col-sm-12 col-md-6 mb-6">
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
                            <div  class="col-sm-12 col-md-4 mb-6"><br></div>
                            <div  class="col-sm-12 col-md-4 mb-6"><br></div>
                             <div class="col-sm-12 col-md-4 mb-6"><br></div>
        
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                              <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones. &nbsp;&nbsp;&nbsp;</label>
                              <div class="valid-feedback">¡Aceptado!</div>
                            </div>
                            
                          </div>
                          <input type="submit"  class="bububu mx-auto text-white "  value="ENVIAR">
                        </form>
                      </div>
                   </div>
              </div>
            </div>
          </div>
    
          

         
      </div>
    
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="codigo.js"></script> 	 
</body>
</html>
