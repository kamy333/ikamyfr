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

    <!-- my Autocomplete Plugin -->
    <script src="../assets/js/autocomplete.js"></script> <!-- Your custom JS file -->


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

<!-- JavaScript for autocomplete and conditional logic -->
</body>
</html>
