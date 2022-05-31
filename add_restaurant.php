<?php
include("db/connection.php");

$name = $_POST["name"];
$description = $_POST["description"];

$query = $mysqli->prepare("INSERT INTO restaurants(name, description) VALUES (?, ?)");
$query->bind_param("ss", $name, $description, );
$query->execute();

$response = [$name, $description];

echo json_encode($response);

?>