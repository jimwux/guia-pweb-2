<?php include '../header.php'; ?>

<?php
if (!isset($_GET['imagen'])) {
    echo "<p class='text-danger text-center mt-5'>No se especificó ninguna imagen.</p>";
    include '../footer.php';
    exit;
}

$imagen = basename($_GET['imagen']);
$rutaImagen = "../imagenes/$imagen";

if (!file_exists($rutaImagen)) {
    echo "<p class='text-danger text-center mt-5'>La imagen no existe.</p>";
} else {
    echo "<div class='text-center my-5'>
            <h2 class='mb-4'>$imagen</h2>
            <img src='$rutaImagen' alt='$imagen' class='img-fluid rounded border mb-4' style='max-width: 90%; height: auto;'>
            <br>
            <a href='../ejercicios/ejercicio10.php' class='btn btn-secondary'><i class='fa-solid fa-arrow-left'></i> Volver a la galería</a>
          </div>";
}
?>

<?php include '../footer.php'; ?>
