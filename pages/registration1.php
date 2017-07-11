<?php include('gen_header.php');?>
 <div id="page-wrapper">
    <div class="container">
        <div class="row">
			<div class="col-md-10">
			<h1 class="page-header">Registration Form</h1>	
				<form role="form" class="form-horizontal" method="post" enctype="multipart/form-data" action="registration_after.php" name="reg_form">
					<div class="form-group">				
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-5">
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
						</div>
						<div class="col-sm-5">
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
						</div>
					</div>
					
					<div class="form-group">
						<label for="class" class="col-sm-2 control-label">Class</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="class" name="class" placeholder="Class">
						</div>
					</div>
				
					<div class="form-group">
						<label for="branch" class="col-sm-2 control-label">Branch</label>
						<div class="col-sm-10">
						<select id="branch" class="form-control" name="branch">
							<option value="Select Branch">Select Branch</option>
							<option value="CIVIL">Civil Engg.</option>
							<option value="ME">Mechanical Engg.</option>
							<option value="EE">Electrical Engg.</option>
							<option value="ETC">Electronics & Telecomm. Engg.</option>
							<option value="CSE">Computer Sc. &Engg.</option>
							<option value="IT">Information Technology</option>
							<option value="EEE">Electrical & Electronics Engg.</option>
							<option value="MTECH">MTECH</option>
							<option value="MBA">MBA</option>
							<option value="MCA">MCA</option>
						</select>							
						</div>
					</div>
					
					<div class="form-group">
						<label for="semester" class="col-sm-2 control-label">Semester</label>
						<div class="col-sm-10">
						<select id="semester" name="semester" class="form-control">
							<option value="Select Semester">Select Semester</option>
							<script type="text/javascript">	
						for(i=1;i<=8;i++)
						{
							document.write("<option value='"+i+"'>" + i + "</option>");
						}					
						</script>							
						</select>
						</div>
					</div>					
										
					<div class="form-group">
						<label for="yearofadmission" class="col-sm-2 control-label">Year of Admission</label>
						<div class="col-sm-10">
						<select id="yearofadmission" name="yearofadmission" class="form-control">
						<option value="Year of Admission">Year of Admission</option>
						<script type="text/javascript">	
						for(i=2012;i<=2016;i++)
						{
							document.write("<option value='"+i+"'>" + i + "</option>");
						}					
						</script>						
						</select>					
						</div>
					</div>
					
					<div class="form-group">
						<label for="fathersname" class="col-sm-2 control-label">Father's Name</label>
						<div class="col-sm-5">
						<input type="text" class="form-control" id="fathersfirstname" name="fathersfirstname" placeholder="First Name">
						</div>
						<div class="col-sm-5">
						<input type="text" class="form-control" id="fatherslastname" name="fatherslastname" placeholder="Last Name">
						</div>
					</div>

					<div class="form-group">
						<label for="dateofbirth" class="col-sm-2 control-label">Date of Birth</label>
						<div class="col-sm-10">
						<input type="date" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="Date of Birth">
						</div>
					</div>				
					
					<div class="form-group">
						<label for="gender" class="col-sm-2 control-label">Gender</label>
						<div class="col-sm-10">
						<select id="gender" name="gender" class="form-control">
						<option value="Select Gender">Select Gender</option>
						<option value="M">Male</option>
						<option value="F">Female</option>
						</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="bloodgroup" class="col-sm-2 control-label">Blood Group</label>
						<div class="col-sm-10">
						<select id="bloodgroup" name="bloodgroup" class="form-control">
							<option>Select Blood Group</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>						
						</div>
					</div>
					
					<div class="form-group">
						<label for="permanentaddress" class="col-sm-2 control-label">Permanent Address</label>
						<div class="col-sm-10">
						<textarea class="form-control" rows="3" id="permanentaddress" name="permanentaddress">Permanent address</textarea>						
						</div>
					</div>
					
					<div class="form-group">
						<label for="pincode" class="col-sm-2 control-label">Pincode</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode">
						</div>
					</div>
					
					<div class="form-group">
						<label for="stdcode" class="col-sm-2 control-label">Phone no. with STD code</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="stdcode" name="stdcode" placeholder="Phone no. with STD code">
						</div>
					</div>
					
					<div class="form-group">
						<label for="mobileno" class="col-sm-2 control-label">Mobile No.</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="mobileno" name="mobileno" placeholder="Mobile No.">
						</div>
					</div>
					
					<div class="form-group">				
						<label for="localname" class="col-sm-2 control-label">Local Guardian's Name</label>
						<div class="col-sm-5">
						<input type="text" class="form-control" id="localfirstname" name="localfirstname" placeholder="First Name">
						</div>
						<div class="col-sm-5">
						<input type="text" class="form-control" id="locallastname" name="locallastname" placeholder="Last Name">
						</div>
					</div>
		
					<div class="form-group">
						<label for="localguardianaddress" class="col-sm-2 control-label">Local Guardian's Address</label>
						<div class="col-sm-10">
						<textarea class="form-control" rows="3" id="localaddress" name="localaddress">Local Guardian's address</textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label for="pincode" class="col-sm-2 control-label">Pincode</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="lpincode" name="lpincode" placeholder="Pincode">
						</div>
					</div>
					
					<div class="form-group">
						<label for="stdcode" class="col-sm-2 control-label">Phone no. with STD code</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="lstdcode" name="lstdcode" placeholder="Phone no. with STD code">
						</div>
					</div>
					
					<div class="form-group">
						<label for="mobileno" class="col-sm-2 control-label">Mobile No.</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="lmobileno" name="lmobileno" placeholder="Mobile No.">
						</div>
					</div>
					
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email ID</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email address">
						</div>
					</div>

					<div class="form-group">
						<label for="upload" class="col-sm-2 control-label">Upload Your Photo</label>
						<div class="col-sm-10">
						<label class="sr-only" for="inputfile">Choose File</label>
						<input type="file" id="photo">
						</div>
					</div>
					
					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="username" name="username" placeholder="Username">
						</div>
					</div>
					
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</div>
					<button type="button" class="btn btn-default" onClick="check_validation();">Submit</button>
					<hr>
				</form>			
<script>
		function check_validation()
		{
			if(document.reg_form.firstname.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.firstname.focus();
			}			
			else if(document.reg_form.lastname.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.lastname.focus();
			}
			else if(document.reg_form.class.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.class.focus();
			}
			else if(document.reg_form.fathersfirstname.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.firstname.focus();
			}			
			else if(document.reg_form.fatherslastname.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.lastname.focus();
			}
			/*else if(document.reg_form.dateofbirth.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.dateofbirth.focus();
			}
			else if(document.reg_form.gen.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.gen.focus();
			}
			else if(document.reg_form.bloodgroup.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.bloodgroup.focus();
			}*/
			else if(document.reg_form.permanentaddress.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.permanentaddress.focus();
			}
			else if(document.reg_form.pincode.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.pincode.focus();
			}
			else if(isNaN(document.reg_form.pincode.value))
			{
				alert("Enter numeric value for pincode!");
				document.reg_form.pincode.focus();
			}
			else if(document.reg_form.pincode.value.length!=6)
			{
				alert("Enter 6 digits for pincode!");
				document.reg_form.pincode.focus();
			}
			else if(document.reg_form.mobileno.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.mobileno.focus();
			}
			else if(isNaN(document.reg_form.mobileno.value))
			{
				alert("Enter numeric value for contact number!");
				document.reg_form.mobileno.focus();
			}
			else if(document.reg_form.mobileno.value.length!=10)
			{
				alert("Enter 10 digits for contact number!");
				document.reg_form.mobileno.focus();
			}
			else if(document.reg_form.localfirstname.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.localfirstname.focus();
			}			
			else if(document.reg_form.locallastname.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.locallastname.focus();
			}
			else if(document.reg_form.localaddress.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.localaddress.focus();
			}
			else if(document.reg_form.lpincode.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.lpincode.focus();
			}
			else if(isNaN(document.reg_form.lpincode.value))
			{
				alert("Enter numeric value for pincode!");
				document.reg_form.lpincode.focus();
			}
			else if(document.reg_form.lpincode.value.length!=6)
			{
				alert("Enter 6 digits for pincode!");
				document.reg_form.lpincode.focus();
			}
			else if(document.reg_form.lmobileno.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.lmobileno.focus();
			}
			else if(isNaN(document.reg_form.lmobileno.value))
			{
				alert("Enter numeric value for contact number!");
				document.reg_form.lmobileno.focus();
			}
			else if(document.reg_form.lmobileno.value.length!=10)
			{
				alert("Enter 10 digits for contact number!");
				document.reg_form.lmobileno.focus();
			}
			else if(document.reg_form.email.value=="")
			{
				//alert("Feild cannot be empty!");
				document.reg_form.email.focus();
			}
			else if(document.reg_form.email.value.indexOf('@')<0 || document.reg_form.email.value.indexOf('@')!=document.reg_form.email.value.lastIndexOf('@'))
			{
				alert("Enter correct email id!");
				document.reg_form.email.focus();
			}		
			else if(document.reg_form.username.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.username.focus();
			}
			else if(document.reg_form.password.value=="")
			{
				alert("Feild cannot be empty!");
				document.reg_form.password.focus();
			}			
			else
			{
				document.reg_form.submit();
			}
		}
		</script>
	


	
			</div>
			<!-- /.col-lg-10 -->                           
			<div class="col-lg-2">
			</div>
			<!-- /.col-lg-2 -->
        </div><!-- row -->
    </div><!-- container -->                 
</div><!-- page-wrapper -->
 
 </div><!-- wrapper -->
 </body>
</html>