<?php
require_once 'header.php';
?>
        <title>Sign up in Geodetia</title>
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
          /* Sign up form styles */
          .signup-form {
              background-color: #fff;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
              width: 400px;
          }

          .signup-form h1 {
              margin-bottom: 20px;
              text-align: center;
          }

          .signup-form label {
              font-weight: bold;
          }

          .signup-form input[type="text"],
          .signup-form input[type="date"],
          .signup-form input[type="email"],
          .signup-form input[type="tel"],
          .signup-form input[type="password"] {
              width: 100%;
              padding: 10px;
              margin-bottom: 15px;
              border: 1px solid #ccc;
              border-radius: 5px;
          }

          .signup-form button[type="submit"] {
              background-color: #f0b25f;
              color: #fff;
              border: none;
              padding: 10px 20px;
              border-radius: 5px;
              cursor: pointer;
              transition: background-color 0.3s, color 0.3s;
          }

          .signup-form button[type="submit"]:hover {
              background-color:#EAE7D1;
          }
          footer {
      text-align: center;
      padding: 20px 0;
      background-color:#f0b25f;
      color: #fff;
    }
          </style>

          <body>

          <div class="containers">
              <div class="signup-form">
              <h1>Sign Up</h1>
              <br><form action="includes/signup.inc.php" method="post">
              <input type="text" id="fname" name="name" placeholder="Enter Name">
              <input type="text" id="fname" name="email" placeholder="Enter Email"  >
              <input type="text" id="fname" name="uid" placeholder="Enter User Name"  >
              <input type="password" id="fname" name="psw" placeholder="Enter Password"  >
              <input type="password" id="fname" name="pswrepeat" placeholder="Repeat Password" >
              <button name="submit" type="submit">Register</button>
              </form></br>
              <?php
              // Display messages and form
              if(isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                  echo '<div class="error">Fill in the all fields</div>';
                }elseif ($_GET["error"] == "invalidUid"){
                  echo '<div class="error">Invalid Username! </div>';
            
                }elseif ($_GET["error"] == "invalidEmail"){
                  echo '<div class="error">Invalid Email! </div>';
            
                }elseif ($_GET["error"] == "passworddonotMatch"){
                  echo '<div class="error">Password dont Match! </div>';
            
                }elseif ($_GET["error"] == "stmtfaild"){
                  echo '<div class="error">Somthing Went Wrong! </div>';
            
                }elseif ($_GET["error"] == "none"){
                  echo '<div class="error">Account Created. </div>';
            
                }elseif ($_GET["error"] == "Usernametaken"){
                  echo '<div class="error">Username / Email Aleady in used. </div>';
            
                }
              }
              ?>
              <p>Already have an account? here<a href="login.php"> Log in !</a></p>
            </div>
            </div>
            <?php
require_once 'footer.php';
?>
          </body>
         
