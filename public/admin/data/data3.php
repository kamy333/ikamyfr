<?php

require_once('../../../inc/config/initialize.php');

if (isset($_GET['field']) && $_GET['field'] === 'chauffeur' && isset($_GET['query'])) {
    $query = $_GET['query'];

    $sql = "SELECT id, chauffeur_name FROM chauffeurs WHERE chauffeur_name LIKE ?";
    $result=$database->query_with_like($sql, $query);
    if ($result){
        echo json_encode($result);
    }

}
$database->close_connection();

