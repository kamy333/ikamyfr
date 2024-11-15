<?php
header('Content-Type: application/json');
require_once('../../../inc/config/config.php');

function hspc($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Database connection
$host = DB_SERVER;// 'localhost';
$username = DB_USER;//'root'; // replace with your MySQL username
$password = DB_PASS; // replace with your MySQL password
$database = DB_NAME;// 'your_database_name';


$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


// Initialize parameters from DataTables request
$start = $_GET['start'] ?? 0;
$length = $_GET['length'] ?? 10;
$draw = $_GET['draw'] ?? 1;
$search = $_GET['search']['value'] ?? ''; // Search value
$screenSize = $_GET['screenSize'] ?? 'large'; // Screen size parameter

// Ordering parameters
$orderColumnIndex = $_GET['order'][0]['column'] ?? 0;
$orderDirection = $_GET['order'][0]['dir'] ?? 'asc';

// Define columns for large and small screens
if ($screenSize == 'small') {
    $columns = ['id', 'name', 'position', 'salary'];
} else {
    $columns = ['id', 'name', 'position', 'office', 'age', 'start_date', 'salary'];
}
$orderColumn = $columns[$orderColumnIndex] ?? 'id';

// Count total records without filtering
$totalRecordsQuery = "SELECT COUNT(*) AS total FROM employees";
$totalRecordsResult = $connection->query($totalRecordsQuery);
$totalRecords = $totalRecordsResult->fetch_assoc()['total'];

// Prepare the base query for data retrieval with search filter
$selectColumns = implode(", ", $columns); // Build column list for SELECT
$query = "SELECT $selectColumns FROM employees";
$whereClause = "";

// Add search filter if there is a search term
if (!empty($search)) {
    $search = $connection->real_escape_string($search); // Escape search term
    $whereClause = " WHERE name LIKE '%$search%' OR position LIKE '%$search%'";

    if ($screenSize == 'large') {
        $whereClause .= " OR office LIKE '%$search%' OR age LIKE '%$search%' OR start_date LIKE '%$search%' OR salary LIKE '%$search%'";
    }
    $query .= $whereClause;
}

// Count records after filtering
$filteredRecordsQuery = "SELECT COUNT(*) AS total FROM employees" . $whereClause;
$filteredRecordsResult = $connection->query($filteredRecordsQuery);
$filteredRecords = $filteredRecordsResult->fetch_assoc()['total'];

// Add ORDER BY, LIMIT, and OFFSET to the main query
$query .= " ORDER BY $orderColumn $orderDirection LIMIT $start, $length";
$result = $connection->query($query);

// Fetch and format data for DataTables
$data = [];
while ($row = $result->fetch_assoc()) {
    if ($screenSize == 'small') {
        $data[] = [
            $row['id'],
            hspc($row['name']),
            hspc($row['position']),
            "$" . number_format($row['salary'], 2)
        ];
    } else {
        $editButton = "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>";
        $deleteButton = "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";

        $ageLabel = ($row['age'] > 30) ? "<span class='badge bg-warning'>" . $row['age'] . "</span>" : $row['age'];
        $startDate = date("Y-m-d", strtotime($row['start_date']));
        $salary = "$" . number_format($row['salary'], 2);


        $data[] = [
            $row['id'],
            hspc($row['name']),
            hspc($row['position']),
            hspc($row['office']),
            $ageLabel,
            $startDate,
            $salary,
            $editButton . " " . $deleteButton
        ];
    }
}

// Prepare response in the DataTables expected format
$response = [
    "draw" => intval($draw),
    "recordsTotal" => $totalRecords,
    "recordsFiltered" => $filteredRecords,
    "data" => $data
];

// Send the JSON response
echo json_encode($response);

$connection->close();


