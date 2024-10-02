<?php
$conexion = new mysqli($host,$usuario,$clave,$database,$port);
if ($conexion->connect_error) {
    echo"no se pudo conectar" .$conexion->conect_error;
}
echo "conexion Ok".$conexion->host_info;
?>
