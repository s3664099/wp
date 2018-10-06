<?php
	require_once("book.php");

	$filename = "products.txt";
	$fp = fopen($filename, "r");
	flock($fp,LOCK_SH);
	$headings = fgetcsv($fp);
	$id=0;
	while($aLineOfCells = fgetcsv($fp,0,"\t")) {
	$records[]=$aLineOfCells;
	}

	foreach ($records as $key => $value) {

		$books[] = new Book($value[0],$value[1],$value[2],$value[3],$value[4],$value[5],$value[6], array($value[7] => $value[8], $value[9] => $value[10], $value[11] => $value[12], $value[13] => $value[14]), $value[15], $value[16]);
	}
	flock($fp, LOCK_UN);


?>