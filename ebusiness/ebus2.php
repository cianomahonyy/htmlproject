<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link rel="stylesheet" href="../css/cloudstyle.css" type="text/css" />
        
    </head>
    <body>
        
        
    <ul class="nav">

      <div class="logo">
          <a href="#">LOGO</a>
      </div>

      <li><a href="cloudhome.html">Home</a></li>
      <li><a href="aboutcloud.html">About Cloud</a></li>
      <li><a href="ebus1.php">Products</a></li>
      <li><a href="contactus.html">Contact Us</a></li>

    </ul>
        
        
        
        
        
        <div align="center" class="addtocart-wrapper">
        
        <h4 id="paymentdetails">Enter Your Payment Details</h4>
        
        
        <form action="ebus3.php" method="POST">

          <label for="name">

            <input type="text" id="name" placeholder="Name" value=""/>

          </label>

          </br>

          <label for="email">

            <input type="text" id="email" placeholder="Email" value=""/>

          </label>

          </br>

          <label for="user_pin">
                    
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
          </label>

          </br>
            
          
          
          </br>
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
          </form>
            
          <br/>
            
            
          <button id="btnValidate" onClick="validateDetails()" enabled>Validate</button>
            
            
            
        </div>    
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
        
    </body>
</html>