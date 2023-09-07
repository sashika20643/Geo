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
        <h2>All Paid Services</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>ID Number</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Available Practicals</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection (assuming you already have it declared)
                // ...
                require_once '../../includes/dbh.inc.php';

                // Fetch all paid services from the paid_service table
                $sql = "SELECT * FROM paid_service";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['full_name'] . "</td>";
                        echo "<td>" . $row['id_number'] . "</td>";
                        echo "<td>" . $row['contact_number'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['position'] . "</td>";
                        echo "<td>" . $row['practicals'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No paid services found.</td></tr>";
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


