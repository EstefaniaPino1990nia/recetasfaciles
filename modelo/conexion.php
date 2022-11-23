
<?php

function crearConexion($database){
    
    // Datos de conexión
    $host = "localhost";
    $user = "root";
    $password = "";
    $conexion = new mysqli($host, $user, $password, $database);
    
    if($conexion->connect_errno)
        exit("<br>Error de conexión: ". $conexion->connect_error);

    // Se devuelve la conexión
    return $conexion;
}



function obtenerReceta($mireceta){

    $conexion=crearConexion("recetario");
    $mireceta=$_POST["enviando"];

    $sql="SELECT * FROM pescado WHERE Nombre = '$mireceta'";
    $result=$conexion->query($sql);

    return $result;

}

function obtenerCarne($mireceta){

    $conexion=crearConexion("recetario");
    $mireceta=$_POST["enviando"];

    $sql="SELECT * FROM carne WHERE Nombre = '$mireceta'";
    $result=$conexion->query($sql);

    return $result;

}

function obtenerVerdura($mireceta){

    $conexion=crearConexion("recetario");
    $mireceta=$_POST["enviando"];

    $sql="SELECT * FROM verdura WHERE Nombre = '$mireceta'";
    $result=$conexion->query($sql);

    return $result;

}
?>