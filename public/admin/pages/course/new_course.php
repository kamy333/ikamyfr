<?php
require_once '../../inc/config/initialize.php';
$mytime = roundToNearestFiveMinutes(date('H:i'));

//$sql = "SELECT id, chauffeur_name FROM chauffeurs";
//$results = $database->query2_array($sql);

$data_course = date('Y-m-d');
$heure_course = $mytime;
$pseudo = '';
$autres = '';
$depart = '';
$arrive = '';
$chauffeur = '';
$commentaire = '';
$document = '';

$myoption = select_options_chauffeur();


if (isset($_POST['submit'])) {

    $data_course = $_POST['data_course'];
    $heure_course = $_POST['heure_course'];
    $pseudo = $_POST['pseudo'];
    $autres = $_POST['autres'];
    $depart = $_POST['depart'];
    $arrive = $_POST['arrive'];
    $chauffeur = $_POST['chauffeur'];
    $commentaire = $_POST['commentaire'];
    $document = $_POST['document'];

}


$jsonFile = 'data/translation_text.json';
$label1='Adresse Depart';
$label2='Adresse Arrivee';
$label3='Cartes assurance,identite ou autre';
if (file_exists($jsonFile)) {
// Get the JSON data and output it directly
    $jsonData = file_get_contents($jsonFile);
    $labelsArray = json_decode($jsonData, true);
    $label1= $labelsArray['labels'][0]['label'];
    $label2= $labelsArray['labels'][1]['label'];
    $label3= $labelsArray['labels'][2]['label'];
}

$title = 'New course - ' . $title;
$required = "<span class='text-danger fw-bold fs-5'>*</span>";

?>


<?php include HEADER; ?>
<?php include NAV; ?>

<div class="container">

    <?php $a=1; if($a==2){  ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
        <strong>Errors!</strong>
    </div>

    <div class="alert alert-success alert-dismissible " role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
        <strong>Successfully!</strong> Yesssssssssssssss
    </div>
    <?php }  ?>

    <h1 class="mt-5 text-primary text-center fw-bold">Enregistrement des courses</h1>
    <p class="text-danger fw-bold">* Indicates required question</p>
    <form action="" method="POST" name="courseForm" id="courseForm">

        <div class="mb-3">
            <label for="data_course" class="form-label fs-5">Date Course <?= $required; ?></label>
            <input type="date" id="data_course" name="data_course" class="form-control  form-control-lg"
                   value="<?= h($data_course); ?>" required>
        </div>

        <div class="mb-3">
            <label for="heure_course" class="form-label fs-5">Heure Course <?= $required; ?></label>
            <input type="time" id="heure_course" name="heure_course" class="form-control  form-control-lg"
                   value="<?= h($heure_course); ?>"
                   required>
        </div>

        <div class="mb-3">
            <label for="pseudo" class="form-label fs-5">Pseudo Client (Pseudo) <?= $required; ?></label>
            <input type="text" id="pseudo" name="pseudo" class="form-control  form-control-lg" autocomplete="off"
                   required
                   value="<?= h($pseudo); ?>">
        </div>

        <div class="mb-3" id="autresGroup" style="display: none;">
            <label for="autres" class="form-label fs-5">Autres <?= $required; ?></label>
            <input type="text" id="autres" name="autres" class="form-control  form-control-lg"
                   value="<?= h($autres); ?>">
        </div>

        <div class="mb-3">
            <label for="depart" class="form-label fs-5"><?= $label1; ?> <?= $required; ?></label>
            <input type="text" id="depart" name="depart" class="form-control  form-control-lg" required
                   value="<?= h($depart); ?>">
        </div>

        <div class="mb-3">
            <label for="arrive" class="form-label fs-5"><?= $label2; ?> <?= $required; ?></label>
            <input type="text" id="arrive" name="arrive" class="form-control  form-control-lg" required
                   value="<?= h($arrive); ?>">
        </div>

        <!--        <div class="mb-3">-->
        <!--            <label for="chauffeur2" class="form-label">Chauffeur2</label>-->
        <!--            <select id="chauffeur2" name="chauffeur2" class="form-select" style="width: 100%;">-->
        <!--                Options will be populated here via AJAX -->
        <!--            </select>-->
        <!--        </div>-->

        <div class="mb-3">
            <label for="chauffeur" class="form-label fs-5">Chauffeur <?= $required; ?> </label>
            <select id="chauffeur" name="chauffeur" class="form-select  form-control-lg" style="width: 100%;">
                <?php echo $myoption; ?>
            </select>
        </div>

        <!--        <div class="mb-3">-->
        <!--            <label for="chauffeur" class="form-label">Chauffeur</label>-->
        <!--            <input type="text" id="chauffeur" name="chauffeur" class="form-control" required>-->
        <!--        </div>-->


        <div class="mb-3">
            <label for="commentaire" class="form-label fs-5">Commentaire</label>
            <textarea id="commentaire" name="commentaire" class="form-control"
                      rows="2"><?= h($commentaire); ?></textarea>
        </div>

        <div class="mb-3">

            <label for="document" class="form-label fs-5 "><span lang="fr"><?= $label3; ?></span>
            </label>
            <input type="file" id="document" name="document" class="form-control">
        </div>


        <?php echo '<br>'?>
        <?php echo 'identité contrôl'.'<br>'; ?>


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include FOOTER; ?>


