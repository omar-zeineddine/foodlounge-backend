<?php
include("db/connection.php");

$query = $mysqli->prepare("SELECT * from restaurants");
$query->execute();

$array = $query->get_result();

$response = [];
while($restaurant = $array->fetch_assoc()){
    $response[] = $restaurant;
} 

echo json_encode($response);
?>
