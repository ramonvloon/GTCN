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
			
		for ($count = 1; $count < mysql_num_rows(mysql_query("SELECT vraag FROM $tbl_name")); $count++; ) {
			if ($_POST['vraag' . $count] == "goed") {
				$cijfer += 0.5 ;
			}
		}
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

echo "uw cijfer is: ".$cijfer;
?>