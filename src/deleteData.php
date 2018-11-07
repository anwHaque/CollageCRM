<?php
	require 'dbcon.php';
	if("Student" == $_POST['type'])
	{
		$type = $_POST['type'];
	}
	else
	{
		$type = $_POST['type'];
	}
		
	
	$id = $_POST['id']; 

	$query="DELETE FROM comman_data WHERE id = '$id' AND  reg_type = '$type' ";
	$result=mysqli_query($con,$query);
	if($result)
	{
		?>
			<script>
				swal('<?php echo $id ?>', " Data Deleted From DataBase", "success");
				readData('<?php echo "$type"?>');
			</script>
				
		<?php
	}

	else
	{
		echo "somthing wrong ";
	}


?>