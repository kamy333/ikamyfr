<?php

if (file_exists('../../../../inc/config/initialize.php')){
    require_once('../../../../inc/config/initialize.php');
} else {
    require_once('../../../../../../inc/config/initialize.php');
}

$lang = "en";
$classeName = $_GET['class_name'] ?? 'Employee';
$myClass = new $classeName();
$pageName = $myClass::$page_name;
$title = "Liste $pageName";

?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <!-- Responsive Extension CSS for DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">


</head>
<style>
    .table th {
        text-align: center;
        color: black;
    }

    .custom-samesize-btn {
        width: 68px !important;
    }

    /*!* Optional custom widths for specific columns *!*/
    /*#myTable th:nth-child(1), #myTable td:nth-child(1) {*/
    /*    width: 15px; !* ID column *!*/
    /*}*/
    /*#myTable th:nth-ch8ild(8), #myTable td:nth-child(8) {*/
    /*    width: 100px; !* Actions column *!*/
    /*}*/

    table.dataTable.dtr-inline.collapsed > tbody > tr > td.control:before,
    table.dataTable.dtr-inline.collapsed > tbody > tr > th.control:before {
        font-size: 12px; /* Adjust size as needed */
        margin-right: 8px; /* Adjust spacing as needed */
        line-height: 1; /* Adjust to center the icon vertically */
    }

    .dataTables_wrapper .row:last-child {
        margin-top: 20px; /* Adjust this value to increase or decrease the space */
    }

</style>
<body>
<div class="container-lg mt-5">
    <div class="row mb-4">
        <div class="">
            <h2 class="text-center">Liste <?= $pageName ?>    </h2>
        </div>
    </div>
    <div class="row mb-4">
        <div class="">
            <a href='new.php' class='btn btn-primary btn-lg'>New <?= $pageName ?></a>
        </div>
    </div>


    <!--    <table id="myTable" class="table table-striped table-bordered" style="width:100%">-->
    <table id="myTable" class="display responsive nowrap table table-striped table-bordered" style="width:100%">
        <!--            <table id="myTable" class="display responsive nowrap  table-striped " style="width:100%">-->


        <thead>
        <tr></tr>
        </thead>

    </table>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<!-- Responsive Extension JS for DataTables -->
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>


<?php //$classeName =  $_GET['class_name'] ?? 'Employee'; ?>



<script>
    // Pass the PHP array to JavaScript
    const columnsConfig = <?php echo json_encode($myClass::get_columns_config()); ?>;
    console.log(columnsConfig); // Verify in the console
</script>

<script src="main.js"></script> <!-- Your custom JS file -->


</body>
</html>

