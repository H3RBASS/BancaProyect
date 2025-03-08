<?php
session_start();
include "data.php";

if (isset($_SESSION["mensaje"])) {
    $mensaje = $_SESSION["mensaje"];
    unset($_SESSION["mensaje"]); // Elimina el mensaje para que no persista en recargas
}

$ComboCuenta = "<form method='POST'><select name='CboCuenta' class='fselect'>";
    
foreach($ListaCuenta as $cuenta)
{
    $ComboCuenta .= "<option value='". $cuenta->idTipoCuenta ."'>". $cuenta->TipoCuenta ."</option>";
}
$ComboCuenta .= "</select>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>

</head>
<body>
    <div class="main-r">
        <form action="registro_save.php" method="POST" class="form">
            <p class="login">Registro</p>
            <div class="inputContainer">
                <input placeholder="Nombre de usuario" type="text" class="fInput" name="usuario">
                <input placeholder="Contraseña" type="password" class="fInput" name="password">
                <input placeholder="Nombre Completo" type="text" class="fInput" name="nombreC">
                <input placeholder="Apellidos" type="text" class="fInput" name="apellidos">
                <input placeholder="Edad" type="text" class="fInput" name="edad">
                <input placeholder="Correo" type="text" class="fInput" name="correo">
                <?php echo $ComboCuenta ?>
                <input type="submit" value="Registro" class="submit">
            </div>
            <div class="con">
                <p>Ya tienes una cuenta?&nbsp;</p>
                <a href="index.php">Iniciar Sesion</a>
            </div>
        </form>
        <div>
            <footer class="footer">
                <div class="footer-content">
                    <p>Desarrollado por Brian Herbas 2025 - Todos los derechos reservados</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
