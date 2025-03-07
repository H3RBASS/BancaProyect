<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $_SESSION["usuario"] = trim($_POST["usuario"]);
    $_SESSION["password"] = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT); // Guardar contraseña encriptada

    echo "Registro exitoso. <a href='index.php'>Ir al login</a>";
    exit();
}
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
<form action="registro.php" method="POST" class="form">
    <p class="login">Registro Banco</p>
    <div class="inputContainer">
        <input placeholder="Nombre de usuario" type="text" class="fInput" name="usuario">
        <input placeholder="Contraseña" type="password" class="fInput" name="password">
        <input type="submit" value="Registro" class="submit">
    </div>
    <div class="con">
        <p>Ya tienes una cuenta?&nbsp;</p>
        <a href="index.php">Iniciar Sesion</a>
    </div>
</form>
</body>
</html>
