<?php

require_once '../../includes/dbh.inc.php';

// Function to delete an instrument by ID
function deleteInstrument($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id); // Sanitize input

    // SQL query to delete the instrument
    $sql = "DELETE FROM rental WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        return true; // Instrument deleted successfully
    } else {
        return false; // Error deleting instrument
    }
}

// Example usage of the function
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    if (deleteInstrument($conn, $id)) {
        header("Location: /BGproject/admin/rental/all_ins");
    } else {
        echo "Error deleting instrument.";
    }
}

$conn->close();
?>
