<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cruddb"; // Nombre de la base de datos que has creado

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
