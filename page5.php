<html>
<head>
<meta content="yes" name="mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="developer-style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="developer-functions.js" type="text/javascript"></script>
<title>SSS301 web app --Frontpage--</title>
<meta content="keywords" name="keywords" />
<meta content="uitleg van de pagina" name="description" />
</head>
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<body>

<div id="topbar">
            <div id="duoselectionbuttons">
                <a href="javalessen.php">Terug</a>
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
<div id="content">
<?php
if (isset($_SESSION['username'])) {
?>
<p><br><code><BLOCKQUOTE>
	<p><b>Arrays:</b>
	<p>Een array bestaat uit een lijst van elementen.
De variabele in een array moeten dezelfde data type hebben.
Het maken van een array in java gaat als volgt:
<p>Plaatje: int[] myArray; 
Dit plaatje hierboven maakt een array van integers.

<p><b>Informatie in arrays zetten</b>
<p>Informatie toevoegen in een array gaat als volgt: 
<p>myArray<b>[0]</b> = 10;
<p>myArray[1] = 15;
<p>myArray[2] = 20;
<p>myArray[3] = 25;
<p>myArray[4] = 30;
<p>myArray[5] = 35;

<p>De array begint bij 0. Als je 5 arrays hebt, is deze van 0 t/m 4. Als je informatie wilt toevoegen in array[5] krijg je een ArrayIndexOutOfBoundsException. 
Je kunt de inhoud van de array laten zien doormiddel van: 
<p>Plaatje:System.out.println(myArray[0]);

<p>Je kan ook meerdere dimensionale arrays hebben. Zo heb je 2 of meerdere dimensionale arrays. 
<p><b>2 dimensionale</b>
int[][] 2array = new int [5][2];
<p><b>3 dimensionale</b>
int [][][] 3array = new int [1][2][3];
<p>Je kunt ook een array zo maken:
<p>int[] grades = {1,2,3,4,5};
</code></BLOCKQUOTE>

<?php } else{ ?>
Please <a href="registreer.php">Register</a> or <a href="loginscherm.php">Login</a>
 <?php } ?>
</div>
</div>

<div id="footer">
	<a class="noeffect" href="over.html">gemaakt door SSS301</a></div>
</body>

</html>