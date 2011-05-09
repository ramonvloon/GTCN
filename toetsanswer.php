<?php
	require "config.php";

	$host = $host . ":" . $port;
	mysql_connect($host, $username, $password)or die("Can't connect with mysql: ".mysql_error());
	mysql_select_db($db_name)or die("Database doesn't exist or isn't reachable");

	$cijfer = 0;
	$vragen = mysql_query("SELECT * FROM `$tbl_name`;");
	while ($fields = mysql_fetch_assoc($vragen)) {
		if (isset($_POST['vraag' . $fields['id']])) {
			if ($_POST['vraag' . $fields['id']] == $fields['seed']) {
				$cijfer += 0.5;
			} else {
				echo $fields['id'] . " --> FOUT XD";
			}
		} else {
			echo $fields['id'] . " --> niet gedefinieerd";
		}
	}
	echo "uw cijfer is: " . $cijfer;
?>