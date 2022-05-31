<?php
include("db/connection.php");

if(isset($_POST["id"])){
    $id = $_POST["id"];
}

$query = $mysqli->prepare("SELECT type from users WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();

$array = $query->get_result();
$response = [];

while($user = $array->fetch_assoc()){
    $response[] = $user;
} 

echo json_encode($response);

?>
