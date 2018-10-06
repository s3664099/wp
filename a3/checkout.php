<?php
  
  //Javascript to confirm all parts of the form completed
  //Regex the form as well, and produce error message if not correct

  session_start();
  include_once('tools.php');

  topModule();
?>
    
    <main>
    	<form action="processing.php" method="post">
    		Full Name<input type="text" name="name">
        <?php if(isset($_SESSION['error']['name'])) {
          echo "Name invalid";} ?>
    		Address <input type="text" name="address">
        <?php if(isset($_SESSION['error']['address'])) {
          echo "Address invalid";
        }?>
    		Email <input type="email" name="email">
    		Phone Number<input type="text" name="phone_number">
        <?php if(isset($_SESSION['error']['phone_number'])) {
          echo "Phone number invalid";
          }?>
    		Credit Card<input type="text" name="credit_card">
        <?php if(isset($_SESSION['error']['credit_card'])) {
          echo "Credit card number invalid";
        }?>        
    		Expiry Month<input type="text" name="expiry_month">
        Expiry Year<input type="text" name="expiry_year">
    		<input type="submit" value="Place Order">
        <?php
          if(isset($_SESSION['error']['year'])) {
            echo "Year must for four digits";
          } elseif (isset($_SESSION['error']['date'])) {
            echo "invalid date";
          } elseif (isset($_SESSION['error']['expiry'])) {
            echo "Expiry date more than one month of current date";
          }
        ?>
    	</form>
    </main>

<?php
  
  unset($_SESSION['error']);

  include_once('tools.php');

  bottomModule();
?>