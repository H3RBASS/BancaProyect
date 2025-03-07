<?php
session_start();
//mensaje borrar
$mensaje = "";
if (isset($_SESSION["mensaje"])) {
    $mensaje = $_SESSION["mensaje"];
    unset($_SESSION["mensaje"]); // Elimina el mensaje para que no persista en recargas
}
//verifica el usuario y contraseña si son igual a los del registro
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_SESSION["usuario"]) && isset($_SESSION["password"])) {
        if ($_SESSION["usuario"] === $_POST["usuario"] && password_verify($_POST["password"], $_SESSION["password"])) {
            $_SESSION["autenticado"] = true;
            header("Location: R1.php"); // Redirigir a la página principal
            exit();
        } else {
            echo "<div id='mensaje'>Usuario o contraseña incorrectos.</div>";
        }
    } else {
        echo "<div id='mensaje'>No hay usuarios registrados.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="msj.css">
    <title>Iniciar Sesion</title>
</head>
<body>
    <form action="index.php" method="POST" class="form">
        <p class="login">Iniciar Sesión</p>
        <div class="inputContainer">
            <input placeholder="Nombre de usuario" type="text" class="fInput email" name="usuario">
            <input placeholder="Contraseña" type="password" class="fInput pass" name="password"> 
            <input type="submit" value="Siguiente" class="submit">
        </div>
        <button class="forget">Olvidaste tu contraseña?</button>
        <div class="con">
            <p>No tienes una cuenta?&nbsp;</p>
            <a href="registro.php">Registrate</a>
        </div>
    </form>
</body>
</html>
