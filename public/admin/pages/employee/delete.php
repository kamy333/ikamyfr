<?php
global $session;
require_once('../../../../inc/config/initialize.php');

$id = $_GET['id'] ?? null;
$classeName = $_GET['class_name'] ?? 'Employee';

if (!$id) {
    $session->message("The record was not found.");
    $session->ok = false;
    redirect_to('index.php');
}

if ($id) {
    $myclass = $classeName::find_by_id($id);
    if ($myclass) {
        $myclass->delete();
    }
}

$session->message("The record was deleted successfully.");
$session->ok = true;
redirect_to('index.php');

