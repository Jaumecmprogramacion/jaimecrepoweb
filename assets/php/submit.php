<?php
// Incluir el autoloader de Composer con la ruta correcta
require '../../vendor/autoload.php';  // Ajusta la ruta según la ubicación de tu archivo

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('max_execution_time', 120); // Tiempo límite de ejecución

// Validar y limpiar los datos del formulario
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : 'Nombre no proporcionado';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : 'Email no válido';
$subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : 'Asunto no proporcionado';
$comment = isset($_POST['comment']) ? htmlspecialchars(trim($_POST['comment'])) : 'Mensaje no proporcionado';

// Especificar la ruta donde se guardan los archivos TXT y XML
$directory = $_SERVER['DOCUMENT_ROOT'] . '/Contactos/';
if (!is_dir($directory)) {
    mkdir($directory, 0777, true);
}

// Guardar en el archivo XML acumulativo
$xml_file_name = $directory . 'todos_los_mensajes.xml';
if (file_exists($xml_file_name)) {
    $xml = simplexml_load_file($xml_file_name);
} else {
    $xml = new SimpleXMLElement('<mensajes></mensajes>');
}
$ultimoId = 0;
foreach ($xml->mensaje as $mensaje) {
    $id = (int)$mensaje->id;
    if ($id > $ultimoId) {
        $ultimoId = $id;
    }
}
$nuevoId = $ultimoId + 1;
$mensaje = $xml->addChild('mensaje');
$mensaje->addChild('id', $nuevoId);
$mensaje->addChild('fecha', date('Y-m-d H:i:s'));
$mensaje->addChild('nombre', $name);
$mensaje->addChild('email', $email);
$mensaje->addChild('asunto', $subject);
$mensaje->addChild('comentario', $comment);
if (!$xml->asXML($xml_file_name)) {
    echo "<p>Error al guardar el archivo XML</p>";
}

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0; // Modo depuración
    $mail->isSMTP();
    $mail->Host = 'mail.jaumecrespo.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jaumecrespo@jaumecrespo.com';
    $mail->Password = 'Gwbmz42_rk1984'; // Reemplaza con tu contraseña
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->Timeout = 30;

    $mail->setFrom('jaumecrespo@jaumecrespo.com', 'Contacto Web');
    $mail->addAddress('jaumecrespo@jaumecrespo.com', 'Admin');

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<p><strong>Nombre:</strong> $name</p>"
               . "<p><strong>Email:</strong> $email</p>"
               . "<p><strong>Comentario:</strong><br>" . nl2br($comment) . "</p>";
    $mail->AltBody = "Nombre: $name\nEmail: $email\nComentario:\n$comment";

    if ($mail->send()) {
        echo "<p>El mensaje se ha enviado de forma correcta.</p>";
    } else {
        echo "<p>Error al enviar el mensaje.</p>";
    }
} catch (Exception $e) {
    error_log("Error al enviar correo: " . $mail->ErrorInfo, 3, $directory . "error_log.txt");
    echo "<p>Error al enviar el correo: Inténtalo más tarde.</p>";
}
?>

<!-- Redirigir a la página de inicio después de 5 segundos -->
<meta http-equiv='Refresh' content="5; url='index.php'" />
