<?php
  
  //Javascript to confirm all parts of the form completed
  //Regex the form as well, and produce error message if not correct

  session_start();
  include_once('tools.php');

  topModule();
?>
    
    <main>
    	<form action="processing.php" method="post">
    		<div>
	    		Full Name<input type="text" name="name">
			    <?php if(isset($_SESSION['error']['name'])) {
        			echo "Name invalid";
        		} ?>
        	</div>
        	<div>
	    		Address <input type="text" name="address">
		        <?php if(isset($_SESSION['error']['address'])) {
        		  echo "Address invalid";
        		}?>
        	</div>
        	<div>
	    		Email <input type="email" name="email">
	    	</div>
	    	<div>
	    		Phone Number<input type="text" name="phone_number">
		        <?php if(isset($_SESSION['error']['phone_number'])) {
		          echo "Phone number invalid";
		      	}?>
		    </div>
		    <div>
	    		Credit Card<input type="text" name="credit_card" id="visa">
	    		<img id = "visa_pic" class = "hidden" src="../../media/visa.jpg">
		        <?php if(isset($_SESSION['error']['credit_card'])) {
        		  echo "Credit card number invalid";
  				}?>
  			</div> 
  			<div>
	    		Expiry Month<input type="text" name="expiry_month">
	    		<?php if(isset($_SESSION['error']['date'])) {
          			echo "invalid date";}
	    		?>
	    	</div>
	    	<div>
		        Expiry Year<input type="text" name="expiry_year">
		        <?php if(isset($_SESSION['error']['year'])) {
            		echo "Year must for four digits";}  
		        ?>
		    </div>
		    <div>
		        <?php
    		      if (isset($_SESSION['error']['expiry'])) {
          			echo "Expiry date more than one month of current date";
          		  }
        		?>
        	</div>
        	<div>
	    		<input type="submit" value="Place Order">        		
        	</div>
    	</form>
    <script src="visa.js" type="text/javascript"></script>
    </main>

<?php
  
  unset($_SESSION['error']);

  include_once('tools.php');

  bottomModule();
?>