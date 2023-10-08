<?php
if (file_exists('json/students_data.json')) {
    if ($_POST['name'] != '' && $_POST['age'] != '' && $_POST['city'] != '') {
        $current_data = file_get_contents('json/students_data.json');
        $array_data = json_decode($current_data, true);
        $new_data = [
            "name" => $_POST['name'],
            "age" => $_POST['age'],
            "city" => $_POST['city'],
        ];
        $array_data[] = $new_data;
        $jsonData = json_encode($array_data, JSON_PRETTY_PRINT);
        if (file_put_contents('json/students_data.json', $jsonData)) {
            echo "<h3>JSON data saved Successful</h3>";
        } else {
            echo "<h3>JSON data saved Failed</h3>";
        }
    } else {
        echo "<h3>All fields are required</h3>";
    }
} else {
    echo "<h3>JSON File doesn't exists</h3>";
}
