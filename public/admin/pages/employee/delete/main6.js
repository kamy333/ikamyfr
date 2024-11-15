$(document).ready(function() {
    const isSmallScreen = window.innerWidth <= 768;
    // const smallScreenColumns = [
    //
    //     { "data": 0, "title": "ID" },  // ID column            // { "data": 0, "className": "control", "orderable": false }, // Details control in the first column
    //     { "data": 1, "title": "Name" },  // Name column
    //     { "data": 2, "title": "Position" },  // Position column
    //     { "data": 3, "title": "Office" } ,
    //     { "data": 7, "title": "Actions", "orderable": false } // Actions column
    //
    // ];

    // const largeScreenColumns = [
    //     { "data": 0, "title": "ID" },  // ID column
    //     { "data": 1, "title": "Name" },  // Name column
    //     { "data": 2, "title": "Position" },  // Position column
    //     { "data": 3, "title": "Office" },  // Office column
    //     { "data": 4, "title": "Age" },  // Age column
    //     { "data": 5, "title": "Start Date" },  // Start Date column
    //     { "data": 6, "title": "Salary" },  // Salary column
    //     { "data": 7, "title": "Actions", "orderable": false } // Actions column
    // ];

    // Define columns configuration based on screen size
    // const columnsConfig = isSmallScreen
    //     ? largeScreenColumns
    //     : largeScreenColumns;

    const columnsConfig = [
        { "data": "id", "title": "ID", "className": "control", "orderable": false },  // ID column as control
        { "data": "name", "title": "Name" },
        { "data": "position", "title": "Position" },
        { "data": "office", "title": "Office" },
        { "data": "age", "title": "Age" },
        { "data": "start_date", "title": "Start Date" },
        { "data": "salary", "title": "Salary" },
        { "data": "actions", "title": "Actions", "orderable": false }
    ];

    // Initialize DataTable
    $('#myTable').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": {
            details: {
                type: 'column',
                target: 0 // Place the control icon in the first column
                // type: isSmallScreen ? 'column' : 'column',  // Control only on small screens
                // target: isSmallScreen ? 0 : -1  // Control on the first column after ID for small screens
            }
        },
        "autoWidth": true,
        "scrollX": true,
        "ajax": {
            "url": "data.php", // Update this with your data source
            "data": function(d) {
                d.screenSize = isSmallScreen ? 'small' : 'large';
            }
        },
        "columns": columnsConfig,
        "columnDefs": [
            {
                "className": 'control',
                "orderable": false,
                // "targets": isSmallScreen ? 0 : -1// Apply the control class to the first column for details
                "targets": 0 // Apply the control class to the first column for details
            }
        ]
    });
});