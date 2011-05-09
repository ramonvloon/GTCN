<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta content="yes" name="mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="developer-style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="developer-functions.js" type="text/javascript"></script>
<title>SSS301 web app</title>
<meta content="keywords" name="keywords" />
<meta content="uitleg van de pagina" name="description" />
</head>

<body>

<div id="topbar">
            <div id="duoselectionbuttons">
                <a href="lessen.php">Lessen</a>
            </div>    
        </div>
    <?
    session_start();
	if (isset($_SESSION['username'])) {
	?>
    <div id="rightnav"><a href="logout.php">Logout</a></div>
    <?}
	else{ ?>
	<div id="duoselectionbuttons"><a href="index.php">Homepage</a><a href="registreer.php">Registreer</a>
    <?php }?>
    </div>
</div>
</div>

<div id="content">
<?php
if (isset($_SESSION['username'])) {
?>
<li class="menu"><a href="page1.php"><span class="name">Les 1 -Introducing Java-</span><span
class="arrow"> </span></a></li>
<li class="menu"><a href="page2.php"><span class="name">Les 2 -Variables-</span><span
class="arrow"> </span></a></li>
<li class="menu"><a href="page3.php"><span class="name">Les 3 -Loops-</span><span
class="arrow"> </span></a></li>
<li class="menu"><a href="page4.php"><span class="name">Les 4 -Object Oriented Program-</span><span
class="arrow"> </span></a></li>
<li class="menu"><a href="page5.php"><span class="name">Les 5 -Arrays-</span><span
class="arrow"> </span></a></li>


<br><br><br><br>
<?php } else{ ?>
Please <a href="registreer.php">Register</a> or <a href="loginscherm.php">Login</a>
 <?php } ?>
</div>

<div id="footer">
	<a class="noeffect" href="feedback.php">stuur ons feedback</a>
    <br><Br>
	<a class="noeffect" href="over.html">gemaakt door SSS301</a></div>
</body>

</html>
