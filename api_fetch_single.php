<?php
header('Content-type: application/json');
header('Acess-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"), true);
$student_id = $data['sid'];
require_once "database_connection/dbh.php";

$query = "SELECT * FROM students where id = {$student_id}";

$result = mysqli_query($connection, $query) or die(" SQL Query failed");

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array("message" => "No result fount", 'status' => false));
}
