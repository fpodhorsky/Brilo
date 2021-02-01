<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<h2>Spojování stringu</h2>
	<p>Do pole se zapíšou slova z input a následně se pole prohledá, jestli obsahuje slovo "Brilo/brilo".</p> 
	<form method="POST">
		String 1: <input type="text" name="str1"><br>
		<br>String 2: <input type="text" name="str2"><br>
		<br><input type="submit" name="submit">
	</form>
	<br>
	
		<?php  
			if (!empty($_POST["submit"]) && !empty($_POST["str1"]) && !empty($_POST["str2"])) {
				$string = array($_POST["str1"], $_POST["str2"]);
					function combination ($string) {
						$spojeni = "$string[0]" . " " . "$string[1]";
					echo "<br><h3>Spojení: $spojeni</h3>";
					} 
					function hledejBrilo($string) {
						foreach ($string as $key => $value) {
							if ($value=="brilo" || $value=="Brilo") {
								echo "<br>Bylo nalezeno slovo Brilo!";
							} 
						}
					}
						combination($string);
						hledejBrilo($string);
				
					} elseif (!empty($_POST["submit"]) && !empty($_POST["str1"]) && empty($_POST["str2"]) || !empty($_POST["submit"]) && empty($_POST["str1"]) && !empty($_POST["str2"])) {
					echo "<br><h3>Minimálně 1 slovo nebylo zadáno.</h3>";
				}
		?>
</body>
</html>
