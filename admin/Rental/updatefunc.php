<?php
require_once '../../includes/dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get updated values from the form
    $updated_name = $_POST['instrument_name'];
    $updated_details = $_POST['instrument_details'];
    $updated_price = $_POST['price'];
    $id=$_POST['id'];
    $ldate=$_POST['l_date'];

    if ($_FILES['image']['tmp_name']) {
        // Handle file upload (similar to the create page)
        $target_dir = "../images/uploads/";

        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        // Update the image file path in the database
        $image_path = $target_file;
    } else {
        // Keep the existing image if no new image is uploaded
        $image_path = $row['image'];
    }

    // Update the instrument details in the database
    $update_sql = "UPDATE rental SET
       name = '$updated_name',
        description = '$updated_details',
        price = $updated_price,
        img='$target_file',
        l_date='$l_date'
        WHERE id = $instrument_id";

    if ($conn->query($update_sql) === TRUE) {
        echo "<div class='alert alert-success'>Instrument updated successfully.</div>";
        // Redirect to the instrument list page or other appropriate page
        // header("Location: instrument_list.php");
        // exit(); // Ensure no further code execution after redirection
    } else {
        echo "Error updating instrument: " . $conn->error;
    }
}

?>