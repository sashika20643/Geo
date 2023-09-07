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
        <h2>All Free Services</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Institute/School</th>
                    <th>Teacher's Name</th>
                    <th>Contact Number</th>
                    <th>Number of Students</th>
                    <th>Institute Email</th>
                    <th>Request Letter</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection (assuming you already have it declared)
                // ...
                require_once '../../includes/dbh.inc.php';

                // Fetch all free services from the free_service table
                $sql = "SELECT * FROM free_service";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['institute'] . "</td>";
                        echo "<td>" . $row['teacher_name'] . "</td>";
                        echo "<td>" . $row['contact_number'] . "</td>";
                        echo "<td>" . $row['num_students'] . "</td>";
                        echo "<td>" . $row['institute_email'] . "</td>";
                        echo "<td><a href='" . $row['request_letter'] . "' class='btn btn-primary' download>Download</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No free services found.</td></tr>";
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


