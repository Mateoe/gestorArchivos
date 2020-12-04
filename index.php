<!DOCTYPE html>
<html lang = "es">
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css" TYPE="text/css" MEDIA=screen>
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
</head>
<body>
	<header class="container"><h1 class="header">Explorador de archivos Linux</h1></header>

	<section>
	<div class="container opciones">
		<form action="controladores/controlador.php" method="get">
			<?php
				if(!empty($_GET["ruta"])){
					$ruta = $_GET["ruta"];
				}
				else{
					$ruta = "raiz";
				}
					

				echo "<input id='barra' type='text' name='ruta' value=$ruta />";
			?>
			<input id="barra" type="text" name="nombre" placeholder="Escribe un nombre" />
			<input class="btn btn-primary mg5" type="submit" name="action" value="crear"/>
            <input class="btn btn-primary mg5" type="submit" name="action" value="borrar"/><br><br>
			<input class="mg5" type="radio" name="tipo" value="carpeta" checked/>Carpeta
			<input class="mg5" type="radio" name="tipo" value="archivo"/>Archivo
		</form>
	</div>
	</section>

	<section>
	<div class="container mt-3">
	<div class="row">
	<div class="col-5 px-6">

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
		
        <table class="table border-rounded table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">Nombre</th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
                        </tr>
					</thead>
	    	<tbody>  
					
        <?php
		
		foreach($listaConTipoMostrar as $elemento =>$tipo){
			if($tipo=="directorio"){
				$nuevaRuta=$rutaActual."/".$elemento;
				?> 
				<tr>
					
				   <td><a href='controladores/controlador.php?ruta=<?=$nuevaRuta;?>'><?=$elemento;?></a></td>
				   <td></td>
				<?php
			}
			elseif($tipo=="archivo"){
			?> 
				
				<td><?=$elemento;?></td>
				<td></td>
				<?php
			}
			?>
			    <td>
                        <form action="delete_p.php" method="POST">
                            <button class="btn btn-danger" title="eliminar" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
				</td>
				
				<td class="mx-0 pr-2">
                        <button class="btn btn-success" title="editar" type="submit" data-toggle="modal" data-target="#exampleModal" data-whatever=<?=$elemento;?>><i class="far fa-edit"></i></button>
						
				</td>
				
				<td class="mx-0 pr-2">
                    <form action="clientes.php" method="GET">
                        <button class="btn btn-primary" title="editar" type="submit"><i class="fas fa-question-circle"></i></button>
                    </form>
				</td>
			</tr>
			<?php
		}
		
		?> 
		
		</tbody>	
	</table>
	
	</section>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="functions.js"></script>
</body>
</html>