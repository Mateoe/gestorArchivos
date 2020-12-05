<?php

#ejecuta el comando ls de linux y lo convierte en lista
function listar($ruta){
    $listaLinux = shell_exec("ls ".$ruta);
    $lista=preg_split('/[\r\n]+/',$listaLinux);
    unset($lista[count($lista)-1]);

    
    $listaConTipo=array();

    #Se distingue si es u archivo o directorio para posteriormente almacenarlo en el
    #arreglo
    foreach($lista as $elemento){
        if(is_file("$ruta/$elemento")){
            $listaConTipo[$elemento]='archivo';
        }
        elseif(is_dir("$ruta/$elemento")){
            $listaConTipo[$elemento]='carpeta';
        }
    }

    return $listaConTipo;
    #if(is_file("$ruta/$lista[0]")){
    #    return $lista;
    #}
    
}
?>