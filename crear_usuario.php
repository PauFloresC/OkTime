<?php
include "includes/header.php";

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
        $stmt->bindParam(":password", $hashedPassword, PDO::PARAM_STR); // Usar la contraseña encriptada
        $stmt->bindParam(":created", $fechaActual, PDO::PARAM_STR);
        $stmt->bindParam(":modified", $fechaActual, PDO::PARAM_STR);

        $resultado = $stmt->execute();
        if ($resultado) {
            // Guardar el mensaje en la sesión y redirigir
            $_SESSION['mensaje'] = "Registro de usuario creado correctamente";
            
        } else {
            $error = "Error, no se pudo crear el usuario";
        }
    }
}
?>

<!-- Mostrar mensajes -->
<div class="row">
    <div class="col-sm-12">
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $error ?> </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="card-header">               
    <div class="row">
        <div class="col-md-9">
            <h3 class="card-title">Crear un nuevo usuario</h3>
        </div>                 
    </div>
</div>

<div class="card-body">
    <div class="row">
        <div class="col-12">
            <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">            
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
                    <label for="phone" class="form-label">Teléfono:</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>    
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>   
                <button type="submit" name="crearUsuario" class="btn btn-primary">
                    <i class="fas fa-cog"></i> Crear Usuario
                </button>  
            </form>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>

<!-- page script -->
<script>
  $(function () {   
    $('#tblRegistros').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    }); 
  });
</script>
