<?php
$cijfer = 0;
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
}
echo "uw cijfer is: ".$cijfer;
?>