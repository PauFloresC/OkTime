<?php
session_start();
include_once("conexion_sql.php"); // Asegúrate de tener la conexión a la base de datos

if (isset($_POST['crearUsuario'])) {
    // Obtener valores del formulario
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Encriptar la contraseña
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Verificar campos obligatorios
    if (empty($name) || empty($lastName) || empty($email) || empty($phone) || empty($password)) {
        $error = "Error, algunos campos obligatorios están vacíos";
    } else {
        // Inserción en la base de datos
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
            // Redirigir a sendMovil.php pasando el nombre del usuario en la URL
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
    <link rel="icon" href="dist/img/ok_time_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Estilo principal */
        body {
            background-color: #f8f9fa;
        }
        /* Tarjeta con colores rojo y blanco */
        .card {
            border-color: #dc3545; /* Rojo para el borde */
        }
        .card-header {
            background-color: #dc3545; /* Fondo rojo */
            color: white; /* Texto en blanco */
        }
        /* Estilo de botones */
        .btn-custom {
            background-color: #dc3545; /* Botón rojo */
            border: none;
            color: white;
        }
        .btn-custom:hover {
            background-color: #bd2130; /* Rojo oscuro en hover */
        }
        .btn-cancel {
            background-color: #6c757d; /* Gris para cancelar */
            border: none;
            color: white;
        }
        .btn-cancel:hover {
            background-color: #5a6268; /* Gris oscuro en hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Mostrar mensajes de error -->
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $error; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header text-center">
                <h3 class="card-title">Crear un nuevo usuario</h3>
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
                        <option value="1">México (+52)</option>
                        <option value="2">Estados Unidos (+1)</option>
                        <option value="3">Colombia (+57)</option>
                        <option value="4">Argentina (+54)</option>
                        <option value="5">Chile (+56)</option>
                        <option value="6">Brasil (+55)</option>
                        <option value="7">Perú (+51)</option>
                        <option value="8">Ecuador (+593)</option>
                        <option value="9">Venezuela (+58)</option>
                        <option value="10">España (+34)</option>
                        <option value="11">Canadá (+1)</option>
                        <option value="12">Reino Unido (+44)</option>
                            <!-- Otros países... -->
                        </select>
                    </div>
                    <!-- Teléfono -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono:</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <!-- Contraseña -->
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
                    <!-- Confirmar contraseña -->
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
                    <!-- Checkbox de Términos -->
                    <div class="form-check mb-3">
                        <input type="checkbox" name="terms" id="terms" class="form-check-input custom-checkbox" required>
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

    <!-- Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
