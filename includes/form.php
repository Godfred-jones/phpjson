<?php
include_once 'dbh.inc.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $location = $_POST["location"];
    $device = $_POST["device"];

    $sql = "INSERT INTO assignment2 (name, password, location, device) VALUES('$username', '$password', '$location', '$device');";
    mysqli_query($conn, $sql);

    header("Location: ../index.html");
 }else{
    header("Location: ../index.html");
 }