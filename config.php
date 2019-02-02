<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "contest";

$conn = new mysqli ($server,$user,$password,$database);

if($conn->connect_error) {

    die("Eroare la conectare:".$conn->connect_error);
}

?>