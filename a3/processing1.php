<?php
	session_start();

	unset($_SESSION['error']);
	$address_regex="#^[0-9A-Za-z /\-\.,']+$#";



	if(isset ($_POST['address'])) {


		if(preg_match($address_regex, $_POST['address'])) {
			$_SESSION['order']['address'] = $_POST['address'];
		} else {
			$_SESSION['error']['address'] = true;
		}

		echo $_POST['address'];
		echo $_SESSION['order']['address'];


   	}

  	?>