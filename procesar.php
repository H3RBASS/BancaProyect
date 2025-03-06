<?php
session_start();

$mensaje = ""; // Inicializamos el mensaje vacío

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);
    $nombre = trim($_POST["nombre"]);
    $apellidos = trim($_POST["apellidos"]);
    $edad = trim($_POST["edad"]);

    // Validar que los campos no estén vacíos
    if (empty($usuario) || empty($password) || empty($nombre) || empty($apellidos) || empty($edad)) {
        $mensaje = "<h1 id='mensaje'>Todos los campos son obligatorios</h1>";
        header("Location: registro.php");
        exit();
    } 
    // Validar que la edad sea un número entre 10 y 80
    elseif (!is_numeric($edad) || $edad < 10 || $edad > 80) {
        $mensaje = "<h1 id='mensaje'>Edad Inválida!</h1>";
        header("Location: registro.php");
        exit();
    } 
    else {
        // Si pasa todas las validaciones, se encripta la contraseña
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        
        // Guardamos los datos en la sesión (excepto la contraseña)
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nombre"] = $nombre;
        $_SESSION["apellidos"] = $apellidos;
        $_SESSION["edad"] = $edad;

        $mensaje = "<h1 id='mensaje'>Registro exitoso!</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Registro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #242424;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            background-color: black;
            padding: 20px;
            border-radius: 10px;
        }
        h1 { color: white; }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: rgb(0, 136, 255);
            color: white;
            text-decoration: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php echo $mensaje; ?>
    <a href="index.php">Ir a Iniciar Sesion</a>
</div>

</body>
</html>
