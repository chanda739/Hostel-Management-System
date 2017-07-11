<?php 
//session_start(); 
include('connection.php');

//$usr=$_SESSION['user_id'];
$a=$_REQUEST['pswd'];
$b=$_REQUEST['addr'];
$c=$_REQUEST['pc'];
$d=$_REQUEST['phno'];
$e=$_REQUEST['mobno'];
$f=$_REQUEST['lgnm'];
$g=$_REQUEST['lgaddr'];
$h=$_REQUEST['lgpc'];
$i=$_REQUEST['lgphno'];
$j=$_REQUEST['lgmobno'];

mysql_query("update stud_registration set spswd='$a',saddr='$b'");

header("location:settings.php");
?>