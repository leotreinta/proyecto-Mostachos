

function agregardatos(rut,nombre,apellido,telefono,mail,clave){

  cadena="rut=" + rut +
   "&nombre=" + nombre +
    "&apellido=" + apellido +
      "&mail=" + mail + 
      "&telefono=" + telefono + 
       "&clave=" + clave;

$.ajax({
      type:"POST",
      url:"agregarDatos.php",
      data:cadena,
      success:function(r){
          if(r = r.trim){
            $('#tabla').load('crudiito/index-2.php');
              alertify.success("agregado con exito :)");
          }else{
              alertify.error("fallo el servidor :c ");
          }

      }
     });

}

function agregaform(datos){
  d=datos.split('||');
  
  $('#rutu').val(d[0]);
  $('#nombreu').val(d[1]);
  $('#apellidou').val(d[2]);
  $('#mailu').val(d[3]);
  $('#telefonou').val(d[4]);
  $('#claveu').val(d[5]);
 
}

function actualizaDatos(){

  rut=$('#rutu').val();
  nombre=$('#nombreu').val();
  apellido=$('#apellidou').val();
  mail=$('#mailu').val();
  telefono=$('#telefonou').val();
  clave=$('#claveu').val();

  cadena="id=" + id +
        "&nombre=" + nombre +
        "&apellido=" + apellido +
        "&mail=" + mail +
        "&telefono=" + telefono +
        "&clave=" + clave;

  $.ajax({
      type:"POST",
      url:"actualizaDatos.php",
      data:cadena,
      success:function(r){

        if(r = r.trim){
          $('#tabla').load('crudiito/index-2.php');
              alertify.success("actualizado con exito :)");
          }else{
              alertify.error("no sepudo actualizar :c ");
          }

      }
     });
}

function preguntarSiNo(){
 alertify.confirm('Eliminar Datos', '¿Esta seguro que desea eliminar este registro?', 
					function(){ eliminarDatos(rut) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(rut){

  cadena="rut=" + rut;

  $.ajax({
    type:"POST",
    url:"eliminarDatos.php",
    data:cadena,
    success:function(r){
      if(r = r.trim){
            $('#tabla').load('crudiito/index-2.php');
        alertify.success("Eliminado con exito!");
      }else{
        alertify.error("Fallo el servidor :(");
      }
    }
  });
}