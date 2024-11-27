<?php
function roundToNearestFiveMinutes($time)
{
    // Split the input time into hours and minutes
    list($hours, $minutes) = explode(':', $time);

    // Convert to integers
    $hours = (int)$hours;
    $minutes = (int)$minutes;

    // Round minutes to the nearest 5
    $roundedMinutes = round($minutes / 5) * 5;

    // Handle edge case where minutes round to 60
    if ($roundedMinutes == 60) {
        $roundedMinutes = 0;
        $hours = ($hours + 1) % 24; // Increment hour, and roll over at 24 hours
    }

    // Format hours and minutes with leading zeros if needed
    $formattedHours = str_pad($hours, 2, '0', STR_PAD_LEFT);
    $formattedMinutes = str_pad($roundedMinutes, 2, '0', STR_PAD_LEFT);

    // Return the rounded time in 'HH:MM' format
    return $formattedHours . ':' . $formattedMinutes;
}

function select_options_chauffeur()
{
    global $database;
    $sql = "SELECT id, chauffeur_name FROM chauffeurs";
    $results = $database->query2_array($sql);

    $myoption = "<option value='' selected >Select Chauffeur</option>";
    if (isset($_POST['submit'])) {
        $myoption = "";
    }

    $selected = "";
    foreach ($results as $item) {
        $selected = (isset($_POST['submit']) && $item['id'] == $_POST['chauffeur']) ? "selected" : "";

        $myoption .= "<option $selected value='$item[id]'><span class='fs-5'>$item[chauffeur_name]</span></option>";
    }

    return $myoption;
}

function get_action_button($id, $edit = "edit.php", $delete = "delete.php", $copy = "new.php", $review = "review.php")
{
    $edit = $edit . "?id=" . $id;
    $delete = $delete . "?id=" . $id;
    $copy = $copy . "?copy_id=" . $id;
    $review = $review . "?id=" . $id;
    $onclick = "onclick=\"return confirm('Are you sure you want to delete ID {$id}?');\"";

    $actionButtons = "
<div class='d-flex gap-2'>
    <!-- Edit Button -->
    <a href='$edit' class='btn btn-primary'>
        <i class='bi bi-pencil-fill' data-bs-toggle='popover' title='Edit this record'></i> <!-- Edit Icon -->
    </a>

    <!-- Delete Button -->
    <a href='$delete' class='btn btn-danger' $onclick
    data-bs-toggle='popover' title='Delete this record'>
        <i class='bi bi-trash-fill'></i> <!-- Delete Icon -->
    </a>
    
        <!-- Copy Button -->
    <a href='$copy' class='btn btn-info' data-bs-toggle='popover' title='Copy this record'>
        <i class='bi bi-files'></i><!-- Copy Icon -->
    </a>

    <!-- View Button -->
    <a href='$review' class='btn btn-success bg-s' data-bs-toggle='popover' title='View this record'>
        <i class='bi bi-eye-fill'></i> <!-- View Icon -->
    </a>
</div>
";
    return $actionButtons;

}


function generateBootstrapModal($modalId, $title, $body, $footer)
{
    return <<<HTML
    <div class="modal fade" id="$modalId" tabindex="-1" aria-labelledby="{$modalId}Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="{$modalId}Label">$title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ">
            $body
          </div>
          <div class="modal-footer">
            $footer
          </div>
        </div>
      </div>
    </div>
HTML;
}
