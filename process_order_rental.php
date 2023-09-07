<?php
// Database connection (assuming you already have it declared)
// ...
require_once 'includes/dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $instrument_id=$_POST['instrument_id'];
    $sql = "SELECT * FROM rental WHERE id = $instrument_id";
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
   $from=$_POST['from'];
   $to=$_POST['to'];
   $from_date_obj = new DateTime($from);
   $to_date_obj = new DateTime($to);

   // Calculate the difference in days
   $interval = $from_date_obj->diff($to_date_obj);
   $days = $interval->days;
   $order_total = $order_total *$days; 

    // Insert order details into the "orderins" table
    $insert_sql = "INSERT INTO ordersrental (name, email, total, pmethod,address,postal,instrument_id,fromDate,toDate,days) VALUES ('$customer_name', '$customer_email', $order_total, '$payment_method','$address','$postal','$instrument_id','$from','$to','$days')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "<div class='alert alert-success'>Order placed successfully.</div>";
    } else {
        echo "Error placing order: " . $conn->error;
    }
}

$conn->close();
?>
