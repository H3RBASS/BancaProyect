<?php
session_start();
include "data.php";

//registra al usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $_SESSION["usuario"] = trim($_POST["usuario"]);
    $_SESSION["password"] = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT); // Guardar contraseña encriptada
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    // Almacena el valor seleccionado del combo box en la sesión
    $_SESSION['CuentaSeleccionada'] = $_POST['CboCuenta'];
}

$Nombre = $_POST["nombreC"];
$Apellidos = $_POST["apellidos"];
$Edad = $_POST["edad"];
$Correo = $_POST["correo"];

$ODP = new Data_Persona;
$ODP->Nombre = $Nombre;
$ODP->Apellidos = $Apellidos;
$ODP->Edad = $Edad;
$ODP->Correo = $Correo;

//serializar
$_SESSION["Persona"] = serialize($ODP);


header("Location: index.php"); // Redirige a la página index.php
exit();

?>