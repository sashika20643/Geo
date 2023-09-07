<?php
require_once '../header.php';
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

body {
    background-image: url('images/Body/body5.jpg'); /* Replace with your image file path */
    background-size: cover; /* Adjust to 'contain', '100%', or other values as needed */
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background fixed when scrolling */
    /* Add more properties as needed */
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

</head>
<body>
<div class="container mt-5" style="margin-top:100px !important">

        <div class="row">
            <div class="col-md-6">
                <h2>Calibration Request Form</h2>
                <form action="process_calibration.php" method="post">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number:</label>
                        <input type="tel" class="form-control" id="contact" name="contact" required>
                    </div>
                    <div class="form-group">
                        <label for="instrument_name">Instrument Full Name:</label>
                        <input type="text" class="form-control" id="instrument_name" name="instrument_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_calibrated_day">Last Calibrated Day:</label>
                        <input type="date" class="form-control" id="last_calibrated_day" name="last_calibrated_day" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <!-- Add an image here -->
                <img src="/bgproject/images/rental/level.jpg" alt="Calibration Image" class="img-fluid">
            </div>
        </div>

     
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>
</html>
<?php
require_once '../footer.php';
?>