<?php 

session_start();
include "data.php";

$NomPersona = "";
$APersona = "";
$CPersona = "";
$EPersona = "";
if(isset($_SESSION["Persona"])){

    $persona1 = unserialize(data: $_SESSION["Persona"]);
    $NPersona = $persona1->Nombre;
    $APersona = $persona1->Apellidos;
    $CPersona = $persona1->Correo;
    $EPersona = $persona1->Edad;
}
$cuentaSeleccionada ="Cuenta Corriente";
if (isset($_SESSION['CuentaSeleccionada'])) 
{
    // Recupera el valor de la cuenta seleccionada
    $cuentaSeleccionada = $_SESSION['CuentaSeleccionada'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="perfil.css">
    <title>Banco</title>
</head>
<body>

    <!-- Barra superior -->
    <div class="barra-superior">
        <div class="titulo-banco">BANCO - PERFIL</div>
        <div class="navegacion">
            <ul>
                <li><a href="R1.php">Inicio</a></li>
                <li><a href="#">Transacciones</a></li>
                <li><a href="index.php?logout=true">Salir</a></li> <!-- Enlace para cerrar sesión -->
            </ul>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="contenido">
        <img src="https://github.com/H3RBASS/imagenes/blob/main/profile-icon-design-free-vector.jpg?raw=true" alt="Image Profile" class="profile">
        <h1 class="txtWlcm">Datos Personales</h1>
        <p>Nombre: <?php echo $NPersona ?></p>
        <p>Apellido: <?php echo $APersona ?></p>
        <p>Correo: <?php echo $CPersona ?></p>
        <p>Edad: <?php echo $EPersona ?></p>
        <p>Tipo de Cuenta: <?php echo $cuentaSeleccionada ?></p>
    </div>
</body>
</html>