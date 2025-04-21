
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

    <h2 class="text-center mb-3">Insta-gramo reciclado</h2>

    <div id="galeria" class="col-md-12">
        <ul class="list-group col-md-8 mx-auto mb-4">
            <?php
                $archivos = array_diff(scandir('../imagenes'), ['.', '..']);

                // ordena por fecha (más reciente primero)
                usort($archivos, function ($a, $b) {
                    return filemtime("../imagenes/$b") - filemtime("../imagenes/$a");
                });

                foreach ($archivos as $archivo) {
                    $archivoUrl = urlencode($archivo);
                    echo "<li class='list-group-item'>
                            <a href='/JimenaGomezWusinowski/Ejercicio10/ver_imagen.php?imagen=$archivoUrl'>$archivo</a>
                          </li>";
                }
            ?>
        </ul>
    </div>

    <form action="ejercicio10.php" method="POST" enctype="multipart/form-data" class="p-5 mb-5 bg-secondary rounded-4" id="formulario">
        <h2>Subir nueva imagen</h2><br>

        <?php if ($error): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>

        <input type="file" name="nuevaImagen" required class='col-md-12'><br><br>
        <input type="text" name="nombrePersonalizado" placeholder="Nombre para guardar (sin extensión)" required class='col-md-12 p-1 rounded-2'><br><br>
        <button type="submit" class="btn btn-light">Subir</button>
    </form>

<?php include '../footer.php'; ?>
