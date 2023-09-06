<?php

require_once '../includes/dbh.inc.php';

// Function to delete an instrument by ID
function deleteInstrument($conn, $instrument_id) {
    $instrument_id = mysqli_real_escape_string($conn, $instrument_id); // Sanitize input

    // SQL query to delete the instrument
    $sql = "DELETE FROM instruments WHERE instrument_id = '$instrument_id'";

    if ($conn->query($sql) === TRUE) {
        return true; // Instrument deleted successfully
    } else {
        return false; // Error deleting instrument
    }
}

// Example usage of the function
if (isset($_GET["instrument_id"])) {
    $instrument_id = $_GET["instrument_id"];

    if (deleteInstrument($conn, $instrument_id)) {
        header("Location: /BGproject/admin/all_ins");
    } else {
        echo "Error deleting instrument.";
    }
}

$conn->close();
?>
