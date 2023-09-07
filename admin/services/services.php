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
        <h2>In Service</h2>
        <div class="row">
            <!-- Free Sessions Card -->
            <div class="col-md-4 mb-4 mt-2">
                <div class="card">
                    <img src="/bgproject/images/free_service.jpg" class="card-img-top" alt="Free Sessions"  style="height:150px">
                    <div class="card-body">
                        <h5 class="card-title">Free Sessions</h5>
                        <p class="card-text">Explore our free educational sessions and workshops.</p>
                        <a href="free_service.php" class="btn btn-primary">Requests</a>
                    </div>
                </div>
            </div>
            
            <!-- Paid Sessions Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/bgproject/images/paid_service.jpg" class="card-img-top" alt="Paid Sessions" style="height:150px">
                    <div class="card-body">
                        <h5 class="card-title">Paid Sessions</h5>
                        <p class="card-text">Discover our premium paid courses and training.</p>
                        <a href="paid_services.php" class="btn btn-primary">Requests</a>
                    </div>
                </div>
            </div>

            <!-- Instrument Calibration Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/bgproject/images/rental/level.jpg" class="card-img-top" alt="Instrument Calibration" style="height:150px">
                    <div class="card-body">
                        <h5 class="card-title">Instrument Calibration</h5>
                        <p class="card-text">Learn about our instrument calibration services and expertise.</p>
                        <a href="calibration_service.php" class="btn btn-primary">Requests</a>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Include Bootstrap JS -->
    <?php
include('../script.php')
?> 
</body>
</html>


