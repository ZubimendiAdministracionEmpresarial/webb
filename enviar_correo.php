<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destinatario = 'zubimendi@adminempresarial.onmicrosoft.com';
    $asunto = 'Mensaje de contacto desde el sitio web';
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Enviamos el correo electrónico
    mail($destinatario, $asunto, $cuerpo);

    // Redirigir a una página de confirmación o mostrar un mensaje de éxito
    header('Location: confirmacion.html');
} else {
    // Si se accede directamente a este script sin datos POST, redirigir a la página de contacto
    header('Location: contacto.html');
}
?>
