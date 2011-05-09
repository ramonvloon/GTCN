<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta content="yes" name="mobile-web-app-capable" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
        <meta content="keywords" name="keywords" />
        <meta content="uitleg van de pagina" name="description" />
        <link href="developer-style.css" rel="stylesheet" media="screen" type="text/css" />
        <script src="developer-functions.js" type="text/javascript"></script>
        <title>SSS301 web app --Frontpage--</title>
        
        <script type="text/javascript">
        function algemeneVoorwaarden() {
            document.getElementById('register').disabled = !document.getElementById('voorwaarden').checked;
        }

		function algVoorwaarden(url) {
			popupWindow = window.open(
			url,'popUpWindow','height=200,width=200,left=250,top=50,resizable=no,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
		}
		</script>
	</head>
    <body>
        <div id="topbar">
            <div id="duoselectionbuttons">
                <a href="index.php">Homepage</a><a href="loginscherm.php">Login</a>
            </div>    
        </div>
        <?php
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
               // Settings 
                $host="localhost";
                $port="8006";
                $username="sss301";
                $password="team301";
                $db_name="logindb";
                $tbl_name="members";
                // End of settings

				$host = $host . ":" . $port;
                mysql_connect($host, $username, $password)or die("Can't connect with mysql: ".mysql_error());
                mysql_select_db($db_name)or die("Database doesn't exist of isn't reachable");

                $myusername = mysql_real_escape_string($_POST['username']);
                $mypassword = md5(mysql_real_escape_string($_POST['password']));
                $myemail = mysql_real_escape_string($_POST['email']);

                $checkgebruiker = mysql_query("SELECT username FROM $tbl_name WHERE username='" . $myusername . "';");
				$checkemail = mysql_query("SELECT email FROM $tbl_name WHERE email='" . $myemail . "';");
				
				if (empty($myusername) && empty($_POST['password']) && empty($_POST['email'])){
					echo "All fields are empty, Please try again.";
					exit();
				}
				
				if (empty($myusername) && empty($_POST['password'])) {
					echo "Username and Password are empty, Please try again.";
					exit();
				}
				
				if (empty($myusername) && empty($_POST['email'])) {
					echo "Username and Email are empty, Please try again.";
					exit();
				}
				
				if (empty($_POST['password']) && empty($_POST['email'])) {
					echo "Password and Email are empty, Please try again.";
					exit();
				}
				
				if (empty($myusername)){
					echo "Username is empty, Please try again.";
					exit();
				}
				
				if (empty($_POST['password'])){
					echo "Password is empty, Please try again.";
					exit();
				}
				
				if (empty($_POST['email'])){
					echo "Email is empty, Please try again.";
					exit();
				}
				
                if (mysql_num_rows($checkgebruiker) > 0){
                    echo "Username already exists, Please try again.";
                    exit();
                }
				
				if (mysql_num_rows($checkemail) > 0){
                    echo "Email already exists, Please try again.";
                    exit();
                }
				
				if(!filter_var($myemail, FILTER_VALIDATE_EMAIL)){
					echo "Email address not valid! Please try again.";
					exit();
				}
				
                $sql = "INSERT INTO $tbl_name (`username`, `password`, `email`) VALUES ('$myusername', '$mypassword', '$myemail');";

                mysql_query($sql) or die(mysql_error());
                mysql_close();
					echo "Succesfully Registered";
					echo "<br><br> Now you're able to: "?> <a href = "loginscherm.php">Login</a><?php;
					exit();
                foreach ($_POST as $var) {
                    unset($var);
                }
            }
        ?>
        <table>
            <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onSubmit=return document.getElementById('register').disabled;>
                        <td>
                            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                                <tr>
                                    <td colspan="3"><strong>Register </strong></td>
                                </tr>
                                <tr>
                                    <td width="78">Username</td>
                                    <td width="6">:</td>
                                    <td width="294"><input name="username" type="text" id="username"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input name="password" type="password" id="password"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input name="email" type="text" id="email"></td>
                                </tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="checkbox" name="voorwaarden" id="voorwaarden" onClick="algemeneVoorwaarden();">Ik ga akkoord met de <a href="JavaScript:algVoorwaarden('av.php');">Algemene Voorwaarden</a><br>
                                    <input type="submit" name="button" value="Registreer" id="register">
                                    <script type="text/javascript">algemeneVoorwaarden();</script>
                                </td>
                            </table>
                        </td>
                    </form>
                </tr>
            </table>
        </table>
    </body>
</html>
