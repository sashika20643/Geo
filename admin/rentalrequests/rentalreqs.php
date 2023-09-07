<?php
include('../authcheck.php')
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('../head.php')
?>
<body>
    <!-- Navbar -->
    <?php
include('../nav.php')
?>

    <!-- Sidebar -->
    <div class="container-fluid"  >
        <div class="row">
        <?php
include('../sidebar.php')
?>
  
            
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                
            <div class="container mt-5">
        <h2>All Orders</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Total</th>
                    <th>Postal</th>
                    <th>Instrument ID</th>
                    <th>Email</th>
                    <th>Payment Method</th>
                    <th>From Date</th>
                    <th>To Date</th>
              
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection (assuming you already have it declared)
                // ...
                require_once '../../includes/dbh.inc.php';

                // Fetch all orders from the "ordersrental" table
                $sql = "SELECT * FROM ordersrental";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["total"] . "</td>";
                        echo "<td>" . $row["postal"] . "</td>";
                        echo "<td>" . $row["instrument_id"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["pmethod"] . "</td>";
                        echo "<td>" . $row["fromDate"] . "</td>";
                        echo "<td>" . $row["toDate"] . "</td>";
                       
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No orders found.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    </div>

    <!-- Include Bootstrap JS -->
    <?php
include('../script.php')
?> 
</body>
</html>


