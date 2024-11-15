<?php
if (file_exists('../../../../inc/config/initialize.php')){
    require_once('../../../../inc/config/initialize.php');
} else {
    require_once('../../../../../../inc/config/initialize.php');
}


$connection = new mysqli("localhost", "root", "", "test_db");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM employees WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

// Redirect back to the main page after deletion
header("Location: index.html");
?>
