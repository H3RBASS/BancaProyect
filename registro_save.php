<?php
session_start();
include "data.php";

$Nombre = $_POST["nombreC"];
$Apellidos = $_POST["apellidos"];

$OdataPersona = new Data_Persona;
$OdataPersona->Nombre = $Nombre;
//serializar
$_SESSION["Persona"] = serialize($OdataPersona);
//deserializar
$persona1 = unserialize($_SESSION["Persona"]);

header("Location: index.php"); // Redirige a la página index.php
exit();

?>