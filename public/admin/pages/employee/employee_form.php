<?php
// Assuming $employee is defined with employee data for editing, or empty if adding a new employee.
$employee = $employee ?? null;
$action = $action ?? 'save_employee.php'; // URL to handle form submission
$method = $method ?? 'POST';
$session = $session ?? null;
if (isset($_GET['copy_id'])) {
    $submit_action = 'Add new Employe e';

} elseif ( !isset($_GET['id'])){
    $submit_action = 'Add Employee';
} else {
    $submit_action = 'Update Employee';
}

// Retrieve errors and pre-filled data from session if available
//$errors = $_SESSION['errors'] ?? [];
//$post_data = $_SESSION['post_data'] ?? [];
//unset($_SESSION['errors'], $_SESSION['post_data']); // Clear errors after displaying
$errors = $session ? $session->errors() : [];
$post_data = $session ? $session->post_data() : [];

?>

<style>
    .form-label, .form-control {
        font-size: 1.25rem; /* Increase font size */
    }
    .form-control {
        padding: 1rem; /* Increase padding */
    }
    .btn {
        font-size: 1.25rem; /* Increase button font size */
        padding: 0.75rem 1.5rem; /* Increase button padding */
    }
</style>

<div class="container mt-4">

    <?php if (isset($message)) {
        echo $message;
    } ?>
    <form action="<?= htmlspecialchars($action); ?>" method="<?= $method; ?>">
        <!-- Name Field -->
        <?php echo csrf_token_tag()?>
        <div class="row mb-3">
            <div class="col">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>" id="name" name="name" value="<?= htmlspecialchars($post_data['name'] ?? $employee->name ?? '') ?>" required>
                <div class="invalid-feedback"><?= $errors['name'] ?? '' ?></div>
            </div>
        </div>

        <!-- Position and Office Fields -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control <?= isset($errors['position']) ? 'is-invalid' : '' ?>" id="position" name="position" value="<?= hs($post_data['position'] ?? $employee->position ?? '') ?>" required>
                <div class="invalid-feedback"><?= $errors['position'] ?? '' ?></div>
            </div>
            <div class="col-md-6">
                <label for="office" class="form-label">Office</label>
                <input type="text" class="form-control <?= isset($errors['office']) ? 'is-invalid' : '' ?>" id="office" name="office" value="<?= htmlspecialchars($post_data['office'] ?? $employee->office ?? '') ?>" required>
                <div class="invalid-feedback"><?= $errors['office'] ?? '' ?></div>
            </div>
        </div>

        <!-- Age and Start Date Fields -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control <?= isset($errors['age']) ? 'is-invalid' : '' ?>" id="age" name="age" value="<?= htmlspecialchars($post_data['age'] ?? $employee->age ?? '') ?>" required>
                <div class="invalid-feedback"><?= $errors['age'] ?? '' ?></div>
            </div>
            <div class="col-md-6">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control <?= isset($errors['start_date']) ? 'is-invalid' : '' ?>" id="start_date" name="start_date" value="<?= htmlspecialchars($post_data['start_date'] ?? $employee->start_date ?? '') ?>" required>
                <div class="invalid-feedback"><?= $errors['start_date'] ?? '' ?></div>
            </div>
        </div>

        <!-- Salary Field -->
        <div class="row mb-3">
            <div class="col">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" step="0.01" class="form-control <?= isset($errors['salary']) ? 'is-invalid' : '' ?>" id="salary" name="salary" value="<?= htmlspecialchars($post_data['salary'] ?? $employee->salary ?? '') ?>" required>
                <div class="invalid-feedback"><?= $errors['salary'] ?? '' ?></div>
            </div>
        </div>

        <!-- Submit Button -->

        <div class="d-flex justify-content-between">
            <button type="submit" name="submit" class="btn btn-primary"><?= $submit_action; ?></button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>


