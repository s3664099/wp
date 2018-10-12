<?php
  
  session_start();
  include_once('tools.php');

  //if the cart is emplty, refers the user back to the previous screen
  if(empty($_SESSION['cart']))
  {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }

  topModule();
?>
    
    <main>
    	<form action="processing.php" method="post">
    		<div class="checkout">
	    		<span>Full Name</span><span><input type="text" name="name"></span>
			    <?php if(isset($_SESSION['error']['name'])) {
        			echo "<span class='checkout_error'>Name invalid</span>";
        		} ?>
        	</div>
        	<div class="checkout">
	    		<span>Address</span> 
	    		<span><textarea rows="3" column="40" name="address"></textarea></span>
		        <?php if(isset($_SESSION['error']['address'])) {
        		  echo "<span class='checkout_error'>Address invalid</span>";
        		}?>
        	</div>
        	<div class="checkout">
	    		<span>Email</span> <span><input type="email" name="email"></span>
          <?php if(isset($_SESSION['error']['email'])) {
            echo "<span class='checkout_error'>Email invalid</span>";
            }?>
	    	</div>
	    	<div class="checkout">
	    		<span>Phone Number</span><span><input type="text" name="phone_number"></span>
		        <?php if(isset($_SESSION['error']['phone_number'])) {
		          echo "<span class='checkout_error'>Phone number invalid</span>";
		      	}?>
		    </div>
		    <div class="checkout">
	    		<span>Credit Card</span><span><input type="text" name="credit_card" id="visa">
	    		<img id = "visa_pic" class = "hidden" src="../../media/visa.jpg"></span>
		        <?php if(isset($_SESSION['error']['credit_card'])) {
        		  echo "<span class='checkout_error'>Credit card number invalid</span>";
  				}?>
  			</div> 
  			<div class="checkout">
	    		<span>Expiry Month <select name="expiry_month">
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </span>
	    	</div>
	    	<div class="checkout">
		        <span>Expiry Year <select name="expiry_year">
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>              
              </select>
            </span>
		    </div>
		    <div>
		        <span class="error"><?php
    		      if (isset($_SESSION['error']['expiry'])) {
          			echo "<div class='checkout_error'><div>Expiry date less than one</div><div>month of current date</div></div>";
          		  }
        		?></span>
        	</div>
        	<div class="checkout_button">
	    		<input type="submit" value="Place Order">        		
        	</div>
    	</form>
    <script src="visa.js" type="text/javascript"></script>
    </main>

<?php
  
  //unsets the error array once the page has loaded.
  unset($_SESSION['error']);

  include_once('tools.php');

  bottomModule();
?>