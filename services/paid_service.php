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
                <h2>Request Paid Session</h2>
                <form action="process_paid_session.php" method="post">
                    <div class="form-group">
                        <label for="full_name">Full Name:</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label for="id_number">NIC/Driving License/Passport No:</label>
                        <input type="text" class="form-control" id="id_number" name="id_number" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number:</label>
                        <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Position:</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                    <div class="form-group">
                        <label for="practicals">Available Practicals:</label>
                        <select class="form-control" id="practicals" name="practicals" required>
                            <option value="Auto/Electronic Level Practicals">Auto/Electronic Level Practicals</option>
                            <option value="Total Station Practicals">Total Station Practicals</option>
                            <option value="GNSS Practicals">GNSS Practicals</option>
                            <option value="Drone Survey Practicals">Drone Survey Practicals</option>
                            <option value="Bathymetry Survey Practicals">Bathymetry Survey Practicals</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </form>
            </div>
            <div class="col-md-6">
                <img src="/bgproject/images/paid_service.jpg" alt="Image" class="img-fluid">
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