<?php 
include "includes/header.php"; 

// Mostrar el mensaje de éxito si existe en la sesión
if (isset($_SESSION['mensaje'])) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['mensaje'] . '</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    unset($_SESSION['mensaje']); // Eliminar el mensaje de la sesión después de mostrarlo
}
?>       

<!-- Contenido del panel -->
<div class="card-body">
    <img src="dist/img/okTimeIndex.webp" class="img-fluid">
</div>
<!-- /.card-body -->

<?php include "includes/footer.php"; ?>