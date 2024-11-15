<?php
// Assuming $employee is defined with employee data for editing, or empty if adding a new employee.
$employee = $employee ?? null;
$action = $action ?? 'save_employee.php'; // URL to handle form submission
$method = $method ?? 'POST';
?>

<div class="container mt-4">
    <form action="<?= htmlspecialchars($action); ?>" method="<?= $method; ?>">
        <div class="row mb-3">
            <div class="col">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $employee->name ?? ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="<?= $employee->position ?? ''; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="office" class="form-label">Office</label>
                <input type="text" class="form-control" id="office" name="office" value="<?= $employee->office ?? ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="<?= $employee->age ?? ''; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="<?= $employee->start_date ?? ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" value="<?= $employee->salary ?? ''; ?>" required>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary"><?= $employee ? 'Update Employee' : 'Add Employee' ?></button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>



