<?php
$connection = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$query = "SELECT * FROM students";

$result = mysqli_query($connection, $query);

$output = mysqli_fetch_all($result, MYSQLI_ASSOC) or die("Query Failed");

$jsonData = json_encode($output, JSON_PRETTY_PRINT);

$file_name = "my_" . date("d-m-Y") . ".json";

if (file_put_contents("json/{$file_name}", $jsonData)) {
    echo $file_name . " File created successfully";
} else {
    echo $file_name . " File created failed";
}
