<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<h2>Porovnání</h2>
	<form method="POST">
		Číslo 1: <input type="text" name="num1"><br>
		<br>Číslo 2: <input type="text" name="num2"><br>
		<br><input type="submit" name="submit" value="Porovnat">
	</form>
	<?php
		if (!empty($_POST["submit"])) {
			$comparison = array($_POST["num1"], $_POST["num2"] );
				if ($comparison[0] > $comparison[1]) {
					echo "<br><h3>Číslo 1 je větší, než číslo 2.</h3>";
				} elseif ($comparison[0] == $comparison[1]) {
					echo "<br><h3>Číslo 1 je rovno číslu 2.</h3>";
				} else {
					echo "<br><h3>Číslo 2 je větší, než číslo 1.</h3>";
				}
		}
			
	?>
</body>
</html>
