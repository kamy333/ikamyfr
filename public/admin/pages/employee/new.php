<?php
require_once('../../../../inc/config/initialize.php');
$lang = $_GET['lang'] ?? 'en';
$className = $_GET['class_name'] ?? 'Employee';
$myClass = new $className() ?? new Employee();
$pageName = $myClass::$page_name ?? 'Employee';
$title = "Add New Employee" ?? 'Transmed';

include HEADER;

// Check if we're copying an existing employee
$copy_id = $_GET['copy_id'] ?? null;
$employee = null;

if ($copy_id) {
    // Retrieve employee data based on copy_id
    $employee = Employee::find_by_id($copy_id);
}

// Set the action to point to the save handler without an ID, indicating a new entry
$action = 'save_employee.php'; // URL to handle new employee form submission
$method = 'POST';

// Include the form component
include 'employee_form.php';

include FOOTER;

