<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
    <body>
        <div id="topbar">
            <div id="duoselectionbuttons">
                <a href="index.php">Homepage</a><a href="registreer.php">Registreer</a>
            </div>    
        </div>
		<?php
			if (isset($_POST['username']) && isset($_POST['password'])) {
				// Settings
				$host="localhost";
				$port=3306;
				$username="sss301";
				$password="team301";
				$db_name="logindb";
				$tbl_name="members";
				// End of Settings
				
				$host = $host . ":" . $port;
				mysql_connect($host, $username, $password)or die("cannot connect    ".mysql_error());
				mysql_select_db($db_name)or die("cannot select DB");

				$mypassword = md5(mysql_real_escape_string($_POST['password']));
				$myusername = mysql_real_escape_string($_POST['username']);

				$sql = "SELECT * FROM $tbl_name WHERE username='" . $myusername . "' and password='" . $mypassword . "';";
				$result=mysql_query($sql);
				
				if (empty($myusername) && empty($_POST['password'])) {
					echo "Username and Password are empty, Please try again.";
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
				
				if(mysql_num_rows($result) == 1){
					session_start();	
					$_SESSION['username'] = $myusername;
					$_SESSION['password'] = $mypassword;
				}else {
					echo "Wrong Username or Password";
				}
											
				$sql1 = "SELECT `username` FROM `members` WHERE rank=1";
				$result1=mysql_query($sql1);
				
				if (mysql_result($result1, 0) == $_SESSION['username']) {
					echo '<script type="text/javascript" language="JavaScript">window.location="adminpanel.php";</script>';
				}
				
				if (isset($_SESSION['username'])) {
                    echo '<script type="text/javascript" language="JavaScript">window.location="mainpage.php";</script>';
				}else {
                    echo '<script type="text/javascript" language="JavaScript">window.location="loginscherm.php";</script>';
				}
			}
		?>
        <table>
            <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                <tr>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onSubmit=return document.getElementById('login').disabled;>
                        <td>
                            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                                <tr>
                                    <td colspan="3"><strong>Login </strong></td>
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
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" name="button" value="Login" id="login"></td>
                                </tr>
                            </table>
                        </td>
                    </form>
                </tr>
            </table>
        </div>
		</table>
        <div id="footer">
            <a class="noeffect">please <a href="registreer.php">Register</a> or <a href="loginscherm.php">Login</a></a>
            <br><br>
            <a class="noeffect" href="over.html">gemaakt door SSS301</a>
        </div>
    </body>
</html>
