<?php
// Database connection (assuming you already have it declared)
// ...
require_once '../includes/dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $instrument_name = $_POST['instrument_name'];
    $last_calibrated_day = $_POST['last_calibrated_day'];

    // Insert calibration request data into the calibration_service table
    $insert_sql = "INSERT INTO calibration_service (name, email, contact, instrument_name, last_calibrated_day) VALUES ('$name', '$email', '$contact', '$instrument_name', '$last_calibrated_day')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "<div class='alert alert-success'>Calibration request submitted successfully.</div>";
    } else {
        echo "Error submitting calibration request: " . $conn->error;
    }
}

$conn->close();
?>
