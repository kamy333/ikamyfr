<?php
header('Content-Type: text/html; charset=utf-8');

$jsonFile = 'refrigeration_labels.json';

if (file_exists($jsonFile)) {
    // Get the JSON data and output it directly
    $jsonData = file_get_contents($jsonFile);
    echo "<pre>JSON Data:\n";
    echo htmlspecialchars($jsonData, ENT_QUOTES, 'UTF-8');
    echo "</pre>";

    // Try decoding the JSON data
    $labelsArray = json_decode($jsonData, true);

    if ($labelsArray !== null) {
        echo "<h1>Refrigeration Labels</h1><ul>";
        foreach ($labelsArray['labels'] as $label) {
//            echo "<li>" . htmlspecialchars($label['label'], ENT_QUOTES, 'UTF-8') . "</li>";
            echo "<li>" . $label['label']. "</li>";
        }
        echo "</ul>";
    } else {
        echo "Failed to decode JSON data. Error: " . json_last_error_msg();
    }
} else {
    echo "JSON file not found.";
}



echo $labelsArray['labels'][0]['label'];

?>
