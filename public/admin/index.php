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

        <?php if (isset($message)) {
            echo $message;
        } ?>

        <div class="row m-lg-5">
            <div class="col-md-12 d-flex flex-wrap justify-content-between">
                <a href="<?= MY_URL_ADMIN_PAGE ?>employee" class="btn btn-primary btn-lg flex-fill mx-1 mb-2"
                   data-bs-toggle="tooltip" title="Manage Employees" data-bs-target="#employeeModal">
                    <i class="bi bi-people"></i> <span class="d-none d-lg-inline">Employees</span>
                </a>
                <a href="<?= MY_URL_ADMIN_PAGE ?>employee/new.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2"
                   data-bs-toggle="tooltip" title="Add a New Employee" data-bs-target="#newEmployeeModal">
                    <i class="bi bi-plus-circle"></i> <span class="d-none d-lg-inline">New Employee</span>
                </a>
                <a href="<?= MY_URL_ADMIN_PAGE ?>course" class="btn btn-primary btn-lg flex-fill mx-1 mb-2"
                   data-bs-toggle="tooltip" title="Manage Courses" data-bs-target="#courseModal">
                    <i class="bi bi-car-front"></i> <span class="d-none d-lg-inline">Course</span>
                </a>
                <a href="<?= MY_URL_ADMIN_PAGE ?>user/manage_user.php"
                   class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="Manage Users"
                   data-bs-target="#userModal">
                    <i class="bi bi-person"></i> <span class="d-none d-lg-inline">User</span>
                </a>
                <a href="<?= MY_URL_ADMIN_PAGE ?>user_type" class="btn btn-primary btn-lg flex-fill mx-1 mb-2"
                   data-bs-toggle="tooltip" title="Manage User Types" data-bs-target="#userTypeModal">
                    <i class="bi bi-person-badge"></i> <span class="d-none d-lg-inline">User Type</span>
                </a>
            </div>
        </div>

        <?php if (User::is_kamy()) { ?>
            <div class="row m-lg-5">
                <div class="col-md-12 d-flex flex-wrap justify-content-between">
                    <a href="<?= MY_URL_ADMIN_PAGE ?>calendar/index.php"
                       class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip" title="View Calendar"
                       data-bs-target="#calendarModal">
                        <i class="bi bi-calendar"></i> <span class="d-none d-lg-inline">Calendar</span>
                    </a>
                    <a href="https://www.ikamy.ch/public/calendar.php"
                       class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip"
                       title="View Calendar CH" data-bs-target="#calendarCHModal">
                        <i class="bi bi-calendar2"></i> <span class="d-none d-lg-inline">Calendar CH</span>
                    </a>
                    <a href='https://www.ikamy.ch/public/admin/crud/ajax/manage_ajax.php?class_name=Calendar'
                       class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip"
                       title="Manage Calendar" data-bs-target="#manageCalendarModal">
                        <i class="bi bi-calendar3"></i> <span class="d-none d-lg-inline">Manage Calendar</span>
                    </a>
                    <a href='https://www.ikamy.ch/public/admin/crud/ajax/new_ajax.php?class_name=Calendar'
                       class="btn btn-primary btn-lg flex-fill mx-1 mb-2" data-bs-toggle="tooltip"
                       title="Add a New Calendar Date" data-bs-target="#newCalendarDateModal">
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
                    <a href="pages/employee/index.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2"
                       data-bs-toggle="tooltip" title="Manage Chauffeurs" data-bs-target="#chauffeursModal">
                        <i class="bi bi-person-circle"></i> <span class="d-none d-lg-inline">Chauffeurs</span>
                    </a>
                    <a href="pages/employee/index.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2"
                       data-bs-toggle="tooltip" title="Manage Clients" data-bs-target="#clientsModal">
                        <i class="bi bi-people"></i> <span class="d-none d-lg-inline">Clients</span>
                    </a>
                    <a href="pages/employee/index.php" class="btn btn-primary btn-lg flex-fill mx-1 mb-2"
                       data-bs-toggle="tooltip" title="Manage Transport Types" data-bs-target="#transportTypeModal">
                        <i class="bi bi-truck"></i> <span class="d-none d-lg-inline">Transport Type</span>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Modals -->
<?php
echo generateBootstrapModal('employeeModal', 'Manage Employees', 'Manage Employees', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href=MY_URL_ADMIN_PAGE. "employee" class="btn btn-primary">OK</a>');

echo generateBootstrapModal('newEmployeeModal', 'Add a New Employee', 'Add a New Employee', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href=MY_URL_ADMIN_PAGE. "employee/new.php" class="btn btn-primary">OK</a>');

echo generateBootstrapModal('courseModal', 'Manage Courses', 'Manage Courses', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href=MY_URL_ADMIN_PAGE. "course" class="btn btn-primary">OK</a>');

echo generateBootstrapModal('userModal', 'Manage Users', 'Manage Users', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href=MY_URL_ADMIN_PAGE. "user/manage_user.php" class="btn btn-primary">OK</a>');
?>
<?php
echo generateBootstrapModal('userTypeModal', 'Manage User Types', 'Manage User Types', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href=MY_URL_ADMIN_PAGE. "user_type" class="btn btn-primary">OK</a>');
?>

<?php
echo generateBootstrapModal('calendarModal', 'View Calendar', 'View Calendar', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href=MY_URL_ADMIN_PAGE. "calendar/index.php" class="btn btn-primary">OK</a>');
?>
<?php
echo generateBootstrapModal('calendarCHModal', 'View Calendar CH', 'View Calendar CH', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href="https://www.ikamy.ch/public/calendar.php" class="btn btn-primary">OK</a>');
?>
<?php
echo generateBootstrapModal('manageCalendarModal', 'Manage Calendar', 'Manage Calendar', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href="https://www.ikamy.ch/public/admin/crud/ajax/manage_ajax.php?class_name=Calendar" class="btn btn-primary">OK</a>');
?>


<?php
echo generateBootstrapModal('newCalendarDateModal', 'Add a New Calendar Date', 'Add a New Calendar Date', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href="https://www.ikamy.ch/public/admin/crud/ajax/new_ajax.php?class_name=Calendar" class="btn btn-primary">OK</a>');
?>
<?php
echo generateBootstrapModal('chauffeursModal', 'Manage Chauffeurs', 'Manage Chauffeurs', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href="pages/employee/index.php" class="btn btn-primary">OK</a>');
?>
<?php
echo generateBootstrapModal('clientsModal', 'Manage Clients', 'Manage Clients', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href="pages/employee/index.php" class="btn btn-primary">OK</a>');
?>
<?php
echo generateBootstrapModal('transportTypeModal', 'Manage Transport Types', 'Manage Transport Types', '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><a href="pages/employee/index.php" class="btn btn-primary">OK</a>');
?>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function handleScreenResize() {
                var isSmallScreen = window.innerWidth < 992;
                document.querySelectorAll('[data-bs-toggle="tooltip"], [data-bs-toggle="popover"]').forEach(function (el) {
                    if (isSmallScreen) {
                        el.removeAttribute('data-bs-toggle');
                        el.setAttribute('data-bs-toggle', 'modal');
                    } else {
                        el.removeAttribute('data-bs-toggle');
                        el.setAttribute('data-bs-toggle', 'tooltip');
                    }
                });
            }

            window.addEventListener('resize', handleScreenResize);
            handleScreenResize();
        });
    </script>

<?php include(FOOTER); ?>