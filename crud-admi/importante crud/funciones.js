

function agregardatos(rut,nombre,apellido,telefono,mail,clave){

  cadena="rut=" + rut +
   "&nombre=" + nombre +
    "&apellido=" + apellido +
     "&telefono=" + telefono + 
      "&mail=" + mail + 
       "&clave=" + clave;

$.ajax({
      type:"POST",
      url:"agregarDatos.php",
      data:cadena,
      success:function(r){
          if(r==1){
              alertify.success("agregado con exito :)");
          }else{
              alertify.error("fallo el servidor :c ");
          }

      }
     });

}