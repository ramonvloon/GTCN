<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta content="yes" name="mobile-web-app-capable" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
<p><b>Variabelen en het declareren</b><code>
<p>Je hebt verschillende primitieve types in Java. Je hebt byte, short, int, long, float, double, char en boolean. Byte word gebruikt voor kleine nummers, zoals 1 t/m 9. Short word gebruikt voor korte integer (int)  te gebruiker. Int kan je een nummer of cijfers aan een variabele toekennen. Bij long kan je een grotere int toekennen dan bij een int of een short. Double wordt gebruikt om een cijfer met een komma getal te gebruiken met meerdere cijfers achter te komma. Een char is voor cijfers. Boolean word gebruikt om een keuze voor te stellen, met true of false. Float is voor een getal met &#233&#233n nummer achter de komma. 

<p>Een string in Java is een tekst of meerdere charakters wat in java zit. Het word gemaakt voor &#34;hallo&#34; te gebruiken en het hoeft geen primitieve type te zijn.

<p>Om variabele te gebruiken moet je deze eerst <b>declareren</b>. Een voorbeeld van een decleratie is x=4;. Nu word in alles waar een x in staat een 4. Je mag ook meerdere variabele in &#233&#233n zin toekennen, zoals double length = 3.14, width 5.0, height = 2.1;. Nu zijn er waarde toegevoegd tot de variabele length, heigth en width.
</code>

<p><b>Operatoren</b><code>
<p>Je hebt <b>operatoren</b> die werken in Java. Deze operatoren zijn: + , - , / , * en %. Bijvoorbeeld 3+1=4 , 3-1=2 , 3/1=3 , 3*1=3 en 3%1=0. Deze worden ook gebruikt in de wiskunde. Het % teken betekend modelo. Dat is het restgetal van een deling. Zo is 4%3 =1 en 5%3 =2. Ook kan je x=x+1 korter schrijven als x++. Geldt ook voor x=x-1 :--x. 
Ook word er gebruik gemaakt van <, >, <=, >=, ==, !=. Deze tekens zijn voor het aangeven voor kleiner dan (<), groter dan (>), kleiner of gelijk aan (<=), groter of gelijk aan(>=), gelijk (==) of niet gelijk (!=).
<p>Logische operatoren werken als volgt:
<table border="4">             
<tr><th>P		<th>Q		<th>P&Q		<th>P|Q		<th>P^Q		<th>!p
<tr><th>		<th>		<th>AND	 	<th>OR		<th>XOR		<th>NOT
<tr><td>True	<td>True	<td>True	<td>True	<td>False	<td>False
<tr><td>True	<td>False	<td>False	<td>True	<td>True	<td>False
<tr><td>False 	<td>True	<td>False	<td>True	<td>True	<td>True
<tr><td>False	<td>False	<td>False	<td>False	<td>False	<td>True
</table>
</code>

<p><b>Schoon programmeren</b><code>
<p>Als je aan het programmeren bent en je opent een {, sluit dan ook meteen af met een }. Geldt ook met (), of met &#39&#39, &#34;&#34; of andere tekens die je moet gebruiken om het te sluiten. Zo ben je altijd verzekerd dat je nergens een foutje heb gemaakt in het maken van de code. Gebruik ook namen die meteen tot je verbeelding spreken. Niet A,B,C maar lengte, breedte en hoogte.
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