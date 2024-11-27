$(document).ready(function() {
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    const theClass = getQueryParam('class_name') || "Employee";

    const $langageFr = {
        "decimal": ",",
        "thousands": " ",
        "lengthMenu": "Afficher _MENU_ entrées",
        "zeroRecords": "Aucun enregistrement trouvé",
        "info": "Affichage de l'enregistrement _START_ à _END_ sur _TOTAL_ entrées",
        "infoEmpty": "Affichage de l'enregistrement 0 à 0 sur 0 entrées",
        "infoFiltered": "(filtré de _MAX_ entrées au total)",
        "search": "Rechercher:",
        "paginate": {
            "first": "Premier",
            "last": "Dernier",
            "next": "Suivant",
            "previous": "Précédent"
        },
        "loadingRecords": "Chargement...",
        "processing": "Traitement...",
        "emptyTable": "Aucune donnée disponible dans le tableau",
        "aria": {
            "sortAscending": ": activer pour trier la colonne par ordre croissant",
            "sortDescending": ": activer pour trier la colonne par ordre décroissant"
        }
    };
    const $langageEn = "";

    const columnsConfig1 = [
        { "data": 0, "title": "+", "className": "control", "orderable": false },
        { "data": 1, "title": "ID", "type": "num" },
        { "data": 2, "title": "Name", "type": "string" },
        { "data": 3, "title": "Position", "type": "string" },
        { "data": 4, "title": "Office", "type": "string" },
        { "data": 5, "title": "Age", "type": "num" },
        { "data": 6, "title": "Start Date", "type": "date" },
        { "data": 7, "title": "Salary", "type": "num-fmt" },
        { "data": 8, "title": "Actions", "orderable": false }
    ];

    // console.log(columnsConfig1); // Verify in the console

    const table = $('#myTable').DataTable({
        "language": $langageEn,
        "processing": true,
        "serverSide": true,
        "responsive": {
            details: {
                type: 'column',
                target: 0
            }
        },
        "autoWidth": true,
        "scrollX": true,
        "ajax": {
            "url": "data.php",
            "data": function(d) {
                d.incClass = theClass;
                d.startDate = $('#startDate').val();
                d.endDate = $('#endDate').val();
            }
        },
        "columns": columnsConfig1,
        "columnDefs": [
            {
                "className": 'control',
                "orderable": false,
                "targets": 0
            }
        ]
    });

    $('#filterButton').on('click', function() {
        table.search('');
        table.draw();
    });

    $('#clearButton').on('click', function() {
        $('#startDate').val('');
        $('#endDate').val('');
        table.search('').draw();
    });

    function formatDate(date) {
        return date.toISOString().split('T')[0];
    }

    $('#todayButton').on('click', function() {
        const today = new Date();
        $('#startDate').val(formatDate(today));
        $('#endDate').val(formatDate(today));
        table.draw();
    });

    $('#yesterdayButton').on('click', function() {
        const yesterday = new Date();
        yesterday.setDate(yesterday.getDate() - 1);
        $('#startDate').val(formatDate(yesterday));
        $('#endDate').val(formatDate(yesterday));
        table.draw();
    });

    $('#tomorrowButton').on('click', function() {
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        $('#startDate').val(formatDate(tomorrow));
        $('#endDate').val(formatDate(tomorrow));
        table.draw();
    });

    $('#myTable tbody').on('click', 'button.toggle-details', function () {
        const $val = $(this).text();
        if ($val === '+') {
            $(this).text('-');
            if ($(this).hasClass('btn-primary')) {
                $(this).removeClass("btn-primary");
                $(this).addClass("btn-danger");
            }
        } else {
            $(this).text('+');
            if ($(this).hasClass('btn-danger')) {
                $(this).removeClass("btn-danger");
                $(this).addClass("btn-primary");
            }
        }
    });

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl, {
            trigger: 'hover focus',
            placement: 'top',
            delay: { "show": 500, "hide": 100 } // Add delay for better UX
        });
    });

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            trigger: 'hover focus',
            placement: 'top',
            delay: { "show": 500, "hide": 100 } // Add delay for better UX
        });
    });

    if (performance.getEntriesByType('navigation')[0].type === 'reload') {
        console.log('This page is reloaded');
    } else {
        console.log('This page is not reloaded');
    }
});