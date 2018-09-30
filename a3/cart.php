<?php
  
  session_start();
  include_once('tools.php');

  if (isset( $_POST['id'], $_POST['qty'], $_POST['option'])) { 
  	if ($_POST['qty']>0 && is_numeric($_POST['qty']))
  		{
 			$id = getID();
  			$isbn = $_POST['id'];
  			$qty = $_POST['qty'];
  			$option = $_POST['option'];
  			$_SESSION['cart'][$id]['isbn'] = $isbn;
  			$_SESSION['cart'][$id]['option'] = $option; 
			$_SESSION['cart'][$id]['qty'] = $qty;
  		} else {
  			back_to_referer();
  		}
  	}

  topModule();
?>
	<main>
		<table>
			<?php
				if(!empty($_SESSION['cart'])) {
					foreach ($_SESSION['cart'] as $key => $value) {
					echo "<tr><th>".get_name($value['isbn'])."</th><td> option</td><td>".$value['option'];
					echo "</td><td>quantity</td><td>".$value['qty']."</td>";
					echo "<td>total</td><td>$".get_price($value['isbn'],$value['option'],$value['qty']).".00</td>";
					?>
					<td><input type="submit" value="remove item" onclick="<?php //unset($key); header("refresh:0")?>" /></td></tr>
					<?php
					}
				}
			?>
		</table>
		<input type="submit" class="button" name="place order" value="Place Order"/>
		<input type="submit" value="Empty Cart" onclick="<?php //unset($_SESSION['cart']); header("refresh:0")?>"/>
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

  	$id = 0;

  	if (!empty($_SESSION['cart'])){
	  	foreach ($_SESSION['cart'] as $value) {
	  		$id++;
		}
	}
  	return $id;
  }

?>
