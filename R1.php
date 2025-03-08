<?php
session_start();
include "data.php";

$NomPersona = "";
$APersona = "";
if(isset($_SESSION["Persona"])){

    $persona1 = unserialize(data: $_SESSION["Persona"]);
    $NomPersona = $persona1->Nombre;
    $APersona = $persona1->Apellidos;
}

if (isset($_GET['logout'])) {
    
    // Destruir la sesión
    session_destroy();
    
    // Redirigir al index
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="R1.css">
    <title>Banco</title>
</head>
<body>

    <!-- Barra superior -->
    <div class="barra-superior">
        <div class="titulo-banco">BANCO</div>
        <div class="navegacion">
            <ul>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="R2.php">Transacciones</a></li>
                <li><a href="index.php?logout=true">Salir</a></li> <!-- Enlace para cerrar sesión -->
            </ul>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="contenido">
        <h2 class="txtWlcm">Bienvenido al Banco <?php echo $NomPersona; ?></h2>
        <img src="https://github.com/H3RBASS/imagenes/blob/main/depositphotos_317853124-stock-illustration-bank-icon-symbol-on-gray.jpg?raw=true" alt="Image Profile" class="profile">
        <p>Aquí puedes gestionar tus transacciones <br>
            Ver tu Perfil <br>
            Realizar depositos y retiros.
        </p>
        <br>
        <h3 class="txtWlcm">Nro de Cuenta: 102030123987</h3>
        <h3><?php echo $NomPersona, $APersona ?> </h3>
        <div>
            <button class="action-btn">Contactar Soporte</button>
        </div>
    </div>
</body>
</html>


