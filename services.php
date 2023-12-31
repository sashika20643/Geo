<?php
require_once 'header.php';
?>

<html>
<head>
    <style>

body {
    background-image: url('images/Body/body5.jpg'); /* Replace with your image file path */
    background-size: cover; /* Adjust to 'contain', '100%', or other values as needed */
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background fixed when scrolling */
    /* Add more properties as needed */
    }

    .card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    padding: 20px;
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.card img {
    width: 100%;
    max-width: 300px;
    height: auto;
    border-radius: 10px;
    margin-bottom: 15px;
}

.card h2 {
    margin-top: 15px;
    font-size: 24px;
    color: #222;
}

.card p {
    margin-bottom: 15px;
    color: #222;
    text-align: center;
}

.button {
    display: inline-block;
    background-color: #f0b25f;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    margin-top: 10px;
    transition: background-color 0.3s ease-in-out;
}

.button:hover {
    background-color: #EAE7D1;
}

/* Footer styles */
footer {
      text-align: center;
      padding: 20px 0;
      background-color:#f0b25f;
      color: #fff;
    }
</style>
<script>
        // JavaScript for Animation
        window.onload = function() {
            const cards = document.querySelectorAll('.card');

            cards.forEach((card, index) => {
                card.style.transitionDelay = `${index * 0.2}s`;
                card.style.opacity = 0;

                setTimeout(() => {
                    card.style.opacity = 1;
                    card.classList.add('appeared');
                }, 500 + index * 200);
            });
        </script>
</head>
<body>
<div class="container">
        <h1>All Services
</h1>
        <p>Explore our wide range of surveying equipment available for rent. Whether you need equipment for a short-term project or want to try before you buy, we have you covered.</p>
        
        <div class="card">
            <img src="/bgproject/images/free_service.jpg" alt="Total Station">
            <h2>free session (for school A/L students)</h2>
            <p>Rent our advanced total stations for accurate measurements and data collection in the field.</p>
            <a href="/bgproject/services/free_service.php" class="button">To the Service</a>
        </div>

        <div class="card">
            <img src="/bgproject/images/paid_service.jpg" alt="GPS Device">
            <h2>Paid session (for anyone)</h2>
            <p>Get precise positioning and navigation with our GPS devices available for rent.</p>
            <a href="/bgproject/services/paid_service.php" class="button">To the Service</a>
        </div>
        <div class="card">
            <img src="/bgproject/images/rental/level.jpg" alt="Level">
            <h2>Instrument calibration</h2>
            <p>Get precise elevation and accurate elevations with our level instruments available for rent.</p>
            <a href="/bgproject/services/calibration_service.php" class="button">To the Service</a>
        </div>
        
    </div>
</body>
</html>
<?php
require_once 'footer.php';
?>