<?php
require_once '../../inc/config/initialize.php';
//require_once '../../inc/functions/functions4.php';
$mytime = roundToNearestFiveMinutes(date('H:i'));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Course</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Select2 CSS for searchable select -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!-- jQuery UI CSS (for autocomplete styling) -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- jQuery UI JS (for autocomplete functionality) -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



</head>

<body>
<div class="container">
    <h1 class="mt-5">Course Form</h1>
    <form action="submit.php" method="POST" id="courseForm">
        <div class="form-group">
            <label for="data_course">Date Course</label>
            <input type="date" id="data_course" name="data_course" class="form-control" value="<?= date('Y-m-d') ?>" required>
        </div>

        <div class="form-group">
            <label for="heure_course">Heure Course</label>
            <input type="time" id="heure_course" name="heure_course" class="form-control" value="<?= $mytime; ?>" required>
        </div>

        <div class="form-group">
            <label for="pseudo">Pseudo Client</label>
            <input type="text" id="pseudo" name="pseudo" class="form-control" autocomplete="off" required>
        </div>

        <div class="form-group" id="autresGroup" style="display: none;">
            <label lang="fr" for="autres">Autres</label>
            <input type="text" id="autres" name="autres" class="form-control">
        </div>

        <div class="form-group">
            <label lang="fr" for="depart">Depart</label>
            <input type="text" id="depart" name="depart" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="arrive">Arrive</label>
            <input type="text" id="arrive" name="arrive" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="chauffeur3">Chauffeur3</label>
            <select id="chauffeur3" name="chauffeur3" class="form-control" style="width: 100%;">
                <!-- Options will be populated here via AJAX -->
                <option value="1">Kevin</option>
                <option value="2">bbbb</option>
                <option value="3">cccc</option>
                <option value="4">dddd</option>
            </select>
        </div>


        <div class="form-group">
            <label for="chauffeur">Chauffeur</label>
            <input type="text" id="chauffeur" name="chauffeur" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="commentaire">Commentaire</label>
            <input type="text" id="commentaire" name="commentaire" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="document">document</label>
            <input type="file" id="document" name="document" class="form-control" required>
        </div>



        <div class="form-group">
            <label for="chauffeur2">Chauffeur2</label>
            <select id="chauffeur2" name="chauffeur2" class="form-control" style="width: 100%;">
                <!-- Options will be populated here via AJAX -->
            </select>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<script>
    $(document).ready(function () {
        // Autocomplete for pseudo field
        var $pseudo = $('#pseudo');
        var $dataUrl='data/data.php';


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
            $('#' + field).val('').autocomplete({
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



        $('#chauffeur').autocomplete({
            source: function (request, response) {
                console.log("Requesting  autocomplete for pseudo: ", request.term); // Debugging log
                $.ajax({
                    url: $dataUrl,
                    type: 'GET',
                    dataType: 'json',
                    data: {query: request.term, field: 'chauffeur'},
                    success: function (data) {
                        console.log("Response from server: ", data); // Debugging lo
                        response(data.map(function (item) {
                                return {label: item.chauffeur, value: item.chauffeur};
                            }
                        ));
                    },
                    error: function (xhr, status, error) {
                        console.log("Error in AJAX request: ", status, error); // Debugging log
                    }
                });
            },
            minLength: 1
        });


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

        $('chauffeur3').select2({
            placeholder: 'Select a chauffeur',});



        $('#chauffeur2').select2({
            placeholder: 'Select a chauffeur',
            allowClear: true,
            ajax: {
                url:  $dataUrl, // 'data/data2.php',
                type: 'GET',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        query: params.term, // Search term
                        field: 'chauffeur2' // Field to query
                    };
                },
                processResults: function(data) {
                    // Map the data from the server response to Select2 format
                    console.log("Response from server: ", data); // Debugging lo
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item.id, // Use this as the value
                                text: item.chauffeur_name // This is what's shown in the dropdown
                            };
                        })
                    };
                },
                cache: true
            }
        });




    });

</script>
<!-- JavaScript for autocomplete and conditional logic -->
</body>
</html>
