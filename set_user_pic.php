<?php
include("db/connection.php");



if(isset($_POST["id"])){
    $id = $_POST["id"];
}

if(isset($_POST["profile_picture"])){
    $profile_picture = $_POST["profile_picture"];
}

$query = $mysqli->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
$query->bind_param("si", $profile_picture, $id);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>
