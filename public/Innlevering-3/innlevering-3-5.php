<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- OPPGAVE 4 -->
	<?php 
		$name = "Magnus";
		$time = date("H");
		date_default_timezone_set ("Indian/Reunion" );
	
		if (($time > 4) && ($time < 10)) {
			echo "Good Morning, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo date("H:i");
		}
		if (($time > 10) && ($time < 14)) {
			echo "Good Day, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo date("H:i");
		}
		if (($time > 14) && ($time < 18)) {
			echo "Good Afternoon, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo date("H:i");
		}
		if (($time > 18) && ($time < 20)) {
			echo "Good Evening, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo date("H:i");
		}
		if (($time > 20) && ($time < 04)) {
			echo "Good Afternoon, ";
	 		echo $name;
	 		echo "<br>The time is now: ";
	 		echo date("H:i");
		}
	//kunne vel egentlig ha brukt switch case her, men jeg 
	//kalte variabelen $name istedenfor $fornavn
	//tok bare noen vilkårlige tidsperioder og satt det som morgen, ettermiddag, kveld osv.
 ?>
</body>
</html>