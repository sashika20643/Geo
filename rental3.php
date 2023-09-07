<?php
require_once 'header.php';
?>

<?php


if (!isset($_SESSION["username"])) {
    $_SESSION["redirect_url"] = $_SERVER["Rental2.php"];
    header("Location: /bgproject/login.php");
    exit();
}


?>
<html lang="en">
<head>
    <title>Instrument Details</title>
</head>
<body>
    <header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </header>

    <div class="container mt-5" style=" margin-top: 100px !important;">
        <?php
        // Database connection (assuming you already have it declared)
        // ...
        require_once 'includes/dbh.inc.php';

        // Assuming you have an instrument ID from the URL (e.g., $_GET['instrument_id'])
        if (isset($_GET['instrument_id'])) {
            $instrument_id = $_GET['instrument_id'];

            // Query to retrieve instrument details based on the instrument_id
            $sql = "SELECT * FROM rental WHERE id = $instrument_id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $instrument_name = $row['name'];
                $instrument_details = $row['description'];
                $price = $row['price'];
                $image_path = $row['img'];
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $image_path; ?>" alt="<?php echo $instrument_name; ?>" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h2><?php echo $instrument_name; ?></h2>
                        <p><?php echo $instrument_details; ?></p>
                        <p><strong>Price: $<?php echo $price; ?></strong></p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <?php
            } else {
                echo "Instrument not found.";
            }
        } else {
            echo "Invalid request.";
        }

        $conn->close();
        ?>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <footer>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>
