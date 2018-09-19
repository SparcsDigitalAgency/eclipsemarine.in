<?php 
	$path = ($path) ?: './';
	$http = ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != 'off')) ? 'https' : 'http';
	$index = ($index) ? $index : (($path == './') && preg_match("/index.php/",$_SERVER['SCRIPT_FILENAME']));
	$services =  (preg_match("/services.php/",$_SERVER['SCRIPT_FILENAME']));
	$contact =  (preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']));
	$contact_mail =  (preg_match("/contact_mail.php/",$_SERVER['SCRIPT_FILENAME']));
	$quote =  (preg_match("/quote.php/",$_SERVER['SCRIPT_FILENAME']));
	$quote_mail =  (preg_match("/quote_mail.php/",$_SERVER['SCRIPT_FILENAME']));
	
	$site = (preg_match("/localhost/",$_SERVER['HTTP_HOST'])) ? 'http://localhost/~thomasaugusti/eclipsemarine.in/' : 'http://www.eclipsemarine.in';
?>
