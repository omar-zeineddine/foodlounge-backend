<?php
include("db/connection.php");

$query = $mysqli->prepare("SELECT id, username, email, profile_picture, bio from users WHERE type = 1");
$query->execute();

$array = $query->get_result();
$response = [];
while($user = $array->fetch_assoc()){
    $response[] = $user;
} 

echo json_encode($response);
?>
