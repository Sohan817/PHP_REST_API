<?php
$connection = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");

//fetch all data
$query = "SELECT * FROM students;";
//fetch single data
//$query = "SELECT * FROM students WHERE id = {$_POST['id']};";
$result = mysqli_query($connection, $query) or die("Connection failed");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);
