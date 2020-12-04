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
    if (!is_file($archivo)) {
        shell_exec("touch $ruta/$archivo");
        shell_exec("chmod 777 $ruta/$archivo");
    }
    else{
        echo "<h1>Ya existe el archivo</h1>";
    }
}

#Funcion para borrar los directorios
function borrarDirectorio($directorio,$ruta){
    if (is_dir($directorio)) {
        shell_exec("rm -r $ruta/$directorio");
    }
    else{
        echo "<h1>No existe el directorio</h1>";
    }
}
#Funcion para borrar los archivos
function borrarArchivo($archivo,$ruta){
    if (is_file($archivo)) {
        shell_exec("rm $ruta/$archivo");
    }
    else{
        echo "<h1>No existe el archivo</h1>";
    }
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
    elseif($tipo == 'archivo'){
        crearArchivo($nombre,$rutaActual);
    }
}

if($action == "borrar"){
    $nombre = $_GET['nombre'];
    $tipo = $_GET['tipo'];

    if($tipo == 'carpeta'){
        borrarDirectorio($nombre,$rutaActual);
    }
    elseif($tipo == 'archivo'){
        borrarArchivo($nombre,$rutaActual);
    }
}




#Se redirige la pagina la index nuevamente
header("Location: ../index.php?ruta=$rutaActual");

?>
