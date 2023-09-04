<?php
require_once 'header.php';
?>
<html>
<head>
  
    <style>

.instrument-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 30px;
    
    margin-top: 80px; 
}

.instrument-card {
    background-color: #f7f7f7;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    display: flex; 
    flex-direction: column;
    align-items: center;
    text-align: center;
    
}

.instrument-card img {
    width: 100%;
    max-width: 200px;
    height: auto;
    border-radius: 10px;
    margin-bottom: 15px;
}

.instrument-card h2 {
    font-size: 20px;
    margin: 10px 0;
    color: #333;
}

.instrument-card p {
    margin-bottom: 15px;
    color: #666;
}

/* ... (same as before) ... */

    </style>
    <script>
        // Your JavaScript code here
    </script>
</head>
<body>
    <!-- Navigation Bar -->
    <!-- ... (same as before) ... -->

    <!-- Main Content -->
    <div class="container">
        <h1>Available Instruments</h1>
        <div class="instrument-grid">
            <div class="instrument-card">
                <img src="instrument1.jpg" alt="Instrument 1">
                <h2>Instrument 1</h2>
                <p>Short description of Instrument 1.</p>
                <a href="Rental2.php?id=1" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg?" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php?id=2" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php?id=3" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php?id=4" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php?id=5" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg?id=6" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>
            <div class="instrument-card">
                <img src="instrument2.jpg" alt="Instrument 2">
                <h2>Instrument 2</h2>
                <p>Short description of Instrument 2.</p>
                <a href="Rental2.php" class="button">Details</a>
            </div>

        </div>
    </div>
</body>
</html>
<?php
require_once 'footer.php';
?>
