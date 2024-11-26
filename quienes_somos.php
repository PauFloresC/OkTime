<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Ok Time</title>
    <!-- Favicon -->
    <link rel="icon" href="dist/img/favicon.ico" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Fondo de la página */
        body {
            background-color: #dc3545; /* Fondo rojo */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }

        /* Contenedor de contenido principal */
        .content {
            background: rgba(255, 255, 255, 0.9); /* Fondo semitransparente */
            border-radius: 20px; /* Bordes redondeados */
            padding: 20px;
            max-width: 90%; /* Ajusta al 90% del ancho de la pantalla */
            margin: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra */
            font-family: 'Arial', sans-serif;
        }

        /* Encabezado */
        .content h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem; /* Ajusta el tamaño para pantallas pequeñas */
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 20px;
        }

        /* Párrafos */
        .content p.lead {
            font-family: 'Poppins', sans-serif;
            font-size: 1rem; /* Tamaño más pequeño para pantallas pequeñas */
            color: #343a40;
            text-align: justify;
            line-height: 1.6;
        }

        /* Ícono decorativo en la esquina superior */
        .icon-map {
            position: absolute;
            top: 50px;
            right: 20px;
            font-size: 40px; /* Tamaño ajustado para pantallas pequeñas */
            color: #ffffff;
            opacity: 0.9;
            z-index: 100;
        }

        /* Palabras resaltadas */
        .content p.lead strong {
            font-weight: bold;
            color: #212529;
        }

        /* Botón volver */
        .btn-danger {
            font-size: 1rem; /* Tamaño de texto ajustado */
            padding: 10px 20px;
        }

        /* Responsividad adicional */
        @media (min-width: 768px) {
            .content {
                max-width: 700px;
                padding: 30px;
            }

            .icon-map {
                font-size: 70px;
                top: 100px;
                right: 50px;
            }

            .content h1 {
                font-size: 2.5rem;
            }

            .content p.lead {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Ícono de mapa decorativo -->
    <i class="fas fa-map-marker-alt icon-map"></i>

    <!-- Contenido principal -->
    <div class="content text-center p-4 mt-5">
        <h1 class="mb-4">Quiénes Somos</h1>
        <p class="lead">
            <strong>OkTime</strong> usa tu ubicación en tiempo real para optimizar tu hora de despertar y te ayuda a gestionar tus estudios de forma eficiente.
            Somos un equipo de estudiantes universitarios que entiende perfectamente los desafíos de balancear estudios, trabajo y vida personal. 
            Nacimos como un proyecto universitario y evolucionamos con una misión clara: ayudar a otros estudiantes a gestionar mejor su tiempo.
        </p>
        <p class="lead">
            Desarrollamos <strong>OkTime</strong> pensando en las necesidades reales de los estudiantes, porque nosotros también lo somos.
            Entendemos la importancia de llegar a tiempo a clases y exámenes, y la frustración de perder tiempo valioso en el tráfico.
        </p>
        <p class="lead">
            <strong>Misión:</strong> Nuestra misión en Ok Time es facilitar la gestión eficiente del tiempo y los viajes de nuestros usuarios, brindando herramientas intuitivas que mejoren su organización y productividad diaria.
        </p>
        <p class="lead">
            <strong>Visión:</strong> Ser la plataforma líder en gestión de tiempo y organización de viajes, reconocida por nuestra innovación, confiabilidad y compromiso en mejorar la calidad de vida de nuestros usuarios.
        </p>
        
        <!-- Botón Volver -->
        <a href="main.php" class="btn btn-danger mt-4 mb-4">
            <i class="fas fa-arrow-left"></i> Volver
        </a>
    </div>
</body>
</html>
