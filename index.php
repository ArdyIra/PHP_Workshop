<!DOCTYPE html>
<html>
<head>
<title>Da titul</title>
</head>

<body>
	<header>
		<h1>Hallo, freunde!</h1>
	</header>
    
	<?php
	function daten(){
    date_default_timezone_set("Europe/Riga");
		$date = date('Y/m/d H:i:s');
		return $date;
	}
    $name = $surname = $dateOfBirth = "";
	
    
    
    ?>
    
    <form method="post" action="">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <br><br>
  Surname: <input type="text" name="surname" value="<?php echo $surname;?>">
  <br><br>
  Date of Birth: <input type="text" name="date_of_birth" value="<?php echo $dateOfBirth;?>">

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
    
<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$dateOfBirth = $_POST['date_of_birth'];


echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $surname;
echo "<br>";
echo $dateOfBirth;
echo "<br>";
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

