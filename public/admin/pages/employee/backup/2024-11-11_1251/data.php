<?php
header('Content-Type: application/json');
if (file_exists('../../../../inc/config/initialize.php')){
    require_once('../../../../inc/config/initialize.php');
} else {
    require_once('../../../../../../inc/config/initialize.php');
}


// Whitelist of allowed class names
$allowedClasses = ['Employee'];

// Retrieve the class name from the request
$incClass = $_GET['incClass'] ?? 'Employee';

// Check if the class is allowed before instantiation
if (in_array($incClass, $allowedClasses)) {
    $myClass = new $incClass();
} else {
    // Handle error if class is not allowed
    echo json_encode(['error' => 'Invalid class name provided','classFromRequest' => $incClass]);
    exit;
}

$tableName = $myClass->get_table_name();

// Initialize parameters from DataTables request
$start = $_GET['start'] ?? 0;
$length = $_GET['length'] ?? 10;
$draw = $_GET['draw'] ?? 1;
$search = $_GET['search']['value'] ?? ''; // Search value
//$screenSize = $_GET['screenSize'] ?? 'large'; // Screen size parameter
//$screenSize = 'large';

//$className = $_GET['myClass'] ?? '';
//echo $className;

// Ordering parameters
//$orderColumnIndex = $_GET['order'][0]['column'] ?? 0;
//$orderDirection = $_GET['order'][0]['dir'] ?? 'asc';

$orderColumnIndex = ($_GET['order'][0]['column'] ?? 1) - 1;
$orderDirection = $_GET['order'][0]['dir'] ?? 'asc';

//$columns = ['id', 'name', 'position', 'office', 'age', 'start_date', 'salary'];
$columns = $myClass->get_table_field();

$orderColumn = $columns[$orderColumnIndex] ?? 'id';

$totalRecords = $myClass->count_all();

// Prepare the base query for data retrieval with search filter
//array_shift($columns);
$selectColumns = implode(", ", $columns); // Build column list for SELEC
$query = "SELECT $selectColumns FROM $tableName";
$whereClause = "";

// Add search filter if there is a search term
if (!empty($search)) {
//    $search = $connection->real_escape_string($search); // Escape search term
    $search = $database->escape_value($search); // Escape search term
    $whereClause = " WHERE name LIKE '%$search%' OR position LIKE '%$search%'";

    $whereClause .= " OR office LIKE '%$search%' OR age LIKE '%$search%' OR start_date LIKE '%$search%' OR salary LIKE '%$search%'";
//    $whereClause= $myClass::get_where_clause($search);

    $query .= $whereClause;
}

// Count records after filtering
$filteredRecords = $myClass->count_all_where($whereClause);

// Add ORDER BY, LIMIT, and OFFSET to the main query
$query .= " ORDER BY $orderColumn $orderDirection LIMIT $start, $length";
$result = $myClass::find_by_sql($query);

$data = [];
foreach ($result as $row) {
    $editButton = "<a href='edit.php?id=" . $row->id . "' class='btn btn-primary custom-samesize-btn'>Edit</a>";
    $deleteButton = "<a href='delete.php?id=" . $row->id . "' class='btn btn-danger custom-samesize-btn'>Delete</a>";

    $ageLabel = ($row->age > 30) ? "<span class='badge bg-warning'>" . $row->age . "</span>" : $row->age;
    $startDate = date("Y-m-d", strtotime($row->start_date));
    $salary = "$" . number_format($row->salary, 2);


    $data[] = [
        '<button class="btn btn-sm btn-primary toggle-details">+</button>',
        $row->id,
        hspc($row->name),
        hspc($row->position),
        hspc($row->office),
         "<span style='display:none;'>{$row->age}</span>" . $ageLabel, // Hidden age for sorting
        "<span style='display:none;'>{$row->start_date}</span>" . $startDate, // Hidden start date for sorting
        "<span style='display:none;'>{$row->salary}</span>" . $salary, // Hidden salary for sorting
        $editButton . " " . $deleteButton
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

$database->close_connection();
?>

