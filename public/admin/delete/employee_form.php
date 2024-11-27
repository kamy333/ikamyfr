<?php
$action= $action ?? 'save_employee.php';
$method= $method ?? 'POST';
$employee= $employee ?? null;
?>
<div class="container mt-4">
    <form action="<?= hs($action); ?>" method="<?= $method; ?>">
        <!-- Row 1: Name -->
        <div class="row mb-3">
            <div class="form-floating col-12">
                <input type="text" class="form-control" id="name" name="name"
                       placeholder="Name" value="<?= hs($employee->name ?? ''); ?>" required>
                <label for="name" class="form-label">Name</label>
            </div>
        </div>

        <!-- Row 2: Position and Office -->
        <div class="row mb-3">
            <div class="form-floating col-md-6">
                <input type="text" class="form-control" id="position" name="position"
                       placeholder="Position" value="<?= hs($employee->position ?? ''); ?>" required>
                <label for="position" class="form-label">Position</label>
            </div>
            <div class="form-floating col-md-6">
                <input type="text" class="form-control" id="office" name="office"
                       placeholder="Office" value="<?= hs($employee->office ?? ''); ?>" required>
                <label for="office" class="form-label">Office</label>
            </div>
        </div>

        <!-- Row 3: Age and Start Date -->
        <div class="row mb-3">
            <div class="form-floating col-md-6">
                <input type="number" class="form-control" id="age" name="age"
                       placeholder="Age" value="<?= hs($employee->age ?? ''); ?>" required>
                <label for="age">Age</label>
            </div>
            <div class="form-floating col-md-6">
                <input type="date" class="form-control" id="start_date" name="start_date"
                       placeholder="Start Date" value="<?= hs($employee->start_date ?? ''); ?>" required>
                <label for="start_date">Start Date</label>
            </div>
        </div>

        <!-- Row 4: Salary -->
        <div class="row mb-3">
            <div class="form-floating col-12">
                <input type="text" class="form-control" id="salary" name="salary"
                       placeholder="Salary"
                       value="<?= hs($employee->salary ?? ''); ?>" required>
                <label for="salary">Salary</label>
            </div>
        </div>

        <!-- Row 5: Submit and Cancel -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">
                <?= $employee ? 'Update Employee' : 'Add Employee' ?>
            </button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
