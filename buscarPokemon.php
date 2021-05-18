<?php

function buscarPorNombre($nombre){
    require "conexion.php";
    $sql = "select * from Pokemon where nombre like '$nombre'";
    $resultado = $conexion->query($sql);
    if($pokemonEncontrado = mysqli_fetch_array($resultado)){
     return $pokemonEncontrado;

    }
    else{
        return $miarray=array();
    }
}


function getImagen(array $pokemonEncontrado){

    if(empty($pokemonEncontrado)== false){
        return "recursos/imgPokemon/$pokemonEncontrado[1].png";
    }
    else{
        return "recursos/imgPokemon/no encontrado.png";
    }
}


function getId(array $pokemonEncontrado){
    if(empty($pokemonEncontrado)== false){
        return $pokemonEncontrado[0];

    }
    else{
        return "Pokemon no encontrado";
    }
}


function getDescripcion(array $pokemonEncontrado){
    if(empty($pokemonEncontrado)== false){
        return $pokemonEncontrado[2];

    }
    else{
        return "Pokemon no encontrado";
    }
}


function getNombre(array $pokemonEncontrado){

    if(empty($pokemonEncontrado)== false){
        return $pokemonEncontrado[1];

    }
    else{
        return "Pokemon no encontrado";
    }

}
function getTipo(array  $pokemonEncontrado){

    if(empty($pokemonEncontrado)==false){
       $cadena= "$pokemonEncontrado[3]";
       $cadenaSinEspacio=trim($cadena);
       return "recursos/tiposImg/$cadenaSinEspacio.gif";

    }
    else{
        return "recursos/imgPokemon/no encontrado.png";
    }
}

/*function buscarPorTipo($tipo){
    require "conexion.php";
    $sql = "select * from Pokemon where tipo like '$tipo'";
    $resultado= $conexion->query($sql);
    if($pokemonesEncontrado= mysqli_fetch_array($resultado)){
        return$pokemonesEncontrado;
    }
    else{
        return $arrayVacio=array();
    }
}*/
