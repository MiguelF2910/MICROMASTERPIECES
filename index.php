<?php
// Ejecutar el script Python y capturar la salida
$command = 'python C:\\xampp\\htdocs\\MICROMASTERPIECESV2\\prueba.py';
$response = shell_exec($command);

// Convertir la respuesta JSON en un array de PHP
$responseData = json_decode($response, true);

// Verificar si 'message' está en la respuesta y mostrarlo
if (isset($responseData['message'])) {
    $message = $responseData['message'];
    echo "<h1>Respuesta de la IA:</h1>";
    echo "<p>" . htmlspecialchars($message) . "</p>";
} else {
    echo "<h1>No se recibió un mensaje válido</h1>";
}
?>