<?php
require_once('../../../../inc/config/initialize.php');

$id = $_GET['id'] ?? null;

if ($id) {
    $employee = Employee::find_by_id($id);
    if ($employee) {
        $employee->delete();
    }
}

$session->message("The record was deleted successfully.", "success");

header("Location: index.php");
exit();
