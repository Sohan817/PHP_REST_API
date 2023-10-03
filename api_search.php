<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

//Search using post method
$data = json_decode(file_get_contents("php://input"), true);
$search_value = $data['search'];
//Search using get method
//$search_value = isset($_GET['search']) ? $_GET['search'] : die();

require_once "database_connection/dbh.php";

$query = "SELECT * FROM students where name LIKE '%{$search_value}%'";

$result = mysqli_query($connection, $query) or die(" SQL Query failed");

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array("message" => "No search result fount", "status" => false));
}
