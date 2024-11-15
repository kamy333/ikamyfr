<?php
header('Content-Type: application/json');
require_once('../../../inc/config/initialize.php');

$e = new Employee();

$data=$e::get_columns_config();

//echo "<pre>";
//print_r($data);
//echo "</pre>";

$d=$e::$columnsConfig;

//echo "<pre>";
//print_r($d);
//echo "</pre>";

echo json_encode($data);



