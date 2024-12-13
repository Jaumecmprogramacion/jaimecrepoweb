<?php
// Activar la visualización de errores para depurar
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Iniciar la sesión al principio del archivo, sin espacio antes del PHP
session_start();

if (isset($_POST['submit'])) {
    // Capturar los valores ingresados en el formulario, asegurando que existen
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Definir las credenciales correctas de inicio de sesión
    $correct_username = '******';
    $correct_password = '*****';

    // Comparar las credenciales ingresadas con las correctas
    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['loggedin'] = true;
        // Redirigir primero
        header("Location: ver_mensajes.php");
        exit();  // Asegúrate de que el script se detenga aquí para evitar que se ejecute el código después de la redirección
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #555;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar sesión</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST" action="">
            <label>Usuario:</label>
            <input type="text" name="username" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <button type="submit" name="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>

