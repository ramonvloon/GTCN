<html>
	<head>
		<title>Java Toets</title>
	</head>
	<body>
		<script type="text/javascript">
			function atLeastOneRadio() {
				return ($$('input[type=radio]:checked').size() > 0);
			}
		</script>
	<form name="form1" action="toetsanswer.php" method="POST">
		<?php
			require "config.php";

			$host = $host . ":" . $port;
			mysql_connect($host, $username, $password)or die("Can't connect with mysql: ".mysql_error());
			mysql_select_db($db_name)or die("Database doesn't exist or isn't reachable");

			$counter = 1;
			$vragen = mysql_query("SELECT * FROM `$tbl_name`;");
			while ($fields = mysql_fetch_assoc($vragen)) {
				echo $counter . "- " . $fields['vraag'];
				$seed = $fields['seed'];
				$random1 = rand(11111, 99999);	//	 random nummer voor fout1
				while ($random1 == $seed) {	//	als ze gelijk zijn gaan we net zolang nieuwe maken tot ze het niet meer zijn (rekening houden met worst case)
					$random1 = rand(11111, 99999);
				}
				$random2 = rand(11111, 99999);	//	 random nummer voor fout2
				while ($random1 == $random2) {	//	 als ze gelijk zijn gaan we net zolang nieuwe maken tot ze het niet meer zijn (rekening houden met worst case)
					$random2 = rand(11111, 99999);
					while ($random2 == $seed) {	// Daarna mag het OOK niet gelijk zijn aan SEED
						$random2 = rand(11111, 99999);
					}
				}
				echo '<br>';
				$random3 = rand(1, 6);
				$antwoord = 
				switch($random3) {
					case 1: {	// Goed, Fout1, Fout2
						echo getAntwoordCode($fields);
						echo getFout1Code($fields, $random1);
						if ($fields['fout2'] != "") {	// Als het veld niet leeg is (oftewel er zijn 3 antwoorden, 1 goede en 2 foute)
							echo getFout2Code($fields, $random2);
						}
						break;
					}
					case 2: {	// Goed, Fout2, Fout1
						echo getAntwoordCode($fields);
						if ($fields['fout2'] != "") {	// Als het veld niet leeg is (oftewel er zijn 3 antwoorden, 1 goede en 2 foute)
							echo getFout2Code($fields, $random2);
						}
						echo getFout1Code($fields, $random1);
						break;
					}
					case 3: {	// Fout1, Goed, Fout2
						echo getFout1Code($fields, $random1);
						echo getAntwoordCode($fields);
						if ($fields['fout2'] != "") {	// Als het veld niet leeg is (oftewel er zijn 3 antwoorden, 1 goede en 2 foute)
							echo getFout2Code($fields, $random2);
						}
						break;
					}
					case 4: {	// Fout1, Fout2, Goed
						echo getFout1Code($fields, $random1);
						if ($fields['fout2'] != "") {	// Als het veld niet leeg is (oftewel er zijn 3 antwoorden, 1 goede en 2 foute)
							echo getFout2Code($fields, $random2);
						}
						echo getAntwoordCode($fields);
						break;
					}
					case 5: {	// Fout2, Fout1, Goed
						if ($fields['fout2'] != "") {	// Als het veld niet leeg is (oftewel er zijn 3 antwoorden, 1 goede en 2 foute)
							echo getFout2Code($fields, $random2);
						}
						echo getFout1Code($fields, $random1);
						echo getAntwoordCode($fields);
						break;
					}
					case 6: {	// Fout2, Goed, Fout1
						if ($fields['fout2'] != "") {	// Als het veld niet leeg is (oftewel er zijn 3 antwoorden, 1 goede en 2 foute)
							echo getFout2Code($fields, $random2);
						}
						echo getAntwoordCode($fields);
						echo getFout1Code($fields, $random1);
						break;
					}
					default: {
						echo "Error while loading questions, we've got a random option nr that shouldn't occur: " . $random3;
					}
				}
				$counter++;
			}
			?>
			<input type="submit" value="Controleer antwoord">
		</form>
	</body>
</html>
<?php
function getAntwoordCode($fields) {
	return '
		<input type="radio" name="vraag'.$fields['id'].'" value="'.$fields['seed'].'">'.$fields['antwoord'].'
		<br>
	';
}
function getFout1Code($fields, $random) {
	return '
		<input type="radio" name="vraag'.$fields['id'].'" value="'.$random.'">'.$fields['fout1'].'
		<br>
	';
}
function getFout2Code($fields, $random) {
	return '
		<input type="radio" name="vraag'.$fields['id'].'" value="'.$random.'">'.$fields['fout2'].'
		<br>
	';
}
?>