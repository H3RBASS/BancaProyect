<?php
session_start(); // Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['usuario'] = trim($_POST['usuario']);
    $_SESSION['password'] = trim($_POST['password']);

    // Redirigir a la página donde se mostrarán los datos
    header("Location: login.php");
    exit();
}
?>
