<?php
require_once('../../../inc/config/initialize.php');


if (isset($_GET['id'])) {
    $e = new Employee();
    $id = (int)$_GET['id'];

    $e::find_by_id('1');

//    $id = intval($id);
    if (is_int($id)) {
        echo $id . ' is int' . '<br>';
    } else {
        echo $id . ' is no int' . '<br>';
        $id = (int)$_GET['id'];
    }
    echo $id;
}

if (!isset($_GET['id'])) {
    header("Location: test7.php?id=1");
}




