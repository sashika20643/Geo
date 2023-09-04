<?php
require_once 'header.php';
?>

<html>
    <head>
        <title>Log into Geodetia</title>
        <style>
        body {
    background-image: url('images/Body/body2.jpg'); /* Replace with your image file path */
    background-size: cover; /* Adjust to 'contain', '100%', or other values as needed */
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background fixed when scrolling */
    /* Add more properties as needed */
    }
       /* Container for centering the form */
        .containers {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

      /* Login form styles */
      .login-form {
          background-color: #fff;
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          width: 400px;
      }

      .login-form h1 {
          text-align: center;
          margin-bottom: 20px;
          color: #333;
      }

      .login-form label {
          display: block;
          margin-bottom: 5px;
          color: #555;
      }

      .login-form input[type="text"],
      .login-form input[type="password"] {
          width: 95%;
          padding: 10px;
          margin-bottom: 15px;
          border: 1px solid #ccc;
          border-radius: 5px;
      }

      .login-form button[type="submit"] {
          background-color: #f0b25f;
          color: #fff;
          border: none;
          padding: 10px 20px;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s, color 0.3s;
      }

      .login-form button[type="submit"]:hover{ 
          background-color: #EAE7D1;
      }

      .login-form .error {
          color: #ff0000;
          margin-top: 10px;
          text-align: center;
      }
      footer {
      text-align: center;
      padding: 20px 0;
      background-color:#f0b25f;
      color: #fff;
    }
      </style>
  </head>
  <body>
      <div class="containers">
          <div class="login-form">
              <h1>Welcome Back!</h1>

              <br><form action="includes/login.inc.php" method="post">
              <input type="text" id="fname" name="uid" placeholder="Email / Username">
              <input type="password" id="lname" name="psw" placeholder="Password">
              <button name="submit" type="submit">Login</button></form>
            </br>
            <?php
    if (isset($_GET["error"]) && $_GET["error"] == "wronglogin") {
        echo '<div class="wronglogin">Invalid Details! </div>';
    }
    ?>
              <p>Didn't sign up yet? here<a href="Signup.php"> sign up !</a></p>
          </div>
      </div>
      <?php
require_once 'footer.php';
?>
  </body>
</html>



