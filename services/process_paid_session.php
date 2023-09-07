<?php
// Database connection (assuming you already have it declared)
// ...
require_once '../includes/dbh.inc.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $id_number = $_POST['id_number'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $practicals = $_POST['practicals'];

    // Insert data into the paid_service table
    $insert_sql = "INSERT INTO paid_service (full_name, id_number, contact_number, email, position, practicals) VALUES ('$full_name', '$id_number', '$contact_number', '$email', '$position', '$practicals')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Request submitted successfully.";
        session_start();

        // Set a message in the session variable
        $_SESSION['message'] = 'Request submitted successfully.';
header('Location: /bgproject');

    } else {
        echo "Error submitting request: " . $conn->error;
    }
}

$conn->close();
?>
