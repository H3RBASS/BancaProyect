<?php
session_start();

/*if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $_SESSION["UsuarioNew"] = $_POST["usuario"];
    $_SESSION["PasswordNew"] = $_POST["password"];
    header("Location: index.php");
    exit;
}*/

if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $usuario = $_POST["usuario"]; // Capturamos el nombre de usuario ingresado

    // 1️⃣ Verificamos si el usuario ya está registrado en la sesión
    if (isset($_SESSION["usuarios"])) {
        // 2️⃣ Si el usuario ya está registrado
        if (in_array($usuario, $_SESSION["usuarios"])) {
            // Si el usuario existe, redirigimos a la página de error
            echo "❌ El usuario '$usuario' ya está registrado.";
            echo "<br><a href='index.php.php'>Iniciar Sesion</a>";
        } else {
            // 3️⃣ Si el usuario NO existe, lo registramos
            $_SESSION["usuarios"][] = $usuario; // Guardamos el nuevo usuario en la sesión
            echo "✅ Usuario registrado con éxito.";
            echo "<br><a href='verificar.php'>Verificar usuario</a>";
        }
    } else {
        // Si no existen usuarios, creamos el array de usuarios
        $_SESSION["usuarios"] = [$usuario]; // Guardamos el primer usuario
        echo "✅ Usuario registrado con éxito.";
        echo "<br><a href='verificar.php'>Verificar usuario</a>";
    }
}


?>
