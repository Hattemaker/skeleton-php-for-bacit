<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--OPPGAVE 3 -->
	 <form action="?" method="post">
	 	<label for="first">First Number: </label><br>
	 	<input type="number" name="first"><br><br>
	 	<label for="second">Second Number: </label><br>
	 	<input type="text" name="second"><br><br>
	 	<select name="operator" id="">
			<option>-- Velg Operator --</option>
			<option value="pluss">Pluss</option>
			<option value="minus">Minus</option>
			<option value="gjennomsnitt">Gjennomsnitt</option>
		</select>
	 	<input type="submit" name="submit" value="Submit"><br><br>
	 </form>
	 <?php 
	 	//$tall1 og $tall2 som er står i oppgaveteksten er endret til $result1 og $result2
	 	if (isset($_POST['submit'])){
	 		$result1 = $_POST['first'];
			$result2 = $_POST['second'];
			$operator = $_POST['operator'];

			switch ($operator) {
				case 'pluss':
					for ($i=0; $i < 11; $i++) { 
						echo "Resultatet blir: ";
						echo $result1 + $result2;
						echo "<br>";
						$result1++;
					}
					break;
				case 'minus':
					for ($i=0; $i < 11; $i++) { 
						echo "Resultatet blir: ";
						echo $result1 - $result2;
						echo "<br>";
						$result1++;
					}
					break;
				case 'gjennomsnitt':
					for ($i=0; $i < 11; $i++) { 
						echo "Resultatet blir: ";
						echo ($result1 + $result2)/2;
						echo "<br>";
						$result1++;
					}
					break;
				default:
					echo "You need to select an operator";
			}
	 	}
	 	#Kan $tall2/$result2 være en annen datatype?
	 	##Ja, det kan den. String konverteres til tall om du gir den tall.
	  ?>
	 
</body>
</html>