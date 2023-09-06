<?php
require_once 'header.php';
?>
<html>
<head>
  
    <style>

.instrument-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 30px;
    
    margin-top: 80px; 
}

.instrument-card {
    background-color: #f7f7f7;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    display: flex; 
    flex-direction: column;
    align-items: center;
    text-align: center;
    
}

.instrument-card img {
    width: 100%;
    max-width: 200px;
    height: auto;
    border-radius: 10px;
    margin-bottom: 15px;
}

.instrument-card h2 {
    font-size: 20px;
    margin: 10px 0;
    color: #333;
}

.instrument-card p {
    margin-bottom: 15px;
    color: #666;
}

/* ... (same as before) ... */

    </style>
    <script>
        // Your JavaScript code here
    </script>
</head>
<body>
    <!-- Navigation Bar -->
    <!-- ... (same as before) ... -->

    <!-- Main Content -->
    <div class="container">
        <h1>Available Instruments</h1>
        <div class="instrument-grid">

        <?php
            // Database connection (assuming you already have it declared)
            // ...
            require_once 'includes/dbh.inc.php';

            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["cat"])) {
                $cat = $_GET["cat"];
            // SQL query to retrieve all instruments
            $sql = "SELECT * FROM instruments WHERE cat='$cat'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $instrument_id = $row['instrument_id'];
                    $instrument_name = $row['instrument_name'];
                    $instrument_description = $row['instrument_details'];
                    $price=$row['price'];
                    $image_path = $row['instrument_img'];
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="instrument-card">
                            <img src="<?php echo $image_path; ?>" alt="<?php echo $instrument_name; ?>">
                            <h2><?php echo $instrument_name; ?></h2>
                            <p><?php echo $price; ?></p>
                            <a href="Rental<?php echo $instrument_id; ?>.php" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No instruments found.";
            }

            $conn->close();}
            else{
                echo"error";
            }
            ?>


           
        </div>
    </div>
</body>
</html>
<?php
require_once 'footer.php';
?>
