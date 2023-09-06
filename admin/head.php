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