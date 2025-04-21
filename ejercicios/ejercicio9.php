
<?php
include '../header.php';
if (!is_dir('../imagenes')) {
    mkdir('../imagenes', 0777, true);
}

$error = "";

if (isset($_FILES['nuevaImagen']) && $_FILES['nuevaImagen']['error'] == UPLOAD_ERR_OK) {
    $nombrePersonalizado = trim(isset($_POST['nombrePersonalizado']) ? $_POST['nombrePersonalizado'] : '');

    if ($nombrePersonalizado === '') {
        $error = "Debes ingresar un nombre para la imagen.";
    } else {
        $nombreTemporal = $_FILES['nuevaImagen']['tmp_name'];
        $extension = pathinfo($_FILES['nuevaImagen']['name'], PATHINFO_EXTENSION);
        $nombreFormateado = preg_replace('/[^a-zA-Z0-9_-]/', '_', $nombrePersonalizado);
        $nombreFinal = $nombreFormateado . '.' . $extension;
        $destino = '../imagenes/' . $nombreFinal;

        if (move_uploaded_file($nombreTemporal, $destino)) {
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $error = "Error al subir la imagen.";
        }
    }
}
?>

    <h2 class="text-center mb-3">Insta-gramo</h2>

    <div id="galeria" class="col-md-12">
        <?php
            $archivos = array_diff(scandir('../imagenes'), ['.', '..']);

            // ordena por fecha (más reciente primero)
            usort($archivos, function ($a, $b) {
                return filemtime("../imagenes/$b") - filemtime("../imagenes/$a");
            });

            foreach ($archivos as $archivo) {
            echo "<div class='col-md-3 col-sm-6 col-xs-12' style='border: 30px solid white;'>
                    <img src='../imagenes/$archivo' alt='$archivo' class='imagen col-md-12'>
                    <p class='text-center mt-4'>$archivo</p>
                  </div>";
            }
        ?>
    </div>

    <form action="ejercicio9.php" method="POST" enctype="multipart/form-data" class="p-5 mb-5 bg-secondary rounded-4" id="formulario">
        <h2>Subir nueva imagen</h2><br>

        <?php if ($error): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>

        <input type="file" name="nuevaImagen" required class='col-md-12'><br><br>
        <input type="text" name="nombrePersonalizado" placeholder="Nombre para guardar (sin extensión)" required class='col-md-12 p-1 rounded-2'><br><br>
        <button type="submit" class="btn btn-light">Subir</button>
    </form>

<?php include '../footer.php'; ?>
