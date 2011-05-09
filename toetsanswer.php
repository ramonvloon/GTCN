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
/*
if (isset($_POST['vraag1'])) {
	switch ($_POST['vraag1']) {
		case "goed": {
			$cijfer =+ 1;
			break;
		}
	}
}
if (isset($_POST['vraag2'])) {
	switch ($_POST['vraag2']) {
		case "goed": {
			$cijfer += 1;
			break;
		}
	}
}
if (isset($_POST['vraag3'])) {
	switch ($_POST['vraag3']) {
		case "goed": {
			$cijfer += 1;
			break;
		}
	}
}
if (isset($_POST['vraag4'])) {
	switch ($_POST['vraag4']) {
		case "goed": {
			$cijfer += 1;
			break;
		}

	}
} */
?>