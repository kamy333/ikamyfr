$(document).ready(function() {
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }


    const theClass = getQueryParam('class_name') || "Employee";

    const $langageFr ={
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
        }};
    const $langageEn = "";

    const columnsConfig1 = [
        { "data": 0, "title": "+", "className": "control", "orderable": false },
        { "data": 1, "title": "ID", "type": "num" },  // ID column as number
        { "data": 2, "title": "Name", "type": "string" },
        { "data": 3, "title": "Position", "type": "string" },
        { "data": 4, "title": "Office", "type": "string" },
        { "data": 5, "title": "Age", "type": "num" },  // Age column as number
        { "data": 6, "title": "Start Date", "type": "date" },  // Start Date column as date
        { "data": 7, "title": "Salary", "type": "num-fmt" },  // Salary column as formatted number
        { "data": 8, "title": "Actions", "orderable": false }
    ]

    // console.log(columnsConfig); // Verify in the console


    // Initialize DataTable
   const table = $('#myTable').DataTable({
        "language": $langageEn,
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
            "url": "data.php", // Update this with your data source
            "data": function(d) {
                d.incClass = theClass; // Add custom parameter to the request
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

    // Redraw table when the Filter button is clicked
    $('#filterButton').on('click', function() {
        table.draw();  // Ensure we're calling draw() on the initialized DataTable instance
    });

    $('#myTable tbody').on('click', 'button.toggle-details', function () {
      const $val =$(this).text();
      if ($val === '+') {
          $(this).text('-');
          if ( $(this).hasClass('btn-primary')) {
              $(this).removeClass("btn-primary");
              $(this).addClass("btn-danger");
          }
      } else {
          $(this).text('+');
          if ( $(this).hasClass('btn-danger')) {
              $(this).removeClass("btn-danger");
              $(this).addClass("btn-primary");
          }
      }
    });



});