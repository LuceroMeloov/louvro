<?php
$conexion = new mysqli("localhost", "admin", "","proyecto");
if($conexion){
    echo "";
}
else{
    echo "Conexion no establecida";
}
?>