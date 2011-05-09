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
			$vragen = mysql_query("SELECT id,vraag, antwoord FROM $tbl_name");
			while ($fields = mysql_fetch_assoc($vragen)) {
				echo $fields[0], "- ", $fields[1];
				?>
				<br>
				<input type="radio" name="vraag<?php echo $counter; ?>" value="goed"><?php echo $fields[2];?><br>			
				<input type="radio" name="vraag<?php echo $counter; ?>" value="fout"><?php echo $fields[3];?><br>
				<input type="radio" name="vraag<?php echo $counter; ?>" value="fout"><?php echo $fields[4];?><br>					
				<?php
				$counter++;
			}
			?>
			<input type="submit" value="Controleer antwoord"> 
		</form>
	</body>
</html> 