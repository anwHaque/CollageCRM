<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="sweetAlert/sweetalert2.all.min.js"></script>
	<script src="jquery/jquery.min.js"></script>
	<link rel="stylesheet" href="sweetAlert/sweetalert2.min.css">
</head>
<body>


<?php 
	require 'dbcon.php';

	if (isset($_POST['loginBtn'])) 
	{

		if (!empty($_POST['loginUserName']) && !empty($_POST['loginPass']) )
		{
			$loginUserName = $_POST['loginUserName'];
			$loginPass = $_POST['loginPass'];

			$query="SELECT * FROM admin_register where uname = '$loginUserName' and pass ='$loginPass'";
			$result=mysqli_query($con,$query);
					
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					$uname = $row['name'];

					if ($row['uname'] == $loginUserName) 
					{

						?>
						<script>
							
							function f(id)
							{
								var d = "Welcome "+id;
								swal({
							    	title:d ,
							    	text: "Your are Logged In Successfully",
							    	type: "success"
								}).then(function() {
							    window.location = "main.php";
							});
							
							}
							var v1= '<?php  echo "$uname"; ?>';
							f(v1);
						</script>
						<?php
						
					}
				}
			}
			else
			{

				?>
				<script>
					 function sweet()
				       {
				        swal({
						  type: 'error',
						  title: 'Oops...',
						  text: 'Please Enter Correct user name & Password',
						  // footer: '<a href>Why do I have this issue?</a>'
						});
				       }
					sweet();
				</script>
				
				<?php

			}
		}

		else
		{
		
			?>
			<script>
				function sweet()
		       {
		        swal({
					type: 'error',
					title: 'Oops...',
					text: 'Please Enter Detail',
					// footer: '<a href>Why do I have this issue?</a>'
				});
		       }
			sweet();

			</script>
			<?php


		}	
	}
	
	if (isset($_POST['registerBtn'])) 
	{
		if (!empty($_POST['signUpFullName']) && !empty($_POST['signUpUserName']) && !empty($_POST['signUpUserPass'])) 
		{
			$fName = $_POST['signUpFullName'];
			$uName = $_POST['signUpUserName'];
			$pass = $_POST['signUpUserPass'];

			$query="INSERT INTO admin_register(name,uname,pass) VALUES ('$fName','$uName','$pass')";
			$result=mysqli_query($con,$query);

			if($result)
			{
				?>
					<script>
						function sweet(id)
				       	{
				        	var d = "Welcome "+id;
				            swal(d, "Your Registration is Successful", "success");
				        }
				       	var v1= '<?php echo "$fName"; ?>';    
						sweet(v1);
					</script>

				<?php
					
			}	
			else 
			{
				?>
				<script>
					function sweet()
				    {
				        swal({
						  type: 'error',
						  title: 'Oops...',
						  text: 'Somthing Wrong!',
						  // footer: '<a href>Why do I have this issue?</a>'
						});
				    }
					sweet();
				</script>

				<?php
			}
		}
		else
		{
				
			?>
			<script>
				function sweet()
			    {
			    	swal({
						type: 'error',
						title: 'Oops...',
						text: 'Please Enter Detail',
						// footer: '<a href>Why do I have this issue?</a>'
					});
			    }
				sweet();
			</script>
			<?php
		}
	}
 ?>

</body>
</html>

