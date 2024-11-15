$(document).ready(function () {
    // Autocomplete for pseudo field
    var $pseudo = $('#pseudo');
    var $dataUrl='data/course_form_data.php';


    $pseudo.autocomplete({
        source: function (request, response) {
            // console.log("Requesting  autocomplete for pseudo: ", request.term); // Debugging log
            $.ajax({
                url: $dataUrl,
                type: 'GET',
                dataType: 'json',
                data: {query: request.term, field: 'pseudo'},
                success: function (data) {
                    // console.log("Response from server: ", data); // Debugging lo
                    response(data.map(function (item) {
                            return {label: item.pseudo, value: item.pseudo};
                        }
                    ));
                },
                error: function (xhr, status, error) {
                    console.log("Error in AJAX request: ", status, error); // Debugging log
                }
            });
        },
        minLength: 2
    });

    // Show 'Autres' field if 'Autres' is selected in pseudo
    $pseudo.on('change', function () {
        if ($(this).val().toLowerCase() === 'autres') {
            $('#autresGroup').show();
            $('#autres').prop('required', true);
        } else {
            $('#autresGroup').hide();
            $('#autres').prop('required', false).val('');
        }
    });

    // Autocomplete for depart and arrivee fields
    function setupAutocomplete(field) {
        $('#' + field).autocomplete({
            source: function (request, response) {
                console.log("Requesting  autocomplete for depart: ", request.term); // Debugging log
                $.ajax({
                    url: $dataUrl,
                    type: 'GET',
                    dataType: 'json',
                    data: {query: request.term, field: 'depart_arrivee'},
                    success: function (data) {
                        console.log("Response from server: ", data); // Debugging lo
                        response(data.map(function (item) {
                                return {label: item.location, value: item.location};
                            }
                        ));
                    },
                    error: function (xhr, status, error) {
                        console.log("Error in AJAX request: ", status, error); // Debugging log
                    }
                });
            },
            minLength: 2
        });
    }
    setupAutocomplete('depart');
    setupAutocomplete('arrive');



    // $('#chauffeur').autocomplete({
    //     source: function (request, response) {
    //         console.log("Requesting  autocomplete for pseudo: ", request.term); // Debugging log
    //         $.ajax({
    //             url: $dataUrl,
    //             type: 'GET',
    //             dataType: 'json',
    //             data: {query: request.term, field: 'chauffeur'},
    //             success: function (data) {
    //                 console.log("Response from server: ", data); // Debugging lo
    //                 response(data.map(function (item) {
    //                         return {label: item.chauffeur, value: item.chauffeur};
    //                     }
    //                 ));
    //             },
    //             error: function (xhr, status, error) {
    //                 console.log("Error in AJAX request: ", status, error); // Debugging log
    //             }
    //         });
    //     },
    //     minLength: 1
    // });


    const timeInput = document.getElementById('heure_course');

    timeInput.addEventListener('blur', () => {
        let timeValue = timeInput.value;

        if (timeValue) {
            let [hours, minutes] = timeValue.split(':').map(Number);

            // Round minutes to nearest 5
            minutes = Math.round(minutes / 5) * 5;

            // Adjust minutes if necessary
            if (minutes === 60) {
                minutes = 0;
                hours = (hours + 1) % 24; // Roll over to the next hour if needed
            }

            // Format hours and minutes with leading zeros if needed
            const formattedHours = hours.toString().padStart(2, '0');
            const formattedMinutes = minutes.toString().padStart(2, '0');

            // Set the value back to the input
            timeInput.value = `${formattedHours}:${formattedMinutes}`;
        }
    });

    $('chauffeur').select2({
        placeholder: 'Select a chauffeur',
        allowClear: true,});
    }



    // $('#chauffeur2').select2({
    //     placeholder: 'Select a chauffeur',
    //     allowClear: true,
    //     ajax: {
    //         url:  $dataUrl, // 'data/data2.php',
    //         type: 'GET',
    //         dataType: 'json',
    //         delay: 250,
    //         data: function(params) {
    //             return {
    //                 query: params.term, // Search term
    //                 field: 'chauffeur2' // Field to query
    //             };
    //         },
    //         processResults: function(data) {
    //             // Map the data from the server response to Select2 format
    //             console.log("Response from server: ", data); // Debugging lo
    //             return {
    //                 results: $.map(data, function(item) {
    //                     return {
    //                         id: item.id, // Use this as the value
    //                         text: item.chauffeur_name // This is what's shown in the dropdown
    //                     };
    //                 })
    //             };
    //         },
    //         cache: true
    //     }
    // });

);
