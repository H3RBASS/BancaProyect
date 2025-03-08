<?php
session_start();
include "data.php";

$NomPersona = "";
$APersona = "";
$saldo = 100; // Saldo inicial

if(isset($_SESSION["Persona"])){
    $persona1 = unserialize($_SESSION["Persona"]);
    $NomPersona = $persona1->Nombre;
    $APersona = $persona1->Apellidos;
}

// Inicializar el saldo en la sesión si no está definido
if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = $saldo;
}

// Procesar depósitos y retiros
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['deposito'])) {
        $monto = floatval($_POST['monto']);
        if ($monto > 0) {
            $_SESSION['saldo'] += $monto;
        }
    } elseif (isset($_POST['retiro'])) {
        $monto = floatval($_POST['monto']);
        if ($monto > 0 && $monto <= $_SESSION['saldo']) {
            $_SESSION['saldo'] -= $monto;
        }
    }
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
    <link rel="stylesheet" href="R2.css">
    <title>Banco</title>
</head>
<body>

    <!-- Barra superior -->
    <div class="barra-superior">
        <div class="titulo-banco">BANCO</div>
        <div class="navegacion">
            <ul>
                <li><a href="R1.php">Inicio</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="index.php?logout=true">Salir</a></li> <!-- Enlace para cerrar sesión -->
            </ul>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="contenido">
        <h2 class="txtWlcm">Bienvenido a Transacciones <?php echo $NomPersona; ?></h2>
        <img src="https://github.com/H3RBASS/imagenes/blob/main/dinero.jpg?raw=true" alt="Image Profile" class="profile">
        <p>Aqui puedes realizar transacciones como deposito o retiro <br> de dinero de tu cuenta bancaria</p>
        <form action="R2.php" method="POST" class="form">
            <div class="inputContainer">
                <h3><?php echo $NomPersona, $APersona ?></h3>
                <h3 class="txtWlcm">Nro de Cuenta: 102030123987</h3>
                <h3 class="txtWlcm">Saldo Actual: $<?php echo number_format($_SESSION['saldo'], 2); ?></h3>
                <input placeholder="Monto" type="number" class="fInput email" name="monto" step="0.01" required>
                <div>
                    <input type="submit" value="Depositar" class="submit" name="deposito">
                    <input type="submit" value="Retirar" class="submit" name="retiro">
                </div>
            </div>
        </form>
    </div>
    <footer class="footer">
            <div class="footer-content">
                <p>Desarrollado por Brian Herbas 2025 - Todos los derechos reservados</p>
            </div>
    </footer>
</body>
</html>