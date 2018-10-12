<?php
  
  session_start();
  include_once('tools.php');

  $total =0;

  //Checks whether any product information has been passed through from the product page
  if (isset( $_POST['id'], $_POST['qty'], $_POST['option'])) { 

    //Confirms that the quantity is a numeral and greater than 0
  	if ($_POST['qty']>0 && is_numeric($_POST['qty']))
  		{

      //Places the product details into the cart
 			$orderNumber = getID();
  			$id = $_POST['id'];
  			$qty = $_POST['qty'];
  			$oid = $_POST['option'];
  			$_SESSION['cart'][$orderNumber]['isbn'] = $id;
  			$_SESSION['cart'][$orderNumber]['option'] = $oid; 
			$_SESSION['cart'][$orderNumber]['qty'] = $qty;
  		} else {

        //refers the user back if the qty field is 0 or not a number
  			back_to_referer();
  		}
  	}

  //Checks to see if the empty cart flag has been checked
  if (isset( $_POST['empty_cart'])) {

    //if so, empties the cart
    unset($_SESSION['cart']);
  }

  //checks to see if the remove item flag has been checked
  if (isset( $_POST['remove_item'])) {

    //if so, removes that particular item from the cart
    $order = $_POST['order'];
    unset($_SESSION['cart'][$order]);

    //refreshes the page
    header("refresh:0");
  }

  topModule();
?>
	<main>
		<table id="cart">
      <tr>
        <th></th>
        <th>Name</th>
        <th>Option</th>
        <th>Qty</th>
        <th>Unit Price</th>
        <th>Sub Total</th>
        <th></th>
      </tr>
			<?php
				if(!empty($_SESSION['cart'])) {
        	foreach ($_SESSION['cart'] as $key => $value) {
					$orderPrice = get_price($value['isbn'],$value['option'],$value['qty']);
          $_SESSION['cart'][$key]['sub_total'] = $orderPrice;
          $_SESSION['cart'][$key]['unit_price'] = $orderPrice/$value['qty'];
					echo "<tr><th>".$key."</th><th>".get_name($value['isbn'])."</th><td>".$value['option'];
					echo "</td><td>".$value['qty']."</td><td>$".$orderPrice/$value['qty'].".00</td>";
					echo "<td>$".$orderPrice.".00</td>";
					$total += $orderPrice;
					?>
					<td class="remove_button">
             <form action="cart.php" method="post" id="remove_button">
              <?php
                //remove item button
                echo "<input type=\"hidden\" name=\"order\" value=\"".$key."\">";
              ?>
              <input type="submit" name="remove_item" value="Remove"/>
            </form>
          </td></tr>
					<?php
					}
          ?>
          <tr><td colspan="4"></td><td>Total Price</td><td><?php echo "$".$total.".00"; ?></td><td></td>
          <?php
				}
			?>
		</table>

    <!-- Place Order and Empty Cart buttons-->
    <div class="cart_button">
      <form action="checkout.php" method="post">
	   	  <input type="submit" class="button" name="place order" value="Place Order"/>
      </form>
      <form action ="cart.php" method="post">
  		  <input type="submit" name="empty_cart" value="Empty Cart"/>
      </form>
    </div>
	</main>
<?php
  
  include_once('tools.php');

  bottomModule();

  //Gets the name of the product from the object based on the isbn (or product id)
  function get_name($isbn){
  	
  	include('set_books.php');

  	foreach ($books as $value) {
  		if ($isbn==$value->get_isbn()) {
  			return $value->get_name();
  		}
  	}

  }

  //Returns the price of the product based on the isbn and the option
  function get_price($isbn, $option, $qty) {

  	include('set_books.php');

  	foreach ($books as $value) {
  		if ($isbn==$value->get_isbn()) {

        //returns the price multiplied by the quantity
  			return $value->get_option($option)*$qty;
  		}
  	}

  }

  //function to send the user back to the previous page
  function back_to_referer() {
  	// https://stackoverflow.com/questions/23917152/redirect-back-to-previous-page-in-php
  	header('Location: ' . $_SERVER['HTTP_REFERER']);
  }

  //Generates an order id for the product
  function getID() {

  	$orderNo = 0;

  	if (!empty($_SESSION['cart'])){
 		sort($_SESSION['cart']);
	  	foreach ($_SESSION['cart'] as $key => $value) {

        if ($key == $orderNo)
        {
          $orderNo++;
        }
		}
	}
  	return $orderNo;
  }

?>
