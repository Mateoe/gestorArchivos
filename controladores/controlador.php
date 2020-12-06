<?php

#Funcion para crear los directorios
function crearDirectorio($directorio,$ruta){
    if (!is_dir($directorio)) {
        shell_exec("mkdir $ruta/$directorio");
        shell_exec("chmod 777 $ruta/$directorio");
        shell_exec("sudo chown creador $ruta/$directorio");
        
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
        shell_exec("sudo chown creador $ruta/$archivo");
    }
    else{
        echo "<h1>Ya existe el archivo</h1>";
    }
}

function eliminarDirectorio($directorio,$ruta){
    shell_exec("rm -R $ruta/$directorio");
}

#Funcion para eliminar los archivos
function eliminarArchivo($archivo,$ruta){
    shell_exec("rm $ruta/$archivo");
}

#Funcion para cambiar los nombres
function cambiarNombre($viejo,$nuevo,$ruta){
    shell_exec("mv $ruta/$viejo $ruta/$nuevo");
}

#Funcion para cambiar los propietarios
function cambiarPropietario($ruta,$nombreDocumento,$nuevoPropietario){
    shell_exec("sudo chown $nuevoPropietario $ruta/$nombreDocumento");
}

#Función para cambiar los permisos
function cambiarPermisos($ruta,$nombreDocumento,$nuevosPermisos){
    shell_exec("sudo chmod $nuevosPermisos $ruta/$nombreDocumento");
}

function cortar($nombre,$ruta){
    shell_exec("mv $nombre $ruta");
}

function copiar($nombre,$ruta){
    shell_exec("cp -r $nombre $ruta");
}


#Se obienen los datos del index
$action = $_GET['action'];
$rutaActual = $_GET["ruta"];
$arrastre= $_GET["arrastre"];
$accion= $_GET["accion"];

#Se realiza la selección de opciones
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

if($action =="cambiarPropietario"){
    $nombre = $_GET['nombre']; #nombre del archivo
    $propietario = $_GET['propietario']; #nombre del propietario

    cambiarPropietario($rutaActual,$nombre,$propietario);

}

if($action =="cambiarPermisos"){
    $nombre = $_GET['nombre']; #nombre del archivo
    $propietarios = $_GET['propietarios']; #permisos del propietario
    $grupo = $_GET['grupo']; #permisos del grupo
    $otros = $_GET['otros']; #otros

    $permisos = $propietarios.$grupo.$otros;
    cambiarPermisos($rutaActual,$nombre,$permisos);

}

if($action=="Aplicar"){
    $arrastre= $_GET['nombre'];
    if($accion!="cortar"){
      $accion= "copiar";
    }
}

if($action=="Pegar"){
    $arr= explode(' ',$arrastre);
    $arr_length = count($arr);
    
    if($accion=="copiar"){
        for($i=0;$i<$arr_length;$i++)
        {  
         copiar($arr[$i],$rutaActual); 
        }
    }else{
        for($i=0;$i<$arr_length;$i++)
        {  
         cortar($arr[$i],$rutaActual); 
        }
    }
    
    
    #cortar($arrastre,$rutaActual);
}

if($action=="Volver"){
    $arr= explode("/",$rutaActual);
    $arr_length = count($arr);
    $rutaNueva= "raiz";
    for($i=1;$i<$arr_length-1;$i++)
    {
     $rutaNueva .= "/";   
     $rutaNueva .= $arr[$i];
    }
    $rutaActual= $rutaNueva;
   
}


#Se redirige la pagina la index nuevamente
header("Location: ../index.php?ruta=$rutaActual&accion=$accion&arrastre=$arrastre");

?>