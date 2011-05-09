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
<p><BLOCKQUOTE>
<br>
	<p><b>Object Oriented Program:</b><code> 
	<p>In een object oriented program werken verschillende objecten samen en de status ervan is gedefineerd in de eigenschappen ervan. Een object moet voldoen aan de naam die de methode meteen uitlegt. Ook moet het een hergebruikte code kunnen zijn. 
In een object zit(ten) classe(n). Deze defineert hoe een object is gemaakt. Een classe bevat een attribuut of meerdere attributen voor de informatie. Zoals de datatype waar in het word gebruikt en de status van een object word daarin gezet. Ook bevat een classe een methode(s) hoe de classe werkt. Zo staat in de methode de type waarin de data staat, de naam, de parameters en de body. Ook staat er in een methode altijd een System.out.println(). Zo heb je een classe hond, die meerdere objecten bevat.
Een constructor maakt een object en wat daarin komt te staan. Als je een nieuw object wilt maken moet je voor de constructor new zetten. Zo word er een constructor gemaakt:
Als je een object maakt, zal deze worden opgeslagen in het geheugen van de computer. 
</p>
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