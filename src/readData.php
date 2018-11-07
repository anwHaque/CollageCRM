<div id="displayStudent">

<div id="addStdBtn">
	
	<button onclick="return registration('Teacher')" class="btn btn-primary">Add Teacher</button>
	<!-- <button onclick="return registration('student')" class="btn btn-primary">Add </button> -->
</div><br>

<script>
	if("Student" == '<?php echo $_POST['type'] ?>')
	{
		
		document.getElementById('addStdBtn').innerHTML='<button onclick="return registration(\'Student\')" class="btn btn-primary">Add Stdent</button>';
	}
 </script>

<table border="2" style="text-align: center;" >
<?php 
    require 'dbcon.php';
	$type = $_POST['type'];
	
	// $selectStatus = "SELECT state, MAX(`status_date`) FROM `status` GROUP BY '$type'";
	// $result1=mysqli_query($con,$selectStatus);
	// if(mysqli_num_rows($result1)>0)
	// {
	// 	while($row=mysqli_fetch_assoc($result1))
	// 	{
	// 	echo $s = $row["state"];
	// 	echo $d = $row["MAX(`status_date`)"];
	// 	}
	// }
	// else{
	// 	echo "error in status";
	// }

	$query="SELECT * FROM comman_data WHERE reg_type = '$type' ";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		echo '<tr>
            <th>Image</th>
            <th>Enroll Number</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Department</th>
			<th>Date Of Birth</th>
			<th>Mobile Number</th>
			<th>Email ID</th>
			<th>Gender</th>
			<th>Status</th>
			<th>Date</th>
			<th>Address</th>
			<th>Edite</th>
			<th>Delete</th>
			</tr>';
		
		while($row=mysqli_fetch_assoc($result))
		{
			$id = $row["id"];
			$type = $row["reg_type"];
			echo '<tr>
				<td><img src="'.$row["img"].'" alt="'.$row["first_name"].'" height="100" width="100" class="rounded-circle"></td>
                <td>'.$row["id"].'</td>
                <td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["department"].'</td>
				<td>'.$row["dob"].'</td>
				<td>'.$row["phone"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["gender"].'</td>
				<td>'.$row["status"].'</td>
				<td>'.$row["status_date"].'</td>
				<td>'.$row["address"].'</td>
				<td><button onclick="return getEditForm('.$id.',\''.$type.'\')">Edite</button</td>
				<td><button onclick="return operationOnData('.$id.',\''.$type.'\')">Delete</button</td>
			</tr>';	 
		}
	}
	else
	{
		echo"<h1>No ".$type." Record Found</h>";
	}
	

	
?>

</table>

</div>

<div id="dipo">
</div>

	

