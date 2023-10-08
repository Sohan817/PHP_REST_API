<?php
$json_string = 'json/my.json';

$json_data = file_get_contents($json_string);

$arr = json_decode($json_data, true);

echo "<pre>";
print_r($arr);
echo "</pre>";

//Array data show in the table

echo '<table border="1" cellpadding = "10px">';

foreach ($arr as list("userId" => $userId, "id" => $id, "title" => $title, "body" => $body)) {
    echo "<tr><td>{$userId}</td><td>{$id}</td><td>{$title}</td><td>{$body}</td></tr>";
}

echo "</table>";
