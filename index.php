<?php
require_once 'header.php';
?>
<html>
  <head>
    <title>Geodetia</title>
  </head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    
    body {
    background-image: url('images/Body/body.jpg'); /* Replace with your image file path */
    background-size: cover; /* Adjust to 'contain', '100%', or other values as needed */
    background-repeat: no-repeat;
    background-attachment: fixed; /* Keeps the background fixed when scrolling */
    /* Add more properties as needed */
    }
    /* Hero section styles */
    .hero {
     
      top: 0;
      width: 100%;
      z-index: 100;
      text-align: center;
      padding: 30px 0;
      margin-top: 109.5px;
      background-color: #EAE7D1;
      background-color: hsla(60, 20%, 50%, 0.3);
    }
    /* Change font size for a specific element */
h2 {
    font-size: 35px; /* Adjust the value to your preference */
}
h4{
  font-size: 100px;
  font-family: brush script mt, cursive;
}

    /* Featured products section styles */
    /* Basic styling for the featured products */
    .featured-products {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: #f8f8f8;
        padding: 20px;
        margin-top: 20px;
        background-color: hsla(60, 5%, 50%, 0);
        border-radius: 10px;
    }

    .product {
        border: 1px;
        padding: 10px;
        text-align: center;
        background-color: #f8f8f8;
        width: 200px; /* Adjust the width of each card */
        margin: 30px; /* Add margin around each card for spacing */
        border-radius: 10px;
    }

    .product img {
        max-width: 100%;
    }

    .product h2 {
        margin: 10px 0;
    }

    .product p {
        font-size: 14px;
    }
    .product button {
      background-color: #f0b25f; 
      color: #fff; 
      border: none; 
      padding: 10px 20px; 
      border-radius: 5px; 
      cursor: pointer; 
      transition: background-color 0.3s, color 0.3s; 
    }

    .product button:hover {
      background-color: #EAE7D1; 
    }

    /* Services section styles */
    .services {
      background-color: #f9f9f9;
      
      text-align: center;
      background-color: hsla(60, 5%, 50%, 0);
  
    }

    .service {
      margin-top: 20px;
      padding : 20px;
      background-color: #EAE7D1;
      border: 0px;
      
     
    }

    .service h3 {
      margin-bottom: 10px;
    }

    .service p {
      margin-bottom: 20px;
    }

    .service a {
      display: inline-block;
      background-color: #222;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
    }

    /* Footer styles */
    footer {
      text-align: center;
      padding: 20px 0;
      background-color:#f0b25f;
      color: #fff;
    }
    </style>
    
      <body>
        
        <section class="hero">
    
        <?php


// Check if the message exists in the session

if (isset($_SESSION['message'])) {
    // Display the message and then remove it from the session
    echo '    <div class="alert alert-primary" role="alert" style="z-index=999;">';
    echo $_SESSION['message'];
    echo '</div>';
  
    unset($_SESSION['message']);
}
?>


            <h1>Welcome to our Surveying Equipment & services Company</h1>
            <p>Providing High-Quality Surveying Equipment and Services</p>
          </section>
          <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="row">
            <?php
            // Database connection (assuming you already have it declared)
            // ...
            require_once 'includes/dbh.inc.php';

            // Query to retrieve product information from the instruments table
            $sql = "SELECT * FROM instruments LIMIT 4"; // Limit to 3 products for this example
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  
                    echo '<div class="product">';
                    echo '<img src="' . $row['instrument_img'] . '" alt="' . $row['instrument_name'] . '">';
                    echo '<h3>' . $row['instrument_name'] . '</h3>';
               
                    echo '<p>' . $row['price'] . '</p>';
                   
                    echo '<a href="/bgproject/checkout.php?instrument_id=';
                    echo $row["instrument_id"];
                    echo '">';
                    echo '<button>Buy</button>';
                    echo '</a>';
                    echo '</div>';
                
                }
            } else {
                echo '<p>No products found.</p>';
            }

            $conn->close();
            ?>

            <!--Product 1-->
              <!-- <div class="product">
                <img src="images/GNSS1.jpg" alt="Product 1">
                <h3>Trimble R10</h3>
                <p>
                Advanced satellite tracking with Trimble 360 receiver technology and latest generation Trimble Custom Survey GNSS ASIC with 672 GNSS channels. Support for Android and iOS platforms.
                </p>
                <button>Add to Cart</button>
              </div>
	
	          <!--Product 2-->
	            <!-- <div class="product">
                <img src="images/TS.jpg" alt="Product 2">
                <h3>Trimble RTS 673</h3>
                <p>
	              Electrical and Plumbing contractors.  The RTS673 features include: Active tracking, High Precision (HP, DR) reflectorless and visible red laser pointer for precise layout tasks.
	              </p>
                <button>Add to Cart</button>
              </div> -->
	
	          <!--Product 3-->
	         
	
            <!-- Repeat for other featured products -->
          </section>
          <section class="services">
            
              <div class="service">
                <h4>Geodetia</h4>
                <p>Join our interactive practical sessions and learn from experts.</p>
                <img src="images/Body/body3.jpg">
              </div> 
              <div class="service">
                <h3>Paid Practical Sessions</h3>
                <p>Enhance your skills with advanced practical sessions.</p>
                <a href="/bgproject/services/paid_service.php">Register Now</a>
              </div>
              <!-- Repeat for other services -->     
            </section>
            <section class="services">
            <div class="service">
                <h3>Free Practical Sessions</h3>
                <p>Enhance your skills with advanced practical sessions.</p>
                <a href="/bgproject/services/free_service.php">Register Now</a>
              </div>
              <!-- Repeat for other services -->    
          </section>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <!-- Other sections like articles and rental -->
      </body>
</html>
<?php
require_once 'footer.php';
?>



