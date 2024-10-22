<?php
    // Crear el XML con los datos del formulario
    $rss = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><formulario></formulario>');
    $rss->addChild('nombre', $_POST['name']);
    $rss->addChild('email', $_POST['email']);
    $rss->addChild('asunto', $_POST['subject']);
    $rss->addChild('mensaje', $_POST['comment']);

    // Especificar la ruta donde se guardará el archivo XML
    $directory = 'C:\xampp\htdocs\elora2\Elora\Contactos\Mensaje_'; // Asegúrate de que esta carpeta existe

   
	

    // Crear el nombre del archivo basado en la fecha y hora actual
    $file_name = $directory . date('YmdHis') . '.xml';

    // Guardar el archivo XML
    if (file_put_contents($file_name, $rss->asXML())) {
        echo "
            <style>
                
			
               
			
            </style>
            <p>Enviando<br>Redirigiendo en 5 segundos...</p>
        ";
    } else {
        echo "<p>Error al guardar el archivo XML</p>";
    }
?>

<meta http-equiv='Refresh' content="5; url='index.php'" />
