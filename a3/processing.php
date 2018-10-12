<?php
	session_start();

	unset($_SESSION['error']);
	$name_regex="#^[a-zA-Z \-.']{1,100}$#";
	$mobile_regex="#^(\(04\)|04|\+614)( ?\d){8}$#";
	$address_regex="#^[0-9a-zA-Z \/\-\.,'\n]+#";
	$visa_regex="#^(3|4|5)( ?\d){11,18}$#";

	if(isset ($_POST['name'], $_POST['address'], $_POST['email'], $_POST['phone_number'], $_POST['credit_card'], $_POST['expiry_month'], $_POST['expiry_year'])) {

		$day = 1;
		$month = intval($_POST['expiry_month']);
		$year = intval($_POST['expiry_year']);
		$minexp = time()+(28*24*60*60);
		if ($month == 12) {
			$month == 1;
			$year++;
		} else {
			$month++;
		}

 		$_SESSION['order']['date'] = date("d/m/Y");

		$expiry = mktime(0,0,0,$month,$day,$year);
		if ($expiry < $minexp)
		{
			$_SESSION['error']['expiry']=true;
		}
		

		if(preg_match($name_regex, $_POST['name'])) {
			$_SESSION['order']['name'] = htmlspecialchars($_POST['name']);
		} else {
			$_SESSION['error']['name'] = true;
		}

		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$_SESSION['order']['email'] = $_POST['email'];
		} else {
			$_SESSION['error']['email'] =true;
		}

		if(preg_match($mobile_regex, $_POST['phone_number'])) {
			$_SESSION['order']['phone_number'] = $_POST['phone_number'];
		} else {
			$_SESSION['error']['phone_number'] = true;
		}

		if(preg_match($address_regex, $_POST['address']))
		{
			$_SESSION['order']['address'] = htmlspecialchars($_POST['address']);
		} else {
			$_SESSION['error']['address'] =true;		
		}

		if(!preg_match($visa_regex, $_POST['credit_card'])) {
			$_SESSION['error']['credit_card'] = true;
		}

		if (isset ($_SESSION['error'])) {
			back_to_referer();
		} else {
			fulfill_order();
		}


	} else {
		back_to_referer();
	}


	function back_to_referer() {
  	// https://stackoverflow.com/questions/23917152/redirect-back-to-previous-page-in-php
  	header('Location: ' . $_SERVER['HTTP_REFERER']);
  	}

  	function fulfill_order() {
  		$filename = "orders.txt";
  		$fp = fopen($filename,"a");
  		flock($fp, LOCK_EX);
  		foreach ($_SESSION['cart'] as $value) {
  			$_SESSION['order']['pid'] = $value['isbn'];
  			$_SESSION['order']['oid'] = $value['option'];
  			$_SESSION['order']['qty'] = $value['qty'];
  			$_SESSION['order']['unit_price'] = $value['unit_price'];
  			$_SESSION['order']['sub_total'] = $value['sub_total'];
  			fputcsv($fp, $_SESSION['order'], "\t");
  		}
  		flock($fp, LOCK_UN);
  		fclose($fp);
 		header('Location: reciept.php');
   	}

  	?>