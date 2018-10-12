<?php
  
  //Javascript to confirm all parts of the form completed
  //Regex the form as well, and produce error message if not correct

  session_start();
  include_once('tools.php');

  topModule();
?>
    
    <main>
    	<form action="processing1.php" method="post">

        	<div class="checkout">
	    		<span>Address</span> 
	    		<span><textarea rows="3" column="20" name="address">
	    		</textarea></span>
		        <?php if(isset($_SESSION['error']['address'])) {
        		  echo "<span class='checkout_error'>Address invalid</span>";
        		}?>
        	</div>
        	<div class="checkout_button">
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