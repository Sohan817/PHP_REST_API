<?php
header('Content-type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
// Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents('php://input'), true);
$name = $data['sname'];
$city = $data['scity'];
$age = $data['sage'];
include "database_connection/dbh.php";
$query = "INSERT INTO students(name,city,age) VALUES('{$name}','{$city}',{$age});";

if (mysqli_query($connection, $query)) {
    echo json_encode(array("message" => "Data inserted success", "status" => true));
} else {
    echo json_encode(array("message" => "Data inserted failed", "status" => false));
}
