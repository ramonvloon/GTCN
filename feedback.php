<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta content="yes" name="mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="developer-style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="developer-functions.js" type="text/javascript"></script>
<title>Stuur ons feedback</title>
<meta content="keywords" name="keywords" />
<meta content="uitleg van de pagina" name="description" />
</head>

<body>
<div id="topbar">
<div id="leftnav">
<a href="index.php" onclick="index.php">Homepage</a>
</div>
</div>

<div id="content">

<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Deze functie werkt nog niet!";
    }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $onderwerp = $_REQUEST['onderwerp'] ;
    $bericht = $_REQUEST['bericht'] ;
    mail("jimmy93@live.nl", "Onderwerp: $onderwerp",
    $bericht, "From: $email" );
    echo "Bedankt voor de feedback";
    }
  }
else
  {//if "email" is not filled out, display the form
  echo "<form method='post' action='feedback.php'>
  Email: <input name='email' type='text' /><br />
  Onderwerp: <input name='onderwerp' type='text' /><br />
  Bericht:<br />
  <textarea name='bericht' rows='15' cols='40'>
  </textarea><br />
  <input value='Verstuur email' type='submit' />
  </form>";
  }
?>
</div>

<div id="footer">
<a class="noeffect" href="over.html">gemaakt door SSS301</a></div>
</div>


</body>
</html>