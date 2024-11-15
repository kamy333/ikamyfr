<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginated Table</title>
<!--    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">-->
    <!-- Responsive Extension JS -->
<!--    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>-->

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <!-- Responsive Extension CSS for DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>
<style>
    .table th{
        text-align: center;
        color: black;
    }
    .custom-samesize-btn {
        width: 68px !important;
    }
</style>
<body>
<div class="container-lg mt-5">
    <div class="row">
        <div class="col-md-9">
            <h2>Employees </h2>
        </div>
        <div class="col-md-3">
            <a href='new_employee.php' class=" class=btn btn-primary">New Employee</a>
        </div>

    </div>


<!--    <table id="myTable" class="table table-striped table-bordered" style="width:100%">-->
        <table id="myTable" class="display responsive nowrap table table-striped table-bordered" style="width:100%">
<!--            <table id="myTable" class="display responsive nowrap  table-striped " style="width:100%">-->

            <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start Date</th>
            <th>Salary</th>
            <th>Actions</th> <!-- New column for buttons -->
        </tr>
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



<script>
    $(document).ready(function() {
        const isSmallScreen = window.innerWidth <= 768;
        const columnsConfig = isSmallScreen
            ? [
                { "data": 0 },
                { "data": 1 },
                { "data": 2 },
                { "data": 3 },
                { "data": 4, "orderable": false }
            ]
            : [
                { "data": 0 },
                { "data": 1 },
                { "data": 2 },
                { "data": 3 },
                { "data": 4 },
                { "data": 5 },
                { "data": 6 },
                { "data": 7, "orderable": false }
            ];

        $('#myTable').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive": true,
            "ajax": {
                "url": "data.php",
                "data": function(d) {
                    d.screenSize = isSmallScreen ? 'small' : 'large';
                }
            },
            "columns": columnsConfig
        });
    });
</script>
</body>
</html>
