<?php
include("db/connection.php");


if(isset($_POST["id"])){
    $id = $_POST["id"];
}
if(isset($_POST["bio"])){
    $bio = $_POST["bio"];
}

$query = $mysqli->prepare("UPDATE users SET bio = ? WHERE id = ?");
$query->bind_param("si", $bio, $id);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);
?>

