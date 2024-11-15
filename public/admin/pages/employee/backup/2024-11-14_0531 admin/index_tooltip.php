<?php
require_once('../../inc/config/initialize.php');
?>
<?php //$session->confirmation_protected_page(); ?>

<?php $layout_context = "admin"; ?>
<?php $active_menu = "admin" ?>
<?php $stylesheets = "" //custom_form  ?>
<?php $sub_menu = true; ?>
<?php $javascript = "form_admin" ?>


<?php include(HEADER); ?>
<?php //include(NAV) ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center text-info">Welcome to <?= LOGO ?> Admin</h2>
        </div>
    </div>
    <div class="row ml-5">
        <div class="col-md-6 mb-3">
            <a href="../index.php" class="btn btn-outline-primary"><i class="bi bi-chevron-double-left"></i> Public</a>
        </div>
    </div>

    <?php if (isset($message)) { echo $message; } ?>

    <div class="row m-lg-5">
        <div class="col-md-12 d-flex flex-wrap justify-content-between">
            <a href="<?= MY_URL_ADMIN_PAGE ?>employee" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage Employees">
                <i class="bi bi-people"></i> <span class="d-none d-lg-inline">Employees</span>
            </a>
            <a href="<?= MY_URL_ADMIN_PAGE ?>employee/new.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Add a New Employee">
                <i class="bi bi-plus-circle"></i> <span class="d-none d-lg-inline">New Employee</span>
            </a>
            <a href="<?= MY_URL_ADMIN_PAGE ?>course" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage Courses">
                <i class="bi bi-car-front"></i> <span class="d-none d-lg-inline">Course</span>
            </a>
            <a href="<?= MY_URL_ADMIN_PAGE ?>user/manage_user.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage Users">
                <i class="bi bi-person"></i> <span class="d-none d-lg-inline">User</span>
            </a>
            <a href="<?= MY_URL_ADMIN_PAGE ?>user_type" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage User Types">
                <i class="bi bi-person-badge"></i> <span class="d-none d-lg-inline">User Type</span>
            </a>
        </div>
    </div>

    <?php if (User::is_kamy() || 1==1) { ?>
        <div class="row m-lg-5">
            <div class="col-md-12 d-flex flex-wrap justify-content-between">
                <a href="<?= MY_URL_ADMIN_PAGE ?>calendar/index.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="View Calendar">
                    <i class="bi bi-calendar"></i> <span class="d-none d-lg-inline">Calendar</span>
                </a>
                <a href="https://www.ikamy.ch/public/calendar.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="View Calendar CH">
                    <i class="bi bi-calendar2"></i> <span class="d-none d-lg-inline">Calendar CH</span>
                </a>
                <a href='https://www.ikamy.ch/public/admin/crud/ajax/manage_ajax.php?class_name=Calendar' class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage Calendar">
                    <i class="bi bi-calendar3"></i> <span class="d-none d-lg-inline">Manage Calendar</span>
                </a>
                <a href='https://www.ikamy.ch/public/admin/crud/ajax/new_ajax.php?class_name=Calendar' class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Add a New Calendar Date">
                    <i class="bi bi-calendar-plus"></i> <span class="d-none d-lg-inline">New Calendar Date</span>
                </a>
            </div>
        </div>
    <?php } ?>

    <div class="row m-lg-5">
        <div class="col-md-12 d-flex flex-wrap justify-content-between">
            <?php if (User::is_kamy() && 1 == 2) {
                echo DatabaseObject::form_structure();
                if (isset($_GET['class_name'])) {
                    $class_name = $_GET['class_name'];
                    echo "<br><br>";
                    echo "<div class='row'>";
                    echo $class_name::class_structure();
                    echo $class_name::find_column_name();
                    echo "</div>";
                }
            } ?>
        </div>
    </div>

    <?php if (1 == 1) { ?>
        <div class="row m-lg-5">
            <div class="col-md-9 d-flex flex-wrap justify-content-between">
                <a href="pages/employee/index.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage Chauffeurs">
                    <i class="bi bi-person-circle"></i> <span class="d-none d-lg-inline">Chauffeurs</span>
                </a>
                <a href="pages/employee/index.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage Clients">
                    <i class="bi bi-people"></i> <span class="d-none d-lg-inline">Clients</span>
                </a>
                <a href="pages/employee/index.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage Transport Types">
                    <i class="bi bi-truck"></i> <span class="d-none d-lg-inline">Transport Type</span>
                </a>
            </div>
        </div>
    <?php } ?>
</div>

<?php include(FOOTER); ?>