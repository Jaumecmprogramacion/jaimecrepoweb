<?php
// Especificar la ruta donde se encuentra el archivo XML
$directory = 'C:\xampp\htdocs\jaimecrespoweb\Contactos\\'; // Ajusta esta ruta según tu configuración
$xml_file_name = $directory . 'todos_los_mensajes.xml';

// Cargar el archivo XML
if (file_exists($xml_file_name)) {
    $xml = simplexml_load_file($xml_file_name);
} else {
    die('Error: El archivo XML no existe.');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Asegura que la página sea responsiva -->
    <title>Mensajes Enviados</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9 !important;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            overflow-x: auto; /* Permite desplazamiento horizontal si es necesario */
            display: block; /* Permite el desplazamiento en pantallas pequeñas */
            max-height: 70vh; /* Altura máxima para la tabla */
            overflow-y: auto; /* Desplazamiento vertical */
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px; /* Ajustar padding aquí si es necesario */
            word-wrap: break-word; /* Permite que el texto se ajuste en celdas */
            vertical-align: top; /* Alinear el contenido de las celdas en la parte superior */
        }
        th {
            background-color: #f2f2f2;
        }
        td.comentario {
            max-width: 200px; /* Limitar ancho de la columna comentario */
            overflow: hidden; /* Ocultar el desbordamiento */
            word-wrap: break-word; /* Permitir que el texto se ajuste en celdas */
        }
        @media screen and (min-width: 600px) {
            table {
                display: table; /* Mostrar como tabla en pantallas más grandes */
            }
        }
        @media screen and (max-width: 600px) {
            table {
                display: block; /* Mostrar como bloque en pantallas más pequeñas */
            }
            tr {
                display: block; /* Cada fila se muestra como un bloque */
                margin-bottom: 10px; /* Espacio entre filas */
            }
            td {
                text-align: left; /* Alinear el texto a la izquierda */
                padding-left: 50%; /* Espacio para el texto */
                padding-bottom: 10px; /* Espacio inferior */
                position: relative; /* Posicionamiento relativo para pseudoelementos */
                padding: 8px; /* Padding normal */
            }
            td:before {
                content: attr(data-label); /* Mostrar etiquetas en dispositivos móviles */
                position: absolute; /* Posicionar absolutamente */
                left: 10px; /* Ajustar el espacio a la izquierda */
                width: 45%; /* Ancho de las etiquetas */
                padding-left: 10px; /* Espacio a la izquierda */
                font-weight: bold; /* Hacer las etiquetas en negrita */
                text-align: left; /* Alinear texto a la izquierda */
            }
        }
    </style>
</head>
<body>
    <h1>Mensajes Recibidos</h1>
    
    <?php if ($xml->mensaje): ?>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Asunto</th>
                    <th>Comentario</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($xml->mensaje as $mensaje): ?>
                    <tr>
                        <td data-label="Fecha"><?php echo $mensaje->fecha; ?></td>
                        <td data-label="Nombre"><?php echo $mensaje->nombre; ?></td>
                        <td data-label="Email"><?php echo $mensaje->email; ?></td>
                        <td data-label="Asunto"><?php echo $mensaje->asunto; ?></td>
                        <td class="comentario" data-label="Comentario"><?php echo $mensaje->comentario; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay mensajes para mostrar.</p>
    <?php endif; ?>
</body>
</html>

