<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:PUT');
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
// Content-type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents('php://input'), true);

$id = $data['sid'];
$name = $data['sname'];
$city = $data['scity'];
$age = $data['sage'];
include "database_connection/dbh.php";
$query = "UPDATE students SET name ='{$name}',city ='{$city}' ,age={$age} WHERE id = {$id};";

if (mysqli_query($connection, $query)) {
    echo json_encode(array("message" => "Data updated success", "status" => true));
} else {
    echo json_encode(array("message" => "Data updated failed", "status" => false));
}
