<?php
if (file_exists('../../../../inc/config/initialize.php')){
    require_once('../../../../inc/config/initialize.php');
} else {
    require_once('../../../../../../inc/config/initialize.php');
}

$connection = new mysqli("localhost", "root", "", "test_db");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $office = $_POST['office'];
    $age = $_POST['age'];
    $start_date = $_POST['start_date'];
    $salary = $_POST['salary'];

    $query = "UPDATE employees SET name=?, position=?, office=?, age=?, start_date=?, salary=? WHERE id=?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("sssidsi", $name, $position, $office, $age, $start_date, $salary, $id);
    $stmt->execute();

    header("Location: index.html"); // Redirect back to the main page
}

// Fetch the record for the form
$id = $_GET['id'];
$result = $connection->query("SELECT * FROM employees WHERE id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
</head>
<body>
<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Position: <input type="text" name="position" value="<?php echo $row['position']; ?>"><br>
    Office: <input type="text" name="office" value="<?php echo $row['office']; ?>"><br>
    Age: <input type="number" name="age" value="<?php echo $row['age']; ?>"><br>
    Start Date: <input type="date" name="start_date" value="<?php echo $row['start_date']; ?>"><br>
    Salary: <input type="number" name="salary" value="<?php echo $row['salary']; ?>" step="0.01"><br>
    <button type="submit">Update</button>
</form>
</body>
</html>

