<?php
// Comprobar si se ha enviado una solicitud de "saludar"
if ($_POST['accion'] == 'saludar') {
  // Obtener el nombre del usuario de la solicitud
  $nombre = $_POST['nombre'];

  // Generar la respuesta con un mensaje de saludo
  $respuesta = '¡Hola, ' . $nombre . '!';
}

// Enviar la respuesta en formato JSON
echo json_encode($respuesta);
?>
