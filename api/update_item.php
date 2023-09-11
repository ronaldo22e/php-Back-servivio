
<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$name = $data['name'];
$description = $data['description'];

$sql = "UPDATE items SET name='$name', description='$description' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $response = array('message' => 'Item updated successfully');
} else {
    $response = array('error' => 'Error updating item');
}

echo json_encode($response);
$conn->close();
?>
