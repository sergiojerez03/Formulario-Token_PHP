<?php
session_start();


if (isset($_FILES['documento']) && $_FILES['documento']['error'] == UPLOAD_ERR_OK) {
    $nombreArchivo = $_FILES['documento']['name'];
    $rutaTemporal = $_FILES['documento']['tmp_name'];
    $rutaDestino = 'uploads/' . $nombreArchivo;


    if (move_uploaded_file($rutaTemporal, $rutaDestino)) {

        $token = 'Medisis' . str_pad($_SESSION['contador'] - 1, 5, '0', STR_PAD_LEFT);
        echo "Documento subido exitosamente. Token: $token";
    } else {
        echo "Error al mover el archivo.";
    }
} else {
    echo "Error en la subida del archivo.";
}
?>
