<?php
if (file_exists('../../../../inc/config/initialize.php')) {
    require_once('../../../../inc/config/initialize.php');
} else {
    require_once('../../../../../../../inc/config/initialize.php');
}

$lang = $_GET['lang'] ?? 'en';
$classeName = $_GET['class_name'] ?? 'Employee';
$myClass = new $classeName() ?? new Employee();
$pageName = $myClass::$page_name ?? 'Employee';
$title = "Liste $pageName" ?? 'Transmed';
$is_position = false;

include HEADER;

?>


<div class="container-lg mt-1">
    <div class="row mb-1">
        <div class="">
            <h2 class="text-center">Liste <?= $pageName ?>    </h2>
        </div>
    </div>
    <div class="row mb-1">
        <div class="">
            <a href='new.php' class='btn btn-primary btn-lg'>Add <?= $pageName ?></a>
        </div>
    </div>

    <!-- Date Filter Form -->
    <div class="row mb-3">


        <!-- Add this modal structure in your HTML, preferably before the closing </body> tag -->
        <div class="modal fade" id="dateFilterModal" tabindex="-1" aria-labelledby="dateFilterModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dateFilterModalLabel">Filter by Date</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="modalStartDate" class="form-label">Start Date:</label>
                            <input type="date" id="startDate" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="modalEndDate" class="form-label">End Date:</label>
                            <input type="date" id="endDate" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="filterButton" type="button" class="btn btn-primary">Apply Filter</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 align-self-end">

            <!-- Update the searchForm button to trigger the modal -->
            <button id="searchForm" class="btn btn-primary mt-3" data-bs-toggle="modal"
                    data-bs-target="#dateFilterModal" title="Search for data">
                <i class="bi bi-search"></i> <!-- Filter Icon -->
            </button>


            <button id="clearButton" class="btn btn-secondary mt-3" data-bs-toggle="popover"
                    title="Clear applied filters">
                <i class="bi bi-x-circle-fill"></i> <!-- Clear Icon -->
            </button>
            <button id="todayButton" class="btn btn-success mt-3" data-bs-toggle="popover" title="Shows today's data">
                <i class="bi bi-calendar-day"></i> <!-- Today Icon -->
            </button>
            <button id="yesterdayButton" class="btn btn-info mt-3" data-bs-toggle="popover"
                    title="Shows yesterday's data">
                <i class="bi bi-arrow-left-circle"></i> <!-- Yesterday Icon -->
            </button>
            <button id="tomorrowButton" class="btn btn-info mt-3" data-bs-toggle="popover"
                    title="Shows tomorrow's data">
                <i class="bi bi-arrow-right-circle"></i> <!-- Tomorrow Icon -->
            </button>

        </div>

    </div>


    <!--    <table id="myTable" class="table table-striped table-bordered" style="width:100%">-->
    <table id="myTable" class="display responsive nowrap table table-striped table-bordered" style="width:100%">
        <!--            <table id="myTable" class="display responsive nowrap  table-striped " style="width:100%">-->


        <?php echo $myClass::datatable_thead_tr_th($is_position); ?>


        <!--
        <thead>
        <tr></tr>
        </thead>

        <thead>
        <tr>
            <th>+</th>
            <th>Id</th>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start Date</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
        </thead>-->

    </table>
</div>


<?php include FOOTER; ?>

