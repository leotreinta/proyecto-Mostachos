<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="insert.css">
    <title>modal</title>
      
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
  <header style="height: 70px">
  <div>ssd</div>
     </header> 
    

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white  ">
        <div class="card-header">Ingresar Cliente nuevo</div>
        <div class="card-body ">
        <form id="form1" action="index-1.php" method="post" class="needs-validation" novalidate>
          
                  <div class="form-row">

                  <div class="col-sm-12 col-md-4 mb-6">
                      <label for="rut">Rut</label>
                      <input name="rut" type="text" class="form-control" id="rut" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>

                    <div class="col-sm-12 col-md-4 mb-6">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>

                    <div class="col-sm-12 col-md-4 mb-6">
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
                    

                    <div class="col-sm-12 col-md-4 mb-6">
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
                  <button class="btn btn-primary " type="submit" widht="20%">Enviar</button>
                </form>
                </div>   
            </div>
          </div>       
       </div>                  
   </div>       
    
             
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
    <script src="codigo.js"></script> 	 
    <script type="text/javascript" src="main.js"></script>  
    
    
    
  </body>
</html>
