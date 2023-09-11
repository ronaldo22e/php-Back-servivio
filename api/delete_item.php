<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

$sql = "DELETE FROM items WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $response = array('message' => 'Item deleted successfully');
} else {
    $response = array('error' => 'Error deleting item');
}

echo json_encode($response);
$conn->close();
?>
