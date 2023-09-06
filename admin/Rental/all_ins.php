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
                <div class="d-flex justify-content-between">

                <h2>List of Instruments</h2>
<a class="btn btn-success" href="/BGproject/admin/create_ins.php">ADD</a>
                </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Instrument Name</th>
                    <th>Instrument Details</th>
                    <th>Image</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
             
                require_once '../../includes/dbh.inc.php';

             
                $sql = "SELECT * FROM rental";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td><img src='" . $row['img'] . "' alt='Instrument Image' width='100'></td>";
                        echo "<td>$" . $row['price'] . "</td>";
                        echo "<td><a class='btn btn-primary' href='/BGproject/admin/rental/edit_ins.php?id=".$row['id']."'>Edit</a> </td>";
                        echo "<td><a class='btn btn-danger' href='/BGproject/admin/rental/deletep.php?id=".$row['id']."'>Delete</a> </td>";
                       
                       
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No instruments found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>                
            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <?php
include('../script.php')
?> 
</body>
</html>


