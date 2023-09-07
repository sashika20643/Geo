<?php
// Database connection (assuming you already have it declared)
// ...
require_once 'includes/dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $instrument_id=$_POST['instrument_id'];
    $sql = "SELECT * FROM instruments WHERE instrument_id = $instrument_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $order_total = $row['price'];

    }
    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];
    
    $address=$_POST['address'];
    $postal=$_POST['postal'];
    $payment_method = $_POST['payment_method'];
   

    // Insert order details into the "orderins" table
    $insert_sql = "INSERT INTO orderins (name, email, total, pmethod,address,postal,instrument_id) VALUES ('$customer_name', '$customer_email', $order_total, '$payment_method','$address','$postal','$instrument_id')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "<div class='alert alert-success'>Order placed successfully.</div>";
    } else {
        echo "Error placing order: " . $conn->error;
    }
}

$conn->close();
?>
