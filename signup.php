<?php
include("db/connection.php");
$response = [];
$response["success"] = false;

$username = $_POST['username'];
$email = $_POST['email'];
$password =  $_POST["password"];


if(isset($_POST["email"])){
    $email = $_POST["email"];
}

if(isset($_POST["username"])){
    $username =$_POST["username"];
}

if(isset($_POST["password"])){
    $password = $_POST["password"];
}


$type = 1;


$query = $mysqli->prepare("INSERT INTO users (username, email, password, type) VALUES (?, ?, ?, ?)");
$query->bind_param("sssi", $username, $email, $password, $type);
$query->execute();


$response["success"] = true;

echo json_encode($response);
?>
