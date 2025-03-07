<?php
session_start();

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
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Transacciones</a></li>
                <li><a href="index.php?logout=true">Salir</a></li> <!-- Enlace para cerrar sesión -->
            </ul>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="contenido">
        <h2>Bienvenido al Banco</h2>
        <p>Aquí puedes gestionar tus transacciones, ver tu perfil y mucho más.</p>
    </div>
</body>
</html>


