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
        <h2>Edit Instrument</h2>
        <?php
        // Database connection (assuming you already have it declared)
        // ...
        require_once '../../includes/dbh.inc.php';

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];
          
            // Query to retrieve instrument details based on the instrument_id
            $sql = "SELECT * FROM rental WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                ?>
                <form action="updatefunc.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="instrument_name">Instrument Name:</label>
                        <input type="text" class="form-control" id="instrument_name" name="instrument_name" value="<?php echo $row['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="instrument_details">Instrument Details:</label>
                        <textarea class="form-control" id="instrument_details" name="instrument_details" rows="4" required><?php echo $row['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Current Image:</label>
                        <br>
                        <img src="<?php echo $row['img']; ?>" alt="Current Image" width="200">
                    </div>
                    <div class="form-group">
                        <label for="new_image">Update Image:</label>
                        <input type="file" class="form-control-file" id="new_image" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
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
                
            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <?php
include('../script.php')
?> 
</body>
</html>


