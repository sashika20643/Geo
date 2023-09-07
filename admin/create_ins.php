<?php
include('authcheck.php')
    ?>

<?php
require_once '../includes/dbh.inc.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection (assuming you already have it declared)
    // ...

    // Form data
    $instrument_name = $_POST['instrument_name'];
    $instrument_details = $_POST['instrument_details'];
    $price = $_POST['price'];
    $cat=$_POST['cat'];

    // File upload handling
    $target_dir = "../images/uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $target_f = "/BGproject/images/uploads/". basename($_FILES["image"]["name"]);


    // SQL query to insert data
    $sql = "INSERT INTO instruments (instrument_name, instrument_img, instrument_details,cat, price)
            VALUES ('$instrument_name', '$target_f', '$instrument_details',$cat, $price)";

    if ($conn->query($sql) === TRUE) {
        echo "Instrument added successfully.";
        header("Location: /BGproject/admin/all_ins");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('head.php')
    ?>

<body>
    <!-- Navbar -->
    <?php
    include('nav.php')
        ?>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <?php
            include('sidebar.php')
                ?>


            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Your content goes here -->
                <h1>Insert Instrument</h1>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="instrument_name">Instrument Name:</label>
                        <input type="text" class="form-control" id="instrument_name" name="instrument_name" required>
                    </div>
                    <div class="form-group">
                        <label for="instrument_details">Instrument Details:</label>
                        <textarea class="form-control" id="instrument_details" name="instrument_details" rows="4"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Instrument Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="instrument_details">Category:</label>
                        <select name="cat" id="cat">
                            <option value="1" select>
                                Total Stations
                            </option>
                            <option value="2">
                                GPS Devices
                            </option>
                            <option value="3">Levels</option>
                            <option value="4">Drones</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <?php
    include('script.php')
        ?>
</body>

</html>