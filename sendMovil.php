<?php
// Obtener el nombre del usuario desde la URL o establecer un valor predeterminado
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "Usuario";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso - Ok Time</title>
    <link rel="icon" href="dist/img/favicon.ico" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Fondo de la página */
        body {
            background-image: url('dist/img/ok_time_background.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white; /* Color de texto blanco para legibilidad */
        }
        /* Superposición para opacar el fondo */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Opacidad para oscurecer el fondo */
            z-index: 1;
        }
        /* Contenedor de contenido centrado y en blanco */
        .content {
            position: relative;
            z-index: 2;
            color: white;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <!-- Superposición -->
    <div class="overlay"></div>

    <!-- Contenido principal -->
    <div class="content text-center">
        <h1 class="mb-4">¡Muchas gracias, <?php echo $name; ?>!</h1>
        <p class="lead">
            Te has registrado con éxito. Te invitamos a descargar la aplicación móvil <strong>Ok Time</strong> para que puedas acceder a todas las funcionalidades que tenemos pensadas para ti.
        </p>
        <p>
            <a href="dist/img/store.jpeg" class="btn btn-primary mt-3">
                Descargar Ok Time
            </a>
        </p>
    </div>

    <!-- Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
