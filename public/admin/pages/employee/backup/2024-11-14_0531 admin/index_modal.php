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
            <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#employeeModal">
                <i class="bi bi-people"></i> <span class="d-none d-lg-inline">Employees</span>
            </a>
            <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#newEmployeeModal">
                <i class="bi bi-plus-circle"></i> <span class="d-none d-lg-inline">New Employee</span>
            </a>
            <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#courseModal">
                <i class="bi bi-car-front"></i> <span class="d-none d-lg-inline">Course</span>
            </a>
            <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#userModal">
                <i class="bi bi-person"></i> <span class="d-none d-lg-inline">User</span>
            </a>
            <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#userTypeModal">
                <i class="bi bi-person-badge"></i> <span class="d-none d-lg-inline">User Type</span>
            </a>
        </div>
    </div>

    <?php if (User::is_kamy()) { ?>
        <div class="row m-lg-5">
            <div class="col-md-12 d-flex flex-wrap justify-content-between">
                <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#calendarModal">
                    <i class="bi bi-calendar"></i> <span class="d-none d-lg-inline">Calendar</span>
                </a>
                <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#calendarCHModal">
                    <i class="bi bi-calendar2"></i> <span class="d-none d-lg-inline">Calendar CH</span>
                </a>
                <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#manageCalendarModal">
                    <i class="bi bi-calendar3"></i> <span class="d-none d-lg-inline">Manage Calendar</span>
                </a>
                <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#newCalendarDateModal">
                    <i class="bi bi-calendar-plus"></i> <span class="d-none d-lg-inline">New Calendar Date</span>
                </a>
            </div>
        </div>
    <?php } ?>

    <div class="row m-lg-5 mb-4">
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
        <div class="row mt-3 mb-5">
            <div class="col-md-12 d-flex flex-wrap justify-content-between">
                <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#chauffeursModal">
                    <i class="bi bi-person-circle"></i> <span class="d-none d-lg-inline">Chauffeurs</span>
                </a>
                <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#clientsModal">
                    <i class="bi bi-people"></i> <span class="d-none d-lg-inline">Clients</span>
                </a>
                <a href="#" class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#transportTypeModal">
                    <i class="bi bi-truck"></i> <span class="d-none d-lg-inline">Transport Type</span>
                </a>
            </div>
        </div>
    <?php } ?>
</div>

<!-- Modals -->
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeModalLabel">Manage Employees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Manage Employees
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newEmployeeModal" tabindex="-1" aria-labelledby="newEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEmployeeModalLabel">Add a New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Add a New Employee
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseModalLabel">Manage Courses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Manage Courses
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Manage Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Manage Users
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="userTypeModal" tabindex="-1" aria-labelledby="userTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userTypeModalLabel">Manage User Types</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Manage User Types
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendarModalLabel">View Calendar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                View Calendar
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="calendarCHModal" tabindex="-1" aria-labelledby="calendarCHModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendarCHModalLabel">View Calendar CH</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                View Calendar CH
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="manageCalendarModal" tabindex="-1" aria-labelledby="manageCalendarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="manageCalendarModalLabel">Manage Calendar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Manage Calendar
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newCalendarDateModal" tabindex="-1" aria-labelledby="newCalendarDateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newCalendarDateModalLabel">Add a New Calendar Date</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Add a New Calendar Date
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="chauffeursModal" tabindex="-1" aria-labelledby="chauffeursModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chauffeursModalLabel">Manage Chauffeurs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Manage Chauffeurs
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="clientsModal" tabindex="-1" aria-labelledby="clientsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientsModalLabel">Manage Clients</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Manage Clients
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="transportTypeModal" tabindex="-1" aria-labelledby="transportTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transportTypeModalLabel">Manage Transport Types</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Manage Transport Types
            </div>
        </div>
    </div>
</div>

<?php include(FOOTER); ?>