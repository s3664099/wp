<?php
	$filename = "products.txt";
	$fp = fopen($filename, "r");
	flock($fp,LOCK_SH);
	$headings = fgetcsv($fp);
	$id=0;
	while($aLineOfCells = fgetcsv($fp,0,"\t")) {
	$records[]=$aLineOfCells;
	}


	foreach ($records as $value) {

		echo $value[0]." ".$value[1]." ".$value[2]."<br>";


	}



	echo "<br>";


	flock($fp,LOCK_UN);
	fclose($fp);

?>