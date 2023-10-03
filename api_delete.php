<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:DELETE');
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
// Content-type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents('php://input'), true);

$id = $data['sid'];
include "database_connection/dbh.php";
$query = "DELETE FROM students WHERE id = {$id};";

if (mysqli_query($connection, $query)) {
    echo json_encode(array("message" => "Data Deleted success", "status" => true));
} else {
    echo json_encode(array("message" => "Data Deleted failed", "status" => false));
}
