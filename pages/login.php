<?php session_start(); ?>
<?php
include("connection.php");
$a=$_REQUEST['un'];
$b=$_REQUEST['pwd'];

$rs_admin_login=mysql_query("select admin_un,admin_pswd from admin_login",$con);
$rs_stud_registration=mysql_query("select susername,spswd from stud_registration",$con);
if(mysql_num_rows($rs_admin_login)>0 || mysql_num_rows($rs_stud_registration)>0)
{
$row_admin=mysql_fetch_array($rs_admin_login);
if($row_admin['admin_un']==$a && $row_admin['admin_pswd']==$b)
    {
		header("location:admin.php");
    }
else
{
while($row_stud=mysql_fetch_array($rs_stud_registration))
 {
	 if($row_stud['susername']==$a && $row_stud['spswd']==$b)
    {
		$rs=mysql_query("select sid,sname from stud_registration where susername='$a' AND spswd='$b' ",$con);
		$row=mysql_fetch_array($rs);
		$_SESSION['user_name']=$row['sname'];
		$_SESSION['user_id']=$row['sid'];
		header("location:student.php");
    }
else if(($row_admin['admin_un']!=$a && $row_admin['admin_pswd']==$b) || $row_stud['susername']!=$a && $row_stud['spswd']==$b)
  	{
		header("location:index.php?msg=0");
	}
else if(($row_admin['admin_un']==$a && $row_admin['admin_pswd']!=$b) || $row_stud['susername']==$a && $row_stud['spswd']!=$b)
  	{
		header("location:index.php?msg=1");
	}
}
}
}
else
{
	header("location:index.php?msg=3");
}

?>