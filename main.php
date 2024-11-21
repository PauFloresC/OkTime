<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Ok Time</title>
    <link rel="icon" href="dist/img/favicon.ico" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #dc3545;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            text-align: center;
            padding: 20px;
            flex-grow: 1; /* Hace que el contenido principal ocupe el espacio necesario */
        }
        .logo {
            margin: 20px auto;
        }
        .btn {
            margin: 10px 0;
        }
        .features {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
            margin-bottom: 50px; /* Espacio entre los cuadros y el pie de página */
        }
        .feature-box {
            background-color: white;
            color: #dc3545;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .feature-box i {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        footer {
            background-color: #6c757d;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto; /* Empuja el pie de página al fondo de la página */
        }
    </style>
</head>
<body>
    <!-- Logotipo centrado -->
    <div class="content">
        <img src="dist/img/favicon.ico" alt="Logotipo" class="logo" width="200">
        <h2>¿Necesitas gestionar tus tiempos y/o viajes?</h2>
        <p class="lead">¡Crea una cuenta en Ok Time!</p>
        <!-- Botones -->
        <a href="crear_usuario2.php" class="btn btn-primary btn-lg">
            <i class="fas fa-user-plus"></i> Registrarse
        </a>
        <a href="quienes_somos.php" class="btn btn-outline-warning btn-lg">
            <i class="fas fa-info-circle"></i> ¿Quiénes Somos?
        </a>
    </div>
    
    <!-- Cuadros informativos -->
    <div class="features">
        <div class="feature-box">
            <i class="fas fa-map-marker-alt"></i>
            <h4>Despertador basado en ubicación</h4>
            <p>Optimiza tu hora de despertar según tu ubicación y tráfico en tiempo real.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-calendar-alt"></i>
            <h4>Calendario de exámenes</h4>
            <p>Organiza y gestiona tus fechas de exámenes de manera eficiente.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-clock"></i>
            <h4>Recordatorios inteligentes</h4>
            <p>Nunca olvides una tarea importante con nuestro sistema de recordatorios.</p>
        </div>
    </div>

    <!-- Pie de página -->
    <footer>
        © 2024 Ok Time. Todos los derechos reservados.
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
