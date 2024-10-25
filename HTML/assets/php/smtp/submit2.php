<?php

function guardarMensajeEnXML($nombre, $email, $asunto, $comentario) {
    // Define la ruta del archivo XML
    $xmlFile = 'mensajes.xml';

    // Carga el archivo XML o crea uno nuevo si no existe
    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);
    } else {
        // Crea un nuevo archivo XML
        $xml = new SimpleXMLElement('<?xml version="1.0"?><mensajes></mensajes>');
    }

    // Obtiene el último ID y añade uno para el nuevo mensaje
    $ultimoId = count($xml->mensaje);
    $nuevoId = $ultimoId + 1;

    // Crea un nuevo nodo de mensaje
    $mensaje = $xml->addChild('mensaje');
    $mensaje->addChild('id', $nuevoId);
    $mensaje->addChild('fecha', date('Y-m-d')); // Fecha actual en formato YYYY-MM-DD
    $mensaje->addChild('nombre', htmlspecialchars($nombre));
    $mensaje->addChild('email', htmlspecialchars($email));
    $mensaje->addChild('asunto', htmlspecialchars($asunto));
    $mensaje->addChild('comentario', htmlspecialchars($comentario));

    // Guarda el XML en el archivo
    $xml->asXML($xmlFile);
}

// Uso de la función
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recolecta los datos del formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['subject'];
    $comentario = $_POST['comment'];

    // Guarda el mensaje en el archivo XML
    guardarMensajeEnXML($nombre, $email, $asunto, $comentario);
}
?>
