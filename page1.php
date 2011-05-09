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
<p><b>Programmeren:</b><code>
<p>Programmeren is niet anders dan het ontwerpen en uitvoeren van een code. 
Een code kan een paar instructies zijn waardoor een routine in gang word gezet 
door de computer om uiteindelijk een tekst of een uitkomst te laten zien.
Programmeren kan in verschillende manieren gestructureerd worden, namelijk: een aaneen schakeling van instucties, 
een keuze moment of een loop die steeds door blijft gaan.
De code is geschreven in normale taal, maar om het snappend te maken moet het door een compiler om het om te zetten naar nullen en eentjes. 
</code>

<br>
<p><b>Java:</b><code>
<p>Java werkt als volgt: Je hebt de source code (.java). 
Deze wordt vertaald naar nullen en eentjes door Javac.exe. 
Deze maakt er bytecode van wat een .class bestand word. 
En de bytecode kan worden uitgevoerd door een Java Virtual Machine.
Er zijn twee type van Java applicaties, namelijk een Applet en een Stand-alone. Een applet in de gebruikers browers te zien is, 
maar ook een connectie heeft met een server waar de informatie opstaat. 
Waar je een applet aan kan herkennen in de code aan init() methode. 
Een voorbeeld van een applet is: games op het Internet. 
Een Stand-alone applicatie is, de naam zegt het eigenlijk al, een applicatie die zonder browers werkt. 
Je kan het in de code herkennen als het start met een main() methode. Elk teken in Java heeft een betekenis. Dit maakt het lastig omdat als je code fout is, je alles na moet lopen om de fout eruit te halen. Zo kan een punt of een komma al de nodige fouten opleveren.
</code>
<br>
<p><b>Comments in Java:</b><code>
<p>Als je comments wilt toevoegen kan dat op twee verschillende manieren: met // en /* en je eindigt het met */. 
Als je // gebruikt is het voor een korte commentaar en als je /* hallo */  gebruikt is het voor meer commentaar leveren. 
</code>
<br>
<p><b>Body van Java:</b><code>
<p>De body begint met { en eindigt met }. In de body staan 1 of meer statements die eindigd met ;. 
Om wat laten op het scherm laten zien moet je System.out.println("hallo"). 
Als je dit invoert, zal op het scherm hallo worden gezet. 
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