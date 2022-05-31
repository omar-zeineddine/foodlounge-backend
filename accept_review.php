<?php
include("db/connection.php");

if(isset($_POST["id"])){
    $id = $_POST["id"];
}


$query = $mysqli->prepare("UPDATE reviews SET status = 1 WHERE id = $id");
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);
?>



