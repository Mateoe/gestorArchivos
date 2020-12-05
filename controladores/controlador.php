<?php

#Funcion para crear los directorios
function crearDirectorio($directorio,$ruta){
    if (!is_dir($directorio)) {
        shell_exec("mkdir $ruta/$directorio");
        shell_exec("chmod 777 $ruta/$directorio");
    }
    else{
        echo "<h1>Ya existe el directorio</h1>";
    }
}
#Funcion para crear los archivos
function crearArchivo($archivo,$ruta){
    if (is_file($archivo)) {
        shell_exec("touch $ruta/$archivo");
        shell_exec("chmod 777 $ruta/$archivo");
    }
    else{
        echo "<h1>Ya existe el archivo</h1>";
    }
}

function eliminarDirectorio($directorio,$ruta){
    shell_exec("rm -rf $ruta/$directorio");
}
#Funcion para eliminar los archivos
function eliminarArchivo($archivo,$ruta){
    shell_exec("rm $ruta/$archivo");
}

function cambiarNombre($viejo,$nuevo,$ruta){
    shell_exec("mv $ruta/$viejo $ruta/$nuevo");
}

#Se obienen los datos del index

$action = $_GET['action'];
$rutaActual = $_GET["ruta"];

if($action == "crear"){
    $nombre = $_GET['nombre'];
    $tipo = $_GET['tipo'];

    if($tipo == 'carpeta'){
        crearDirectorio($nombre,$rutaActual);
    }
    else{
        crearArchivo($nombre,$rutaActual);
    }
}

if($action == "eliminar"){
    $nombre = $_GET['nombre'];
    $tipo = $_GET['tipo'];

    if($tipo == 'carpeta'){
        eliminarDirectorio($nombre,$rutaActual);
    }
    else{
        eliminarArchivo($nombre,$rutaActual);
    }
}

if($action == "editar"){
    $viejo = $_GET['viejo'];
    $nuevo = $_GET['nuevo'];
    cambiarNombre($viejo,$nuevo,$rutaActual);
    
}


#Se redirige la pagina la index nuevamente
header("Location: ../index.php?ruta=$rutaActual");

?>