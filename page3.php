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
<p><b>Programmeren:</b><code>
<p>Programmeren is niet anders dan het ontwerpen en uitvoeren van een code. 
Een code kan een paar instructies zijn waardoor een routine in gang word gezet 
door de computer om uiteindelijk een tekst of een uitkomst te laten zien.
Programmeren kan in verschillende manieren gestructureerd worden, namelijk: een aaneen schakeling van instucties, 
een keuze moment of een loop die steeds door blijft gaan.
De code is geschreven in normale taal, maar om het snappend te maken moet het door een compiler om het om te zetten naar nullen en eentjes. 
</code>

<br>
	<p><b>Statements:</b><code> 
	<p>In Java heb je verschillende statements. Zo bestaan er selections en iteration statements. De statements die onder selections vallen zijn: if-else en switch statements. De statements die onder iteration vallen zijn: while do-while en for statements. 
De if-else statement gebruik je ken met als dit gebeurd, dan komt dit als antwoord eruit. Een if else statement ziet er zo uit:
Het switch statement gebruik je als de invoer van een programma meerdere keuzes bevat. Stel dat in een programma je van 1 tot 5 kan invoeren en bij 1 gebeurt er iets anders dan bij 5, gebruik je het switch statement. Bij switch statement moet ook break worden toegevoegd. Dit moet omdat het anders doorblijft gaan. Een switch statement ziet er zo uit:
Bij iteration statements betekent dat het doorgaat. De while loop gebruik je als niet weet hoeveel uitkomsten van de code komt. Als de conditions dan fout is, stopt de loop en eindigd de code. Een while loop ziet er zo uit:
De do-while loop werkt precies hetzelfde als de while loop, alleen het verschil met de while loop is dat de code minimaal <b>een</b> keer moet zijn uitgevoerd ook al is de uitkomst van de fout is. Ook controleerd de do-while loop pas bij het eind van de methode of de uitkomst nog true is dit in tegenstelling met de normale while loop. Een do-while loop ziet er zo uit:
De for loop word gebruikt als het aantal keer dat het moet worden uitgevoerd bekent is. De for loop ziet er zo uit:
De beide soorten statements kunnen ook in elkaar worden gebruikt. Zo word er vaak gebruik gemaakt van een if-else statement in een for of een while loop.
In de code word ook vaak de woorden continue en break gebruikt. Continue word gebruikt als er een stuk code word overgeslagen als dat niet nodig is. Een break word gebruikt als een code moet stoppen na het behalen van een false.
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