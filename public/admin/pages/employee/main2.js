// <script>
    $(document).ready(function() {
    const isSmallScreen = window.innerWidth <= 768;

    // Define columns configuration based on screen size
    const columnsConfig = isSmallScreen
    ? [
{ "data": 0 },  // ID
{ "data": 1 },  // Name
{ "data": 2 },  // Position
{ "data": 3 }   // Salary
    ]
    : [
{ "data": 0, "className": "all" },             // ID, always visible
{ "data": 1, "className": "min-tablet" },      // Name, visible on tablet and larger
{ "data": 2, "className": "min-tablet" },      // Position
{ "data": 3, "className": "min-desktop" },     // Office, only on desktop
{ "data": 4, "className": "min-desktop" },     // Age
{ "data": 5, "className": "min-tablet" },      // Start Date
{ "data": 6, "className": "min-tablet" },      // Salary
{ "data": 7, "orderable": false, "className": "all" } // Actions, always visible
    ];

    $('#myTable').DataTable({
    "processing": true,
    "serverSide": true,
    "responsive": {
    details: {
    type: 'column',
    // target: -1 // Show details icon in the last column
    target: 0 // Place the control icon in the first column
}
},
    "autoWidth": true,      // Automatically adjust column width
    "scrollX": true,        // Enable horizontal scrolling on small screens
    "ajax": {
    "url": "data.php",
    "data": function(d) {
    d.screenSize = isSmallScreen ? 'small' : 'large';
}
},
    "columns": columnsConfig,
    "columnDefs": [
{
    "className": 'control',
    "orderable": false,
    "targets": -1 // Use the last column as a control column for responsive details
}
    ]
});
});
{/*</script>*/}