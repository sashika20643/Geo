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
                <h2>Request Free Session</h2>
                <form action="process_free_session.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="institute">Institute/School:</label>
                        <input type="text" class="form-control" id="institute" name="institute" required>
                    </div>
                    <div class="form-group">
                        <label for="teacher_name">Teacher's Name:</label>
                        <input type="text" class="form-control" id="teacher_name" name="teacher_name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number:</label>
                        <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="form-group">
                        <label for="num_students">Number of Students (max 30):</label>
                        <input type="number" class="form-control" id="num_students" name="num_students" min="1" max="30" required>
                    </div>
                    <div class="form-group">
                        <label for="request_letter">Request Letter by Institute (PDF):</label>
                        <input type="file" class="form-control-file" id="request_letter" name="request_letter" accept=".pdf" required>
                    </div>
                    <div class="form-group">
                        <label for="institute_email">Institute Email Address:</label>
                        <input type="email" class="form-control" id="institute_email" name="institute_email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </form>
            </div>
            <div class="col-md-6">
                <img src="/bgproject/images/free_service.jpg" alt="Image" class="img-fluid">
            </div>
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