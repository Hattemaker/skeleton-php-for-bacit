<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- OPPGAVE 4 -->
	<form action="?" method="post">
		<label for="uname">Name: </label>
		<input type="text" name="uname"><br>
		<label for="add">Address: </label>
		<input type="text" name="add"><br>
		<label for="tlf">Phone Number: </label>
		<input type="text" name="tlf"><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
		$uname = $_POST['uname'];
		$add = $_POST['add'];
		$tlf = $_POST['tlf'];


		if (isset($_POST['submit'])){
			$var = false;
			if (empty($uname)){
				echo "Uname er mangler <br>";
				$var = true;
			}
			if (empty($add)){
				echo "Add er mangler<br>";
				$var = true;
			}
			if (empty($tlf)){
				echo "Tlf mangler<br>";
				$var = true;
			}
			
			if ($var == false){
				echo "Alt er ok!";
			}
		}
		 ?>
</body>
</html>