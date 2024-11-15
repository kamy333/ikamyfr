<?php
if (file_exists('../../../../inc/config/initialize.php')) {
    require_once('../../../../inc/config/initialize.php');
} else {
    require_once('../../../../../../inc/config/initialize.php');
}

$title = "Edit Employee";
include 'header.php';

// Retrieve employee data based on ID for editing
$id = $_GET['id'] ?? null;
if (!$id) {
    die("Employee ID is required for editing.");
}

$employee = Employee::find_by_id($id);
if (!$employee) {
    die("Employee not found.");
}

$action = 'save_employee.php?id=' . urlencode($id); // Set form action URL to handle editing
$method = 'POST'; // Method for form submission

// Include the form component
include 'employee_form.php';

include 'footer.php';
?>
