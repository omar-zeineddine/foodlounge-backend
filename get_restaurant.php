<?php
include("db/connection.php");

if(isset($_POST["id"])){
    $id = $_POST["id"];
}

$query = $mysqli->prepare("SELECT * from restaurants where id = ?");
$query->bind_param("i", $id);
$query->execute();

$array = $query->get_result();
$response = [];
while($restaurant = $array->fetch_assoc()){
    $response[] = $restaurant;
} 

echo json_encode($response);

?>
