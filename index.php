<?php
session_start();

// Validar si la sesión está activa
if (!empty($_SESSION['activo'])) {
    header("Location: panel.php");
    exit();
}

// Incluir la conexión
include_once("conexion_sql.php");

// Código para el proceso de inicio de sesión
if (isset($_POST["ingresar"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    if (!empty($email) && !empty($pass)) {
        $query = "SELECT id, email, name, lastName, phone, image, password, created, modified 
                  FROM users 
                  WHERE email = :email";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($registro && password_verify($pass, $registro['password'])) {
            $_SESSION['activo'] = true;
            $_SESSION['id'] = $registro['id'];
            $_SESSION['name'] = $registro['name'];
            $_SESSION['lastName'] = $registro['lastName'];
            $_SESSION['email'] = $registro['email'];
            header("Location: panel.php");
            exit();
        } else {
            $error = "Error, acceso inválido";
        }
    } else {
        $error = "Error, algunos campos están vacíos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a OkTime</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Fondo rojo */
        body {
            background: #dc3545;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        /* Contenedor principal */
        .login-box {
            margin-top: 50px;
        }
        .card {
            border-radius: 20px;
        }
        /* Logotipo */
        .login-logo img {
            width: 150px;
        }
        /* Botones */
        .btn-primary {
            background-color: #6c757d;
            border: none;
        }
        /* Cuadros al final */
        .features {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        .feature-box {
            width: 300px;
            padding: 20px;
            border-radius: 15px;
            background: white;
            color: #dc3545;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .feature-box i {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        /* Pie de página */
        footer {
            text-align: center;
            padding: 10px 0;
            background: #6c757d;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <!-- Logotipo -->
    <div class="login-logo">
        <img src="dist/img/favicon.ico" alt="Logo">
    </div>

    <!-- Formulario de inicio de sesión -->
    <div class="login-box">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3">Inicia Sesión</h3>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" name="ingresar" class="btn btn-primary btn-block">
                        <i class="fas fa-sign-in-alt"></i> Ingresar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Cuadros de características -->
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
        © 2024 OkTime. Todos los derechos reservados.
    </footer>
</div>

</body>
</html>
