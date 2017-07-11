<?php
include('connection.php');
$a=$_REQUEST['txtname'];
$b=$_REQUEST['txtclass'];
$c=$_REQUEST['txtbrnch'];
$d=$_REQUEST['txtsem'];
$e=$_REQUEST['join_date'];
$f=$_REQUEST['txtfname'];
$g=$_REQUEST['dob'];
$h=$_REQUEST['gen'];
$i=$_REQUEST['txtbldgrp'];
$j=$_REQUEST['res_addr'];
$k=$_REQUEST['pin_code'];
$l=$_REQUEST['con_num'];
$m=$_REQUEST['per_con_num'];
$n=$_REQUEST['txtlgname'];
$o=$_REQUEST['lg_res_addr'];
$p=$_REQUEST['lg_pin_code'];
$q=$_REQUEST['lg_con_num'];
$r=$_REQUEST['lg_per_con_num'];
$s=$_REQUEST['txtusrname'];
$t=$_REQUEST['pswd'];
$u=$_REQUEST['txt_email'];
		
			/*if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
			{
				echo "Please select an image.";
			}
			else
			{*/
				$image= addslashes($_FILES['image']['tmp_name']);
				//$name= addslashes($_FILES['image']['name']);
				$image= file_get_contents($image);
				$image= base64_encode($image);
				//saveimage($name,$image);
				//saveimage($image);
				mysql_query("insert into stud_registration(sname,sclass,sbranch,ssem,syradmission,sfname,sdob,sgender,sbldgrp,saddr,spincode,sphnno,smobno,slgname,slgaddr,slgpincode,slgphnno,slgmobno,susername,spswd,semail,sphoto) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$image')",$con);

			//}
		/*}
		//displayimage();
		function saveimage($image)
		{
			//include('connection.php');
			$query= "insert into stud_registration (sphoto) values ('$image')";
			$rs= mysql_query($query,$con);
			if($rs)
			{
				//echo "<br/> Image uploaded.";
			}
			else
			{
				//echo "<br/> Image not uploaded.";
			}
			//mysql_close($con);
		}*/
	
//$v=$_FILES['photo'];

//$img_name=$l['name'];
//move_uploaded_file($l['temp_name'],'.\\Images\\$img_name');mysql_query("insert into stud_registration(sname,sclass,sbranch,ssem,syradmission,sfname,sdob,sgender,sbldgrp,saddr,spincode,sphnno,smobno,slgname,slgaddr,slgpincode,slgphnno,slgmobno,susername,spswd,semail,sphoto) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$image')",$con);

header("location:student.php");

?>