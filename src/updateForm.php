<?php
    require 'dbcon.php';
    require 'registrationForm.php';
	$id = $_POST['id'];
	$type = $_POST['type'];
    $query="SELECT * FROM comman_data where id='$id' AND reg_type = '$type'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
        $row=mysqli_fetch_assoc($result);

        $type = $row["reg_type"];
        $id = $row["id"];
        $fname = $row["first_name"];
        $lname = $row["last_name"];
        $dep = $row["department"];
        $dob = $row["dob"];
        $phone = $row["phone"];
        $email = $row["email"];
        $gender = $row["gender"];
        $status = $row["status"];
        $statusDate = $row["status_date"];
        $address = $row["address"];	
        
    }

?>

<script>
var s = "<?php echo $gender;?>";
var id = "<?php echo $id;?>";
var type = "<?php echo $type;?>";

if('Student' == type)
{
    document.getElementById('enroll').value=id;
    document.getElementById("enroll").style.backgroundColor = "#9D9DB0"; 
    document.getElementById('enroll').readOnly=true;
    document.getElementById('status').value="<?php echo $status;?>";
    document.getElementById('statusDate').value="<?php echo $statusDate;?>";
}
else{
    document.getElementById('tId').value=id;
    document.getElementById("tId").style.backgroundColor = "#9D9DB0"; 
    document.getElementById('tId').readOnly=true;
    document.getElementById('status').value="<?php echo $status;?>";
    document.getElementById('statusDate').value="<?php echo $statusDate;?>";
}
 document.getElementById('fname').value="<?php echo $fname;?>";
 document.getElementById('lname').value="<?php echo $lname;?>";
 document.getElementById('dep').value="<?php echo $dep;?>";
 document.getElementById('dob').value="<?php echo $dob;?>";
 document.getElementById('mobNum').value="<?php echo $phone;?>";
 document.getElementById('email').value="<?php echo $email;?>";
 document.getElementById('address').value="<?php echo $address;?>";
 

 if('Male'== s)
 {
    document.getElementById('gender').checked="<?php echo $gender;?>";
 }
 else
 {
    document.getElementById('gender1').checked="<?php echo $gender;?>";
 }
 
 document.getElementById('SaveBtn').innerHTML='<button class="btn btn-dark" onclick="return saveUpdatedData()">Update</button>';

document.getElementById('addMoreBtn').innerHTML='<button onclick="return addMore()">add more</button>'
var i=0;
function addMore()
{
    i++;
    // console.log(i);
    if('Student' == type)
    {
        document.getElementById('addMore').innerHTML+='<span id="'+i+'"><select name="status[]" id="status"><option disabled selected hidden >Choose Status</option><option value="Enquery">Enquery</option><option value="Confirm">Confirm</option><option value="Registered">Registered</option><select><input type="date" name="statusDate[]" id="statusDate"><button onclick="return deleteMore('+i+')">Delete</button><br></span>';
        
    }
    else{
        document.getElementById('addMore').innerHTML+='<span id="'+i+'"><select name="status[]" id="status"><option disabled selected hidden >Choose Status</option><option value="Enquery">Enquery</option><option value="Interview">Interview</option><option value="Confirm">Confirm</option><option value="Registered">Registered</option><select><input type="date" name="statusDate[]" id="statusDate"><button onclick="return deleteMore('+i+')">Delete</button><br></span>';

    }
    return false;
}

function deleteMore(i)
{
    var par = document.getElementById('addMore');
    var el = document.getElementById(i);

    par.removeChild(el);
   
    return false;

}