<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Enkel test med tabell</title>
		</head>
		<table border="1">
		<tr>
		<th>Navn</th>
		<th>Alder</th>
		</tr> <?php $navn = "Magnus"?>
		<tr> <?php $alder = "25" ?>
		<td><?php echo $navn; ?></td>
		<td><?php echo $alder; ?></td>
		</tr> <?php $navn = "Elliot Alderson"?>
		<tr> <?php $alder = "28" ?>
		<td><?php echo $navn; ?></td>
		<td><?php echo $alder; ?></td>
		</tr>
		</table>
	<body>
	</body>
</html>