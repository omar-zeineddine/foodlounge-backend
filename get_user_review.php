<?php
include("db/connection.php");

if(isset($_POST["user_id"])){
    $id = $_POST["user_id"];
}

$status = 1;

$query = $mysqli->prepare("SELECT * from reviews WHERE user_id = ? AND status = ?");
$query->bind_param("ii", $id, $status);
$query->execute();

$array = $query->get_result();
$response = [];

while($review = $array->fetch_assoc()){
    $response[] = $review;
} 

echo json_encode($response);
?>
