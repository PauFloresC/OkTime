<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Ok Time</title>
    <!-- Favicon -->
    <link rel="icon" href="dist/img/ok_time_logo.png" type="image/png">
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
            color: white;
        }
        /* Superposición para opacar el fondo */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Opacidad para oscurecer el fondo */
            z-index: 1;
        }
        /* Contenedor de contenido centrado y en blanco */
        .content {
            position: relative;
            z-index: 2;
            color: white;
        }
        .btn-custom {
            background-color: #dc3545; /* Rojo para el botón */
            border: none;
            color: white;
        }
        .btn-custom:hover {
            background-color: #bd2130; /* Rojo oscuro en hover */
        }
        /* Tamaño uniforme y extendido para las imágenes del carrusel */
        .carousel-item img {
            width: 100%;
            height: 70vh; /* Extiende la altura del carrusel */
            object-fit: cover; /* Asegura que la imagen llene el contenedor sin distorsión */
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center vh-100">
    <!-- Superposición -->
    <div class="overlay"></div>

    <!-- Contenido principal de Misión y Visión -->
    <div class="content text-center p-4 mt-5">
        <h1 class="mb-4">Quiénes Somos</h1>
        <p class="lead">
            <strong>Misión:</strong> Nuestra misión en Ok Time es facilitar la gestión eficiente del tiempo y los viajes de nuestros usuarios, brindando herramientas intuitivas que mejoren su organización y productividad diaria.
        </p>
        <p class="lead">
            <strong>Visión:</strong> Ser la plataforma líder en gestión de tiempo y organización de viajes, reconocida por nuestra innovación, confiabilidad y compromiso en mejorar la calidad de vida de nuestros usuarios.
        </p>
        
        <!-- Botón Volver -->
        <a href="main.php" class="btn btn-custom mt-4 mb-4">
            <i class="fas fa-arrow-left"></i> Volver
        </a>
    </div>

    <!-- Carrusel de Imágenes más abajo y extendido -->
    <div id="carouselExampleIndicators" class="carousel slide content mt-5 w-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="dist/img/img_inicio.jpg" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="dist/img/photo3.jpg" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="dist/img/okTimeIndex.webp" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
