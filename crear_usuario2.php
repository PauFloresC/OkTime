<?php
session_start();
include_once("conexion_sql.php");

if (isset($_POST['crearUsuario'])) {
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (empty($name) || empty($lastName) || empty($email) || empty($phone) || empty($password)) {
        $error = "Error, algunos campos obligatorios están vacíos";
    } else {
        $query = "INSERT INTO users(name, lastName, phone, email, password, created, modified) 
                  VALUES(:name, :lastName, :phone, :email, :password, :created, :modified)";

        $fechaActual = date('Y-m-d');
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":lastName", $lastName, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
        $stmt->bindParam(":password", $hashedPassword, PDO::PARAM_STR);
        $stmt->bindParam(":created", $fechaActual, PDO::PARAM_STR);
        $stmt->bindParam(":modified", $fechaActual, PDO::PARAM_STR);

        $resultado = $stmt->execute();
        if ($resultado) {
            header("Location: sendMovil.php?name=" . urlencode($name));
            exit();
        } else {
            $error = "Error, no se pudo crear el usuario";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario - Ok Time</title>
    <link rel="icon" href="dist/img/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Fondo rojo degradado */
        body {
            background: linear-gradient(135deg, #dc3545, #c82333);
            background-attachment: fixed;
            color: white;
        }

        /* Contenedor principal */
        .container {
            margin-top: 40px;
        }

        .card {
            background: rgba(255, 255, 255, 0.9); /* Fondo blanco translúcido */
            border-radius: 20px; /* Bordes redondeados */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3); /* Sombra */
            overflow: hidden; /* Evitar desbordamiento */
        }

        .card-header {
            background-color: #dc3545; /* Rojo */
            color: white; /* Texto blanco */
            border-bottom: none;
            text-align: center;
            padding: 20px;
        }

        .card-header h3 {
            font-size: 1.8rem;
            font-weight: bold;
        }

        /* Estilo para las letras dentro del contenedor (negras) */
        .card-body {
            color: black; /* Cambiar color de texto a negro */
        }

        /* Botones */
        .btn-custom {
            background-color: #dc3545; /* Rojo */
            border: none;
            color: white;
            border-radius: 10px;
        }

        .btn-custom:hover {
            background-color: #bd2130; /* Rojo oscuro */
        }

        .btn-cancel {
            background-color: #6c757d; /* Gris */
            border: none;
            color: white;
            border-radius: 10px;
        }

        .btn-cancel:hover {
            background-color: #5a6268; /* Gris oscuro */
        }

        /* Términos y Condiciones */
        .form-check-label a {
            color: #dc3545;
            text-decoration: none;
        }

        .form-check-label a:hover {
            text-decoration: underline;
        }

        /* Campos de entrada */
        .form-control {
            border-radius: 10px; /* Bordes redondeados */
        }

        /* Icono de calendario en la parte derecha del formulario */
        .calendar-icon {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            font-size: 1.8rem;
            color: #dc3545;
        }

        /* Icono ojo */
        .input-group-append .btn {
            border-radius: 0 10px 10px 0; /* Bordes redondeados del botón de ojo */
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $error; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="row">
        <!-- Columna para la imagen -->
        <div class="col-md-4">
            <img src="dist/img/Diseno.png" alt="Imagen de diseño" class="img-fluid h-100 w-100 rounded-left">

        </div>

        <!-- Columna para el formulario -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3>Crear un nuevo usuario</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Apellido:</label>
                        <input type="text" name="lastName" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">País:</label>
                        <select name="country" id="country" class="form-control" required>
                        <option value="+56" data-length="9">Chile (+56)</option>
                        <option value="+52" data-length="10">México (+52)</option>
                        <option value="+1" data-length="10">Estados Unidos (+1)</option>
                        <option value="+57" data-length="10">Colombia (+57)</option>
                        <option value="+54" data-length="10">Argentina (+54)</option>
                        <option value="+55" data-length="11">Brasil (+55)</option>
                        <option value="+51" data-length="9">Perú (+51)</option>
                        <option value="+593" data-length="9">Ecuador (+593)</option>
                        <option value="+58" data-length="10">Venezuela (+58)</option>
                        <option value="+34" data-length="9">España (+34)</option>
                        <option value="+44" data-length="10">Reino Unido (+44)</option>
                        </select>
                            <input type="text" name="phone" id="phone" class="form-control" maxlength="10" required>
                        </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary toggle-password" type="button" data-target="password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirmar Contraseña:</label>
                        <div class="input-group">
                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary toggle-password" type="button" data-target="confirmPassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" name="terms" id="terms" class="form-check-input" required>
                        <label for="terms" class="form-check-label">
                            Acepto los <a href="terminos_condiciones.php" target="_blank">Términos y Condiciones</a>.
                        </label>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="crearUsuario" class="btn btn-custom btn-lg">
                            <i class="fas fa-user-plus"></i> Crear Usuario
                        </button>
                        <a href="main.php" class="btn btn-cancel btn-lg">
                            <i class="fas fa-times"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const togglePasswordButtons = document.querySelectorAll('.toggle-password');

        togglePasswordButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const passwordField = document.getElementById(targetId);

                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    this.innerHTML = '<i class="fas fa-eye-slash"></i>';
                } else {
                    passwordField.type = 'password';
                    this.innerHTML = '<i class="fas fa-eye"></i>';
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
