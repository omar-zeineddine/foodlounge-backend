<?php
include("db/connection.php");

$name = $_POST["name"];
$message = $_POST["message"];

$query = $mysqli->prepare("INSERT INTO reviews(name, message) VALUES (?, ?)");
$query->bind_param("ss", $name, $message);
$query->execute();

$response = [$name, $message];

echo json_encode($response);

?>