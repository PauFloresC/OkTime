<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Ok Time</title>
    <link rel="icon" href="dist/img/ok_time_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Clase para superposición */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Superposición oscura al 50% */
            z-index: 1;
        }
        .content {
            position: relative;
            z-index: 2;
            color: white;
        }
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }
        .btn-info-custom {
            background-color: #dc3545;
            border: none;
        }
        .btn-info-custom:hover {
            background-color: #bd2130;
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center justify-content-center vh-100 bg-light position-relative">
    
    <!-- Imagen de fondo con superposición -->
    <img src="dist/img/okTimeIndex.webp" class="background-image">
    <div class="overlay"></div>
    
    <!-- Contenedor principal con el texto -->
    <div class="content text-center">
        <h2>¿Necesitas gestionar tus tiempos y/o viajes?</h2>
        <p class="lead">¡Crea una cuenta en Ok Time!</p>
        <!-- Botón para registrarse -->
        <a href="crear_usuario2.php" class="btn btn-primary btn-lg mt-3">
            <i class="fas fa-user-plus"></i> Registrarse
        </a>
        <!-- Enlace a la página de quiénes somos -->
        <p class="mt-4">
            <a href="quienes_somos.php" class="btn btn-outline-warning btn-lg">
                <i class="fas fa-info-circle"></i> ¿Quiénes Somos?
            </a>
        </p>
    </div>

    <!-- Opcional: Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
