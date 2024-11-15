<?php
require_once('../../../../inc/config/initialize.php');

$id = $_GET['id'] ?? null;
$isEdit = !empty($id);

$name = $_POST['name'] ?? '';
$position = $_POST['position'] ?? '';
$office = $_POST['office'] ?? '';
$age = $_POST['age'] ?? '';
$start_date = $_POST['start_date'] ?? '';
$salary = $_POST['salary'] ?? '';

if ($isEdit) {
    // Update existing employee
    $employee = Employee::find_by_id($id);
    if ($employee) {
        $employee->name = $name;
        $employee->position = $position;
        $employee->office = $office;
        $employee->age = $age;
        $employee->start_date = $start_date;
        $employee->salary = $salary;
        $employee->save();
    } else {
        die("Employee not found.");
    }
} else {
    // Add new employee
    $employee = new Employee();
    $employee->name = $name;
    $employee->position = $position;
    $employee->office = $office;
    $employee->age = $age;
    $employee->start_date = $start_date;
    $employee->salary = $salary;
    $employee->save();
}

header("Location: index.php");
exit();
?>
