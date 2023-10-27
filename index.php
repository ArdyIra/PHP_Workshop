<!DOCTYPE html>
<html>
<head>
<title>Da titul</title>
</head>

<body>
	<header>
		Hallo, freunde!
	</header>
	<?php
	// Enter your code here, enjoy!
	function daten(){
		date_default_timezone_set("Europe/Riga");
		$date = date('Y/m/d H:i:s');
		return $date;
	}
	?>
	<footer>
		<section id="copyright">
			&copy; Copyright 2023 iAmCopiedRight
			<br>
			<?php
				echo daten()
			?>
		</section>
	</footer>
</body>


</html>

