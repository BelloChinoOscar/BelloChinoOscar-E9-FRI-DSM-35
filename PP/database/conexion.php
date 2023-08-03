<?php
$hola='localhost';
$usuario='root';
$contra='';
$DB='chapultepec';


$conexion=new mysqli($hola,$usuario,$contra,$DB);

if($conexion->connect_errno){
    die("fallo");
}else{
    echo("Se conecto");
}


?>