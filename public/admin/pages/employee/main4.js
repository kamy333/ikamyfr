$(document).ready(function() {
    const isSmallScreen = window.innerWidth <= 768;

    // Define columns configuration based on screen size
    const columnsConfig = isSmallScreen
        ? [
            { "data": "id", "title": "ID", "className": "control", "orderable": false }, // ID column with control icon
            { "data": "name", "title": "Name" },  // Name column
            { "data": "position", "title": "Position" },  // Position column
            { "data": "office", "title": "Office" }  , // Office column
            { "data": null, "title": "Actions" }
        ]
        : [
            { "data": "id", "title": "ID" },  // ID column
            { "data": "name", "title": "Name" },  // Name column
            { "data": "position", "title": "Position" },  // Position column
            { "data": "office", "title": "Office" },  // Office column
            { "data": "age", "title": "Age" },  // Age column
            { "data": "start_date", "title": "Start Date" },  // Start Date column
            { "data": "salary", "title": "Salary" },  // Salary column
            { "data": null, "title": "Actions", "orderable": false } // Actions column
        ];

    // Initialize DataTable
    $('#myTable').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": {
            details: {
                type: 'column',
                target: 0 // Place the control icon in the first column
            }
        },
        "autoWidth": true,
        "scrollX": true,
        "ajax": {
            "url": "data2.php", // Update with your data source URL
            "data": function(d) {
                d.screenSize = isSmallScreen ? 'small' : 'large';
            }
        },
        "columns": columnsConfig,
        "columnDefs": [
            {
                "className": 'control',
                "orderable": false,
                "targets": 0 // Apply the control class to the first column for details
            }
        ]
    });
});