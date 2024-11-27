<?php
require_once('../../../../inc/config/initialize.php');
$title = "Employee Details";
include HEADER;

// Get the employee ID from the query string
$id = $_GET['id'] ?? null;
$classeName = $_GET['class_name'] ?? 'Employee';
if (!$id) {
    echo "<div class='container mt-4'><p>Employee ID is required to view details.</p></div>";
    include 'footer.php';
    exit();
}

// Retrieve the employee record by ID
$employee = Employee::find_by_id($id);

if (!$employee) {
    echo "<div class='container mt-4'><p>Employee not found.</p></div>";
    include 'footer.php';
    exit();
}
?>

<div class="container mt-4">
    <h2 class="mb-4">Employee Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($employee->name) ?></h5>
            <p class="card-text">
                <strong>Position:</strong> <?= htmlspecialchars($employee->position) ?><br>
                <strong>Office:</strong> <?= htmlspecialchars($employee->office) ?><br>
                <strong>Age:</strong> <?= htmlspecialchars($employee->age) ?><br>
                <strong>Start Date:</strong> <?= htmlspecialchars($employee->start_date) ?><br>
                <strong>Salary:</strong> <?= htmlspecialchars($employee->salary) ?>
            </p>
            <a href="edit.php?id=<?= urlencode($employee->id) ?>" class="btn btn-primary">Edit</a>
            <a href="javascript:void(0);" onclick="confirmDelete(<?= $employee->id ?>)" class="btn btn-danger">Delete</a>
            <a href="index.php" class="btn btn-secondary">Back to List</a>

        </div>
    </div>
</div>

<script>
    // Inline JavaScript for delete confirmation
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this employee?")) {
            window.location.href = "delete.php?id=" + id;
        }
    }
</script>

<?php include FOOTER; ?>
