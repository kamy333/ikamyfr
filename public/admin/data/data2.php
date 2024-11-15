<?php

require_once('../../../inc/config/initialize.php');


// Database connection
$host = DB_SERVER; // or your database host
$username = DB_USER; // your MySQL username
$password = DB_PASS; // your MySQL password
$dbname = DB_NAME; // your database name

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

if (isset($_GET['field']) && $_GET['field'] === 'chauffeur' && isset($_GET['query'])) {
    $query = $_GET['query'];

//    echo "Query: " . $query;

    $response = [];

    // Example SQL query for fetching chauffeur names matching the input
    $sql = "SELECT id, chauffeur_name FROM chauffeurs WHERE chauffeur_name LIKE ?";
    if ($stmt = $conn->prepare($sql)) {
        $likeQuery = "%" . $query . "%";
        $stmt->bind_param("s", $likeQuery);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $response[] = [
                'id' => $row['id'],
                'chauffeur_name' => $row['chauffeur_name']
            ];
        }
        echo json_encode($response);
    }
    $stmt->close();
}
$conn->close();

