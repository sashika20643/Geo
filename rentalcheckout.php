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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
<header>
    </header>
    <div class="container mt-5" style="margin-top:100px !important">
        <div class="row">
            <div class="col-md-6">
                <h2>Checkout</h2>
                <form action="process_order_rental.php" method="post">
                    <input type="hidden" name="instrument_id" value="<?php echo $_GET['instrument_id']; ?>">
                    <div class="form-group">
                        <label for="customer_name">Name:</label>
                        <input type="text" class="form-control" id="customer_name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="customer_email">Email:</label>
                        <input type="email" class="form-control" id="customer_email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="postal">Postal Code:</label>
                        <input type="text" class="form-control" id="postal" name="postal" required>
                    </div>
                    <div class="form-group">
                        <label for="from">From:</label>
                        <input type="date" class="form-control" id="from" name="from" required>
                    </div>
                    <div class="form-group">
                        <label for="to">To</label>
                        <input type="date" class="form-control" id="to" name="to" required>
                    </div>

                    <div class="form-group">
                <label for="pvscode-file://vscode-app/c:/Users/ASUS/AppData/Local/Programs/Microsoft%20VS%20Code/resources/app/out/vs/code/electron-sandbox/workbench/workbench.htmlayment_method">Payment Method:</label>
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="pay_on_delivery">Pay on Delivery</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
                    <!-- ... (other form fields) ... -->
                    <button type="submit" class="btn btn-primary">Place Order</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php
                // Database connection (assuming you already have it declared)
                // ...
                require_once 'includes/dbh.inc.php';
                // Fetch instrument details based on the instrument_id passed in the URL
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

                        // Display instrument details
                        echo "<h2>$instrument_name</h2>";
                        echo "<p>$instrument_details</p>";
                        echo "<p><strong>Price: $price</strong></p>";
                        echo "<img src='$image_path' alt='$instrument_name' class='img-fluid'>";
                    } else {
                        echo "Instrument not found.";
                    }
                } else {
                    echo "Invalid request.";
                }

                $conn->close();
                ?>
            </div>
        </div>
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
