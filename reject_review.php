<?php
include("db/connection.php");

if(isset($_POST["id"])){
    $id = $_POST["id"];
}

$query = $mysqli->prepare("DELETE FROM reviews WHERE id = $id");
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);
?>


