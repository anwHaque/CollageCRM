
<?php 
    require 'dbcon.php';

    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
    
	$dep = $_POST['dep'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$phone = $_POST['mobNum'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $statusDate = $_POST['statusDate'];
    $address = $_POST['address'];
    if(!empty($_FILES['uploadImg']['name']))
    {
        $fileName = $_FILES['uploadImg']['name'];
        $tempName = $_FILES['uploadImg']['tmp_name'];
        $folder = "../assets/image/uplodedImage/".$fileName;

        move_uploaded_file($tempName, $folder);
 
        $imageSource = "assets/image/uplodedImage/".$fileName;		
    }

   

    if(isset($_POST['enroll']))
    {
        if(!empty($_POST['enroll']) && !empty($_POST['fname']) && !empty($_POST['dep']) && !empty($_POST['gender']))
        {
            $id = $_POST['enroll'];
            $type = "Student";
            if(!empty($_FILES['uploadImg']['name']))
            {
		        $query="UPDATE comman_data SET first_name = '$fname', last_name = '$lname', img = '$imageSource', department = '$dep', dob = '$dob', email = '$email', phone = '$phone', gender = '$gender', status = '$status', status_date ='$statusDate', address = '$address' WHERE id = '$id' AND reg_type ='$type'";
                queryRun($con,$query,$type);
            }
            else
            {
                $query="UPDATE comman_data SET first_name = '$fname', last_name = '$lname', department = '$dep', dob = '$dob', email = '$email', phone = '$phone', gender = '$gender', address = '$address' WHERE id = '$id' AND reg_type ='$type'";
                for($i = 0; $i < sizeof($status); $i++)
                {
                    $statusQuery="INSERT INTO status(user_id, reg_type, state, status_date) VALUES ('$id','$type','$status[$i]','$statusDate[$i]')";
                
                    $result=mysqli_query($con,$statusQuery);
                }
                if($result)
                {
                    echo "status inserted";
                }
                else
                {
                    echo " status not inserted";
                }
            
                
                queryRun($con,$query,$type);
            }
        }
        else
        {
            ?>
                <script>
                    swal("Opps...", "Enter Required Detail of Student", "error");
                    
                </script>
            <?php 
        }
        
    }

    else
    {
        if(isset($_POST['tId']))
        {

        
            if(!empty($_POST['tId']) && !empty($_POST['fname']) && !empty($_POST['dep']) && !empty($_POST['gender']))
            {
                $id = $_POST['tId'];
                $type = "Teacher";
                if(!empty($_FILES['uploadImg']['name']))
                {
                    $query="UPDATE comman_data SET first_name = '$fname', last_name = '$lname', img = '$imageSource', department = '$dep', dob = '$dob', email = '$email', phone = '$phone', gender = '$gender', status = '$status', status_date ='$statusDate', address = '$address' WHERE id = '$id' AND reg_type ='$type'";
                    queryRun($con,$query,$type);
                }
                else
                {
                    $query="UPDATE comman_data SET first_name = '$fname', last_name = '$lname', department = '$dep', dob = '$dob', email = '$email', phone = '$phone', gender = '$gender', status = '$status', status_date ='$statusDate', address = '$address' WHERE id = '$id' AND reg_type ='$type'";            
                    for($i = 0; $i < sizeof($status); $i++)
                    {
                        $statusQuery="INSERT INTO status(user_id, reg_type, state, status_date) VALUES ('$id','$type','$status[$i]','$statusDate[$i]')";
                    
                        $result=mysqli_query($con,$statusQuery);
                    }
                    if($result)
                    {
                        echo "status inserted";
                    }
                    else
                    {
                        echo " status not inserted";
                    }
                    // queryRun($con,$query,$type);
                }
            }
        }
        else
        {
            ?>
                <script>
                    swal("Opps...", " Enter Required Details of Teacher", "error");
                    
                </script>
           <?php 
        }
    }
   
    
function queryRun($con,$query,$type)
{
    $result=mysqli_query($con,$query);
    if($result)
    {
        ?>
            <script>
                swal('<?php echo "$type"?>', " Data Updated Successful", "success");
                readData('<?php echo "$type"?>');      
            </script>
        <?php 
    }	
    else 
    {
        ?>
            <script>
                swal("Opps...", " Somthing Wrong here", "error");    
            </script>
        <?php 
    }
}          
	
?>
