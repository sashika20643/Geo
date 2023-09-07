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
        <h2>Calibration Service Details</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Instrument Name</th>
                    <th>Last Calibrated Day</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // ...
                require_once '../../includes/dbh.inc.php';

                // Fetch all details from the calibration_service table
                $sql = "SELECT * FROM calibration_service";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['contact'] . "</td>";
                        echo "<td>" . $row['instrument_name'] . "</td>";
                        echo "<td>" . $row['last_calibrated_day'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No calibration service details found.</td></tr>";
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


