<html>
<head>
<title> Registration Form</title>

<!-- <link rel="stylesheet" href="../../css/addStudentForm.css"> -->

</head>
 
<body>
<h1 class="headingText">REGISTRATION FORM</h1>
<form action="" method="post" enctype="multipart/form-data" id="registrationForm" >
	<table align="center" cellpadding = "10" class="studentForm">

		<!----- Enrollment Number---------------------------------------------------------->

		<tr>
			<td ><span id="change1">TEACHER ID</span></td>
			<td><span id="change2"><input type="text" name="tId" id="tId" maxlength="30" /></span> <span class="star">*</span></td>
		</tr>
		<?php
    $va = $_POST['type'];
 ?>
 <script>
 if("Student" == '<?php echo "$va" ?>')
 {
    document.getElementById('change1').innerHTML='ENROLL NO';
    document.getElementById('change2').innerHTML='<input type="text" name="enroll" id="enroll" maxlength="30" />';
	
	document.getElementById('statusChange').innerHTML='<select name="status[]" id="status" ><option disabled selected hidden >Choose Status</option><option value="Enquery">Enquery</option><option value="Confirm">Confirm</option><option value="Registered">Registered</option></select>';
 }

 </script>
		<!----- First Name ---------------------------------------------------------->
		<tr>
			<td>FIRST NAME</td>
			<td><input type="text" name="fname" id="fname" maxlength="30" />
				<span class="star">*</span>
			(max 30 characters a-z and A-Z)
			</td>
		</tr>
		 
		<!----- Last Name ---------------------------------------------------------->
		<tr>
			<td>LAST NAME</td>
			<td><input type="text" name="lname" id="lname" maxlength="30" />
			(max 30 characters a-z and A-Z)
			</td>
		</tr>
		
		<!----- Upload Image---------------------------------------------------------->

		<tr>
			<td>Uploade Image</td>
			<td><input type="file" name="uploadImg" id="uploadImg" maxlength="100" ></td>
			
		</tr>

	
		<!----- Department---------------------------------------------------------->

		<tr>
		<td>Department</td>
		<td>
			<select name="dep" id="dep" maxlength="30"  >
				<option disabled selected hidden >Choose Departement</option>
				<option value="CSE">CSE</option>
				<option value="MEC">MEC</option>
				<option value="EC">EC</option>
				<option value="CIV">CIV</option>
				<option value="ANE">ANE</option>	
			</select>
			<span class="star">*</span>
		</td>
		</tr>
		 
		<!----- Date Of Birth -------------------------------------------------------->
		<tr>
			<td>DATE OF BIRTH</td>
		 	<td><input type="date" name="dob" id="dob"  /></td>
		</tr>
		 
		<!----- Email Id ---------------------------------------------------------->
		<tr>
			<td>EMAIL ID</td>
			<td><input type="text" name="email" id="email" maxlength="100"  /></td>
		</tr>
		 
		<!----- Mobile Number ---------------------------------------------------------->
		<tr>
			<td>MOBILE NUMBER</td>
			<td>
			<input type="text" name="mobNum" id="mobNum" maxlength="10" />
			(10 digit number)
			</td>
		</tr>
		 
		<!----- Gender ----------------------------------------------------------->
		<tr>
			<td>GENDER</td>
			<td>
				<input type="radio" name="gender" id="gender" value="Male" />Male
				<input type="radio" name="gender" id="gender1" value="Female" />Female
				<span class="star">*</span>
			</td>
		</tr>
		 
		
	<!----- STATUS ---------------------------------------------------------->
		<tr>
			<td>STATUS </td>
			<td><span id="statusChange">
			<select name="status[]" id="status">
				<option disabled selected hidden >Choose Status</option>
				<option value="Enquery">Enquery</option>
				<option value="Interview">Interview</option>
				<option value="Confirm">Confirm</option>
				<option value="Registered">Registered</option>
			<select></span>
			<input type="date" name="statusDate[]" id="statusDate" ></td>
		</tr>
		<tr>
			<td><span id="addMoreBtn"></span></td>
			<td>
				<span id="addMore"></span>
			</td>
		</tr>
		
		 

		 <!----- ADD MORE STATUS ---------------------------------------------------------->
		
			
		


		 <!----- Address ---------------------------------------------------------->
		<tr>
			<td>ADDRESS <br /><br /><br /></td>
			<td><textarea name="address" id="address" rows="4" cols="30" ></textarea></td>
		</tr>

		 
		<!----- Submit and Reset ------------------------------------------------->
		<tr>
			<td colspan="2" align="center">
			<span id="SaveBtn">
				<button class="btn btn-dark" onclick="return saveRegistration()" name="click">Save</button>
			</span>
			<button class="btn btn-light" type="reset">Reset</button>
			</td>
		</tr>
	</table>
</form>
<div id="registrationMessage">
	
</div>
 
 
</body>
</html>
