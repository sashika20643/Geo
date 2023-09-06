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