<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
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
        
        
        
    <h4 align="center" id="receipt">Receipt</h4>
                
        <?php
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        
        echo "<div align='center' class='receiptwrapper'>";
        
        echo "<h4 id='receiptname'>Name: " . $_SESSION['name'] . "</h4>";
        echo "<h4 id='receiptemail'>Email: " . $_SESSION['email'] . "</h4>";
        
        echo "<div align='center' class='receiptpricewrapper'>";
        
        echo "<h4 align='center' id='prouctname'>Salesforce</h4>";
        
        echo "<h4 id='receiptprice'>Subtotal: " . $_SESSION['subtotal'] . "</h4>";
        echo "<h4 id='receiptprice'>VAT: " . $_SESSION['vat'] . "</h4>";
        echo "<h4 id='receiptprice'>Discount: " . $_SESSION['discount'] . "</h4>";
        echo "<h4 id='receiptprice'>Total: " . $_SESSION['total'] . "</h4>";
        
        echo "</div>";
        
        echo "<h2 id='receiptthankyou'>Thank You For Your Order!</h2>";
        
        echo "</div>";
        
        ?>
    </body>
</html>