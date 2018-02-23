<!DOCTYPE html>
<html>
    <head>
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

    <div class="heading">Services</div>
    
    <form method="POST" action="ebus2.php">
    
    <div align="center" class="services">
        <div class="service1">
          <h1>Salesforce</h1>
          <a href="#"><img class="image" src="http://www.bridgethegap.com/wp-content/uploads/2017/02/salesforce-best-practices.png"></a>
          <p>Salesforce</p>
          <label for="salesforce">
            <input type="radio" onClick="calcSub()" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
          </label>
        </div>

        <div class="service1">
          <h1>Cloud 9</h1>
          <a href="#"><img class="image" src="../images/cloud9.png"></a>
          <p>Cloud 9</p>
          <label for="cloud9">
              <input type="radio" onClick="calcSub()" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
          </label>
        </div>

        <div class="service1">
          <h1>Amazon Web Services</h1>
          <a href="#"><img class="image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/AWS_Simple_Icons_AWS_Cloud.svg/2000px-AWS_Simple_Icons_AWS_Cloud.svg.png"></a>
          <p>Amazon Web Services</p>
          <label for="aws">
              <input type="radio" onClick="calcSub()" id="aws" name="product" onClick="disablebtnProceed()"/>
          </label>
        </div>

        <div class="service1">
          <h1>Gmail</h1>
          <a href="#"><img class="image" src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Gmail_logo.max-2800x2800.png"></a>
          <p>Gmail</p>
          <label for="gmail">
              <input type="radio" onClick="calcSub()" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
          </label>
        </div>
    </div>
    
    </form>
            
    <div align="center" class="addtocart-wrapper">        
    
            <form method="POST" action="ebus2.php">
              
              
              
              <label for="total">
                subtotal
              <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
            
              </br>
              
              <label for="total">
                Discount
              <input type="text" id="discount" value="0.00" readonly/>
              </label>
            
              </br>
              
              <label for="total">
                Vat
              <input type="text" id="vat" value="0.00" readonly/>
              </label>
            
              </br>
              
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <a role="button" href="ebus1.php">Clear Choice</a>
    
    </div>
    
    
    </body>
</html>