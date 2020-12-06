<!DOCTYPE html>
<html lang = "es">
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		<link rel="stylesheet" href="switchery.css" />
		<link rel="stylesheet" href="estilos2.css" TYPE="text/css">
	    <title>Explorador de archivos</title>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar nombre</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Salir">
                            <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
	               <form action="controladores/controlador.php" method="get">
                        <div class="modal-body">
	                        <input id="barra" type="text" name="nuevo" placeholder="Ingresa un nuevo nombre" />
		                    <input id="barra" type="text" name="viejo" hidden/>
		                    <?php
				                if(!empty($_GET["ruta"])){
					                $ruta = $_GET["ruta"];
				                }
				                else{
					                $ruta= "raiz";
				                }
				            echo "<input id='barra2' type='text' name='ruta' value=$ruta hidden/>";
		                    ?>
		
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                            <input type="submit" class="btn btn-primary" name="action" value="editar"></input>
                        </div>
	              </form>
                </div>
            </div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Salir">
                            <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
	               <form action="controladores/controlador.php" method="get">
                        <div class="modal-body">
	                       <label>Usuarios: </label>
		                   <select class="form-control" id="lista-usuarios" name="propietario">
						   <option value="creador">Creador</option>
							<option value="alvarez">Alvarez</option>
							<option value="beltran">Beltran</option>
							<option value="espinal">Espinal</option>
							<option value="mateo">Mateo</option>
						   </select>
                           <input id="barra" type="text" name="nombre" hidden/>
						   <?php
				                if(!empty($_GET["ruta"])){
					                $ruta = $_GET["ruta"];
				                }
				                else{
					                $ruta= "raiz";
				                }
				            echo "<input id='barra2' type='text' name='ruta' value=$ruta hidden/>";
		                    ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                            <input type="submit" class="btn btn-primary" name="action" value="cambiarPropietario"></input>
                        </div>
	              </form>
                </div>
            </div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Salir">
                            <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
	               <form action="controladores/controlador.php" method="get">
                        <div class="modal-body">
						<div class="form-group">
	                       <label for="lista-propietario">Propietario: </label>
		                   <select class="form-control" id="lista-propietario" name="propietarios">
						   <option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						   </select>
							</div>
							<div class="form-group">
						   <label for="lista-grupo">Grupo: </label>
						   <select class="form-control" id="lista-grupo" name="grupo">
						   <option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						   </select>
						   </div>
						   <div class="form-group">
						   <label for="lista-otros">Otros: </label>
						   <select class="form-control" id="lista-otros" name="otros">
						   <option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						   </select>
						   </div>
						   <input id="barra" type="text" name="nombre" hidden/>
						   <?php
				                if(!empty($_GET["ruta"])){
					                $ruta = $_GET["ruta"];
				                }
				                else{
					                $ruta= "raiz";
				                }
				            echo "<input id='barra2' type='text' name='ruta' value=$ruta hidden/>";
		                    ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                            <input type="submit" class="btn btn-primary" name="action" value="cambiarPermisos"></input>
                        </div>
	              </form>
                </div>
            </div>
        </div>
		
</head>
<body>
	<header class="container"><h1 class="header">Explorador de archivos Linux</h1></header>
	<div class="container-fluid">
	    <div class="row justify-content-start">
	        <div class="container opciones col-4 ">
			    <div class="card" style="background: #f0f2f5">
                    <div class="card-header">
                        Crear archivo/carpeta
					</div>
					<div class="card-body">
				<form action="controladores/controlador.php" method="get">
				<label for="ruta">Ruta</label>
			    <?php
				    if(!empty($_GET["ruta"])){
					    $ruta = $_GET["ruta"];
				    }
				    else{
					    $ruta = "raiz";
				    }
             	echo "<div class='form-group'> <input class='form-control' type='text' name='ruta' value=$ruta id='ruta'/> </div>";
				?>
				<div class="form-group">
				<label for="nombre">Ingresar nombre</label>	
				<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Escribe un nombre" />
				</div>
				
				<label >Seleccione una opcion</label>
				<div class="form-group">
				Archivo<input id="arcar" class="js-switch" type="checkbox" value="carpeta" name="tipo"/>Carpeta
				</div>
			    <input class="btn btn-primary mg5" type="submit" name="action" value="crear"/>
				
				</form>
				
				</div>
				</div>
		    </div>
	<div class="col-8">

		<?php
		include("controladores/controladorLista.php");
		if(!empty($_GET["ruta"])){
			$rutaActual = $_GET["ruta"];
		}
		else{
			$rutaActual = "raiz";
		}
		
		$listaConTipoMostrar=listar("controladores/$rutaActual");
		?> 
		<div class="tablaA">
        <table class="table border-rounded table-striped" id="tabla">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">Nombre</th>
							<th scope="col" class="text-center">Usuario</th>
							<th scope="col" class="text-center">Permisos</th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th>
							<form action="controladores/controlador.php" method="get">
							<input class="btn btn-success" type="submit" name="action" value="Pegar"/> 
							<input type="text" name="arrastre" value="<?php echo $_GET["arrastre"];?>" hidden /> 
							<input type="text" name="accion" value="<?php echo $_GET["accion"];?>" hidden /> 
							<?php
	                            if(!empty($_GET["ruta"])){
	                               $ruta = $_GET["ruta"];
		                        }
	                            else{
	                               $ruta= "raiz";
	                            }
	                            echo "<input id='rutaM' type='text' name='ruta' value=$ruta hidden/>";
	                        ?>
							</form>
							</th>
							
							
                        </tr>
					</thead>
	    	<tbody>  
					
        <?php
		
		foreach($listaConTipoMostrar as $elemento =>$tipo){

			$propietario = shell_exec("stat -c %U controladores/$rutaActual/$elemento"); #extrae el propietario
			$permisos = shell_exec("stat -c %a controladores/$rutaActual/$elemento"); #extrae los permisos


			if($tipo=="carpeta"){
				$nuevaRuta=$rutaActual."/".$elemento;
               if(!empty($_GET["arrastre"])){
					$arrastre=$_GET["arrastre"];
				}
				else{
					$arrastre="";
				}
				if(!empty($_GET["accion"])){
					$accion=$_GET["accion"];
				}
				else{
					$accion="";
				}
				?> 
				<tr>
					
				   <td><a href='controladores/controlador.php?ruta=<?=$nuevaRuta;?>&arrastre=<?=$arrastre?>&accion=<?=$accion?>'><?=$elemento;?></a></td>
				   
				<?php
			}
			else{
			?> 
				
				<td><?=$elemento;?></td>
				
				<?php
			}
			?>

				<td>
					<label> <?=$propietario?> </label>
				</td>

				<td>
					<label> <?=$permisos?> </label>
				</td>

			    <td>
                   <!--  <a href="controladores/controlador.php?nombre=<?=$elemento?>&tipo=<?=$tipo?>&ruta=<?=$rutaActual?>&action=eliminar">eliminar</a>-->
                   <form action="controladores/controlador.php" method="GET">
							<button class="btn btn-danger" title="eliminar" type="submit"><i class="fas fa-trash-alt"></i></button>
							<input type="text" name="nombre" value=<?=$elemento?> hidden>
							<input type="text" name="tipo" value=<?=$tipo?> hidden>
							<input type="text" name="ruta" value=<?=$rutaActual?> hidden>
							<input type="text" name="action" value="eliminar" hidden>
                        </form>
				</td>
				
				<td class="mx-0 pr-2">
                        <button class="btn btn-success" title="editar nombre" type="submit" data-toggle="modal" data-target="#exampleModal" data-whatever=<?=$elemento;?>><i class="far fa-edit"></i></button>
						
				</td>
				
				
				<td class="mx-0 pr-2">
                    
                        <button class="btn btn-primary" title="editar usuario" type="submit" data-toggle="modal" data-target="#exampleModal2" data-whatever=<?=$elemento;?>><i class="far fa-user"></i></button>
                   
				</td>
				<td class="mx-0 pr-2">
                 
                        <button class="btn btn-info" title="editar permisos" type="submit" data-toggle="modal" data-target="#exampleModal3" data-whatever=<?=$elemento;?>><i class="fas fa-question-circle"></i></button>
                    
				</td>
				<td>
				<input class="seleccionar" type="checkbox" name="checkbox" id="checkbox"/>
				</td>
				
			</tr>
			<?php
		}
		
		?> 
		
		</tbody>	
	</table>
	
	</div>
	<div class="container">
	<div class="col-9">
	   <form action="controladores/controlador.php" method="GET">
	        <input class="btn btn-secondary" title="Aplicar" type="submit" value="Aplicar" name="action" id="btn">
	        Copiar
            <input class="js-switch" type="checkbox" name="accion" value="cortar"/>
	        Cortar
	        <?php
	        if(!empty($_GET["ruta"])){
	        $ruta = $_GET["ruta"];
		    }
	        else{
	        $ruta= "raiz";
	        }
	        echo "<input id='rutaM' type='text' name='ruta' hidden value=$ruta />";
	        ?>
            <input id="checkbox-seleccionados" type="text" name="nombre" hidden/>
	    </form>
	</div>
	<div class="col-3">
	<form action="controladores/controlador.php" method="GET">
	   <input class="btn btn-success" type="submit" name="action" value="Volver"/> 
	   <?php
	        if(!empty($_GET["ruta"])){
	        $ruta = $_GET["ruta"];
		    }
	        else{
	        $ruta= "raiz";
	        }
			echo "<input id='rutaM' type='text' name='ruta' hidden value=$ruta />";
			if(!empty($_GET["ruta"])){
				$arrastre=$_GET["arrastre"];
			}
			else{
				$arrastre="";
			}
			echo "<input id='rutaM' type='text' name='arrastre' hidden value=$arrastre />";
	        ?>
			
				
	</form>   
	</div>
	
	</div>

	

    
	
	
	</div>
	
	</div>
	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="functions.js"></script>
	<script src="switchery.js"></script>
	<script>
		var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
	</script>
	
</body>
</html>