<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--OPPGAVE 1 -->
	<form action="?" method="post">
		<label for="fname">First Name: </label><br>
		<input type="text" id="fname" name="fname"> <br><br>
		<label for="age">Age: </label><br>
		<input type="text" id="age" name="age"><br><br>
		<input type="submit" name="submit" value="Submit"><br><br>
	</form>
	<?php 
	if (isset($_POST['submit'])) {
		$firstname = $_POST['fname'];
		$age = $_POST['age'];
	 	
	 	if ($age < 18) {
	 		echo "$firstname er $age og dermed ikke myndig.</br>";
	 	}
	 	else {
	 	 	echo "$firstname er $age og dermed myndig.</br>";
	 	}

	 	switch ($age) {
	 		case $age >= 13 && $age <=19:
	 			echo "$firstname er en tenåring. </br>";
	 			break;
	 		case $age > 20:
	 			echo "$firstname kan lovlig handle høyere enn 20% på polet.</br>";
	 			break;
	 	}
	 } ?>


	 <br><br><br>
	 <!--OPPGAVE 2 -->
	 <?php 
	 	$sum = 0;
	 	for ($i = 0; $i < 10; $i++){
	 		echo "$i <br>";
	 		$sum = $sum + $i;
	 	}
	 	echo "<br> Juhuu, ferdig å telle! Summen av tallene ble: $sum";
	  ?>


	  <br><br><br>

</body>
</html>