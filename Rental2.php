<?php
require_once 'header.php';
?>

<?php


if (!isset($_SESSION["username"])) {
    $_SESSION["redirect_url"] = $_SERVER["Rental2.php"];
    header("Location: login.php");
    exit();
}

if (isset($_SESSION["redirect_url"])) {
    // Redirect the user to the stored URL (instrument details page)
    header("Location: " . $_SESSION["redirect_url"]);
    unset($_SESSION["redirect_url"]); // Unset the redirect URL session variable
} else {
    // Redirect to the default landing page (e.g., home)
    header("Location: index.php");
}

?>
<html lang="en">
<head>
    <title>Instrument Details</title>
</head>
<body>
    <header>
        <style>
            /* Your existing CSS styles can go here */

/* Style for instrument details */
.instrument-details {
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin: 20px;
    margin-top: 100px;
}

.instrument-details h1 {
    font-size: 24px;
    color: #333;
}

.instrument-details p {
    font-size: 16px;
    color: #555;
}

/* Additional styling for header and footer can be added here */

        </style>
    </header>

    <div class="instrument-details">
        <?php
        require_once 'includes/dbh.inc.php';
        // Check if an instrument ID is provided in the URL (e.g., instrument_details.php?id=1)
        if (isset($_GET['id'])) {
            $instrument_id = $_GET['id'];   
            $sql = "SELECT * FROM instruments WHERE instrument_id = $instrument_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // Instrument data found
            $row = $result->fetch_assoc();
            echo "<h1>" . $row['instrument_name'] . "</h1>";
            echo "<p>" . $row['instrument_img'] . "</p>";
            echo "<p>" . $description = html_entity_decode($row['instrument_details']) . "</p>";

            // Access instrument details like $row['name'], $row['description'], etc.
            } else {
                // Handle the case where no instrument with that ID was found
            }
        // Display other instrument details as needed

        } else {
            // If no instrument ID is provided, you can display a default message or handle it as you prefer.
            echo "Instrument not found.";
        }
        $conn->close();
        ?>

    </div>

    <footer>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>
