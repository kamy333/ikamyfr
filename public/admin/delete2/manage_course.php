<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginated Table</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
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
    <h2>MySQL Data Table</h2>
<!--    <table id="myTable" class="table table-striped table-bordered" style="width:100%">-->
       <table id="myTable" class="display responsive nowrap  table-striped " style="width:100%">

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
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<!-- Load Responsive Extension JS -->
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "data/course_manage_data.php",
            "columns": [
                { "data": 0 },
                { "data": 1 },
                { "data": 2 },
                { "data": 3 },
                { "data": 4 },
                { "data": 5 },
                { "data": 6 },
                { "data": 7, "orderable": false } // Disable ordering for the actions column

            ]
        });
    });
</script>
</body>
</html>
