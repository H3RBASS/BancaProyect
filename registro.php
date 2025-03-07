<?php
session_start();
include "data.php";

if (isset($_SESSION["mensaje"])) {
    $mensaje = $_SESSION["mensaje"];
    unset($_SESSION["mensaje"]); // Elimina el mensaje para que no persista en recargas
}
//registra al usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $_SESSION["usuario"] = trim($_POST["usuario"]);
    $_SESSION["password"] = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT); // Guardar contraseña encriptada

    echo "Registro exitoso. <a href='index.php'>Ir al login</a>";
    exit();
}


$ComboCuenta = "<select name='CboCuenta' class='fselect'>";
    
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
<form action="registro.php" method="POST" class="form">
    <p class="login">Registro</p>
    <div class="inputContainer">
        <input placeholder="Nombre de usuario" type="text" class="fInput" name="usuario">
        <input placeholder="Contraseña" type="password" class="fInput" name="password">
        <?php echo $ComboCuenta ?>
        <input type="submit" value="Registro" class="submit">
    </div>
    <div class="con">
        <p>Ya tienes una cuenta?&nbsp;</p>
        <a href="index.php">Iniciar Sesion</a>
    </div>
</form>
</body>
</html>
