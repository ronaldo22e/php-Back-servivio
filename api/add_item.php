<?php
include 'db.php'; // Incluye el archivo de conexión a la base de datos

$data = json_decode(file_get_contents("php://input"), true); // Obtiene los datos del cuerpo de la solicitud

$name = $data['name'];
$description = $data['description'];

$sql = "INSERT INTO items (name, description) VALUES ('$name', '$description')";

if ($conn->query($sql) === TRUE) {
    $response = array('message' => 'Item added successfully');
} else {
    $response = array('error' => 'Error adding item');
}

echo json_encode($response);
$conn->close();
?>
