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

			$vragen = mysql_query("SELECT id,vraag, antwoord FROM $tbl_name");
			$row = mysql_fetch_array($vragen);
						
			if (isset($_POST['id'])) {
				switch ($_POST['id']) {
					// regel het antwoord dat gegeven is
				}
			} else {			
				if($row){
					echo $row[0], "- ", $row[1];
				}
				?>
				<br>
				<input type="radio" name="vraag1" value="goed"><?php echo $row[2];?><br>
				
				<input type="radio" name="vraag1" value="fout">Piet <br>
				<input type="radio" name="vraag1" value="fout">Puk<br>
					
				<?php
				$row = mysql_fetch_array($vragen);				
				if($row){
					echo $row[0], "- ", $row[1];
				}
				?>
				<br>
				<input type="radio" name="vraag2" value="goed"><?php echo $row[2]; ?><br>
				<input type="radio" name="vraag2" value="fout">Piet <br>
				<input type="radio" name="vraag2" value="fout">Puk<br>
					
				<?php
			}
			?>
			<input type="submit" value="Controleer antwoord"> 
		</form>
	</body>
</html> 