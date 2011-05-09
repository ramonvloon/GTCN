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
			// Settings 
			$host="localhost";
			$port="8006";
			$username="sss301";
			$password="team301";
			$db_name="toets";
			$tbl_name="toets";
			// End of settings

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
				echo '<input type="radio" name="vraag'.$fields['id'].'" value="'.$seed.'">'.$fields['antwoord'];
				echo '<br>';
				echo '<input type="radio" name="vraag'.$fields['id'].'" value="'.$random1.'">'.$fields['fout1'];
				echo '<br>';
				if ($fields['fout2'] != "") {	// Als het veld niet leeg is (oftewel er zijn 3 antwoorden, 1 goede en 2 foute)
					echo '<input type="radio" name="vraag'.$fields['id'].'" value="'.$random2.'">'.$fields['fout2'];
					echo '<br>';
				}
				$counter++;
			}
			?>
			<input type="submit" value="Controleer antwoord"> 
		</form>
	</body>
</html> 