<?php
  
  session_start();
  include_once('tools.php');

  $total =0;

  if (isset( $_POST['id'], $_POST['qty'], $_POST['option'])) { 
  	if ($_POST['qty']>0 && is_numeric($_POST['qty']))
  		{
 			$orderNumber = getID();
  			$id = $_POST['id'];
  			$qty = $_POST['qty'];
  			$oid = $_POST['option'];
  			$_SESSION['cart'][$orderNumber]['isbn'] = $id;
  			$_SESSION['cart'][$orderNumber]['option'] = $oid; 
			$_SESSION['cart'][$orderNumber]['qty'] = $qty;
  		} else {
  			back_to_referer();
  		}
  	}

  if (isset( $_POST['empty_cart'])) {
    unset($_SESSION['cart']);
  }

  if (isset( $_POST['remove_item'])) {
    $order = $_POST['order'];
    unset($_SESSION['cart'][$order]);
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
        <th>Sub Total</th>
        <th></th>
      </tr>
			<?php
				if(!empty($_SESSION['cart'])) {
        	foreach ($_SESSION['cart'] as $key => $value) {
					$orderPrice = get_price($value['isbn'],$value['option'],$value['qty']);
          $_SESSION['cart'][$key]['sub_total'] = $orderPrice;
					echo "<tr><th>".$key."</th><th>".get_name($value['isbn'])."</th><td>".$value['option'];
					echo "</td><td>".$value['qty']."</td>";
					echo "<td>$".$orderPrice.".00</td>";
					$total += $orderPrice;
					?>
					<td>
            <form action="cart.php" method="post">
              <?php
                echo "<input type=\"hidden\" name=\"order\" value=\"".$key."\">";
              ?>
              <input type="submit" name="remove_item" value="remove item"/>
            </form>
          </td></tr>
					<?php
					}
          ?>
          <tr><td colspan="3"></td><td>Total Price</td><td><?php echo "$".$total.".00"; ?></td><td></td>
          <?php
				}
			?>
		</table>
    <form action="checkout.php" method="post">
	   	<input type="submit" class="button" name="place order" value="Place Order"/>
    </form>
    <form action ="cart.php" method="post">
  		<input type="submit" name="empty_cart" value="Empty Cart"/>
    </form>
	</main>
<?php
  
  include_once('tools.php');

  bottomModule();

  function get_name($isbn){
  	
  	include('set_books.php');

  	foreach ($books as $value) {
  		if ($isbn==$value->get_isbn()) {
  			return $value->get_name();
  		}
  	}

  }

  function get_price($isbn, $option, $qty) {

  	include('set_books.php');

  	foreach ($books as $value) {
  		if ($isbn==$value->get_isbn()) {
  			return $value->get_option($option)*$qty;
  		}
  	}

  }

  function back_to_referer() {
  	// https://stackoverflow.com/questions/23917152/redirect-back-to-previous-page-in-php
  	header('Location: ' . $_SERVER['HTTP_REFERER']);
  }

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
