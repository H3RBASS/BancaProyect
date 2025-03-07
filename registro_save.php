<?php

session_start();
include "data.php";

$Nombre = $_POST["nombreC"];
$Apellidos = $_POST["apellidos"];

$OdataPersona = new Data_Persona;


$OdataPersona->Nombre = $Nombre;

$_SESSION["Persona"] = serialize($OdataPersona);
//deserializar

$persona1 = unserialize($_SESSION["Persona"]);

?>