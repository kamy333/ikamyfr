<?php
if (file_exists('../../../../inc/config/initialize.php')) {
    require_once('../../../../inc/config/initialize.php');
}
$session=$session?? [];
//$session->confirmation_protected_page();
$title = "Edit Employee";
include HEADER;

// Retrieve employee data based on ID for editing
$id = $_GET['id'] ?? null;
if (!$id) {
    $session->message("Employee ID is required for editing.");
    $session->ok(false);
    redirect_to('index.php');
}

$employee = Employee::find_by_id($id);
if (!$employee) {
  $session->message("Employee not found.");
  $session->ok(false);
  redirect_to('index.php');
}

$action = 'save_employee.php?id=' . urlencode($id); // Set form action URL to handle editing
$method = 'POST'; // Method for form submission

// Include the form component
include 'employee_form.php';

include FOOTER;

