<?php 
include('stud_header.php');
$a=$_REQUEST['sub'];
$b=$_REQUEST['com'];
$date = date('Y-m-d H:i:s');

mysql_query("insert into admin_msg(amsub,sid,amcom,amdate,amtime) values('$a','$sid','$b',now(),now())");

header("location:complaint.php");
?>