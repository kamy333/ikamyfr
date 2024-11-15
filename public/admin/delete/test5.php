<?php
require_once('../../../inc/config/initialize.php');

$employee = new Employee();
$e=$employee->find_all();

echo $employee->get_table_name();
echo BR;
echo print_r ($employee->get_table_field());

$search="s";

function xxx($search)
{
    $newWhereClause = " WHERE ";
    foreach ($employee->get_table_field() as $field) {
        if ($field == 'id' ) {continue;}
        $newWhereClause .= "$field LIKE '%$search%' OR ";
    }

    $newWhereClause = substr_replace($newWhereClause, '', -3);

    return $newWhereClause;
}


$whereClause = " WHERE 
name LIKE '%$search%' OR 
position LIKE '%$search%' OR 
office LIKE '%$search%' OR 
age LIKE '%$search%' 
OR start_date LIKE '%$search%' OR salary LIKE '%$search%'";

echo BR;
echo 'search: '.$search.BR;
echo 'whereClause: <br>'.$whereClause;

$newWhereClause = " WHERE ";
foreach ($employee->get_table_field() as $field) {
       if ($field == 'id' ) {continue;}
    $newWhereClause .= "$field LIKE '%$search%' OR ";
}

echo BR;
//echo 'newWhereClause: <br>'.$newWhereClause;

echo BR;
//echo 'newWhereClause: <br>'.substr_replace($newWhereClause, '', -4);
$newWhereClause = substr_replace($newWhereClause, '', -4);
echo 'newWhereClause: <br>'.$newWhereClause;
echo BR;
echo BR;



if (trim($whereClause) == trim($newWhereClause)) {
    echo BR;
    echo 'whereClause == newWhereClause';
} else {
    echo BR;
    echo 'whereClause != newWhereClause';
}