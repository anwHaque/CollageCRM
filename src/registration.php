
<?php 
	require 'dbcon.php';
    if(isset($_POST['enroll']))
    {
        if(!empty($_POST['enroll']) && !empty($_POST['fname']) && !empty($_POST['dep']) && !empty($_POST['gender']))
        {
            $id = $_POST['enroll'];
            $type = "Student";
            $query="SELECT id FROM comman_data WHERE reg_type = '$type' AND id = '$id'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
            {
                ?>
                    <script>
                        swal("Opps...", " Enroll Id Should Be Unique", "error");
                    </script>
                <?php
            }
            
            else
            {
                runQuery($con,$id,$type);
            }    
        }
        else
        {
            ?>
                <script>
                    swal("Opps...", " Please Enter Required Detail", "error");                    
                </script>
            <?php 
        }
    
    }
    else
    {
        if(!empty($_POST['tId']) && !empty($_POST['fname']) && !empty($_POST['dep']) && !empty($_POST['gender']))
        {
            $id = $_POST['tId'];
            $type = "Teacher";
            $query="SELECT * FROM comman_data WHERE reg_type = '$type' AND id = '$id'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
            {
                ?>
                    <script>
                        swal("Opps...", "Teacher Id Should Be Unique", "error");                        
                    </script>
                <?php
            }
            else
            {
                runQuery($con,$id,$type);
            }
        }
        else
        {
            ?>
                <script>
                    swal("Opps...", " Please Enter Required Detail", "error");         
                </script>
            <?php 
        }

    }
       
    function runQuery($con,$id,$type)
    {


		$fname = $_POST['fname'];
		$lname = $_POST['lname'];

		$fileName = $_FILES['uploadImg']['name'];
		$tempName = $_FILES['uploadImg']['tmp_name'];
		$folder = "../assets/image/uplodedImage/".$fileName;
		
		move_uploaded_file($tempName, $folder);

		$imageSource = "assets/image/uplodedImage/".$fileName;
		

		$dep = $_POST['dep'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$phone = $_POST['mobNum'];
		$gender = $_POST['gender'];
		$status = $_POST['status'];
		$statusDate = $_POST['statusDate'];
		$address = $_POST['address'];

		$query="INSERT INTO comman_data (id,reg_type,first_name,last_name,img,department,dob,email,phone,gender,status,status_date,address) VALUES ('$id','$type','$fname','$lname','$imageSource','$dep','$dob','$email','$phone','$gender','$status','$statusDate','$address')";
			
		$result=mysqli_query($con,$query);

		if($result)
		{
			?>
                <script>
                    swal("Conga..", " Registration is Successful", "success");
                    readData('<?php echo "$type"?>');
                </script>
            <?php 
		}	
		else 
		{
			?>
                <script>
                    swal("Opps...", " Somthing Wrong", "error");
                    
                </script>
            <?php 
        }
    }
	
?>


