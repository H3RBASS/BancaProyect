<?php
session_start();

$mensaje = "";


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Iniciar Sesion</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #242424;
        }

        .form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 400px;
            padding: 50px;
            background-color: rgb(0, 0, 0);
            border-radius: 20px;
        }

        .login {
            width: 100%;
            color: white;
            font-weight: 700;
            font-size: 20px;
            text-align: center;
            padding-bottom: 20px;
        }

        .inputContainer {
            width: 100%;
            display: flex;
            flex-direction: column; /* Alinea los inputs verticalmente */
            gap: 15px; /* Espacio entre los campos */
        }

        .fInput {
            width: 100%;
            height: 50px;
            border-radius: 5px;
            border: 1px solid rgb(48, 45, 45);
            background-color: black;
            padding: 10px;
            color: white;
            transition: .1s;
        }

        .fInput:focus {
            outline: none;
            border: 1px solid rgb(0, 136, 255);
        }

        .submit {
            width: 100%;
            padding: 10px 0;
            border-radius: 20px;
            cursor: pointer;
            transition: .3s;
            background-color: rgb(0, 136, 255);
            color: white;
            border: none;
            margin-top: 20px;
        }

        .submit:hover {
            opacity: 0.9;
        }

        .forget {
            width: 100%;
            background-color: transparent;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.151);
            padding: 7px;
            border-radius: 20px;
            cursor: pointer;
            transition: .3s;
            margin: 10px 0;
        }

        .forget:hover {
            background-color: rgba(255, 255, 255, 0.151);
        }

        .con {
            display: flex;
            justify-content: center;
            width: 100%;
            color: rgb(111, 103, 103);
            font-size: 13px;
            margin-top: 15px;
        }

        .con a {
            color: rgb(0, 136, 255);
            text-decoration: none;
        }

        .con a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <form method="post" class="form">
        <p class="login">Iniciar Sesión</p>
        <div class="inputContainer">
            <input placeholder="Nombre de usuario" type="text" class="fInput email">
            <input placeholder="Contraseña" type="password" class="fInput pass">
            <input type="submit" value="Siguiente" class="submit onclick="window.location.href='R1.php';>
        </div>
        <button class="forget">Olvidaste tu contraseña?</button>
        <div class="con">
            <p>No tienes una cuenta?&nbsp;</p>
            <a href="registro.php">Registrate</a>
        </div>
    </form>
</body>
</html>
