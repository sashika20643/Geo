<?php
include('authcheck.php')
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
    <div class="container-fluid"  >
        <div class="row">
        <?php
include('sidebar.php')
?>
  
            
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Your content goes here -->
                
            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <?php
include('script.php')
?> 
</body>
</html>


