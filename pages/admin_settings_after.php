<?php 
include('connection.php');

$a=$_REQUEST['pswd'];

mysql_query("update admin_login set admin_pswd='$a'");

header("location:admin_settings.php");
?>