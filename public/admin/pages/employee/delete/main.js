// <script>
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
// </script>