<?php
header('Content-Type: application/json');
require_once('../../../../../inc/config/config.php');

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

// Ordering parameters
$orderColumnIndex = $_GET['order'][0]['column'] ?? 0; // Column index for ordering
$orderDirection = $_GET['order'][0]['dir'] ?? 'asc'; // asc or desc

// Define the columns array based on DataTables columns
$columns = ['id', 'name', 'position', 'office', 'age', 'start_date', 'salary'];
$orderColumn = $columns[$orderColumnIndex] ?? 'id'; // Determine the column to sort by

// Count total records without filtering
$totalRecordsQuery = "SELECT COUNT(*) AS total FROM employees";
$totalRecordsResult = $connection->query($totalRecordsQuery);
$totalRecords = $totalRecordsResult->fetch_assoc()['total'];

// Prepare the base query for data retrieval with search filter
$query = "SELECT id, name, position, office, age, start_date, salary FROM employees";
$whereClause = "";

// Add search filter if there is a search term
if (!empty($search)) {
    $search = $connection->real_escape_string($search); // Escape search term
    $whereClause = " WHERE name LIKE '%$search%' OR position LIKE '%$search%' OR office LIKE '%$search%' OR age LIKE '%$search%' OR start_date LIKE '%$search%' OR salary LIKE '%$search%'";
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
    $editButton = "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary custom-samesize-btn'>Edit</a>";
    $deleteButton = "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger custom-samesize-btn'>Delete</a>";

    // Add conditional label for age over 30
    $ageLabel = ($row['age'] > 30) ? "<span class='badge bg-warning'>" . $row['age'] . "</span>" : $row['age'];

    // Format start date and salary
    $startDate = date("Y-m-d", strtotime($row['start_date']));
    $salary = "$" . number_format($row['salary'], 2);

    // Append row data
    $data[] = [
        $row['id'],
        htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($row['position'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($row['office'], ENT_QUOTES, 'UTF-8'),
        $ageLabel,
        $startDate,
        $salary,
        $editButton . " " . $deleteButton // Edit and Delete buttons
    ];
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

