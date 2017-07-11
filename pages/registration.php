<?php include('gen_header.php');?>
            <div id="page-wrapper">
            <div class="container">
            <div class="row">
                <div class="col-lg-10">
	<form method="post" enctype="multipart/form-data" action="registration_after.php" name="reg_form">
	<br/>
	<table class="table">
                    <tr>
                        <td colspan="2" align="center"><h1>Registration Form</h1></td>
                    </tr>
                    <tr>
                        <td>Name</td><td><input type="text" name="txtname" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Class</td><td><input type="text" name="txtclass" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Branch</td><td><input type="text" name="txtbrnch" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Sem</td><td><input type="text" name="txtsem" class="form-control"></td>
                    </tr>
                     <tr>
                        <td>Year of admission</td><td><input type="text" name="join_date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Father's name</td><td><input type="text" name="txtfname" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td><td><input type="date" name="dob" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Gender</td><td><input type="radio" name="gen" value="male">Male:<input type="radio" name="gen" value="female">Female:</td>
                    </tr>
                    <tr>
                        <td>Blood Group</td><td><input type="text" name="txtbldgrp" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Permanent Address</td><td><textarea type="textarea" name="res_addr" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>Pin Code</td><td><input type="text" name="pin_code" class="form-control"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Phone no. with STD code</td><td><input type="text" name="con_num" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td><td><input type="text" name="per_con_num" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Local Guardian's Name</td><td><input type="text" name="txtlgname" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Address</td><td><textarea type="textarea" name="lg_res_addr" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>Pin Code</td><td><input type="text" name="lg_pin_code" class="form-control"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Phone no. with STD code</td><td><input type="text" name="lg_con_num" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td><td><input type="text" name="lg_per_con_num" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Username</td><td><input type="text" name="txtusrname" class="form-control"></td>
                    </tr>
                    <tr>
                    <td>Enter Password</td><td><input type="password" name="pswd" class="form-control"></td>
                    </tr>
                    <tr>
                    <td>Re-enter Password</td><td><input type="password" name="pswd1" class="form-control"></td>
                    </tr>
                    <td>Email Address</td><td><input type="text" name="txt_email" class="form-control"></td>
                    </tr>
					
                    <tr><td>Upload your photo</td>
                        <td><input type="file" name="image" /></td>
                    </tr>
					<tr>
					<td><input type="button" name="sumit" value="Submit" class="btn btn-primary btn-md" onClick="check_validation();"/></td>
                    </tr>   
                </table>
	</form>
	
</body>
<script>
		function check_validation()
		{
			if(document.reg_form.txtname.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.txtname.focus();
			}
			else if(document.reg_form.txtclass.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.txtclass.focus();
			}
			else if(document.reg_form.txtbrnch.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.txtbrnch.focus();
			}
			else if(document.reg_form.txtsem.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.txtsem.focus();
			}
			else if(document.reg_form.join_date.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.join_date.focus();
			}
			else if(document.reg_form.txtfname.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.txtfname.focus();
			}
			else if(document.reg_form.dob.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.dob.focus();
			}
			else if(document.reg_form.gen.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.gen.focus();
			}
			else if(document.reg_form.txtbldgrp.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.txtbldgrp.focus();
			}
			else if(document.reg_form.res_addr.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.res_addr.focus();
			}
			else if(document.reg_form.pin_code.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.pin_code.focus();
			}
			else if(isNaN(document.reg_form.pin_code.value))
			{
				alert("Enter numeric value for pincode!");
				document.reg_form.pin_code.focus();
			}
			else if(document.reg_form.pin_code.value.length!=6)
			{
				alert("Enter 6 digits for pincode!");
				document.reg_form.pin_code.focus();
			}
			else if(document.reg_form.per_con_num.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.per_con_num.focus();
			}
			else if(isNaN(document.reg_form.per_con_num.value))
			{
				alert("Enter numeric value for contact number!");
				document.reg_form.per_con_num.focus();
			}
			else if(document.reg_form.per_con_num.value.length!=10)
			{
				alert("Enter 10 digits for contact number!");
				document.reg_form.per_con_num.focus();
			}
			else if(document.reg_form.txtlgname.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.txtlgname.focus();
			}
			else if(document.reg_form.lg_res_addr.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.lg_res_addr.focus();
			}
			else if(document.reg_form.lg_pin_code.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.lg_pin_code.focus();
			}
			else if(isNaN(document.reg_form.lg_pin_code.value))
			{
				alert("Enter numeric value for pincode!");
				document.reg_form.pin_code.focus();
			}
			else if(document.reg_form.lg_pin_code.value.length!=6)
			{
				alert("Enter 6 digits for pincode!");
				document.reg_form.lg_pin_code.focus();
			}
			else if(document.reg_form.lg_per_con_num.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.lg_per_con_num.focus();
			}
			else if(isNaN(document.reg_form.lg_per_con_num.value))
			{
				alert("Enter numeric value for contact number!");
				document.reg_form.lg_per_con_num.focus();
			}
			else if(document.reg_form.lg_per_con_num.value.length!=10)
			{
				alert("Enter 10 digits for contact number!");
				document.reg_form.lg_per_con_num.focus();
			}
			else if(document.reg_form.txtusrname.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.txtusrname.focus();
			}
			else if(document.reg_form.pswd.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.pswd.focus();
			}
			else if(document.reg_form.pswd.value!=document.reg_form.pswd1.value)
			{
				alert("Passwords do not match!");
				document.reg_form.pswd1.focus();
			}
			else if(document.reg_form.txt_email.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.txt_email.focus();
			}
			else if(document.reg_form.txt_email.value.indexOf('@')<0 || document.reg_form.txt_email.value.indexOf('@')!=document.reg_form.txt_email.value.lastIndexOf('@'))
			{
				alert("Enter correct email id!");
				document.reg_form.txt_email.focus();
			}
			else
			{
				document.reg_form.submit();
			}
		}
		</script>
 </div>
                
          

                <!-- /.col-lg-10 -->
            
                <!-- /.col-lg-2 -->
    <div class="col-lg-2"></div>
         </div><!-- row -->
         </div><!-- container -->
                  
        </div><!-- page-wrapper -->
 
 </div><!-- wrapper -->
 </body>
</html>
	