<?php
// Database connection (assuming you already have it declared)
// ...
require_once '../includes/dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $institute = $_POST['institute'];
    $teacher_name = $_POST['teacher_name'];
    $contact_number = $_POST['contact_number'];
    $num_students = $_POST['num_students'];
    $institute_email = $_POST['institute_email'];

    // File upload handling
    $upload_dir = '../documents/'; // Directory to store uploaded files
    $uploaded_file = $_FILES['request_letter']['tmp_name'];
    $file_name = $_FILES['request_letter']['name'];
    $file_path = $upload_dir . $file_name;

    if (move_uploaded_file($uploaded_file, $file_path)) {
        // File uploaded successfully
        // Insert data into the free_service table
        $upload_dir = '/bgproject/documents/';
        $file_path = $upload_dir . $file_name;

        $insert_sql = "INSERT INTO free_service (institute, teacher_name, contact_number, num_students, request_letter, institute_email) VALUES ('$institute', '$teacher_name', '$contact_number', $num_students, '$file_path', '$institute_email')";

        if ($conn->query($insert_sql) === TRUE) {
            echo "Request submitted successfully.";
            session_start();

// Set a message in the session variable
$_SESSION['message'] = 'Request submitted successfully.';

// Redirect to a page where you want to display the message
header('Location: /bgproject');
        } else {
            echo "Error submitting request: " . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }
}

$conn->close();
?>
