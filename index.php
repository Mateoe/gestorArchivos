<!DOCTYPE html>
<html lang = "es">
<head>
	<meta charset="utf-8">
	<title>Explorador de archivos</title>
</head>
<body>
	<header><h1>Trabajo 01 - Explorador de archivos Linux</h1></header>
	

	<section>
		<form action="controladores/controlador.php" method="get">
			<?php
				if(!empty($_GET["ruta"])){
					$ruta = $_GET["ruta"];
				}
				else{
					$ruta = "raiz";
				}
					

				echo "<input type='text' name='ruta' value=$ruta />";
			?>
			<br><br><input type="text" name="nombre" placeholder="Escribe un nombre" /><input type="submit" name="action" value="crear"/><br><br>
			<input type="radio" name="tipo" value="carpeta" checked/>Carpeta
			<input type="radio" name="tipo" value="archivo"/>Archivo
		</form>
	</section>



	<section>
		<!-- Script php para mostrar carpetas-->
		<?php
		include("controladores/controladorLista.php");
		if(!empty($_GET["ruta"])){
			$rutaActual = $_GET["ruta"];
		}
		else{
			$rutaActual = "raiz";
		}
		
		$listaConTipoMostrar=listar("controladores/$rutaActual");
		echo "<ul>";
		foreach($listaConTipoMostrar as $elemento =>$tipo){
			if($tipo=="directorio"){
				$nuevaRuta=$rutaActual."/".$elemento;
				echo "<li><a href='controladores/controlador.php?ruta=$nuevaRuta'>$elemento</a></li>";
			}
			elseif($tipo=="archivo"){
				echo "<li>$elemento</li>";
			}
		}
		echo "</ul>";
		?> 
	</section>

	<footer>
		Universidad Nacional de Colombia Sede Medellin
		<br><br>
		Trabajo 02 - Sistemas Operativos
		<br><br>
		Integrantes:
		<ul>
			<li>Mateo Espinal Londoño</li>
		</ul>
	</footer>
</body>
</html>