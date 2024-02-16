<?php
include_once "includes/dbh.inc.php";

$sql = "SELECT * from assignment2";
$result = mysqli_query($conn, $sql);

$data = array();
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

mysqli_close($conn);

header('Content-Type: application/json');

$json = json_encode($data);

echo $json;


// // Sample data
// $data = array(
//     'name' => 'John Doe',
//     'age' => 30,
//     'email' => 'john@example.com'
// );

// // Convert the array to JSON
// $json = json_encode($data);

// // Set headers to specify JSON content type
// header('Content-Type: text/plain');

// // Output the JSON data
// echo $json;



