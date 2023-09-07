<?
 session_start();
?>
<html>
        <Style>
            /* Header styles */
            header {
            background-color: #f0b25f;
            padding: 18px 0;
            margin-top: 0px;
            
            }
            .nav-bar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
            justify-content: space-between; /* Align content to the sides */
            align-items: center; /* Vertically center the content */
            display: flex;
            }
            @keyframes mymove {
            from {background-color:#fff;}
            to {background-color: #f0b25f;}
            }

            .logo img {
            max-width: 170px; /* Adjust the logo size */
            margin-left: 20px; /* Add spacing between the logo and navigation */
            }
            nav ul {
            list-style: none;
            display: flex;
            }

            nav ul li {
            margin-right: 40px;
            }

            nav ul li a {
            text-decoration: none;
            color: #333;
            }
            /* Styling for the greeting and logout section */
.greeting-section {
    text-align: right;
    margin-right: 20px; /* Adjust the margin as needed */
    font-size: 18px; /* Adjust the font size as needed */
    color: #333; /* Text color */
    display: flex;
    flex-direction: column; /* Arrange elements vertically */
    align-items: flex-end; /* Align elements to the right */
    margin-top: 10px; /* Add spacing between greeting and logout link */
}

.greeting-section a {
    text-decoration: none; /* Remove underline from links */
    color: #f0b25f; /* Link color */
    margin-left: 10px; /* Add spacing between greeting and logout link */
}

.greeting-section a:hover {
    text-decoration: underline; /* Add underline on hover */
}

        </style>
        
        <body>
            <header class="nav-bar">
                <div class="logo">
               <img src="/bgproject/images/logo.png" alt="Logo"> 
                </div>
                    <nav>
                        <ul>
                        <li><a href="/bgproject">Home</a></li>
                        <li><a href="/bgproject/instruments.php">Products</a></li>
                        <li><a href="/bgproject/services.php">Services</a></li>
                        <li><a href="articles.php">Articles</a></li>
                        <li><a href="/bgproject/Rental.php">Rental</a></li>
                        <li>
                            <?php
                        session_start(); // Start the session
                        if (isset($_SESSION["username"])) {
                            // User is logged in, display the greeting and logout button
                            $username = $_SESSION["username"];
                            echo "Hello, $username! ";
                            echo '<a href="includes/logout.php">Logout</a>';
                        } else {
                            // User is not logged in, display a login link or form
                            echo '<a href="login.php">Login</a>';
                        }
                        ?>
                        </div>
                        </li>
                    </ul>
                </nav>
    </header>
    <!-- Rest of your content -->
</body>
</html>