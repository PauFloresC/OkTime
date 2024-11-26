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
            background-color: #dc3545; /* Rojo como fondo principal */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white; /* Texto en blanco */
        }

        /* Superposición para oscurecer el fondo */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Fondo semitransparente */
            z-index: 1;
        }

        /* Contenedor principal */
        .content-container {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.95); /* Fondo blanco con transparencia */
            color: #343a40; /* Texto gris oscuro */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra */
            max-width: 600px;
            margin: 20px auto;
        }

        /* Estilo del título */
        .content-container h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            color: #dc3545; /* Rojo para el título */
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Estilo del texto */
        .content-container p.lead {
            font-size: 1.2rem;
            text-align: justify;
            line-height: 1.8;
        }

        /* Botón */
        .btn-primary {
            background-color: #dc3545;
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background-color: #bd2130; /* Rojo más oscuro al pasar el ratón */
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .content-container {
                padding: 20px;
            }

            .content-container h1 {
                font-size: 2rem;
            }

            .content-container p.lead {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <!-- Superposición -->
    <div class="overlay"></div>

    <!-- Contenedor principal -->
    <div class="content-container text-center">
        <h1>¡Muchas gracias, <?php echo $name; ?>!</h1>
        <p class="lead">
            Te has registrado con éxito. Te invitamos a descargar la aplicación móvil <strong>Ok Time</strong> para que puedas acceder a todas las funcionalidades que tenemos pensadas para ti.
        </p>
        <p>
            <a href="dist/img/descarga.png" class="btn btn-primary mt-3">
                Descargar Ok Time
            </a>
        </p>
    </div>

    <!-- Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
