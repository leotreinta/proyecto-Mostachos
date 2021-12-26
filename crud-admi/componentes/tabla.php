

<div class="row">
   <div class="col-sm-12">
    <h2>tabla dinamica</h2>
	 <table class="table responsive table-hover table-condensed table-bordered">
	   <div class="col-lg-12">
	   <button class="btn btn-success" data-toggle="modal" data-target="#modalNuevo" > Nuevo</button>
       </div>
	   <br>
			<tr align="center">
				<td>Rut</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Mail</td>
				<td>Telefono</td>
				<td>Clave</td>
				<td>Acciones</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		
                        <?php 
                            require('cone.php');

                            if ($sql = $conexion->prepare("SELECT  Id, Nombre, Rut, Apellido, Mail, Telefono, Clave  from Cliente")) {
                               
                                $sql->execute();
                               
                                $sql->bind_result($id,$nombre,$rut,$apellido,$telefono,$mail,$clave);
                              
                                while ($sql->fetch()) {
									$datos[$id]['id']=$id;
                                    $datos[$id]['rut']=$rut;
                                    $datos[$id]['nombre']=$nombre;
                                    $datos[$id]['apellido']=$apellido;
                                    $datos[$id]['telefono']=$telefono;
                                    $datos[$id]['mail']=$mail;
                                    $datos[$id]['clave']=$clave;

                                }
                                /* cerrar sentencia */
                                $sql->close();
                            }


                            foreach($datos as $rowe){
								$datos=$rowe['id']."||".
                                       $rowe['rut']."||".
                                      $rowe['nombre']."||".
                                      $rowe['apellido']."||".
                                      $rowe['mail']."||".
                                      $rowe['telefono']."||".
                                      $rowe['clave'];
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
                               <button class="btn btn-danger" >Eliminar</button> 
                        </td>
                        </tr>   

                        <?php
                        }
                        ?>   
                    
     </table>
	</div>
</div>
