<?php
header('Content-Type: application/json');
require_once('../../../inc/config/initialize.php');
$employee = new Employee();


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

$totalRecords=$employee->count_all();

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
$filteredRecords=$employee->count_all($whereClause);

// Add ORDER BY, LIMIT, and OFFSET to the main query
$query .= " ORDER BY $orderColumn $orderDirection LIMIT $start, $length";
$result = $employee->find_by_sql($query);

$data = [];
foreach ($result as $row) {
    $editButton = "<a href='edit.php?id=" . $row->id . "' class='btn btn-primary custom-samesize-btn'>Edit</a>";
    $deleteButton = "<a href='delete.php?id=" . $row->id . "' class='btn btn-danger custom-samesize-btn'>Delete</a>";
$p="    <a class='icon-link' href='#'>
        Icon link
    <svg class='bi' aria-hidden='true'><use xlink:href='#arrow-right'></use></svg>
</a>";


    if ($screenSize == 'small') {
        $data[] = [
            $row->id,
            hspc($row->name ),
            hspc($row->position),
            "$" . number_format($row->salary, 2),
            $editButton . " " . $deleteButton." ".$p
        ];
    } else {

        $ageLabel = ($row->age > 30) ? "<span class='badge bg-warning'>" . $row->age . "</span>" : $row->age;
        $startDate = date("Y-m-d", strtotime($row->start_date));
        $salary = "$" . number_format($row->salary, 2);


        $data[] = [
            $row->id,
            hspc($row->name),
            hspc($row->position),
            hspc($row->office),
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

$database->close_connection();
?>
