<?php
    // Validar y limpiar los datos del formulario
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Nombre no proporcionado';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : 'Email no válido';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : 'Asunto no proporcionado';
    $comment = isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : 'Mensaje no proporcionado';

    // Especificar la ruta donde se guardarán los archivos TXT y XML
    $directory = 'C:\xampp\htdocs\jaimecrespoweb\Contactos\\'; // Asegúrate de que esta carpeta existe

    // Verificar si la carpeta existe, si no, intentar crearla
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true); // Intentar crear la carpeta si no existe
    }

    // ------------------- Guardar en el archivo TXT acumulativo -------------------
    $txt_file_name = $directory . 'todos_los_mensajes.txt';

    // Crear el contenido a agregar al archivo TXT, incluyendo una separación entre mensajes
    $txt_content = "--------------------------\n";
    $txt_content .= "Fecha: " . date('Y-m-d H:i:s') . "\n";
    $txt_content .= "Nombre: $name\n";
    $txt_content .= "Email: $email\n";
    $txt_content .= "Asunto: $subject\n";
    $txt_content .= "Mensaje: $comment\n";
    $txt_content .= "--------------------------\n\n";

    // Guardar el contenido en el archivo TXT, agregándolo al final (modo "append")
    if (file_put_contents($txt_file_name, $txt_content, FILE_APPEND)) {
        echo "<p>El archivo TXT ha sido actualizado exitosamente.</p>";
    } else {
        echo "<p>Error al guardar el archivo TXT</p>";
    }

    // ------------------- Guardar en el archivo XML acumulativo -------------------

    $xml_file_name = $directory . 'todos_los_mensajes.xml';

    // Verificar si el archivo XML ya existe
    if (file_exists($xml_file_name)) {
        // Si existe, cargar el XML existente
        $xml = simplexml_load_file($xml_file_name);
    } else {
        // Si no existe, crear un nuevo XML
        $xml = new SimpleXMLElement('<formulario></formulario>');
    }

    // Agregar los nuevos datos al XML
    $mensaje = $xml->addChild('mensaje');
    $mensaje->addChild('fecha', date('Y-m-d H:i:s'));
    $mensaje->addChild('nombre', $name);
    $mensaje->addChild('email', $email);
    $mensaje->addChild('asunto', $subject);
    $mensaje->addChild('comentario', $comment);

    // Guardar el XML actualizado en el archivo
    if ($xml->asXML($xml_file_name)) {
        echo "<p>El archivo XML ha sido actualizado exitosamente.</p>";
    } else {
        echo "<p>Error al guardar el archivo XML</p>";
    }
?>

<!-- Redirigir a la página de inicio después de 5 segundos -->
<meta http-equiv='Refresh' content="5; url='index.php'" />
