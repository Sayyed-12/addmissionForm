<?php
include 'dbConnection.php';


$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($conn, $query);
 if($result ->num_rows>0){
     echo ' login successful<br><br>';
     include 'addmissionForm.html';
 }
 else{
     echo ' login Failed';
 }


?>