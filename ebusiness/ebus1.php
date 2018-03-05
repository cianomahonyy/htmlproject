<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link rel="stylesheet" href="../css/cloudstyle.css" type="text/css" />
    </head>
    
    <body>
   
    
    <ul class="nav">
      <div class="logo">
          <img src="../images/cloudiologo.png" id="cloudiologo" href="cloudhome.html"/></li>
      </div>
      <li><a href="cloudhome.html">Home</a></li>
      <li><a href="aboutcloud.html">About Cloud</a></li>
      <li><a href="ebus1.php">Products</a></li>
      <li><a href="contactus.html">Contact Us</a></li>
    </ul>

    <div class="heading">Services</div>
    
    <form method="POST" action="ebus3.php">
    
    <div align="center" class="services">
      <div class="service1">
        <h1>Salesforce</h1>
        <a href="#"><img class="image" src="../images/salesforce.png"></a>
        <p>Salesforce</p>
        <label for="salesforce">
          <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
        </label>
      </div>

      <div class="service1">
        <h1>Cloud 9</h1>
        <div class="cloud9">
            <a href="#"><img class="image" src="../images/cloud9.png"></a>
            <p>Cloud 9</p>
            <label for="cloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
            </label>
        </div>
      </div>

      <div class="service1">
        <h1>Amazon Web Services</h1>
        <a href="#"><img class="image" src="../images/aws.png"></a>
        <p>Amazon Web Services</p>
        <label for="aws">
          <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
        </label>
      </div>

      <div class="service1">
        <h1>Gmail</h1>
        <a href="#"><img class="image" src="../images/gmail.png"></a>
        <p>Gmail</p>
        <label for="gmail">
          <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
        </label>
      </div>
    </div>
    
    </form>
            
    <div align="center" class="addtocart-wrapper">        
    
      <form method="POST" action="ebus2.php">
                
        <label for="subtotal">
          <h2 id="subtotal-title">Subtotal</h2>
          <input type="text" name="subtotal" id="subtotal" value="" readonly/>
        </label>
              
        </br>
                
        <label for="discount">
          <h2 id="subtotal-title">Discount</h2>
          <input type="text" name="discount" id="discount" value="" readonly/>
        </label>
              
        </br>
                
        <label for="vat">
          <h2 id="subtotal-title">VAT</h2>
          <input type="text" name="vat" id="vat" value="" readonly/>
        </label>
              
        </br>
                
        <label for="total">
          <h2 id="subtotal-title">Total</h2>
          <input type="text" id="total" name="total" value="0.00" readonly/>
        </label>
      
        <br/>
                
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
              
      </form>
      
      </br>
      
      <button onClick="calcSub()" id="btnCalculate">Calculate Cost</button>
      
      </br>
      
      <a role="button" id="clearchoice" href="ebus1.php">Clear</a>
    
    </div>
    
    
    </body>
</html>