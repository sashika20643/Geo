
<?php
 session_start();
if ($_SESSION["role"]!=1) {

    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include your custom CSS here -->
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Custom CSS for styling */
        body {
            background-color: #f8f9fa;
        }
        a{
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-dark .navbar-brand {
            font-size: 24px;
        }
        .navbar-dark .navbar-toggler-icon {
            color: #ffffff;
        }
        .navbar-dark .navbar-nav .nav-link {
            font-size: 18px;
            padding: 10px 15px;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            background-color: #007bff;
        }
        .sidebar {
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            transition: background-color 0.3s;
            font-size: 28px;
        }
        .sidebar a:hover {
            background-color: #007bff;
            border-radius: 5px;
        }
        .main-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .navbar-dark .navbar-brand {
                font-size: 18px;
            }
            .navbar-dark .navbar-nav .nav-link {
                font-size: 16px;
            }
            .main-content {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
        <img src="../images/logo.png" alt="Logo" style="width:100px" class="d-inline-block align-top">
         
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link">Welcome, <?php 
                    echo $_SESSION["username"];
                    ?></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../includes/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid"  >
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block" style="background-color:#bba4a8;height:100vh;">
                <div class="position-sticky">
                    <ul class="nav flex-column mt-5">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart"></i> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-book"></i> Rentales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users"></i> Users
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Your content goes here -->
            </main>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>


