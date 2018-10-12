<?php
  session_start();

?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Dusty Books">
    <meta name="keywords" content="books, 2nd hand, literature, reading">
    <meta name="author" content="David A Sarkies">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/reciept.css">
  </head>

  <body>
  	<header>
		<img src="../../media/DustyBooksTitle.jpg" alt="Dusty Books">
		<h1>TAX INVOICE</h1>
		<h2>ABN: 32 675 778 775</h2>
	</header>
	<main>
		<table>
			<div class="details">
			<?php
				echo "Name: ".$_SESSION['order']['name']."<br>";
				echo "Address: ".$_SESSION['order']['address']."<br>";
				echo "Email: ".$_SESSION['order']['email']."<br>";
				echo "Phone: ".$_SESSION['order']['phone_number']."<br>";
			?>
			</div>
			<tr>
				<th>Name</th>
				<th>Option</th>
				<th>Qty</th>
				<th>Unit Cost</th>
				<th>Sub-total</th>

		<?php
			$total = 0;
			foreach ($_SESSION['cart'] as $key => $value) {
				$orderPrice = get_price($value['isbn'],$value['option'],$value['qty']);
          		$_SESSION['cart'][$key]['sub_total'] = $orderPrice;
				echo "<tr><th>".get_name($value['isbn'])."</th><td>".$value['option'];
				echo "</td><td>".$value['qty']."</td>";
				echo "<td>$".$orderPrice/$value['qty'].".00</td>";
				echo "<td>$".$orderPrice.".00</td>";
				$total += $orderPrice;
			}
			$gst = $total/10;
          ?>
        <tr><td colspan="3"></td><th>GST</th><td><?php echo "$".number_format((float)$gst,2,'.',''); ?></td>
      	<tr><td colspan="3"></td><th>Total Price</th><td><?php echo "$".$total.".00"; ?></td>
      </table>
	</main>
  </body>

  <?php

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
  ?>